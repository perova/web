//sito reikia kad nereiktu htmle scripto i apacia det
$(document).ready(function(){
//pirmasbudas
//$("#count").on("click",function(){
//  $("#field").val(5+1);
//})
// skliaustuose kai css kreipiasmes, klase, tai taska, id groteles
  //su  tik js butu document.getElementById('field').value=5;

//antras budas
var arg1 = 0;
var action ="";







$("#count").click(function(){

if(action == "+") { $("#field").val(Number(arg1) + Number($("#field").val()));
}else if (action == "-") { $("#field").val(Number(arg1) - Number($("#field").val()));}



})

$("[id^='btn']").click(function(){

$("#field").val(
  $("#field").val() + $(this).text()
);

})
$("#clear").click(function(){

  $("#field").val("");
})
$("#sum").click(function(){
  arg1 = $("#field").val();
  action ="+";
  $("#field").val("");
})

$("#minus").click(function(){
  arg1 = $("#field").val();
  action ="-";
  $("#field").val();
})







});

/*
$(document).ready(function(){
 cia rasomas visas kodas
}); */

/* dar kitas naujesnis variantas
$(function(){
 cia rasomas visas kodas
});
$ tai tas pats kad rasytume jQuery
*/
