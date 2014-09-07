
<textarea id="editor" rows="10" cols="30" style="width:100%;height:height:100%">
</textarea>


<script type="text/javascript">

$(document).ready(function() {
	
	$("#bodyInner").css({height:"100%"});
		
	$("body").off('click', "#btnSaveWhatsNew");
	
	$("#editor").kendoEditor({
		tools:[
			"bold",
			"italic",
			"underline",
			"strikethrough",
			"justifyLeft",
			"justifyCenter",
			"justifyRight",
			"justifyFull",
			"insertUnorderedList",
			"insertOrderedList",
			"indent",
			"outdent",
			"createLink",
			"unlink",
			"createTable",
			"addRowAbove",
			"addRowBelow",
			"addColumnLeft",
			"addColumnRight",
			"deleteRow",
			"deleteColumn",
			"viewHtml",
			"formatting",
			"cleanFormatting",
			"fontName",
			"fontSize",
			"foreColor",
			"backColor",	
			{
    			name: "custom",
    			template: "<button class='k-button' id='btnSaveWhatsNew'>Αποθήκευση</button>"
			}
		]
    });

	// fix some css issues after editor construct
	$("#btnSaveWhatsNew").closest("li").addClass("pull-right");
	$("table.k-editor-widget").css({"height":"100%"});
	
    $("body").on("click", "#btnSaveWhatsNew", function(e){

    	e.preventDefault();
        $(this).button('loading');
        
    	var editor = $("#editor").data("kendoEditor");
		var data = editor.value();

		$.ajax({
	          type: "POST",
	          url: "whatsnew.php",
	          data: {whatsnew : data}
		})
		.done(function(data){
			$("#btnSaveWhatsNew").button("reset");
		});
    });
	
});

</script>