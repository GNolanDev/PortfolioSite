const hamburgerIcon = document.getElementById("hamburgerIcon");
const pageHeader = document.getElementById("pageHeader");

const toggleMenuState = (evt) => {
  pageHeader.classList.toggle("expanded");
};

hamburgerIcon.addEventListener("click", toggleMenuState);
