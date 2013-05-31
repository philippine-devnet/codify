<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.blocks.header')    
		

</head><!--end: head -->

<body> 

	@include('admin.blocks.nav-top')
	@include('admin.blocks.nav-left')
	

	<div class="content content-dark">
	    
	    <div class="header">
	        <div class="stats">
	          <div class="stat-box notify-disabled">
	             <i class="icon-group"></i>
	             <span class="count badge">44</span>
	             <span class="stat-text">Users</span>
	          </div>
	          <div class="stat-box notify-disabled">
	             <i class="icon-shopping-cart"></i>
	             <span class="count badge badge-success">56</span>
	             <span class="stat-text">Orders </span>
	          </div>
	          <div class="stat-box notify-disabled">
	             <i class="icon-calendar"></i>
	             <span class="count badge badge-info">6</span>
	             <span class="stat-text">Metting </span>
	          </div>
	          <div class="stat-box notify-disabled">
	             <i class="icon-wrench"></i>
	             <span class="count badge badge-important">23</span>
	             <span class="stat-text">Tickets </span>
	          </div>
	          <div class="stat-box notify-disabled">
	             <i class="icon-download-alt"></i>
	             <span class="count badge badge-warning">15</span>
	             <span class="stat-text">Requests </span>
	          </div>                                                                   

	        </div>

	        <h1 class="page-title">Dashboard</h1>
	    </div><!-- header --> 

	    <ul class="breadcrumb">
	      <li><a href="#">Home</a> <span class="divider"><i class="icon-chevron-right"></i></span></li>
	      <li class="active">Dashboard</li>

	     
	    </ul><!-- breadcrumb -->           
	    
	    <div class="wrapper-content">
	      <div class="container-fluid">



	      </div>
	    </div><!-- wrapper-content -->    
	</div><!-- content -->   

	@include('admin.blocks.footer')

	</body>

</html>

