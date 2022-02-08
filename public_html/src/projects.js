const largescreenTabs = document
  .getElementById("tablist-largescreen")
  .getElementsByClassName("largescreen");
const smallscreenTabs = document
  .getElementById("content-container")
  .getElementsByClassName("smallscreen");

// attach click listener to change style of active tab (large & small)
for (tab of largescreenTabs) {
  tab.addEventListener("click", (ev) => {
    // remove active tab if already selected
    for (oldtab of largescreenTabs) {
      oldtab.classList.remove("activetab");
    }
    ev.currentTarget.classList.add("activetab");
    const linknum = ev.currentTarget.dataset.linknum;
    // add class to correct smallscreen tab too
    for (smalltab of smallscreenTabs) {
      smalltab.classList.remove("activetab");
      if (smalltab.dataset.linknum === linknum) {
        smalltab.classList.add("activetab");
      }
    }
  });
}

for (tab of smallscreenTabs) {
  tab.addEventListener("click", (ev) => {
    // remove active tab if already selected
    for (oldtab of smallscreenTabs) {
      oldtab.classList.remove("activetab");
    }
    ev.currentTarget.classList.add("activetab");
    const linknum = ev.currentTarget.dataset.linknum;
    // add class to correct smallscreen tab too
    for (largetab of largescreenTabs) {
      largetab.classList.remove("activetab");
      if (largetab.dataset.linknum === linknum) {
        largetab.classList.add("activetab");
      }
    }
  });
}

// if loading the page with fragment, set active tab accordingly
const thisPage = window.location.href;
if (thisPage.indexOf("#item") > 0) {
  // get fragment number from url
  let fragmentNumber = thisPage.substring(
    thisPage.indexOf("#item") + 6,
    thisPage.indexOf("#item") + 7
  );
  if (["1", "2", "3", "4"].includes(fragmentNumber)) {
    /* fragment matches an element on the page - add class to both small & large screen elements */
    const tabArray = Array.from(smallscreenTabs).concat(
      Array.from(largescreenTabs)
    );
    tabArray.map((tab) => {
      if (tab.dataset.linknum === fragmentNumber) {
        tab.classList.add("activetab");
      }
    });
  }
}
