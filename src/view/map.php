<!DOCTYPE html>
<html lang="en">

<head>
    <base target="_top">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Map</title>
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link href="./dist/output.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        .leaflet-popup-content-wrapper {
            width: 200px;
        }
    </style>

</head>

<body class="bg-darkGray h-screen flex flex-col gap-10">

    <?php include('src/view/template/navbar.php') ?>

    <main>
        <div class="pb-10 flex flex-col items-center">
            <h2 class="text-4xl font-bold text-center">Map Intéractive</h2>
            <hr class="w-[200px] mx-auto mt-2 border-2 border-yellowLogo" />
        </div>

        <div class="bg-white sm:w-10/12 mx-auto rounded-[40px] border-2 border-darkGray flex items-center justify-center overflow-hidden">
            <div id="map" class="w-full h-[800px]"></div>
        </div>
    </main>
    <?php include('src/view/template/bottomNavbar.php') ?>


    <?php include('src/view/template/footer.php') ?>
    <script src="src/assets/js/map.js"></script>

</body>

</html>