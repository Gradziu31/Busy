/* eslint-disable */
// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import Swiper from 'swiper/dist/js/swiper.min';
import lightbox2 from 'lightbox2/dist/js/lightbox';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


//toggle menu
document.querySelector(".nav-bar__menu-btn").addEventListener('click', function(e){
  e.stopPropagation();
  document.querySelector(".nav-bar").classList.toggle('nav-bar_open');
  toggleSlide(document.querySelector('.nav-bar__nav'));  
}, false);

document.querySelector(".nav-bar__nav").addEventListener('click', function(e){
  e.stopPropagation();
}, false);

//close menu if is's not focused
document.addEventListener("click", function (){
  if( document.querySelector(".nav-bar").classList.contains('nav-bar_open') ){
     toggleSlide(document.querySelector('.nav-bar__nav'));
     document.querySelector(".nav-bar").classList.remove('nav-bar_open');
  }  
}, false);

var getHeight = function(el) {
  var el_style      = window.getComputedStyle(el),
      el_display    = el_style.display,
      el_position   = el_style.position,
      el_visibility = el_style.visibility,
      el_max_height = el_style.maxHeight.replace('px', '').replace('%', ''),
      wanted_height = 0;
  if(el_display !== 'none' && el_max_height !== '0') {
    return el.offsetHeight;
  }
  el.style.position   = 'absolute';
  el.style.visibility = 'hidden';
  el.style.display    = 'block';
  wanted_height     = el.offsetHeight;
  el.style.display    = el_display;
  el.style.position   = el_position;
  el.style.visibility = el_visibility;
  return wanted_height;
};
var toggleSlide = function(el) {
  var el_max_height = 0;
  if(el.getAttribute('data-max-height')) {
    if(el.style.maxHeight.replace('px', '').replace('%', '') === '0') {
      el.style.maxHeight = el.getAttribute('data-max-height');
    } else {
      el.style.maxHeight = '0';
    }
  } else {
    el_max_height                  = getHeight(el) + 'px';
    el.style['transition']         = 'max-height 0.25s cubic-bezier(.4,.2,.2,1)';
    el.style.overflowY             = 'hidden';
    el.style.maxHeight             = '0';
    el.setAttribute('data-max-height', el_max_height);
    el.style.display               = 'block';
    setTimeout(function() {
      el.style.maxHeight = el_max_height;
    }, 10);
  }
};

// scroll to id
jQuery('a[href*=#]:not([href=#])').click(function () {
  var target = jQuery(this.hash);
  target = target.length ? target : jQuery('[name=' + this.hash.substr(1) + ']');
  if (target.length) {
    jQuery('html,body').animate({
      scrollTop: target.offset().top - 150,
    }, 300);
    return false;
  }
});


// Ładowanie komentarzy
var ilosc = $('article').length;
var show = 1;

$('.show_more_comments').on('click', function(){
  function addPosts() {
    show = show + 3;
    displayComments();
    if (ilosc <= show) {
      $('.show_more').css('display', 'none');
    }
  }
  addPosts();
})

function displayComments() {
  $('.posts-blog article').each(function (i) {
    if (i <= show) {
      $(this).css('display', 'block');
    }
  });
  if (ilosc <= show) {
    $('.show_more').css('display', 'none');
  }
}
displayComments();