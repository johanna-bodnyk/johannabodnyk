<?php include('_vars.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Johanna Bodnyk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="wrapper">
    <header>
        <h1>Johanna Bodnyk: <span>Web Developer</span></h1>
        <nav class="row">
            <ul>
                <?php foreach($pages as $page): ?>

                    <li class="col-3
                        <?php if(str_replace('.php', '', substr($_SERVER['PHP_SELF'], 1)) == $page) {
                            echo " active";
                        } ?>
                    ">
                        <a href="<?php echo $page; ?>">
                            <?php echo ucfirst($page); ?>
                        </a>
                    </li>


                <?php endforeach; ?>1
            </ul>
        </nav>
    </header>