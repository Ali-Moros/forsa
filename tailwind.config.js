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
                primaryColor: "#0E2F56",
                secondaryColor: "#FFFFFF",
                grayText: "#3E3E3E",
                grayBorder: "#AFAFAF",
                cardFill: "#FCFCFC",
                btnHoverFill: "rgba(0, 35, 77, 0.12)",
                borderHover: "rgba(1, 36, 79, 0.46)",
                primaryHover: "#0a213c",
            },

            fontFamily: {
                cairo: ["Cairo", "sans-serif"],
            },
        },
    },
    plugins: [require("daisyui")],
};
