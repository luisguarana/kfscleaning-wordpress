<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// ─── INLINE SVG ICON HELPER ───────────────────────────────────────────────
function kfs_icon( $name, $size = 24, $extra_class = '' ) {
	$icons = array(
		'home'         => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
		'sparkles'     => '<path d="M12 3l1.88 5.76L20 10.5l-4.88 4.74 1.06 5.76L12 18.27l-4.18 2.73 1.06-5.76L4 10.5l6.12-.74z"/><path d="M5 3l.88 2.12L8 6l-2.12.88L5 9l-.88-2.12L2 6l2.12-.88z" opacity=".5"/><path d="M19 13l.6 1.4 1.4.6-1.4.6-.6 1.4-.6-1.4-1.4-.6 1.4-.6z" opacity=".5"/>',
		'truck'        => '<rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 3v5h-7z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>',
		'building'     => '<rect x="4" y="2" width="16" height="20" rx="1"/><path d="M9 22V12h6v10"/><path d="M9 7h1M9 11h1M14 7h1M14 11h1"/>',
		'hammer'       => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
		'key'          => '<circle cx="7.5" cy="15.5" r="5.5"/><path d="M21 2l-9.6 9.6M15.5 7.5l3 3M17 6l3 3"/>',
		'check-circle' => '<circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/>',
		'shield'       => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
		'star'         => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
		'clock'        => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
		'search'       => '<circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>',
		'bag'          => '<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><path d="M3 6h18M16 10a4 4 0 0 1-8 0"/>',
		'calendar'     => '<rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>',
		'phone'        => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>',
		'mail'         => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
		'map-pin'      => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
		'arrow-right'  => '<line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>',
	);
	$path  = isset( $icons[ $name ] ) ? $icons[ $name ] : '';
	$class = $extra_class ? ' class="' . esc_attr( $extra_class ) . '"' : '';
	return '<svg' . $class . ' width="' . (int) $size . '" height="' . (int) $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}

// ─── EDITABLE DATA ARRAYS ──────────────────────────────────────────────────

$kfs_services = array(
	array( 'icon' => 'home',     'num' => '01', 'title' => 'Regular Home Cleaning',   'desc' => 'Weekly, bi-weekly, or monthly recurring cleans tailored to your home. Dusting, vacuuming, mopping, bathrooms, kitchen — done right every time.',                                                    'slug' => 'regular-house-cleaning' ),
	array( 'icon' => 'sparkles', 'num' => '02', 'title' => 'Deep Cleaning',            'desc' => 'A top-to-bottom scrub that reaches inside appliances, behind furniture, grout lines, and every corner most cleanings miss.',                                                                          'slug' => 'deep-cleaning' ),
	array( 'icon' => 'truck',    'num' => '03', 'title' => 'Move-In / Move-Out',       'desc' => 'Leave your old place spotless for the next tenant or step into a fresh, sanitized new home. Perfect for landlords and renters alike.',                                                                  'slug' => 'move-out-cleaning' ),
	array( 'icon' => 'building', 'num' => '04', 'title' => 'Commercial &amp; Office', 'desc' => 'Offices, retail spaces, medical facilities, and commercial properties cleaned on your schedule — evenings and weekends available.',                                                                      'slug' => 'commercial-cleaning' ),
	array( 'icon' => 'hammer',   'num' => '05', 'title' => 'Post-Construction',        'desc' => 'Dust, debris, and construction residue fully cleared after your renovation. We handle the mess so you can enjoy your new space.',                                                                       'slug' => 'post-construction-cleaning' ),
	array( 'icon' => 'key',      'num' => '06', 'title' => 'Airbnb / STR Turnover',   'desc' => 'Fast hotel-quality turnovers between guests. Fresh linens, sanitized surfaces, restocked essentials — 5-star reviews every stay.',                                                                      'slug' => 'airbnb-cleaning' ),
);

$kfs_gallery = array(
	array( 'src' => get_template_directory_uri() . '/assets/images/gallery/kitchen-deep-clean.jpg', 'label' => 'Kitchen Deep Clean', 'span' => 2 ),
	array( 'src' => get_template_directory_uri() . '/assets/images/gallery/kitchen-refresh.jpg', 'label' => 'Kitchen Refresh',        'span' => 1 ),
	array( 'src' => get_template_directory_uri() . '/assets/images/gallery/office-cleaning.jpg', 'label' => 'Office Cleaning',        'span' => 1 ),
	array( 'src' => get_template_directory_uri() . '/assets/images/gallery/bathroom-detail.jpg', 'label' => 'Bathroom Detail',        'span' => 1 ),
	array( 'src' => get_template_directory_uri() . '/assets/images/gallery/move-out-clean.jpg', 'label' => 'Move-Out Clean',         'span' => 1 ),
	array( 'src' => get_template_directory_uri() . '/assets/images/gallery/post-construction-clean.jpg', 'label' => 'Post-Construction',      'span' => 2 ),
	array( 'src' => get_template_directory_uri() . '/assets/images/gallery/commercial-cleaning.jpg', 'label' => 'Commercial Cleaning',         'span' => 1 ),
);

$kfs_faq = array(
	array( 'q' => 'How do I get a free cleaning quote?',             'a' => 'Fill out the form on this page or call (978) 219-9787. We respond within 24 hours with a personalized, no-obligation estimate.' ),
	array( 'q' => 'Are you licensed and insured?',                   'a' => 'Yes. KFS Cleaning Services is fully licensed and insured in both Massachusetts and New Hampshire. We carry general liability insurance and can provide proof upon request.' ),
	array( 'q' => 'Do you bring your own cleaning supplies?',        'a' => 'Yes — our team arrives fully equipped with professional-grade products and tools at no extra charge. Just let us know if you have specific product preferences.' ),
	array( 'q' => 'What areas in MA and NH do you serve?',           'a' => 'We serve most of Massachusetts (North Shore, Merrimack Valley, Greater Lowell) and southern New Hampshire. Not sure we cover your area? Call (978) 219-9787 and we\'ll confirm.' ),
	array( 'q' => 'How long does a house cleaning take?',            'a' => 'A standard home cleaning takes 2–4 hours depending on size. Deep cleans and move-out cleans may take longer. We include a time estimate with every quote.' ),
	array( 'q' => 'Do I need to be home during the cleaning?',       'a' => 'No. Many clients provide a key or entry code. We\'re fully insured, so you can leave with complete peace of mind. We\'ll text you when we\'re done.' ),
	array( 'q' => 'What is your satisfaction guarantee?',            'a' => 'If you\'re not 100% satisfied, contact us within 24 hours and we\'ll return to re-clean the area at no charge. Your satisfaction is our priority.' ),
);

get_header();
?>

<main id="main-content">

<!-- ===================== HERO ===================== -->
<section class="hero" id="home" aria-label="Hero section">
	<div class="hero-grid-overlay"></div>
	<div class="hero-glow"></div>
	<div class="wrap hero-inner">

		<!-- Left: Hero Text -->
		<div class="hero-text">
			<div class="hero-badge">
				<span class="badge-dot"></span> Serving MA &amp; NH
			</div>
			<h1>Professional Cleaning,<br><span class="accent">Done Right.</span></h1>
			<p class="hero-sub">Licensed &middot; Insured &middot; Satisfaction Guaranteed</p>
			<p class="hero-body">From weekly home cleans to post-construction deep scrubs &mdash; KFS Cleaning Services delivers spotless results on time, every time. Over 500 happy clients across the North Shore and Southern NH.</p>
			<div class="hero-btns">
				<a href="#quote" class="btn-primary">Get a Free Quote</a>
				<a href="#services" class="btn-ghost">View Our Services &rarr;</a>
			</div>
		</div>

		<!-- Right: Glassmorphism Card -->
		<div class="hero-card" role="complementary" aria-label="Why clients choose KFS">
			<h2>Why Clients Choose KFS</h2>
			<ul class="hero-checks" aria-label="Key benefits">
				<li><?php echo kfs_icon('check-circle', 20, 'check-svg'); ?> Licensed &amp; Insured in MA &amp; NH</li>
				<li><?php echo kfs_icon('check-circle', 20, 'check-svg'); ?> 100% Satisfaction Guaranteed</li>
				<li><?php echo kfs_icon('check-circle', 20, 'check-svg'); ?> We Bring All Supplies &amp; Equipment</li>
				<li><?php echo kfs_icon('check-circle', 20, 'check-svg'); ?> Flexible Scheduling (Evenings &amp; Weekends)</li>
				<li><?php echo kfs_icon('check-circle', 20, 'check-svg'); ?> Fast Response &mdash; Quotes in 24 Hours</li>
			</ul>
			<a href="#quote" class="btn-primary btn-full">Book Your Free Quote &rarr;</a>
			<div class="hero-statbar" aria-label="Company stats">
				<div class="hstat"><div class="hstat-n">500+</div><div class="hstat-l">Homes Cleaned</div></div>
				<div class="hstat"><div class="hstat-n">5★</div><div class="hstat-l">Rated Service</div></div>
				<div class="hstat"><div class="hstat-n">24hr</div><div class="hstat-l">Response</div></div>
			</div>
		</div>

	</div>
</section>

<!-- ===================== TRUST STRIP ===================== -->
<div class="trust-strip" role="region" aria-label="Trust indicators">
	<div class="wrap trust-inner">
		<span><?php echo kfs_icon('shield', 16, 'ts-icon'); ?> Licensed &amp; Insured</span>
		<span class="ts-sep" aria-hidden="true">|</span>
		<span><?php echo kfs_icon('star', 16, 'ts-icon'); ?> 5-Star Rated</span>
		<span class="ts-sep" aria-hidden="true">|</span>
		<span><?php echo kfs_icon('check-circle', 16, 'ts-icon'); ?> Satisfaction Guaranteed</span>
		<span class="ts-sep" aria-hidden="true">|</span>
		<span><?php echo kfs_icon('bag', 16, 'ts-icon'); ?> Supplies Included</span>
		<span class="ts-sep" aria-hidden="true">|</span>
		<span><?php echo kfs_icon('map-pin', 16, 'ts-icon'); ?> MA &amp; NH</span>
		<span class="ts-sep" aria-hidden="true">|</span>
		<span><?php echo kfs_icon('clock', 16, 'ts-icon'); ?> 24-Hour Response</span>
	</div>
</div>

<!-- ===================== SERVICES ===================== -->
<section class="services-section section-alt" id="services" aria-label="Services">
	<div class="wrap">
		<div class="section-head reveal">
			<p class="eyebrow">What We Do</p>
			<h2>Every Type of Clean, Covered</h2>
			<p>From one-time deep cleans to recurring residential service &mdash; we handle it all with care, precision, and the right tools for the job.</p>
		</div>
		<div class="services-grid" role="list">
			<?php foreach ( $kfs_services as $svc ) : ?>
			<div class="svc-card reveal" role="listitem">
				<div class="svc-top">
					<div class="svc-icon-wrap"><?php echo kfs_icon( $svc['icon'], 26, 'svc-svg' ); ?></div>
					<span class="svc-num"><?php echo esc_html( $svc['num'] ); ?></span>
				</div>
				<h3><?php echo $svc['title']; ?></h3>
				<p><?php echo $svc['desc']; ?></p>
				<a href="<?php echo esc_url( home_url( '/' . $svc['slug'] . '/' ) ); ?>" class="svc-link" aria-label="Learn more about <?php echo esc_attr( $svc['title'] ); ?>">
					Learn More <?php echo kfs_icon('arrow-right', 14); ?>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="mid-cta reveal" role="complementary">
			<h3>Ready for a Spotless Home or Office?</h3>
			<p>Get your free, no-obligation quote today. We respond within 24 hours &mdash; often same-week scheduling available.</p>
			<a href="#quote" class="btn-primary">Request a Free Quote &rarr;</a>
		</div>
	</div>
</section>

<!-- ===================== WHY US ===================== -->
<section class="why-section" id="why" aria-label="Why choose KFS">
	<div class="wrap why-inner">
		<div class="why-left">
			<p class="eyebrow">Why Choose Us</p>
			<h2>The Cleaning Service<br>North Shore <span class="accent">Trusts.</span></h2>
			<p class="why-body">We show up on time, bring our own supplies, and don&rsquo;t leave until the job is done right. No shortcuts. No excuses. Just clean.</p>
			<div class="stats-grid" aria-label="Company statistics">
				<div class="stat-box"><div class="stat-num">500+</div><div class="stat-label">Homes Cleaned</div></div>
				<div class="stat-box"><div class="stat-num">5 ★</div><div class="stat-label">Average Rating</div></div>
				<div class="stat-box"><div class="stat-num">6</div><div class="stat-label">Service Types</div></div>
				<div class="stat-box"><div class="stat-num">2</div><div class="stat-label">States Served</div></div>
			</div>
		</div>
		<div class="trust-cards" role="list">
			<div class="trust-card reveal" role="listitem">
				<div class="tc-icon"><?php echo kfs_icon('shield', 24); ?></div>
				<div class="tc-content">
					<h3>Licensed &amp; Insured</h3>
					<p>Fully licensed and insured in MA &amp; NH. Your home and belongings are protected every visit.</p>
				</div>
			</div>
			<div class="trust-card reveal" role="listitem">
				<div class="tc-icon"><?php echo kfs_icon('check-circle', 24); ?></div>
				<div class="tc-content">
					<h3>Satisfaction Guarantee</h3>
					<p>Not happy? We return within 24 hours and re-clean at zero cost. No hassle, no questions.</p>
				</div>
			</div>
			<div class="trust-card reveal" role="listitem">
				<div class="tc-icon"><?php echo kfs_icon('bag', 24); ?></div>
				<div class="tc-content">
					<h3>We Bring Everything</h3>
					<p>Commercial-grade products, vacuums, mops, and microfibers. You provide the space &mdash; we do the rest.</p>
				</div>
			</div>
			<div class="trust-card reveal" role="listitem">
				<div class="tc-icon"><?php echo kfs_icon('calendar', 24); ?></div>
				<div class="tc-content">
					<h3>Flexible Scheduling</h3>
					<p>Morning, afternoon, evening, or weekends &mdash; we work around your calendar, not ours.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===================== GALLERY ===================== -->
<section class="gallery-section section-alt" id="gallery" aria-label="Photo gallery">
	<div class="wrap">
		<div class="section-head reveal">
			<p class="eyebrow">Our Work</p>
			<h2>See the Difference</h2>
			<p>Real results from real jobs across Massachusetts and New Hampshire.</p>
		</div>
		<div class="gallery-grid" id="gallery-grid">
			<?php foreach ( $kfs_gallery as $i => $img ) : ?>
<div class="gal-item<?php echo ( isset( $img['span'] ) && $img['span'] > 1 ) ? ' gal-wide' : ''; ?>"
	 data-src="<?php echo esc_url( $img['src'] ); ?>"
	 data-index="<?php echo esc_attr( $i ); ?>"
	 role="button"
	 tabindex="0"
	 aria-label="View <?php echo esc_attr( $img['label'] ); ?>">

	<img src="<?php echo esc_url( $img['src'] ); ?>" alt="<?php echo esc_attr( $img['label'] ); ?> — KFS Cleaning Services MA &amp; NH" loading="lazy">

	<div class="gal-caption">
		<div class="gal-caption-text">
			<h3 class="gal-title"><?php echo esc_html( $img['label'] ); ?></h3>
			<p class="gal-subtitle">KFS Cleaning Services</p>
		</div>
	</div>
</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Image lightbox" aria-hidden="true">
	<div class="lightbox-backdrop" data-lightbox-close></div>

	<div class="lightbox-inner">
		<button class="lb-close" id="lb-close" type="button" aria-label="Close lightbox">&times;</button>
		<button class="lb-prev" id="lb-prev" type="button" aria-label="Previous image">&#10094;</button>

		<div class="lb-stage">
			<img src="" alt="" id="lb-img">
		</div>

		<button class="lb-next" id="lb-next" type="button" aria-label="Next image">&#10095;</button>
	</div>
</div>
<!-- ===================== REVIEWS WIDGETS ===================== -->
<section class="reviews-section" id="reviews" aria-label="Customer reviews">
	<div class="wrap">
		<div class="section-head reveal">
			<p class="eyebrow">Customer Reviews</p>
			<h2>What Our Customers Say</h2>
			<p>See verified feedback from our customers on Google and Thumbtack.</p>
		</div>

		<div class="reviews-widget">
			<?php
			$google_reviews = do_shortcode('[trustindex no-registration=google]');
			if ( ! empty( trim( $google_reviews ) ) && $google_reviews !== '[trustindex no-registration=google]' ) {
				echo $google_reviews;
			} else {
				// Widget unavailable: point people to the reviews instead of showing an empty box.
				echo '<p class="reviews-fallback">Read what our customers say on <a href="' . esc_url( 'https://www.google.com/search?q=KFS+Cleaning+Services+reviews' ) . '" target="_blank" rel="noopener">Google Reviews</a>.</p>';
			}
			?>
		</div>
	</div>
</section>

<!-- ===================== FAQ ===================== -->
<section class="faq-section section-alt" id="faq" aria-label="Frequently asked questions">
	<div class="wrap">
		<div class="section-head reveal">
			<p class="eyebrow">Got Questions?</p>
			<h2>Frequently Asked Questions</h2>
			<p>Everything you need to know before booking your first clean.</p>
		</div>
		<div class="faq-list" id="faq-list" role="list">
			<?php foreach ( $kfs_faq as $i => $item ) : ?>
			<div class="faq-item reveal" role="listitem">
				<button class="faq-q" aria-expanded="false" aria-controls="faq-a-<?php echo esc_attr( $i ); ?>" id="faq-q-<?php echo esc_attr( $i ); ?>">
					<span><?php echo esc_html( $item['q'] ); ?></span>
					<span class="faq-icon" aria-hidden="true">+</span>
				</button>
				<div class="faq-a" id="faq-a-<?php echo esc_attr( $i ); ?>" role="region" aria-labelledby="faq-q-<?php echo esc_attr( $i ); ?>" hidden>
					<p><?php echo esc_html( $item['a'] ); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ===================== SERVICE AREAS ===================== -->
<section class="areas-section" id="areas" aria-label="Service areas">
	<div class="wrap">
		<div class="section-head reveal">
			<p class="eyebrow">Where We Work</p>
			<h2>Serving MA &amp; NH</h2>
			<p>We cover the North Shore and Merrimack Valley in Massachusetts, plus communities throughout Southern New Hampshire.</p>
		</div>
		<div class="areas-grid">
			<div class="area-card reveal" role="region" aria-label="Massachusetts service areas">
				<div class="area-icon"><?php echo kfs_icon('map-pin', 28); ?></div>
				<h3>Massachusetts</h3>
				<p>North Shore, Merrimack Valley &amp; Greater Lowell</p>
				<div class="area-towns" aria-label="Towns served in Massachusetts">
					<span>Andover</span><span>Lawrence</span><span>Haverhill</span><span>Lowell</span>
					<span>Methuen</span><span>North Andover</span><span>Amesbury</span><span>Newburyport</span>
					<span>Gloucester</span><span>Beverly</span><span>Salem</span><span>Groveland</span>
					<span>Boston area</span><span>+ More</span>
				</div>
			</div>
			<div class="area-card reveal" role="region" aria-label="New Hampshire service areas">
				<div class="area-icon"><?php echo kfs_icon('map-pin', 28); ?></div>
				<h3>New Hampshire</h3>
				<p>Southern New Hampshire &amp; Seacoast</p>
				<div class="area-towns" aria-label="Towns served in New Hampshire">
					<span>Nashua</span><span>Manchester</span><span>Derry</span><span>Salem</span>
					<span>Londonderry</span><span>Hudson</span><span>Merrimack</span><span>Bedford</span>
					<span>Windham</span><span>+ More</span>
				</div>
			</div>
		</div>
		<p class="areas-note">Not sure if we cover your area? <a href="tel:+19782199787">Call (978) 219-9787</a> &mdash; we likely do.</p>
	</div>
</section>

<!-- ===================== CONTACT / QUOTE FORM ===================== -->
<section class="contact-section" id="quote" aria-label="Contact and quote form">
	<div class="wrap contact-inner">
		<div class="contact-info">
			<p class="eyebrow">Get In Touch</p>
			<h2>Request Your Free Quote</h2>
			<p class="contact-lead">Fill out the form and we&rsquo;ll respond within 24 hours with a no-obligation estimate. Or give us a call right now.</p>
			<div class="ci-items">
				<div class="ci-item">
					<div class="ci-ico"><?php echo kfs_icon('phone', 20); ?></div>
					<div><div class="ci-label">Phone</div><a href="tel:+19782199787" class="ci-value">(978) 219-9787</a></div>
				</div>
				<div class="ci-item">
					<div class="ci-ico"><?php echo kfs_icon('mail', 20); ?></div>
					<div><div class="ci-label">Email</div><a href="mailto:support@kfscleaning.com" class="ci-value">support@kfscleaning.com</a></div>
				</div>
				<div class="ci-item">
					<div class="ci-ico"><?php echo kfs_icon('clock', 20); ?></div>
					<div><div class="ci-label">Hours</div><span class="ci-value">Mon &ndash; Sat &middot; 8am &ndash; 6pm</span></div>
				</div>
				<div class="ci-item">
					<div class="ci-ico"><?php echo kfs_icon('map-pin', 20); ?></div>
					<div><div class="ci-label">Service Area</div><span class="ci-value">Massachusetts &amp; New Hampshire</span></div>
				</div>
			</div>
		</div>
		<div class="form-card">
			<h3>Get a Free Quote</h3>
			<p class="form-sub">No commitment required &mdash; we respond within 24 hours.</p>
			<p class="form-legend"><span class="req" aria-hidden="true">*</span> Required</p>
			<form action="https://formsubmit.co/support@kfscleaning.com" method="POST" class="quote-form">
				<input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
				<input type="hidden" name="_next" value="<?php echo esc_url( kfs_thanks_url() ); ?>">
				<input type="hidden" name="_subject" value="New Quote Request from kfscleaning.com">
				<input type="hidden" name="_captcha" value="false">
				<input type="hidden" name="_template" value="table">
				<div class="form-row">
					<div class="fld">
						<label for="full-name">Full Name <span class="req" aria-hidden="true">*</span></label>
						<input type="text" id="full-name" name="Full Name" required autocomplete="name" aria-required="true">
					</div>
					<div class="fld">
						<label for="phone">Phone <span class="req" aria-hidden="true">*</span></label>
						<input type="tel" id="phone" name="Phone" required autocomplete="tel" aria-required="true" placeholder="(978) 555-0100">
					</div>
				</div>
				<div class="fld">
					<label for="email">Email Address <span class="req" aria-hidden="true">*</span></label>
					<input type="email" id="email" name="email" required autocomplete="email" aria-required="true">
				</div>
				<div class="form-row">
					<div class="fld">
						<label for="service">Service Needed</label>
						<select id="service" name="Service">
							<option value="">— Select a service —</option>
							<option>Regular Home Cleaning</option>
							<option>Deep Cleaning</option>
							<option>Move-In / Move-Out</option>
							<option>Commercial &amp; Office</option>
							<option>Post-Construction</option>
							<option>Airbnb / STR Turnover</option>
							<option>Not Sure / Other</option>
						</select>
					</div>
					<div class="fld">
						<label for="frequency">Frequency</label>
						<select id="frequency" name="Frequency">
							<option value="">— How often? —</option>
							<option>One-Time</option>
							<option>Weekly</option>
							<option>Bi-Weekly (Every 2 weeks)</option>
							<option>Monthly</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="fld">
						<label for="bedrooms">Bedrooms</label>
						<input type="number" id="bedrooms" name="Bedrooms" min="0" max="20" inputmode="numeric" placeholder="e.g. 3">
					</div>
					<div class="fld">
						<label for="bathrooms">Bathrooms</label>
						<input type="number" id="bathrooms" name="Bathrooms" min="0" max="20" step="0.5" inputmode="decimal" placeholder="e.g. 2">
					</div>
				</div>
				<div class="fld">
					<label for="sqft">Square Footage <span class="fld-hint">(approximate is fine)</span></label>
					<input type="number" id="sqft" name="Square Footage" min="100" max="20000" inputmode="numeric" placeholder="e.g. 1500">
				</div>
				<div class="fld">
					<label for="message">Special Requests or Notes</label>
					<textarea id="message" name="Notes" rows="3" placeholder="Tell us anything that helps us prepare your quote..."></textarea>
				</div>
				<button type="submit" class="btn-primary btn-full form-submit">Request My Free Quote &rarr;</button>
				<p class="form-note">&#128274; Your info is private and never shared.</p>
			</form>
		</div>
	</div>
</section>

</main>

<?php get_footer(); ?>