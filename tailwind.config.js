module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        colors: {
            primary: '#0A0D14',
            secondary: '#fff',
            third: '#fafafa'
        },
        fontFamily: {
            sans: ['Albert Sans', 'sans-serif'],
            serif: ['Poppins', 'serif'],
        },
        container: {
            center: true,
            padding: '12px',
        },
        extend: {
            screens: {
                '2xl': '1320px',
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
