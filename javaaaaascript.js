
const images = document.querySelectorAll("#portfolio img"); 
const circles = document.querySelectorAll("#circles .circle"); 


let index = 0;


setInterval(() => {
  
  images[index].classList.remove("active"); 
  circles[index].classList.remove("active"); 

  
  index = (index + 1) % images.length; 

  
  images[index].classList.add("active");
  circles[index].classList.add("active"); 
}, 9000);


circles.forEach((circle, circleIndex) => {
  circle.addEventListener("click", () => {
    
    images[index].classList.remove("active"); 
    circles[index].classList.remove("active"); 

    
    index = circleIndex; 

    
    images[index].classList.add("active"); 
    circles[index].classList.add("active");
  });
});