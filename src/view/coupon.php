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
<body class="w-full h-full flex flex-col justify-center items-center bg-lightGray">
    <div class="md:hidden mt-8">
            <span class="text-3xl font-medium underline underline-offset-8 decoration-redLogo">Félicitations !</span> 
            <p class="text-xl mt-2">Vous avez obtenu un nouveau coupon.</p>
        <img src="src/assets/img/coupon/vertbock.png" class="w-11/12 h-auto mx-auto my-8">
        <a href="?action=profil?coupon=src/assets/img/babyfoot.png" class="rounded-full bg-redLogo py-2 w-fit px-6 text-white font-semibold ">Ajouter à ma collection</a>
    </div>
    <div class="hidden md:flex flex-col mt-10 text-lg">
        <p class="font-medium text-xl">Attention ! Cette page n'est pas accecsible depuis un ordinateur.</p>
        <span class="mt-2">Veuillez utiliser un téléphone afin de récupérer vos récompenses.</span>
    </div>
</body>
</html>