<section class="projects-page-content-section offline-projects">
    <div class="project">
        <div class="project-title">Bacon Butty Finder</div>
        <div class="project-screenshot">
            <img src="assets/images/hi-res/sc_baconbutty.png" alt="" width="511" height="537">
        </div>
        <div class="project-tldr">Learning project - playing with geospatial data using Leaflet.js</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <span class="sr-only">Bacon butty finder description</span>
                <div class="project-description-inner moretext">and video</div>
                <div class="project-description-inner">
                    A very early project, I wanted to learn how to embed maps and add layers and custom points and labels in my websites. After experimenting with Openlayers & Google Maps I found Leaflet to be a good mix of features, ease of use and lack of cost. Added OpenStreetMap for mapping data & experimented with the Geolocation API on my local XAMPP server. I combined this with some early work on providing secure account login & sessions to enable a user to dynamically add new locations by clicking on the map. These would then be added to an SQL database for retrieval and display on the map. I had fun creating a custom 'bacon butty' png icon & shadow too, finding out a lot about vector/scalar graphics and how to use editors in the process. Once I had learned enough, I mothballed the project at the early prototype stage on my local development machine & moved on to my 'social undistancing' app.
                    <video src="assets/videos/scv_baconbuttyfinder.mp4" autoplay muted loop controls loading="lazy" width="1024" height="576">Bacon butty finder screen capture video</video>
                </div>
            </label>
        </div>
        <div class="project-link" title="no website link"></div>
        <div class="project-github" title="no GitHub repo"></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon html" title="HTML"></div>
            <div class="project-tech-icon js" title="JavaScript"></div>
            <div class="project-tech-icon php" title="PHP"></div>
            <div class="project-tech-icon mariadb" title="MariaDB / MySQL"></div>
        </div>
    </div>
    <div class="project">
        <div class="project-title">Social Undistancing</div>
        <div class="project-screenshot">
            <img src="assets/images/hi-res/sc_socundi.png" alt="" width="511" height="537">
        </div>
        <div class="project-tldr">Connecting users with each other and tasks</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <span class="sr-only">Social undistancing description</span>
                <div class="project-description-inner moretext"></div>
                <div class="project-description-inner">
                    A challenging project - the idea was to create a website which would allow people ('helpees') to add 'tasks' (shopping, a lift to the doctor's etc), which anyone who was connected to them ('helpers') would be able to see, click to accept, and then update as they went along. Users would be able to have both roles and switch between them, and multiple helpers could be connected to one helpee, and could see if tasks had already been picked up by others.
                    The challenge was to make the pages as accessible as possible, and I also set myself the goal of making everything work without any javascript at all in case a vulnerable person had it switched off for 'safety'.
                    I accomplished this and added automated testing using Selenium (& Java). The database design was interesting, as I had to make use of lookup tables to connect users with each other and with tasks, and set up a secure hashed password storage & reset function, whilst keeping the database normalised. I also gave myself the challenge of displaying all times and dates in the users home country timezone, which involved having a country lookup table, storing all times in UTC & converting on the fly in PHP before sending to client machines.
                    Much time was taken up learning how to wrangle CSS into an appealing state, adjusting by pixels here & there to fit icons and text into elements as clearly as possible.
                    Once the main features of this project were working in my XAMPP development environment I then 'mothballed' it & moved on to a project which was needed to actually go live - <a href="projects.php#item-1">timerthing.com</a>.
                    <video id="socundi-video" src="assets/videos/scv_socundi.mp4" autoplay muted loop controls loading="lazy" width="960" height="540">Social Undistancing screen capture video</video>
                </div>
            </label>
        </div>
        <div class="project-link" title="no website link"></div>
        <div class="project-github" title="no GitHub repo"></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon html" title="HTML"></div>
            <div class="project-tech-icon php" title="PHP"></div>
            <div class="project-tech-icon mariadb" title="MariaDB / MySQL"></div>
            <div class="project-tech-icon java" title="Java"></div>
        </div>
    </div>
</section>
