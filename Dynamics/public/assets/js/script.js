$(document).ready((function(){"use strict";var e=$(".search-bar input"),n=$(".search-close");window.gullUtils={isMobile:function(){return window&&window.matchMedia("(max-width: 767px)").matches},changeCssLink:function(e,n){localStorage.setItem(e,n),location.reload()}};var l=$(".search-ui");e.on("focus",(function(){l.addClass("open")})),n.on("click",(function(){l.removeClass("open")}));var c=$(".dropdown-sidemenu");$(".submenu"),c.find("> a").on("click",(function(e){e.preventDefault(),e.stopPropagation();var n=$(this).parent(".dropdown-sidemenu");c.not(n).removeClass("open"),$(this).parent(".dropdown-sidemenu").toggleClass("open")})),$(".perfect-scrollbar, [data-perfect-scrollbar]").each((function(e){var n=$(this);new PerfectScrollbar(this,{suppressScrollX:n.data("suppress-scroll-x"),suppressScrollY:n.data("suppress-scroll-y")})})),$("[data-fullscreen]").on("click",(function(){var e=document.body;return document.fullScreenElement&&null!==document.fullScreenElement||document.mozFullScreen||document.webkitIsFullScreen?function(e){var n=e.cancelFullScreen||e.webkitCancelFullScreen||e.mozCancelFullScreen||e.exitFullscreen;if(n)n.call(e);else if(void 0!==window.ActiveXObject){var l=new ActiveXObject("WScript.Shell");null!==l&&l.SendKeys("{F11}")}}(document):function(e){var n=e.requestFullScreen||e.webkitRequestFullScreen||e.mozRequestFullScreen||e.msRequestFullscreen;if(n)n.call(e);else if(void 0!==window.ActiveXObject){var l=new ActiveXObject("WScript.Shell");null!==l&&l.SendKeys("{F11}")}}(e),!1}))})),$(window).on("load",(function(){jQuery("#loader").fadeOut(),jQuery("#preloader").delay(500).fadeOut("slow")}));
//# sourceMappingURL=script.js.map