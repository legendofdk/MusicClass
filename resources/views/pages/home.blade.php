@extends('layouts.app')

@section('title', 'Demo Giao Diện Trung Tâm Âm Nhạc')

@section('content')
<section class="hero">
    <video class="hero-video" autoplay muted loop playsinline poster="{{ asset('assets/images/hero-poster.jpg') }}">
        <source src="https://cdn.coverr.co/videos/coverr-piano-keys-close-up-1563387488767?download=1080p" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <p class="eyebrow">Trung tâm âm nhạc cao cấp</p>
        <h1>Nơi nghệ thuật gặp gỡ kỷ luật</h1>
        <p class="hero-copy">Một không gian học nhạc hiện đại, tinh tế và giàu cảm hứng, nơi mỗi học viên được nuôi dưỡng cả kỹ thuật lẫn cảm xúc biểu đạt.</p>
        <div class="hero-actions">
            <a href="{{ route('booking') }}" class="button">Đăng ký học thử</a>
            <a href="{{ route('courses') }}" class="button button-ghost">Xem khóa học</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container artistic-story">
        <div class="story-copy">
            <p class="eyebrow">Tinh thần nghệ thuật</p>
            <h2>Âm nhạc không chỉ được học bằng kỹ thuật, mà còn được cảm bằng không khí.</h2>
            <p>Mỗi buổi học là một nhịp chậm vừa đủ để lắng nghe, quan sát và trưởng thành. Từ tiếng đàn đầu tiên đến những lần đứng trước khán giả, hành trình ấy được nâng đỡ bằng sự chỉn chu, dịu dàng và kỷ luật bền bỉ.</p>
        </div>
        <div class="story-composition">
            <div class="composition-main"></div>
            <div class="composition-note">
                <p class="quote-mark">“</p>
                <p>Chúng tôi tin rằng một không gian đẹp và giàu cảm xúc có thể khơi mở sự tự tin rất tự nhiên nơi mỗi học viên.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container artistic-rhythm">
        <div class="rhythm-intro">
            <p class="eyebrow">Những điểm chạm</p>
            <h2>Một website nên gợi được cảm giác bước vào một buổi học thật sự.</h2>
        </div>
        <div class="rhythm-grid">
            <article class="rhythm-card rhythm-card-large">
                <span>01</span>
                <div class="rhythm-card-text">
                    <h3>Không gian học tập</h3>
                    <p>Ánh sáng ấm, chất liệu trầm và nhịp điệu thị giác mềm giúp phụ huynh cảm nhận sự an tâm ngay từ cái nhìn đầu tiên.</p>
                </div>
            </article>
            <article class="rhythm-card rhythm-card-photo-two">
                <span>02</span>
                <div class="rhythm-card-text">
                    <h3>Giảng viên truyền cảm hứng</h3>
                    <p>Đội ngũ giảng viên không chỉ dạy đúng mà còn biết cách khơi mở cảm xúc âm nhạc.</p>
                </div>
            </article>
            <article class="rhythm-card rhythm-card-photo-three">
                <span>03</span>
                <div class="rhythm-card-text">
                    <h3>Biểu diễn và trưởng thành</h3>
                    <p>Mỗi recital hay workshop là một cột mốc để học viên thấy mình tiến xa hơn từng chút một.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Khóa học</p>
            <h2>Lộ trình học được xây để cân bằng kỹ thuật và cảm xúc.</h2>
        </div>
        <div class="card-grid card-grid-4">
            @foreach ($courses as $course)
                <article class="info-card">
                    <p class="card-kicker">{{ $course['level'] }}</p>
                    <h3>{{ $course['name'] }}</h3>
                    <p>{{ $course['description'] }}</p>
                    <span class="card-link">{{ $course['tagline'] }}</span>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Giảng viên</p>
            <h2>Độ tin cậy đến từ con người, không đến từ khẩu hiệu.</h2>
        </div>
        <div class="card-grid card-grid-3">
            @foreach ($teachers as $teacher)
                <article class="profile-card">
                    <div class="profile-portrait"></div>
                    <h3>{{ $teacher['name'] }}</h3>
                    <p class="card-kicker">{{ $teacher['instrument'] }} • {{ $teacher['experience'] }}</p>
                    <p>{{ $teacher['bio'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Thư viện</p>
            <h2>Hình ảnh và video giúp bạn được trải nghiệm trước khi đăng ký.</h2>
        </div>
        <div class="gallery-grid">
            @foreach ($gallery as $item)
                <article class="gallery-card">
                    <div class="gallery-media {{ strtolower($item['type']) === 'video' ? 'is-video' : '' }}">
                        <span>{{ $item['type'] }}</span>
                    </div>
                    <h3>{{ $item['title'] }}</h3>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="section">
    <div class="container cta-panel">
        <div>
            <p class="eyebrow">Sẵn sàng bắt đầu</p>
            <h2>Hãy để buổi học thử đầu tiên mở ra hành trình học nhạc của bạn.</h2>
        </div>
        <a href="{{ route('booking') }}" class="button">Đăng ký học thử</a>
    </div>
</section>
@endsection
