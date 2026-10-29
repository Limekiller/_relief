const reorderPosts = () => {
    const posts = document.querySelectorAll('.post')
    for (let i = 0; i < posts.length; i++) {
        const post = posts[i];
        post.style.position = 'absolute';

        if (i % 2 != 0) {
            post.style.left = '21rem';
        }

        if (i - 2 in posts) {
            const abovePost = posts[i - 2];
            const bottom = abovePost.getBoundingClientRect().bottom;
            post.style.top = `calc(${bottom}px - 13rem)`;
        }
    }

    const lastPost = posts[posts.length - 1];
    const bottom = lastPost.getBoundingClientRect().bottom;
    document.querySelector('.posts').style.height = `${bottom}px`;
}

window.onload = () => {
    reorderPosts();
    window.addEventListener("resize", reorderPosts);
}

