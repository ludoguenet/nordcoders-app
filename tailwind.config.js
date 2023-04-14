/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    safelist: [
        { pattern: /bg-(green|yellow|sky|slate|red|lime|violet|fuchsia)-(50|100)/ },
        { pattern: /text-(green|yellow|sky|slate|red|lime|violet|fuchsia)-(600)/ },
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}

