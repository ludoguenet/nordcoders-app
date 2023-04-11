/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    safelist: [
        'bg-green-50',
        'text-green-600',
        'bg-green-100',
        'bg-cyan-50',
        'text-cyan-600',
        'bg-cyan-100',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}

