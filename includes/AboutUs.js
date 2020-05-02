
$(document).ready(function(){
    var i = 0;
  $("#showBtn").click(function(){
      if(i==0){    
    $("#hidden").slideToggle("slow");
      $("#aboutUsContainer").attr("id","aboutusContanerShown");
          $("#showBtn").html("show less");
          i++;
      }else if(i==1){
          $("#hidden").slideToggle("slow");
    $("#aboutusContanerShown").attr("id","aboutUsContainer");
           $("#showBtn").html("show more");
          i--;
      }    
   });
});
 