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
$(".slider").owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout: 2000, //2000ms = 2s;
    autoplayHoverPause: true,
   });