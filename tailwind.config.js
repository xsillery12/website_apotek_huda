/** @type {import('tailwindcss').Config} */
import forms from '@tailwindcss/forms';

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                "main-color": "#30533E",
                "second-color": "#9CDBA6",
                "third-color": "#34A339",
                "fourth-color": "#528553",
                "background": "#F3F4F6",
                "dark-color": "#232321",
            },
            fontFamily: {
                "main-font": ["Open Sans", "sans-serif"],
                "second-font": ["Quicksand", "sans-serif"],
            },
            borderWidth: {
                20: "20px",
            },
            fontSize: {
                mini: ["8px", "10px"],
            },
        },
    },
    plugins: []
};
