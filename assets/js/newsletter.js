const newsletter = () => {
    const newsletter = document.querySelector('.newsletter-signup');
    const elemHeight = newsletter.clientHeight;
    const close = newsletter.querySelector('.close');

    newsletter.style.bottom = `-${elemHeight + 3}px`;
    if (!localStorage.getItem("newsletter-closed")) {
        window.setTimeout(() => {
            newsletter.style.bottom = 0;
        }, 2000);
    }

    close.addEventListener('click', () => {
        localStorage.setItem("newsletter-closed", "true");
        newsletter.remove();
    });
}

window.addEventListener('load', newsletter);