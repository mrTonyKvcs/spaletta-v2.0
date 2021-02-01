const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                gold: '#ffb606',
                gray73: '#737373',
                gray58: '#585858',
                gray48: '#484848',
                gray2e: '#2e2e2e'
            },

            height: {
                '200': '50rem',
            },

            width: {
                '108': '27rem'
            },

            fontSize: {
                title: '5rem',
            },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};