const header = document.querySelector('[data-header]');
const navToggle = document.querySelector('[data-nav-toggle]');
const navMenu = document.querySelector('[data-nav-menu]');
const demoForm = document.querySelector('[data-demo-form]');
const scrollMusicLane = document.querySelector('[data-scroll-music-lane]');
const scrollMusicProgress = document.querySelector('[data-scroll-music-progress]');
const scrollMusicNotes = document.querySelector('[data-scroll-music-notes]');
const scrollMusicToggle = document.querySelector('[data-scroll-music-toggle]');

const syncHeader = () => {
    if (!header) {
        return;
    }

    header.classList.toggle('is-scrolled', window.scrollY > 24);
};

syncHeader();
window.addEventListener('scroll', syncHeader);

if (navToggle && navMenu) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('is-open');
    });
}

if (demoForm) {
    demoForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const successMessage = demoForm.querySelector('.form-success');

        if (successMessage) {
            successMessage.hidden = false;
        }
    });
}

if (scrollMusicLane && scrollMusicProgress && scrollMusicNotes) {
    const AudioContextClass = window.AudioContext || window.webkitAudioContext;
    const noteSteps = [0, 2, 4, 7, 9, 12, 14, 16];
    const scrollMusicStorageKey = 'scroll-music-enabled';
    let audioContext = null;
    let masterGainNode = null;
    let lastTriggerAt = 0;
    let lastScrollY = window.scrollY;
    let noteIndex = 0;
    let audioReady = false;
    let soundEnabled = window.localStorage.getItem(scrollMusicStorageKey) === 'true';

    const ensureAudioContext = async () => {
        if (!AudioContextClass) {
            return null;
        }

        if (!audioContext) {
            audioContext = new AudioContextClass();
            masterGainNode = audioContext.createGain();
            masterGainNode.gain.value = 0.9;
            masterGainNode.connect(audioContext.destination);
        }

        if (masterGainNode) {
            masterGainNode.gain.value = soundEnabled ? 0.9 : 0;
        }

        if (audioContext.state === 'suspended') {
            try {
                await audioContext.resume();
            } catch (error) {
                return null;
            }
        }

        audioReady = audioContext.state === 'running';
        scrollMusicLane.classList.toggle('is-ready', audioReady);
        return audioContext;
    };

    const midiToFrequency = (midi) => 440 * Math.pow(2, (midi - 69) / 12);

    const playPianoNote = async (velocity, direction) => {
        const context = await ensureAudioContext();

        if (!context || !masterGainNode) {
            return;
        }

        const now = context.currentTime;
        const baseMidi = direction > 0 ? 52 : 57;
        const midi = baseMidi + noteSteps[noteIndex % noteSteps.length];
        const frequency = midiToFrequency(midi);
        const gainNode = context.createGain();
        const lowpass = context.createBiquadFilter();
        const bodyFilter = context.createBiquadFilter();
        const pickFilter = context.createBiquadFilter();
        const bodyOsc = context.createOscillator();
        const stringOsc = context.createOscillator();
        const pickOsc = context.createOscillator();
        const bodyGain = context.createGain();
        const stringGain = context.createGain();
        const pickGain = context.createGain();
        const velocityGain = Math.min(0.28, 0.08 + velocity / 2400);

        lowpass.type = 'lowpass';
        lowpass.frequency.setValueAtTime(1450, now);
        lowpass.Q.setValueAtTime(0.8, now);

        bodyFilter.type = 'bandpass';
        bodyFilter.frequency.setValueAtTime(480, now);
        bodyFilter.Q.setValueAtTime(0.7, now);

        pickFilter.type = 'highpass';
        pickFilter.frequency.setValueAtTime(900, now);
        pickFilter.Q.setValueAtTime(0.35, now);

        bodyOsc.type = 'triangle';
        bodyOsc.frequency.setValueAtTime(frequency, now);
        bodyOsc.detune.setValueAtTime(-3, now);

        stringOsc.type = 'sine';
        stringOsc.frequency.setValueAtTime(frequency * 2, now);
        stringOsc.detune.setValueAtTime(6, now);

        pickOsc.type = 'triangle';
        pickOsc.frequency.setValueAtTime(frequency * 3.4, now);
        pickOsc.detune.setValueAtTime(12, now);

        bodyGain.gain.setValueAtTime(0.0001, now);
        bodyGain.gain.linearRampToValueAtTime(velocityGain, now + 0.012);
        bodyGain.gain.exponentialRampToValueAtTime(0.0001, now + 1.25);

        stringGain.gain.setValueAtTime(0.0001, now);
        stringGain.gain.linearRampToValueAtTime(velocityGain * 0.52, now + 0.01);
        stringGain.gain.exponentialRampToValueAtTime(0.0001, now + 0.78);

        pickGain.gain.setValueAtTime(0.0001, now);
        pickGain.gain.linearRampToValueAtTime(velocityGain * 0.18, now + 0.004);
        pickGain.gain.exponentialRampToValueAtTime(0.0001, now + 0.16);

        gainNode.gain.setValueAtTime(0.0001, now);
        gainNode.gain.linearRampToValueAtTime(1, now + 0.01);
        gainNode.gain.exponentialRampToValueAtTime(0.0001, now + 1.4);

        bodyOsc.connect(bodyGain);
        stringOsc.connect(stringGain);
        pickOsc.connect(pickGain);
        bodyGain.connect(bodyFilter);
        stringGain.connect(gainNode);
        pickGain.connect(pickFilter);
        bodyFilter.connect(gainNode);
        pickFilter.connect(gainNode);
        gainNode.connect(lowpass);
        lowpass.connect(masterGainNode);

        bodyOsc.start(now);
        stringOsc.start(now);
        pickOsc.start(now);
        bodyOsc.stop(now + 1.35);
        stringOsc.stop(now + 0.88);
        pickOsc.stop(now + 0.2);

        noteIndex += direction > 0 ? 1 : 2;
    };

    const updateAudioState = () => {
        scrollMusicLane.classList.toggle('is-ready', audioReady);
        scrollMusicLane.classList.toggle('is-enabled', soundEnabled);

        if (scrollMusicToggle) {
            scrollMusicToggle.textContent = soundEnabled ? 'Tắt âm thanh scroll' : 'Bật âm thanh scroll';
            scrollMusicToggle.classList.toggle('is-ready', audioReady && soundEnabled);
        }
    };

    const spawnVisualNote = (progressRatio, velocity, direction) => {
        const note = document.createElement('span');
        const symbols = direction > 0 ? ['♪', '♩', '♫'] : ['♬', '♪', '♩'];
        const drift = direction > 0 ? -1 : 1;

        note.className = 'scroll-music-note';
        note.textContent = symbols[noteIndex % symbols.length];
        note.style.top = `${Math.max(6, Math.min(94, progressRatio * 100))}%`;
        note.style.setProperty('--note-drift', `${drift * (12 + Math.min(22, velocity / 8))}px`);
        note.style.setProperty('--note-scale', `${0.9 + Math.min(0.7, velocity / 900)}`);
        note.style.setProperty('--note-rotation', `${drift * (8 + Math.min(14, velocity / 25))}deg`);
        scrollMusicNotes.appendChild(note);

        window.setTimeout(() => {
            note.remove();
        }, 1500);
    };

    const syncScrollMusic = () => {
        const doc = document.documentElement;
        const scrollable = Math.max(1, doc.scrollHeight - window.innerHeight);
        const progressRatio = window.scrollY / scrollable;
        const delta = window.scrollY - lastScrollY;
        const velocity = Math.abs(delta);
        const now = window.performance.now();

        scrollMusicProgress.style.height = `${Math.max(0.08, progressRatio) * 100}%`;

        if (velocity > 18 && now - lastTriggerAt > 110) {
            const direction = delta >= 0 ? 1 : -1;
            lastTriggerAt = now;
            if (audioReady && soundEnabled) {
                playPianoNote(velocity, direction);
            }
            spawnVisualNote(progressRatio, velocity, direction);
            scrollMusicLane.classList.remove('is-active');
            window.requestAnimationFrame(() => {
                scrollMusicLane.classList.add('is-active');
            });
        }

        lastScrollY = window.scrollY;
    };

    const unlockAudio = async () => {
        await ensureAudioContext();
        updateAudioState();
        window.removeEventListener('pointerdown', unlockAudio);
        window.removeEventListener('click', unlockAudio);
        window.removeEventListener('keydown', unlockAudio);
        window.removeEventListener('touchstart', unlockAudio);
        window.removeEventListener('wheel', unlockAudio);
    };

    if (scrollMusicToggle) {
        scrollMusicToggle.addEventListener('click', async () => {
            soundEnabled = !soundEnabled;
            window.localStorage.setItem(scrollMusicStorageKey, String(soundEnabled));

            if (soundEnabled) {
                await ensureAudioContext();

                if (audioReady) {
                    playPianoNote(180, 1);
                    spawnVisualNote(window.scrollY / Math.max(1, document.documentElement.scrollHeight - window.innerHeight), 180, 1);
                }
            } else if (masterGainNode && audioContext) {
                const now = audioContext.currentTime;
                masterGainNode.gain.cancelScheduledValues(now);
                masterGainNode.gain.setValueAtTime(masterGainNode.gain.value, now);
                masterGainNode.gain.linearRampToValueAtTime(0, now + 0.05);
            }

            updateAudioState();
        });
    }

    syncScrollMusic();
    updateAudioState();
    window.addEventListener('scroll', syncScrollMusic, { passive: true });
    window.addEventListener('pointerdown', unlockAudio, { passive: true });
    window.addEventListener('click', unlockAudio, { passive: true });
    window.addEventListener('keydown', unlockAudio);
    window.addEventListener('touchstart', unlockAudio, { passive: true });
    window.addEventListener('wheel', unlockAudio, { passive: true });
}
