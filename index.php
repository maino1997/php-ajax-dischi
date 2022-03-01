<?php

include __DIR__ . '/data.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <img src="./spotify.png" alt="logo-spotify">
    </header>

    <main>

        <div class="container">
            <?php foreach ($database as $movie) : ?>
                <div class="col-5" v-for="item in List" :key="item.poster">
                    <div class="content">
                        <img src="<?php echo $movie['poster'] ?>" alt="img" />
                        <h2><?php echo $movie['title'] ?></h2>
                        <p><?php echo $movie['author'] ?></p>
                        <p><?php echo $movie['year'] ?></p>
                    </div>
                </div>
            <? endforeach ?>
        </div>

    </main>

</body>

</html>