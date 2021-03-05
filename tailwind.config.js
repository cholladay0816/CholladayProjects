const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'media',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                rose: colors.rose,
                amber: colors.amber,
                lightBlue: colors.lightBlue,
                dark: '#1D1D1D',
                darker: '#0D0D0D',
            },
            opacity: {
                '10': '10%',
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
	    require('@tailwindcss/forms')
	],
};
