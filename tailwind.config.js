/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/view/header.html',
    '.src/view/testfile.html',
    './src/view/footer.html',
    './src/view/admin.php',

  ],
  theme: {
    extend: {
        colors: {
            'darkish-green': '#ADD1C0',
            'light-green': '#EFF5F2'
        },
    },
},
  plugins: [],
}

