/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "src/*.{html,js}",
    'node_modules/preline/dist/*.js',
    "./includes/header.php",
    "./includes/sidebar.php",
    "./includes/footer.php",
    "./account login/",
    "./register/",
    "./dashboard/",
    "./settings/",
    "./official and staff/",
    "./residents record/",
    "./certifications/",
    "./certifications/certificates/",
    "./certifications/barangay certifications/",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Raleway', 'sans-serif'], // Define Raleway as the default sans font
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
};
