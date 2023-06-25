document.addEventListener('DOMContentLoaded', function() {
  var links = document.querySelectorAll('.transition');
  links.forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      var href = link.getAttribute('href');
      document.querySelector('body').classList.add('page-transition');
      setTimeout(function() {
        window.location.href = href;
      }, 100); // Ajoutez une durée en millisecondes qui correspond à la durée de votre transition CSS
    });
  });
});


document.addEventListener('DOMContentLoaded', function() {
  var fadeElements = document.querySelectorAll('body *');

  function checkFade() {
    for (var i = 0; i < fadeElements.length; i++) {
      var fadeElement = fadeElements[i];
      var fadeInPosition = fadeElement.getBoundingClientRect().top + fadeElement.offsetHeight * 0.5;
      var windowHeight = window.innerHeight;

      if (fadeInPosition < windowHeight) {
        fadeElement.style.opacity = 1;
      }
    }
  }

  window.addEventListener('scroll', checkFade);
  checkFade();
});
