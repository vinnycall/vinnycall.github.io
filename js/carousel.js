let track = document.querySelector(".carousel-track");
let slides = Array.from(document.querySelectorAll(".carousel-slide"));
let totalSlides = slides.length;
let index = 0;
let autoplayInterval;
let isPaused = false;

function updateSlidePosition() {
  const wrapper = document.querySelector(".carousel-wrapper");
  const wrapperWidth = wrapper.offsetWidth;
  const activeSlide = slides[index];

  let offset;

  if (index === 0) {
    offset = 0;
  } else {
    const slideCenter = activeSlide.offsetLeft + activeSlide.offsetWidth / 2;
    offset = slideCenter - wrapperWidth / 2;
  }

  track.style.transform = `translateX(-${offset}px)`;

  slides.forEach((s, i) => {
    s.classList.toggle("active", i === index);
  });
  console.log(`Slide index: ${index}`);
  updateDots();

}

const dotsContainer = document.querySelector(".carousel-dots");

slides.forEach((_, i) => {
  const dot = document.createElement("button");
  dot.addEventListener("click", () => {
    index = i;
    resetAutoplay();
  });
  dotsContainer.appendChild(dot);
});

function updateDots() {
  const dots = dotsContainer.querySelectorAll("button");

  dots.forEach((dot) => {
    dot.style.opacity = "0";

    dot.classList.remove("active-dot");
    dot.style.display = "none";
  });
  // Toon alleen de vorige, huidige, en volgende
  [index + 1, index, index - 1].forEach((i) => {
    if (i >= 0 && i < dots.length) {
      const dot = dots[i];
      dot.style.display = "inline-block";
      dot.style.opacity = "0.5";
    }
  });

  // Zet de actieve dot apart wit
  const activeDot = dots[index];

  if (activeDot) {
    activeDot.style.opacity = "1";
    activeDot.classList.add("active-dot");
  }
  console.log(`Active dot index: ${index}`);
}

function nextSlide() {
  index = (index + 1) % totalSlides;
  updateSlidePosition();
  resetAutoplay();
}

function prevSlide() {
  index = (index - 1 + totalSlides) % totalSlides;
  updateSlidePosition();
  resetAutoplay();
}

function resetAutoplay() {
  clearInterval(autoplayInterval);
  if (!isPaused) {
    autoplayInterval = setInterval(nextSlide, 4000);
  }
}

// Pause on hover
track.addEventListener("mouseenter", () => {
  clearInterval(autoplayInterval);
  isPaused = true;
});
track.addEventListener("mouseleave", () => {
  isPaused = false;
  resetAutoplay();
});

// Lightbox zoom
slides.forEach((slide) => {
  slide.addEventListener("click", () => {
    const src = slide.querySelector("img").src;
    document.getElementById("lightbox-img").src = src;
    document.getElementById("lightbox").classList.remove("hidden");
    clearInterval(autoplayInterval);
  });
});

// Close lightbox
document.querySelector("#lightbox .close").addEventListener("click", () => {
  document.getElementById("lightbox").classList.add("hidden");

  resetAutoplay();
});

document.getElementById("lightbox").addEventListener("click", (e) => {
  const img = document.getElementById("lightbox-img");
  // Alleen sluiten als er buiten de afbeelding wordt geklikt
  if (e.target !== img) {
    document.getElementById("lightbox").classList.add("hidden");
    resetAutoplay();
  }
});
// Buttons
document.querySelector(".next").addEventListener("click", nextSlide);
document.querySelector(".prev").addEventListener("click", prevSlide);

// Start autoplay
window.addEventListener("load", () => {
  updateSlidePosition();
  autoplayInterval = setInterval(nextSlide, 4000);
});
