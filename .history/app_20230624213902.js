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
