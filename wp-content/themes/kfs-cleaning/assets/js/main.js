/* KFS Cleaning Services — main.js v1.2
   Vanilla JS — no jQuery dependency
   V8: marquee pause-on-hover, improved accessibility, reduced-motion guard
   V9: nav dropdown touch/keyboard support */
(function () {
  'use strict';

  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ── STICKY HEADER SHADOW ───────────────────────────────────────────── */
  var header = document.getElementById('site-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 50);
    }, { passive: true });
  }

  /* ── HAMBURGER / MOBILE MENU ────────────────────────────────────────── */
  var hamburger  = document.getElementById('hamburger');
  var mobileMenu = document.getElementById('mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      var isOpen = mobileMenu.classList.contains('open');
      mobileMenu.classList.toggle('open', !isOpen);
      hamburger.classList.toggle('open', !isOpen);
      hamburger.setAttribute('aria-expanded', String(!isOpen));
      mobileMenu.setAttribute('aria-hidden', String(isOpen));
    });
    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileMenu.classList.remove('open');
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
      });
    });
  }

  /* ── NAV DROPDOWN (touch/keyboard support) ─────────────────────────────── */
  document.querySelectorAll('.nav-dropdown-toggle').forEach(function(toggle) {
    toggle.addEventListener('click', function(e) {
      var dropdown = this.closest('.nav-dropdown');
      var isOpen = dropdown.classList.contains('open');
      // close all other dropdowns
      document.querySelectorAll('.nav-dropdown').forEach(function(d) { d.classList.remove('open'); });
      if (!isOpen) { dropdown.classList.add('open'); e.preventDefault(); }
    });
  });
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.nav-dropdown')) {
      document.querySelectorAll('.nav-dropdown').forEach(function(d) { d.classList.remove('open'); });
    }
  });

  /* ── SMOOTH SCROLL ──────────────────────────────────────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      var headerH  = header ? header.offsetHeight : 0;
      var topbarEl = document.querySelector('.topbar');
      var topbarH  = topbarEl ? topbarEl.offsetHeight : 0;
      var top = target.getBoundingClientRect().top + window.scrollY - headerH - topbarH - 8;
      if (prefersReducedMotion) {
        window.scrollTo({ top: top });
      } else {
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  /* ── FAQ ACCORDION ──────────────────────────────────────────────────── */
  var faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(function (item) {
    var btn = item.querySelector('.faq-q');
    var ans = item.querySelector('.faq-a');
    if (!btn || !ans) return;
    ans.removeAttribute('hidden');
    btn.addEventListener('click', function () {
      var isOpen = item.classList.contains('open');
      faqItems.forEach(function (other) {
        if (other !== item) {
          other.classList.remove('open');
          var ob = other.querySelector('.faq-q');
          if (ob) ob.setAttribute('aria-expanded', 'false');
        }
      });
      item.classList.toggle('open', !isOpen);
      btn.setAttribute('aria-expanded', String(!isOpen));
    });
  });

  /* ── GALLERY LIGHTBOX ───────────────────────────────────────────────── */
  var lightbox  = document.getElementById('lightbox');
  var lbImg     = document.getElementById('lb-img');
  var lbClose   = document.getElementById('lb-close');
  var lbPrev    = document.getElementById('lb-prev');
  var lbNext    = document.getElementById('lb-next');
  var galItems  = Array.from(document.querySelectorAll('.gal-item'));
  var currentIdx = 0;

  function openLightbox(idx) {
    if (!lightbox || !lbImg || idx < 0 || idx >= galItems.length) return;
    currentIdx = idx;
    var src = galItems[idx].getAttribute('data-src');
    var img = galItems[idx].querySelector('img');
    lbImg.src = src || '';
    lbImg.alt = img ? (img.getAttribute('alt') || 'Gallery image') : 'Gallery image';
    lightbox.classList.add('open');
    lightbox.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    if (lbClose) lbClose.focus();
  }
  function closeLightbox() {
    if (!lightbox) return;
    lightbox.classList.remove('open');
    lightbox.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    if (galItems[currentIdx]) galItems[currentIdx].focus();
  }
  function showNext() { openLightbox((currentIdx + 1) % galItems.length); }
  function showPrev() { openLightbox((currentIdx - 1 + galItems.length) % galItems.length); }

  galItems.forEach(function (item, idx) {
    item.addEventListener('click',   function ()  { openLightbox(idx); });
    item.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openLightbox(idx); }
    });
  });
  if (lbClose)   lbClose.addEventListener('click', closeLightbox);
  if (lbNext)    lbNext.addEventListener('click', showNext);
  if (lbPrev)    lbPrev.addEventListener('click', showPrev);
  if (lightbox)  lightbox.addEventListener('click', function (e) { if (e.target === lightbox) closeLightbox(); });

  document.addEventListener('keydown', function (e) {
    if (!lightbox || !lightbox.classList.contains('open')) return;
    if (e.key === 'Escape')     closeLightbox();
    if (e.key === 'ArrowRight') showNext();
    if (e.key === 'ArrowLeft')  showPrev();
  });

  /* ── MARQUEE PAUSE ON HOVER ─────────────────────────────────────────── */
  // CSS handles pause via .marquee-strip:hover, no JS needed unless user
  // wants keyboard focus pause too.
  var marqueeStrip = document.querySelector('.marquee-strip');
  if (marqueeStrip) {
    marqueeStrip.addEventListener('focusin', function () {
      var track = marqueeStrip.querySelector('.marquee-track');
      if (track) track.style.animationPlayState = 'paused';
    });
    marqueeStrip.addEventListener('focusout', function () {
      var track = marqueeStrip.querySelector('.marquee-track');
      if (track) track.style.animationPlayState = '';
    });
  }

  /* ── SCROLL REVEAL ──────────────────────────────────────────────────── */
  var revealEls = document.querySelectorAll(
    '.svc-card, .trust-card, .review-card, .faq-item, .area-card, .stat-box, .hero-card, .section-head, .mid-cta'
  );
  revealEls.forEach(function (el) { el.classList.add('reveal'); });

  if (prefersReducedMotion) {
    revealEls.forEach(function (el) { el.classList.add('in'); });
  } else if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { observer.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in'); });
  }

  /* ── THANKS BANNER AUTO-HIDE ────────────────────────────────────────── */
  var thanksBanner = document.querySelector('.thanks-banner');
  if (thanksBanner) {
    setTimeout(function () {
      thanksBanner.style.transition = 'opacity .6s';
      thanksBanner.style.opacity = '0';
      setTimeout(function () { thanksBanner.remove(); }, 700);
    }, 5000);
  }

}());
