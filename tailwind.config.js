/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#C00000",
        "primary-light": "#DE3C3C",
        accent: "#F7B32D",
      },
      fontFamily: {
        title: [" Poppins", "sans-serif"],
        content: ["Roboto ", "sans-serif"],
      },
      gridTemplateColumns: {
        card: "repeat(auto-fit, minmax(100px,1fr))",
      },
      gridTemplateRows: {
        "mobile-hero": "max-content 1fr",
      },
    },
  },
  plugins: [],
};
