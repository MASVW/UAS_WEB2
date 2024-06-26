import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation:{
                'bounce-slow': 'bounce 7s infinite'
            },
            height: {
                'custom-38-rem' : '38.75rem',
                'custom-42-rem' : '42rem'
            },
            width:{
                "price": '90%'
            },
            boxShadow: {
                'up-xl': '0px -7px 20px 0px rgba(0, 0, 0, 0.1)',
              }
        },
    },

    plugins: [forms, typography, require('@tailwindcss/aspect-ratio')],
};
