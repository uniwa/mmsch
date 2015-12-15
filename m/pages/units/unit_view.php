<?php 
//$isAnonymous = @ $_GET['is_anonymous'];
$mm_id = $_GET['mm_id'];

//echo $isAnonymous;

require_once("_header.php");
?>
<div class="row">
	<div style="" class="col-xs-12  modalabled " id="unit-details-wrapper" role="">
						<div class="mmsch-box k-widget">
						
							<div class="mmsch-box-title k-header clearfix">
								<h5>Πληροφορίες Μονάδας</h5>
								<div class="mmsch-box-tools">
										
										<a class="collapse-link">
											<i class="fa fa-chevron-up"></i>
										</a>
									</div>
							</div>
							
							<div class="mmsch-box-content">
								<div id="unit-preview-pane" >
								</div>
							</div>
						</div>
					</div>
</div>


<script>
$(document).ready(function() {

	$( "#unit-preview-pane" ).load( "mods/unit_view.php?mm_id=" + <?php echo $mm_id; ?> + "&is_anonymous=" + <?php echo $isAnonymous; ?> , function(){
	});
});

</script>	

<?php 
require_once("_footer.php");
?>
