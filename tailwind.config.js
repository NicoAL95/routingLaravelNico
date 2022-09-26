/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'xl': '1140px',
    },
    extend: {
      colors:{
        mainBlack: '#1E1E1E',
        secBlack: '#222222',
        superWhite: '#f4faff',
        lovGrey: '#B2B2B2',
        highGrey: '#333333',
        lightGrey: '#A2A2A2',
        superGrey: '#C6C6C6',
        softGreen: '#DCFCE7',
        bluGrey: '#151D48',
        bluPurple: '#5D5FEF',
        darkBlue: '#102542',
      },
      fontFamily: {
        poppins: 'Poppins',
      },
    },
  },
  plugins: [],
}
