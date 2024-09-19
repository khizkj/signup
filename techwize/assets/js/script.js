const backToTopButton = document.getElementById('backToTop');

window.onscroll = () => {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
};

backToTopButton.onclick = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};


