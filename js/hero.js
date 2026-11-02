(() => {
  const trigger = document.querySelector('[data-hero-swap]');
  if (!trigger) return;

  const slides = Array.from(trigger.querySelectorAll('img'));
  if (slides.length < 2) return;

  let index = 0;

  const show = (next) => {
    index = (next + slides.length) % slides.length;
    slides.forEach((img, i) => {
      if (i === 0) return;
      img.classList.toggle('is-visible', i === index);
    });
  };

  let flipTimer = 0;
  const armFlipTimer = () => {
    window.clearInterval(flipTimer);
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    flipTimer = window.setInterval(() => show(index + 1), 10000);
  };

  const flipNow = (event) => {
    event.preventDefault();
    show(index + 1);
    armFlipTimer();
  };

  trigger.addEventListener('click', flipNow);
  trigger.addEventListener('keydown', (event) => {
    if (event.key === 'Enter' || event.key === ' ') flipNow(event);
  });
  armFlipTimer();
})();
