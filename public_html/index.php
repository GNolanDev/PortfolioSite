<!DOCTYPE html>
<html lang="en" class="index-page-root">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Gareth Nolan's homepage" />
    <link rel="icon" href="assets/images/logos/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="assets/images/logos/favicons/favicon.png" />
    <link rel="stylesheet" href="css/normalise.css" media="screen" />
    <link rel="stylesheet" href="css/unionflagbackground.css" media="screen" />
    <link rel="stylesheet" href="css/main.css" media="screen" />
    <link rel="stylesheet" href="css/indexonly.css" media="screen" />
    <link rel="stylesheet" href="css/dark-theme.css" media="screen" />
    <title>GNolan Developer Portfolio</title>
</head>

<body>
    <div id="background-container">
        <div class="flag-uk-container"></div>
        <div class="flag-uk-container" id="flagBackground2"></div>
        <div class="flag-uk-container" id="flagBackground3"></div>
        <div class="flag-uk-container" id="flagBackground4"></div>
    </div>
    <div id="overlay"></div>
    <?php
    include 'header.php';
    ?>
    <main>
        <section id="introduction">
            <div id="intro-text-container">
                Hi. I'm Gareth.<br />
                Welcome to my site.<br />
                <div id="intro-longtext">
                    I am a fledgling full-stack developer who loves problem solving and learning new stuff.<br />
                    Feel free to take a look around, & get in touch if you think I might be able to help.
                </div>
            </div>
        </section>
        <section id="hero-container">
            <div id="hero-content">
                <div class="tab">
                    <span class="declare-word">const</span>
                    <span class="variable-word">gareth</span>
                    <span class="method-word">=</span>
                    <span class="plain-word">{</span>
                    <div class="tab">
                        <span class="variable-word">status</span><span class="plain-word">:</span>
                        <span class="string-word">"aspiring full stack developer"</span><span class="plain-word">,</span>
                    </div>
                    <div class="tab">
                        <span class="variable-word">background</span><span class="plain-word">:</span>
                        <span class="string-word">"<a href="about.php">eclectic</a>"</span><span class="plain-word">,</span><br />
                    </div>
                    <div class="tab">
                        <span class="variable-word">skills</span><span class="plain-word">: [</span><br />
                        <span class="string-word">"html5"</span><span class="plain-word">,</span><br />
                        <span class="string-word">"css3"</span><span class="plain-word">,</span><br />
                        <span class="string-word">"js"</span><span class="plain-word">,</span><br />
                        <span class="string-word">"php"</span><span class="plain-word">,</span><br />
                        <span class="string-word">"sql"</span><span class="plain-word">,</span><br />
                        <span class="string-word">"android(java & xml)"</span><span class="plain-word">,</span><br />
                        <span class="string-word">"selenium testing"</span><span class="plain-word">,</span>
                    </div>
                    <span class="plain-word">].</span><span class="method-word">concat</span><span class="plain-word">(</span><span class="variable-word"><a href="skills.php">more</a></span><span class="plain-word">),</span><br />
                    <div class="tab" id="div-to-wrap">
                        <span class="variable-word">areasOfInterest</span><span class="plain-word">: [</span>
                        <span class="string-word">"education"</span><span class="plain-word">,</span>
                        <span class="string-word">"outdoor activities"</span><span class="plain-word">,</span>
                        <span class="string-word">"aviation"</span><span class="plain-word">].</span><span class="method-word">concat</span><span class="plain-word">(</span><span class="variable-word"><a href="about.php">lotsMore</a></span><span class="plain-word">),</span>
                    </div>
                    <div class="tab">
                        <span class="variable-word">future</span><span class="plain-word">: [</span>
                        <span class="string-word">"building things that make the world a better place"</span><span class="plain-word">,</span><br />
                        <span class="string-word">"learning more technologies"</span><span class="plain-word">,</span>
                    </div>
                    <span class="plain-word">],</span><br />
                </div>
                <span class="plain-word">};</span>
            </div>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="src/menu.js"></script>
    <script src="src/animate-code.js"></script>
    <script>
        document.getElementById("pageHeader").classList.add("visible");
        document.getElementById("pageFooter").classList.add("visible");
    </script>
</body>

</html>
