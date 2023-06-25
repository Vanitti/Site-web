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


// JavaScript

// Fonction pour ajouter la classe "fade-in" aux éléments au fur et à mesure qu'ils apparaissent lors du défilement
function fadeInElements() {
  var elements = document.querySelectorAll('.fade-in');

  elements.forEach(function(element) {
    if (isElementInViewport(element)) {
      element.classList.add('fade-in-visible');
    }
  });
}

// Fonction pour vérifier si un élément est visible dans la fenêtre d'affichage
function isElementInViewport(element) {
  var rect = element.getBoundingClientRect();

  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Événement de défilement pour déclencher la fonction fadeInElements lorsque l'utilisateur fait défiler la page
window.addEventListener('scroll', fadeInElements);

// Appel initial de la fonction pour afficher les éléments déjà visibles au chargement de la page
fadeInElements();
