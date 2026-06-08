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
    image
) => {
    if (maskImage.style.opacity == 0) {
        maskImage.src = image.src;
        maskImage.alt = image.alt;
        maskImage.addEventListener('load', function showImg(e) {
            maskImage.style.opacity = 1;
            maskImage.removeEventListener('load', showImg);
        });
    } else {
        baseImage.src = image.src;
        baseImage.alt = image.alt;
        baseImage.addEventListener('load', function showImg(e) {
            maskImage.style.opacity = 0;
            baseImage.removeEventListener('load', showImg);
        });
    }
}

window.onload = () => {
    const images = document.querySelectorAll(".hero .selector img");
    const baseImage = document.querySelector(".hero img.base");
    const maskImage = document.querySelector(".hero img.mask");
    const maxIndex = images.length - 1;

    let currIndex = 0;
    let galleryHovered = false;

    const gallery = document.querySelector(".hero .gallery");
    gallery.addEventListener("mouseenter", e => {
        galleryHovered = true;
    });
    gallery.addEventListener("mouseleave", e => {
        galleryHovered = false;
    });

    document.querySelectorAll('.selector-img').forEach(elem => {
        elem.addEventListener("click", e => {
            setImage(baseImage, maskImage, e.target.src);
        });
    });

    setInterval(() => {
        if (galleryHovered) return;

        if (currIndex === maxIndex) {
            currIndex = 0;
        } else {
            currIndex += 1;
        }

        setImage(baseImage, maskImage, images[currIndex]);
    }, 5000);
}
