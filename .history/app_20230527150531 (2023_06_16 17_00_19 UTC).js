document.addEventListener('click', function(event) {
  if (event.target.matches('.transition')) {
    event.preventDefault();
    var href = event.target.getAttribute('href');
    // Effectuez la transition vers la nouvelle page en utilisant des animations ou des effets de votre choix
    // Par exemple, vous pouvez utiliser des bibliothèques JavaScript comme GSAP ou jQuery pour créer des animations fluides
    // Une autre option est d'utiliser des frameworks front-end comme React ou Vue.js qui facilitent la création de transitions entre les composants
    // Une alternative plus simple consiste à utiliser les fonctionnalités CSS telles que les animations et les transformations pour créer des effets de transition
  }
});
