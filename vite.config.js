import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const host = 'my-app.test'; 

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: { 
        hmr: {
            host: 'livewire.demo',
        },
    }, 
});
