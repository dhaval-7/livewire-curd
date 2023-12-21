import path from path;

module.exports = {
    entry: {
        main: "./resources/js/app.js",
        external1: "./public/admin/vendors/base/vendor.bundle.base.js",
        external2: "./public/admin/vendors/chart.js/Chart.min.js",
        external3: "./public/admin/vendors/datatables.net/jquery.dataTables.js",
        external4:
            "./public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js",
        external5: "./public/admin/js/off-canvas.js",
        external6: "./public/admin/js/hoverable-collapse.js",
        external7: "./public/admin/js/template.js",
        external8: "./public/admin/js/dashboard.js",
        external9: "./public/admin/js/data-table.js",
        external10: "./public/admin/js/jquery.dataTables.js",
        external11: "./public/admin/js/dataTables.bootstrap4.js",
        external12: "./public/admin/js/jquery.cookie.js",
    },
    output: {
        filename: "public/js/theme.bundle.js",
        path: path.resolve(__dirname),
    },
    module: {
        rules: [
            // Add any rules for JS or other file types as needed
        ],
    },
};
