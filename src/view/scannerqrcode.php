<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardennes Connect, QRcode</title>
    <script src="https://webqr.com/llqrcode.js"></script>
</head>
<body>
    
<html>
<head>
  
<title>Web QR</title>

<script type="text/javascript" src="https://webqr.com/llqrcode.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="https://webqr.com/webqr.js"></script>

</head>

<body>
<div id="main">
<div id="header">
<div style="position:relative;top:+20px;left:0px;">
<p id="mp1">
QR Code scanner
</p>

</div>
<div id="mainbody">
<table class="tsel" border="0" width="100%">
<tr>
<td valign="top" align="center" width="50%">
<table class="tsel" border="0">
<tr>
<td><img class="selector" id="webcamimg" src="https://webqr.com/vid.png" onclick="setwebcam()" align="left" /></td>
<td><img class="selector" id="qrimg" src="https://webqr.com/cam.png" onclick="setimg()" align="right"/></td></tr>
<tr><td colspan="2" align="center">
<div id="outdiv">
</div></td></tr>
</table>
</td>
</tr>

<tr><td colspan="3" align="center">
<div id="result"></div>
</td></tr>
</table>

<!-- webqr_2016 -->

</div>&nbsp;
<div id="footer">

<h5 align="center">Copyright &copy; 2011 <a target="_blank" href="http://www.lazarsoft.info">Lazar Laszlo</a></h5>
</div>
</div>
<canvas id="qr-canvas" width="800" height="600"></canvas>
</body>

</html>
</body>
</html>