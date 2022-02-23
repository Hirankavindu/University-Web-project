//Javascript of responsive navigation menu
const menuBtn =document.querySelector(".menu-btn");
const navigation =document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});
//Javascript for video slider navigation
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");

var sliderNav = function(manual){
    btns.forEach((btn) => {
        btn.classList.remove("active");

    });

    slides.forEach((slide) => {
        slide.classList.remove("active");

    });

    contents.forEach((content) => {
        content.classList.remove("active");

    });

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
}

btns.forEach((btn,i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);

    });

});
  //image slider
  var counter = 1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
      counter = 1;
    }
  }, 5000);

  //Latest Books
//TESTIMONIAL
$('.clients-carousel').owlCarousel({
    loop: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed: 450,
    margin: 30,
    dots:false,
    responsive: {
        0: {
            items: 1
        },
        481: {
            items: 2
        },
        767: {
            items: 3
        },
        1025: {
            items: 4
        },
        1281: {
            items: 4
        },
        1920: {
            items: 5
        }
    }
});

    //Counter
 if($('.countdown').length){
    $('.countdown').counterUp({
        delay:10,
        time:3000

    });
}