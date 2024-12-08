document.addEventListener("DOMContentLoaded", () => {
  // Slider functionality
  const slider = document.getElementById("slider");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  function showSlide(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === index);
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  setInterval(nextSlide, 5000); // Auto-slide every 5 seconds

  // Team navigation functionality
  const teamImages = document.querySelectorAll(".grid img");
  let teamIndex = 0;

  document.getElementById("prevTeam").addEventListener("click", () => {
    teamIndex = (teamIndex - 1 + teamImages.length) % teamImages.length;
    teamImages[teamIndex].scrollIntoView({ behavior: "smooth", block: "center" });
  });

  document.getElementById("nextTeam").addEventListener("click", () => {
    teamIndex = (teamIndex + 1) % teamImages.length;
    teamImages[teamIndex].scrollIntoView({ behavior: "smooth", block: "center" });
  });

  // Smooth scrolling for navigation links
  document.querySelectorAll("header nav a").forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const targetId = e.target.getAttribute("href").slice(1);
      document.getElementById(targetId)?.scrollIntoView({ behavior: "smooth" });
    });
  });

  // Add animations on scroll
  const animateOnScroll = () => {
    const elements = document.querySelectorAll("[data-animate]");
    elements.forEach((el) => {
      const rect = el.getBoundingClientRect();
      if (rect.top <= window.innerHeight) {
        el.classList.add("animate");
      }
    });
  };

  window.addEventListener("scroll", animateOnScroll);
  animateOnScroll(); // Run on page load
});
