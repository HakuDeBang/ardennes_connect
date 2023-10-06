/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["src/view/*.php", "src/view/template/*.php","src/assets/js/*.js"],
  theme: {
    extend: {
      colors: {
        darkBlue: "#004a93",
        lightBlue: "#00abe7",
        yellowLogo: "#ffdf00",
        redLogo: "#dc2f34",
        lightGray: "#F1F1F1",
        darkGray: "#CAC6C6"
      },
      fontFamily: {
        league: ['League Spartan'],
      },
    },
  },
  plugins: [],
};
