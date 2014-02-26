var admin_editor_tool = 'editor';

 $(document).ready(function() {
	
	//$("body").css('cursor', 'pointer');

	updateTool();
	function updateTool()
	{
		if (window.admin_editor_tool == 'editor'){
			$(".editable").attr('contenteditable', 'true');
		}
	}
}); 