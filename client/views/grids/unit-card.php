<div id="mod-unit-card" class="main-pane" style="position: absolute; left:0; top:0; bottom:0; height: 100%; width:100%;">
	<div id="ribbon">
			<div class="ribbon-menu">
							<div class="pull-right">
								<button class="k-button backtounits" title="">Πίσω</button>
							</div>
						</div>
					</div>
					
					
					
					
								<div class="summary-pane" style="padding-left:0px !important"></div>
							
</div>

<script type="text/javascript">
$(document).ready(function() {

	var mm_id = "<?php echo $_GET['mm_id']; ?>";
	
	//$( ".summary-pane" ).css("padding-left","0px !important");
	
	$( ".summary-pane" ).load( "client/views/grids/unit-details2.php?mm_id=" + mm_id, function(){
		
	});

	$(".backtounits").on("click", function(e){
		$('#bodyInner').load( "client/views/grids/my-units.php" , function(e){
			resizeGrid('.mmsch-grid');
		});
	});

	
});
</script>

