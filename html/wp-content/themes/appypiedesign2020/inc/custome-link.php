<?php 
function vmf_menu_links($items, $args) {

$newlang   = (qtrans_getlanguage()=='en')?'':qtrans_getlanguage();
$urlsuport = 'snappy.appypie.com/support';
$urledu    = 'snappy.appypie.com/student-app-developer-program';
$urlmark   = 'snappy.appypie.com/marketplace/';
$urlmap    = 'snappy.appypie.com/site-map';
$urlgam    = 'snappy.appypie.com/gamebuilder';
$newlang   = ($newlang=='zh')?'cn':$newlang;
$newlang   = ($newlang=='ja')?'jp':$newlang;

     if(qtrans_getlanguage() == '') {
	 
          return $items;
     }
     foreach ($items as $item) {
          if ($item->ID == '37') {
               $item->url = 'http://"'.$newlang.$urlsuport.'"';
          }
		  if ($item->ID == '36') {
               $item->url = 'http://"'.$newlang.$urledu.'"';
          }
		  if ($item->ID == '1941') {
               $item->url = 'http://"'.$newlang.$urledu.'"';
          }
		  if ($item->ID == '1534') {
               $item->url = 'http://"'.$newlang.$urlmark.'"';
          }
		  if ($item->ID == '1898') {
               $item->url = 'http://"'.$newlang.$urlmark.'"';
          }
		  if ($item->ID == '43') {
               $item->url = 'http://"'.$newlang.$urlmap.'"';
          }
		  if ($item->ID == '1942') {
               $item->url = 'http://"'.$newlang.$urlsuport.'"';
          }
		  if ($item->ID == '1943') {
               $item->url = 'http://"'.$newlang.$urlgam.'"';
          }
     }
     return $items;
}
add_filter('wp_nav_menu_objects', 'vmf_menu_links', 10, 2);

?>