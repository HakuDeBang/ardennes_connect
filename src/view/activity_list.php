<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./dist/output.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="src/assets/styles/animationFilterButton.css"> -->
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
                        <input placeholder="Recherchez..." id="searchBar" class="rounded-full pl-3 placeholder:text-xs w-full border-2 border-lightBlue">
                        <img src="src/assets/img/icons/searchicon.svg" class="w-2.5 absolute right-2 top-1/2 -translate-y-1/2">
                    </div>
                </div>
                <div id="filter-wrapper" class="max-w-screen flex overflow-x-auto pb-2"></div>
                <div class="max-w-screen flex flex-wrap justify-center gap-3 overflow-x-auto pb-2">
                    <?php foreach ($tags as $tag) { ?>
                        <span id="<?= $tag->id ?>" class="tagButton py-1 px-3 border border-darkBlue rounded-xl text-xs font-semibold leading-none cursor-pointer hover:bg-darkBlue hover:text-white data-[selected=true]:bg-darkBlue data-[selected=true]:text-white" data-selected="false"><?= ucfirst($tag->name) ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div id="activity_list" class="w-11/12 mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-2 mt-3">
        </div>

        <div id="cardList" class="w-11/12 mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-2 mt-3">
            <?php include('src/view/components/companyCard.php'); ?>
        </div>
    </main>
    <?php require('src/view/template/footer.php'); ?>


    <script src="src/assets/js/yearbook.js"></script>
</body>

</html>