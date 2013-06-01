<script type="text/template" id="all_users" spa-tpl-id='all_users'>
	<%
		var count = 0;
		_.each(data,function(user){
			count++;
		});


	%>

	<div class="row-fluid">
        <div class="block block-dark block-head-btn span12 unstyled-modal">
            <div class="block-heading">
                <span class="pull-right">
                    <button class="btn btn-primary" data-toggle="modal"  href="#myModal2"><i class="icon-plus-sign"></i></button>
                </span>
                <div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" class="modal hide fade" id="myModal2" style="display: none;">
                    <div class="modal-header modal-default">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
                        <h3 id="myModalLabel2">Create New User</h3>
                    </div>
                    <div class="modal-body">
                    	<div class="alert alert-info" style="line-height:120%; font-size:12px; font-weight:normal; text-align:justify; ">
                    		<strong>Notice: </strong>Admins who are editing and adding users here are automatically been confirmed by the system and thus will not be sent an email confirmation. Also, users profile, shall only be edited when saved.
                    	</div>
						<form action="#">
                        	<div class="control-group">
                        		<label class="control-label" for="username">Username</label>
                        		<div class="controls">
									<input type="text" class="span12" name="username"/>
                        		</div>
                        	</div>
                        	<div class="control-group">
                        		<label class="control-label" for="password">Password</label>
                        		<div class="controls">
									<input type="password" class="span12" name="password"/>
                        		</div>
                        	</div>
                        	<div class="control-group">
                        		<label class="control-label" for="password2">Repeat Password</label>
                        		<div class="controls">
									<input type="password" class="span12" name="password2"/>
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
				<a href="#collapse-table-search-dark" data-toggle="collapse"><i class='icon-white icon-user'></i> User Base</a>
            </div>
            <div id="collapse-table-search-dark" class="collapse in" style="padding:10px;">
                <div class="table-option clearfix">
   					<span class="pull-left keywords">
                    	<form action="javascript:void(0)" class="form-inline">
                        	<input name="q" class="table-form" type="text"  placeholder="Search Username" >
                            <button type="submit" class="btn btn-primary"> <i class="icon-search icon-white"></i></button>
                        </form>
                    </span>
                    <span class="pull-right">
                    	<% if(page != 0){ %>
                    		<% var page_ = page-1; %>
                        	<a class="btn btn-danger" href="#users/all/<%=(page_)%>" ><i class="icon-chevron-left"></i></a>
                        <% }%>
                        <% page++; %>
                        <a href="#users/all/<%=(page)%>" class="btn btn-danger"><i class="icon-chevron-right"></i></a>
                    </span>
                </div>
                	<% if(count == 0) { %>
							<div class="alert alert-warning">
							  <strong><i class='icon-user'></i> Sorry!</strong> There are no users on the database at the moment.
							</div>
				
					<% }else { %>
		                <table class="responsive table table-hover">
		                    <thead>
		                        <tr>
		                            <th>Username</th>
		                            <th>Date registered</th>
		                            <th>User Type</th>
		                            <th>Status</th>
		                            <th>&nbsp;</th>                                          
		                        </tr>
		                    </thead>   
		                    <tbody>
		                    	<%
		                    		_.each(data, function(user){
		                    			%>
		                    			<tr>
		                    				<td class="center"><a href="#/user/<%=user.id%>"><%=user.username%></a></td>
		                    				<td class="center"><%=user.created_at%></td>
		                    				<td class="center"><%=user.role_id%></td>
		                    				<% if(user.status_code == 0){ %>
		                    					<td class="center"><span class='label label-danger'>Inactive</span></td>
		                    				<% }else{ %>
		                    					<td class="center"><span class='label label-success'>Active</span></td>
		                    				<% } %>
		                    				<td class="center"><a href='#/user/<%=user.id%>' class="btn btn-info"><i class="icon-user"></a></i></td>
		                    			</tr>
		                    			<%
		                    		});


		                    	%> 
		                    </tbody>
		                </table>
                	 <% } %>
            </div>
        </div>
    </div> 
   
</script>