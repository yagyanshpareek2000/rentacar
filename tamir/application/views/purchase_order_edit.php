<?php
    require_once 'includes/header.php';
    
    $poDtaData        = $this->Constant_model->getDataOneColumn("purchase_order", "id", $po_id);
    if (count($poDtaData) == 0) {
        redirect(base_url().'purchase_order/po_view', 'refresh');
    }
    
    $po_numb        = $poDtaData[0]->po_number;
    $po_supplier    = $poDtaData[0]->supplier_id;
    $po_date        = date($site_dateformat, strtotime($poDtaData[0]->po_date));
    $po_note        = $poDtaData[0]->note;
    $po_status        = $poDtaData[0]->status;
?>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.11.0.js"></script>
<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/typeahead.min.js"></script>

<!-- Select2 -->
<link href="<?=base_url()?>assets/css/select2.min.css" rel="stylesheet">

<script>
	$(document).ready(function(){
		$("#addToList").click(function(){
			var row_count 		= document.getElementById("row_count").value;
			var sku 			= document.getElementById("typeahead").value;
			
			if(sku.length > 0){
				
				var addNewCustomer = $.ajax({
					url		: '<?=base_url()?>purchase_order/checkPcode?sku='+sku,
					type	: 'GET',
					cache	: false,
					data	: {
						format: 'json'
					},
					error	: function() {
						//alert("Sorry! we do not have stock!");
					},
					dataType: 'json',
					success	: function(data) {
						var status 	= data.errorMsg;
						var name 	= data.name;
						
						if(status == "failure"){
							alert("Invalid SKU! Please search Materual by SKU / Material Name");
						} else {
							var cell = $('<tr id="row_'+row_count+'"><td>'+sku+'</td><td>'+name+'</td><td><input type="text" class="form-control" name="qty_'+row_count+'" value="1" style="width: 50%;" /></td><td><a onclick="deletediv('+row_count+')" style="cursor:pointer"><i class="icono-cross" style="color:#F00;"></i></a></td></tr><input type="hidden" class="form-control" name="sku_'+row_count+'" value="'+sku+'" />');
		        
		         
					        $('#addItemWrp').append(cell);
					        
					       
					        row_count++;
					        
					        document.getElementById("typeahead").value 	= "";
					        document.getElementById("row_count").value 	= row_count;
						}
						
					}
				});
		    } else {
			    alert("Please Search Material by Name / SKU!");
		    }
			
		});
		
	});
	
	function deletediv(ele){
		$('#row_' + ele).remove();
	}
</script>
	
<style type="text/css">
	.fileUpload {
	    position: relative;
	    overflow: hidden;
	    border-radius: 0px;
	    margin-left: -4px;
	    margin-top: -2px;
	}
	.fileUpload input.upload {
	    position: absolute;
	    top: 0;
	    right: 0;
	    margin: 0;
	    padding: 0;
	    font-size: 20px;
	    cursor: pointer;
	    opacity: 0;
	    filter: alpha(opacity=0);
	}
	
	.typeahead, .tt-query, .tt-hint {
		border: 1px solid #CCCCCC;
		border-radius: 4px;
		font-size: 14px;
		height: 40px;
		line-height: 30px;
		outline: medium none;
		padding: 8px 12px;
		width: 312px;
	}
	.typeahead {
		background-color: #FFFFFF;
	}
	.typeahead:focus {
		border: 2px solid #0097CF;
	}
	.tt-query {
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
	}
	.tt-hint {
		color: #999999;
	}
	.tt-dropdown-menu {
		background-color: #FFFFFF;
		border: 1px solid rgba(0, 0, 0, 0.2);
		border-radius: 4px;
		box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
		margin-top: 0px;
		padding: 8px 0;
		width: 312px;
	}
	.tt-suggestion {
		font-size: 14px;
		line-height: 24px;
		padding: 3px 20px;
	}
	.tt-suggestion.tt-is-under-cursor {
		background-color: #0097CF;
		color: #FFFFFF;
	}
	.tt-suggestion p {
		margin: 0;
	}
</style>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Edit Purchase Order : <?php echo $po_numb; ?></h1>
		</div>
	</div><!--/.row-->
	
	<form class="form-horizontal" action="<?=base_url()?>purchase_order/updatePurchaseOrder" method="post" onsubmit="kk()">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					
					<?php
                        if (!empty($alert_msg)) {
                            $flash_status = $alert_msg[0];
                            $flash_header = $alert_msg[1];
                            $flash_desc = $alert_msg[2];

                            if ($flash_status == 'failure') {
                                ?>
							<div class="row" id="notificationWrp">
								<div class="col-md-12">
									<div class="alert bg-warning" role="alert">
										<i class="icono-exclamationCircle" style="color: #FFF;"></i> 
										<?php echo $flash_desc; ?> <i class="icono-cross" id="closeAlert" style="cursor: pointer; color: #FFF; float: right;"></i>
									</div>
								</div>
							</div>
					<?php	
                            }
                            if ($flash_status == 'success') {
                                ?>
							<div class="row" id="notificationWrp">
								<div class="col-md-12">
									<div class="alert bg-success" role="alert">
										<i class="icono-check" style="color: #FFF;"></i> 
										<?php echo $flash_desc; ?> <i class="icono-cross" id="closeAlert" style="cursor: pointer; color: #FFF; float: right;"></i>
									</div>
								</div>
							</div>
					<?php

                            }
                        }
                    ?>
					
					<?php
                        if ($po_status != '1') {
                            ?>
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4" style="text-align: right;">
								<a href="<?=base_url()?>purchase_order/printPurchaseOrder?po_id=<?php echo $po_id; ?>" style="text-decoration: none;" target="_blank">
									<button type="button" class="btn btn-success" style="background-color: #5cb85c; border-color: #4cae4c;">
										Print Purchase Order
									</button>
								</a>
							</div>
						</div>
					<?php

                        }
                    ?>
					
					<div class="row" style="padding-bottom: 10px;">
						<div class="col-md-4">
							<label>Purchase Order Number <span style="color: #F00">*</span></label>
							<input type="text" name="po_numb" class="form-control" maxlength="250" autofocus required autocomplete="off" value="<?php echo $po_numb; ?>" />
						</div>
						<div class="col-md-4">
							<label>Supplier <span style="color: #F00">*</span></label>
							<select name="supplier" class="form-control" required>
								<option value="">Choose Supplier</option>
								<?php
                                    $supplierResult    = $this->db->query("SELECT * FROM suppliers WHERE status = '1' ORDER BY name ");
                                    $supplierData        = $supplierResult->result();
                                    for ($s = 0; $s < count($supplierData); $s++) {
                                        $supplier_id    = $supplierData[$s]->id;
                                        $supplier_name    = $supplierData[$s]->name; ?>
										<option value="<?php echo $supplier_id; ?>" <?php if ($po_supplier == $supplier_id) {
                                            echo 'selected="selected"';
                                        } ?>>
											<?php echo $supplier_name; ?>
										</option>
								<?php
                                        unset($supplier_id);
                                        unset($supplier_name);
                                    }
                                    unset($supplierResult);
                                    unset($supplierData);
                                ?>
							</select>
						</div>
						<div class="col-md-4">
							<label>Created Date <span style="color: #F00">*</span></label>
							<input type="text" name="po_date" class="form-control" value="<?php echo $po_date; ?>" readonly />
						</div>
					</div>
					
					<div class="row" style="padding-bottom: 10px;">
						<div class="col-md-8">
							<label>Note</label>
							<textarea name="note" class="form-control"><?php echo $po_note; ?></textarea>
						</div>
						<div class="col-md-4"></div>
					</div>
					
					<div class="row" style="padding-bottom: 20px; border-bottom: 1px solid #ddd;">
						<div class="col-md-4">
							<label style="color: #c72a25; font-weight: bold;">Purchase Order Status <span style="color: #F00">*</span></label>
						
							<select name="po_status" class="form-control">
							<?php
                                $poStatusData = $this->Constant_model->getDataAll('purchase_order_status', 'id', 'ASC');
                                for ($ps = 0; $ps < count($poStatusData); ++$ps) {
                                    $poStatus_id    = $poStatusData[$ps]->id;
                                    $poStatus_name    = $poStatusData[$ps]->name;
                            
                                    if ($poStatus_id == '3') {
                                        continue;
                                    }
                            
                                    if ($po_status == '1') {
                                        if ($poStatus_id == '2') {
                                            $poStatus_name = "Sent to Supplier";
                                        }
                                        if ($poStatus_id == '1') {
                                            $poStatus_name = "Created";
                                        }
                                    } ?>
								<option value="<?php echo $poStatus_id; ?>" <?php if ($poStatus_id == $po_status) {
                                        echo 'selected="selected"';
                                    } ?>>
									<?php echo $poStatus_name; ?>
								</option>
							<?php

                                }
                            ?>
							</select>
						</div>
						<div class="col-md-8"></div>
					</div>
					
					<!-- Product List // START -->
					<?php
                        if ($po_status == "1") {
                            ?>
					<div class="row" style="padding-top: 7px;">
						<div class="col-md-4">
							<label>Search Material <span style="color: #F00">*</span></label>
							<select id="typeahead" class="add_product_po form-control">
								<option value="">Search Material by Name / SKU</option>
							<?php
                                $prodData = $this->Constant_model->getDataAll('materials', 'id', 'DESC');
                            for ($p = 0; $p < count($prodData); $p++) {
                                $mat_id        = $prodData[$p]->id;
                                $mat_name        = $prodData[$p]->name;
                                $mat_sku        = $prodData[$p]->sku; ?>
                                    <option value="<?php echo $mat_sku; ?>">
										<?php echo $mat_name.' ['.$mat_sku.']'; ?>
									</option>
							<?php
                                    unset($mat_id);
                                unset($mat_name);
                                unset($mat_sku);
                            } ?>
							</select>
						</div>
						<div class="col-md-8">
							<label>&nbsp;</label>
							<div style="background-color: #686868; color: #FFF; width: 200px; text-align: center; border-radius: 4px; padding: 9px 0px; cursor: pointer;" id="addToList">Add to Lists</div>
						</div>
					</div>
					<?php

                        }
                    ?>
										
					<div class="row" style="margin-top: 15px;">
						<div class="col-md-12">
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
		    	<th width="30%" height="35px" style="background-color: #686868; color: #FFF; font-weight: normal; height: 35px !important;">SKU</th>
		    	<th width="30%" height="35px" style="background-color: #686868; color: #FFF; font-weight: normal; height: 35px !important;">Material Name</th>
		    	<th width="30%" height="35px" style="background-color: #686868; color: #FFF; font-weight: normal; height: 35px !important;">Order Qty.</th>
			    <th width="10%" height="35px" style="background-color: #686868; color: #FFF; font-weight: normal; height: 35px !important;">Action</th>
			</tr>
		</thead>
		<?php
            $poItemData = $this->Constant_model->getDataOneColumnSortColumn('purchase_order_items', 'purchase_order_id', $po_id, 'id', 'ASC');
            for ($pi = 0; $pi < count($poItemData); ++$pi) {
                $po_item_id        = $poItemData[$pi]->id;
                $po_item_sku        = $poItemData[$pi]->material_sku;
                $po_item_qty        = $poItemData[$pi]->ordered_qty;

                $mat_name            = "";
                $matDtaData        = $this->Constant_model->getDataOneColumn("materials", "sku", $po_item_sku);
                $mat_name            = $matDtaData[0]->name; ?>
				<tr>
					<td><?php echo $po_item_sku; ?></td>
					<td><?php echo $mat_name; ?></td>
					<td>
						<input type="text" class="form-control" style="width: 50%" name="existQty_<?php echo $po_item_id; ?>" value="<?php echo $po_item_qty; ?>" <?php if ($po_status != "1") {
                    echo 'readonly';
                } ?> />
					</td>
					<td>
						<?php
                            if ($po_status == '1') {
                                ?>
								<a href="<?=base_url()?>purchase_order/deletePOItem?po_item_id=<?php echo $po_item_id; ?>&po_id=<?php echo $po_id; ?>" onclick="return confirm('Are you confirm to delete Purchase Order Item?')">
									<i class="icono-cross" style="color:#F00;"></i>
								</a>
						<?php

                            } else {
                                echo '-';
                            } ?>
					</td>
				</tr>
		<?php
                unset($po_item_id);
                unset($po_item_sku);
                unset($po_item_qty);
            }
        ?>
		<tbody id="addItemWrp">
		
		</tbody>
	</table>
</div>
						</div>
					</div>
					
					<!-- Product List // END -->
					
					
					
										
					<?php
                        if ($po_status == '1') {
                            ?>	
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<input type="hidden" id="row_count" name="row_count" value="1" />
							<input type="hidden" name="po_id" value="<?php echo $po_id; ?>" />
							
							<center>
								<button type="submit" class="btn btn-primary btn-md" id="nextGo" style="font-size: 20px; padding: 10px; 20px;">
									&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;&nbsp;
								</button>
								<span id="pwait" style="display: none; font-size: 14px; font-weight: 300; font-family: 'Futura,Trebuchet MS',Arial,sans-serif;">
									<img src="<?=base_url()?>assets/images/loading.gif" />
									&nbsp;Processing.....
								</span>
							</center>
						</div>
						<div class="col-md-4"></div>
					</div>
					<?php

                        }
                    ?>
					
					
					
				</div><!-- Panel Body // END -->
			</div><!-- Panel Default // END -->
			
			<a href="<?=base_url()?>purchase_order/po_view" style="text-decoration: none;">
				<div class="btn btn-success" style="background-color: #999; color: #FFF; padding: 0px 12px 0px 2px; border: 1px solid #999;"> 
					<i class="icono-caretLeft" style="color: #FFF;"></i> Back
				</div>
			</a>
			
		</div><!-- Col md 12 // END -->
	</div><!-- Row // END -->
	</form>
	
	<br /><br /><br /><br /><br />
	
</div><!-- Right Colmn // END -->
	
	
<?php
    require_once 'includes/footer.php';
?>

<script src="<?=base_url()?>assets/js/select2.full.min.js"></script>
<!-- Select2 -->
<script>
	$(document).ready(function() {
		$(".add_product_po").select2({
			placeholder: "Search Material by Name / SKU",
			allowClear: true
		});
	});
</script>
