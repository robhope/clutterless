function toggle_visibility(a){var e=document.getElementById(a);"block"==e.style.display?e.style.display="none":e.style.display="block"}null!=navigator.userAgent.match(/iPad/i)&&$(function(){function a(){$("#sidebar").css({left:"450px"}),$("#sidebar-inner").css({left:"0px"})}function e(){$("#sidebar").css({left:"0px"}),$("#sidebar-inner").css({left:"-450px"})}$("#sidebar-name").click(function(p){0==$("#sidebar").position().left?a():e()}),$("#ipad-click").click(function(){e()})}),jQuery(document).ready(function($){var a=parseInt(pbd_alp.startPage)+1,e=parseInt(pbd_alp.maxPages),p=pbd_alp.nextLink;a<=e&&($("#content").append('<div class="pbd-alp-placeholder-'+a+'"></div>').append('<p id="pbd-alp-load-posts"><a href="#">Load More Posts</a></p>'),$(".navigation").remove()),$("#pbd-alp-load-posts a").click(function(){return a<=e?($(this).text("Loading posts..."),$(".pbd-alp-placeholder-"+a).load(p+" .post",function(){a++,p=p.replace(/\/page\/[0-9]?/,"/page/"+a),$("#pbd-alp-load-posts").before('<div class="pbd-alp-placeholder-'+a+'"></div>'),a<=e?$("#pbd-alp-load-posts a").text("Load More Posts"):$("#pbd-alp-load-posts a").text("No more posts to load.")})):$("#pbd-alp-load-posts a").append("."),!1})});