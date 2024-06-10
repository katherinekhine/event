/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}", "./js/**/*.js", "./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        "color-bg": "#0C1864",
        "color-primary": "#00B2D1",
        "color-secondary": "#0090B3",
        "color-white": "#fff",
        "color-black": "#000000",
      },
    },
    container: {
      center: true,
      padding: {
        DEFAULT: "20px",
      },
    },
  },
  plugins: [],
};
