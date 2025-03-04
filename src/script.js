
// JavaScript to toggle mobile menu visibility
const menuToggle = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");
const closeMenu = document.getElementById("close-menu");
const backdrop = document.getElementById("backdrop");

menuToggle.addEventListener("click", function() {
    mobileMenu.style.display = "block"; // Show the menu
});

closeMenu.addEventListener("click", function() {
    mobileMenu.style.display = "none"; // Hide the menu
});

backdrop.addEventListener("click", function() {
    mobileMenu.style.display = "none"; // Hide the menu if backdrop is clicked
});

//About Navbar
const aboutUsContentLg = document.getElementById("aboutUs-ContentLg");
const aboutUsDropdownLg = document.getElementById("aboutUs-dropdownLg");

aboutUsContentLg.addEventListener("click", function(event){
    // Toggle dropdown visibility
    if (aboutUsDropdownLg.style.display === "block") {
        aboutUsDropdownLg.style.display = "none";
    } else {
        aboutUsDropdownLg.style.display = "block";
    }
    event.stopPropagation();
});

// Hide the dropdown when clicking outside of it
document.addEventListener("click", function (event) {
    if (!aboutUsDropdownLg.contains(event.target)) {
        aboutUsDropdownLg.style.display = "none";
    }
});

const contentService = document.getElementById("content-service");
const serviceDropdown = document.getElementById("service-dropdown");

contentService.addEventListener("click", function(event){
    // Toggle dropdown visibility
    if (serviceDropdown.style.display === "block") {
        serviceDropdown.style.display = "none";
    } else {
        serviceDropdown.style.display = "block";
    }
    event.stopPropagation();
});

// Hide the dropdown when clicking outside of it
document.addEventListener("click", function (event) {
    if (!serviceDropdown.contains(event.target)) {
        serviceDropdown.style.display = "none";
    }
});

const purokContent = document.getElementById("purok-content");
const purokDropdown = document.getElementById("purok-dropdown");

purokContent.addEventListener("click", function(event){
    // Toggle dropdown visibility
    if (purokDropdown.style.display === "block") {
        purokDropdown.style.display = "none";
    } else {
        purokDropdown.style.display = "block";
    }
    event.stopPropagation();
});

// Hide the dropdown when clicking outside of it
document.addEventListener("click", function (event) {
    if (!purokDropdown.contains(event.target)) {
        purokDropdown.style.display = "none";
    }
});

//Document Navbar
const documentBlock = document.getElementById("documentBlock");
const documentDropdown = document.getElementById("documentDropdown");

documentBlock.addEventListener("click", function(event){

    if (documentDropdown.style.display === "block") {
        documentDropdown.style.display = "none";
    } else {
        documentDropdown.style.display = "block";
    }

    event.stopPropagation();
});
// Document navbar outside click hide
document.addEventListener("click", function(event){
    if (!documentDropdown.contains(event.target)){
        documentDropdown.style.display = "none";
    }
});

    




