/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "src/*.{html,js}",
    'node_modules/preline/dist/*.js',
    './includes/*.php',
    './feature/**/*.php',
    './request_document/**/*.php',
    './account login/*.php',
    './register/*.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
};
