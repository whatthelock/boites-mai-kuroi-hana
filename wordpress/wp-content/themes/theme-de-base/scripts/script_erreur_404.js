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