document.documentElement.classList.add('js-enabled');

const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.nav-links');

function closeMenu() {
    menuButton?.setAttribute('aria-expanded', 'false');
    menuButton?.setAttribute('aria-label', 'Open navigation menu');
    navigation?.classList.remove('is-open');
    document.body.classList.remove('menu-open');
}

menuButton?.addEventListener('click', () => {
    const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
    menuButton.setAttribute('aria-expanded', String(!isOpen));
    menuButton.setAttribute('aria-label', isOpen ? 'Open navigation menu' : 'Close navigation menu');
    navigation?.classList.toggle('is-open', !isOpen);
    document.body.classList.toggle('menu-open', !isOpen);
});

navigation?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
window.addEventListener('resize', () => {
    if (window.innerWidth > 900) closeMenu();
});

const filters = document.querySelectorAll('.filter-button');
const projectCards = document.querySelectorAll('.project-card');
const visibleCount = document.querySelector('#visible-count');

filters.forEach((filterButton) => {
    filterButton.addEventListener('click', () => {
        const selectedFilter = filterButton.dataset.filter;
        let visibleProjects = 0;

        filters.forEach((button) => {
            const isActive = button === filterButton;
            button.classList.toggle('is-active', isActive);
            button.setAttribute('aria-pressed', String(isActive));
        });

        projectCards.forEach((card) => {
            const categories = (card.dataset.category || '').split(/\s+/);
            const shouldShow = selectedFilter === 'all' || categories.includes(selectedFilter);
            card.hidden = !shouldShow;
            if (shouldShow) visibleProjects += 1;
        });

        if (visibleCount) visibleCount.textContent = String(visibleProjects);
    });
});

const projectDialog = document.querySelector('#project-dialog');
const dialogTitle = document.querySelector('#dialog-title');
const dialogCategory = document.querySelector('#dialog-category');
const dialogDescription = document.querySelector('#dialog-description');
const dialogStack = document.querySelector('#dialog-stack');

document.querySelectorAll('.project-open').forEach((projectButton) => {
    projectButton.addEventListener('click', () => {
        if (!projectDialog || typeof projectDialog.showModal !== 'function') return;
        dialogTitle.textContent = projectButton.dataset.projectTitle || '';
        dialogCategory.textContent = projectButton.dataset.projectCategory || 'PROJECT DETAILS';
        dialogDescription.textContent = projectButton.dataset.projectDescription || '';
        dialogStack.textContent = projectButton.dataset.projectStack || '';
        projectDialog.showModal();
    });
});

document.querySelector('.dialog-close')?.addEventListener('click', () => projectDialog?.close());
projectDialog?.addEventListener('click', (event) => {
    if (event.target === projectDialog) projectDialog.close();
});

const revealItems = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.12 });

    revealItems.forEach((item) => revealObserver.observe(item));
} else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
}