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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.2.0/html5-qrcode.min.js"></script>

</head>
<body>
    
</body>
</html>


<!-- QR SCANNER CODE BELOW  -->
<div class="">
  <div class="col">
    <div id="reader" class="w-full"></div>
  </div>
  <div class="col" style="padding: 30px">
    <div id="result">
    </div>
  </div>

</div>
<style>
    h1 {
  text-align: center;
}

#reader {
  width: 500px;
}

.result {
  background-color: green;
  color: #fff;
  padding: 20px;
}

.row {
  display: flex;
}

#reader__scan_region {
  background: white;
}

</style>

<script>
    // When scan is successful fucntion will produce data
function onScanSuccess(qrCodeMessage) {
  document.getElementById("result").innerHTML =
    '<a class="result" href="' + qrCodeMessage + '">Ouvrir le lien</a>';
}

// When scan is unsuccessful fucntion will produce error message
function onScanError(errorMessage) {
  // Handle Scan Error
}

// Setting up Qr Scanner properties
var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
  fps: 10,
  qrbox: 250
});

// in
html5QrCodeScanner.render(onScanSuccess, onScanError);

</script>
=======
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

