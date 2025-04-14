document.addEventListener("DOMContentLoaded", function () {
  const tabButtons = document.querySelectorAll(".tab-button");
  const tabContents = document.querySelectorAll(".tab-content");

  function removeActiveClasses() {
    tabButtons.forEach((btn) => btn.classList.remove("bg-slate-500"));
    tabContents.forEach((content) => content.classList.add("hidden"));
  }

  tabButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const tab = button.getAttribute("data-tab");

      removeActiveClasses();
      button.classList.add("bg-slate-500");
      document.getElementById(tab).classList.remove("hidden");
    });
  });

  // Set default tab (Goal) as active on load
  document.querySelector('[data-tab="goal"]').classList.add("bg-slate-500");
  document.getElementById("goal").classList.remove("hidden");
});
