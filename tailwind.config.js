/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    extend: {
      colors: {
        primary: '#1e40af',
        secondary: '#00BBF0',
        info: '#a5f3fc',
        warning: '#3730a3'
      },
      screens: {
        '2xl': '1320px'
      }
    },
  },
  plugins: [],
}
