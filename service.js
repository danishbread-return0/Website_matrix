(function () {
    const list = document.querySelector('.card-list');
    const prev = document.querySelector('.nav.prev');
    const next = document.querySelector('.nav.next');

    if (!list || !prev || !next) return;

    // Width of one “step” = card width + list gap
    function stepWidth() {
      const first = list.querySelector('.card-item');
      if (!first) return 0;
      const w = first.getBoundingClientRect().width;
      const gap = parseFloat(getComputedStyle(list).gap) || 0;
      return w + gap;
    }

    // Scroll helpers
    function go(dir = 1) {
      list.scrollBy({ left: dir * stepWidth(), behavior: 'smooth' });
      setTimeout(updateDisabled, 350); // after smooth scroll, update button states
    }

    // Disable arrows at ends
    function updateDisabled() {
      const tol = 2; // px tolerance
      prev.disabled = list.scrollLeft <= tol;
      const max = list.scrollWidth - list.clientWidth - tol;
      next.disabled = list.scrollLeft >= max;
    }

    // Snap to the nearest card on manual scroll end
    let scrollTimer;
    list.addEventListener('scroll', () => {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(() => {
        const s = stepWidth();
        if (!s) return;
        const nearest = Math.round(list.scrollLeft / s) * s;
        list.scrollTo({ left: nearest, behavior: 'smooth' });
        updateDisabled();
      }, 120);
    });

    // Click + keyboard
    prev.addEventListener('click', () => go(-1));
    next.addEventListener('click', () => go(1));
    list.tabIndex = 0; // make focusable
    list.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') go(-1);
      if (e.key === 'ArrowRight') go(1);
    });

    // Recalculate on resize
    window.addEventListener('resize', updateDisabled);

    // Init
    updateDisabled();
  })();