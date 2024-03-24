var images = [
    '../images/Линии.png',
    '../images/песик.jpg',
    '../images/Человечек.png',
    '../images/logo.jpg'
  ];
  var currentImageIndex = 0;
  
  document.addEventListener('DOMContentLoaded', function() {
    var slider = document.querySelector('.slider');
    var image = document.createElement('img');
    image.src = images[currentImageIndex];
    
  
    var previousButton = document.createElement('button');
    previousButton.textContent = '←--';
    previousButton.style.marginTop = '20px'
    previousButton.addEventListener('click', function() {
      currentImageIndex = (currentImageIndex + images.length - 1) % images.length;
      image.src = images[currentImageIndex];
    });
    slider.appendChild(previousButton);

      var image = document.createElement('img');
    image.src = images[currentImageIndex];
    image.style.width = '500px';
    image.style.height = '500px';
    image.style.marginTop = '-150px'
    slider.appendChild(image);

    var nextButton = document.createElement('button');
    nextButton.textContent = '--→';
    nextButton.style.marginTop = '20px'
    nextButton.addEventListener('click', function() {
      currentImageIndex = (currentImageIndex + 1) % images.length;
      image.src = images[currentImageIndex];
    });
    slider.appendChild(nextButton);


  });