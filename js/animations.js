  const span = document.querySelectorAll('.title-span1 , .title-span2, .title-span3');
// Create the observer :
const observer = new IntersectionObserver(entries => {
  entries.forEach((entry) => {
    // If the element is visible
    if (entry.isIntersecting) {
      // Add the animation class
      entry.target.classList.add('visible');
      
      
    } else {
    // We're not intersecting, so remove the class!
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
  window.addEventListener('scroll', () => {

  let value = window.scrollY;
  parallax.style.marginTop = value * 0.35 + 'px';
  });
 
  //-------------------------------------------------------------
  //parallax clouds 
   //const cloud = document.querySelectorAll ('.cloud-parallax');
 // window.addEventListener('scroll', () => {

 // let value = window.scrollX;
  // cloud.style.marginLeft = value * 2.5 + 'px';
 // });


 const clouds = document.querySelectorAll('.cloud-parallax');

 window.addEventListener('scroll', () => {
   const scrollPosition = window.scrollX;
 
   clouds.forEach(cloud => {
     const position = cloud.getBoundingClientRect().top;
     const windowHeight = window.innerHeight;
     const parallaxTranslation = (position - windowHeight) * 0.5; // Ajustez la vitesse de parallaxe souhaitée
     cloud.style.transform = 'translateX(' + parallaxTranslation + 'px)';
   });
 });
 

 
  




