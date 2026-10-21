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

      <h1>Airbnb &amp; STR cleaning in MA &amp; NH</h1>
      <p class="page-hero-sub">A 5-star guest experience starts with a spotless property. One bad cleanliness review costs you months of bookings &#8212; don&#8217;t risk it.</p>
      <div class="pill-row">
        <span class="pill">Flexible Timing</span>
        <span class="pill">Damage Reporting</span>
        <span class="pill">Linen Changes</span>
        <span class="pill">Restock Service</span>
      </div>
      <a href="#quote" class="btn-primary">Get a Free Quote</a>
    </div>
  </div>
</section>

<section class="content-section section-alt">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>Guest-ready from every angle</h2>
        <p class="section-lead">We treat every turnover like a 5-star hotel reset &#8212; nothing is missed, nothing is assumed clean.</p>
        <div class="inc-list">
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Full linen change</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Bathrooms fully sanitized and restocked</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Kitchen cleaned and reset</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>All surfaces wiped and disinfected</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Floors vacuumed and mopped</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Trash removed and bins lined</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Damage report with photos sent after every clean</span></div>
          <div class="inc-item"><span class="inc-check" aria-hidden="true"></span><span>Amenity restock upon request</span></div>
        </div>
      </div>
      <div>
        <h2>Built around your bookings</h2>
        <p class="section-lead">We adapt to your check-in and check-out windows &#8212; no matter how tight the turnaround.</p>
        <div class="sched-grid reveal">
          <div class="sched-card"><h3>Flexible timing</h3><p>We work around any checkout/check-in window &#8212; early or late, we make it work.</p></div>
          <div class="sched-card"><h3>Damage reporting</h3><p>We photograph anything guests break and send you a report immediately after every clean.</p></div>
          <div class="sched-card"><h3>Restock service</h3><p>Toiletries, paper products, and supplies restocked to your spec before the next guest arrives.</p></div>
          <div class="sched-card"><h3>Same-day available</h3><p>With enough advance notice, we can turn your property the same day checkout happens.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content-section">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <h2>Protect your rating, protect your revenue</h2>
        <p class="section-lead">One cleanliness complaint can tank your listing ranking for months. KFS gives you a reliable team that shows up, does the job right, and keeps you covered.</p>
      </div>
      <div class="trust-cards-stack">
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
          <div class="tc-content"><h3>Reliable scheduling</h3><p>We show up every time &#8212; no last-minute cancellations, no excuses. Your guests won&#8217;t walk into a dirty property.</p></div>
        </div>
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg></div>
          <div class="tc-content"><h3>Photo documentation</h3><p>Damage reports with photos after every clean protect your investment and give you evidence for Airbnb disputes.</p></div>
        </div>
        <div class="trust-card reveal">
          <div class="tc-icon"><svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
          <div class="tc-content"><h3>Locally responsive</h3><p>Real people, real phone number &#8212; not a ticketing system. Call us and someone picks up.</p></div>
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
      <p class="form-sub">No commitment required &#8212; we respond within 24 hours.</p>
      <form action="https://formsubmit.co/support@kfscleaning.com" method="POST" class="quote-form">
        <!-- FormSubmit.co configuration -->
        <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
        <input type="hidden" name="_next" value="<?php echo esc_url( kfs_thanks_url() ); ?>">
        <input type="hidden" name="_subject" value="New Quote Request — Airbnb / STR Turnover page">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="table">
        <p class="form-legend"><span class="req" aria-hidden="true">*</span> Required</p>
        <div class="form-row">
          <div class="fld"><label for="full-name">Full Name <span class="req" aria-hidden="true">*</span></label><input type="text" id="full-name" name="Full Name" placeholder="Jane Smith" required autocomplete="name"></div>
          <div class="fld"><label for="phone">Phone <span class="req" aria-hidden="true">*</span></label><input type="tel" id="phone" name="Phone" placeholder="(978) 555-0100" required autocomplete="tel"></div>
        </div>
        <div class="fld"><label for="email">Email <span class="req" aria-hidden="true">*</span></label><input type="email" id="email" name="email" placeholder="jane@example.com" required autocomplete="email"></div>
        <div class="form-row">
          <div class="fld"><label for="service">Service Needed</label><select id="service" name="Service"><option>Regular Home Cleaning</option><option>Deep Cleaning</option><option>Move-In / Move-Out</option><option>Commercial &amp; Office</option><option>Post-Construction</option><option selected>Airbnb / STR Turnover</option><option>Not Sure / Other</option></select></div>
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
    <div class="section-head reveal"><h2>STR cleaning questions</h2><p>Everything Airbnb and VRBO hosts ask before booking their first turnover.</p></div>
    <div class="faq-list">
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Can you do same-day turnovers?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Yes, with enough advance notice. If you know your checkout time a day or more ahead, we can schedule a same-day turnover before your next guest arrives. Last-minute requests are handled case by case &#8212; call us directly at (978) 219-9787 for urgent needs.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>What if a guest leaves the property trashed?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>It happens. We document everything with photos, handle the cleanup, and send you a full damage report. If additional charges apply for excessive mess, we&#8217;ll communicate that before proceeding &#8212; no surprise invoices.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Do you communicate with guests directly?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Only if you want us to. Most hosts prefer we coordinate exclusively with them &#8212; we respect that. If you&#8217;d like us to handle direct guest communication about access or timing, we can do that too. Just let us know your preference when setting up your account.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Can you restock supplies?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Yes. We offer a restock service for toiletries, paper products, and other supplies. You provide the inventory or we can source common items at cost. Just give us your restock checklist and we&#8217;ll make sure every guest arrives to a fully stocked property.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>How do I set up recurring turnover service?</span><span class="faq-icon" aria-hidden="true">+</span></button><div class="faq-a"><p>Fill out the quote form below or call us at (978) 219-9787. We&#8217;ll discuss your property, typical booking frequency, and preferred windows. Most STR hosts are set up within 24&#8211;48 hours of the first conversation.</p></div></div>
    </div>
    <div class="service-cta-block reveal">
      <h2>5-star guest experiences start here</h2>
      <p>Book KFS for your Airbnb or VRBO &#8212; reliable, guest-ready cleans on every turnover.</p>
      <a href="#quote" class="btn-primary">Request Your Free Quote</a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>