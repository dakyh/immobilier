import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/styles.css',
                'resources/css/swiper-bundle.min.css',
                'resources/js/main.js',
                'resources/js/swiper-bundle.min.js',
                'resources/js/scrollreveal.min.js'
            ],
            refresh: true,
        }),
    ],
});
