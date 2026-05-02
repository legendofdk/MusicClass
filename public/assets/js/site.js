const header = document.querySelector('[data-header]');
const navToggle = document.querySelector('[data-nav-toggle]');
const navMenu = document.querySelector('[data-nav-menu]');
const demoForm = document.querySelector('[data-demo-form]');

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
