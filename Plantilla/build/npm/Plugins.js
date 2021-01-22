const ../Plantilla/plugins = [
  // jQuery
  {
    from: 'node_modules/jquery/../Plantilla/dist',
    to  : '../Plantilla/plugins/jquery'
  },
  // Popper
  {
    from: 'node_modules/popper.js/../Plantilla/dist',
    to  : '../Plantilla/plugins/popper'
  },
  // Bootstrap
  {
    from: 'node_modules/bootstrap/../Plantilla/dist/js',
    to  : '../Plantilla/plugins/bootstrap/js'
  },
  // Font Awesome
  {
    from: 'node_modules/@fortawesome/fontawesome-free/css',
    to  : '../Plantilla/plugins/fontawesome-free/css'
  },
  {
    from: 'node_modules/@fortawesome/fontawesome-free/webfonts',
    to  : '../Plantilla/plugins/fontawesome-free/webfonts'
  },
  // overlayScrollbars
  {
    from: 'node_modules/overlayscrollbars/js',
    to  : '../Plantilla/plugins/overlayScrollbars/js'
  },
  {
    from: 'node_modules/overlayscrollbars/css',
    to  : '../Plantilla/plugins/overlayScrollbars/css'
  },
  // Chart.js
  {
    from: 'node_modules/chart.js/../Plantilla/dist/',
    to  : '../Plantilla/plugins/chart.js'
  },
  // jQuery UI
  {
    from: 'node_modules/jquery-ui-../Plantilla/dist/',
    to  : '../Plantilla/plugins/jquery-ui'
  },
  // Flot
  {
    from: 'node_modules/flot/../Plantilla/dist/es5/',
    to  : '../Plantilla/plugins/flot'
  },
  // Summernote
  {
    from: 'node_modules/summernote/../Plantilla/dist/',
    to  : '../Plantilla/plugins/summernote'
  },
  // Bootstrap Slider
  {
    from: 'node_modules/bootstrap-slider/../Plantilla/dist/',
    to  : '../Plantilla/plugins/bootstrap-slider'
  },
  {
    from: 'node_modules/bootstrap-slider/../Plantilla/dist/css',
    to  : '../Plantilla/plugins/bootstrap-slider/css'
  },
  // Bootstrap Colorpicker
  {
    from: 'node_modules/bootstrap-colorpicker/../Plantilla/dist/js',
    to  : '../Plantilla/plugins/bootstrap-colorpicker/js'
  },
  {
    from: 'node_modules/bootstrap-colorpicker/../Plantilla/dist/css',
    to  : '../Plantilla/plugins/bootstrap-colorpicker/css'
  },
  // Tempusdominus Bootstrap 4
  {
    from: 'node_modules/tempusdominus-bootstrap-4/build/js',
    to  : '../Plantilla/plugins/tempusdominus-bootstrap-4/js'
  },
  {
    from: 'node_modules/tempusdominus-bootstrap-4/build/css',
    to  : '../Plantilla/plugins/tempusdominus-bootstrap-4/css'
  },
  // Moment
  {
    from: 'node_modules/moment/min',
    to  : '../Plantilla/plugins/moment'
  },
  {
    from: 'node_modules/moment/locale',
    to  : '../Plantilla/plugins/moment/locale'
  },
  // FastClick
  {
    from: 'node_modules/fastclick/lib',
    to  : '../Plantilla/plugins/fastclick'
  },
  // Date Range Picker
  {
    from: 'node_modules/daterangepicker/',
    to  : '../Plantilla/plugins/daterangepicker'
  },
  // DataTables
  {
    from: 'node_modules/pdfmake/build',
    to: '../Plantilla/plugins/pdfmake'
  },
  {
    from: 'node_modules/jszip/../Plantilla/dist',
    to: '../Plantilla/plugins/jszip'
  },
  {
    from: 'node_modules/datatables.net/js',
    to: '../Plantilla/plugins/datatables'
  },
  {
    from: 'node_modules/datatables.net-bs4/js',
    to: '../Plantilla/plugins/datatables-bs4/js'
  },
  {
    from: 'node_modules/datatables.net-bs4/css',
    to: '../Plantilla/plugins/datatables-bs4/css'
  },
  {
    from: 'node_modules/datatables.net-autofill/js',
    to: '../Plantilla/plugins/datatables-autofill/js'
  },
  {
    from: 'node_modules/datatables.net-autofill-bs4/js',
    to: '../Plantilla/plugins/datatables-autofill/js'
  },
  {
    from: 'node_modules/datatables.net-autofill-bs4/css',
    to: '../Plantilla/plugins/datatables-autofill/css'
  },
  {
    from: 'node_modules/datatables.net-buttons/js',
    to: '../Plantilla/plugins/datatables-buttons/js'
  },
  {
    from: 'node_modules/datatables.net-buttons-bs4/js',
    to: '../Plantilla/plugins/datatables-buttons/js'
  },
  {
    from: 'node_modules/datatables.net-buttons-bs4/css',
    to: '../Plantilla/plugins/datatables-buttons/css'
  },
  {
    from: 'node_modules/datatables.net-colreorder/js',
    to: '../Plantilla/plugins/datatables-colreorder/js'
  },
  {
    from: 'node_modules/datatables.net-colreorder-bs4/js',
    to: '../Plantilla/plugins/datatables-colreorder/js'
  },
  {
    from: 'node_modules/datatables.net-colreorder-bs4/css',
    to: '../Plantilla/plugins/datatables-colreorder/css'
  },
  {
    from: 'node_modules/datatables.net-fixedcolumns/js',
    to: '../Plantilla/plugins/datatables-fixedcolumns/js'
  },
  {
    from: 'node_modules/datatables.net-fixedcolumns-bs4/js',
    to: '../Plantilla/plugins/datatables-fixedcolumns/js'
  },
  {
    from: 'node_modules/datatables.net-fixedcolumns-bs4/css',
    to: '../Plantilla/plugins/datatables-fixedcolumns/css'
  },
  {
    from: 'node_modules/datatables.net-fixedheader/js',
    to: '../Plantilla/plugins/datatables-fixedheader/js'
  },
  {
    from: 'node_modules/datatables.net-fixedheader-bs4/js',
    to: '../Plantilla/plugins/datatables-fixedheader/js'
  },
  {
    from: 'node_modules/datatables.net-fixedheader-bs4/css',
    to: '../Plantilla/plugins/datatables-fixedheader/css'
  },
  {
    from: 'node_modules/datatables.net-keytable/js',
    to: '../Plantilla/plugins/datatables-keytable/js'
  },
  {
    from: 'node_modules/datatables.net-keytable-bs4/js',
    to: '../Plantilla/plugins/datatables-keytable/js'
  },
  {
    from: 'node_modules/datatables.net-keytable-bs4/css',
    to: '../Plantilla/plugins/datatables-keytable/css'
  },
  {
    from: 'node_modules/datatables.net-responsive/js',
    to: '../Plantilla/plugins/datatables-responsive/js'
  },
  {
    from: 'node_modules/datatables.net-responsive-bs4/js',
    to: '../Plantilla/plugins/datatables-responsive/js'
  },
  {
    from: 'node_modules/datatables.net-responsive-bs4/css',
    to: '../Plantilla/plugins/datatables-responsive/css'
  },
  {
    from: 'node_modules/datatables.net-rowgroup/js',
    to: '../Plantilla/plugins/datatables-rowgroup/js'
  },
  {
    from: 'node_modules/datatables.net-rowgroup-bs4/js',
    to: '../Plantilla/plugins/datatables-rowgroup/js'
  },
  {
    from: 'node_modules/datatables.net-rowgroup-bs4/css',
    to: '../Plantilla/plugins/datatables-rowgroup/css'
  },
  {
    from: 'node_modules/datatables.net-rowreorder/js',
    to: '../Plantilla/plugins/datatables-rowreorder/js'
  },
  {
    from: 'node_modules/datatables.net-rowreorder-bs4/js',
    to: '../Plantilla/plugins/datatables-rowreorder/js'
  },
  {
    from: 'node_modules/datatables.net-rowreorder-bs4/css',
    to: '../Plantilla/plugins/datatables-rowreorder/css'
  },
  {
    from: 'node_modules/datatables.net-scroller/js',
    to: '../Plantilla/plugins/datatables-scroller/js'
  },
  {
    from: 'node_modules/datatables.net-scroller-bs4/js',
    to: '../Plantilla/plugins/datatables-scroller/js'
  },
  {
    from: 'node_modules/datatables.net-scroller-bs4/css',
    to: '../Plantilla/plugins/datatables-scroller/css'
  },
  {
    from: 'node_modules/datatables.net-select/js',
    to: '../Plantilla/plugins/datatables-select/js'
  },
  {
    from: 'node_modules/datatables.net-select-bs4/js',
    to: '../Plantilla/plugins/datatables-select/js'
  },
  {
    from: 'node_modules/datatables.net-select-bs4/css',
    to: '../Plantilla/plugins/datatables-select/css'
  },

  // Fullcalendar
  {
    from: 'node_modules/@fullcalendar/core/',
    to  : '../Plantilla/plugins/fullcalendar'
  },
  {
    from: 'node_modules/@fullcalendar/bootstrap/',
    to  : '../Plantilla/plugins/fullcalendar-bootstrap'
  },
  {
    from: 'node_modules/@fullcalendar/daygrid/',
    to  : '../Plantilla/plugins/fullcalendar-daygrid'
  },
  {
    from: 'node_modules/@fullcalendar/timegrid/',
    to  : '../Plantilla/plugins/fullcalendar-timegrid'
  },
  {
    from: 'node_modules/@fullcalendar/interaction/',
    to  : '../Plantilla/plugins/fullcalendar-interaction'
  },
  // icheck bootstrap
  {
    from: 'node_modules/icheck-bootstrap/',
    to  : '../Plantilla/plugins/icheck-bootstrap'
  },
  // inputmask
  {
    from: 'node_modules/inputmask/../Plantilla/dist/',
    to  : '../Plantilla/plugins/inputmask'
  },
  // ion-rangeslider
  {
    from: 'node_modules/ion-rangeslider/',
    to  : '../Plantilla/plugins/ion-rangeslider'
  },
  // JQVMap (jqvmap-novulnerability)
  {
    from: 'node_modules/jqvmap-novulnerability/../Plantilla/dist/',
    to  : '../Plantilla/plugins/jqvmap'
  },
  // jQuery Mapael
  {
    from: 'node_modules/jquery-mapael/js/',
    to  : '../Plantilla/plugins/jquery-mapael'
  },
  // Raphael
  {
    from: 'node_modules/raphael/',
    to  : '../Plantilla/plugins/raphael'
  },
  // jQuery Mousewheel
  {
    from: 'node_modules/jquery-mousewheel/',
    to  : '../Plantilla/plugins/jquery-mousewheel'
  },
  // jQuery Knob
  {
    from: 'node_modules/jquery-knob-chif/../Plantilla/dist/',
    to  : '../Plantilla/plugins/jquery-knob'
  },
  // pace-progress
  {
    from: 'node_modules/@lgaitan/pace-progress/../Plantilla/dist/',
    to  : '../Plantilla/plugins/pace-progress'
  },
  // Select2
  {
    from: 'node_modules/select2/../Plantilla/dist/',
    to  : '../Plantilla/plugins/select2'
  },
  {
    from: 'node_modules/@ttskch/select2-bootstrap4-theme/../Plantilla/dist/',
    to  : '../Plantilla/plugins/select2-bootstrap4-theme'
  },
  // Sparklines
  {
    from: 'node_modules/sparklines/source/',
    to  : '../Plantilla/plugins/sparklines'
  },
  // SweetAlert2
  {
    from: 'node_modules/sweetalert2/../Plantilla/dist/',
    to  : '../Plantilla/plugins/sweetalert2'
  },
  {
    from: 'node_modules/@sweetalert2/theme-bootstrap-4/',
    to  : '../Plantilla/plugins/sweetalert2-theme-bootstrap-4'
  },
  // Toastr
  {
    from: 'node_modules/toastr/build/',
    to  : '../Plantilla/plugins/toastr'
  },
  // jsGrid
  {
    from: 'node_modules/jsgrid/../Plantilla/dist',
    to: '../Plantilla/plugins/jsgrid'
  },
  {
    from: 'node_modules/jsgrid/demos/',
    to: '../Plantilla/plugins/jsgrid/demos'
  },
  // flag-icon-css
  {
    from: 'node_modules/flag-icon-css/css',
    to: '../Plantilla/plugins/flag-icon-css/css'
  },
  {
    from: 'node_modules/flag-icon-css/flags',
    to: '../Plantilla/plugins/flag-icon-css/flags'
  },
  // bootstrap4-duallistbox
  {
    from: 'node_modules/bootstrap4-duallistbox/../Plantilla/dist',
    to: '../Plantilla/plugins/bootstrap4-duallistbox/'
  },
  // filterizr
  {
    from: 'node_modules/filterizr/../Plantilla/dist',
    to: '../Plantilla/plugins/filterizr/'
  },
  // ekko-lightbox
  {
    from: 'node_modules/ekko-lightbox/../Plantilla/dist',
    to: '../Plantilla/plugins/ekko-lightbox/'
  },
  // bootstrap-switch
  {
    from: 'node_modules/bootstrap-switch/../Plantilla/dist',
    to: '../Plantilla/plugins/bootstrap-switch/'
  },
  // jQuery Validate
  {
    from: 'node_modules/jquery-validation/../Plantilla/dist/',
    to  : '../Plantilla/plugins/jquery-validation'
  },
  // bs-custom-file-input
  {
    from: 'node_modules/bs-custom-file-input/../Plantilla/dist/',
    to  : '../Plantilla/plugins/bs-custom-file-input'
  },
]

module.exports = ../Plantilla/plugins
