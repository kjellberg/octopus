function keydown(e){var t,n;if(document.all){if(!e){var n=window.event;t=n.keyCode}}else if(e.which){t=e.which;n=e}if(t==9){n.preventDefault();$("#octopus-admin-frame").toggle()}}var admin_editor_tool="editor";document.onkeydown=keydown;$(document).ready(function(){function e(){window.admin_editor_tool=="editor"&&$(".editable").attr("contenteditable","true")}e()});$(function(){var e,t,n='[contenteditable="true"]';$(n).click(function(e){e.stopPropagation()});$(n).focus(function(r){e=$(this);t=e.html();$("body").one("click",function(r){if($(r.target).is(n)||t==e.html())return;$.ajax({url:"update.php",type:"POST",dataType:"json",data:{body:e.html()},success:function(t){alert("success");e.effect("highlight",{color:"#0f0"},3e3)},error:function(){alert("error");e.effect("highlight",{color:"#f00"},3e3);e.html(t)}})})})});