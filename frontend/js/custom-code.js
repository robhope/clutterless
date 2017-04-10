// ------------------------------------------------------------------------
// Mobile Nav Toggle
// ------------------------------------------------------------------------

var btnmobile  = document.querySelector('#sidebar-dropdown a');
var menumobile = document.querySelector('#sidebar-mobile-info');

btnmobile.addEventListener('click' , function(event){
  event.preventDefault();
  btnmobile.classList.toggle('mobile-btn-active');
  menumobile.classList.toggle('mobile-menu-active');
});

// ------------------------------------------------------------------------
// Sidebar Slideout
// ------------------------------------------------------------------------

var btnsidebar  = document.querySelector('#sidebar-name');
var menusidebar = document.querySelector('#sidebar-inner');

btnsidebar.addEventListener('click' , function(event){
  event.preventDefault();
  btnsidebar.classList.toggle('sb-name-active');
  menusidebar.classList.toggle('sb-inner-active');
});