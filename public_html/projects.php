<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/logos/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="assets/images/logos/favicons/favicon.png" />
    <link rel="stylesheet" href="css/normalise.css" />
    <link rel="stylesheet" href="css/unionflagbackground.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/light-theme.css" />
    <link rel="stylesheet" href="css/projects.css" />
    <title>Projects</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <ul id="tablist-largescreen">
            <li class="largescreen"><a href="#item-1">Larger Projects</a></li>
            <li class="largescreen"><a href="#item-2">Other Projects</a></li>
            <li class="largescreen"><a href="#item-3">Currently Offline</a></li>
            <li class="largescreen"><a href="#item-4">Little Things</a></li>
        </ul>
        <div id="content-container">
            <div class="list-label smallscreen">
                <a href="#item-1">Larger Projects</a>
            </div>
            <div class="swipe-content" id="item-1">
                <img src="assets/images/hi-res/dummy-image.jpg" alt="">
                <div>Some content here for Larger Projects</div>
            </div>
            <div class="list-label smallscreen">
                <a href="#item-2">Other Projects</a>
            </div>
            <div class="swipe-content" id="item-2">
                <img src="assets/images/hi-res/dummy-image.jpg" alt="">
                <div>Some content here for Other Projects</div>
            </div>
            <div class="list-label smallscreen">
                <a href="#item-3">Currently Offline</a>
            </div>
            <div class="swipe-content" id="item-3">
                <img src="assets/images/hi-res/dummy-image.jpg" alt="">
                <div>Some content here for Currently Offline</div>
            </div>
            <div class="list-label smallscreen">
                <a href="#item-4">Little Things</a>
            </div>
            <div class="swipe-content" id="item-4">
                <img src="assets/images/hi-res/dummy-image.jpg" alt="">
                <div>Some content here for Little Things</div>
            </div>
        </div>
    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="src/menu.js"></script>
</body>

</html>
