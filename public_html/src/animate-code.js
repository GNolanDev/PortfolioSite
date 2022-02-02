let listOfAnimatableContent = document.querySelectorAll(
  ".declare-word, .variable-word, .method-word, .plain-word, .string-word"
);
let heroContainer = document.getElementById("hero-container");

// begin animated appearance of 'hero' image
heroContainer.classList.add("show");
// hide all words that should arrive by animation
for (let i = 0; i < listOfAnimatableContent.length; i++) {
  listOfAnimatableContent[i].classList.add("hidden");
}

// variable for keeping track of how many chars have been added so far
let runningTimeDelay = 0;
// set initial delay before any letter animation
const initialDelay = 3000;

const arrayOfWords = Array.from(listOfAnimatableContent);

// helper function for rendering html correctly
const deHtmlEntities = (str) => {
  return String(str)
    .replace(/&amp;/g, "&")
    .replace(/&lt;/g, "<")
    .replace(/&gt;/g, ">")
    .replace(/&apos;/g, "'")
    .replace(/&quot;/g, '"');
};

arrayOfWords.forEach((word) => {
  const wordContent = word.innerHTML;
  // empty the element and unhide it, then add each letter in turn
  word.innerHTML = "";
  word.classList.remove("hidden");
  // use runningTimeDelay to set delay for each character added
  for (let i = 0; i < wordContent.length; i++) {
    setTimeout(function () {
      let content = word.innerHTML;
      word.innerHTML = "";
      word.innerHTML =
        i === wordContent.length - 1
          ? deHtmlEntities(content + wordContent[i])
          : content + wordContent[i];
    }, initialDelay + runningTimeDelay);
    runningTimeDelay += 10 + Math.floor(Math.random() * 120);
  }
});
