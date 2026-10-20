/* KFS Cleaning Services — main.js v1.2
   Vanilla JS — no jQuery dependency
   V8: marquee pause-on-hover, improved accessibility, reduced-motion guard
   V9: nav dropdown touch/keyboard support
   V10: Escape closes menus, lightbox focus trap, form sending state */
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
  function setMobileMenu(open) {
    mobileMenu.classList.toggle('open', open);
    hamburger.classList.toggle('open', open);
    hamburger.setAttribute('aria-expanded', String(open));
    hamburger.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    mobileMenu.setAttribute('aria-hidden', String(!open));
  }
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      setMobileMenu(!mobileMenu.classList.contains('open'));
    });
    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () { setMobileMenu(false); });
    });
  }

  /* ── NAV DROPDOWN (touch/keyboard support) ─────────────────────────────── */
  function closeDropdowns() {
    document.querySelectorAll('.nav-dropdown').forEach(function (d) {
      d.classList.remove('open');
      var t = d.querySelector('.nav-dropdown-toggle');
      if (t) t.setAttribute('aria-expanded', 'false');
    });
  }
  document.querySelectorAll('.nav-dropdown-toggle').forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
      var dropdown = this.closest('.nav-dropdown');
      var isOpen = dropdown.classList.contains('open');
      closeDropdowns();
      // First tap opens the menu (touch has no hover); second tap follows the link.
      if (!isOpen) {
        dropdown.classList.add('open');
        this.setAttribute('aria-expanded', 'true');
        e.preventDefault();
      }
    });
  });
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav-dropdown')) closeDropdowns();
  });
  document.querySelectorAll('.nav-dropdown').forEach(function (d) {
    d.addEventListener('mouseleave', function () { d.classList.remove('dismissed'); });
    d.addEventListener('focusout', function (e) {
      if (!d.contains(e.relatedTarget)) d.classList.remove('dismissed');
    });
  });

  /* ── ESCAPE closes menus ────────────────────────────────────────────── */
  document.addEventListener('keydown', function (e) {
    if (e.key !== 'Escape') return;
    var openDropdown = document.querySelector('.nav-dropdown.open, .nav-dropdown:focus-within');
    if (openDropdown) {
      closeDropdowns();
      // .dismissed overrides the :hover / :focus-within reveal until the pointer or focus leaves.
      openDropdown.classList.add('dismissed');
      var t = openDropdown.querySelector('.nav-dropdown-toggle');
      if (t) t.focus();
    }
    if (mobileMenu && mobileMenu.classList.contains('open')) {
      setMobileMenu(false);
      hamburger.focus();
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
  faqItems.forEach(function (item, idx) {
    var btn = item.querySelector('.faq-q');
    var ans = item.querySelector('.faq-a');
    if (!btn || !ans) return;
    ans.removeAttribute('hidden');
    if (!ans.id) ans.id = 'faq-a-auto-' + idx;
    btn.setAttribute('aria-controls', ans.id);
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
    document.body.classList.add('lightbox-open');
    document.body.style.overflow = 'hidden';
    if (lbClose) lbClose.focus();
  }
  function closeLightbox() {
    if (!lightbox) return;
    lightbox.classList.remove('open');
    lightbox.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('lightbox-open');
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
  // Clicking anywhere except the photo or its buttons closes the lightbox.
  if (lightbox)  lightbox.addEventListener('click', function (e) {
    if (e.target === lbImg || e.target.closest('button')) return;
    closeLightbox();
  });

  document.addEventListener('keydown', function (e) {
    if (!lightbox || !lightbox.classList.contains('open')) return;
    if (e.key === 'Escape')     closeLightbox();
    if (e.key === 'ArrowRight') showNext();
    if (e.key === 'ArrowLeft')  showPrev();
    // Keep Tab focus inside the open lightbox.
    if (e.key === 'Tab') {
      var btns = Array.from(lightbox.querySelectorAll('button'));
      var first = btns[0], last = btns[btns.length - 1];
      if (btns.indexOf(document.activeElement) === -1) { e.preventDefault(); first.focus(); }
      else if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    }
  });

  /* ── SCROLL REVEAL ──────────────────────────────────────────────────── */
  var revealEls = document.querySelectorAll(
    '.reveal, .svc-card, .trust-card, .faq-item, .area-card, .stat-box, .hero-card, .section-head, .mid-cta'
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

  /* ── THANKS BANNER (stays until dismissed) ──────────────────────────── */
  var thanksBanner = document.querySelector('.thanks-banner');
  if (thanksBanner) {
    var thanksClose = thanksBanner.querySelector('.thanks-close');
    if (thanksClose) thanksClose.addEventListener('click', function () { thanksBanner.remove(); });
  }

  /* ── QUOTE FORMS: sending state ─────────────────────────────────────── */
  // Browser validation (required / email / tel) runs first; submit only fires when valid.
  document.querySelectorAll('.quote-form').forEach(function (form) {
    var btn = form.querySelector('button[type="submit"]');
    if (!btn) return;
    var label = btn.innerHTML;
    form.addEventListener('submit', function () {
      btn.disabled = true;
      btn.textContent = 'Sending\u2026';
    });
    // Restore the button if the visitor returns with the browser Back button.
    window.addEventListener('pageshow', function () {
      btn.disabled = false;
      btn.innerHTML = label;
    });
  });

}());
