/** @type {import('tailwindcss').Config} */
const typography = require("@tailwindcss/typography");

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite-vue/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#eff6ff",
                    100: "#dbeafe",
                    200: "#bfdbfe",
                    300: "#93c5fd",
                    400: "#60a5fa",
                    500: "#3b82f6",
                    600: "#2563eb",
                    700: "#1d4ed8",
                    800: "#1e40af",
                    900: "#1e3a8a",
                    950: "#172554",
                },
                brand: {
                    sage: "#C8D5CB",
                    pink: "#ECDCDE",
                    "sage-light": "#d8e2da",
                    "pink-light": "#f5eaec",
                    "sage-dark": "#b8c4bb",
                    "pink-dark": "#dcccce",
                },
            },

            // that is animation class
            animation: {
                fade: "fadeIn 4s",
            },

            // that is actual animation
            keyframes: (theme) => ({
                fadeIn: {
                    from: { opacity: 0 },
                    to: { opacity: 1 },
                },
            }),
        },

        fontFamily: {
            body: [
                "Inter",
                "ui-sans-serif",
                "system-ui",
                "-apple-system",
                "system-ui",
                "Segoe UI",
                "Roboto",
                "Helvetica Neue",
                "Arial",
                "Noto Sans",
                "sans-serif",
                "Apple Color Emoji",
                "Segoe UI Emoji",
                "Segoe UI Symbol",
                "Noto Color Emoji",
            ],
            sans: [
                "Inter",
                "ui-sans-serif",
                "system-ui",
                "-apple-system",
                "system-ui",
                "Segoe UI",
                "Roboto",
                "Helvetica Neue",
                "Arial",
                "Noto Sans",
                "sans-serif",
                "Apple Color Emoji",
                "Segoe UI Emoji",
                "Segoe UI Symbol",
                "Noto Color Emoji",
            ],
        },
    },
    plugins: [require("flowbite/plugin"), typography],
};
