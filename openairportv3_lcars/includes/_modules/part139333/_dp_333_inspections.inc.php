<?php
function _dp_333_inspections($dasharray) {
		//						0					1						2					3					4					5					6					7					8					9
		//$dasharray	= array($tmp_dash_main_id	,$tmp_dash_main_func	,$tmp_dash_main_nl	,$tmp_dash_main_ns	,$tmp_dash_main_p	,$tmp_dash_main_ml	,$tmp_menu_item_id	,$tmp_menu_item_loc	,$tmp_menu_item_nl	,$tmp_menu_item_ns);
		?>
<div class="table_dashpanel_container" id="div_333inspections" />
<table align="left" valign="top"  width="100%" border="0" cellpadding='0' cellspacing='0' />
	<tr>
		<form style="margin: 0px; margin-bottom:0px; margin-top:-1px;" name="menuitem<?php echo $dasharray[6];?>" id="menuitem<?php echo $dasharray[6];?>" method="POST" action="<?php echo $dasharray[7];?>" target="layouttableiframecontent">
			<input type="hidden" name="menuitemid" value="<?php echo $dasharray[6];?>">
		<td colspan="2">
			<input class="table_dashpanel_container_header" type="button" name="button" value="<?php echo $dasharray[2];?>" onclick="javascript:document.getElementById('menuitem<?php echo $dasharray[6];?>').submit();" />
			</td>
			</form>	
		</tr>
	<?php

		// Loop through active discrepancies and display a summary report for each one
		$sql 		= "SELECT * FROM tbl_139_333_main 
		INNER JOIN tbl_systemusers 		ON tbl_systemusers.emp_record_id = tbl_139_333_main.139333_by_cb_int 
		INNER JOIN tbl_139_333_sub_t 	ON tbl_139_333_sub_t.inspection_type_id = tbl_139_333_main.139333_type_cb_int 
		WHERE 139333_date = '".date('Y/m/d')."' ORDER BY 139333_date, 139333_time";
		
		//echo $sql;
		$objconn 	= mysqli_connect($GLOBALS['hostdomain'], $GLOBALS['hostusername'], $GLOBALS['passwordofdatabase'], $GLOBALS['nameofdatabase']);

		if (mysqli_connect_errno()) {
				printf("connect failed: %s\n", mysqli_connect_error());
				exit();
			}
			else {
				$objrs = mysqli_query($objconn, $sql);		
				if ($objrs) {
						$number_of_rows 	= mysqli_num_rows($objrs);
						if($number_of_rows == 0){
								// Nothing to Display
								?>
	<tr>
		<td colspan="2" class="table_dashpanel_container_noresults" />
			No Records to Display
			</td>
		</tr>
								<?php
							}
						
						while ($objarray 	= mysqli_fetch_array($objrs, MYSQLI_ASSOC)) {
						
								$displayrow					= 0;
								$displayrow_a				= 0;
								$displayrow_b				= 0;
	
								$tmp_inspection_id			= $objarray['139333_main_id'];
								$tmp_inspection_type		= $objarray['139333_type_cb_int'];	
								
								$displayrow_a				= preflights_tbl_139_333_main_a_yn($tmp_inspection_id,0); // 0 will not return a row even if it is archieved.

								if($displayrow_a == 0) {
										// display nothing
										$displayrow = 0;
									}
									else {
										// Check Status of this Discrepancy, ie. Get the current stage
												?>
	<tr>
		<td colspan="2" class="table_dashpanel_container_summary" />
		<?php										
										_333_display_report_summary($tmp_inspection_id,0,0);
												?>
			</td>
		</tr>
												<?php
									}
							}	
?>
	<tr>
		<td colspan="2" class='table_dashpanel_container_footer' />	
			</td>
		</tr>
					<?php								
					}
			}

		?>
			</td>
		</tr>
	</table>
	</div>
<?php
	}
?>