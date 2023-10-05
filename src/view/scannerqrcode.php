<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardennes Connect, QRcode</title>
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/svg/favicon.svg">
</head>
<body>
    <div id="your-qr-result"></div>
    <h1>Scan qr</h1>
    <div class ="flex justify-center">
        <div id="my-qr-reader" class="w-96"></div>
    </div>
    <!-- LOAD LIBRARY -->
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript">

   <script src="qrcodescan.js">
    </script>

    <div id="reader" width="600px"></div>
    <div id="result"></div>
<script>
const scanner = new Html5QrcodeScanner('reader',{
    qrbox:{
        width :250,
        height:250
    },
    fps: 20,
});

scanner.render(success, error);

function success(result){
    document.getElementById('result').innerHTLM = `<p><a href="${result}">$result</a></p>`;

    scanner.clear();
    document.getElementById('reader').remove();

}

function error(err){
    console.error(err);
}
</script>
</body>
</html>
