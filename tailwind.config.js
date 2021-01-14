const colors = require('tailwindcss/colors');
module.exports = {
    theme: {
        extend: {
            color: {
                gray: colors.trueGray,
            },
        },
    },
    variants: {},
    plugins: [],
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
};
