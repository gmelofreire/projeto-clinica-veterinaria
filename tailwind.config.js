/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primaria': '#3DC1A8',
                'secundaria': '#E8744A',
                'cinza': '#D4D4D4',
            },
        },
    },
    plugins: [],
}