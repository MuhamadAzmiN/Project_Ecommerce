import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
        './node_modules/tailgrids/**/*.js',
        'node_modules/preline/dist/*.js'  // Pastikan Flowbite ditambahkan di sini
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                boxShadow: {
                    'inner-2': 'inset 0 4px 6px rgba(0, 0, 0, 0.2)',
                  }
            },
            keyframes: {
                "accordion-down": {
                  from: { height: "0" },
                  to: { height: "var(--radix-accordion-content-height)" },
                },
                "accordion-up": {
                  from: { height: "var(--radix-accordion-content-height)" },
                  to: { height: "0" },
                },
              },
              animation: {
                "accordion-down": "accordion-down 0.2s ease-out",
                "accordion-up": "accordion-up 0.2s ease-out",
              },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
        require('tailgrids/plugin'),
        require('preline/plugin')
    ],
};
