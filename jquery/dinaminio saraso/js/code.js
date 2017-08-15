$(function(){

$("#ivesti").click(function(){
  var eilute = $("<tr></tr>");
//imame reiksme is
  var nameLangelis = "<td>" + $("#name").val() + "</td>";
  var surnameLangelis = "<td>" + $("#surname").val() + "</td>";
  var ageLangelis = "<td>" + $("#age").val() + "</td>";
  eilute.html(nameLangelis + surnameLangelis + ageLangelis);

$("#lentute").append(eilute);





});







});
