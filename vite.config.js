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
                'resources/admin/css/bootstrap.min.css',
                'resources/admin/css/all.css',
                'resources/admin/css/style.css',
                'resources/admin/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css',
                'resources/admin/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css',
                'resources/admin/plugins/chartjs-bar-chart/chart.css',

                'resources/home/js/jquery-3.4.1.min.js',
                'resources/home/js/popper.min.js',
                'resources/home/js/bootstrap.js',
                'resources/home/js/custom.js',
                'resources/js/app.js',
                'resources/admin/js/all.min.js',
                'resources/admin/js/bootstrap.min.js',
                'resources/admin/js/jquery.min.js',
                'resources/admin/js/jquery.slimscroll.min.js',
                'resources/admin/js/main.js',
                'resources/admin/js/popper.min.js',//
                'resources/admin/plugins/metismenu-3.0.4/assets/js/metismenu.js',
                'resources/admin/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js',
                'resources/admin/plugins/scrollbar/jquery.nicescroll.min.js',
                'resources/admin/plugins/scrollbar/scroll.active.js',
                'resources/admin/plugins/counter/js/counter.js',
                'resources/admin/plugins/chartjs-bar-chart/Chart.min.js',
                'resources/admin/plugins/chartjs-bar-chart/chart.js',
                'resources/admin/plugins/pie_chart/chart.loader.js',
                'resources/admin/plugins/pie_chart/pie.active.js',
            ],
            refresh: true,
        }),
    ],
});
