import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php", "./storage/framework/views/*.php", "./resources/views/**/*.blade.php", "*.{js,ts,jsx,tsx,mdx}"],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    '50': 'rgb(var(--primary-50) / <alpha-value>)',
                    '100': 'rgb(var(--primary-100) / <alpha-value>)',
                    '200': 'rgb(var(--primary-200) / <alpha-value>)',
                    '300': 'rgb(var(--primary-300) / <alpha-value>)',
                    '400': 'rgb(var(--primary-400) / <alpha-value>)',
                    '500': 'rgb(var(--primary-500) / <alpha-value>)',
                    '600': 'rgb(var(--primary-600) / <alpha-value>)',
                    '700': 'rgb(var(--primary-700) / <alpha-value>)',
                    '800': 'rgb(var(--primary-800) / <alpha-value>)',
                    '900': 'rgb(var(--primary-900) / <alpha-value>)',
                    '950': 'rgb(var(--primary-950) / <alpha-value>)',
                },
            },
            backgroundColor: {
                'sidebar': 'var(--sidebar-background)',
            },
        },
    },

    plugins: [forms, typography],
};
