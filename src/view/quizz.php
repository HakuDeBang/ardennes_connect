<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardennes Connect</title>
    <link href="./dist/output.css" rel="stylesheet">
</head>

<body class="bg-darkGray h-screen">

    <?php require('template/navbar.php'); ?>
    <main>
        <div class="w-10/12 mx-auto mt-20">
            <div class="h-[800px] py-20 bg-white rounded-[40px] flex flex-col items-center gap-10">
                <img class="w-[350px]" src="src/assets/img/logo_black.png" alt="">
                <p class="text-center">Bienvenue sur ce questionnaire intéractif permettant de trouver au mieux ce que vous recherchez. <br /> Répondez aux questions et trouver l'invormation que vous désirez !</p>
                <div>
                    <h3 id="question" class="text-5xl font-bold"><?= $question['question'] ?></h3>
                    <hr class="w-3/4 mx-auto mt-2 mb-10 border-2 border-yellowLogo" />
                    <div id="answers" class="flex justify-center gap-5">
                        <?php
                        foreach ($question['answers'] as $answer) {
                        ?>
                            <button id="<?= $answer->id ?>" type="button" class="px-5 py-2 bg-lightBlue/50 rounded-lg text-xl font-medium"><?= $answer->label ?></button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="w-full flex justify-center gap-48">
                    <button type="button" id="return" class="bg-redLogo/70 border-2 border-redLogo rounded-lg px-3 py-1 text-white text-xl font-semibold">Retour</button>
                    <button type="button" id="valided" class="bg-darkBlue/70 border-2  border-darkBlue rounded-lg px-3 py-1 text-white text-xl font-semibold">Valider</button>
                </div>
            </div>
        </div>
    </main>

    <?php require('template/footer.php'); ?>
    <script src="src/assets/js/quiz.js"></script>
</body>

</html>