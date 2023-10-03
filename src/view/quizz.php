<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardennes Connect</title>
    <link href="./dist/output.css" rel="stylesheet">
</head>

<body class="bg-lightGray h-screen">

    <?php require('template/navbar.php'); ?>
    <main>
        <div class="relative mt-20 w-10/12 mx-auto h-auto">
            <img class="brightness-[0.75] h-[800px] w-[1600px] rounded-[40px]" src="src/assets/img/header.jpg" alt="Forêt Ardennes">
            <div class="absolute top-0 left-0 w-full h-full p-8 flex items-start">
                <div id="root" class="flex-grow"></div>
                <img class="w-[475px]" src="src/assets/img/logo_white.png" alt="">
            </div>
        </div>
    </main>

    <?php require('template/footer.php'); ?>
    <?php require('template/script_head.php') ?>
    <script type="text/babel" src="src/assets/react/index.js"></script>
</body>

</html>