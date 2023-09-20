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
        secondaryColor:'#FFFF00'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

