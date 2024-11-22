/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './src/view/components/header.html',
    './src/view/components/footer.html',
    './src/view/admin.php',
    './src/view/components/imgcarousel.html',
    './src/view/products.php',
    './src/view/index.php',
    './src/view/plantcare.php',
    './src/view/plog.php',
    './src/view/contactus.php',
    '.src/view/productDetails.php',
    './src/view/login.php',
    './src/view/plantquiz.php',
    './src/view/plantcare.php',
    

  ],
  theme: {
    extend: {
        colors: {
            'darkish-green': '#ADD1C0',
            'light-green': '#EFF5F2',
        },
    },
},
  plugins: [],
}

