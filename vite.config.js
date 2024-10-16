import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

// import path
import path from 'path';

export default defineConfig({
    define: {
        __VUE_I18N_PROD_DEVTOOLS__: false,
        __VUE_I18N_FULL_INSTALL__: false,
        __VUE_I18N_LEGACY_API__: false,
        __INTLIFY_PROD_DEVTOOLS__: false,
    },
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true
        }),
    ],
    resolve: {
        alias: {
            ziggy: path.resolve(__dirname, 'vendor/tightenco/ziggy/src/js'),
            'ziggi-vue': path.resolve(
                __dirname,
                'vendor/tightenco/ziggy/src/js/vue'
            )
        }
    },
    build: {
        rollupOptions: {
            external: 'ziggy'
        },
        manifest: true,
    },
    optimizeDeps: {
        include: ['vue-i18n'] // Ensure vue-i18n is included in the optimization
    }
});
