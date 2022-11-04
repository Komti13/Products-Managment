import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/home/css/bootstrap.css',
                'resources/home/css/font-awesome.min.css',
                'resources/home/css/responsive.css',
                'resources/home/css/style.css',
                'resources/css/app.css',

                'resources/home/js/jquery-3.4.1.min.js',
                'resources/home/js/popper.min.js',
                'resources/home/js/bootstrap.js',
                'resources/home/js/custom.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
