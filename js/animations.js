  const span = document.querySelectorAll('.title-span1 , .title-span2, .title-span3');
// Create the observer :
const observer = new IntersectionObserver(entries => {
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
// commence à oberser l'élément
observer.observe(document.querySelector('.title-anime1'));
observer.observe(document.querySelector('.title-anime2'));

span.forEach(span => {
  observer.observe(span);
});

//---------------------------------------------------------

//parallaxe tile
 const parallax = document.querySelector ('.parallax-title');
 //ajoute une écouteur d'event au défilement de la fenêtre
  window.addEventListener('scroll', () => {
// Récupère la valeur de défilement vertical de la fenêtre
  let value = window.scrollY;
  // La valeur de la marge supérieure est calculée en multipliant la valeur de défilement par 0.35
  parallax.style.marginTop = value * 0.35 + 'px';
  });
 
  //-------------------------------------------------------------
  //parallax clouds 
   //const cloud = document.querySelectorAll ('.cloud-parallax');
 // window.addEventListener('scroll', () => {

 // let value = window.scrollX;
  // cloud.style.marginLeft = value * 2.5 + 'px';
 // });

//séléctionne tous les éléments 
 const clouds = document.querySelectorAll('.cloud-parallax');
// ajoute un écouteur d'event los du scroll
 window.addEventListener('scroll', () => {
  // Récupérez la position actuelle de défilement horizontale
   const scrollPosition = window.scrollX;
   // Parcoure chaque élément "cloud" 
   clouds.forEach(cloud => {
    // Récupérez la position verticale de chaque élément "cloud" par rapport à la fenêtre 
     const position = cloud.getBoundingClientRect().top;
      // Récupérez la hauteur de la fenêtre visible 
     const windowHeight = window.innerHeight;
      // Calcul la translation de parallaxe en fonction de la position de l'élément par rapport à la fenêtre
     const parallaxTranslation = (position - windowHeight) * 0.5; // Ajuste la vitesse de parallaxe souhaitée
     cloud.style.transform = 'translateX(' + parallaxTranslation + 'px)';
   });
 });

//---------------------------------------------------
//Menu burger
document.addEventListener('DOMContentLoaded', function () {
  const burger = document.querySelector('.burgerMenu');
  const menu = document.querySelector('.menu-full')
  
 
 
  burger.addEventListener("click", function(){
   burger.classList.toggle("active");
   menu.classList.toggle("active");
  

  });  
  
  });



 //----------------------------------------
 // cloud scroll


// Commencez à observer chaque élément cloudScroll
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


cloud.forEach(cloud => {
  obs.observe(cloud);
});

 
  




