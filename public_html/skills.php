<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Gareth Nolan's coding skills page" />
    <link rel="icon" href="assets/images/logos/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="assets/images/logos/favicons/favicon.png" />
    <link rel="stylesheet" href="css/normalise.css" media="screen" />
    <link rel="stylesheet" href="css/unionflagbackground.css" media="screen" />
    <link rel="stylesheet" href="css/main.css" media="screen" />
    <link rel="stylesheet" href="css/dark-theme.css" media="screen" />
    <link rel="stylesheet" href="css/skills.css" media="screen" />
    <title>Skills</title>
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
        <section id="mainContent">
            <h1>Skills & Technologies</h1>
            <ul id="skillsContainer">
                <li class="skill" id="html5">
                    <div class="skill-logo">
                        <img src="assets/images/logos/tech/HTML5.svg" alt="HTML5 logo" />
                    </div>
                    <h2>HTML5</h2>
                    <div class="skill-description">
                        Semantic markup language for the web, used in every web-based
                        project so far to add the structure and content of the page.
                        Proper use of semantic tags makes it easier for anyone using
                        screen reader technology, and can improve searchability of the
                        site.
                    </div>
                </li>
                <li class="skill" id="css3">
                    <div class="skill-logo">
                        <img src="assets/images/logos/tech/CSS3_logo.svg" alt="CSS3 logo" />
                    </div>
                    <h2>CSS3</h2>
                    <div class="skill-description">
                        How all web content gets its look. From basic layout and fonts, up
                        to fully responsive pages that keep looking beautiful on every
                        screen. Used in every web-based project to arrange elements and
                        give them a practical, aesthetic style with accessible levels of
                        contrast and sufficient whitespace for enjoyable use.
                    </div>
                </li>
                <li class="skill" id="js">
                    <div class="skill-logo">
                        <img src="assets/images/logos/tech/javascript.svg" alt="Javascript logo" />
                    </div>
                    <h2>Javascript</h2>
                    <div class="skill-description">
                        A scripting language responsible for making webpages interactive.
                        Enables user interaction & provides core functionality right in
                        the browser keeping things quick. All except my earliest projects
                        make use of features brought in with ES6 (let, const, arrow
                        functions, promises etc) and later releases (eg asynchronous
                        functions).
                    </div>
                </li>
                <li class="skill" id="php">
                    <div class="skill-logo">
                        <img src="assets/images/logos/tech/php.svg" alt="PHP logo" />
                    </div>
                    <h2>PHP</h2>
                    <div class="skill-description">
                        Server side scripting language which provides all the logic that
                        can't be done at the client's end. Used in projects for example in
                        connecting users to shared information in a database, fetching
                        geographic location data for adding pins to a map based on user
                        position etc.
                    </div>
                </li>
                <li class="skill" id="sql">
                    <div class="skill-logo">
                        <img src="assets/images/logos/tech/mariadb_v_white.svg" alt="MariaDB logo" />
                    </div>
                    <h2>SQL</h2>
                    <div class="skill-description">
                        SQL is a language used for organising and accessing databases,
                        which I have applied to multiple projects where information needs
                        to persist beyond the session of one user. MariaDB is a community
                        developed fork of MySQL & so shares most features with it. It
                        comes shipped with the XAMPP development environment, hence my
                        early use of it.
                    </div>
                </li>
                <li class="skill" id="android">
                    <div class="skill-logo">
                        <img src="assets/images//logos/tech/Android.svg" alt="Android(TM) logo" />
                    </div>
                    <h2>Android</h2>
                    <div class="skill-description">
                        My first project in my coding journey was to learn how to program
                        mobile applications, which involved working through Google's
                        tutorial for Android in Java & XML. My first app was "Sailor's
                        Mate" which helps people navigate at sea (see
                        <a href="projects.php">Projects</a>). I have since concentrated on
                        web technologies, as Progressive Web Apps provide almost the same
                        capability as native code.
                    </div>
                </li>
                <li class="skill" id="json">
                    <div class="skill-logo">
                        <img src="assets/images/logos/tech/JSON.svg" alt="JSON logo" />
                    </div>
                    <h2>JSON</h2>
                    <div class="skill-description">
                        A way to parcel up information for storing and sending between
                        systems, even if they use different languages or operating
                        systems. I have made use of this when transferring information
                        between the client/browser (in Javascript) and server (logic
                        written in PHP), for example sending information being stored on a
                        server about a live event to multiple remote devices which are
                        taking concurrent actions. (see
                        <a href="projects.php#item-1">Projects</a>).
                    </div>
                </li>
                <li class="skill" id="python">
                    <div class="skill-logo">
                        <img src="assets/images/logos/tech/python.svg" alt="Python logo" />
                    </div>
                    <h2>Python</h2>
                    <div class="skill-description">
                        A high level general purpose language, which can be used in a huge
                        array of applications, as object-oriented or procedural, with a
                        large standard library. I have begun learning Python straight
                        after HTML/CSS/JS/PHP as it is so popular and will be a very
                        useful tool for problem solving in future projects.
                    </div>
                </li>
                <li class="skill" id="react">
                    <div class="skill-logo">
                        <img src="assets/images/logos/tech/react.svg" alt="React logo" />
                    </div>
                    <h2>React</h2>
                    <div class="skill-description">
                        A javascript library, originally developed by facebook, which allows for lots of reuse of common components of a user interface.
                        I learned React as part of the Codecademy full stack course and can see its usefulness in more complex websites with a lot of similar components. I had already built much of <a href="projects.php#item-1">timerthing.com</a> before learning React, but would probably use it if starting that project from scratch. React's main impact has been on my thinking about how best to design a website keeping component reuse in mind.
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="src/menu.js"></script>
</body>

</html>
