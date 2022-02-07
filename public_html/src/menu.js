const hamburgerIcon = document.getElementById("hamburgerIcon");
const pageHeader = document.getElementById("pageHeader");

const toggleMenuState = (evt) => {
  pageHeader.classList.toggle("expanded");
};

hamburgerIcon.addEventListener("click", toggleMenuState);

const thisPageURL = window.location.href;

// add active class to current page nav item in navbar
const navItemsArray = document.getElementById("menu").querySelectorAll("li a");
for (navItem of navItemsArray) {
  if (!navItem.href) break;
  if (navItem.href === thisPageURL) navItem.classList.add("active");
}
