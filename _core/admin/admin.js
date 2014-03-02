var admin_editor_tool = 'editor';

document.onkeydown = keydown;

function keydown(event) {
        var code;
        var e;
        if (document.all) {
            if (!event) {
                var e = window.event;
                code = e.keyCode;
            }
        }
        else if (event.which) {
        code = event.which;
        e = event;
        }
        if (code == 9) {//Write some logic
            e.preventDefault();
        	$("#octopus-admin-frame").fadeToggle();
        }
}

$(document).ready(function() {
	updateTool();
	function updateTool()
	{
		if (window.admin_editor_tool == 'editor'){
			$(".editable").attr('contenteditable', 'true');
		}
	}
}); 

$(function() {
    var content_holder, content;
    var selector = '[contenteditable="true"]';
    
    // prevent clicks inside editable area to fire
    // a click event on the body
    // and therefor saving our content before we even edit it
    $(selector).click(function(e) {
        e.stopPropagation();
    });

    $(selector).blur(function(){
        var currentField = $(this);
        $.ajax({
            url: window.octopusAdminUrl + '/rpc.php',
            type: 'POST',
            dataType: 'json',
            data: { 
                content: $(this).html(),
                nameId: $(this).attr('id') 
            },
            success: function( data ) {
                currentField.fadeOut().fadeIn();
            },
            error: function( data ) {
                console.log(data);
            }
        }); 
    });
});