module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
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
      },
      fontFamily: {
        'sans': ['Gilmer', 'sans-serif'],
      },
      fontSize:{
        'sm':[
          '20px'
        ],
        'base':['24px',{
          lineHeight: '38px',
         }],
        '6xl': ['64px', {
          lineHeight: '70px',
        }],
      },
      extend: {
      },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
