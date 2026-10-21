<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// ─── EDITABLE DATA ARRAYS ──────────────────────────────────────────────────

$kfs_img = get_template_directory_uri() . '/assets/images';

// What Katia's team does in each room of the house. 'deep' = what a deep clean adds.
$kfs_rooms = array(
	'kitchen'  => array(
		'name'  => 'Kitchen',
		'every' => array( 'Countertops and stovetop', 'Sink and faucet', 'Appliance exteriors', 'Cabinet fronts', 'Floors' ),
		'deep'  => array( 'Inside the appliances', 'Cabinet interiors', 'Grout lines', 'Behind and under things' ),
	),
	'bathroom' => array(
		'name'  => 'Bathroom',
		'every' => array( 'Toilet, tub and shower', 'Sink and mirrors', 'Fixtures sanitized', 'Floors' ),
		'deep'  => array( 'Grout lines', 'Vents', 'Baseboards' ),
	),
	'bedroom'  => array(
		'name'  => 'Bedroom',
		'every' => array( 'Dusting', 'Surfaces wiped', 'Vacuuming', 'Beds made' ),
		'deep'  => array( 'Behind and under furniture', 'Baseboards', 'Vents' ),
	),
	'living'   => array(
		'name'  => 'Living room',
		'every' => array( 'Dusting', 'Vacuuming and mopping', 'Baseboards', 'Hallways, stairs and entry' ),
		'deep'  => array( 'Behind and under furniture', 'Vents', 'Buildup in the corners' ),
	),
);

// Residential first; commercial gets its own card beside the list.
$kfs_services = array(
	array( 'title' => 'Regular Home Cleaning',        'desc' => 'Weekly, every-two-weeks, or monthly cleans tailored to your home, done right every time.', 'meta' => '2&ndash;4 hrs', 'slug' => 'regular-house-cleaning', 'dot' => 'kitchen' ),
	array( 'title' => 'Deep Cleaning',                'desc' => 'Top to bottom: inside appliances, behind furniture, grout lines and every corner most cleanings miss.', 'meta' => '4&ndash;8 hrs', 'slug' => 'deep-cleaning', 'dot' => 'bathroom' ),
	array( 'title' => 'Move-In / Move-Out',           'desc' => 'Leave your old place spotless for the next tenant, or step into a fresh new home. For renters, owners and landlords.', 'meta' => '', 'slug' => 'move-out-cleaning', 'dot' => 'bedroom' ),
	array( 'title' => 'Airbnb &amp; Rental Turnover', 'desc' => 'Fast turnovers between guests: fresh linens, sanitized surfaces and restocked essentials.', 'meta' => '', 'slug' => 'airbnb-cleaning', 'dot' => 'living' ),
	array( 'title' => 'Post-Construction',            'desc' => 'Dust, debris and construction residue cleared after your renovation, so you can enjoy the new space.', 'meta' => '', 'slug' => 'post-construction-cleaning', 'dot' => 'kitchen' ),
);

// Real job photos; the lightbox opens them large.
$kfs_gallery = array(
	array( 'file' => 'post-construction-clean', 'label' => 'Post-construction', 'note' => 'Construction dust cleared after a renovation', 'wide' => true ),
	array( 'file' => 'bathroom-detail',         'label' => 'Bathroom',          'note' => 'Floor scrubbed down tile by tile',            'wide' => false ),
	array( 'file' => 'office-cleaning',         'label' => 'Office',            'note' => 'Commercial office clean',                     'wide' => false ),
	array( 'file' => 'move-out-clean',          'label' => 'Move-out',          'note' => 'Ready for the next tenant',                   'wide' => false ),
	array( 'file' => 'kitchen-refresh',         'label' => 'Kitchen',           'note' => 'Kitchen refresh',                             'wide' => false ),
	array( 'file' => 'kitchen-deep-clean',      'label' => 'Deep clean',        'note' => 'Stovetop and oven door, mid-scrub',           'wide' => false ),
	array( 'file' => 'commercial-cleaning',     'label' => 'Commercial',        'note' => 'Commercial space clean',                      'wide' => true ),
);

$kfs_towns_ma = array( 'Andover', 'North Andover', 'Lawrence', 'Methuen', 'Haverhill', 'Groveland', 'Lowell', 'Amesbury', 'Newburyport', 'Gloucester', 'Beverly', 'Salem', 'Boston area' );
$kfs_towns_nh = array( 'Nashua', 'Manchester', 'Derry', 'Londonderry', 'Salem', 'Windham', 'Hudson', 'Merrimack', 'Bedford' );

$kfs_faq = array(
	array( 'q' => 'How do I get a free cleaning quote?',       'a' => 'Fill out the form on this page or call (978) 219-9787. We respond within 24 hours with a personalized, no-obligation estimate.' ),
	array( 'q' => 'How do you price a cleaning?',              'a' => 'By the job, never by the hour. You get a flat-rate number with your quote, so you know the exact cost before we start.' ),
	array( 'q' => 'Are you licensed and insured?',             'a' => 'Yes. KFS Cleaning Services is fully licensed and insured in both Massachusetts and New Hampshire. We carry general liability insurance and can provide proof upon request.' ),
	array( 'q' => 'Do you bring your own cleaning supplies?',  'a' => 'Yes. Our team arrives fully equipped with professional-grade products and tools at no extra charge. Just let us know if you have specific product preferences.' ),
	array( 'q' => 'What areas in MA and NH do you serve?',     'a' => 'We serve most of Massachusetts (North Shore, Merrimack Valley, Greater Lowell) and southern New Hampshire. Not sure we cover your area? Call (978) 219-9787 and we\'ll confirm.' ),
	array( 'q' => 'How long does a house cleaning take?',      'a' => 'A standard home cleaning takes 2–4 hours depending on size. Deep cleans and move-out cleans take longer. We include a time estimate with every quote.' ),
	array( 'q' => 'Do I need to be home during the cleaning?', 'a' => 'No. Many clients provide a key or entry code. We\'re fully insured, so you can leave with complete peace of mind. We\'ll text you when we\'re done.' ),
	array( 'q' => 'What is your satisfaction guarantee?',      'a' => 'If you\'re not 100% satisfied, contact us within 24 hours and we\'ll return to re-clean the area at no charge.' ),
);

// One form template, rendered twice: a quick one in the hero, the full one by "How it works".
function kfs_quote_form( $prefix, $full ) {
	$p = esc_attr( $prefix );
	?>
	<form action="https://formsubmit.co/support@kfscleaning.com" method="POST" class="quote-form coupon-form">
		<input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
		<input type="hidden" name="_next" value="<?php echo esc_url( kfs_thanks_url() ); ?>">
		<input type="hidden" name="_subject" value="<?php echo $full ? 'New Quote Request from kfscleaning.com' : 'New Quote Request from kfscleaning.com (quick form)'; ?>">
		<input type="hidden" name="_captcha" value="false">
		<input type="hidden" name="_template" value="table">

		<fieldset class="coupon-switch">
			<legend>This quote is for</legend>
			<label><input type="radio" name="Customer Type" value="Home" checked data-branch-switch><span>My home</span></label>
			<label><input type="radio" name="Customer Type" value="Business" data-branch-switch><span>My business</span></label>
		</fieldset>

		<div class="form-row">
			<div class="fld">
				<label for="<?php echo $p; ?>name">Name <span class="req" aria-hidden="true">*</span></label>
				<input type="text" id="<?php echo $p; ?>name" name="Full Name" required autocomplete="name">
			</div>
			<div class="fld">
				<label for="<?php echo $p; ?>phone">Phone <span class="req" aria-hidden="true">*</span></label>
				<input type="tel" id="<?php echo $p; ?>phone" name="Phone" required autocomplete="tel" inputmode="tel" pattern="[0-9()+.\-\s]{10,}" title="A phone number with area code, e.g. (978) 555-0100" placeholder="(978) 555-0100">
			</div>
		</div>
		<div class="form-row">
			<div class="fld">
				<label for="<?php echo $p; ?>email">Email <span class="req" aria-hidden="true">*</span></label>
				<input type="email" id="<?php echo $p; ?>email" name="email" required autocomplete="email">
			</div>
			<div class="fld">
				<label for="<?php echo $p; ?>town">Town</label>
				<input type="text" id="<?php echo $p; ?>town" name="Town" autocomplete="address-level2" placeholder="e.g. Andover">
			</div>
		</div>

		<?php if ( $full ) : ?>
		<fieldset class="coupon-branch" data-branch="Home">
			<div class="form-row">
				<div class="fld">
					<label for="<?php echo $p; ?>service">Service</label>
					<select id="<?php echo $p; ?>service" name="Service">
						<option value="">Choose one</option>
						<option>Regular Home Cleaning</option>
						<option>Deep Cleaning</option>
						<option>Move-In / Move-Out</option>
						<option>Airbnb / Rental Turnover</option>
						<option>Post-Construction</option>
						<option>Not Sure / Other</option>
					</select>
				</div>
				<div class="fld">
					<label for="<?php echo $p; ?>frequency">How often</label>
					<select id="<?php echo $p; ?>frequency" name="Frequency">
						<option value="">Choose one</option>
						<option>One-Time</option>
						<option>Weekly</option>
						<option>Every 2 weeks</option>
						<option>Monthly</option>
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="fld">
					<label for="<?php echo $p; ?>bedrooms">Bedrooms</label>
					<input type="number" id="<?php echo $p; ?>bedrooms" name="Bedrooms" min="0" max="20" inputmode="numeric" placeholder="e.g. 3">
				</div>
				<div class="fld">
					<label for="<?php echo $p; ?>bathrooms">Bathrooms</label>
					<input type="number" id="<?php echo $p; ?>bathrooms" name="Bathrooms" min="0" max="20" step="0.5" inputmode="decimal" placeholder="e.g. 2">
				</div>
			</div>
		</fieldset>
		<?php endif; ?>

		<fieldset class="coupon-branch" data-branch="Business" hidden disabled>
			<input type="hidden" name="Service" value="Commercial &amp; Office">
			<div class="form-row">
				<div class="fld">
					<label for="<?php echo $p; ?>company">Business name</label>
					<input type="text" id="<?php echo $p; ?>company" name="Business Name" autocomplete="organization">
				</div>
				<div class="fld">
					<label for="<?php echo $p; ?>space">Type of space</label>
					<select id="<?php echo $p; ?>space" name="Type of Space">
						<option value="">Choose one</option>
						<option>Office</option>
						<option>Retail</option>
						<option>Medical</option>
						<option>Other commercial</option>
					</select>
				</div>
			</div>
			<?php if ( $full ) : ?>
			<div class="form-row">
				<div class="fld">
					<label for="<?php echo $p; ?>hours">When to clean</label>
					<select id="<?php echo $p; ?>hours" name="Cleaning Hours">
						<option value="">Choose one</option>
						<option>During business hours</option>
						<option>Evenings</option>
						<option>Weekends</option>
						<option>Flexible</option>
					</select>
				</div>
				<div class="fld">
					<label for="<?php echo $p; ?>bfreq">How often</label>
					<select id="<?php echo $p; ?>bfreq" name="Frequency">
						<option value="">Choose one</option>
						<option>One-Time</option>
						<option>Weekly</option>
						<option>Several times a week</option>
						<option>Every 2 weeks</option>
						<option>Monthly</option>
					</select>
				</div>
			</div>
			<?php endif; ?>
			<label class="coupon-check"><input type="checkbox" name="Walkthrough" value="Yes, please set up a walkthrough"> Set up a walkthrough of my space before the quote</label>
		</fieldset>

		<?php if ( $full ) : ?>
		<div class="fld">
			<label for="<?php echo $p; ?>notes">Anything we should know?</label>
			<textarea id="<?php echo $p; ?>notes" name="Notes" rows="2" placeholder="Pets, problem spots, the best time to reach you"></textarea>
		</div>
		<?php endif; ?>
		<button type="submit" class="btn-primary btn-full form-submit">Get My Free Quote</button>
		<p class="form-note">We reply within 24 hours. Your details stay with us. Trouble sending? Call <a href="tel:+19782199787">(978) 219-9787</a>.</p>
	</form>
	<?php
}

$kfs_star = '<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.5l2.9 6.1 6.6.8-4.9 4.6 1.3 6.6L12 17.3l-5.9 3.3 1.3-6.6-4.9-4.6 6.6-.8z"/></svg>';
$kfs_stars = '<div class="review-stars" role="img" aria-label="5 out of 5 stars">' . str_repeat( $kfs_star, 5 ) . '</div>';

get_header();
?>

<main id="main-content">

<!-- ===================== HERO: THE LITTLE HOUSE ===================== -->
<section class="hero" aria-labelledby="hero-title">
	<div class="wrap hero-grid">

		<div class="hero-copy">
			<h1 id="hero-title">The cleaners you trust with your keys.</h1>
			<p class="hero-sub">Katia&rsquo;s team has cleaned homes in Massachusetts and New Hampshire for over 25 years. We take our time and don&rsquo;t leave until you&rsquo;re happy. Tap a room to see what gets cleaned.</p>
		</div>

		<noscript><style>.house.is-settling .room { opacity: 1; transform: none; }</style></noscript>
		<div class="house is-settling" id="house">
			<svg class="house-svg" viewBox="0 -40 800 542" role="img" aria-labelledby="house-title">
			<title id="house-title">A cutaway house with a kitchen, bathroom, bedroom and living room</title>
			<polygon class="slab-top" points="400,110 740,280 400,450 60,280"/>
			<polygon class="slab-left" points="60,280 400,450 400,472 60,302"/>
			<polygon class="slab-right" points="740,280 400,450 400,472 740,302"/>
			<polygon class="wall-back-l" points="400,110 60,280 60,160 400,-10"/>
			<polygon class="wall-back-r" points="400,110 740,280 740,160 400,-10"/>
			<polygon class="part-top" points="400,-10 740,160 751.9,154.1 400,-21.9 48.1,154.1 60,160"/>
			<polygon class="window" points="604,172 692.4,216.2 692.4,160.2 604,116"/>
			<polygon class="window" points="189.2,175.4 107.6,216.2 107.6,160.2 189.2,119.4"/>
			<polygon class="window" points="352.4,81.8 277.6,119.2 277.6,75.2 352.4,37.8"/>
			<g class="room room-kitchen" data-room="kitchen"><title>Kitchen</title><polygon class="floor" points="400,113.5 561.8,194.4 400,275.3 238.2,194.4"/><polygon class="f-counter" points="362.6,137.2 515.6,213.7 515.6,183.7 362.6,107.2"/><polygon class="f-counter-side" points="553,195 515.6,213.7 515.6,183.7 553,165"/><polygon class="f-counter-top" points="400,88.5 553,165 515.6,183.7 362.6,107.2"/><polygon class="f-dark" points="425.5,107.6 462.9,126.3 439.1,138.2 401.7,119.5"/><polygon class="f-water" points="493.5,141.6 524.1,156.9 500.3,168.8 469.7,153.5"/><polygon class="f-counter" points="274.2,181.4 311.6,200.1 311.6,170.1 274.2,151.4"/><polygon class="f-counter-side" points="400,155.9 311.6,200.1 311.6,170.1 400,125.9"/><polygon class="f-counter-top" points="362.6,107.2 400,125.9 311.6,170.1 274.2,151.4"/><polygon class="f-wood" points="342.2,213.7 406.8,246 406.8,220 342.2,187.7"/><polygon class="f-wood-side" points="451,223.9 406.8,246 406.8,220 451,197.9"/><polygon class="f-wood-top" points="386.4,165.6 451,197.9 406.8,220 342.2,187.7"/></g>
			<g class="room room-bathroom" data-room="bathroom"><title>Bathroom</title><polygon class="floor" points="570,198.5 731.8,279.4 570,360.3 408.2,279.4"/><polygon class="f-white" points="539.4,222.2 597.2,251.1 597.2,221.1 539.4,192.2"/><polygon class="f-white-side" points="631.2,234.1 597.2,251.1 597.2,221.1 631.2,204.1"/><polygon class="f-white-top" points="573.4,175.2 631.2,204.1 597.2,221.1 539.4,192.2"/><polygon class="f-water" points="580.2,184.9 610.8,200.2 590.4,210.4 559.8,195.1"/><polygon class="f-white" points="551.3,303 614.2,334.4 614.2,310.4 551.3,279"/><polygon class="f-white-side" points="723,280 614.2,334.4 614.2,310.4 723,256"/><polygon class="f-white-top" points="660.1,224.6 723,256 614.2,310.4 551.3,279"/><polygon class="f-water" points="658.4,231.7 707.7,256.4 615.9,302.3 566.6,277.6"/><polygon class="f-white" points="478.2,254.5 505.4,268.1 505.4,250.1 478.2,236.5"/><polygon class="f-white-side" points="529.2,256.2 505.4,268.1 505.4,250.1 529.2,238.2"/><polygon class="f-white-top" points="502,224.6 529.2,238.2 505.4,250.1 478.2,236.5"/><polygon class="f-rug" points="495.2,276.1 549.6,303.3 515.6,320.3 461.2,293.1"/></g>
			<g class="room room-bedroom" data-room="bedroom"><title>Bedroom</title><polygon class="floor" points="230,198.5 391.8,279.4 230,360.3 68.2,279.4"/><polygon class="f-rug" points="277.6,252.3 349,288 233.4,345.8 162,310.1"/><polygon class="f-bed" points="116.1,260.5 218.1,311.5 218.1,291.5 116.1,240.5"/><polygon class="f-bed-side" points="320.1,260.5 218.1,311.5 218.1,291.5 320.1,240.5"/><polygon class="f-bed-top" points="218.1,189.5 320.1,240.5 218.1,291.5 116.1,240.5"/><polygon class="f-white" points="126.3,238.8 153.5,252.4 153.5,244.4 126.3,230.8"/><polygon class="f-white-side" points="241.9,208.2 153.5,252.4 153.5,244.4 241.9,200.1"/><polygon class="f-white-top" points="214.7,186.6 241.9,200.1 153.5,244.4 126.3,230.8"/><polygon class="f-wood" points="78.7,279.2 109.3,294.5 109.3,272.5 78.7,257.2"/><polygon class="f-wood-side" points="136.5,280.9 109.3,294.5 109.3,272.5 136.5,258.9"/><polygon class="f-wood-top" points="105.9,243.6 136.5,258.9 109.3,272.5 78.7,257.2"/></g>
			<g class="room room-living" data-room="living"><title>Living room</title><polygon class="floor" points="400,283.5 561.8,364.4 400,445.3 238.2,364.4"/><polygon class="f-rug" points="403.4,311.8 485,352.6 376.2,407 294.6,366.2"/><polygon class="f-wood" points="342.2,363.3 383,383.7 383,369.7 342.2,349.3"/><polygon class="f-wood-side" points="437.4,356.5 383,383.7 383,369.7 437.4,342.5"/><polygon class="f-wood-top" points="396.6,322.1 437.4,342.5 383,369.7 342.2,349.3"/><polygon class="f-sofa" points="379.6,419.4 413.6,436.4 413.6,418.4 379.6,401.4"/><polygon class="f-sofa-side" points="542.8,371.8 413.6,436.4 413.6,418.4 542.8,353.8"/><polygon class="f-sofa-top" points="508.8,336.8 542.8,353.8 413.6,418.4 379.6,401.4"/><polygon class="f-sofa" points="398.3,428.8 413.6,436.4 413.6,398.4 398.3,390.8"/><polygon class="f-sofa-side" points="542.8,371.8 413.6,436.4 413.6,398.4 542.8,333.8"/><polygon class="f-sofa-top" points="527.5,326.2 542.8,333.8 413.6,398.4 398.3,390.8"/><polygon class="f-white" points="253.8,363.3 274.2,373.5 274.2,343.5 253.8,333.3"/><polygon class="f-white-side" points="294.6,363.3 274.2,373.5 274.2,343.5 294.6,333.3"/><polygon class="f-white-top" points="274.2,323.1 294.6,333.3 274.2,343.5 253.8,333.3"/></g>
			</svg>
			<div class="room-tabs" role="tablist" aria-label="Rooms">
				<?php $first = true; foreach ( $kfs_rooms as $key => $room ) : ?>
				<button type="button" class="room-tab" role="tab" id="tab-<?php echo $key; ?>" data-room="<?php echo $key; ?>" aria-controls="card-<?php echo $key; ?>" aria-selected="<?php echo $first ? 'true' : 'false'; ?>" tabindex="<?php echo $first ? '0' : '-1'; ?>"><?php echo esc_html( $room['name'] ); ?></button>
				<?php $first = false; endforeach; ?>
				<button type="button" class="room-tab" role="tab" id="tab-final" data-room="final" aria-controls="card-final" aria-selected="false" tabindex="-1">Final check</button>
			</div>

			<?php $first = true; foreach ( $kfs_rooms as $key => $room ) : ?>
			<div class="room-card" role="tabpanel" id="card-<?php echo $key; ?>" data-room="<?php echo $key; ?>" aria-labelledby="tab-<?php echo $key; ?>"<?php echo $first ? '' : ' hidden'; ?>>
				<h3>The <?php echo esc_html( strtolower( $room['name'] ) ); ?></h3>
				<div class="room-card-cols">
					<div>
						<h4>Every clean</h4>
						<ul class="ticks"><?php foreach ( $room['every'] as $task ) : ?><li><?php echo esc_html( $task ); ?></li><?php endforeach; ?></ul>
					</div>
					<div>
						<h4>A deep clean adds</h4>
						<ul class="ticks"><?php foreach ( $room['deep'] as $task ) : ?><li><?php echo esc_html( $task ); ?></li><?php endforeach; ?></ul>
					</div>
				</div>
			</div>
			<?php $first = false; endforeach; ?>
			<div class="room-card" role="tabpanel" id="card-final" data-room="final" aria-labelledby="tab-final" hidden>
				<h3>Before we leave</h3>
				<ul class="ticks">
					<li>One more walk through every room</li>
					<li>Anything missed gets done before we go</li>
					<li>Not home? We text you when we&rsquo;re done</li>
					<li>Spot something later? Tell us within 24 hours and we re-clean it free</li>
				</ul>
			</div>
		</div>

		<div class="hero-form">
			<div class="quote-card" id="quick-quote">
				<h2 class="quote-card-title">Free quote within 24 hours</h2>
				<p class="quote-card-sub">No commitment. Or call <a href="tel:+19782199787">(978) 219-9787</a>.</p>
				<?php kfs_quote_form( 'h-', false ); ?>
			</div>
			<div class="proof">
				<span><?php echo $kfs_star; ?>5-star rated on Google</span>
				<span>500+ homes cleaned</span>
				<span>Flat-rate pricing</span>
			</div>
		</div>

	</div>
</section>

<!-- ===================== WHAT THE NEIGHBORS SAY ===================== -->
<section class="section section-alt" id="reviews" aria-labelledby="reviews-title">
	<div class="wrap">
		<div class="section-head">
			<h2 class="section-title" id="reviews-title">What the neighbors say</h2>
			<p class="section-lead">Google and Thumbtack reviews, word for word.</p>
		</div>
		<div class="reviews-grid">
			<figure class="review review-lead">
				<?php echo $kfs_stars; ?>
				<p class="review-pull" aria-hidden="true">&ldquo;I trust to have them in my house with no one here.&rdquo;</p>
				<blockquote><p>&ldquo;Katia and company always show up when expected never one canceled appointment!!! Having reliability gives me peace of mind. Anything I request is done and I trust to have them in my house with no one here. Prices are great!!! Been a customer for over two years and will continue as long as she is here!!!&rdquo;</p></blockquote>
				<figcaption><span class="review-avatar" aria-hidden="true">C</span>Christine A. <span>Dracut, MA &middot; Google review</span></figcaption>
			</figure>
			<figure class="review review-small">
				<?php echo $kfs_stars; ?>
				<blockquote><p>&ldquo;Wonderful, detailed, and conscientious! Katia and her crew always leave my home sparkling!&rdquo;</p></blockquote>
				<figcaption><span class="review-avatar" style="--av:var(--bathroom)" aria-hidden="true">J</span>Jessica K. <span>Google review</span></figcaption>
			</figure>
			<figure class="review review-small">
				<?php echo $kfs_stars; ?>
				<blockquote><p>&ldquo;I highly recommend Katia and her cleaning team. They are reliable, professional, thorough, and consistently do an outstanding job.&rdquo;</p></blockquote>
				<figcaption><span class="review-avatar" style="--av:var(--bedroom)" aria-hidden="true">L</span>Lauren D. <span>Google review</span></figcaption>
			</figure>
			<figure class="review review-small">
				<?php echo $kfs_stars; ?>
				<blockquote><p>&ldquo;KFS has been cleaning my home for 26 years. Trusted, does a great job cleaning the kitchen, bathrooms and main rooms.&rdquo;</p></blockquote>
				<figcaption><span class="review-avatar" style="--av:var(--living)" aria-hidden="true">J</span>Jan R. <span>Google review</span></figcaption>
			</figure>
			<figure class="review review-small">
				<?php echo $kfs_stars; ?>
				<blockquote><p>&ldquo;KFS cleaning is literally the best !! We have 2 dogs so we need weekly cleanings, KFS is always on time, always doing a perfect job! I&rsquo;ve worked with different cleaning companies before and KFS is the best one!&rdquo;</p></blockquote>
				<figcaption><span class="review-avatar" style="--av:var(--kitchen)" aria-hidden="true">T</span>Thomas W. <span>Thumbtack review</span></figcaption>
			</figure>
		</div>
		<div class="reviews-more reviews-widget">
			<?php
			$google_reviews = do_shortcode( '[trustindex no-registration=google]' );
			// The shortcode echoes itself back, or returns an error notice, when the widget is unavailable.
			if ( trim( $google_reviews ) !== '' && strpos( $google_reviews, '[trustindex' ) === false && strpos( $google_reviews, 'ti-widget' ) !== false ) {
				echo $google_reviews;
			} else {
				echo '<p class="reviews-fallback">Read more reviews on <a href="' . esc_url( 'https://www.google.com/search?q=KFS+Cleaning+Services+reviews' ) . '" target="_blank" rel="noopener">Google</a>.</p>';
			}
			?>
		</div>
	</div>
</section>

<!-- ===================== THE PROMISE ===================== -->
<section class="promise" id="why" aria-labelledby="promise-title">
	<div class="wrap">
		<div class="promise-card">
			<div>
				<h2 id="promise-title">We don&rsquo;t leave until it&rsquo;s completely clean and you&rsquo;re happy.</h2>
				<p>Katia&rsquo;s team takes its time and doesn&rsquo;t rush. If anything was missed, tell us within 24 hours and we come back and re-clean it at no charge.</p>
			</div>
			<ul class="credits">
				<li><b>Flat-rate pricing</b>Priced by the job, never by the hour</li>
				<li><b>Free re-clean</b>Tell us within 24 hours</li>
				<li><b>Licensed &amp; insured</b>In Massachusetts and New Hampshire</li>
				<li><b>Supplies included</b>Professional-grade, no extra charge</li>
				<li><b>Flexible hours</b>Evenings and weekends available</li>
				<li><b>A consistent team</b>The same people whenever we can</li>
			</ul>
		</div>
	</div>
</section>

<!-- ===================== SERVICES ===================== -->
<section class="section" id="services" aria-labelledby="services-title">
	<div class="wrap">
		<div class="section-head">
			<h2 class="section-title" id="services-title">One-time or every week</h2>
			<p class="section-lead">Six kinds of cleaning, each with its own checklist.</p>
		</div>
		<div class="services-grid">
			<ul class="service-list">
				<?php foreach ( $kfs_services as $svc ) : ?>
				<li class="service-row" style="--dot:var(--<?php echo esc_attr( $svc['dot'] ); ?>-deep)">
					<div>
						<h3><a href="<?php echo esc_url( home_url( '/' . $svc['slug'] . '/' ) ); ?>"><?php echo $svc['title']; ?></a></h3>
						<p><?php echo esc_html( $svc['desc'] ); ?></p>
					</div>
					<?php if ( $svc['meta'] ) : ?><span class="service-time"><?php echo $svc['meta']; ?></span><?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
			<aside class="business-card" aria-labelledby="business-title">
				<h3 id="business-title">For businesses</h3>
				<p>Offices, retail, medical and commercial properties, cleaned around your business hours.</p>
				<ul class="ticks">
					<li>Evenings and weekends</li>
					<li>A walkthrough before we quote</li>
					<li>Proof of insurance on request</li>
				</ul>
				<a class="btn-primary" href="#quote" data-coupon="Business">Book a walkthrough</a>
				<p><a href="<?php echo esc_url( home_url( '/commercial-cleaning/' ) ); ?>">More about commercial cleaning</a></p>
			</aside>
		</div>
	</div>
</section>

<!-- ===================== FROM THE JOB (gallery) ===================== -->
<section class="section section-alt" id="gallery" aria-labelledby="gallery-title">
	<div class="wrap">
		<div class="section-head">
			<h2 class="section-title" id="gallery-title">From the job</h2>
			<p class="section-lead">Real photos from real jobs. Tap one to see it larger.</p>
		</div>
		<div class="photo-grid">
			<?php foreach ( $kfs_gallery as $i => $img ) : ?>
			<button type="button" class="gal-item<?php echo $img['wide'] ? ' gal-wide' : ''; ?>" data-src="<?php echo esc_url( $kfs_img . '/gallery/' . $img['file'] . '.jpg' ); ?>" data-index="<?php echo esc_attr( $i ); ?>" aria-label="View larger photo: <?php echo esc_attr( $img['note'] ); ?>">
				<img src="<?php echo esc_url( $kfs_img . '/gallery/' . $img['file'] . '.jpg' ); ?>" alt="<?php echo esc_attr( $img['label'] . ': ' . $img['note'] ); ?>" loading="lazy">
				<span class="photo-cap"><?php echo esc_html( $img['label'] ); ?></span>
			</button>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Photo viewer" aria-hidden="true">
	<div class="lightbox-backdrop" data-lightbox-close></div>
	<div class="lightbox-inner">
		<button class="lb-close" id="lb-close" type="button" aria-label="Close photo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><path d="M5 5l14 14M19 5L5 19"/></svg></button>
		<button class="lb-prev" id="lb-prev" type="button" aria-label="Previous photo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 4l-8 8 8 8"/></svg></button>
		<div class="lb-stage">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" id="lb-img">
		</div>
		<button class="lb-next" id="lb-next" type="button" aria-label="Next photo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 4l8 8-8 8"/></svg></button>
	</div>
</div>

<!-- ===================== HOW IT WORKS + FULL QUOTE ===================== -->
<section class="section" id="quote" aria-labelledby="next-title">
	<div class="wrap quote-grid">
		<div>
			<h2 class="section-title" id="next-title">How it works</h2>
			<ol class="steps">
				<li><div><b>Send the form or call.</b><span>Tell us about your home or business. It takes a minute.</span></div></li>
				<li><div><b>Get a flat-rate quote within 24 hours.</b><span>For businesses, we set up a walkthrough of the space first.</span></div></li>
				<li><div><b>Pick a day.</b><span>Katia&rsquo;s team arrives on time with every supply and gives each room the time it needs.</span></div></li>
			</ol>
			<p class="call-line">Rather talk? <a href="tel:+19782199787">(978) 219-9787</a></p>
		</div>
		<div class="quote-card">
			<h2 class="quote-card-title">Your free quote</h2>
			<p class="quote-card-sub">A few details and we&rsquo;ll send a flat-rate number within 24 hours. That&rsquo;s the price you pay, unless you ask us to add extra work.</p>
			<?php kfs_quote_form( 'q-', true ); ?>
		</div>
	</div>
</section>

<!-- ===================== TOWNS WE SERVE ===================== -->
<section class="section section-alt" id="areas" aria-labelledby="areas-title">
	<div class="wrap">
		<div class="section-head">
			<h2 class="section-title" id="areas-title">Towns we serve</h2>
			<p class="section-lead">The North Shore and Merrimack Valley in Massachusetts, plus Southern New Hampshire.</p>
		</div>
		<div class="towns">
			<div class="towns-state">
				<h3>Massachusetts</h3>
				<p>North Shore, Merrimack Valley &amp; Greater Lowell</p>
				<ul class="town-list">
					<?php foreach ( $kfs_towns_ma as $town ) : ?><li><?php echo esc_html( $town ); ?></li><?php endforeach; ?>
				</ul>
			</div>
			<div class="towns-state">
				<h3>New Hampshire</h3>
				<p>Southern New Hampshire &amp; Seacoast</p>
				<ul class="town-list">
					<?php foreach ( $kfs_towns_nh as $town ) : ?><li><?php echo esc_html( $town ); ?></li><?php endforeach; ?>
				</ul>
			</div>
		</div>
		<p class="towns-note">Don&rsquo;t see your town? <a href="tel:+19782199787">Call (978) 219-9787</a> and we&rsquo;ll confirm. We likely cover it.</p>
	</div>
</section>

<!-- ===================== FAQ ===================== -->
<section class="section" id="faq" aria-labelledby="faq-title">
	<div class="wrap">
		<div class="section-head">
			<h2 class="section-title" id="faq-title">Questions before you book</h2>
		</div>
		<div class="faq-list" id="faq-list">
			<?php foreach ( $kfs_faq as $i => $item ) : ?>
			<div class="faq-item">
				<button class="faq-q" type="button" aria-expanded="false" aria-controls="faq-a-<?php echo esc_attr( $i ); ?>" id="faq-q-<?php echo esc_attr( $i ); ?>">
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

</main>

<?php get_footer(); ?>
