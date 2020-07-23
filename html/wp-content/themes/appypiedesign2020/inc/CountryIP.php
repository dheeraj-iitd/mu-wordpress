<?php 
  function countryCode(){
		$countryCode='';
		if(strpos($_SERVER["HTTP_HOST"], 'host.angular')){ 
			$countryCode = getenv("GEOIP_COUNTRY_CODE");
		} else {
			$ipAddress = getip_index1();
			include_once('geoip.inc');
			if((strpos($ipAddress, ":") === false))
			{
				$gi = @geoip_open("/usr/share/GeoIP/GeoIP.dat",GEOIP_STANDARD);  //ipv4
				$countryCode = @geoip_country_code_by_addr($gi, $ipAddress);
			}
			else
			{
				$gi = @geoip_open("/usr/share/GeoIP/GeoIPv6.dat",GEOIP_STANDARD); //ipv6
				$countryCode = @geoip_country_code_by_addr_v6($gi, $ipAddress);
			}
			if($countryCode==''){
				$countryCode = getenv("GEOIP_COUNTRY_CODE");
			}
		}
		if($countryCode==''){
			$countryCode='US';
		}
		return $countryCode;
	}
	
	function getip_index1() {
		if(validip_index2(@$_SERVER["HTTP_CLIENT_IP"])) {
			return @$_SERVER["HTTP_CLIENT_IP"];
		}
		foreach(explode(",",@$_SERVER["HTTP_X_FORWARDED_FOR"]) as $ip) {
			if(validip_index2(trim($ip))) {
				return $ip;
			}
		}
		if(validip_index2(@$_SERVER["HTTP_X_FORWARDED"])) {
			return @$_SERVER["HTTP_X_FORWARDED"];
		}
		elseif(validip_index2(@$_SERVER["HTTP_FORWARDED_FOR"])) {
			return @$_SERVER["HTTP_FORWARDED_FOR"];
		}
		elseif(validip_index2(@$_SERVER["HTTP_FORWARDED"])) {
			return @$_SERVER["HTTP_FORWARDED"];
		}
		else {
			return @$_SERVER["REMOTE_ADDR"];
		}
	}
	function validip_index2($ip) {
		if(!empty($ip) && ip2long($ip)!=-1) {
			$reserved_ips = array(
				array('0.0.0.0','2.255.255.255'),
				array('10.0.0.0','10.255.255.255'),
				array('127.0.0.0','127.255.255.255'),
				array('169.254.0.0','169.254.255.255'),
				array('172.16.0.0','172.31.255.255'),
				array('192.0.2.0','192.0.2.255'),
				array('192.168.0.0','192.168.255.255'),
				array('255.255.255.0','255.255.255.255')
			);
			foreach($reserved_ips as $r) {
				$min = ip2long($r[0]);
				$max = ip2long($r[1]);
				if((ip2long($ip) >= $min) && (ip2long($ip) <= $max))
				return false;
			}
			return true;
		}
		else {
			return false;
		}
	}
?>
