$(document).ready(function(){$('#back-top').hide();$(window).scroll(function(){if($(this).scrollTop()>150){$('#back-top').fadeIn();}else{$('#back-top').fadeOut();}});$('.timer').removeClass('appear');$('.timer').appear();$(document.body).on('appear','.timer',function(e){if(!$(this).hasClass('appear')){animatecounters();$(this).addClass('appear');}});});$(document).on('scroll',function(){if($(document).scrollTop()>10){$('.site-header').addClass('navbar-fixed-top');}else{$('.site-header').removeClass('navbar-fixed-top');}});$(document).on('click','.toc_toggle',function(){$(this).parent().next().toggle();})
function showFunction(id){var n=$('.detail_'+id).css("max-height");var a=Math.round(n.replace(/,|p|x/g,''));var b=Math.round(a+200);$('.detail_'+id).css({overflow:"hidden","max-height":b+"px"}).show(400);}
function showimg(id){$('.tab-pane').removeClass('in active show');$('#showimg'+id).addClass('in active show');}
function scrollToElm(id){$('html,body').animate({scrollTop:eval($('.detail_'+id).offset().top-120)},500);}
function scrollToTop(id){$("html, body").animate({scrollTop:0},1500);}
function Showmessage(){$(".box_com").show('slow');}
jQuery(document).ready(function($){$('img.lazyload').each(function(){$(this).attr('data-original',$(this).attr('src'));$(this).attr('src',lazyImage);$(this).lazyload({effect:"fadeIn"});})});function animatecounters(){$('.timer').each(count);function count(options){var $this=$(this);options=$.extend({},options||{},$this.data('countToOptions')||{});$this.countTo(options);}}
function isEmail1(email){var isValid=false;var regex=/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;if(regex.test(email)){isValid=true;}
return isValid;}
$(window).load(function(){if(document.cookie.indexOf("modal12")==-1){document.cookie="popunder1=modal12";setTimeout(function(){$('#global-modal1').modal('show');},30000);}});/*tuong duong 30 giay*/$(document).on('click','.close',function(){$('#global-modal1').remove();$('.modal-backdrop').remove();$('html, body').removeClass('modal-open');$('html, body').css({'padding-right':0});})