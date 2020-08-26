module.exports = {
    purge: {
        content: [
            './resources/**/*.blade.php',
            './resources/**/*.scss',
            './resources/**/*.js',
        ],
    },
    theme: {
        extend: {
            minWidth: {
                '56': '14rem',
            }
        },
    },
    variants: {
        backgroundColor: ['responsive', 'hover', 'focus', 'disabled'],
        textColor: ['responsive', 'hover', 'focus', 'disabled'],
    },
    plugins: [],
};
