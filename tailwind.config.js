import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                ping: ['Ping','sans-serif'],
                'Rubik': ['Rubik', 'sans-serif'],
            },
            colors:{
                'color1': {
                    '50': '#f3f1ff',
                    '100': '#ebe5ff',
                    '200': '#d9ceff',
                    '300': '#bea6ff',
                    '400': '#9f75ff',
                    '500': '#843dff',
                    '600': '#7916ff',
                    '700': '#6b04fd',
                    '800': '#5a03d5',
                    '900': '#4b05ad',
                    '950': '#2c0076',
                },
                'color2': {
                    '50': '#f0f8ff',
                    '100': '#e0f1fe',
                    '200': '#bae4fd',
                    '300': '#7ecefb',
                    '400': '#58c1f8',
                    '500': '#0f9ce8',
                    '600': '#037dc6',
                    '700': '#0463a0',
                    '800': '#085484',
                    '900': '#0d476d',
                    '950': '#082d49',
                },
                'color3': {
                '50': '#fff3ed',
                '100': '#ffe3d4',
                '200': '#ffc3a9',
                '300': '#ff8658',
                '400': '#fe6439',
                '500': '#fc3b13',
                '600': '#ed2109',
                '700': '#c51409',
                '800': '#9c1210',
                '900': '#7e1210',
                '950': '#440607',
            },
        
    
    
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
          require('preline/plugin'),
        // forms

    ],
};
