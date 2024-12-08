module.exports = {
    content: [
      "./resources/**/*.blade.php", // Termasuk semua file Blade
      "./resources/**/*.js",        // Termasuk semua file JS
      "./resources/**/*.vue",       // Jika Anda menggunakan Vue
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  };
  

  // tailwind.config.js
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        slide: {
          '0%, 33%': { transform: 'translateX(0)' },
          '33.33%, 66.66%': { transform: 'translateX(-100%)' },
          '66.67%, 100%': { transform: 'translateX(-200%)' },
        },
      },
      animation: {
        slide: 'slide 9s infinite',
      },
    },
  },
  plugins: [],
};
