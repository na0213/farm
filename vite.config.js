import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/index.css',
                'resources/css/welcome.css',
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/js/three.js',
                'resources/js/panolens.js',
                'resources/js/three.min.js',
                'resources/js/panolens.min.js',
                'resources/js/infospot.js',
                'resources/js/welcome.js',
            ],
            refresh: true,
        }),
    ],
});
