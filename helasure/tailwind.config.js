import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#2563eb', // Blue-600
                    light: '#3b82f6',   // Blue-500
                    dark: '#1e40af',    // Blue-800
                },
                secondary: {
                    DEFAULT: '#64748b', // Gray-500
                    light: '#94a3b8',   // Gray-400
                    dark: '#475569',    // Gray-600
                },
                accent: {
                    DEFAULT: '#9333ea', // Purple-600
                    light: '#a855f7',   // Purple-500
                    dark: '#7e22ce',    // Purple-800
                },
                danger: {
                    DEFAULT: '#dc2626', // Red-600
                    light: '#ef4444',   // Red-500
                    dark: '#b91c1c',    // Red-800
                },
                success: {
                    DEFAULT: '#16a34a', // Green-600
                    light: '#22c55e',   // Green-500
                    dark: '#15803d',    // Green-800
                },
                warning: {
                    DEFAULT: '#f59e0b', // Yellow-500
                    light: '#fbbf24',   // Yellow-400
                    dark: '#d97706',    // Yellow-600
                }
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
