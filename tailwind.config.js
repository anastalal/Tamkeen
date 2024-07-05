import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                ping: ['Ping','sans-serif'],
                'Rubik': ['Rubik', 'sans-serif'],
            },
            colors:{
              'green': {
                '50': '#f6faf3',
                '100': '#e9f5e3',
                '200': '#d3eac8',
                '300': '#afd89d',
                '400': '#82bd69',
                '500': '#61a146',
                '600': '#4c8435',
                '700': '#3d692c',
                '800': '#345427',
                '900': '#2b4522',
                '950': '#13250e',
            },
            'pink': {
                '50': '#fdf3f6',
                '100': '#fbe8ed',
                '200': '#f7d4df',
                '300': '#efb2c3',
                '400': '#e27395',
                '500': '#d85b84',
                '600': '#c33b6f',
                '700': '#a42c5c',
                '800': '#892853',
                '900': '#76254b',
                '950': '#411026',
            },
    
            }
        },
    },

    plugins: [
        require("@tailwindcss/forms")({
            // strategy: 'base', // only generate global styles
            strategy: 'class', // only generate classes
          }),
        // forms

    ],
};
