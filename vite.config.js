import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                // bootstrap source
                'resources/bootstrap/scss/bootstrap.scss',

                // stylesheet source
                'resources/scss/stylesheet.scss',

            ],
            refresh: true,
        }),
    ],
});
