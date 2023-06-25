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


