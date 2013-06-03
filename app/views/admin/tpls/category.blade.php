
<script type = "text/template" id = "category" spa-tpl-id = "category">


	


	<div class = "row-fluid">

		<div class = "block block-dark block-head-btn span12 unstyled-modal">

			<div class="block-heading">
                <span class="pull-right">
                    <button class="btn btn-primary" data-toggle="modal"  href="#myModal2"><i class="icon-plus-sign"> Add Category</i></button>
                </span>

                <!-- ############ Start modal ###########-->


                <div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" class="modal hide fade" id="myModal2" style="display: none;">
                    <div class="modal-header modal-default">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
                        <h3 id="myModalLabel2">Create New Category</h3>
                    </div>
                    <div class="modal-body">
                    	<div spa-tpl-id='new-user-tpl-alert' style="display:none;"></div>

						<form action="javascript:void(0)" spa-id='new-category-form'>
                        	<div class="control-group">
                        		<label class="control-label" for="category">Category</label>
                        		<div class="controls">
									<input type="text" class="span12" name="category"/>
                        		</div>
                        	</div>
                        	<div class="control-group">
                        		<label class="control-label" for="description">Description</label>
                        		<div class="controls">
									<textarea class="span12" name="description"></textarea>
                        		</div>
                        	</div>

                        	<span class="pull-right" style="background:none;">
                        		<button type="submit" name="submit" class=" btn btn-info"><i class="icon-ok"></i>&nbsp;Save</button>
                        	</span>
                        </form> 
                    </div>
                    <div class="modal-footer">
                        <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                    </div>
                </div>  

                <!-- ############ End modal ###########-->


				<a href="#collapse-table-search-dark" data-toggle="collapse"><i class='icon-white icon-user'></i> User Base</a>
            </div>


            <!-- ############ Start table body ###########-->

            <div id = "collapse-table-search-dark" class = "collapse in" style = "padding:10px">

            	<%

            	_.each(data, function(category){

            		console.log(category.name);
            		console.log(category.description);
            		console.log(category.created_at);

            	});

            	 %>



            	this is where you put the category table


            </div>

            <!-- ############ END table body ###########-->



		</div>



		



		three trick pony






	</div>


































</script>