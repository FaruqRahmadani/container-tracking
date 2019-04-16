// core js
require('./bootstrap');
require('jquery.easing');
require('./sb-admin-2');
// dataTable
require('datatables.net/js/jquery.dataTables');
require('datatables.net-bs4/js/dataTables.bootstrap4');
require('./custom/dataTable');
// chartJs
require('chart.js/dist/Chart');
// chartJs demo
require('./demo/chart-area-demo')
require('./demo/chart-pie-demo');
require('./demo/chart-bar-demo');
// select2
require('select2/dist/js/select2.full');
require('./custom/select2');
//sweetalert
require('sweetalert/dist/sweetalert.min');
require('bootstrap-notify/bootstrap-notify');
require('./custom/alert');
require('./custom/monitoring');
require('./custom/misc');

// vue.js
window.Vue = require('vue');
