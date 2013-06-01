<script type="text/template" id="all_users" spa-tpl-id='all_users'>
	<div class="row-fluid">
        <div class="block block-dark block-head-btn span12 unstyled-modal">
            <div class="block-heading">
				<a href="#collapse-table-search-dark" data-toggle="collapse">User Base</a>
            </div>
            <div id="collapse-table-search-dark" class="collapse in">
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
                <table class="responsive table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>User Type</th>
                            <th>Status</th>                                          
                        </tr>
                    </thead>   
                    <tbody>
                    	<% for(var i = 0; i < data.length; i++){ %>
                    		<tr>
                    			<td>Hello</td>
                    		</tr>
                    	<% } %>
                        <tr>
	                        <td>Wyatt Prescott</td>
	                        <td class="center">2013/03/01</td>
	                        <td class="center">Austin</td>
	                        <td class="center">
	                            <span class="label label-success">Active</span>
	                        </td>                                       
                    	</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</script>