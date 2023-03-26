/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js"
      ],
  theme: {
    extend: {
        backgroundImage: {
            'mood-image': "url('/public/images/mood-image.png')",
          },
        colors: {
            'black': '#090A0A',
            'grey': '#7C7E80',
            'grey-light': '#EAEBEB',
            'blue-light': '#E6E5FF',
            'hover': '#939596',
          },
      },
  },
  plugins: []
}
