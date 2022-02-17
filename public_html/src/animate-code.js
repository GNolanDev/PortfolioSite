const listOfAnimatableContent = document.querySelectorAll(
  ".declare-word, .variable-word, .method-word, .plain-word, .string-word"
);
const introSection = document.getElementById("introduction");
// declare an array for holding timeouts to enable 'shortcutting' animation
const timeoutArray = [];

// begin animated appearance of 'hero' image
document.getElementById("hero-container").classList.add("show");
// hide all words that should arrive by animation
for (let i = 0; i < listOfAnimatableContent.length; i++) {
  listOfAnimatableContent[i].classList.add("hidden");
}

// variable for keeping track of how many chars have been added so far
let runningTimeDelay = 0;
// set initial delay before any letter animation & default animation delays
const initialDelayGlobal = 3000;
const baseDelayGlobal = 10;
const maxRandDelayGlobal = 110;
const extraPauseGlobal = 750;

// get all elements for animating
const arrayOfSpanElements = Array.from(listOfAnimatableContent);

// helper function for rendering html correctly
const deHtmlEntities = (str) => {
  return String(str)
    .replace(/&amp;/g, "&")
    .replace(/&lt;/g, "<")
    .replace(/&gt;/g, ">")
    .replace(/&apos;/g, "'")
    .replace(/&quot;/g, '"');
};

// create an array associating the original innerhtml for each span with it
const arrayOfSpansWithContent = arrayOfSpanElements.map((span) => {
  return [span, span.innerHTML];
});

/* function for removing innerHTML from all spans and adding the text effect timeouts */
const animateSpans = (
  arrayOfSpans,
  initialDelay = 0,
  baseDelay = 0,
  maxRandDelay = 0,
  extraPause = 0
) => {
  arrayOfSpans.forEach(([span, spanContent]) => {
    // empty the element and unhide it, then add each letter in turn
    span.innerHTML = "";
    span.classList.remove("hidden");
    // use runningTimeDelay to set delay for each character added
    for (let i = 0; i < spanContent.length; i++) {
      const timeout = setTimeout(() => {
        let content = span.innerHTML;
        span.innerHTML = "";
        span.innerHTML =
          i === spanContent.length - 1
            ? deHtmlEntities(content + spanContent[i])
            : content + spanContent[i];
      }, initialDelay + runningTimeDelay);
      // store timeout for clearing
      timeoutArray.push(timeout);
      runningTimeDelay += baseDelay + Math.floor(Math.random() * maxRandDelay);
    }
    // add extra random delay as if pausing after roughly ~7 spans
    runningTimeDelay += Math.random() > 0.15 ? 0 : extraPause;
  });
};

// call animator function with default timings
animateSpans(
  arrayOfSpansWithContent,
  initialDelayGlobal,
  baseDelayGlobal,
  maxRandDelayGlobal,
  extraPauseGlobal
);

// trigger intro section to animate in
const lasttimeout = setTimeout(() => {
  introSection.classList.add("visible");
}, initialDelayGlobal + runningTimeDelay + 1500);
timeoutArray.push(lasttimeout);

// reset runningTimeDelay
runningTimeDelay = 0;

// add click event listener to allow shortcutting animation
document.addEventListener(
  "click",
  (cancelAnimation = () => {
    document.removeEventListener("click", cancelAnimation);
    timeoutArray.forEach((timeout) => {
      clearTimeout(timeout);
    });
    timeoutArray.splice(0, timeoutArray.length);
    // add text content back immediately
    animateSpans(arrayOfSpansWithContent);
    setTimeout(() => {
      introSection.classList.add("visible");
    }, 1500);
    // add header & footer without transition
    document.getElementById("pageHeader").style.transition = "none";
    document.getElementById("pageFooter").style.transition = "none";
  })
);
