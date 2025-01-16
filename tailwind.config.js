import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
          fontFamily: {
            urbanist: ['Urbanist', ...defaultTheme.fontFamily.sans],
          },
          colors: {
            // Custom pastel color palette
            'pastel-blue': '#A2D2FF',
            'pastel-purple': '#B8B8FF',
            'pastel-pink': '#FFAFCC',
            'pastel-green': '#BDE0FE',
            'pastel-yellow': '#FFE5D4',
            'pastel-gray': '#F0F0F0',
          },
        },
      },
      plugins: [],
    }