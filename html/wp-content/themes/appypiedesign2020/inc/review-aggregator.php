<?php
include_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/wp-includes/shortcodes.php');
add_shortcode( 'Reviewaggregator', 'Review_aggregator' );
function Review_aggregator( $atts ) {
		$service_url = 'https://media.appypie.com/third-party-rating.json';
		$curl = curl_init($service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$reviewrating = curl_exec($curl);
		curl_close($curl);
		$json_review=json_decode($reviewrating);
        
		$vote = $json_review->trustpilot_vote;
		$trustpilot = $json_review->trustpilot;
?>
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "SoftwareApplication",
		"name": "Appy Pie",
		"applicationCategory": "Mobile App Maker",
		"url": "https://www.appypie.com",
		"operatingSystem": "Android, iOS",
		"image": "https://images.appypie.com/wp-content/uploads/2019/12/18115753/How-to-Make-an-App.png",
		"aggregateRating": {
		"@type": "AggregateRating",
		"ratingValue": "<?php echo $trustpilot; ?>",
		"reviewCount": "<?php echo $vote; ?>"
	},
		"offers": {
		"@type": "Offer",
		"price": "00",
		"priceCurrency": "USD"
	},
	    "potentialAction": { "@type": "CreateAction", "target": "https://www.appypie.com/app-builder/pricing-plan" }
	}
</script>
<?php } ?>