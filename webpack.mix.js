const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'public/assets/modules/bootstrap/css/bootstrap.min.css',
    'public/assets/css/style.css',
    'public/assets/css/components.css',
], 'public/css/template-guest.css').version();

mix.scripts([
    'public/assets/modules/jquery.min.js',
    'public/assets/modules/popper.js',
    'public/assets/modules/tooltip.js',
    'public/assets/modules/bootstrap/js/bootstrap.min.js',
    'public/assets/modules/nicescroll/jquery.nicescroll.min.js',
    'public/assets/modules/moment.min.js',
    'public/assets/modules/chart.min.js',
    'public/assets/js/stisla.js',
    'public/assets/js/scripts.js',
    'public/assets/js/custom.js',
], 'public/js/template-guest.js').version();

mix.styles([
    'public/assets/modules/bootstrap/css/bootstrap.min.css',
    'public/assets/modules/select2/dist/css/select2.min.css',
    'public/assets/css/style.css',
    'public/assets/css/components.css',
    'public/assets/modules/prism/prism.css',
    'public/assets/modules/izitoast/css/iziToast.min.css',
    'public/assets/modules/datatables/datatables.min.css',
    'public/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',
    'public/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css',
],  'public/css/template-app.css').version();

mix.scripts([
    'public/assets/modules/jquery.min.js',
    'public/assets/modules/popper.js',
    'public/assets/modules/tooltip.js',
    'public/assets/modules/bootstrap/js/bootstrap.min.js',
    'public/assets/modules/nicescroll/jquery.nicescroll.min.js',
    'public/assets/modules/moment.min.js',
    'public/assets/js/stisla.js',
    'public/assets/modules/select2/dist/js/select2.full.min.js',
    'public/assets/modules/sweetalert/sweetalert.min.js',
    'public/assets/modules/prism/prism.js',
    'public/assets/modules/jquery-ui/jquery-ui.min.js',
    'public/assets/modules/izitoast/js/iziToast.min.js',
    'public/assets/js/scripts.js',
    'public/assets/js/custom.js',
    'public/assets/modules/sweetalert/sweetalert.min.js',
    'public/assets/modules/datatables/datatables.min.js',
    'public/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
    'public/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js',
], 'public/js/template-app.js').version();