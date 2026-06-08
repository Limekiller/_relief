/**
 * Custom JS for hero section
 */


/**
 * Set the carousel to a specific image
 * We imitate a crossfade effect by having two images, "base" and "mask." Base is always visible and mask is absolutely positioned directly on top of base,
 * and has its opacity animated in and out to replicate a fade transition. Depending on current state, we decide which one to update the src attribute of
 * and how to set the opacity.
 *
 * @param baseImage: The base image element
 * @param maskImage: The mask image element
 * @param src: The image src to set the carousel to
 */
const setImage = (
    baseImage,
    maskImage,
    progressBar,
    image
) => {
    if (maskImage.style.opacity == 0) {
        maskImage.src = image.src;
        maskImage.alt = image.alt;
        maskImage.addEventListener('load', function showImg(e) {
            maskImage.style.opacity = 1;
            progressBar.classList.add('animation');
            maskImage.removeEventListener('load', showImg);
        });
    } else {
        baseImage.src = image.src;
        baseImage.alt = image.alt;
        baseImage.addEventListener('load', function showImg(e) {
            maskImage.style.opacity = 0;
            progressBar.classList.add('animation');
            baseImage.removeEventListener('load', showImg);
        });
    }
}

window.onload = () => {
    const images = document.querySelectorAll(".hero .selector img");
    const baseImage = document.querySelector(".hero img.base");
    const maskImage = document.querySelector(".hero img.mask");
    const progressBar = document.querySelector('.progress');
    const maxIndex = images.length - 1;

    let currIndex = 0;

    const gallery = document.querySelector(".hero .gallery");
    gallery.addEventListener("mouseenter", e => {
        progressBar.style.animationPlayState = 'paused';
    });
    gallery.addEventListener("mouseleave", e => {
        progressBar.style.animationPlayState = 'running';
    });

    document.querySelectorAll('.selector-img').forEach(elem => {
        elem.addEventListener("click", e => {
            setImage(baseImage, maskImage, progressBar, e.target.src);
        });
    });

    progressBar.addEventListener('animationend', () => {
        if (currIndex === maxIndex) {
            currIndex = 0;
        } else {
            currIndex += 1;
        }

        progressBar.classList.remove('animation');
        setImage(baseImage, maskImage, progressBar, images[currIndex]);
    });
}
