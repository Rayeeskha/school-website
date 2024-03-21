<script type="text/javascript">
  const sliderData = <?php echo CustomHelper::getSliderData(); ?>;
  
class Carousel {
  constructor(el) {
    this.el = el;
    this.carouselData = sliderData;
    this.carouselInView = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    this.carouselContainer;
    this.carouselPlayState;
    this.slideInterval = 2000; 
    this.isPaused = false; 
  }

  mounted() {
    this.setupCarousel();
    this.startAutoSlide();
    this.addEventListeners(); 
  }

  setupCarousel() {
    const container = document.createElement('div');
    this.el.appendChild(container);
    container.className = 'home-carousel-container';

     this.carouselData.forEach((item, index) => {
      const carouselItem = item.src ? document.createElement('img') : document.createElement('div');

      container.appendChild(carouselItem);

      carouselItem.className = `home-carousel-item home-carousel-item-${index + 1}`;
      carouselItem.src = item.src;
      carouselItem.setAttribute('loading', 'lazy');
      carouselItem.setAttribute('data-index', `${index + 1}`);
    });
    this.carouselContainer = container;
  }

  startAutoSlide() {
    this.carouselPlayState = setInterval(() => {
      if (!this.isPaused) {
        this.next();
      }
    }, this.slideInterval);
  }

  next() {
    this.carouselData.push(this.carouselData.shift());
    this.carouselInView.unshift(this.carouselInView.pop());

    this.carouselInView.forEach((item, index) => {
      this.carouselContainer.children[index].className = `home-carousel-item home-carousel-item-${item}`;
    });

    this.carouselData.slice(0, 5).forEach((data, index) => {
      document.querySelector(`.home-carousel-item-${index + 1}`).src = data.src;
    });
  }

  addEventListeners() {
    this.carouselContainer.addEventListener('mouseenter', () => {
      this.isPaused = true;
    });

    this.carouselContainer.addEventListener('mouseleave', () => {
      this.isPaused = false;
    });
  }
}

const el = document.querySelector('.home-carousel');
const exampleCarousel = new Carousel(el);

exampleCarousel.mounted();

</script>