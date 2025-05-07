// Navbar Start
const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
  if (window.scrollY > 60) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
// Navbar Ends
// Home Page Start

// Home Page Ends
// ---------------------------- About Page Start ----------------------------

  document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const liveDataSection = document.getElementById('liveDataSection');
    
    // Function to start counting
    const startCounting = () => {
      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute('data-count');
          const current = +counter.innerText;
          const increment = target / 200; // Adjust speed of counter animation

          if (current < target) {
            counter.innerText = Math.ceil(current + increment);
            setTimeout(updateCount, 1);
          } else {
            counter.innerText = target;
          }
        };

        updateCount();
      });
    };

    // Function to reset counters
    const resetCounting = () => {
      counters.forEach(counter => {
        counter.innerText = 0;  // Reset counter to 0
      });
    };

    // Intersection Observer Setup
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // Start counting when section comes into view
          startCounting();
        } else {
          // Reset counters when section goes out of view
          resetCounting();
        }
      });
    }, {
      threshold: 0.5  // Trigger when 50% of the section is in view
    });

    observer.observe(liveDataSection);  // Start observing the section
  });

// ---------------------------- About Page Ends ----------------------------
// ---------------------------- Portfolio Page Start ----------------------------

// ---------------------------- Portfolio Page Ends ----------------------------
// Filter Functionality
function filterCategory(category) {
  const allCards = document.querySelectorAll(".portfolio-card");
  allCards.forEach((card) => {
    if (category === "all") {
      card.style.display = "block";
    } else {
      if (card.classList.contains(category)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    }
  });
}

// Portfolio Page Ends

//
