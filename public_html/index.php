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
    <link rel="stylesheet" href="css/indexonly.css" />
    <link rel="stylesheet" href="css/dark-theme.css" />
    <title>GNolan Developer Portfolio</title>
</head>

<body>
    <div id="background-container">
        <div class="flag-uk-container"></div>
        <div class="flag-uk-container" id="flagBackground2"></div>
        <div class="flag-uk-container" id="flagBackground3"></div>
    </div>
    <div id="overlay"></div>
    <?php
    include 'header.php';
    ?>
    <main>

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
                    <div class="tab">
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
    <div id="footerSpacer"></div>
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
