<div data-offset-top="360" data-spy="affix" class="sidebar-nav affix">
	    <form class="search form-inline">
	        <input type="text" placeholder="Search...">
	        <button class="search-submit btn-search" value="" type="submit"><i class="icon-search"></i></button>                        
	    </form>    

	    <div class="sidebar-avatar">
	        <img src="http://www.placehold.it/200x200" alt="avatar" class="thumbnail-avatar">
	        <a href="#"><div class="sidebar-avatar-message"><div class="notify notify-message"><i class="icon-envelope"></i></div></div></a>
	        <a href="#"><div class="sidebar-avatar-notify"><div class="notify ">7</div></div></a>
	     </div>


	    <a data-toggle="collapse" data-target=".nav-collapse" class="btn-sidebar">
	        <span class="notify navigation span12"><i class="icon-reorder"></i> Navigation <span class="pull-right label sidebar-label label-danger"><i class="icon-angle-down"></i> </span></span>
	    </a>


	    <div class="nav-collapse subnav-collapse collapse ">
	        <a href="#" class="nav-header active" ><i class="icon-dashboard"></i> Dashboard</a>
	      

	        <a href="#ui-elements" class="nav-header" data-toggle="collapse"><i class="icon-magic"></i> Users<span class="label sidebar-label label-info"><i class="icon-angle-down"></i> </span></a>
	        <ul id="ui-elements" class="nav nav-list collapse">
	            <li><a href="#users/new"><i class="icon-tasks"></i> All users</a></li>
	            <li><a href="#users/roles"><i class="icon-circle"></i> New User</a></li> 
	            <li><a href="#users/blocked"><i class="icon-list-alt"></i> Blocked Users</a></li>
	        </ul>     

	        <a href="#form" class="nav-header" data-toggle="collapse"><i class="icon-edit"></i> Activities<span class="label sidebar-label label-info"><i class="icon-angle-down"></i> </span></a>
	        <ul id="form" class="nav nav-list collapse">
	            <li><a href="#activities/categories"><i class="icon-table"></i> Categories</a></li>
	            <li><a href="#activities/threads"><i class="icon-ok"></i> Threads</a></li>
	            <li><a href="#activities/questions"><i class="icon-exchange"></i> Questions</a></li>
	            <li><a href="#activities/settings"><i class="icon-reorder"></i> Settings</a></li>
	        </ul>                     

	        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-signin"></i>Account<span class="label sidebar-label label-info"><i class="icon-angle-down"></i> </span></a>
	        <ul id="accounts-menu" class="nav nav-list collapse">
	            <li ><a href="#account/options"><i class="icon-signin"></i> Options</a></li>
	            <li ><a href="{{ URL::to('ap/logout') }}"><i class="icon-signout"></i> Logout</a></li>
	            <li ><a href="#account/reset"><i class="icon-lock"></i> Reset Password</a></li>
	        </ul>   

	       
	        <a href="#inbox/open" class="nav-header" ><i class="icon-envelope"></i>Inbox</a>            

	        <a href="gallery.html" class="nav-header" ><i class="icon-camera"></i>BLOG</a>


	    </div>



	</div><!-- sidebar --> 