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
        test:'#0c2e2d',
        secondaryColor:'#d9f99d'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

