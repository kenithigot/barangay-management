/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "src/*.{html,js}",
    'node_modules/preline/dist/*.js',
    './includes/*.php',
    './admin/**/*.php'
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
