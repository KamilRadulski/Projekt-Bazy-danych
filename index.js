const banner = document.getElementById("banner");

const onScroll = () => {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 150) {
        banner.style.backgroundSize = "180%"; // Zoom out gradually
    } else {
        banner.style.backgroundSize = "150%"; // Zoom in gradually
    }
};

window.addEventListener("scroll", onScroll);