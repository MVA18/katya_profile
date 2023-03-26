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
            'background-secondary': '#292F32',
            'black': '#090A0A',
            'white': '#FCFCFC',
            'grey': '#7C7E80',
            'grey-light': '#EAEBEB',
            'blue-light': '#E6E5FF',
            'purple-dark': '#1C17FF',
            'hover': '#939596',
          },
      },
  },
  plugins: []
}
