// gsap.registerPlugin(ScrollTrigger);

// gsap.to('.section__404__title', { 
//   rotation: 1080,
//   scrollTrigger: {
//     scrub: 0.5,
//     markers: true,
//     start: 'top 80%',
//     end: 'bottom 35%',
//   }
// })

// const animation = document.querySelector('body');

// animation.addEventListener('click', () => {
//   gsap.to('.section__404__animation__arrosoir', { 
//     rotation: '0deg',
//   });

// gsap.from('#1', { 
//   rotateX: '90%',
//   opacity: 0
// });

// gsap.from('#2', { 
//   rotateX: '90%',
//   opacity: 0
// });

// });


gsap.to('.section__404__animation__arrosoir', {
  rotation: '0deg',
});

gsap.from('.section__404__animation__goutte', {
  opacity: 0,
  delay: 0.3
});

gsap.to('.section__404__animation__goutte', {
  y: '100%',
  delay: 0.4,
  opacity : 0,
  stagger: 0.1
});

// const animation = gsap.timeline({
//   defaults: { 
//     y: '100%',
//   }
// })

// gsap.to('.section__404__animation__goutte', { 
//   delay: 2

// })
// gsap.to('.section__404__animation__goutte', { delay: 2 });