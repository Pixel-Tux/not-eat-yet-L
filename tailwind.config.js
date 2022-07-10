/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
    extend: {
        colors: {
            'red-neyl': '#E01710',
            'orange-neyl': '#F64212',
            'yellow-neyl': '#FFA41B',
            'white-neyl': '#F4F2ED',
            'blue-light-neyl': '#02A8CC',
            'blue': '#005082',
            'gray-dark-netl': '#363634',
        }
    },
  },
  plugins: [],
}
