const hamburgerIcon = document.getElementById("hamburgerIcon");
const pageHeader = document.getElementById("pageHeader");

const toggleMenuState = (evt) => {
  pageHeader.classList.toggle("expanded");
};

hamburgerIcon.addEventListener("click", toggleMenuState);

let thisPageURL = window.location.href;
// remove fragment before checking in case of page reload/bookmarking
thisPageURL = thisPageURL.substring(
  0,
  thisPageURL.indexOf("#") > 0 ? thisPageURL.indexOf("#") : undefined
);

// add active class to current page nav item in navbar
const navItemsArray = document.getElementById("menu").querySelectorAll("li a");
for (navItem of navItemsArray) {
  if (!navItem.href) break;
  if (navItem.href === thisPageURL) navItem.classList.add("active");
}
