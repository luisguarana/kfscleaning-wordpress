<?php if (!defined('ABSPATH')) exit; get_header(); ?>
<main id="main-content">


<section class="page-hero">
  <div class="wrap">
    <div class="page-hero-inner">

      <?php if ( function_exists( 'rank_math_the_breadcrumbs' ) && ! is_front_page() ) : ?>
        <div class="breadcrumb">
          <?php rank_math_the_breadcrumbs(); ?>
        </div>
      <?php endif; ?>

      <h1>Move-in &amp; move-out cleaning in MA &amp; NH</h1>
      <p class="page-hero-sub">Leave your old place spotless or step into a fresh new home. Inspection-ready results for tenants, landlords, and realtors.</p>
      <div class="pill-row">
        <span class="pill">Deposit-Back Results</span>
        <span class="pill">Licensed &amp; Insured</span>
        <span class="pill">Flat-Rate Pricing</span>
        <span class="pill">All Surfaces Covered</span>
      </div>
      <a href="#quote" class="btn-primary">Get a Free Quote</a>
    </div>
  </div>
</section>

<section class="content-section section-alt">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>Everything covered</h2>
        <p class="section-lead">A thorough top-to-bottom clean designed to pass inspection and impress — every time.</p>
        <div class="inc-list">
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Full kitchen deep clean including inside appliances</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Bathrooms scrubbed and sanitized completely</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>All floors vacuumed and mopped</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Inside all closets and cabinets</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Baseboards, doors, and door frames wiped</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Light fixtures and ceiling fans cleaned</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Window sills and blinds wiped</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Walls spot-cleaned</span></div>
        </div>
      </div>
      <div>
        <h2>Built for every situation</h2>
        <p class="section-lead">Whether you're moving out, turning a unit, or prepping for a showing — we've got you covered.</p>
        <div class="sched-grid reveal">
          <div class="sched-card"><h3>Tenants</h3><p>Protect your deposit with a professional clean that meets landlord expectations.</p></div>
          <div class="sched-card"><h3>Landlords &amp; property managers</h3><p>Fast unit turnaround between tenants so you don't lose rental income.</p></div>
          <div class="sched-card"><h3>Realtors &amp; home sellers</h3><p>Get the home show-ready and make the right first impression on buyers.</p></div>
          <div class="sched-card"><h3>New homeowners</h3><p>Start completely fresh in your new space before moving a single box in.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content-section">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>Honest flat-rate quotes</h2>
        <p class="section-lead">Move-out cleans in the North Shore MA area typically run $250–$800 depending on size and condition. We price by the job, not by the hour — so you know the cost upfront.</p>
        <div class="price-band reveal">
          <p class="price-lbl">Starting from</p>
          <div class="price-num">$250–$800</div>
          <p class="price-lbl">Typical range for MA &amp; NH homes</p>
        </div>
      </div>
      <div class="trust-cards-stack">
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="tc-content"><h3>Licensed &amp; insured in MA &amp; NH</h3><p>Fully covered on every job. Your property is protected and we carry the right credentials in both states.</p></div>
        </div>
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
          <div class="tc-content"><h3>Satisfaction guarantee</h3><p>If something wasn't cleaned to your standard, we return within 24 hours and fix it at no extra charge.</p></div>
        </div>
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <div class="tc-content"><h3>24-hour response on quotes</h3><p>Submit a request today and we'll get back to you with a flat-rate number within 24 hours — often same day.</p></div>
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
      <p class="contact-lead">Fill out the form and we'll respond within 24 hours with a no-obligation estimate. Or call us right now.</p>
      <div class="ci-items">
        <div class="ci-item"><div class="ci-ico"><svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div><div><div class="ci-label">Phone</div><a href="tel:+19782199787" class="ci-value">(978) 219-9787</a></div></div>
        <div class="ci-item"><div class="ci-ico"><svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><div><div class="ci-label">Email</div><a href="mailto:support@kfscleaning.com" class="ci-value">support@kfscleaning.com</a></div></div>
        <div class="ci-item"><div class="ci-ico"><svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="ci-label">Hours</div><span class="ci-value">Mon–Sat · 8am–6pm</span></div></div>
      </div>
    </div>
    <div class="form-card">
      <h3>Get a free quote</h3>
      <p class="form-sub">No commitment required — we respond within 24 hours.</p>
      <form action="https://formsubmit.co/support@kfscleaning.com" method="POST" class="quote-form">
        <!-- FormSubmit.co configuration -->
        <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
        <input type="hidden" name="_next" value="<?php echo esc_url( kfs_thanks_url() ); ?>">
        <input type="hidden" name="_subject" value="New Quote Request — Move-In / Move-Out page">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="table">
        <p class="form-legend"><span class="req" aria-hidden="true">*</span> Required</p>
        <div class="form-row">
          <div class="fld"><label for="full-name">Full Name <span class="req" aria-hidden="true">*</span></label><input type="text" id="full-name" name="Full Name" placeholder="Jane Smith" required autocomplete="name"></div>
          <div class="fld"><label for="phone">Phone <span class="req" aria-hidden="true">*</span></label><input type="tel" id="phone" name="Phone" placeholder="(978) 555-0100" required autocomplete="tel"></div>
        </div>
        <div class="fld"><label for="email">Email <span class="req" aria-hidden="true">*</span></label><input type="email" id="email" name="email" placeholder="jane@example.com" required autocomplete="email"></div>
        <div class="form-row">
          <div class="fld"><label for="service">Service Needed</label><select id="service" name="Service"><option>Regular Home Cleaning</option><option>Deep Cleaning</option><option selected>Move-In / Move-Out</option><option>Commercial &amp; Office</option><option>Post-Construction</option><option>Airbnb / STR Turnover</option><option>Not Sure / Other</option></select></div>
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
    <div class="section-head reveal">
      <h2>Common questions</h2>
      <p>Answers to what tenants, landlords, and realtors ask most before booking.</p>
    </div>
    <div class="faq-list">
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Do you guarantee I'll get my deposit back?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>We can't make promises about a landlord's decision, but we can give you the best possible shot. Our move-out cleans are designed to meet professional inspection standards — and if your landlord flags anything related to cleanliness, we'll come back and address it. Most clients who use us have no cleaning-related deposit deductions.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>How far in advance should I book?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>We recommend booking at least 3–5 days before your move-out date to lock in your preferred time. That said, we do accommodate last-minute requests when our schedule allows — reach out and we'll do our best to fit you in.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Do you clean empty properties only?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>No — we clean both occupied and empty properties. For move-out cleans, it's easiest when the home is empty since we can reach every surface. But we can also work around furniture and boxes if you're still in the process of moving. Just let us know the situation in your quote request.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>How long does a move-out clean take?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Most move-out cleans take 3–6 hours depending on the size of the home and its condition. We'll give you a realistic estimate with your quote. We don't rush — we stay until the job is done right.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>What if the previous tenant left it in really bad shape?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>We've seen it all — and we handle it. Heavily soiled properties may take longer and may be priced slightly higher than a standard move-out clean. We'll let you know upfront when you request your quote so there are no surprises. For extreme cases we'll walk through the scope honestly before any work begins.</p></div></div>
    </div>
    <div class="service-cta-block reveal">
      <h2>Moving? Let us handle the clean.</h2>
      <p>Get a free flat-rate quote today. We respond within 24 hours.</p>
      <a href="#quote" class="btn-primary">Request My Free Quote</a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
