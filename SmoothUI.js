//After Page Loads
$(document).ready(function(){
  $("#wrapper").css("display", "block");
  $("#wrapper").addClass("scene_element");
  $("#wrapper").addClass("scene_element--entering");
  setTimeout(function(){
    $("#wrapper").removeClass("scene_element--entering");
  }, 500);
});
