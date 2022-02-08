const largescreenTabs = document
  .getElementById("tablist-largescreen")
  .getElementsByClassName("largescreen");

// attach click listener to change style of active tab
for (tab of largescreenTabs) {
  tab.addEventListener("click", (ev) => {
    // remove active tab if already selected
    for (oldtab of largescreenTabs) {
      oldtab.classList.remove("activetab");
    }
    ev.currentTarget.classList.add("activetab");
  });
}
