$(document).ready(function(){
/*
(1)
استخدام event <click> اي بمعنى غند الضغط على العنصر 
هنا تم استخدام event <dblclick> اي انه بمعنى عند الغط مرتين بالماوس على العنصر افعل ما يلي
ثم تم استخدام method <show , hide > اي بمعنى عندما يتم الضغط على العنصر اخفي العنصر او اظهر العنصر 
-------------------------
يتم استخدام مع show , hide الوقت المخصص للاختفاء او الظهور و استخدام دالة او فانكشين جديد 
وهذا ليس اجباري 
(2000)= (2s)
-------------------------

*/
    


    $(".btn-11").click(function(){
        $(".box").css("background-color", "red");
    });
    $(".btn-12").click(function(){
        $(".box").css("background-color", "transparent");
    });
    $(".btn-13").click(function(){
        $(".box").slideToggle(2000)
    });
    $(".btn-14").click(function(){
        $(".box").css("border-color", "red");
    });
    $(".btn-15").click(function(){

        $(".box").removeClass();

    })



});