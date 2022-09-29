/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/new.blade.php",
    './node_modules/tw-elements/dist/js/index.min.js'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ],
}
