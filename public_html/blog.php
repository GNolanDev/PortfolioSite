<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Blog page for Gareth Nolan" />
    <link rel="icon" href="assets/images/logos/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="assets/images/logos/favicons/favicon.png" />
    <link rel="stylesheet" href="css/normalise.css" media="screen" />
    <link rel="stylesheet" href="css/main.css" media="screen" />
    <link rel="stylesheet" href="css/footer.css" media="screen" />
    <link rel="stylesheet" href="css/light-theme.css" media="screen" />
    <link rel="stylesheet" href="css/blog.css" media="screen" />
    <script type="module" src="https://cdn.jsdelivr.net/gh/zerodevx/zero-md@2/dist/zero-md.min.js"></script>
    <title>Blog</title>
</head>

<body>
    <?php
    include 'gnolan-header.php';
    ?>
    <main>
        <h1>More Coming Soon...</h1>
        <p>(Example blog from markdown file)</p>
        <div class="md-container">
            <zero-md src="blogs/00001_making_animated_text.md"></zero-md>
        </div>
    </main>
    <?php
    include 'gnolan-footer.php';
    ?>
    <script src="src/menu.js"></script>
</body>

</html>
