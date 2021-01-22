const ../Plantilla/plugins = [
  // AdminLTE ../Plantilla/dist
  {
    from: '../Plantilla/dist/css/',
    to  : 'docs/assets/css/'
  },
  {
    from: '../Plantilla/dist/js/',
    to  : 'docs/assets/js/'
  },
  // jQuery
  {
    from: 'node_modules/jquery/../Plantilla/dist/',
    to  : 'docs/assets/../Plantilla/plugins/jquery/'
  },
  // Popper
  {
    from: 'node_modules/popper.js/../Plantilla/dist/',
    to  : 'docs/assets/../Plantilla/plugins/popper/'
  },
  // Bootstrap
  {
    from: 'node_modules/bootstrap/../Plantilla/dist/js/',
    to  : 'docs/assets/../Plantilla/plugins/bootstrap/js/'
  },
  // Font Awesome
  {
    from: 'node_modules/@fortawesome/fontawesome-free/css/',
    to  : 'docs/assets/../Plantilla/plugins/fontawesome-free/css/'
  },
  {
    from: 'node_modules/@fortawesome/fontawesome-free/webfonts/',
    to  : 'docs/assets/../Plantilla/plugins/fontawesome-free/webfonts/'
  },
  // overlayScrollbars
  {
    from: 'node_modules/overlayscrollbars/js/',
    to  : 'docs/assets/../Plantilla/plugins/overlayScrollbars/js/'
  },
  {
    from: 'node_modules/overlayscrollbars/css/',
    to  : 'docs/assets/../Plantilla/plugins/overlayScrollbars/css/'
  }
]

module.exports = ../Plantilla/plugins
