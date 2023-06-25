// Gestion de la transition
const transitionContainer = document.querySelector('.transition-container');
const links = document.querySelectorAll('a');

function pageTransition() {
  const currentPage = this.getAttribute('href');

  transitionContainer.classList.add('page-exit');

  setTimeout(() => {
    window.location.href = currentPage;
  }, 500);
}

function delay(e) {
  e.preventDefault();
  const targetURL = this.getAttribute('href');

  transitionContainer.classList.add('page-enter');

  setTimeout(() => {
    window.location.href = targetURL;
  }, 500);
}

links.forEach(link => link.addEventListener('click', pageTransition));
window.addEventListener('pageshow', () => {
  transitionContainer.classList.remove('page-enter');
  transitionContainer.classList.remove('page-exit');
});
