<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<footer class="site-footer" role="contentinfo">
	<div class="wrap footer-grid">
		<!-- Brand -->
		<div class="footer-brand">
			<p class="footer-mast">KFS Cleaning Services</p>
			<p>Home and business cleaning by Katia&rsquo;s team across the North Shore, the Merrimack Valley and Southern New Hampshire.</p>
		</div>
		<!-- Services -->
		<div class="footer-col">
			<h4>Services</h4>
			<a href="<?php echo esc_url(home_url('/regular-house-cleaning/')); ?>">Regular Home Cleaning</a>
			<a href="<?php echo esc_url(home_url('/deep-cleaning/')); ?>">Deep Cleaning</a>
			<a href="<?php echo esc_url(home_url('/move-out-cleaning/')); ?>">Move-In / Move-Out</a>
			<a href="<?php echo esc_url(home_url('/commercial-cleaning/')); ?>">Commercial &amp; Office</a>
			<a href="<?php echo esc_url(home_url('/post-construction-cleaning/')); ?>">Post-Construction</a>
			<a href="<?php echo esc_url(home_url('/airbnb-cleaning/')); ?>">Airbnb &amp; Rental Turnover</a>
		</div>
		<!-- Company -->
		<div class="footer-col">
			<h4>Company</h4>
			<a href="<?php echo esc_url( kfs_section_url( 'reviews' ) ); ?>">Reviews</a>
			<a href="<?php echo esc_url( kfs_section_url( 'gallery' ) ); ?>">Our Work</a>
			<a href="<?php echo esc_url( kfs_section_url( 'areas' ) ); ?>">Towns We Serve</a>
			<a href="<?php echo esc_url( kfs_section_url( 'faq' ) ); ?>">FAQ</a>
			<a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
		</div>
		<!-- Contact -->
		<div class="footer-col">
			<h4>Contact</h4>
			<div class="footer-contact-row"><a href="tel:+19782199787">(978) 219-9787</a></div>
			<div class="footer-contact-row"><a href="mailto:support@kfscleaning.com">support@kfscleaning.com</a></div>
			<div class="footer-contact-row">Office hours Mon&ndash;Sat, 8am&ndash;6pm</div>
			<a href="<?php echo esc_url( kfs_quote_url() ); ?>" class="footer-quote-btn">Get a Free Quote</a>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="wrap footer-bottom-inner">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> KFS Cleaning Services. All rights reserved.</span>
			<span>Licensed &amp; insured in Massachusetts and New Hampshire</span>
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