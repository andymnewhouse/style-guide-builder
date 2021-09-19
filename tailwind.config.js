const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: colors.white,
            black: colors.black,
            gray: colors.blueGray,
            sapphire: '#246687',
            blue: {
              700: '#1d3d69',
              750: '#1c3c68',
            },
            // 'blue-gray': colors.blueGray,
            // 'cool-gray': colors.coolGray,
            // gray: colors.gray,
            // 'true-gray': colors.trueGray,
            // 'warm-gray': colors.warmGray,
            // red: colors.red,
            // orange: colors.orange,
            // amber: colors.amber,
            // yellow: colors.yellow,
            // lime: colors.lime,
            // green: colors.green,
            // emerald: colors.emerald,
            // teal: colors.teal,
            // cyan: colors.cyan,
            // sky: colors.sky,
            // blue: colors.blue,
            // indigo: colors.indigo,
            // violet: colors.violet,
            // purple: colors.purple,
            // fuchsia: colors.fuchsia,
            // pink: colors.pink,
            // rose: colors.rose,
        },

        extend: {
            fontFamily: {
                sans: ['Lato', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};
