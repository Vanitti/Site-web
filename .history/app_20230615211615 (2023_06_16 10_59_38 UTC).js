document.addEventListener('DOMContentLoaded', function() {
  ScrollReveal().reveal('.scroll-reveal', {
    duration: 1000,   // Durée de l'animation en millisecondes
    distance: '20px', // Distance de décalage de l'élément
    opacity: 0,       // Opacité initiale de l'élément (0 = invisible)
    origin: 'bottom', // Origine de l'animation (bas de la fenêtre)
    easing: 'ease-in-out', // Fonction d'interpolation pour l'animation
  });
});
