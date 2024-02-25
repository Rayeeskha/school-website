'use strict';

class Carousel {
  constructor(el) {
    this.el = el;
    this.carouselData = [
      {
        'id': '1',
        'src': 'frontend/assets/profile/1.jpg',
      },
      {
        'id': '2',
        'src': 'frontend/assets/profile/2.jpg',
      },
      {
        'id': '3',
        'src': 'frontend/assets/profile/3.jpg',
      },
      {
        'id': '4',
        'src': 'frontend/assets/profile/4.jpg',
      },
      {
        'id': '5',
        'src': 'frontend/assets/profile/5.jpg',
      }
    ];
    this.carouselInView = [1, 2, 3, 4, 5];
    this.carouselContainer;
    this.carouselPlayState;
    this.slideInterval = 1500; // Interval between slides in milliseconds
  }

  mounted() {
    this.setupCarousel();
    this.startAutoSlide();
  }

  // Build carousel html
  setupCarousel() {
    const container = document.createElement('div');

    // Add container for carousel items
    this.el.appendChild(container);
    container.className = 'home-carousel-container';

    // Take dataset array and append items to container
    this.carouselData.forEach((item, index) => {
      const carouselItem = item.src ? document.createElement('img') : document.createElement('div');

      container.appendChild(carouselItem);
      
      // Add item attributes
      carouselItem.className = `home-carousel-item home-carousel-item-${index + 1}`;
      carouselItem.src = item.src;
      carouselItem.setAttribute('loading', 'lazy');
      // Used to keep track of carousel items, infinite items possible in carousel however min 5 items required
      carouselItem.setAttribute('data-index', `${index + 1}`);
    });

    // Set container property
    this.carouselContainer = container;
  }

  startAutoSlide() {
    this.carouselPlayState = setInterval(() => {
      this.next();
    }, this.slideInterval);
  }

  next() {
    // Update order of items in data array to be shown in carousel
    this.carouselData.push(this.carouselData.shift());

    // Take the last item and add it to the beginning of the array so that the next item is front and center
    this.carouselInView.unshift(this.carouselInView.pop());

    // Update the css class for each carousel item in view
    this.carouselInView.forEach((item, index) => {
      this.carouselContainer.children[index].className = `home-carousel-item home-carousel-item-${item}`;
    });

    // Using the first 5 items in data array update content of carousel items in view
    this.carouselData.slice(0, 5).forEach((data, index) => {
      document.querySelector(`.home-carousel-item-${index + 1}`).src = data.src;
    });
  }
}

// Refers to the carousel root element you want to target, use specific class selectors if using multiple carousels
const el = document.querySelector('.home-carousel');
// Create a new carousel object
const exampleCarousel = new Carousel(el);
// Setup carousel and methods
exampleCarousel.mounted();
