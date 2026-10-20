<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header(); ?>

<style>
:root{--navy:#060e1c;--navy-mid:#080f1f;--navy-card:#0d1727;--blue-dark:#1B2F6E;--blue:#2356B4;--cyan:#00C8E8;--cyan-dark:#0099bb;--white:#fff;--text-muted:rgba(255,255,255,.65);--text-body:rgba(255,255,255,.85);--border:rgba(0,200,232,.14);--radius-sm:10px;--radius:14px;--radius-lg:22px;--t:200ms ease}
.page-hero{position:relative;padding:72px 0 80px;background:linear-gradient(135deg,var(--navy),#091f45);overflow:hidden}
.page-hero::before{content:'';position:absolute;inset:0;background-image:linear-gradient(rgba(0,200,232,.03) 1px,transparent 1px),linear-gradient(90deg,rgba(0,200,232,.03) 1px,transparent 1px);background-size:60px 60px;pointer-events:none}
.page-hero-inner{position:relative;z-index:1;max-width:760px}
.breadcrumb{display:flex;align-items:center;gap:8px;font-size:13px;color:var(--text-muted);margin-bottom:18px}
.breadcrumb a{color:var(--cyan)}
.eyebrow{font-family:'Space Grotesk',sans-serif;font-size:12px;font-weight:700;letter-spacing:.15em;text-transform:uppercase;color:var(--cyan);margin-bottom:12px}
.page-hero h1{font-size:clamp(28px,3.8vw,50px);letter-spacing:-.5px;margin-bottom:14px}
.page-hero-sub{font-size:17px;color:var(--text-muted);max-width:600px;line-height:1.7;margin-bottom:26px}
.pill-row{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:28px}
.pill{display:inline-flex;align-items:center;gap:6px;background:rgba(0,200,232,.1);border:1px solid rgba(0,200,232,.3);color:rgba(255,255,255,.85);font-size:13px;font-weight:600;padding:6px 14px;border-radius:50px}
.content-section{padding:80px 0}
.section-alt{background:var(--navy-mid)}
.two-col-grid{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:start}
.inc-list{display:flex;flex-direction:column;gap:10px;margin-top:20px}
.inc-item{display:flex;align-items:flex-start;gap:10px;font-size:15px;color:var(--text-body)}
.inc-check{color:var(--cyan);flex-shrink:0;font-size:18px;line-height:1.2}
.sched-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:24px}
.sched-card{background:var(--navy-card);border:1px solid var(--border);border-radius:var(--radius);padding:24px 20px;transition:border-color var(--t)}
.sched-card:hover{border-color:rgba(0,200,232,.4)}
.sched-card h4{font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:16px;color:var(--cyan);margin-bottom:8px}
.sched-card p{font-size:14px;color:var(--text-muted);line-height:1.6}
.trust-cards-stack{display:flex;flex-direction:column;gap:16px}
.trust-card{display:flex;align-items:flex-start;gap:16px;background:var(--navy-card);border:1px solid var(--border);border-radius:var(--radius);padding:22px 24px;transition:border-color var(--t),transform var(--t)}
.trust-card:hover{border-color:rgba(0,200,232,.4);transform:translateX(3px)}
.tc-icon{flex-shrink:0;width:44px;height:44px;border-radius:10px;background:rgba(0,200,232,.1);border:1px solid rgba(0,200,232,.2);display:flex;align-items:center;justify-content:center;color:var(--cyan)}
.tc-content h4{font-size:16px;margin-bottom:6px;color:var(--white)}
.tc-content p{font-size:14px;color:var(--text-muted);line-height:1.6}
.stats-quad{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.stat-box{background:var(--navy-card);border:1px solid var(--border);border-radius:var(--radius);padding:22px 20px;text-align:center;transition:border-color var(--t)}
.stat-box:hover{border-color:rgba(0,200,232,.4)}
.stat-num{font-family:'Space Grotesk',sans-serif;font-size:30px;font-weight:700;color:var(--cyan);line-height:1;margin-bottom:6px}
.stat-label{font-size:12px;color:var(--text-muted);text-transform:uppercase;letter-spacing:.08em}
.price-band{background:linear-gradient(135deg,var(--blue-dark),var(--blue));border-radius:var(--radius-lg);padding:36px;text-align:center;margin-top:24px}
.price-num{font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:40px;color:var(--white);line-height:1;margin:8px 0}
.price-lbl{font-size:14px;color:rgba(255,255,255,.75)}
.section-head{text-align:center;max-width:660px;margin:0 auto 56px}
.section-head h2{margin-bottom:14px}
.section-head p{color:var(--text-muted);font-size:17px}
.faq-list{max-width:820px;margin:0 auto;display:flex;flex-direction:column;gap:12px}
.faq-item{background:var(--navy-card);border:1px solid var(--border);border-radius:var(--radius);overflow:hidden;transition:border-color var(--t)}
.faq-item:hover{border-color:rgba(0,200,232,.35)}
.faq-item.open{border-color:rgba(0,200,232,.4)}
.faq-q{display:flex;justify-content:space-between;align-items:center;gap:16px;width:100%;padding:20px 24px;text-align:left;font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:16px;color:var(--white);cursor:pointer;transition:color var(--t);min-height:44px}
.faq-q:hover{color:var(--cyan)}
.faq-icon{flex-shrink:0;width:28px;height:28px;border-radius:50%;background:rgba(0,200,232,.12);display:flex;align-items:center;justify-content:center;color:var(--cyan);font-size:20px;font-weight:700;transition:transform .3s,background .3s}
.faq-item.open .faq-icon{transform:rotate(45deg);background:var(--cyan);color:#060e1c}
.faq-a{max-height:0;overflow:hidden;transition:max-height .35s ease;padding:0 24px}
.faq-item.open .faq-a{max-height:320px}
.faq-a p{padding-bottom:22px;font-size:15px;color:var(--text-muted);line-height:1.7}
.service-cta-block{background:linear-gradient(135deg,var(--blue-dark),var(--blue));border-radius:var(--radius-lg);padding:52px 40px;text-align:center;margin-top:40px;position:relative;overflow:hidden}
.service-cta-block::before{content:'';position:absolute;inset:0;background-image:radial-gradient(circle at 1px 1px,rgba(255,255,255,.06) 1px,transparent 0);background-size:30px 30px}
.service-cta-block h2{position:relative;font-size:clamp(22px,3vw,32px);color:var(--white);margin-bottom:12px}
.service-cta-block p{position:relative;color:rgba(255,255,255,.82);font-size:16px;max-width:560px;margin:0 auto 28px}
.service-cta-block .btn-primary{position:relative;background:var(--white);color:var(--blue-dark);box-shadow:0 6px 24px rgba(0,0,0,.25)}
.contact-section{padding:88px 0}
.contact-inner{display:grid;grid-template-columns:.9fr 1.1fr;gap:56px;align-items:start}
.contact-info h2{margin-bottom:16px}
.contact-lead{font-size:16px;color:var(--text-muted);margin-bottom:34px;line-height:1.7}
.ci-items{display:flex;flex-direction:column;gap:18px}
.ci-item{display:flex;align-items:flex-start;gap:16px}
.ci-ico{width:46px;height:46px;flex-shrink:0;border-radius:var(--radius-sm);background:rgba(0,200,232,.1);border:1px solid rgba(0,200,232,.3);display:flex;align-items:center;justify-content:center;color:var(--cyan)}
.ci-label{font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:var(--text-muted);margin-bottom:3px}
.ci-value{font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:16px;color:var(--white)}
a.ci-value:hover{color:var(--cyan)}
.form-card{background:#fff;border-radius:var(--radius-lg);padding:40px;box-shadow:0 30px 70px rgba(0,0,0,.35)}
.form-card h3{color:#060e1c;font-size:22px;margin-bottom:6px}
.form-sub{font-size:14px;color:#516079;margin-bottom:28px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.fld{margin-bottom:14px}
.fld label{display:block;font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:13px;color:#516079;margin-bottom:7px}
.req{color:var(--cyan-dark)}
.fld input,.fld select,.fld textarea{width:100%;padding:12px 14px;border:1.5px solid rgba(14,42,92,.18);border-radius:var(--radius-sm);font-family:'Inter',sans-serif;font-size:15px;color:#516079;background:#f7fbfe;transition:border-color var(--t),box-shadow var(--t)}
.fld select{cursor:pointer}
.fld input:focus,.fld select:focus,.fld textarea:focus{outline:none;border-color:var(--cyan-dark);box-shadow:0 0 0 3px rgba(0,200,232,.15)}
.fld textarea{resize:vertical;min-height:90px}
.form-note{text-align:center;font-size:13px;color:#516079;margin-top:12px}
.reveal{opacity:0;transform:translateY(24px);transition:opacity .65s cubic-bezier(.16,1,.3,1),transform .65s cubic-bezier(.16,1,.3,1)}
.reveal.in{opacity:1;transform:none}
@media(max-width:900px){.contact-inner{grid-template-columns:1fr}.two-col-grid{grid-template-columns:1fr;gap:32px}.sched-grid{grid-template-columns:1fr}}
@media(max-width:768px){.form-row{grid-template-columns:1fr}.stats-quad{grid-template-columns:1fr 1fr}}
@media(prefers-reduced-motion:reduce){*,*::before,*::after{animation-duration:.01ms !important;transition-duration:.01ms !important}.reveal{opacity:1;transform:none;transition:none}}
</style>

<section class="page-hero">
  <div class="wrap">
    <div class="page-hero-inner">

      <?php if ( function_exists( 'rank_math_the_breadcrumbs' ) && ! is_front_page() ) : ?>
        <div class="breadcrumb">
          <?php rank_math_the_breadcrumbs(); ?>
        </div>
      <?php endif; ?>

      <p class="eyebrow">Post-Construction</p>
      <h1>Post-Construction Cleaning<br>Services in <span class="accent">MA &amp; NH</span></h1>
      <p class="page-hero-sub">Contractors build it. We make it livable. KFS removes drywall dust, adhesive residue, paint overspray, and debris from every corner.</p>
      <div class="pill-row">
        <span class="pill">&#10003; Licensed &amp; Insured</span>
        <span class="pill">&#10003; Flat-Rate Pricing</span>
        <span class="pill">&#10003; All Equipment Included</span>
        <span class="pill">&#10003; Move-In Ready Results</span>
      </div>
      <a href="#quote" class="btn-primary">Get a Free Quote &#8594;</a>
    </div>
  </div>
</section>

<section class="content-section section-alt">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <p class="eyebrow">What&#8217;s Covered</p>
        <h2>Top-to-Bottom <span class="accent">Construction Clean</span></h2>
        <p style="color:var(--text-muted);font-size:16px;line-height:1.7;margin-bottom:8px">Construction dust gets everywhere. We go everywhere to get rid of it &#8212; no surface skipped, no corner missed.</p>
        <div class="inc-list">
          <div class="inc-item"><span class="inc-check">&#10003;</span><span>All surfaces vacuumed and wiped &#8212; ceilings, walls, trim, windowsills</span></div>
          <div class="inc-item"><span class="inc-check">&#10003;</span><span>Floors cleaned of adhesive, grout haze, paint, and debris</span></div>
          <div class="inc-item"><span class="inc-check">&#10003;</span><span>All fixtures polished &#8212; lights, plumbing hardware, door hardware</span></div>
          <div class="inc-item"><span class="inc-check">&#10003;</span><span>Cabinets and drawers wiped inside and out</span></div>
          <div class="inc-item"><span class="inc-check">&#10003;</span><span>Windows and glass cleaned streak-free</span></div>
          <div class="inc-item"><span class="inc-check">&#10003;</span><span>HVAC vents vacuumed</span></div>
          <div class="inc-item"><span class="inc-check">&#10003;</span><span>Bathroom and kitchen fully sanitized</span></div>
        </div>
      </div>
      <div>
        <p class="eyebrow">Service Types</p>
        <h2>Right for Every <span class="accent">Phase</span></h2>
        <p style="color:var(--text-muted);font-size:16px;line-height:1.7;margin-bottom:8px">Whether you need a rough clean mid-build or a final polish before keys change hands, we&#8217;ve got the right service.</p>
        <div class="sched-grid reveal">
          <div class="sched-card"><h4>Rough Clean</h4><p>During construction &#8212; debris removal and dust control while work is still in progress.</p></div>
          <div class="sched-card"><h4>Final Clean</h4><p>Move-in ready &#8212; full top-to-bottom clean after all contractors have finished.</p></div>
          <div class="sched-card"><h4>Touch-Up Clean</h4><p>Day-of move-in last-minute polish &#8212; makes the hand-off moment perfect.</p></div>
          <div class="sched-card"><h4>Recurring Construction</h4><p>Ongoing builds and multi-unit projects &#8212; we schedule around your timeline.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content-section">
  <div class="wrap">
    <div class="two-col-grid">
      <div>
        <p class="eyebrow">Who We Work With</p>
        <h2>Trusted by <span class="accent">Contractors &amp; Homeowners</span></h2>
        <p style="color:var(--text-muted);font-size:16px;line-height:1.7;margin:16px 0 24px">We work directly with the people who need the space ready &#8212; whether that&#8217;s a GC handing off to a client, a homeowner moving in, or a realtor staging a listing.</p>
        <div class="stats-quad">
          <div class="stat-box reveal"><div class="stat-num">500+</div><div class="stat-label">Projects Completed</div></div>
          <div class="stat-box reveal"><div class="stat-num">5 &#9733;</div><div class="stat-label">Average Rating</div></div>
          <div class="stat-box reveal"><div class="stat-num">2</div><div class="stat-label">States Covered</div></div>
          <div class="stat-box reveal"><div class="stat-num">24hr</div><div class="stat-label">Response Time</div></div>
        </div>
        <div class="price-band reveal">
          <p class="eyebrow" style="margin-bottom:4px">Typical Cost Range</p>
          <div class="price-num">$350&#8211;$1,000</div>
          <p class="price-lbl">Typical MA &amp; NH residential projects</p>
        </div>
      </div>
      <div class="trust-cards-stack">
        <div class="trust-card reveal">
          <div class="tc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20M4 20V10l8-6 8 6v10"/><path d="M10 20v-6h4v6"/></svg></div>
          <div class="tc-content"><h4>General Contractors</h4><p>Final clean before client handoff &#8212; we make your project shine when it matters most. On time, on schedule.</p></div>
        </div>
        <div class="trust-card reveal">
          <div class="tc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
          <div class="tc-content"><h4>Homeowners &amp; Remodelers</h4><p>Renovations, additions, and new builds &#8212; we get your home move-in ready after the dust settles.</p></div>
        </div>
        <div class="trust-card reveal">
          <div class="tc-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg></div>
          <div class="tc-content"><h4>Realtors &amp; Developers</h4><p>Pre-listing clean after renovation &#8212; staged, spotless, and ready for buyers or tenants to walk through.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="content-section section-alt" id="faq">
  <div class="wrap">
    <div class="section-head reveal"><p class="eyebrow">FAQ</p><h2>Post-Construction Cleaning Questions</h2><p>Common questions from contractors, homeowners, and realtors before booking.</p></div>
    <div class="faq-list">
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>How long does post-construction cleaning take?</span><span class="faq-icon">+</span></button><div class="faq-a"><p>Most residential post-construction cleans take 4&#8211;8 hours depending on square footage and the extent of the build. A full new construction home may take a full day. We&#8217;ll give you a time estimate when you request your quote &#8212; no guessing on your timeline.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>What makes construction cleaning different from regular cleaning?</span><span class="faq-icon">+</span></button><div class="faq-a"><p>Construction sites leave behind drywall dust, adhesive residue, paint overspray, grout haze, caulk smears, sawdust, and debris that standard cleaning tools and techniques can&#8217;t handle. We use heavy-duty equipment and construction-specific methods to remove all of it without damaging new finishes.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Can you work while contractors are still on-site?</span><span class="faq-icon">+</span></button><div class="faq-a"><p>Yes &#8212; for rough cleans and ongoing builds, we can work around your contractor schedule. We just need to coordinate timing with your GC or project manager. Final cleans are typically done after all trade work is complete to avoid re-contamination.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>Do you clean multi-unit or commercial construction sites?</span><span class="faq-icon">+</span></button><div class="faq-a"><p>Yes. We handle multi-unit residential projects and smaller commercial build-outs. For large-scale commercial construction, call us directly at (978) 219-9787 to discuss scope and scheduling &#8212; those are quoted individually.</p></div></div>
      <div class="faq-item"><button class="faq-q" aria-expanded="false"><span>How do I get a post-construction cleaning quote?</span><span class="faq-icon">+</span></button><div class="faq-a"><p>Fill out the quote form below with your square footage and project type. For larger or more complex jobs, we may ask for a few photos or a brief walkthrough before providing a flat rate. Most quotes are turned around within 24 hours of the initial request.</p></div></div>
    </div>
    <div class="service-cta-block reveal" style="margin-top:48px">
      <h2>Ready for Move-In Ready?</h2>
      <p>Get a free flat-rate quote for your construction or renovation clean.</p>
      <a href="#quote" class="btn-primary">Request Your Free Quote &#8594;</a>
    </div>
  </div>
</section>

<section class="content-section section-alt">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">Our Work</p>
      <h2>See the <span class="accent">Difference</span></h2>
      <p>Real results from real cleaning jobs across Massachusetts and New Hampshire.</p>
    </div>
    <div class="svc-gallery-grid">
      <?php
      $svc_imgs = array(
        array('src' => get_template_directory_uri().'/assets/images/gallery/placeholder-1.jpg', 'alt' => 'KFS Cleaning Results 1'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/placeholder-2.jpg', 'alt' => 'KFS Cleaning Results 2'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/placeholder-3.jpg', 'alt' => 'KFS Cleaning Results 3'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/placeholder-4.jpg', 'alt' => 'KFS Cleaning Results 4'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/placeholder-5.jpg', 'alt' => 'KFS Cleaning Results 5'),
        array('src' => get_template_directory_uri().'/assets/images/gallery/placeholder-6.jpg', 'alt' => 'KFS Cleaning Results 6'),
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
      <p class="eyebrow">Get In Touch</p>
      <h2>Request Your <span class="accent">Free Quote</span></h2>
      <p class="contact-lead">Fill out the form and we&#8217;ll respond within 24 hours with a no-obligation estimate. Or call us right now.</p>
      <div class="ci-items">
        <div class="ci-item"><div class="ci-ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div><div><div class="ci-label">Phone</div><a href="tel:+19782199787" class="ci-value">(978) 219-9787</a></div></div>
        <div class="ci-item"><div class="ci-ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><div><div class="ci-label">Email</div><a href="mailto:support@kfscleaning.com" class="ci-value">support@kfscleaning.com</a></div></div>
        <div class="ci-item"><div class="ci-ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="ci-label">Hours</div><span class="ci-value">Mon&#8211;Sat &middot; 8am&#8211;6pm</span></div></div>
      </div>
    </div>
    <div class="form-card">
      <h3>Get a Free Quote</h3>
      <p class="form-sub">No commitment required &#8212; we respond within 24 hours.</p>
      <form action="https://formsubmit.co/support@kfscleaning.com" method="POST" class="quote-form" novalidate>
        <!-- FormSubmit.co configuration -->
        <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
        <input type="hidden" name="_next" value="<?php echo esc_url( home_url( '/?thanks=1' ) ); ?>">
        <input type="hidden" name="_subject" value="New Quote Request — KFS Cleaning Services">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_template" value="table">
        <div class="form-row">
          <div class="fld"><label>Full Name <span class="req">*</span></label><input type="text" name="full_name" placeholder="Jane Smith" required></div>
          <div class="fld"><label>Phone <span class="req">*</span></label><input type="tel" name="phone" placeholder="(978) 555-0100" required></div>
        </div>
        <div class="fld"><label>Email <span class="req">*</span></label><input type="email" name="email" placeholder="jane@example.com" required></div>
        <div class="form-row">
          <div class="fld"><label>Service Needed</label><select name="service"><option>Post-Construction</option><option>Regular Home Cleaning</option><option>Deep Cleaning</option><option>Move-In / Move-Out</option><option>Commercial &amp; Office</option><option>Airbnb / STR Turnover</option></select></div>
          <div class="fld"><label>Frequency</label><select name="frequency"><option>&#8212; How often? &#8212;</option><option>One-Time</option><option>Weekly</option><option>Bi-Weekly</option><option>Monthly</option></select></div>
        </div>
        <div class="form-row">
          <div class="fld"><label>Bedrooms</label><input type="number" name="bedrooms" placeholder="e.g. 3"></div>
          <div class="fld"><label>Bathrooms</label><input type="number" name="bathrooms" placeholder="e.g. 2"></div>
        </div>
        <div class="fld"><label for="sqft">Square Footage of Your Space</label><input type="number" id="sqft" name="Square Footage" min="100" max="20000" placeholder="e.g. 1500 sq ft — type your home or office size"></div>
        <div class="fld"><label>Special Requests or Notes</label><textarea name="notes" rows="3" placeholder="Tell us anything that helps us prepare your quote..."></textarea></div>
        <button type="submit" class="btn-primary btn-full" style="margin-top:8px">Request My Free Quote &#8594;</button>
        <p class="form-note">&#128274; Your info is private and never shared.</p>
      </form>
    </div>
  </div>
</section>

<script>
(function(){
document.querySelectorAll('.faq-item').forEach(function(item){var btn=item.querySelector('.faq-q'),ans=item.querySelector('.faq-a');if(!btn||!ans)return;btn.addEventListener('click',function(){var o=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(x){x.classList.remove('open');var b=x.querySelector('.faq-q');if(b)b.setAttribute('aria-expanded','false')});item.classList.toggle('open',!o);btn.setAttribute('aria-expanded',String(!o))})});
var revs=document.querySelectorAll('.reveal');
if('IntersectionObserver' in window){var obs=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');obs.unobserve(e.target)}})},{threshold:.12,rootMargin:'0px 0px -40px 0px'});revs.forEach(function(el){obs.observe(el)})}else{revs.forEach(function(el){el.classList.add('in')})}
})();
</script>

<?php get_footer(); ?>
