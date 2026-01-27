/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./template-parts/**/*.php",
    "./*.php",
    "./js/*.js"
  ],
  theme: {
    container: {
      center: true,
      
    },
    extend: {
      colors: {
        primary: '#efede7',
        secondary: '#5c5c5c',
        orange: '#FF8110',
        white: '#FFFFFF',
        black: '#000000',
      },
      fontFamily: {
        inter: ['Inter', 'sans-serif'],
        nunito: ['Nunito Sans', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
