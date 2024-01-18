const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',

                black: colors.black,
                white: colors.white,
                gray: colors.trueGray,
                'gray-background': '#f7f8fc',
                'light-background': '#f8f9fa',
                'blue': '#1aab8b',
                'blue-hover': '#f0fdf4',
                'yellow' : '#ffc73c',
                'red' : '#ec454f',
                'red-100' : '#fee2e2',
                'green' : '#47bcd4',
                'teal' : '#47bcd4',
                'green-50': '#f0fdf4',
                'purple' : '#8b60ed',
                'gray-text': '#343a40',
            },
            spacing: {
                22: '5.5rem',
                44: '11rem',
                70: '17.5rem',
                76: '19rem',
                104: '26rem',
                128: '32rem',
                175: '43.75rem',
            },
            maxWidth: {
                custom: '68.5rem',
            },
            boxShadow: {
                card: '4px 4px 15px 0 rgba(36, 37, 38, 0.08)',
                dialog: '3px 4px 15px 0 rgba(36, 37, 38, 0.22)',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
                ram: ['Rambla', 'sans-serif'],
            },
            fontSize: {
                xxs: ['0.625rem', { lineHeight: '1rem' }],
                xxl:['1.75rem',{ lineHeight: '1rem' }],
            },
            fontWeight: {
                bold: ['700'],

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
        require('@tailwindcss/line-clamp'),
    ],
};
