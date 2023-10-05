<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="src/assets/styles/animationFilterButton.css">
</head>

<body class="bg-darkGray h-screen flex flex-col gap-10">
    <?php require('src/view/template/navbar.php'); ?>
    <main class="space-y-10">
        <div class="flex flex-col items-center">
            <h2 class="text-4xl font-bold text-center">Annuaire</h2>
            <hr class="w-[200px] mx-auto mt-2 border-2 border-yellowLogo" />
        </div>
        <div class="w-10/12 mx-auto">
            <div id="header" class="p-5 bg-white rounded-[40px]">
                <div class="flex gap-5">
                    <div class="relative grow">
                        <input placeholder="Recherchez..." class="rounded-full pl-3 placeholder:text-xs w-full border-2 border-lightBlue">
                        <img src="src/assets/img/icons/searchicon.svg" class="w-2.5 absolute right-2 top-1/2 -translate-y-1/2">
                    </div>
                    <div class="h-6 w-6 flex space-around" id="filter-icon">
                        <svg class="h-full" viewBox="0 0 50 100" xmlns="http://www.w3.org/2000/svg">
                            <line class="origin-center translate-y-[-35px]" x1="30" y1="0" x2="30" y2="45" stroke="black" stroke-width="4" stroke-linecap="round" />
                            <circle class="duration-500 delay-700 origin-left" cx="30" cy="35" r="12.5" fill="none" stroke="black" stroke-width="4" />
                            <line class="origin-center translate-y-[5px]" x1="30" y1="55" x2="30" y2="140" stroke="black" stroke-width="4" stroke-linecap="round" />
                        </svg>
                        <svg class="h-full rotate-180" viewBox="0 0 50 100" xmlns="http://www.w3.org/2000/svg">
                            <line class="origin-center translate-y-[-35px]" x1="30" y1="0" x2="30" y2="45" stroke="black" stroke-width="4" stroke-linecap="round" />
                            <circle class="duration-500 delay-700 origin-left" cx="30" cy="35" r="12.5" fill="none" stroke="black" stroke-width="4" />
                            <line class="origin-center translate-y-[5px]" x1="30" y1="55" x2="30" y2="140" stroke="black" stroke-width="4" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
                <div id="filter-wrapper" class="max-w-screen flex overflow-x-auto pb-2"></div>
                <div class="max-w-screen flex overflow-x-auto pb-2">
                    <?php foreach ($tags as $tag) { ?>
                        <span class="bg-white w-fit py-1 px-3 ml-5 mt-2 flex items-center border border-darkBlue rounded-xl text-xs font-semibold leading-none cursor-pointer hover:bg-darkBlue hover:text-white"><?= ucfirst($tag->name) ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div id="activity_list" class="w-11/12 mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-2 mt-3">
        </div>

        <div class="w-11/12 mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-2 mt-3">
            <?php include('src/view/components/companyCard.php'); ?>
        </div>
    </main>
    <?php require('src/view/template/footer.php'); ?>



    <script src="src/assets/js/loadTags.js"></script>
    <script src="src/assets/js/loadCompany.js"></script>
    <script src="src/assets/js/components/tag.js"></script>
    <script src="src/assets/js/components/subTagWrapper.js"></script>
    <script src="src/assets/js/components/companyCard.js"></script>
    <script src="src/assets/js/activity_list.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>