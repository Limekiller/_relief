/**
 * Custom JS for header
 */

/**
 * Hide or show an element on the page. When hiding, also make inert
 * 
 * @param {object} elem 
 * @param {boolean} visible 
 */
const changeVisibility = (elem, visible) => {
    if (visible) {
        elem.classList.add('visible');
        elem.removeAttribute('inert');
    } else {
        elem.classList.remove('visible');
        elem.setAttribute('inert', true);
    }
}

// Add mouse enter and leave events to show and hide submenus
document.querySelectorAll('.menu-item-has-children').forEach(elem => {
    elem.addEventListener('mouseenter', e => {
        changeVisibility(e.target.parentElement.querySelector('.sub-menu'), true);
    });
    elem.addEventListener('mouseleave', e => {
        changeVisibility(e.target.parentElement.querySelector('.sub-menu'), false);
    });
});

// Add tab focus events to show and hide submenus
document.querySelectorAll('.menu-item-has-children > a').forEach(elem => {
    elem.addEventListener('keydown', e => {
        if (e.code === 'Space' || e.code === 'Enter') {
            e.stopImmediatePropagation();
            e.preventDefault();
            changeVisibility(e.target.parentElement.querySelector('.sub-menu'), true);
        }
    });
});

// Make all submenus inert by default if in desktop layout
document.querySelectorAll('.sub-menu').forEach(elem => {
    if (window.innerWidth > 768) {
        elem.setAttribute('inert', true);
    }
});

document.querySelector('#menu-icon').addEventListener('click', e => {
    if (e.target.dataset.open && e.target.dataset.open === 'true') {
        e.target.dataset.open = 'false';
        e.target.src = e.target.src.split('/').slice(0, -1).join('/') + '/menu.svg'
        changeVisibility(document.querySelector('nav .links'), false);
    } else {
        e.target.dataset.open = 'true';
        e.target.src = e.target.src.split('/').slice(0, -1).join('/') + '/close.svg'
        changeVisibility(document.querySelector('nav .links'), true);
    }
});