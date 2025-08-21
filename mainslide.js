document.addEventListener("DOMContentLoaded", () => {
  const viewport = document.querySelector(".slider-wrapper");
  const track    = document.querySelector(".slider");
  const slides   = track.children;
  const dots     = document.querySelectorAll(".slider-nav a");
  const count    = slides.length;
  let index = 0;
  const interval = 5500; // 5.5 sec wait
  let autoSlide;

  function go(to) {
    index = (to + count) % count;
    const offset = viewport.clientWidth * index;
    track.style.transform = `translateX(-${offset}px)`;
    updateDots();
  }

  function updateDots() {
    dots.forEach((dot, i) => {
      dot.style.opacity = i === index ? "1" : "0.5";
    });
  }

  function startAutoSlide() {
    autoSlide = setInterval(() => go(index + 1), interval);
  }

  function stopAutoSlide() {
    clearInterval(autoSlide);
  }

  // Dot click
  dots.forEach(dot => {
    dot.addEventListener("click", () => {
      stopAutoSlide();
      go(parseInt(dot.dataset.slide));
      startAutoSlide();
    });
  });

  // Resize fix
  window.addEventListener("resize", () => go(index));

  startAutoSlide();
  updateDots();
});