/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/view/index.php',
    './src/view/header.html'
  ],
  theme: {
    extend: {
        colors: {
            'darkish-green': '#ADD1C0', // Your custom color
        },
    },
},
  plugins: [],
}

