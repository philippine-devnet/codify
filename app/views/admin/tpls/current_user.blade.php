<script type="text/html" id='current_user' spa-tpl-id='current_user'>
	<div class="row-fluid">
    	<div class="block  block-dark block-head-btn unstyled-modal span3">
			 <div class="center" style="padding:10px; text-align:center;">
				<img src="http://www.placehold.it/200x200" class="img img-polaroid"/>
			</div>
        </div>
        <div class="block block-dark span9">
        	<div class="block-heading">
        		<a href="#collapse-table-search-dark" data-toggle="collapse">Profile Info</a>
        		<div id="collapse-table-search-dark" class="collapse in" style='padding:10px;'>
        			<form action="javascript:void(0)">
                        <div class="control-group">
                            <label class="control-label" for="role-type">User Type</label>
                            <div class="controls">
                                <input type="text" name="role-type" disabled="disabled" class="disabled input" value="<%=user.get('role').get('role_name')%>"/>
                            </div> 
                        </div>
        				<div class="control-group">
                            <label class="control-label" for='username'>Username</label>
                            <div class="controls">
                                <input type="text" name="username" class="input-block-level" disabled="disabled" value="<%=user.get('username')%>"/>
                            </div>
                        </div>
                        <p>
                            <button class="btn btn-small btn-danger" type="button">Change Username</button>
                            <button class="btn btn-small btn-primary" type="button">Change Password</button>
                        </p>
        			</form>
        		</div>
        	</div>
        </div>
    </div> 
    <div class="row-fluid">
        <div class="block block-dark span9 offset3">
            <div class="block-heading">
                <a href="#collapse-table-search-dark" data-toggle="collapse">Additional Info</a>
                <div id="collapse-table-search-dark" class="collapse in" style="padding:10px;">
                    <form action="javascript:void(0)" spa-id="user-profile-form">

                        <div class="span12">
                            <div class="control-group span4">
                                <label class="control-label" for="first_name">First Name</label>
                                <div class="controls">
                                     {{ Form::token() }}
                                    <input type="text" name="first_name" class="input-block-level" value="<%=user.get('profile').get('first_name')%>"/>
                                </div>
                            </div>
                            <div class="control-group span4">
                                <label class="control-label" for="middle_name">Middle Name</label>
                                <div class="controls">
                                    <input type="text" name="middle_name" class="input-block-level" value="<%=user.get('profile').get('middle_name')%>"/>
                                </div>
                            </div>
                            <div class="control-group span4">
                                <label class="control-label" for="last_name">Last Name</label>
                                <div class="controls">
                                    <input type="text" name="last_name" class="input-block-level" value="<%=user.get('profile').get('last_name')%>"/>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="control-group span4">
                                <label class="control-label" for="occupation">Occupation: </label>
                                <div class="controls">
                                    <input type="text" name="occupation" class="input-block-level" value="<%=user.get('profile').get('occupation')%>"/>
                                </div>
                            </div>
                        </div>
                        <div class="span12">
                            <div class="span4 offset4">
                                 <button class="btn btn-small btn-primary" type="button" spa-id='profile-save-btn'>Save</button>
                            </div>
                        </div>
                    </form>
                    <div style="padding:10px;">
                        <div spa-tpl-id='saved-user-tpl-alert' style="display:none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</script>