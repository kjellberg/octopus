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
        	$("#octopus-admin-frame").toggle();
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
    
    // initialize the "save" function
    $(selector).focus(function(e) {
        content_holder = $(this);
        content        = content_holder.html();

        oldcolor = content_holder.css('color');
        content_holder.css('color', 'red');

        // one click outside the editable area saves the content
        $('body').one('click', function(e) {
            // but not if the content didn't change
            if ($(e.target).is(selector) || content == content_holder.html()) {
                return;
            }
            
            $.ajax({
                url: window.octopusAdminUrl + '/rpc.php',
                type: 'POST',
                dataType: 'json',
                data: { 
                    content: content_holder.html(),
                    nameId: content_holder.attr('id') 
                },
                success: function(json) {
                    content_holder.fadeTo('slow', 0.5).fadeTo('slow', 1);
                    content_holder.css('color', oldcolor);
                    console.log(json);
                },
                error: function( data ) {
                    console.log(data.responseText);
                }
            });
        });
    });
});