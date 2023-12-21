import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        port: 3030,
    },
    plugins: [
        laravel({
            input: ["./resources/js/app.js"],
            refresh: true,
        }),
    ],
    // build: {
    //     rollupOptions: {
    //         lib: {
    //             name: "testfile",
    //             fileName: "testfile",
    //         },

    //         // output: {
    //         //     assetFileNames: "testfile.[ext]",
    //         //     output: {
    //         //         entryFileNames: "test.js",
    //         //     },
    //         // },
    //     },
    // },
});

// import styleImport from 'vite-plugin-style-import';

// export default defineConfig({
//   plugins: [
//     laravel({
//       input: [
//         'public/admin/vendors/base/vendor.bundle.base.js' ,
//         'public/admin/vendors/chart.js/Chart.min.js',
//         'public/admin/vendors/datatables.net/jquery.dataTables.js',
//         'public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js',
//         'public/admin/js/off-canvas.js',
//         'public/admin/js/hoverable-collapse.js',
//         'public/admin/js/template.js',
//         'public/admin/js/dashboard.js',
//         'public/admin/js/data-table.js',
//         'public/admin/js/jquery.dataTables.js',
//         'public/admin/js/dataTables.bootstrap4.js',
//         'public/admin/js/jquery.cookie.js',
//         'public/css.js',
//       ],
//       refresh: true,
//     }),
// styleImport({
//   libs: [
//     {
//       libraryName: 'mdi',
//       esModule: true,
//       resolveStyle: (name) => `public/admin/vendors/mdi/css/${name}.min.css`,
//     },
//     {
//       libraryName: 'vendor.bundle.base',
//       esModule: true,
//       resolveStyle: (name) => `public/admin/vendors/base/${name}/${name}.css`,
//     },
//     {
//       libraryName: 'datatables.net-bs4',
//       esModule: true,
//       resolveStyle: (name) => `public/admin/vendors/datatables.net-bs4/${name}.css`,
//     },
//     // Add more libraries as needed
//   ],
// }),
//   ],
//   build: {
//     outDir: 'public/js',
//     minify: 'terser',
//     emptyOutDir: true,
//     rollupOptions: {
//       input: './public/adminTheme.js', // Entry file that imports all your JS files
//       output: {
//         entryFileNames: 'app-[hash].js', // Output file name with hash for cache-busting
//       },
//     },
//   },
// });
