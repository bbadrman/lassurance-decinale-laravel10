/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './public/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#1E3A8A',
                secondary: '#38BDF8',
                accent: '#F59E0B',
                jaune: '#FBEF27',
                success: '#10B981',
                warning: '#FB923C',
                danger: '#EF4444',
                dark: '#0F172A',
                light: '#F8FAFC',
                surface: '#FFFFFF',
                surfaceHover: '#F1F5F9',
            },
            fontFamily: {
                sans: ['Plus Jakarta Sans', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
