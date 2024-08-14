import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primaria': '#3DC1A8',
                'primaria-hover': '#3BB9A2',
                'primaria-dark': '#267567',
                'secundaria': '#E8744A',
                'secundaria-hover': '#E07048',
                'secundaria-dark': '#9C4E32',
                'cinza': '#D4D4D4',
                'background': '#F5F8FA',
            },
        },
    },

    plugins: [forms],
};