<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="'About Me' page for Gareth Nolan" />
    <link rel="icon" href="assets/images/logos/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="assets/images/logos/favicons/favicon.png" />
    <link rel="stylesheet" href="css/normalise.css" media="screen" />
    <link rel="stylesheet" href="css/main.css" media="screen" />
    <link rel="stylesheet" href="css/footer.css" media="screen" />
    <link rel="stylesheet" href="css/light-theme.css" media="screen" />
    <link rel="stylesheet" href="css/about.css" media="screen" />
    <title>About Me</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <section class="aboutme-content">
            <h1>A bit about me</h1>
            <label>
                <input class="expand-checkbox" type="checkbox" hidden>
                <div class="aboutme-intro aboutme-container">
                    <span class="sr-only">expand professional section</span>
                    <h2>Professionally</h2>
                    <div class="aboutme-detail">
                        <div class="aboutme-detail-inner">
                            <p>I love a challenge. I enjoy solving problems and seeing other people succeed too.</p>
                            <p>I studied Physics at UMIST (now part of Manchester University) before joining the Fleet Air Arm of the Royal Navy and learning to fly helicopters. I love to travel and spent 6 months flying in New Zealand, before returning to the UK and becoming an A level physics and electronics teacher and examiner.</p>
                            <p>My latest challenge has been to teach myself during my free time to design and write programs to solve problems, which has taken me from learning Android (Java & XML) to full stack web technologies (HTML, CSS, JS, PHP, SQL, Node etc).</p>
                            <p>I have produced a number of applications/websites of varying complexities, and in the process learnt a great deal about the realities of wrangling code onto a store or live production server. I have become familiar with the basics of testing on Android(JUnit/Espresso) and with Jest/Selenium, and will incorporate test-driven-development into my next project. I have completed some projects in React/Redux with Codecademy, and may incorporate that into future projects of my own where it becomes appropriate. I have used Git and Github for a few years, but have recently become much more confident in handling version control this way, and have experimented with continuous deployment from there to static site servers like Netlify.</p>
                            <p>I am hoping to keep learning and see my efforts reflected in producing real world applications that have a positive impact like my most recent project, Timerthing.</p>
                        </div>
                    </div>
            </label>
            </div>
            <label>
                <input class="expand-checkbox" type="checkbox" hidden>
                <div class="aboutme-personal aboutme-container">
                    <span class="sr-only">expand personal section</span>
                    <h2>Personally</h2>
                    <div class="aboutme-detail">
                        <div class="aboutme-detail-inner">
                            <p>I love to travel, as does my wife, and hope to visit South America and Asia in the future.</p>
                            <p>I am an outdoors person at heart, probably due to my years in the Scout Association - I am a white water kayaking instructor, a keen coastal yacht sailor, and love all sorts of other activities: caving, snowboarding, running, open water swimming and more.</p>
                            <p>I am also a keen motorcyclist, and love spending time in Snowdonia and the Peak District enjoying the views flashing by.</p>
                            <p>I also find enjoyment in my more recent new challenge of ballroom dancing!</p>
                        </div>
                    </div>
            </label>
            </div>
            <label>
                <input class="expand-checkbox" type="checkbox" hidden>
                <div class="aboutme-early aboutme-container">
                    <span class="sr-only">expand early years section</span>
                    <h2>Early Years</h2>
                    <div class="aboutme-detail">
                        <div class="aboutme-detail-inner">
                            <p>Writing programs is bringing me full circle to when I was a young lad with an Amstrad CPC464, writing my own quiz programs and games, and dissecting commercial games to see how they worked - happy days!</p>
                            <p>Ready</p>
                            <span id="ams-cursor" class="blink">_</span>
                        </div>
                    </div>
                </div>
            </label>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="src/menu.js"></script>
</body>

</html>
