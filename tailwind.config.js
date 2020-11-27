module.exports = {
  purge: [
    './**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      animation: {
        'bounce-slow': 'bounce 3s infinite',
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
