/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "src/*.{html,js}",
    'node_modules/preline/dist/*.js',
    './includes/*.php',
    './admin/**/*.php',
    './request_document/**/*.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Raleway', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
};
