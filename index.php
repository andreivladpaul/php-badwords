<!-- 1. Creare una variabile con un paragrafo di testo a vostra scelta.
2. Stampare a schermo il paragrafo e la sua lunghezza.
3. Una parola da censurare viene passata dall'utente tramite parametro GET.
4. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing   elit, sed do eiusmod tempor incididunt ut labore et dolore    magna aliqua. Ut enim ad minim veniam, quis nostrud    exercitation ullamco laboris nisi ut aliquip ex ea commodo     consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur     sint occaecat cupidatat non proident, sunt in culpa qui officia     deserunt mollit anim id est laborum.';

$bannedWord = $_GET['bannedWord'];
$modifyParagraph = str_replace($bannedWord, '***', $paragraph);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Exercize</title>
</head>

<body>

    <p> <?php echo $paragraph; ?> </p>

    <p>
        length paragraph: <?php echo strlen($paragraph); ?>
    </p>
    <hr>
    <p>
        <?php echo $modifyParagraph; ?>
    </p>

    <p>new length of the paragraph:
        <?php echo strlen($modifyParagraph); ?>
    </p>

</body>

</html>