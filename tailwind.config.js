/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["src/view/*.php", "src/view/template/*.php","src/assets/js/*.js"],
  theme: {
    extend: {
      colors: {
        lightBlue: "#00abe7",
        darkBlue: "#004a93",
        yellow: "#ffdf00",
        red: "#dc2f34",
        lightGray: "#F1F1F1",
        darkGray: "#CAC6C6"
      },
    },
  },
  plugins: [],
};
