import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css', // path CSS Anda
                'resources/js/script.js'   // path JS Anda
            ],
            refresh: true,
        }),
    ],
});
