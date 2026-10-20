<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<footer class="site-footer" role="contentinfo">
	<div class="wrap footer-grid">
		<!-- Brand -->
		<div class="footer-brand">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/kfs-logo.png' ); ?>" alt="KFS Cleaning Services" width="120" height="80" loading="lazy" class="footer-logo">
			<p>Professional residential &amp; commercial cleaning across Massachusetts &amp; New Hampshire. Licensed, insured, and satisfaction guaranteed.</p>
			<p class="footer-brand-contact">
				<a href="tel:+19782199787">(978) 219-9787</a><br>
				<a href="mailto:support@kfscleaning.com">support@kfscleaning.com</a>
			</p>
		</div>
		<!-- Services -->
		<div class="footer-col">
			<h4>Services</h4>
			<a href="<?php echo esc_url(home_url('/regular-house-cleaning/')); ?>">Regular Home Cleaning</a>
			<a href="<?php echo esc_url(home_url('/deep-cleaning/')); ?>">Deep Cleaning</a>
			<a href="<?php echo esc_url(home_url('/move-out-cleaning/')); ?>">Move-In / Move-Out</a>
			<a href="<?php echo esc_url(home_url('/commercial-cleaning/')); ?>">Commercial &amp; Office</a>
			<a href="<?php echo esc_url(home_url('/post-construction-cleaning/')); ?>">Post-Construction</a>
			<a href="<?php echo esc_url(home_url('/airbnb-cleaning/')); ?>">Airbnb Turnover</a>
		</div>
		<!-- Company -->
		<div class="footer-col">
			<h4>Company</h4>
			<a href="<?php echo esc_url( kfs_section_url( 'why' ) ); ?>">Why Choose Us</a>
			<a href="<?php echo esc_url( kfs_section_url( 'reviews' ) ); ?>">Reviews</a>
			<a href="<?php echo esc_url( kfs_section_url( 'gallery' ) ); ?>">Gallery</a>
			<a href="<?php echo esc_url( kfs_section_url( 'faq' ) ); ?>">FAQ</a>
			<a href="<?php echo esc_url( kfs_section_url( 'areas' ) ); ?>">Service Areas</a>
			<a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
			<a href="<?php echo esc_url( kfs_quote_url() ); ?>">Contact Us</a>
		</div>
		<!-- Contact -->
		<div class="footer-col">
			<h4>Contact</h4>
			<div class="footer-contact-row">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00C8E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12.5a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				<a href="tel:+19782199787">(978) 219-9787</a>
			</div>
			<div class="footer-contact-row">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00C8E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
				<a href="mailto:support@kfscleaning.com">support@kfscleaning.com</a>
			</div>
			<div class="footer-contact-row">
				<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#00C8E8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
				<span>Massachusetts &amp; New Hampshire</span>
			</div>
			<a href="<?php echo esc_url( kfs_quote_url() ); ?>" class="footer-quote-btn">Get a Free Quote</a>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="wrap footer-bottom-inner">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> KFS Cleaning Services. All rights reserved.</span>
			<span>MA &amp; NH &middot; Licensed &amp; Insured</span>
		</div>
	</div>
</footer>

<?php
// FAQPage JSON-LD — rendered here so it can use $kfs_faq from front-page
if ( ! defined( 'WPSEO_VERSION' ) && ! defined( 'RANK_MATH_VERSION' ) && ! defined( 'AIOSEO_VERSION' ) && ! defined( 'SEOPRESS_VERSION' ) ) :
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"How do I get a free quote?","acceptedAnswer":{"@type":"Answer","text":"Fill out our contact form or call (978) 219-9787. We respond within 24 hours and provide a no-obligation estimate."}},
    {"@type":"Question","name":"Are you licensed and insured?","acceptedAnswer":{"@type":"Answer","text":"Yes. KFS Cleaning Services is fully licensed and insured in both Massachusetts and New Hampshire. You can request proof of insurance at any time."}},
    {"@type":"Question","name":"Do you bring your own supplies?","acceptedAnswer":{"@type":"Answer","text":"Yes! We bring all cleaning products and equipment. You don't need to supply anything."}},
    {"@type":"Question","name":"What areas do you serve?","acceptedAnswer":{"@type":"Answer","text":"We serve communities across the North Shore of Massachusetts (Andover, Lawrence, Haverhill, Lowell, Beverly, Salem, Newburyport, and more) and Southern New Hampshire (Nashua, Manchester, Derry, Salem NH, Londonderry, and more)."}},
    {"@type":"Question","name":"How do I pay?","acceptedAnswer":{"@type":"Answer","text":"We accept all major payment methods including cash, check, Venmo, Zelle, and credit/debit cards."}},
    {"@type":"Question","name":"What is your satisfaction guarantee?","acceptedAnswer":{"@type":"Answer","text":"If you're not 100% satisfied, we'll come back and re-clean the area at no additional charge. Your satisfaction is our priority."}}
  ]
}
</script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>