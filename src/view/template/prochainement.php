<div class="w-10/12 mt-8 lg:mt-14 flex flex-col lg:items-start lg:justify-center mb-10">
    <!-- Titre -->
    <h3 class="text-2xl lg:text-4xl lg:text-left xl:text-5xl font-semibold underline underline-offset-4 decoration decoration-yellowLogo mb-8 lg:mb-10 xl:mb-12 2xl:mb-16">Prochainement</h3>
    <!-- Carousel -->
    <div class="w-auto flex flex-col items-center justify-center 2xl:ml-20">
        <div id="container_slide" class="w-full h-72 md:h-96 lg:h-[425px] xl:h-[500px] flex flex-row items-center justify-center mb-4 md:mb-6 lg:mb-10">
            <div class="flex flex-row items-center justify-between">
                <button id="navigateur_gauche" type="button" class="absolute cursor-pointer left-10 2xl:left-32">
                    <svg class="w-5 h-5 md:w-6 md:h-6" width="32" height="48" viewBox="0 0 32 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.4379 8.18332C32.5207 6.31127 32.5207 3.27608 30.4379 1.40404C28.3551 -0.468011 24.9782 -0.468012 22.8954 1.40404L1.56209 20.5787C0.561901 21.4777 -9.53674e-07 22.697 -9.53674e-07 23.9684C-9.53674e-07 25.2397 0.561899 26.459 1.56209 27.358L22.8954 46.5327C24.9782 48.4048 28.3551 48.4048 30.4379 46.5327C32.5207 44.6607 32.5207 41.6255 30.4379 39.7534L12.8758 23.9684L30.4379 8.18332Z" fill="black" fill-opacity="0.7"/>
                    </svg>
                </button>
                <button id="navigateur_droit" type="button" class="absolute cursor-pointer right-10 2xl:right-32">
                    <svg class="w-5 h-5 md:w-6 md:h-6" width="32" height="48" viewBox="0 0 32 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5621 39.7537C-0.520699 41.6257 -0.520699 44.6609 1.5621 46.533C3.64489 48.405 7.02178 48.405 9.10457 46.533L30.4379 27.3583C31.4381 26.4593 32 25.24 32 23.9686C32 22.6973 31.4381 21.478 30.4379 20.579L9.10457 1.40427C7.02177 -0.467773 3.64489 -0.467773 1.5621 1.40427C-0.520697 3.27632 -0.520698 6.31151 1.5621 8.18356L19.1242 23.9686L1.5621 39.7537Z" fill="black" fill-opacity="0.7"/>
                    </svg>
                </button>
            </div>
            <div class="flex flex-row items-center justify-between xl:gap-x-8">
                <div class="active flex flex-row justify-between h-full w-96 md:w-[600px] lg:w-[650px] xl:w-[700px] 2xl:w-[900px]">
                    <div class="slide grid grid-cols-2 justify-center gap-x-2 md:gap-x-8 xl:gap-x-10 2xl:gap-x-20 gap-y-2">
                        <img id="image_slide_1" class="h-64 md:h-96 lg:h-[425px] xl:h-[500px] rounded-lg md:rounded-2xl lg:rounded-[40px]" src="src/assets/img/affiche1.jpg" alt="">
                        <div id="description_slide_1" class="flex flex-col items-start justify-center">
                            <div class="relative flex w-full mb-6 md:mb-8 lg:mb-10 xl:mb-16">
                                <h3 id="titre_1_slide_" class="absolute top-0 left-0 z-10 uppercase font-bold text-base md:text-2xl 2xl:text-3xl">Titre de l'event</h3>
                                <h3 id="titre_2_slide_" class="absolute top-0 left-10 md:left-16 lg:left-20 uppercase font-bold text-base md:text-2xl 2xl:text-3xl text-yellowLogo">Titre de l'event</h3>
                            </div>
                            <p id="info_slide_1" class="flex w-48 md:w-64 lg:w-80 mb-2 text-xs md:text-base 2xl:text-lg xl:mb-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <div class="flex flex-row justify-start space-x-10 mb-2 lg:mb-16">
                                <div id="date_slide_1" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 0.75C5.75 0.335786 5.41421 0 5 0C4.58579 0 4.25 0.335786 4.25 0.75V2.32926C2.81067 2.44451 1.86577 2.72737 1.17157 3.42157C0.477375 4.11577 0.194513 5.06067 0.0792572 6.5H19.9207C19.8055 5.06067 19.5226 4.11577 18.8284 3.42157C18.1342 2.72737 17.1893 2.44451 15.75 2.32926V0.75C15.75 0.335786 15.4142 0 15 0C14.5858 0 14.25 0.335786 14.25 0.75V2.2629C13.5847 2.25 12.839 2.25 12 2.25H8C7.16097 2.25 6.41527 2.25 5.75 2.2629V0.75Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.25C20 9.41097 20 8.66527 19.9871 8H0.012902C0 8.66527 0 9.41097 0 10.25V12.25C0 16.0212 0 17.9069 1.17157 19.0784C2.34315 20.25 4.22876 20.25 8 20.25H12C15.7712 20.25 17.6569 20.25 18.8284 19.0784C20 17.9069 20 16.0212 20 12.25V10.25ZM12 10.5C11.0335 10.5 10.25 11.2835 10.25 12.25V14.25C10.25 15.2165 11.0335 16 12 16C12.9665 16 13.75 15.2165 13.75 14.25V12.25C13.75 11.2835 12.9665 10.5 12 10.5ZM12 12C11.8619 12 11.75 12.1119 11.75 12.25V14.25C11.75 14.3881 11.8619 14.5 12 14.5C12.1381 14.5 12.25 14.3881 12.25 14.25V12.25C12.25 12.1119 12.1381 12 12 12ZM8.78701 10.5571C9.06727 10.6732 9.25 10.9467 9.25 11.25V15.25C9.25 15.6642 8.91421 16 8.5 16C8.08579 16 7.75 15.6642 7.75 15.25V13.0607L7.53033 13.2803C7.23744 13.5732 6.76256 13.5732 6.46967 13.2803C6.17678 12.9874 6.17678 12.5126 6.46967 12.2197L7.96967 10.7197C8.18417 10.5052 8.50676 10.441 8.78701 10.5571Z" fill="#CAC6C6"/>
                                    </svg>
                                    <span class="font-medium text-xs md:text-base xl:text-lg 2xl:text-xl">XX / XX</span>
                                </div>
                                <div id="heure_slide_1" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 5.25C10.4142 5.25 10.75 5.58579 10.75 6V9.68934L13.0303 11.9697C13.3232 12.2626 13.3232 12.7374 13.0303 13.0303C12.7374 13.3232 12.2626 13.3232 11.9697 13.0303L9.46967 10.5303C9.32902 10.3897 9.25 10.1989 9.25 10V6C9.25 5.58579 9.58579 5.25 10 5.25Z" fill="white"/>
                                    </svg>
                                    <span class="font-medium text-xs md:text-base xl:text-lg 2xl:text-xl">XX h XX</span>
                                </div>
                            </div>
                            <div id="adresse_slide_1" class="flex flex-row items-center justify-center space-x-2">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 6.10747C4.75 2.73441 7.43629 0 10.75 0C14.0637 0 16.75 2.73441 16.75 6.10747C16.75 9.4541 14.835 13.3593 11.8472 14.7558C11.1507 15.0814 10.3493 15.0814 9.6528 14.7558C6.66499 13.3593 4.75 9.4541 4.75 6.10747ZM10.75 8C11.8546 8 12.75 7.10457 12.75 6C12.75 4.89543 11.8546 4 10.75 4C9.64543 4 8.75 4.89543 8.75 6C8.75 7.10457 9.64543 8 10.75 8Z" fill="#B0B0B0"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.37731 12.5343C2.63455 12.8589 2.57989 13.3306 2.25523 13.5879C1.68157 14.0424 1.5 14.443 1.5 14.75C1.5 14.993 1.61028 15.2881 1.94064 15.6296C2.27438 15.9747 2.79582 16.3252 3.50556 16.6471C4.75981 17.2159 6.49351 17.6466 8.5 17.8343V17.375C8.5 17.0807 8.6721 16.8137 8.94009 16.6921C9.20807 16.5705 9.52241 16.6168 9.74388 16.8106L11.2439 18.1231C11.4066 18.2655 11.5 18.4713 11.5 18.6875C11.5 18.9038 11.4066 19.1095 11.2439 19.252L9.74388 20.5645C9.52241 20.7582 9.20807 20.8046 8.94009 20.683C8.6721 20.5614 8.5 20.2943 8.5 20V19.3404C6.31512 19.1487 4.35927 18.6814 2.88599 18.0132C2.07214 17.644 1.37069 17.198 0.86244 16.6725C0.35081 16.1435 0 15.494 0 14.75C0 13.7998 0.566665 13.012 1.3237 12.4122C1.64836 12.1549 2.12008 12.2096 2.37731 12.5343ZM19.1227 12.5343C19.3799 12.2096 19.8516 12.1549 20.1763 12.4122C20.9333 13.012 21.5 13.7998 21.5 14.75C21.5 16.1281 20.3319 17.1606 18.9534 17.8514C17.5117 18.5738 15.541 19.0851 13.3256 19.3097C12.9135 19.3514 12.5456 19.0512 12.5038 18.6391C12.4621 18.227 12.7623 17.8591 13.1744 17.8173C15.272 17.6047 17.0514 17.1267 18.2814 16.5103C19.5746 15.8623 20 15.2067 20 14.75C20 14.443 19.8184 14.0424 19.2448 13.5879C18.9201 13.3306 18.8655 12.8589 19.1227 12.5343Z" fill="#B0B0B0"/>
                                </svg>
                                <span class="font-medium text-xs md:text-base xl:text-lg 2xl:text-xl">8 Rue Claude Chrétien <br><span class="font-bold">Charleville-Mézières</span> 08000</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-center space-x-1">
                            <button type="button" class="indicateur">
                                <svg class="w-2 h-2 md:w-3 md:h-3 lg:w-4 lg:h-4 xl:w-5 xl:h-5 2xl:w-6 2xl:h-6" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#ffdf00"/>
                                </svg>
                            </button>
                            <button type="button" class="indicateur">
                                <svg class="w-2 h-2 md:w-3 md:h-3 lg:w-4 lg:h-4 xl:w-5 xl:h-5 2xl:w-6 2xl:h-6" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#D9D9D9"/>
                                </svg>
                            </button>
                            <button type="button" class="indicateur">
                                <svg class="w-2 h-2 md:w-3 md:h-3 lg:w-4 lg:h-4 xl:w-5 xl:h-5 2xl:w-6 2xl:h-6" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#D9D9D9"/>
                                </svg>
                            </button>
                            <button type="button" class="indicateur">
                                <svg class="w-2 h-2 md:w-3 md:h-3 lg:w-4 lg:h-4 xl:w-5 xl:h-5 2xl:w-6 2xl:h-6" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#D9D9D9"/>
                                </svg>
                            </button>
                            <button type="button" class="indicateur">
                                <svg class="w-2 h-2 md:w-3 md:h-3 lg:w-4 lg:h-4 xl:w-5 xl:h-5 2xl:w-6 2xl:h-6" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9" cy="9" r="9" fill="#D9D9D9"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:w-[250px] xl:w-[420px] lg:grid lg:grid-cols-2 2xl:flex 2xl:flex-row lg:items-center lg:justify-center lg:gap-y-8 2xl:gap-y-0 2xl:space-x-8">
                    <div class="slide w-24 xl:w-40 h-full 2xl:h-[500px] flex items-center justify-center">
                        <img id="image_slide_2" class="h-full object-cover rounded-[40px]" src="src/assets/img/affiche2.jpg" alt="">
                        <div id="description_slide_2" class="hidden flex flex-col items-start justify-center">
                            <div class="relative flex w-full mb-10">
                                <h3 id="titre_1_slide_2" class="absolute top-0 left-0 z-10 uppercase font-bold text-3xl">Titre de l'event</h3>
                                <h3 id="titre_2_slide_2" class="absolute top-0 left-24 uppercase font-bold text-3xl text-yellowLogo">Titre de l'event</h3>
                            </div>
                            <p id="info_slide_2" class="flex w-80 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <div class="flex flex-row justify-start space-x-10 mb-2">
                                <div id="date_slide_2" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 0.75C5.75 0.335786 5.41421 0 5 0C4.58579 0 4.25 0.335786 4.25 0.75V2.32926C2.81067 2.44451 1.86577 2.72737 1.17157 3.42157C0.477375 4.11577 0.194513 5.06067 0.0792572 6.5H19.9207C19.8055 5.06067 19.5226 4.11577 18.8284 3.42157C18.1342 2.72737 17.1893 2.44451 15.75 2.32926V0.75C15.75 0.335786 15.4142 0 15 0C14.5858 0 14.25 0.335786 14.25 0.75V2.2629C13.5847 2.25 12.839 2.25 12 2.25H8C7.16097 2.25 6.41527 2.25 5.75 2.2629V0.75Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.25C20 9.41097 20 8.66527 19.9871 8H0.012902C0 8.66527 0 9.41097 0 10.25V12.25C0 16.0212 0 17.9069 1.17157 19.0784C2.34315 20.25 4.22876 20.25 8 20.25H12C15.7712 20.25 17.6569 20.25 18.8284 19.0784C20 17.9069 20 16.0212 20 12.25V10.25ZM12 10.5C11.0335 10.5 10.25 11.2835 10.25 12.25V14.25C10.25 15.2165 11.0335 16 12 16C12.9665 16 13.75 15.2165 13.75 14.25V12.25C13.75 11.2835 12.9665 10.5 12 10.5ZM12 12C11.8619 12 11.75 12.1119 11.75 12.25V14.25C11.75 14.3881 11.8619 14.5 12 14.5C12.1381 14.5 12.25 14.3881 12.25 14.25V12.25C12.25 12.1119 12.1381 12 12 12ZM8.78701 10.5571C9.06727 10.6732 9.25 10.9467 9.25 11.25V15.25C9.25 15.6642 8.91421 16 8.5 16C8.08579 16 7.75 15.6642 7.75 15.25V13.0607L7.53033 13.2803C7.23744 13.5732 6.76256 13.5732 6.46967 13.2803C6.17678 12.9874 6.17678 12.5126 6.46967 12.2197L7.96967 10.7197C8.18417 10.5052 8.50676 10.441 8.78701 10.5571Z" fill="#CAC6C6"/>
                                    </svg>
                                    <span class="font-medium">XX / XX</span>
                                </div>
                                <div id="heure_slide_2" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 5.25C10.4142 5.25 10.75 5.58579 10.75 6V9.68934L13.0303 11.9697C13.3232 12.2626 13.3232 12.7374 13.0303 13.0303C12.7374 13.3232 12.2626 13.3232 11.9697 13.0303L9.46967 10.5303C9.32902 10.3897 9.25 10.1989 9.25 10V6C9.25 5.58579 9.58579 5.25 10 5.25Z" fill="white"/>
                                    </svg>
                                    <span class="font-medium">XX h XX</span>
                                </div>
                            </div>
                            <div id="adresse_slide_2" class="flex flex-row items-center justify-center space-x-2">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 6.10747C4.75 2.73441 7.43629 0 10.75 0C14.0637 0 16.75 2.73441 16.75 6.10747C16.75 9.4541 14.835 13.3593 11.8472 14.7558C11.1507 15.0814 10.3493 15.0814 9.6528 14.7558C6.66499 13.3593 4.75 9.4541 4.75 6.10747ZM10.75 8C11.8546 8 12.75 7.10457 12.75 6C12.75 4.89543 11.8546 4 10.75 4C9.64543 4 8.75 4.89543 8.75 6C8.75 7.10457 9.64543 8 10.75 8Z" fill="#B0B0B0"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.37731 12.5343C2.63455 12.8589 2.57989 13.3306 2.25523 13.5879C1.68157 14.0424 1.5 14.443 1.5 14.75C1.5 14.993 1.61028 15.2881 1.94064 15.6296C2.27438 15.9747 2.79582 16.3252 3.50556 16.6471C4.75981 17.2159 6.49351 17.6466 8.5 17.8343V17.375C8.5 17.0807 8.6721 16.8137 8.94009 16.6921C9.20807 16.5705 9.52241 16.6168 9.74388 16.8106L11.2439 18.1231C11.4066 18.2655 11.5 18.4713 11.5 18.6875C11.5 18.9038 11.4066 19.1095 11.2439 19.252L9.74388 20.5645C9.52241 20.7582 9.20807 20.8046 8.94009 20.683C8.6721 20.5614 8.5 20.2943 8.5 20V19.3404C6.31512 19.1487 4.35927 18.6814 2.88599 18.0132C2.07214 17.644 1.37069 17.198 0.86244 16.6725C0.35081 16.1435 0 15.494 0 14.75C0 13.7998 0.566665 13.012 1.3237 12.4122C1.64836 12.1549 2.12008 12.2096 2.37731 12.5343ZM19.1227 12.5343C19.3799 12.2096 19.8516 12.1549 20.1763 12.4122C20.9333 13.012 21.5 13.7998 21.5 14.75C21.5 16.1281 20.3319 17.1606 18.9534 17.8514C17.5117 18.5738 15.541 19.0851 13.3256 19.3097C12.9135 19.3514 12.5456 19.0512 12.5038 18.6391C12.4621 18.227 12.7623 17.8591 13.1744 17.8173C15.272 17.6047 17.0514 17.1267 18.2814 16.5103C19.5746 15.8623 20 15.2067 20 14.75C20 14.443 19.8184 14.0424 19.2448 13.5879C18.9201 13.3306 18.8655 12.8589 19.1227 12.5343Z" fill="#B0B0B0"/>
                                </svg>
                                <span class="font-medium">Rue de mon trou, <span class="font-bold">FionVille</span> 08160</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide w-24 xl:w-40 h-full 2xl:h-[500px] flex items-center justify-center">
                        <img id="image_slide_3" class="h-full object-cover rounded-[40px]" src="src/assets/img/affiche3.jpg" alt="">
                        <div id="description_slide_3" class="hidden flex flex-col items-start justify-center">
                            <div class="relative flex w-full mb-10">
                                <h3 id="titre_1_slide_3" class="absolute top-0 left-0 z-10 uppercase font-bold text-3xl">Titre de l'event</h3>
                                <h3 id="titre_2_slide_3" class="absolute top-0 left-24 uppercase font-bold text-3xl text-yellowLogo">Titre de l'event</h3>
                            </div>
                            <p id="info_slide_3" class="flex w-80 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <div class="flex flex-row justify-start space-x-10 mb-2">
                                <div id="date_slide_" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 0.75C5.75 0.335786 5.41421 0 5 0C4.58579 0 4.25 0.335786 4.25 0.75V2.32926C2.81067 2.44451 1.86577 2.72737 1.17157 3.42157C0.477375 4.11577 0.194513 5.06067 0.0792572 6.5H19.9207C19.8055 5.06067 19.5226 4.11577 18.8284 3.42157C18.1342 2.72737 17.1893 2.44451 15.75 2.32926V0.75C15.75 0.335786 15.4142 0 15 0C14.5858 0 14.25 0.335786 14.25 0.75V2.2629C13.5847 2.25 12.839 2.25 12 2.25H8C7.16097 2.25 6.41527 2.25 5.75 2.2629V0.75Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.25C20 9.41097 20 8.66527 19.9871 8H0.012902C0 8.66527 0 9.41097 0 10.25V12.25C0 16.0212 0 17.9069 1.17157 19.0784C2.34315 20.25 4.22876 20.25 8 20.25H12C15.7712 20.25 17.6569 20.25 18.8284 19.0784C20 17.9069 20 16.0212 20 12.25V10.25ZM12 10.5C11.0335 10.5 10.25 11.2835 10.25 12.25V14.25C10.25 15.2165 11.0335 16 12 16C12.9665 16 13.75 15.2165 13.75 14.25V12.25C13.75 11.2835 12.9665 10.5 12 10.5ZM12 12C11.8619 12 11.75 12.1119 11.75 12.25V14.25C11.75 14.3881 11.8619 14.5 12 14.5C12.1381 14.5 12.25 14.3881 12.25 14.25V12.25C12.25 12.1119 12.1381 12 12 12ZM8.78701 10.5571C9.06727 10.6732 9.25 10.9467 9.25 11.25V15.25C9.25 15.6642 8.91421 16 8.5 16C8.08579 16 7.75 15.6642 7.75 15.25V13.0607L7.53033 13.2803C7.23744 13.5732 6.76256 13.5732 6.46967 13.2803C6.17678 12.9874 6.17678 12.5126 6.46967 12.2197L7.96967 10.7197C8.18417 10.5052 8.50676 10.441 8.78701 10.5571Z" fill="#CAC6C6"/>
                                    </svg>
                                    <span class="font-medium">XX / XX</span>
                                </div>
                                <div id="heure_slide_3" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 5.25C10.4142 5.25 10.75 5.58579 10.75 6V9.68934L13.0303 11.9697C13.3232 12.2626 13.3232 12.7374 13.0303 13.0303C12.7374 13.3232 12.2626 13.3232 11.9697 13.0303L9.46967 10.5303C9.32902 10.3897 9.25 10.1989 9.25 10V6C9.25 5.58579 9.58579 5.25 10 5.25Z" fill="white"/>
                                    </svg>
                                    <span class="font-medium">XX h XX</span>
                                </div>
                            </div>
                            <div id="adresse_slide_3" class="flex flex-row items-center justify-center space-x-2">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 6.10747C4.75 2.73441 7.43629 0 10.75 0C14.0637 0 16.75 2.73441 16.75 6.10747C16.75 9.4541 14.835 13.3593 11.8472 14.7558C11.1507 15.0814 10.3493 15.0814 9.6528 14.7558C6.66499 13.3593 4.75 9.4541 4.75 6.10747ZM10.75 8C11.8546 8 12.75 7.10457 12.75 6C12.75 4.89543 11.8546 4 10.75 4C9.64543 4 8.75 4.89543 8.75 6C8.75 7.10457 9.64543 8 10.75 8Z" fill="#B0B0B0"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.37731 12.5343C2.63455 12.8589 2.57989 13.3306 2.25523 13.5879C1.68157 14.0424 1.5 14.443 1.5 14.75C1.5 14.993 1.61028 15.2881 1.94064 15.6296C2.27438 15.9747 2.79582 16.3252 3.50556 16.6471C4.75981 17.2159 6.49351 17.6466 8.5 17.8343V17.375C8.5 17.0807 8.6721 16.8137 8.94009 16.6921C9.20807 16.5705 9.52241 16.6168 9.74388 16.8106L11.2439 18.1231C11.4066 18.2655 11.5 18.4713 11.5 18.6875C11.5 18.9038 11.4066 19.1095 11.2439 19.252L9.74388 20.5645C9.52241 20.7582 9.20807 20.8046 8.94009 20.683C8.6721 20.5614 8.5 20.2943 8.5 20V19.3404C6.31512 19.1487 4.35927 18.6814 2.88599 18.0132C2.07214 17.644 1.37069 17.198 0.86244 16.6725C0.35081 16.1435 0 15.494 0 14.75C0 13.7998 0.566665 13.012 1.3237 12.4122C1.64836 12.1549 2.12008 12.2096 2.37731 12.5343ZM19.1227 12.5343C19.3799 12.2096 19.8516 12.1549 20.1763 12.4122C20.9333 13.012 21.5 13.7998 21.5 14.75C21.5 16.1281 20.3319 17.1606 18.9534 17.8514C17.5117 18.5738 15.541 19.0851 13.3256 19.3097C12.9135 19.3514 12.5456 19.0512 12.5038 18.6391C12.4621 18.227 12.7623 17.8591 13.1744 17.8173C15.272 17.6047 17.0514 17.1267 18.2814 16.5103C19.5746 15.8623 20 15.2067 20 14.75C20 14.443 19.8184 14.0424 19.2448 13.5879C18.9201 13.3306 18.8655 12.8589 19.1227 12.5343Z" fill="#B0B0B0"/>
                                </svg>
                                <span class="font-medium">Rue de mon trou, <span class="font-bold">FionVille</span> 08160</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide w-24 xl:w-40 h-full 2xl:h-[500px] flex items-center justify-center">
                        <img id="image_slide_4" class="h-full object-cover rounded-[40px]" src="src/assets/img/affiche4.jpg" alt="">
                        <div id="description_slide_4" class="hidden flex flex-col items-start justify-center">
                            <div class="relative flex w-full mb-10">
                                <h3 id="titre_1_slide_4" class="absolute top-0 left-0 z-10 uppercase font-bold text-3xl">Titre de l'event</h3>
                                <h3 id="titre_2_slide_4" class="absolute top-0 left-24 uppercase font-bold text-3xl text-yellowLogo">Titre de l'event</h3>
                            </div>
                            <p id="info_slide_4" class="flex w-80 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <div class="flex flex-row justify-start space-x-10 mb-2">
                                <div id="date_slide_" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 0.75C5.75 0.335786 5.41421 0 5 0C4.58579 0 4.25 0.335786 4.25 0.75V2.32926C2.81067 2.44451 1.86577 2.72737 1.17157 3.42157C0.477375 4.11577 0.194513 5.06067 0.0792572 6.5H19.9207C19.8055 5.06067 19.5226 4.11577 18.8284 3.42157C18.1342 2.72737 17.1893 2.44451 15.75 2.32926V0.75C15.75 0.335786 15.4142 0 15 0C14.5858 0 14.25 0.335786 14.25 0.75V2.2629C13.5847 2.25 12.839 2.25 12 2.25H8C7.16097 2.25 6.41527 2.25 5.75 2.2629V0.75Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.25C20 9.41097 20 8.66527 19.9871 8H0.012902C0 8.66527 0 9.41097 0 10.25V12.25C0 16.0212 0 17.9069 1.17157 19.0784C2.34315 20.25 4.22876 20.25 8 20.25H12C15.7712 20.25 17.6569 20.25 18.8284 19.0784C20 17.9069 20 16.0212 20 12.25V10.25ZM12 10.5C11.0335 10.5 10.25 11.2835 10.25 12.25V14.25C10.25 15.2165 11.0335 16 12 16C12.9665 16 13.75 15.2165 13.75 14.25V12.25C13.75 11.2835 12.9665 10.5 12 10.5ZM12 12C11.8619 12 11.75 12.1119 11.75 12.25V14.25C11.75 14.3881 11.8619 14.5 12 14.5C12.1381 14.5 12.25 14.3881 12.25 14.25V12.25C12.25 12.1119 12.1381 12 12 12ZM8.78701 10.5571C9.06727 10.6732 9.25 10.9467 9.25 11.25V15.25C9.25 15.6642 8.91421 16 8.5 16C8.08579 16 7.75 15.6642 7.75 15.25V13.0607L7.53033 13.2803C7.23744 13.5732 6.76256 13.5732 6.46967 13.2803C6.17678 12.9874 6.17678 12.5126 6.46967 12.2197L7.96967 10.7197C8.18417 10.5052 8.50676 10.441 8.78701 10.5571Z" fill="#CAC6C6"/>
                                    </svg>
                                    <span class="font-medium">XX / XX</span>
                                </div>
                                <div id="heure_slide_4" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 5.25C10.4142 5.25 10.75 5.58579 10.75 6V9.68934L13.0303 11.9697C13.3232 12.2626 13.3232 12.7374 13.0303 13.0303C12.7374 13.3232 12.2626 13.3232 11.9697 13.0303L9.46967 10.5303C9.32902 10.3897 9.25 10.1989 9.25 10V6C9.25 5.58579 9.58579 5.25 10 5.25Z" fill="white"/>
                                    </svg>
                                    <span class="font-medium">XX h XX</span>
                                </div>
                            </div>
                            <div id="adresse_slide_4" class="flex flex-row items-center justify-center space-x-2">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 6.10747C4.75 2.73441 7.43629 0 10.75 0C14.0637 0 16.75 2.73441 16.75 6.10747C16.75 9.4541 14.835 13.3593 11.8472 14.7558C11.1507 15.0814 10.3493 15.0814 9.6528 14.7558C6.66499 13.3593 4.75 9.4541 4.75 6.10747ZM10.75 8C11.8546 8 12.75 7.10457 12.75 6C12.75 4.89543 11.8546 4 10.75 4C9.64543 4 8.75 4.89543 8.75 6C8.75 7.10457 9.64543 8 10.75 8Z" fill="#B0B0B0"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.37731 12.5343C2.63455 12.8589 2.57989 13.3306 2.25523 13.5879C1.68157 14.0424 1.5 14.443 1.5 14.75C1.5 14.993 1.61028 15.2881 1.94064 15.6296C2.27438 15.9747 2.79582 16.3252 3.50556 16.6471C4.75981 17.2159 6.49351 17.6466 8.5 17.8343V17.375C8.5 17.0807 8.6721 16.8137 8.94009 16.6921C9.20807 16.5705 9.52241 16.6168 9.74388 16.8106L11.2439 18.1231C11.4066 18.2655 11.5 18.4713 11.5 18.6875C11.5 18.9038 11.4066 19.1095 11.2439 19.252L9.74388 20.5645C9.52241 20.7582 9.20807 20.8046 8.94009 20.683C8.6721 20.5614 8.5 20.2943 8.5 20V19.3404C6.31512 19.1487 4.35927 18.6814 2.88599 18.0132C2.07214 17.644 1.37069 17.198 0.86244 16.6725C0.35081 16.1435 0 15.494 0 14.75C0 13.7998 0.566665 13.012 1.3237 12.4122C1.64836 12.1549 2.12008 12.2096 2.37731 12.5343ZM19.1227 12.5343C19.3799 12.2096 19.8516 12.1549 20.1763 12.4122C20.9333 13.012 21.5 13.7998 21.5 14.75C21.5 16.1281 20.3319 17.1606 18.9534 17.8514C17.5117 18.5738 15.541 19.0851 13.3256 19.3097C12.9135 19.3514 12.5456 19.0512 12.5038 18.6391C12.4621 18.227 12.7623 17.8591 13.1744 17.8173C15.272 17.6047 17.0514 17.1267 18.2814 16.5103C19.5746 15.8623 20 15.2067 20 14.75C20 14.443 19.8184 14.0424 19.2448 13.5879C18.9201 13.3306 18.8655 12.8589 19.1227 12.5343Z" fill="#B0B0B0"/>
                                </svg>
                                <span class="font-medium">Rue de mon trou, <span class="font-bold">FionVille</span> 08160</span>
                            </div>
                        </div>
                    </div>
                    <div class="slide w-24 xl:w-40 h-full 2xl:h-[500px] flex items-center justify-center">
                        <img id="image_slide_5" class="h-full object-cover rounded-[40px]" src="src/assets/img/affiche5.jpg" alt="">
                        <div id="description_slide_5" class="hidden flex flex-col items-start justify-center">
                            <div class="relative flex w-full mb-10">
                                <h3 id="titre_1_slide_5" class="absolute top-0 left-0 z-10 uppercase font-bold text-3xl">Titre de l'event</h3>
                                <h3 id="titre_2_slide_5" class="absolute top-0 left-24 uppercase font-bold text-3xl text-yellowLogo">Titre de l'event</h3>
                            </div>
                            <p id="info_slide_5" class="flex w-80 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                            <div class="flex flex-row justify-start space-x-10 mb-2">
                                <div id="date_slide_5" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.75 0.75C5.75 0.335786 5.41421 0 5 0C4.58579 0 4.25 0.335786 4.25 0.75V2.32926C2.81067 2.44451 1.86577 2.72737 1.17157 3.42157C0.477375 4.11577 0.194513 5.06067 0.0792572 6.5H19.9207C19.8055 5.06067 19.5226 4.11577 18.8284 3.42157C18.1342 2.72737 17.1893 2.44451 15.75 2.32926V0.75C15.75 0.335786 15.4142 0 15 0C14.5858 0 14.25 0.335786 14.25 0.75V2.2629C13.5847 2.25 12.839 2.25 12 2.25H8C7.16097 2.25 6.41527 2.25 5.75 2.2629V0.75Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.25C20 9.41097 20 8.66527 19.9871 8H0.012902C0 8.66527 0 9.41097 0 10.25V12.25C0 16.0212 0 17.9069 1.17157 19.0784C2.34315 20.25 4.22876 20.25 8 20.25H12C15.7712 20.25 17.6569 20.25 18.8284 19.0784C20 17.9069 20 16.0212 20 12.25V10.25ZM12 10.5C11.0335 10.5 10.25 11.2835 10.25 12.25V14.25C10.25 15.2165 11.0335 16 12 16C12.9665 16 13.75 15.2165 13.75 14.25V12.25C13.75 11.2835 12.9665 10.5 12 10.5ZM12 12C11.8619 12 11.75 12.1119 11.75 12.25V14.25C11.75 14.3881 11.8619 14.5 12 14.5C12.1381 14.5 12.25 14.3881 12.25 14.25V12.25C12.25 12.1119 12.1381 12 12 12ZM8.78701 10.5571C9.06727 10.6732 9.25 10.9467 9.25 11.25V15.25C9.25 15.6642 8.91421 16 8.5 16C8.08579 16 7.75 15.6642 7.75 15.25V13.0607L7.53033 13.2803C7.23744 13.5732 6.76256 13.5732 6.46967 13.2803C6.17678 12.9874 6.17678 12.5126 6.46967 12.2197L7.96967 10.7197C8.18417 10.5052 8.50676 10.441 8.78701 10.5571Z" fill="#CAC6C6"/>
                                    </svg>
                                    <span class="font-medium">XX / XX</span>
                                </div>
                                <div id="heure_slide_5" class="flex flex-row items-center justify-center space-x-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z" fill="#CAC6C6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 5.25C10.4142 5.25 10.75 5.58579 10.75 6V9.68934L13.0303 11.9697C13.3232 12.2626 13.3232 12.7374 13.0303 13.0303C12.7374 13.3232 12.2626 13.3232 11.9697 13.0303L9.46967 10.5303C9.32902 10.3897 9.25 10.1989 9.25 10V6C9.25 5.58579 9.58579 5.25 10 5.25Z" fill="white"/>
                                    </svg>
                                    <span class="font-medium">XX h XX</span>
                                </div>
                            </div>
                            <div id="adresse_slide_5" class="flex flex-row items-center justify-center space-x-2">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 6.10747C4.75 2.73441 7.43629 0 10.75 0C14.0637 0 16.75 2.73441 16.75 6.10747C16.75 9.4541 14.835 13.3593 11.8472 14.7558C11.1507 15.0814 10.3493 15.0814 9.6528 14.7558C6.66499 13.3593 4.75 9.4541 4.75 6.10747ZM10.75 8C11.8546 8 12.75 7.10457 12.75 6C12.75 4.89543 11.8546 4 10.75 4C9.64543 4 8.75 4.89543 8.75 6C8.75 7.10457 9.64543 8 10.75 8Z" fill="#B0B0B0"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.37731 12.5343C2.63455 12.8589 2.57989 13.3306 2.25523 13.5879C1.68157 14.0424 1.5 14.443 1.5 14.75C1.5 14.993 1.61028 15.2881 1.94064 15.6296C2.27438 15.9747 2.79582 16.3252 3.50556 16.6471C4.75981 17.2159 6.49351 17.6466 8.5 17.8343V17.375C8.5 17.0807 8.6721 16.8137 8.94009 16.6921C9.20807 16.5705 9.52241 16.6168 9.74388 16.8106L11.2439 18.1231C11.4066 18.2655 11.5 18.4713 11.5 18.6875C11.5 18.9038 11.4066 19.1095 11.2439 19.252L9.74388 20.5645C9.52241 20.7582 9.20807 20.8046 8.94009 20.683C8.6721 20.5614 8.5 20.2943 8.5 20V19.3404C6.31512 19.1487 4.35927 18.6814 2.88599 18.0132C2.07214 17.644 1.37069 17.198 0.86244 16.6725C0.35081 16.1435 0 15.494 0 14.75C0 13.7998 0.566665 13.012 1.3237 12.4122C1.64836 12.1549 2.12008 12.2096 2.37731 12.5343ZM19.1227 12.5343C19.3799 12.2096 19.8516 12.1549 20.1763 12.4122C20.9333 13.012 21.5 13.7998 21.5 14.75C21.5 16.1281 20.3319 17.1606 18.9534 17.8514C17.5117 18.5738 15.541 19.0851 13.3256 19.3097C12.9135 19.3514 12.5456 19.0512 12.5038 18.6391C12.4621 18.227 12.7623 17.8591 13.1744 17.8173C15.272 17.6047 17.0514 17.1267 18.2814 16.5103C19.5746 15.8623 20 15.2067 20 14.75C20 14.443 19.8184 14.0424 19.2448 13.5879C18.9201 13.3306 18.8655 12.8589 19.1227 12.5343Z" fill="#B0B0B0"/>
                                </svg>
                                <span class="font-medium">Rue de mon trou, <span class="font-bold">FionVille</span> 08160</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Voir Plus -->
        <a href="evenement" class="bg-yellowLogo mt-4 md:mt-8 lg:mt-10 text-center w-56 px-4 py-1.5 md:px-6 md:py-2 md:w-80 lg:px-7 lg:py-2.5 lg:w-96 2xl:w-96 2xl:px-8 2xl:py-3 rounded-full text-base md:text-lg lg:text-xl 2xl:text-2xl font-semibold" href="#" type="button">Voir les prochains évènements</a>
    </div>
</div>