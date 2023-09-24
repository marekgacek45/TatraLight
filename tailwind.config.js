/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      screens: {
        'xs': '450px'},
      colors:{
        mainColor:'#16514f',
      
        overlayColor:'#185c5a',
        secondaryColor:'#d9f99d'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

