const slides = document.querySelectorAll(".hero-slide");
const dots = document.querySelectorAll(".hero-dot");

let currentSlide = 0;
let slideInterval;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle("active", i === index);
  });

  dots.forEach((dot, i) => {
    dot.classList.toggle("active", i === index);
  });

  currentSlide = index;
}

function nextSlide() {
  const next = (currentSlide + 1) % slides.length;
  showSlide(next);
}

function startSlider() {
  slideInterval = setInterval(nextSlide, 5000);
}

function resetSlider() {
  clearInterval(slideInterval);
  startSlider();
}

dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    showSlide(index);
    resetSlider();
  });
});

showSlide(0);
startSlider();
