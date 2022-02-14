<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/logos/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="assets/images/logos/favicons/favicon.png" />
    <link rel="stylesheet" href="css/normalise.css" media="screen" />
    <link rel="stylesheet" href="css/main.css" media="screen" />
    <link rel="stylesheet" href="css/light-theme.css" media="screen" />
    <link rel="stylesheet" href="css/projects.css" />
    <title>Projects</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <ul id="tablist-largescreen">
            <li class="largescreen" data-linknum="1"><a href="#item-1">Larger Projects</a></li>
            <li class="largescreen" data-linknum="2"><a href="#item-2">Other Projects</a></li>
            <li class="largescreen" data-linknum="3"><a href="#item-3">Currently Offline</a></li>
            <li class="largescreen" data-linknum="4"><a href="#item-4">Little Things</a></li>
        </ul>
        <div id="content-container">
            <div class="list-label smallscreen" data-linknum="1">
                <a href="#item-1">Larger Projects</a>
            </div>
            <div class="swipe-content" id="item-1">
                <?php include "projects-large.php" ?>
            </div>
            <div class="list-label smallscreen" data-linknum="2">
                <a href="#item-2">Other Projects</a>
            </div>
            <div class="swipe-content" id="item-2">
                <?php include "projects-other.php" ?>
            </div>
            <div class="list-label smallscreen" data-linknum="3">
                <a href="#item-3">Currently Offline</a>
            </div>
            <div class="swipe-content" id="item-3">
                <?php include "projects-offline.php" ?>
            </div>
            <div class="list-label smallscreen" data-linknum="4">
                <a href="#item-4">Little Things</a>
            </div>
            <div class="swipe-content" id="item-4">
                <?php include "projects-little.php" ?>
            </div>
            <div id="initial-content">choose a category</div>
        </div>
    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="src/menu.js"></script>
    <script src="src/projects.js"></script>
</body>

</html>
