/** @type {import('tailwindcss').Config} */

import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/awcodes/overlook/resources/**/*.blade.php",
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
