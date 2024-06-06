/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            nunito: 'Nunito, sans-serif'
        },
        colors: {
            'white-light-primary': '#F5F8FA',
            'white-light-secondary': '#D3E2E5',

            'blue-dark-primary': '#0D3B66',
            'blue-light-primary': '#114A80',

            'red-primary': '#F15156',
            'red-primary-light': '#FC8686',
            'red-secondary': '#E44449',
            'red-seconday-light': '#FDECED',

            'yellow-primary': '#F4D35E',
            'orange-primary': '#F27006',

            'green-primary': '#3CDC8C',

            'gray-primary': '#8FA7B2'
        }
    },
  },
  plugins: [
  ],
}

