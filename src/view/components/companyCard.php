<?php foreach ($companies as $company) { ?>
    <div id="<?= $company->id ?>" class="bg-white flex rounded-md w-full justify-between overflow-hidden">
        <div class="flex flex-col h-full justify-between p-2">
            <h4 class="font-semibold"><?= $company->name ?></h4>
            <p class="font-semibold text-xs"><?= $company->adress ?></p>
            <div class="flex flex-wrap">
                <?php foreach ($company->tags as $nameTag) { ?>
                    <span class="bg-darkBlue text-white text-xs font-semibold flex items-center w-fit py-1 px-3 ml-5 mt-2 leading-none rounded-xl"><?= ucfirst($nameTag) ?></span>
                <?php } ?>
            </div>
        </div>
        <img src="src/assets/img/upload/company_cover/<?= $company->cover ?>" alt="company image" class="aspect-square h-24" />
    </div>
<?php } ?>