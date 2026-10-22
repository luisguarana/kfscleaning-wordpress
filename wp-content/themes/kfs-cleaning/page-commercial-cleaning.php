<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header(); ?>
<main id="main-content">


<section class="page-hero">
  <div class="wrap">
    <div class="page-hero-inner">

      <?php if ( function_exists( 'rank_math_the_breadcrumbs' ) && ! is_front_page() ) : ?>
        <div class="breadcrumb">
          <?php rank_math_the_breadcrumbs(); ?>
        </div>
      <?php endif; ?>

      <h1>Commercial &amp; office cleaning in MA &amp; NH</h1>
      <p class="page-hero-sub">Your workspace reflects your business. KFS Cleaning keeps it spotless &#8212; with flexible scheduling that doesn&#8217;t disrupt your workday.</p>
      <div class="pill-row">
        <span class="pill">Licensed &amp; Insured</span>
        <span class="pill">After-Hours Available</span>
        <span class="pill">Recurring Contracts</span>
        <span class="pill">All Supplies Included</span>
      </div>
      <a href="#quote" class="btn-primary">Get a Free Quote</a>
    </div>
  </div>
</section>

<section class="content-section section-alt">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>What we clean</h2>
        <p class="section-lead">Professional cleaning for every type of commercial space &#8212; no job too big or too small.</p>
        <div class="inc-list">
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span><strong>Office Cleaning</strong> &#8212; desks, common areas, break rooms, restrooms</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span><strong>Retail Space Cleaning</strong> &#8212; floors, displays, fitting rooms, entrances</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span><strong>Medical Office Cleaning</strong> &#8212; sanitation-focused, detail-oriented</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span><strong>Gym &amp; Studio Cleaning</strong> &#8212; equipment wipe-down, locker rooms, floors</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span><strong>Small Warehouse / Facility Cleaning</strong> &#8212; upon request</span></div>
        </div>
      </div>
      <div>
        <h2>Built around your business</h2>
        <p class="section-lead">We work around your hours &#8212; not the other way around.</p>
        <div class="sched-grid reveal">
          <div class="sched-card"><h3>Before-hours clean</h3><p>Arrive before your team does &#8212; workspace is fresh and ready from the first minute.</p></div>
          <div class="sched-card"><h3>After-hours clean</h3><p>We come in after everyone leaves so your team is never interrupted.</p></div>
          <div class="sched-card"><h3>Weekend service</h3><p>Monday morning feels like a fresh start &#8212; zero disruption to your work week.</p></div>
          <div class="sched-card"><h3>Recurring contract</h3><p>Weekly, bi-weekly, or monthly &#8212; locked in pricing, consistent service.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content-section">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>The commercial cleaning partner you can count on</h2>
        <p class="section-lead">We treat your business like it&#8217;s ours. Consistent results, predictable pricing, and a team that shows up when they say they will.</p>
      </div>
      <div class="trust-cards-stack">
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="tc-content"><h3>Licensed &amp; insured in MA &amp; NH</h3><p>Fully covered in both states. Your property and liability are protected on every commercial visit.</p></div>
        </div>
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M6 20v-2a6 6 0 0 1 12 0v2"/></svg></div>
          <div class="tc-content"><h3>A consistent team</h3><p>We keep the same people on your space whenever we can, so there&rsquo;s no re-explaining preferences. Your team learns your space and keeps it that way.</p></div>
        </div>
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
          <div class="tc-content"><h3>Locally owned</h3><p>You deal with the owner &#8212; not a call center. Quick decisions, real accountability, local pride.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content-section section-alt">
  <div class="wrap">
    <div class="section-head reveal">
      <h2>See the difference</h2>
      <p>Real results from real cleaning jobs across Massachusetts and New Hampshire.</p>
    </div>
    <div class="svc-gallery-grid">
      <?php
      $svc_imgs = array(
        array('src' => get_template_directory_uri().'/assets/images/gallery/kitchen-deep-clean.jpg', 'alt' => 'Kitchen Deep Clean'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/kitchen-refresh.jpg', 'alt' => 'Kitchen Refresh'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/office-cleaning.jpg', 'alt' => 'Office Cleaning'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/bathroom-detail.jpg', 'alt' => 'Bathroom Detail'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/move-out-clean.jpg', 'alt' => 'Move-Out Clean'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/post-construction-clean.jpg', 'alt' => 'Post-Construction Clean'),
      );
      foreach ( $svc_imgs as $img ) : ?>
      <div class="svc-gal-item reveal">
        <img src="<?php echo esc_url( $img['src'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?> — KFS Cleaning Services MA &amp; NH" loading="lazy">
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="contact-section" id="quote">
  <div class="wrap contact-inner">
    <div class="contact-info">
      <h2>Request your free quote</h2>
      <p class="contact-lead">Fill out the form and we&#8217;ll respond within 24 hours with a no-obligation estimate. Or call us right now.</p>
      <div class="ci-items">
        <div class="ci-item"><div class="ci-ico"><svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div><div><div class="ci-label">Phone</div><a href="tel:+19782199787" class="ci-value">(978) 219-9787</a></div></div>
        <div class="ci-item"><div class="ci-ico"><svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><div><div class="ci-label">Email</div><a href="mailto:support@kfscleaning.com" class="ci-value">support@kfscleaning.com</a></div></div>
        <div class="ci-item"><div class="ci-ico"><svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="ci-label">Hours</div><span class="ci-value">Mon&#8211;Sat &middot; 8am&#8211;6pm</span></div></div>
      </div>
    </div>
    <div class="form-card">
      <h3>Get a free quote</h3>
      <p class="form-sub">We reply within 24 hours. The price we quote is the price you pay. Miss a spot? We re-clean it free.</p>
      <form action="https://formsubmit.co/support@kfscleaning.com" method="POST" class="quote-form">
        <!-- FormSubmit.co configuration -->
        <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
        <input type="hidden" name="_next" value="<?php echo esc_url( kfs_thanks_url() ); ?>">
        <input type="hidden" name="_subject" value="New Quote Request — Commercial & Office page">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="table">
        <p class="form-legend"><span class="req" aria-hidden="true">*</span> Required</p>
        <div class="form-row">
          <div class="fld"><label for="full-name">Full Name <span class="req" aria-hidden="true">*</span></label><input type="text" id="full-name" name="Full Name" placeholder="Jane Smith" required autocomplete="name"></div>
          <div class="fld"><label for="phone">Phone <span class="req" aria-hidden="true">*</span></label><input type="tel" id="phone" name="Phone" placeholder="(978) 555-0100" required autocomplete="tel"></div>
        </div>
        <div class="fld"><label for="email">Email <span class="req" aria-hidden="true">*</span></label><input type="email" id="email" name="email" placeholder="jane@example.com" required autocomplete="email"></div>
        <div class="form-row">
          <div class="fld"><label for="service">Service Needed</label><select id="service" name="Service"><option>Regular Home Cleaning</option><option>Deep Cleaning</option><option>Move-In / Move-Out</option><option selected>Commercial &amp; Office</option><option>Post-Construction</option><option>Airbnb / STR Turnover</option><option>Not Sure / Other</option></select></div>
          <div class="fld"><label for="frequency">Frequency</label><select id="frequency" name="Frequency"><option value="">— How often? —</option><option>One-Time</option><option>Weekly</option><option>Bi-Weekly (Every 2 weeks)</option><option>Monthly</option></select></div>
        </div>
        <div class="form-row">
          <div class="fld"><label for="bedrooms">Bedrooms</label><input type="number" id="bedrooms" name="Bedrooms" min="0" max="20" inputmode="numeric" placeholder="e.g. 3"></div>
          <div class="fld"><label for="bathrooms">Bathrooms</label><input type="number" id="bathrooms" name="Bathrooms" min="0" max="20" step="0.5" inputmode="decimal" placeholder="e.g. 2"></div>
        </div>
        <div class="fld"><label for="sqft">Square Footage <span class="fld-hint">(approximate is fine)</span></label><input type="number" id="sqft" name="Square Footage" min="100" max="20000" inputmode="numeric" placeholder="e.g. 1500"></div>
        <div class="fld"><label for="message">Special Requests or Notes</label><textarea id="message" name="Notes" rows="3" placeholder="Tell us anything that helps us prepare your quote..."></textarea></div>
        <button type="submit" class="btn-primary btn-full form-submit">Request My Free Quote</button>
        <p class="form-note">Your info is private and never shared.</p>
      </form>
    </div>
  </div>
</section>

<section class="content-section section-alt" id="faq">
  <div class="wrap">
    <div class="section-head reveal"><h2>Commercial cleaning questions</h2><p>Everything you need to know before booking your first commercial clean.</p></div>
    <div class="faq-list">
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Do you offer after-hours or weekend commercial cleaning?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Yes. We offer before-hours, after-hours, and weekend commercial cleaning specifically so your cleaning schedule never interferes with your business operations. Just let us know your preferred window and we&#8217;ll work around it.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Can you provide a certificate of insurance?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Absolutely. KFS Cleaning is fully licensed and insured in both MA and NH. We can provide a certificate of insurance (COI) upon request &#8212; most commercial clients receive it before the first visit.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>How do I get a commercial cleaning quote?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Fill out the quote form below with your space details, or call us directly at (978) 219-9787. For commercial spaces we typically do a brief walkthrough &#8212; in person or via photos &#8212; before providing a flat monthly rate. No surprises on the invoice.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Do you offer long-term contracts?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Yes. Most of our commercial clients are on recurring contracts &#8212; weekly, bi-weekly, or monthly. Contracts provide locked-in pricing and guaranteed scheduling priority. We also offer one-time commercial cleans if you just need a reset.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>What types of commercial spaces do you clean?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>We clean offices, retail spaces, medical offices, gyms and fitness studios, and small warehouses or facilities. If you&#8217;re unsure whether your space qualifies, just call &#8212; we&#8217;ll let you know within minutes.</p></div></div>
    </div>
    <div class="service-cta-block reveal">
      <h2>Keep your business spotless</h2>
      <p>Get a flat-rate commercial cleaning quote &#8212; we&#8217;ll do a walkthrough and give you a monthly rate upfront.</p>
      <a href="#quote" class="btn-primary">Request Your Free Quote</a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
