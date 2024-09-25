import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
// import { Ziggy } from '/resources/js/ziggy';
import { ZiggyVue } from 'ziggy-js';
// import axios from 'axios';

// axios.defaults.baseURL = 'http://127.0.0.1:8000';

createInertiaApp({
    resolve: async (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

        const page = await pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || MainLayout

        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // .use(ZiggyVue, Ziggy)
            .use(ZiggyVue)
            .mount(el)
    },
})
