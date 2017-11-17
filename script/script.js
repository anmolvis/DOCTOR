$(document).ready(function () {
    $("#pointup").click(function(){
      var b=$(".app").css("height");
      var x=0;
      var a=0;
      if(b=="30px")
      {
        x=30;
        a = setInterval(inche,10);
        }
      function inche() {
        x=x+2;
        $(".app").css("height",x);
        if($(".app").css("height")=="180px")
        {
          $("#pointup").css("display","none");
          $("#pointdown").css("display","");
          clearInterval(a);
}
      }
    });
    $("#pointdown").click(function(){
      var b=$(".app").css("height");
      var x=0;
      var a=0;
        x=180;
        a = setInterval(inche,10);
      function inche() {
        x=x-2;
        $(".app").css("height",x);
        if($(".app").css("height")=="30px")
        {
          $("#pointup").css("display","");
          $("#pointdown").css("display","none");
          clearInterval(a);
}
      }
    });
    /*$(window).scroll(function () {
    if ($(this).scrollTop()> 75)
    {
      $("#slider img").css("position","fixed");
    }
    if ($(this).scrollTop()< 75)
    {
      $("#slider img").css("position","relative");
    }
});
*/
var click=0;
$('#right').click(function(){
  var b=100;
  var right=0;
click++;
if(click==1){
  var ss=setInterval(function(){
    if(b==95){
    $('#div2').css("display","block");
  }
    b=b-5;
    right=right+5;
    var rr=right.toString();
    rr=rr+'%';
    var c=b.toString();
    c=c+'%';
    if(b==0){
      clearInterval(ss);
    }
    $('#div1').css("margin-right",rr);
    $('#div2').css("margin-left",c);
},30);
}
  });

  $('#left').click(function(){
    var b=0;
  click--;
  if(click==0){

    var ss=setInterval(function(){
      if(b==95){
      $('#div2').css("display","none");
      }
      b=b+5;

      if(b==70){
        $('#login').css("display","block");
      }
      if(b==30){
        $('#div1 p').css("display","block");
      }
      var c=b.toString();
      c=c+'%';

      $('#div2').css("margin-left",c);
      if(b==100){
        clearInterval(ss);
      }
    },30);
  }
  });
});
