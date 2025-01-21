import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: process.env.VITE_HOST || 'localhost', // Load from .env or fallback to localhost
        port: process.env.VITE_PORT || 5173,       // Load from .env or fallback to 5173
    },
});
