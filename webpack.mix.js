// const mix = require('laravel-mix');
// import mix from 'laravel-mix';

// mix.js([
//     'resources/js/main.js',
//     'public/admin/vendors/base/vendor.bundle.base.js',
//     'public/admin/vendors/chart.js/Chart.min.js',
//     'public/admin/vendors/datatables.net/jquery.dataTables.js',
//     'public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js',
//     'public/admin/js/off-canvas.js',
//     'public/admin/js/hoverable-collapse.js',
//     'public/admin/js/template.js',
//     'public/admin/js/dashboard.js',
//     'public/admin/js/data-table.js',
//     'public/admin/js/jquery.dataTables.js',
//     'public/admin/js/dataTables.bootstrap4.js',
//     'public/admin/js/jquery.cookie.js'
// ], 'public/js/app.js');

// const mix = require('laravel-mix');
import mix from "laravel-mix";

// mix.js('resources/js/main.js', 'public/js/app.js')
//    .js('resources/js/component1.js', 'public/js/app.js')
//    .js('resources/js/component2.js', 'public/js/app.js')
//    .postCss('resources/css/app.css', 'public/css/app.css');

mix.js("resources/js/main.js", "./resources/js/app.js ")
    .js(
        "/public/admin/vendors/base/vendor.bundle.base.js",
        "./resources/js/app.js"
    )
    .js("/public/admin/vendors/chart.js/Chart.min.js", "./resources/js/app.js")
    .js(
        "/public/admin/vendors/datatables.net/jquery.dataTables.js",
        "./resources/js/app.js"
    )
    .js(
        "/public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js",
        "./resources/js/app.js"
    )
    .js("/public/admin/js/off-canvas.js", "./resources/js/app.js")
    .js("/public/admin/js/hoverable-collapse.js", "./resources/js/app.js")
    .js("/public/admin/js/template.js", "./resources/js/app.js")
    .js("/public/admin/js/dashboard.js", "./resources/js/app.js")
    .js("/public/admin/js/data-table.js", "./resources/js/app.js")
    .js("/public/admin/js/jquery.dataTables.js", "./resources/js/app.js")
    .js("/public/admin/js/dataTables.bootstrap4.js", "./resources/js/app.js")
    .js("/public/admin/js/jquery.cookie.js", "./resources/js/app.js")

    .styles(
        [
            "public/admin/vendors/mdi/css/materialdesignicons.min.css",
            "public/admin/vendors/base/vendor.bundle.base.css",
            "public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css",
            "public/admin/css/style.css",
        ],
        "public/css/app.css"
    );
