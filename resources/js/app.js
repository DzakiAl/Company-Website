import './bootstrap';

// smooth scrolling
document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.navbar .sidebar .link .sidebar-link');

    links.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();

            const targetId = event.currentTarget.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        });
    });
});