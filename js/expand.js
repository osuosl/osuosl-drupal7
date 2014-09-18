var count = 0;
$('.plus').click(function(){
    if(count%2==1){
        $(this).siblings('p').slideUp();
        $(this).children('img').attr('src', '/sites/wwwdev.osuosl.org/themes/osuosl-drupal7/images/sharp-plus.png');
    } else {
        $(this).siblings('p').slideDown();
        $(this).children('img').attr('src', '/sites/wwwdev.osuosl.org/themes/osuosl-drupal7/images/sharp-minus.png');
    }
    count = count +1;
});

