/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "index.php"
  ],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      screens: {
        "2xl": "1300px",
      },
    },
  },
  plugins: [],
};

