import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import flowbite from 'flowbite/plugin';
import colors from "tailwindcss/colors"

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                "glass-light": "0 4px 6px rgba(0, 0, 0, 0.1)",
                "glass-dark": " 0 4px 6px rgba(255, 255, 255, 0.1)",
            },
        },
        colors: {
            ...colors,
            light: {
                bg: "#ffffff",
                title: "#01113d",
                link: "#0338c9",
                detail: "#eca516",
                text: "#424242",
            },
            dark: {
                bg: "#01113d",
                title: "#ffffff",
                link: "#eca516",
                detail: "#0338c9",
                text: "#e0e0e0",
            },
        },
    },

    plugins: [forms, flowbite],
};
