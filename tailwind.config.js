module.exports = {
  mode: 'jit',
  purge: {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      // '2xl': '1440px',
    },
    extend: {
      colors: {
        'c-blue': {
          100: '#00C6F2',
          200: '#1851FF',
          300: '#160866',
        },
      },
      fontFamily: {
        whyte: ['Whyte', 'sans-serif'],
        prox: ['proxima-nova', 'sans-serif'],
        gt: ['GT America', 'serif'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
