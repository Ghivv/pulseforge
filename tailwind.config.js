import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/css/**/*.css",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                cyan: {
                    400: "#00FFE5",
                    500: "#00E6CE",
                    600: "#00CCBA",
                },
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
