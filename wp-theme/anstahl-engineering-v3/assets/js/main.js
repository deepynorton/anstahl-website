/**
 * Anstahl Engineering V4 — Main JavaScript
 * No jQuery dependency.
 */
(function () {
  'use strict';

  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var header = document.getElementById('site-header');
  var nav = document.getElementById('site-nav');
  var toggle = document.querySelector('.site-nav-toggle');

  /* Sticky header scroll state */
  if (header) {
    function onScroll() {
      if (window.scrollY > 40) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* Mobile navigation toggle */
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      nav.classList.toggle('is-open');
      document.body.classList.toggle('nav-open', !expanded);
    });

    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        toggle.setAttribute('aria-expanded', 'false');
        nav.classList.remove('is-open');
        document.body.classList.remove('nav-open');
      });
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains('is-open')) {
        toggle.setAttribute('aria-expanded', 'false');
        nav.classList.remove('is-open');
        document.body.classList.remove('nav-open');
        toggle.focus();
      }
    });
  }

  /* Scroll-reveal for sections */
  if ('IntersectionObserver' in window && !prefersReducedMotion) {
    var revealSections = document.querySelectorAll('.home-reveal, .section:not(.hero)');
    var revealItems = document.querySelectorAll('.home-reveal-item');

    var sectionObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            sectionObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.08, rootMargin: '0px 0px -60px 0px' }
    );

    revealSections.forEach(function (el) {
      if (!el.classList.contains('hero')) {
        el.classList.add('reveal');
        sectionObserver.observe(el);
      }
    });

    var itemObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            itemObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );

    revealItems.forEach(function (el) {
      itemObserver.observe(el);
    });
  } else {
    document.querySelectorAll('.reveal, .home-reveal-item').forEach(function (el) {
      el.classList.add('is-visible');
    });
  }
})();
