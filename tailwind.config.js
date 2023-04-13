/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    safelist: [
        'bg-green-100',
        'text-green-800',
        'bg-cyan-100',
        'text-cyan-800',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}

