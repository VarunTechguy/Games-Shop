$('#signup').on('click',function(){
    $('#maintitle').css('margin-left','100%').css('transform', 'translateX(-100%)');
    $('#title1').fadeOut(180);

    $('#loginform').css('margin-right','100%').css('transform', 'translateX(100%)');
    $('#form1').fadeOut(180);

    $('#title2').delay(150).fadeIn(150);
    $('#form2').delay(150).fadeIn(150);
});


$('#signin').on('click',function(){
    $('#maintitle').css('margin-left','0%').css('transform', 'translateX(0%)');
    $('#title2').fadeOut(180);

    $('#loginform').css('margin-right','0%').css('transform', 'translateX(0%)');
    $('#form2').fadeOut(180);

    $('#title1').delay(150).fadeIn(150);
    $('#form1').delay(150).fadeIn(150);
});