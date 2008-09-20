<?PHP
 // default: irc.mibbit.com 
 $server = 'irc.freenode.net'; 
 $room   = 'openMSX'; // w./o. # or %23 !
 $uri    = 'http://embed.mibbit.com/'
 . '?forcePrompt=true&nick=openMSX_User_%3F%3F%3F%3F' // ?=%3F will be replaced by a digit 
 . "&customprompt=Welcome%20to%20$server/$room"
 . '&customloading=Loading...%20If%20this%20takes%20too%20long,%20maybe%20you%20need%20to%20close%20other%20Mibbit%20windows%20first...'
 . '&noServerMotd=true'; 
 if (!empty($room))    {$uri .= '&channel=%23' . $room;}  
 if (!empty($server )) {$uri .= '&server='     . $server;}  
 // IE needs a proper header:
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><title>openMSX chat on <?php echo empty($server)  ? 'irc.mibbit.com' : $server; ?></title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<style>
body{font:93% verdana,sans-serif;background:#999;color:#fff;}
iframe{width:800px;height:600px /* "%" doesn't work in strict mode*/;}
</style>
</head>
<body><center>
<h3>openMSX IRC channel</h3>
<iframe  src="<?PHP echo $uri; ?>" frameborder="0">
 [Your user agent does not support frames or is currently configured
 not to display frames. However, you may want to open the
 <A href="<?PHP echo $uri; ?>"
 target="_blank"> chat in a new browser window ...</A>]
</iframe>
</center>
<br>Quick help: please fill in your nickname and click the button to join the chatrooom. There may be no spaces, interpunctuation or leading ciphers in your nick name. After joining the chat room, you can type <tt>/nick</tt> to change your nickname. Type <tt>/help</tt>, for other available commands.
</body></html>
