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
            'grey-light': '#EAEBEB',
            'blue-light': '#E6E5FF',
          },
      },
  },
  plugins: []
}
