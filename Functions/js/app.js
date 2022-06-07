const navScroll = () => {
    window.addEventListener("scroll", function () {
        var navScroll = document.querySelector("nav");
        navScroll.classList.toggle("sticky", window.scrollY > 0)
    });
}

const slider = () => {

    var slideshows = document.querySelectorAll('[data-component="slideshow"]');

    // Apply to all slideshows that you define with the markup wrote
    slideshows.forEach(initSlideShow);

    function initSlideShow(slideshow) {

        var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`); // Get an array of slides

        var index = 0, time = 5000;
        slides[index].classList.add('active');

        setInterval(() => {
            slides[index].classList.remove('active');

            //Go over each slide incrementing the index
            index++;

            // If you go over all slides, restart the index to show the first slide and start again
            if (index === slides.length) index = 0;

            slides[index].classList.add('active');

        }, time);
    }
}

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',()=>{
        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Animate links
        navLinks.forEach((link, index) => {
            if(link.style.animation){
                link.style.animation = '';     
			}
            else{
                link.style.animation = `navLinkFade 0.6s ease forwards ${index / 7 + 0.3}s`;
			}
		});

        //Burger animation
        burger.classList.toggle('toggle');
    });
}

const app = () =>{
    navSlide();
    navScroll();
    slider();
}

app();
