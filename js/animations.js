// aparition des titres au scroll
//sélectionne tous les éléments avec les class title-span :
const span = document.querySelectorAll('.title-span1 , .title-span2, .title-span3');
// Crée un observateur avec une fonction de rappel 
//qui sera exécutée lorsque les éléments cibles entrent et sortent de la zone visible de l'écran.
 const observer = new IntersectionObserver(entries => {
  // La fonction de rappel reçoit un tableau "entries" 
  //contenant les informations sur les éléments observés.
  entries.forEach((entry) => {
    // Si l'élément est visible 
    if (entry.isIntersecting) {
      // on ajoute la classe
      entry.target.classList.add('visible');        
    } else {
    // sinon on retire la class 
    entry.target.classList.remove('visible');
  };
});
});
// Applique l'observateur à chaque élément "span" dans la variable "span".
span.forEach(span => {
  observer.observe(span);
});

//---------------------------------------------------------
//parallaxe tile
// Sélectionne l'élément avec la classe 
 const parallax = document.querySelector ('.parallax-title');
 //ajoute un écouteur d'event au défilement de la fenêtre
  window.addEventListener('scroll', () => {
// Récupère la valeur de défilement vertical de la fenêtre et la stocke dans la variable value
  let value = window.scrollY;
  // Appliquer un effet de parallaxe en modifiant le style "marginTop" de l'élément "parallax-title".
  //La valeur de la marge supérieure est calculée en multipliant la valeur de défilement par 0.35
  parallax.style.marginTop = value * 0.35 + 'px';
  });

//---------------------------------------------------
//Menu burger
//lors du chargement du Dom
document.addEventListener('DOMContentLoaded', function () {
  //Sélection des éléments du menu
  const burger = document.querySelector('.burgerMenu');
  const menu = document.querySelector('.menu-full')
 // Ajoute un écouteur d'événements pour le clic sur le bouton burger
  burger.addEventListener("click", function(){
     // Ajoute et supprime la classe active à l'élément "burger"
    // ce qui permet de basculer son état visuel 
    //pour créer un effet d'ouverture/fermeture du menu).
   burger.classList.toggle("active");
    // permet de basculer son affichage en rendant le menu visible ou caché.
   menu.classList.toggle("active");
  });  
  });

 //----------------------------------------
 // cloud scroll
// sectionne tous les éléments avec la classe
const cloud = document.querySelectorAll('.cloudScroll');
// Create the observer :
const obs = new IntersectionObserver(entries => {
  entries.forEach((entry) => {
    // If the element is visible
    if (entry.isIntersecting) {
      // Add the animation class
      entry.target.classList.add('visible');        
    } else {
    // sinon on retire la class 
    entry.target.classList.remove('visible');
  };
});
})
// Applique l'observateur à chaque élément "cloud" dans la variable "cloud".
 cloud.forEach(cloud => {
 obs.observe(cloud);
 });




 
  




