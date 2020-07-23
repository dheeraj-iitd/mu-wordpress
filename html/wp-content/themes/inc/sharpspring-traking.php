<?php 
include_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/wp-includes/shortcodes.php');
add_shortcode( 'sharpspringtraking', 'sharpspring_trakingscript' );
function sharpspring_trakingscript( $atts ) {
?>
<!--<script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-mnqzc8.marketingautomation.services/net']);
    _ss.push(['_setAccount', 'KOI-45JJHTZQ6G']);
    _ss.push(['_trackPageView']);
(function() {
    var ss = document.createElement('script');
    ss.type = 'text/javascript'; ss.async = true;
    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-MNQZC8.marketingautomation.services/client/ss.js?ver=2.2.1';
    var scr = document.getElementsByTagName('script')[0];
    scr.parentNode.insertBefore(ss, scr);
})();
</script>
<script>
(function(w,o,d,s) {
    w['_itlk']='8fec5f44cc5d6f815200491-2';
    w['_itlt']=[]; w['_itlq']=[];w['_itld']=s;w[o]=w[o]||{log:function(t,v,p){w['_itlt'].push([t,v,p])},stream:function(q){w['_itlq'].push([q])}};
    var pa = d.createElement('script'), ae = d.getElementsByTagName('script')[0], protocol = (('https:' == d.location.protocol) ? 'https://' : 'http://');pa.async = 1;  pa.src = protocol + 'io.innertrends.com/itl.js'; pa.type = 'text/javascript'; ae.parentNode.insertBefore(pa, ae);
    })(window,'_itl',document,"");
</script>-->
<?php } ?>
