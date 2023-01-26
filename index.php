<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Password generator</title>
</head>

<body>

    <?php
    // $password = $_GET["password"];

    $caratteriPassword = [
        'abcdefghilmnopqrstuvz',
        'ABCDEFGHILMNOPQRSTUVZ',
        '0123456789',
        '%&!?'
    ];
    $password = '';
    for ($i = 0; $i < 5; $i++) {
        $attuale = rand(0, 3);
        $lungValue = strlen($caratteriPassword[$attuale]);
        $password .= $caratteriPassword[$attuale][rand(0, $lungValue)];
    }


    ?>

    <main>
        <h1>Password Generator</h1>

        <form action="index.php" method="get">
            <input type="text" name="password">
            <button type="submit">genera</button>
        </form>

        <span>
            la password richiesta è:
            <?php
            echo $_GET[$password];
            // echo $password;
            ?>
        </span>
    </main>
</body>

</html>