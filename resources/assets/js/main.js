// Vendor libraries
// jQuery
window.$ = window.jQuery = require('jquery');

// Tether (required by Bootstrap 4)
window.Tether = require('tether');

// Bootstrap 4
require('bootstrap');

// AdminPlus Lite
var AdminPlus = require('adminplus');

// Initialize Sidebars
AdminPlus.Sidebar.init();

// Initialize Scrollbars
AdminPlus.Scrollable();