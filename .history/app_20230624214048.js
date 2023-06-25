// Récupérer tous les liens de la navigation
const navLinks = document.querySelectorAll('nav.nav li a');

// Ajouter un gestionnaire d'événements de clic à chaque lien
navLinks.forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault();

    // Récupérer l'attribut href du lien cliqué
    const targetId = link.getAttribute('href');

    // Faire défiler en douceur jusqu'à l'élément cible
    document.querySelector(targetId).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Sélectionnez tous les éléments du menu de navigation
const menuItems = document.querySelectorAll('.menu-item');

// Ajoutez un gestionnaire d'événements de clic à chaque élément du menu
menuItems.forEach(function(menuItem) {
  menuItem.addEventListener('click', function() {
    // Récupérez l'ID de l'élément cible à partir de l'attribut "data-target"
    const targetId = menuItem.getAttribute('data-target');

    // Vérifiez si l'élément cible existe
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
      // Calculez la position de défilement de l'élément cible
      const targetOffset = targetElement.offsetTop;

      // Déplacez la vue vers l'élément cible avec une animation fluide
      window.scrollTo({
        top: targetOffset,
        behavior: 'smooth'
      });
    }
  });
});
