<section class="projects-page-content-section large-projects">
    <div class="project">
        <div class="project-title">Timerthing</div>
        <div class="project-screenshot">
            <img src="assets/images/hi-res/sc_timerthing.png" alt="" width="444" height="615">
        </div>
        <div class="project-tldr">QR-based event timing website</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <div class="project-description-inner moretext"></div>
                <div class="project-description-inner">
                    Timerthing is a public website I built from scratch to solve the problem of recording and storing times for a volunteer-led local running group following the closure of the national organisation which previously supported it. Users sign up and get a personal QR code, which event organisers can then scan in using an event timing page of the same application. Names are fetched from the server during the live event; multiple devices can be used for timing the same event; unknown finishers can be added, along with temporary names which users can 'claim' later; emergency contact info can optionally be added which can be made available to organisers or even just anyone with a smart phone since the QR code represents a real URL. Anyone with an account can set up their own location, with multiple events at each location, all of which can be run simultaneously in separate tabs. HTML, CSS, & Javascript is used for the front end & most of the actual timing functionality. JSON is used for communicating with the API created on the server side in PHP, with live events and long term storage, user account info etc all handled in MySQL (MariaDB during local development on XAMPP server).
                    Virtually all icons were created by me using <a href="https://vectr.com/design/" target="_blank">vectr.com</a>, a really useful vector graphic editor.
                    Hosted on Hostinger.com.
                </div>
            </label>
        </div>
        <div class="project-link" title="website link"><a href="https://www.timerthing.com" target="_blank">www.timerthing.com</a></div>
        <div class="project-github" title="no github repo"></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon html" title="HTML"></div>
            <div class="project-tech-icon css" title="CSS"></div>
            <div class="project-tech-icon js" title="Javascript"></div>
            <div class="project-tech-icon php" title="PHP"></div>
            <div class="project-tech-icon json" title="JSON"></div>
            <div class="project-tech-icon mariadb" title="MariaDB / MySQL"></div>
        </div>
    </div>
    <div class="project">
        <div class="project-title">Sailor's Mate</div>
        <div class="project-screenshot">
            <img src="assets/images/hi-res/sc_sailorsmate.png" alt="" width="768" height="1186">
        </div>
        <div class="project-tldr">Android app - does vector maths for sailors</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <div class="project-description-inner moretext"></div>
                <div class="project-description-inner">
                    Sailor's Mate is an Android application I created whilst learning how to program using Java & XML in Android studio. It is a basic tool for finding a course to steer when sailing in tidal waters in order to travel in the direction you mean to, accounting for the tide. It has day & night colour themes to protect night vision, and a further activity page which is a basic GPS position & speed readout, along with a 'remember this position' button which gives distance and direction to the point you've saved. This was the first large (for me!) project I attempted in coding, taking several months while also working full time, and was a valuable experience in wrestling with a user interface to make something clear and simple, yet functional too. It gave me chance to write automated tests in JUnit and Espresso, and go through the process of ensuring an app was secure and ready for production before deployment to the public with launch icons (home made!), screenshots etc.
                </div>
            </label>
        </div>
        <div class="project-link android" title="play store link"><a href="https://play.google.com/store/apps/details?id=com.gingerphysics.sailorsmate" target="_blank">
                <div class="project-inline-icon project-icon-playstore"></div>
            </a>
        </div>
        <div class="project-github" title="no github repo"></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon android" title="Android"></div>
            <div class="project-tech-icon xml" title="XML"></div>
            <div class="project-tech-icon java" title="Java"></div>
        </div>
    </div>
</section>
