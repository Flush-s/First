/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                close: "url('../../../public/close.svg')",
            },
        },
        fontFamily: {
            mainfont: ["Jura"],
        },
    },
    plugins: [],
};
