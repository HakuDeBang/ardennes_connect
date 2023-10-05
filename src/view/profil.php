<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardennes Connect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="dist/output.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/svg/favicon.svg">
</head>

<body class="w-full h-auto bg-lightGray">

    <script src="src/assets/js/profil_top.js"></script>

    <h1 class="hidden">Profil</h1>
    <!-- HEADER -->
    <div class="container rounded-lg flex justify-center pb-8 mx-auto">

        <div class="rounded-lg shadow-xl pb-8">

            <div class="w-full h-[250px]">
                <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg"
                    class="w-full h-full rounded-lg">
            </div>

            <div class="flex flex-col items-center -mt-20">
                <!-- AVATAR -->
                <img src="src/assets/img/random_user.png" class="w-40 border-4  border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl">Nom Administrateur</p>
                    <span class="bg-blue-500 rounded-full p-1" title="Verified">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </span>
                </div>

                <p class="text-gray-700">Adresse</p>
                
                <div class="flex mt-2">
                    <p data-selected=true class="text-xs bg-white flex items-center w-fit py-1 px-3 ml-5 mt-2 leading-none rounded-xl
                        data-[selected=true]:bg-[#004a93] data-[selected=true]:text-white
                        data-[not_active]:bg-[#dc2f34] data-[selected=true]:text-white
                        transition-all duration-200">Categories</p>
                    <p data-selected=true class="text-xs bg-white flex items-center w-fit py-1 px-3 ml-5 mt-2 leading-none rounded-xl
                        data-[selected=true]:bg-[#004a93] data-[selected=true]:text-white
                        data-[not_active]:bg-[#dc2f34] data-[selected=true]:text-white
                        transition-all duration-200">Tags</p>
                </div>

                <div class="mt-5 flex gap-10">
                    <p class="text-gray-700"><span class="font-semibold">Scannes : </span>200</p>
                    <p class="text-gray-700"><span class="font-semibold">Coupons : </span>250</p>
                </div>

            </div>

            <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">

                <div class="flex items-center space-x-4 mt-2">
                    <button
                        class="flex items-center bg-[#00abe7] hover:bg-[#004a93] text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <span>Modifier</span>
                    </button>

                    <button
                        class="flex items-center bg-[#dc2f34] hover:bg-[#B60015] text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                        <a href="deconnexion">Déconnexion</a>
                    </button>
                </div>

            </div>

        </div>

    </div>

    <!-- TABLE -->
    <div class="z-10 bg-white relative lg:bg-none">

        <div class="fixed bottom-0 left-0 flex justify-center w-full py-4 text-sm font-semibold tracking-wide uppercase rounded-tr-lg bg-white lg:static">
            
            <div class="flex mx-auto lg:w-2/5 xl:w-1/4 justify-between">
                <!-- QR CODE -->
                <a id="tabBtn1" class="flex items-center w-auto mx-4 cursor-pointer lg:mx-0">
                    <img src="src/assets/svg/qrcode.svg" class="w-6 h-6 mr-1 lg:h-4 lg:w-4"
                        alt="icon pour voir mes cours en ligne">
                    <p class="hidden lg:flex">Mon qr code</p>
                </a>
                <!-- FAVORIS -->
                <a id="tabBtn2" class="flex items-center w-auto mx-4 cursor-pointer lg:mx-0 lg:mr-0">
                    <img src="src/assets/svg/fav.svg" class="w-6 h-6 lg:mr-1 lg:h-4 lg:w-4"
                        alt="icon pour ajouter aux favoris" class="w-3 h-3">
                    <p class="hidden lg:flex">Mes favoris</p>
                </a>
                <!-- COUPONS -->
                <a id="tabBtn3" class="flex items-center w-auto mx-4 cursor-pointer lg:mx-0">
                    <img src="src/assets/svg/coupon.svg" class="w-6 h-6 mr-1 lg:h-4 lg:w-4"
                        alt="icon pour voir mon historique">
                    <p class="hidden lg:flex">Mes coupons</p>
                </a>
                <!-- SETTING -->
                <a class="flex items-center w-auto mx-4 lg:hidden" id="editBtn">
                    <img src="src/assets/svg/parm.svg" class="w-6 h-6 mr-1 lg:h-4 lg:w-4"
                        alt="icon pour changer mes données">
                </a>
            </div>
        </div>

        <!-- TABLE FILE -->
        <div class="flex justify-center w-auto mx-auto my-5 ">

            <div class="flex">

                <!-- qr CARD -->
                <div id="content_1" class="flex w-full justify-center">
                    <div class="w-[323px] h-[182px] card_container rounded-xl flex mb-3 justify-center">
                        <img class="w-32" src="src/assets/svg/qrcode.svg">
                    </div>
                </div>

                <!-- Favorite CARD -->
                <div class="hidden flex w-full justify-center" id="content_2">
                    <div class="w-[323px] h-[182px] card_container rounded-xl mx-4 mt-3">
                        <div class="flex mb-3 justify-center">
                            <img src="src/assets/svg/Heart.svg" class="w-6 h-6 lg:mr-2 lg:h-4 lg:w-4 my-auto">
                            <p>Lieux favoris</p>
                        </div>
                        <div class="flex mb-3 justify-center">
                            <img src="src/assets/svg/Heart.svg" class="w-6 h-6 lg:mr-2 lg:h-4 lg:w-4 my-auto">
                            <p>Lieux favoris</p>
                        </div>
                        <div class="flex mb-3 justify-center">
                            <img src="src/assets/svg/Heart.svg" class="w-6 h-6 lg:mr-2 lg:h-4 lg:w-4 my-auto">
                            <p>Lieux favoris</p>
                        </div>
                    </div>
                </div>

                <div class="hidden flex w-full justify-center" id="content_3">
                    <!-- coupons CARD -->
                    <div class="w-[323px] card_container rounded-xl mx-4">
                    <div id="imageContainer" class="mb-10 md:mt-2"></div>
                    <!-- Ajoutez cet élément pour afficher l'image -->
                    <img id="couponImage" alt="Coupon Image">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
let couponImageSrc = sessionStorage.getItem('coupon');

let couponImageElement = document.getElementById('couponImage');

if (couponImageSrc !== null && couponImageSrc !== '') {
    couponImageElement.src = couponImageSrc;
} else {
    couponImageElement.style.display = 'none';
}

</script>
    <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">

        <div class="w-full flex flex-col mx-auto">

            <div class="flex-1 bg-white rounded-lg shadow-xl p-8">

                <h4 class="text-xl text-gray-900 font-bold">Information :</h4>

                <ul class="mt-2 text-gray-700">
                    <li class="flex border-y py-2">
                        <span class="font-bold mr-2">Nom :</span>
                        <span class="text-gray-700">Nom entreprise</span>
                    </li>

                    <li class="flex border-b py-2">
                        <span class="font-bold mr-2">Numéro de téléphone :</span>
                        <span class="text-gray-700">(123) 123-1234</span>
                    </li>

                    <li class="flex border-b py-2">
                        <span class="font-bold mr-2">Email :</span>
                        <span class="text-gray-700">entreprise@example.com</span>
                    </li>

                    <li class="flex border-b py-2">
                        <span class="font-bold mr-2">Adresse : </span>
                        <span class="text-gray-700">11 rue Oui, Charleville-Mézière</span>
                    </li>

                    <li class="flex items-center border-b py-2 space-x-2">

                        <span class="font-bold mr-2">Réseaux sociaux : </span>

                        <a href="#" title="Facebook">
                            <svg class="w-5 h-5" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 506.86 506.86">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #1877f2;
                                        }

                                        .cls-2 {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1"
                                    d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z">
                                </path>
                                <path class="cls-2"
                                    d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" title="X" class="rounded-full border border-solid-2 border-black">
                            <div class="w-5">
                                <img class="h-5 text-white" src="src/assets/svg/x.svg">
                            </div>
                        </a>

                    </li>

                </ul>

            </div>

        </div>
        
    </div>

    <!-- MODAL FOR UPDATE PROFIL DATA -->
    <div class="hidden z-20 fixed right-1/2 top-1/2 translate-x-1/2 -translate-y-1/2 mx-auto lg:rounded-2xl bg-white"
        id="form-update">
        <div
            class="flex flex-col-reverse w-full p-5 mx-auto border border-solid-2 lg:flex-row font-body lg:shadow-lg border-stroke lg:rounded-2xl">
            <!-- MENU -->
            <!-- <div class="flex flex-col h-auto  lg:border-r justify-start lg:border-solid lg:w-1/4 border-[#C8C8C8] lg:my-10">
            <div class="flex text-[10px] mx-auto lg:text-xl lg:px-12 lg:flex-col text-gray-dark ">
                <a href="" class="hidden mt-2 font-normal lg:flex text-red">Modification du profil</a>
                <a href="" class="mr-2 font-normal lg:mr-0 lg:my-7">Politique de cookies</a>    
                <span class="font-normal lg:hidden">-</span>
                <a href="" class="ml-2 font-normal lg:ml-0 lg:mb-10">Politique de confidentialités</a>
            </div>
        </div> -->
            <!-- PROFILUPDATE -->
            <div class="mx-auto lg:pl-10 lg:my-8">
                <!-- PROFILPIC -->
                <div class="flex flex-col items-center w-auto h-auto">
                    <div class="flex flex-col lg:flex-row">
                        <!-- CONDITION IF PP  -->
                        <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
                            <img class="w-full mx-auto avatar"
                                src="/assets/img/user_avatar/<?=$user->getUserAvatar()?>">
                        </div>
                        <!-- FALSE PP -->
                        <!-- <img class="w-24 h-24 mx-auto rounded-full" src=""> -->
                        <div class="flex flex-col-reverse justify-center text-center lg:text-start lg:flex-col lg:ml-5">
                            <div>
                                <!-- NAME+SPE+UPDATEPP -->
                                <h6 class="text-xl font-normal "><?=$user->getUserSurName()?>
                                    <?=$user->getUserName()?>
                                </h6>
                                <p class="text-lg font-light leading-5"><?=$user->getUSerSpe()?></p>
                            </div>
                            <form id="updateAvatarForm" method="POST">
                                <input id="inputFile" type="file" accept="image/*" style="display:none;">
                                <button type="button" id="btnChangeProfilePic"
                                    class="flex mx-auto mt-2 text-base font-semibold lg:mt-0 text-red lg:text-lg">
                                    <p>Modifier&nbsp;</p>
                                    <span class="hidden lg:flex">la photo de profil</span>
                                </button>
                            </form>


                        </div>
                    </div>
                    <!-- UPDATEDATA -->
                    <form method="post" action="/action=updateProfil"
                        class="flex flex-col items-center justify-center my-3 lg:mt-10 " id="form-update">

                        <!-- <div class="flex flex-col lg:flex-row">
                        <label for="bio" class="w-11/12 text-sm font-semibold lg:text-lg ">
                            Bio
                        </label>
                        <div class="ml-4">
                            <input  type="text" name="bio" id="bio" class="h-24 lg:ml-[93.5px] border border-solid rounded-md outline-none placeholder:font-normal border-stroke">
                            <div class="flex justify-end w-full mt-1 text-sm text-top text-stroke">0/150</div>
                        </div>
                        
                    </div> -->

                        <div class="" id="alert">
                            <span id="error_text">
                            </span>
                        </div>

                        <div class="flex flex-col lg:flex-row lg:my-4">
                            <label for="user_email" class="w-11/12 text-sm font-semibold lg:text-lg lg:pr-0.5">
                                Adresse mail
                            </label>
                            <div class="ml-4">
                                <input type="mail" name="user_email" id="email" value="<?= $user->getUserEmail()?>"
                                    class="border border-solid rounded-md outline-none leanding-8 placeholder:font-normal border-stroke">
                                <div class="flex justify-end w-full mt-1 text-sm text-stroke">0/40</div>
                            </div>
                        </div>

                        <div class="flex flex-col lg:flex-row">
                            <label for="user_password" class="w-11/12 text-sm font-semibold lg:text-lg">
                                Mot de passe
                            </label>
                            <div class="ml-4">
                                <input type="password" name="user_password" id="mdp" placeholder="●●●●●●●●●"
                                    class="border border-solid rounded-md outline-none leanding-8 placeholder:font-normal border-stroke">
                                <div class="flex justify-end w-full mt-1 text-sm text-stroke">0/12</div>
                            </div>
                        </div>

                        <input type="submit" id="submit" value="Enregister"
                            class="cursor-pointer px-8 py-2 mx-auto text-sm font-bold text-red border-4 rounded-lg lg:py-1 lg:mt-10 lg:mx-0 lg:text-lg ">

                    </form>
                </div>
            </div>
            <!-- EXIT -->
            <a class="absolute top-4 right-4 lg:flex lg:static lg:items-start close-modal cursor-pointer"
                data-target="form-update">
                <img src="/assets/svg/cross.svg" alt="Croix pour fermer la fenêtre">
            </a>
        </div>
    </div>

</body>
<script src="/assets/script/script.js"></script>
<script src="/assets/script/profil.js"></script>

</html>