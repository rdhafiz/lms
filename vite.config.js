import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/bootstrap/scss/bootstrap.scss',
                'resources/scss/stylesheet.scss',
            ],
            refresh: true,
        }),
    ],
});
