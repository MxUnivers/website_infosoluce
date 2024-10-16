import "./bootstrap";
import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3';
import { ZiggyVue } from 'ziggi-vue'
import { Ziggy } from './ziggy'
import Swal from "sweetalert2";
import ElementPlus from 'element-plus';
import 'element-plus/dist/index.css';
import * as ElementPlusIconsVue from '@element-plus/icons-vue';
import fr from 'element-plus/lib/locale/lang/fr';
import { createPinia } from 'pinia';
import piniaPluginPersistedstate from 'pinia-plugin-persistedstate';
import { createI18n } from 'vue-i18n';
import messages from '@/lang/messages.js';

// Import Swiper and styles
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/swiper-bundle.css';

// Configure the i18n
const i18n = createI18n({
    locale: 'fr',
    fallbackLocale: 'fr',
    messages,
});

window.Swal = Swal;

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, App, props, plugin }) {
        const pinia = createPinia();
        pinia.use(piniaPluginPersistedstate);

        const app = createApp({ render: () => h(App, props) });

        app
            .use(plugin)
            .use(pinia) // Use Pinia
            .use(ElementPlus, { locale: fr }, ElementPlusIconsVue)
            .use(i18n)
            .use(ZiggyVue, Ziggy)
            .component('Link', Link)
            .component('Head', Head)
            .component('Swiper', Swiper) // Register Swiper component globally
            .component('SwiperSlide', SwiperSlide) // Register SwiperSlide component globally
            .mixin({ methods: { route } })
            .mount(el);
    },
});
