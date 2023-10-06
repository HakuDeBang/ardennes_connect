<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.2.0/html5-qrcode.min.js"></script>
    <script src="https://cdn.tailwindcss.com%22%3E/"></script>

</head>

<body>

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
</body>

</html>