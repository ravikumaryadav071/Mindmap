$(document).ready(function(){

  var jumboAnim = ['left', 'top', 'right', 'bottom'];
  var index = 0;
  var nextIndex = 3;

  $('.hamburger').on('click', function(){
    $('#main').addClass('body-bg');
    $('#hamburger-icon').addClass('hamburger-icon-active');
    var menuWindow = '30vw';
    if($(window).width()<=768){
      menuWindow = '100vw';
    }
    $('#main').css({
      "margin-left" : menuWindow
    });
    $('.nav-bar').css({
      "width" : menuWindow
    });
  });

  $('.close-btn').on('click', function(){
    $('#main').removeClass('body-bg');
    $('#hamburger-icon').removeClass('hamburger-icon-active');
    $('#main').css({
      "margin-left" : 0
    });
    $('.nav-bar').css({
      "width" : 0
    });
  });

  $('.collapsible').on('click', function(){
    $(this).find('.collapse-icon').toggleClass('collapse-icon-open');
  });

  setInterval(function(){
    //return false;
    if(jumboAnim[index]=="left" || jumboAnim[index]=="right"){
      $('.'+jumboAnim[index]+'-jumbo').css({'width':'100%'});
      $('.'+jumboAnim[nextIndex]+'-jumbo').css({'max-height':'0'});
    }else{
      $('.'+jumboAnim[index]+'-jumbo').css({'max-height':'40vh'});
      $('.'+jumboAnim[nextIndex]+'-jumbo').css({'width':'0'});
    }
    nextIndex = index;
    index = (index < 3) ? ++index : 0;
  }, 1000);

});
