// Scroll to section based on ID
function scrollToSection1(services) {
  var section = document.getElementById(services);
  var top = section.offsetTop;
  window.scrollTo(0, top);
}

function scrollToSection(reviews) {
  var section = document.getElementById(reviews);
  var top = section.offsetTop;
  window.scrollTo(0, top);
}

// Add class 'scrolled' to header on scroll
window.addEventListener('scroll', function() {
  var header = document.querySelector('.header');
  var scrolled = window.scrollY || document.documentElement.scrollTop;

  if (scrolled > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

jQuery(document).ready(function() {
  // Update slide background image
  jQuery('.slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    var nextSlideElement = slick.$slides[nextSlide];
    var backgroundImage = jQuery(nextSlideElement).data('bg-image');
    jQuery(nextSlideElement).css('background-image', 'url(' + backgroundImage + ')');
  });

  // Initialize slick slider
  jQuery('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true
  });
});

const planeIcon = document.getElementById("planeicon");

// Add scroll event listener
window.addEventListener("scroll", function() {
  // Get the position of the section
  const section = document.getElementById("serve");
  const sectionTop = section.offsetTop;
  const sectionBottom = sectionTop + section.offsetHeight;

  // Get the current scroll position
  const scrollPosition = window.scrollY + window.innerHeight;

  // Check if the scroll position is within the section
  if (scrollPosition >= sectionTop && scrollPosition <= sectionBottom) {
    // Add the rotation animation class
    planeIcon.classList.add("rotate-animation");
  } else {
    // Remove the rotation animation class
    planeIcon.classList.remove("rotate-animation");
  }
});

const parentDropdowns = document.querySelectorAll('.parent-dropdown');

parentDropdowns.forEach((dropdown) => {
  dropdown.addEventListener('click', () => {
    parentDropdowns.forEach((otherDropdown) => {
      if (otherDropdown !== dropdown) {
        otherDropdown.classList.remove('open');
      }
    });
    dropdown.classList.toggle('open');
  });
});

// Get the nested dropdown items and body contents
const nestedDropdownItems = document.querySelectorAll('.nested-dropdown-item');
const bodyContents = document.querySelectorAll('.body-content');

// Add click event listeners to nested dropdown items
nestedDropdownItems.forEach(item => {
  item.addEventListener('click', () => {
    // Get the target ID from the data-target attribute
    const target = item.getAttribute('data-target');

    // Hide all body contents
    bodyContents.forEach(content => content.classList.remove('active'));

    // Show the corresponding body content based on the target ID
    const targetContent = document.getElementById(target);
    targetContent.classList.add('active');
  });
});
