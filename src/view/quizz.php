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
                            <button type="button" class="px-5 py-2 bg-lightBlue/50 rounded-lg text-xl font-medium"><?= $answer ?></button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <button type="button" id="return" class="px-5 py-2 text-xl">Retour</button>
            </div>
        </div>
    </main>

    <?php require('template/footer.php'); ?>
    <?php require('template/script_head.php') ?>
    <script src="src/assets/js/quiz.js"></script>
</body>

</html>