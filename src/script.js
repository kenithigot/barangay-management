
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


document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.tab-button');
    const contents = document.querySelectorAll('.tab-content');
    const defaultTab = 'goal';

    // Function to deactivate all tabs and contents
    function deactivateAll() {
        buttons.forEach(button => button.classList.remove('bg-slate-500'));
        buttons.forEach(button => button.querySelector('button').classList.remove('active'));
        contents.forEach(content => content.classList.add('hidden'));
    }

    // Function to activate the clicked tab
    function activateTab(tabName) {
        deactivateAll();
        const activeButton = document.querySelector(`[data-tab="${tabName}"]`);
        activeButton.classList.add('bg-slate-500');
        activeButton.querySelector('button').classList.add('active');
        document.getElementById(tabName).classList.remove('hidden');
    }

    // Set default tab
    activateTab(defaultTab);

    // Add event listeners to buttons
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const tabName = button.getAttribute('data-tab');
            activateTab(tabName);
        });
    });
});




