$(document).ready(function(){
  $(".navbar").click(function(){
    $('.active').not($(this)).removeClass('active');
    $(this).addClass('active');
  });

  $("#content").load("assets/sub/start.html");

  $("#start").click(function(){
    $("#content").load("assets/sub/start.html");
  });
  $("#chat").click(function(){
    $("#content").load("assets/sub/chat.html");
  });
  $("#forum").click(function(){
    $("#content").load("assets/sub/forum.html");
  });
  $("#wiki").click(function(){
    $("#content").load("assets/sub/wiki.html");
  });



});


function editor(){
  var wiki = document.getElementById("wiki_content")
  var button = document.getElementById("wiki_edit")
  button.innerHTML = "Clicked";
  var isit = wiki.isContentEditable ;
  if (isit == "true") {
    wiki.contentEditable = "false";
    button.innerHTML = "Click to disable edit";
  } else {
    wiki.contentEditable = "true";
    button.innerHTML = "Click to enable edit";
  }

}
