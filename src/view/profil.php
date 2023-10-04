<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardennes Connect</title>
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="src/assets/svg/favicon.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/svg/favicon.svg">
</head>
<body>
<body class="w-full h-auto bg-lightGray">
<script src="src/assets/js/profil_top.js"></script>

<h1 class="hidden">Profil</h1>
<!-- HEADER -->
<div class="container bg-white flex justify-center pt-8 pb-8 mx-auto border-b border-solid lg:w-11/12 xl:w-8/12 border-stroke">
   <!-- AVATAR -->
    <div class="w-20 h-20 rounded-full sm:w-28 sm:h-28 md:w-36 md:h-36 lg:w-44 lg:h-44 overflow-hidden">
        <img src="src/assets/img/random_user.png" alt="Photo de profil de Admin" class="w-20 sm:w-28 md:w-36 lg:w-44 avatar">
    </div>
    <div class="flex flex-row justify-between sm:mt-2 lg:w-4/5">
        <div class="pl-2">
            <div class="flex flex-col justify-center">
                <!-- NAME AND JOB -->
                <h2 class="font-body text-xl md:text-[28px] font-medium tracking-wide">Administrateur test</h2>                
                <p class="text-lg font-normal tracking-wide md:pt-1 md:text-xl font-body">Restaurant</p>
            </div>
            <div class="flex justify-between mt-1  md:mt-9">
                <!-- LIKE AND POST NUMBRE -->  
                    <p class="text-sm tracking-wide lg:text-lg"><strong class="mr-1">200</strong>scann</p>
                    <p class="ml-1 text-sm tracking-wide lg:text-lg"><strong class="mr-1">250</strong>coupons</p>
            </div>
        </div>
        <div>
            <div class="flex flex-col gap-4 items-end">
            <a class="bg-[#F5F5F5] hidden cursor-pointer lg:flex text-center px-5 py-2 rounded-md text-lg lg:text-xl" id="editBtn">
                <p>Modifier le profil</p>
            </a>
            
            <a href="/logout" class="bg-[#F5F5F5] hidden cursor-pointer lg:flex text-center px-5 py-2 rounded-md text-lg lg:text-xl">
                <p>Se déconnecter</p>
            </a>

                <a href="/admin-dashboard" class="bg-red hidden cursor-pointer lg:flex text-center px-5 py-2 rounded-md text-lg lg:text-xl">
                    <p class="text-[#F5F5F5] font-medium">Tableau de bord</p>
                </a>
        </div>
        </div>
    </div>
</div>

<!-- TABLE -->
<div class="z-10 bg-white  relative lg:bg-none">
    <div class="fixed bottom-0 left-0 flex justify-center w-full py-4 text-sm font-semibold tracking-wide uppercase rounded-tr-lg bg-white   lg:static">
        <div class="flex mx-auto lg:w-2/5 xl:w-1/4 justify-between">
            <!-- COURS OF CREATOR -->
            <a id="tabBtn1" class="flex items-center w-auto mx-4 cursor-pointer lg:mx-0">
                <img src="src/assets/svg/qrcode.svg" class="w-6 h-6 mr-1 lg:h-4 lg:w-4" alt="icon pour voir mes cours en ligne">
                <p class="hidden lg:flex">Mon qr code</p>
            </a>
            <!-- FAVORIS -->
            <a id="tabBtn2" class="flex items-center w-auto mx-4 cursor-pointer lg:mx-0 lg:mr-0">
                <img src="src/assets/svg/fav.svg" class="w-6 h-6    lg:mr-1 lg:h-4 lg:w-4" alt="icon pour ajouter aux favoris" class="w-3 h-3">
                <p class="hidden lg:flex">Mes favoris</p>
            </a>
            <!-- CREATE FOR CREATOR -->
            <!-- HISTORIQUE -->
            <a id="tabBtn3" class="flex items-center w-auto mx-4 cursor-pointer lg:mx-0">
                <img src="src/assets/svg/coupon.svg" class="w-6 h-6 mr-1 lg:h-4 lg:w-4" alt="icon pour voir mon historique">
                <p class="hidden lg:flex">Mes coupons</p>
            </a>
            <!-- SETTING -->
            <a class="flex items-center w-auto mx-4 lg:hidden" id="editBtn">
                <img src="src/assets/svg/parm.svg" class="w-6 h-6 mr-1 lg:h-4 lg:w-4" alt="icon pour changer mes données">
            </a>
            </div>
            
        </div>
        
    <!-- TABLE FILE -->
    <div class="flex justify-center w-auto mx-auto my-5 ">
        
        <div class="flex">

            <div id="content_1" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <!-- LESSON CARD -->
            
                <div class="w-[323px]  h-[182px] card_container rounded-xl my-3 mx-4">
                <!-- LOGOWHITE+TITLE+DESC -->
                test
                    
                </div>
            </div>

            <div class="hidden grid-cols-1 sm:grid-cols-2 lg:grid-cols-3"" id="content_2">

                <!-- Favorite CARD -->
                <div class="w-[323px]  bg-cover h-[182px] card_container mx-4 mt-3 rounded-xl">
                <!-- LOGOWHITE --> 
                testt
                    <div class="w-[323px] h-[182px] flex justify-end">
                    test
                        <img src="/assets/img/lesson_miniature/<?=$fav_lesson->getLessonCover()?>"  onclick="showFav()" id="img_fav" class="flex w-[323px] hover:brightness-50 hover:blur-[2px] duration-700 h-auto  cover rounded-2xl">
                            <a href="?action=unFavTreat&lesson_id=<?=$fav_lesson->getLessonId()?>" class="absolute mt-4 mr-4">
                                <svg id="icon_fav" class="w-9 h-9" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z" fill="white"/>
                                    <path class="animate-pulse" d="M14 12.0455V9.54876C14 7.40445 14 6.3323 13.4142 5.66615C12.8284 5 11.8856 5 10 5C8.11438 5 7.17157 5 6.58579 5.66615C6 6.3323 6 7.40445 6 9.54876V12.0455C6 13.5937 6 14.3679 6.32627 14.7062C6.48187 14.8675 6.67829 14.9688 6.88752 14.9958C7.32623 15.0522 7.83855 14.5425 8.86318 13.5229C9.3161 13.0722 9.54256 12.8469 9.80457 12.7875C9.93359 12.7583 10.0664 12.7583 10.1954 12.7875C10.4574 12.8469 10.6839 13.0722 11.1368 13.5229L11.1368 13.5229C12.1615 14.5425 12.6738 15.0522 13.1125 14.9958C13.3217 14.9688 13.5181 14.8675 13.6737 14.7062C14 14.3679 14 13.5937 14 12.0455Z" fill="#F01E29"/>
                                </svg>
                            </a>
                    </div>
                    <div class="absolute hidden duration-700" id="card_fav">
                        <div class="flex flex-col justify-center p-5 text-white w-[323px] h-[182px] duration-700 -translate-y-full bg-black/30 font-body rounded-2xl">
                            <div class="absolute flex right-4 top-4 ">
                            <!-- LESSON+FAV -->
                                <a href="" class="mr-0.5">
                                    <svg width="24" height="24"  class="duration-300 hover:stroke-blue stroke-white" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="hover:stroke-white" d="M5 8.5C8.90524 8.5 7.76142 8.5 11.6667 8.5M11.6667 8.5L9.16667 6M11.6667 8.5L9.16667 11"  stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.5 1.93648C5.52961 1.34088 6.725 1 8 1C11.866 1 15 4.13401 15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 6.72499 1.34088 5.52961 1.93648 4.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                                
                                <a href="?action=lesson">
                                    <svg width="24" height="24" class="duration-300 hover:stroke-red stroke-white" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 9.63636V7.63901C11 5.92356 11 5.06584 10.5607 4.53292C10.1213 4 9.41421 4 8 4C6.58579 4 5.87868 4 5.43934 4.53292C5 5.06584 5 5.92356 5 7.63901V9.63636C5 10.875 5 11.4943 5.2447 11.7649C5.3614 11.894 5.50872 11.9751 5.66564 11.9966C5.99467 12.0418 6.37891 11.634 7.14739 10.8183C7.48707 10.4578 7.65692 10.2775 7.85343 10.23C7.95019 10.2066 8.04981 10.2066 8.14657 10.23C8.34308 10.2775 8.51293 10.4578 8.85261 10.8183C9.62109 11.634 10.0053 12.0418 10.3344 11.9966C10.4913 11.9751 10.6386 11.894 10.7553 11.7649C11 11.4943 11 10.875 11 9.63636Z" stroke="#F01E29"/>
                                        <path d="M4.5 1.93648C5.52961 1.34088 6.725 1 8 1C11.866 1 15 4.13401 15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 6.72499 1.34088 5.52961 1.93648 4.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                                
                            </div>
                            <!-- +TITLE+DESC -->
                            <img src="/assets/svg/categories/white/html.svg" alt="Logo hmtl" class="w-12 h-auto filter_content ">
                            <h2 class="mt-2 text-sm font-semibold filter_content">Apprendre le HTML</h2>
                            <p class="mt-1 text-[10px] leanding-8 filter_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temuam explica ea voluptates?...</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 " id="content_3">
                <!-- history CARD -->
                <div class="w-[323px]  bg-cover h-[182px] card_container mx-4 mt-3 rounded-xl">
                <!-- LOGOWHITE -->
                tesrt
                    <div class="w-[323px] h-[182px] flex justify-end">
                        <img src="/assets/img/lesson_miniature/<?=$finish_lesson->getLessonCover() ?>"  onclick="showHistory()" id="cours_cover" class="flex w-[323px] hover:brightness-50 hover:blur-[2px] duration-700 h-auto  cover rounded-2xl">
                        <a href="" class="absolute mt-4 mr-4">
                            <svg id="icon_history"  class="w-9 h-9" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="white"/>
                                <path class="animate-pulse" d="M14.0303 6.96967C14.3232 7.26256 14.3232 7.73744 14.0303 8.03033L9.03033 13.0303C8.73744 13.3232 8.26256 13.3232 7.96967 13.0303L5.96967 11.0303C5.67678 10.7374 5.67678 10.2626 5.96967 9.96967C6.26256 9.67678 6.73744 9.67678 7.03033 9.96967L8.5 11.4393L10.7348 9.2045L12.9697 6.96967C13.2626 6.67678 13.7374 6.67678 14.0303 6.96967Z" fill="#038900"/>
                            </svg>
                        </a>
                    </div>
                    <div class="absolute hidden duration-700" id="card_history">
                        <div class="flex flex-col justify-center p-5 text-white w-[323px] h-[182px] duration-700 -translate-y-full bg-black/30 font-body rounded-2xl">
                            <div class="absolute flex right-4 top-4 ">
                            <!-- LESSON+regisger -->
                                <a href="" class="mr-0.5">
                                    <svg class="w-6 h-auto duration-300 hover:stroke-blue stroke-white" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 8.5C8.90524 8.5 7.76142 8.5 11.6667 8.5M11.6667 8.5L9.16667 6M11.6667 8.5L9.16667 11"  stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M4.5 1.93648C5.52961 1.34088 6.725 1 8 1C11.866 1 15 4.13401 15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 6.72499 1.34088 5.52961 1.93648 4.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                                
                                <a href="?action=lesson">
                                    <svg class="w-6 h-auto duration-300 hover:stroke-[#038900] stroke-white" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 9.63636V7.63901C11 5.92356 11 5.06584 10.5607 4.53292C10.1213 4 9.41421 4 8 4C6.58579 4 5.87868 4 5.43934 4.53292C5 5.06584 5 5.92356 5 7.63901V9.63636C5 10.875 5 11.4943 5.2447 11.7649C5.3614 11.894 5.50872 11.9751 5.66564 11.9966C5.99467 12.0418 6.37891 11.634 7.14739 10.8183C7.48707 10.4578 7.65692 10.2775 7.85343 10.23C7.95019 10.2066 8.04981 10.2066 8.14657 10.23C8.34308 10.2775 8.51293 10.4578 8.85261 10.8183C9.62109 11.634 10.0053 12.0418 10.3344 11.9966C10.4913 11.9751 10.6386 11.894 10.7553 11.7649C11 11.4943 11 10.875 11 9.63636Z" stroke="#F01E29"/>
                                        <path d="M4.5 1.93648C5.52961 1.34088 6.725 1 8 1C11.866 1 15 4.13401 15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 6.72499 1.34088 5.52961 1.93648 4.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                                
                            </div>
                            <!-- +TITLE+DESC -->
                            <img src="/assets/svg/categories/white/html.svg" alt="Logo hmtl" class="w-12 h-auto filter_content ">
                            <h2 class="mt-2 text-sm font-semibold filter_content">Apprendre le HTML</h2>
                            <p class="mt-1 text-[10px] leanding-8 filter_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temuam explica ea voluptates?...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>


<!-- MODAL FOR UPDATE PROFIL DATA -->
<div class="hidden z-20 fixed right-1/2 top-1/2 translate-x-1/2 -translate-y-1/2 mx-auto lg:rounded-2xl bg-white" id="form-update">
    <div class="flex flex-col-reverse w-full p-5 mx-auto border border-solid-2 lg:flex-row font-body lg:shadow-lg border-stroke lg:rounded-2xl" >
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
                    <img class="w-full mx-auto avatar" src="/assets/img/user_avatar/<?=$user->getUserAvatar()?>">
                </div>
                <!-- FALSE PP -->
                <!-- <img class="w-24 h-24 mx-auto rounded-full" src=""> --> 
                    <div class="flex flex-col-reverse justify-center text-center lg:text-start lg:flex-col lg:ml-5">
                        <div>
                            <!-- NAME+SPE+UPDATEPP -->
                            <h6 class="text-xl font-normal "><?=$user->getUserSurName()?> <?=$user->getUserName()?></h6>
                            <p class="text-lg font-light leading-5"><?=$user->getUSerSpe()?></p>
                        </div>
                        <form id="updateAvatarForm" method="POST">
                            <input id="inputFile" type="file" accept="image/*" style="display:none;">
                            <button type="button" id="btnChangeProfilePic" class="flex mx-auto mt-2 text-base font-semibold lg:mt-0 text-red lg:text-lg">
                            <p>Modifier&nbsp;</p>
                            <span class="hidden lg:flex">la photo de profil</span>
                            </button>
                        </form>

                        
                    </div>
                </div>
                <!-- UPDATEDATA -->
                <form method="post" action="/action=updateProfil" class="flex flex-col items-center justify-center my-3 lg:mt-10 " id="form-update">

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
                            <input  type="mail" name="user_email" id="email" value="<?= $user->getUserEmail()?>" class="border border-solid rounded-md outline-none leanding-8 placeholder:font-normal border-stroke">
                            <div class="flex justify-end w-full mt-1 text-sm text-stroke">0/40</div>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row">
                        <label for="user_password" class="w-11/12 text-sm font-semibold lg:text-lg">
                            Mot de passe
                        </label>
                        <div class="ml-4">
                            <input type="password" name="user_password" id="mdp"  placeholder="●●●●●●●●●"  class="border border-solid rounded-md outline-none leanding-8 placeholder:font-normal border-stroke">
                            <div class="flex justify-end w-full mt-1 text-sm text-stroke">0/12</div>
                        </div>
                    </div>

                    <input type="submit" id="submit" value="Enregister" class="cursor-pointer px-8 py-2 mx-auto text-sm font-bold text-red border-4 rounded-lg lg:py-1 lg:mt-10 lg:mx-0 lg:text-lg ">

                </form>
            </div> 
        </div>
        <!-- EXIT -->
        <a class="absolute top-4 right-4 lg:flex lg:static lg:items-start close-modal cursor-pointer" data-target="form-update">
            <img src="/assets/svg/cross.svg" alt="Croix pour fermer la fenêtre">
        </a>
    </div>
</div>

</body>
<script src="/assets/script/script.js"></script>
<script src="/assets/script/profil.js"></script>
</html>
