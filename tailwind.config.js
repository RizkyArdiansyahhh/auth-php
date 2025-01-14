/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./**/*.php"],
  theme: {
    extend: {
      container: {
        center: "true",
        padding: "16px",
      },
      colors: {
        primary: "#949EFF",
        secondary: "#5352EC",
      },
    },
  },
  plugins: [],
};
