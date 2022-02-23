module.exports = {
  mode: "jit",
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,md,html,vue,js}',
  ]),
  theme: {
      colors: {
        'orange': {
          50:'#FFE2D5',
          100:'#FFC5AA',
          200:'#FFA980',
          300:'#FF8C55',
          400:'#FF6F2A',
          500:'#FF5200'
        },
        'purple': {
          50: "#FDFAFF",
          500:'#8B00C8'
        },
        'red': {
          50:'#FFF7F9',
          500:'#E4002B'
        },
        'blue': {
          50:'#F7FCFF',
          500:'#0075C9'
        },
        'green': {
          50:"#F7FFFB",
          500:'#009946'
        },
        'gray': {
          100: "#EDECEB",
          700: "#6B6867",
          800: "#42403E",
          900: "#0A0A0A",
        },
        'white': '#ffffff',
      },
      fontFamily: {
        'sans': ['Gilmer', 'sans-serif'],
        'cursive': ['Auto Rich', 'cursive'],
      },
      extend: {
        borderWidth: {
          '3': '3px',
        },
        lineHeight: {
          'extra-loose': '3',
          'full': '100%',
        },
        boxShadow: {
          'primary': '-12px 12px 0px 0px rgba(255, 82, 0, 1)',
          'secondary': '0px 12px 32px 8px rgba(0, 0, 0, 0.08)',
        },
        spacing:{
          '26': '6.5rem'
        }
      },
  },
  plugins: [],
};
