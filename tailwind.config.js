import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
	        serif: ['Georgia', 'serif'],
            },
	    colors: {
		primary: '#1E40AF', // Blue
	        secondary: '#FBBF24', // Yellow
	        accent: '#F472B6', // Pink
        	background: '#F9FAFB', // Light Gray
	        text: '#374151', // Dark Gray
                blue: {
                    100: '#ebf8ff',
                    200: '#bee3f8',
                    300: '#90cdf4',
                    400: '#63b3ed',
                    500: '#4299e1',
                    600: '#3182ce',
                    700: '#2b6cb0',
                    800: '#2c5282',
                    900: '#2a4362',
                },
            },
        },
    },

    plugins: [forms],
};
