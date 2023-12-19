import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/pavo/styles.css',

                // JS
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
