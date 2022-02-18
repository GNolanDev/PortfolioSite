<section class="projects-page-content-section other-projects">
    <div class="project">
        <div class="project-title">This Site!</div>
        <div class="project-screenshot">
            <img src="assets/images/hi-res/sc_portfolio.png" alt="" width="884" height="1081">
        </div>
        <div class="project-tldr">My portfolio website</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <span class="sr-only">Portfolio page description</span>
                <div class="project-description-inner moretext"></div>
                <div class="project-description-inner">
                    My portfolio website. Originally begun as a small task during the Codecademy Full Stack Developer course, I have added further styling and content to showcase more of my work & experiment with ways to add styling to webpages.
                    My main priority was to keep the site accessible and responsive to different screen sizes while trying out various css 'tricks' etc - this is an ongoing process, so more sections will be completed and added to over time. The codebase for the site is available on github using the link.
                </div>
            </label>
        </div>
        <div class="project-link" title="website link"><a href="https://gnolan.online" target="_blank">https://gnolan.online</a></div>
        <div class="project-github" title="github repo"><a href="https://github.com/GNolanDev/PortfolioSite" target="_blank"><span class="sr-only">portfolio website github link</span></a></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon html" title="HTML"></div>
            <div class="project-tech-icon css" title="CSS"></div>
            <div class="project-tech-icon js" title="Javascript"></div>
            <div class="project-tech-icon php" title="PHP"></div>
        </div>
    </div>
    <div class="project">
        <div class="project-title">Jammming</div>
        <div class="project-screenshot">
            <img src="assets/images/hi-res/sc_jammming.png" alt="" width="977" height="1049">
        </div>
        <div class="project-tldr">React app - Spotify API</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <span class="sr-only">Jamming app description</span>
                <div class="project-description-inner moretext"></div>
                <div class="project-description-inner">
                    A project set by Codecademy as part of the full stack path. Uses Create-React-App as a base, html templates given. My job was to create all the components and connect them up, then connect to the <a href="https://developer.spotify.com/documentation/web-api/" target="_blank">Spotify API</a> to fetch songs & create new playlists on the user's account. This was a good overview of how React single page apps are arranged, a chance to see how API documentation works, an opportunity to use build tools, and an introduction to a simple way of deploying via <a href="https://surge.sh/" target="_blank">'surge'</a>.
                </div>
            </label>
        </div>
        <div class=" project-link" title="website link"><a href="https://gnolandevjammming.netlify.app" target="_blank">https://gnolandevjammming.netlify.app</a></div>
        <div class="project-github" title="github repo"><a href="https://github.com/GNolanDev/jammming" target="_blank"><span class="sr-only">Jammming github link</span></a></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon react" title="React"></div>
            <div class="project-tech-icon js" title="Javascript"></div>
            <div class="project-tech-icon css" title="CSS"></div>
            <div class="project-tech-icon html" title="HTML"></div>
        </div>
    </div>
    <div class="project">
        <div class="project-title">Reddit Feed</div>
        <div class="project-screenshot">
            <img src="assets/images/hi-res/sc_reddit.jpg" alt="" width="500" height="635">
        </div>
        <div class="project-tldr">React/Redux app - Reddit API</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <span class="sr-only">Reddit app description</span>
                <div class="project-description-inner moretext"></div>
                <div class="project-description-inner">
                    Codecademy project as part of the React-Redux section. Chance to practice using another 3rd party api (reddit) to fetch data, setting up, handling and testing React-Redux with React Developer Tools & ReduxDevTools.
                    Technologies used: ECMAScript 6, React, Redux, CSS, React Testing Library + Jest & MSW for api mocking.
                    The challenge was to create a single page application which:
                    <ul>
                        <li>as a user will show me a list of subreddits as collected from the Reddit API</li>
                        <li>as a user will allow me to choose a subreddit & show me a list of posts from that subreddit</li>
                        <li>as a user will allow me to input a search term and display only those posts with the search term in them</li>
                        <li>as a user will show me the number of comments on each post and allow me to expand the comments section</li>
                    </ul>
                    <a href="https://github.com/GNolanDev/reddit-project/blob/main/LighthouseReport.PNG" target="_blank">Lighthouse report.</a>
                </div>
            </label>
        </div>
        <div class="project-link" title="website link"><a href="https://gnolandev-reddit-project.netlify.app" target="_blank">https://gnolandev-reddit-project.netlify.app</a>
        </div>
        <div class="project-github" title="github repo"><a href="https://github.com/GNolanDev/reddit-project" target="_blank"><span class="sr-only">Reddit project github link</span></a></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon react" title="React"></div>
            <div class="project-tech-icon redux" title="Redux"></div>
            <div class="project-tech-icon js" title="Javascript"></div>
            <div class="project-tech-icon css" title="CSS"></div>
            <div class="project-tech-icon html" title="HTML"></div>
        </div>
    </div>
    <div class="project">
        <div class="project-title">Quiz App</div>
        <div class="project-screenshot">
            <video src="assets/videos/scv_quizapp.mp4" autoplay muted loop width="352" height="240">Quiz app screen capture video</video>
        </div>
        <div class="project-tldr">React/Redux app - Quiz Flashcards</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <span class="sr-only">Quiz app description</span>
                <div class="project-description-inner moretext"></div>
                <div class="project-description-inner">
                    The challenge was to allow a user to create flashcards for simple quizzes, using React-Redux - set by Codecademy as part of the full stack path. Given html templates and React Router basic framework. My job was to create the slices and get all the components talking to each other via actions/reducers/selectors etc. This was a good overview of how React single page apps make use of &lt;BrowserRouter&gt; and Slices to organise the Redux Store, gave another chance to consider Separation of Concerns, and to use build tools.
                    Improvements - codecademy mentions how the design has been normalised in the brief, but I believe there is a little more to be done here. The given structure has "topic" objects holding a list of associated quizzes, but also has each "quiz" holding the id of an associated topic. This seems like duplication of data sources that could potentially contradict each other. An improvement would be to only hold the data regarding which quizzes are associated with which topics in a join table, and look this up whenever necessary.
                </div>
            </label>
        </div>
        <div class=" project-link" title="website link"><a href="https://gnolandevquiz-app.netlify.app" target="_blank">https://gnolandevquiz-app.netlify.app</a>
        </div>
        <div class="project-github" title="github repo"><a href="https://github.com/GNolanDev/quiz-app" target="_blank"><span class="sr-only">Quiz app github link</span></a></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon react" title="React"></div>
            <div class="project-tech-icon redux" title="Redux"></div>
            <div class="project-tech-icon js" title="Javascript"></div>
            <div class="project-tech-icon css" title="CSS"></div>
            <div class="project-tech-icon html" title="HTML"></div>
        </div>
    </div>
    <div class="project">
        <div class="project-title">Appointments App</div>
        <div class="project-screenshot">
            <video src="assets/videos/scv_appointments.mp4" autoplay muted loop width="352" height="240">Appointments app screen capture video</video>
        </div>
        <div class="project-tldr">React/Redux app - Appointment Maker</div>
        <div class="project-description">
            <label>
                <input class="description-checkbox" type="checkbox" hidden>
                <span class="sr-only">Appointments app description</span>
                <div class="project-description-inner moretext"></div>
                <div class="project-description-inner">
                    Short Codecademy challenge - a very simple contacts & appointments page, created using React &lt;BrowserRouter&gt; in a single page app. Uses Create-React-App as a base, given html templates and a React Router basic framework. My job was to create all the components and connect them up, maintaining controlled inputs and keeping "App" stateful while the children remain stateless.
                </div>
            </label>
        </div>
        <div class="project-link" title="website link"><a href="https://gnolandevappointmentplanner.netlify.app" target="_blank">https://gnolandevappointmentplanner.netlify.app</a>
        </div>
        <div class="project-github" title="github repo"><a href="https://github.com/GNolanDev/appointmentplanner" target="_blank"><span class="sr-only">Appointments app github link</span></a></div>
        <div class="project-technology-icons">
            <div class="project-tech-icon react" title="React"></div>
            <div class="project-tech-icon js" title="Javascript"></div>
            <div class="project-tech-icon css" title="CSS"></div>
            <div class="project-tech-icon html" title="HTML"></div>
        </div>
    </div>
</section>
