/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}"
  ],
  theme: {
    container: {
      center: true,
      padding: '2rem'
    },
    extend: {
      fontSize: {
        xm: '0.88rem'
      },
      width: {
        '22': '5.5rem',
        '104': '26rem',
      },
      height: {
        '16.5': '4.5rem',
        '104': '26rem',
        '148': '37rem',
      },
    },
    backgroundImage: {
      'light-black': 'linear-gradient(to bottom, rgba(34,34,34, 0), rgba(34,34,34, 0.8) 45%, rgba(34,34,34, 1))'
    }
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
    require('daisyui'),
  ],
}

