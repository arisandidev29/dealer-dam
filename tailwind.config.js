/** @type {import('tailwindcss').Config} */
export default {
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors : {
        primary : "#C00000",
        "primary-light" : "#DE3C3C",
        accent : "#F7B32D"
      },
      fontFamily : {
        title : [" Poppins" , "sans-serif"],
        content : ["Roboto " , "sans-serif"]
      },
      gridTemplateRows : {
        "mobile-hero" : "max-content 1fr"
      }
    },
  },
  plugins: [],
}

