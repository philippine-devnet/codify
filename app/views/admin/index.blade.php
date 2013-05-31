<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.blocks.header')    
		

</head><!--end: head -->

<body> 

	@include('admin.blocks.nav-top')
	@include('admin.blocks.nav-left')
	

	<div class="content">
	    
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

	      <li class=pull-right> 
	        <div class="dark-well">

	           <div id="reportrange" class="pull-right notify well-picker">
	              <i class="icon-calendar"></i>
	              <span></span> <b class="caret"></b>
	           </div>

	           <script type="text/javascript">
	           $(document).ready(function() {
	              $('#reportrange').daterangepicker(
	                 {
	                    ranges: {
	                       'Today': ['today', 'today'],
	                       'Yesterday': ['yesterday', 'yesterday'],
	                       'Last 7 Days': [Date.today().add({ days: -6 }), 'today'],
	                       'Last 30 Days': [Date.today().add({ days: -29 }), 'today'],
	                       'This Month': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
	                       'Last Month': [Date.today().moveToFirstDayOfMonth().add({ months: -1 }), Date.today().moveToFirstDayOfMonth().add({ days: -1 })]
	                    },
	                    opens: 'left',
	                    format: 'MM/dd/yyyy',
	                    separator: ' to ',
	                    startDate: Date.today().add({ days: -29 }),
	                    endDate: Date.today(),
	                    minDate: '01/01/2012',
	                    maxDate: '12/31/2013',
	                    locale: {
	                        applyLabel: 'Submit',
	                        fromLabel: 'From',
	                        toLabel: 'To',
	                        customRangeLabel: 'Custom Range',
	                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
	                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
	                        firstDay: 1
	                    },
	                    showWeekNumbers: true,
	                    buttonClasses: ['notify'],
	                    dateLimit: false
	                 }, 
	                 function(start, end) {
	                    $('#reportrange span').html(start.toString('MMMM d, yyyy') + ' - ' + end.toString('MMMM d, yyyy'));
	                 }
	              );

	              //Set the initial state of the picker label
	              $('#reportrange span').html(Date.today().add({ days: -29 }).toString('MMMM d, yyyy') + ' - ' + Date.today().toString('MMMM d, yyyy'));

	           });
	           </script>

	        </div>                
	      </li>          
	    </ul><!-- breadcrumb -->           
	    
	    <div class="wrapper-content">
	      <div class="container-fluid">

	          <div class="row-fluid">

	            <div class="block span6">
	              <div class="block-body">

	              <ul class="sparkline unstyled clearfix">
	                <li>
	                  <p class="btn-disable">Folowers :</p>
	                  <p class="btn-danger btn">8</p>
	                  <div class="clearfix"></div>  
	                  <div id="sparkline-1" style="width:140px; height:140px"></div>
	                </li>
	                <li>
	                  <p class="btn-disable">Likes :</p>
	                  <p class="btn-info btn">56</p>
	                  <div class="clearfix"></div>  
	                  <div id="sparkline-2" style="width:140px; height:140px"></div>
	                </li>
	                <li>
	                  <p class="btn-disable">Updates :</p>
	                  <p class="btn-inverse btn">96</p>
	                  <div class="clearfix"></div>  
	                  <div id="sparkline-3" style="width:140px; height:140px"></div>
	                </li>
	                <li>
	                  <p class="btn-disable">Reviews :</p>
	                  <p class="btn-warning btn">42</p>
	                  <div class="clearfix"></div>  
	                  <div id="sparkline-4" style="width:140px; height:140px"></div>
	                </li>
	                <li>
	                  <p class="btn-disable">Report :</p>
	                  <p class="btn-success btn">194</p>
	                  <div class="clearfix"></div>  
	                  <div id="sparkline-5" style="width:140px; height:140px"></div>
	                </li>                 
	              </ul>  

	              <div class="clearfix"></div>                    


	              </div>
	               
	                         
	            </div>  

	            <div class="block span6">

	              <div class="block-body clearfix">


	                  <ul class="gage unstyled">
	                    <li>
	                      <div id="gage-1" style="width:180px; height:140px"></div>
	                      <button class="btn btn-primary">view new visitor</button>
	                    </li>
	                    <li>
	                        <div id="gage-2" style="width:180px; height:140px"></div>
	                        <button class="btn btn-danger">view rapport</button>
	                    </li>
	                    <li>
	                      <div id="gage-3" style="width:180px; height:140px"></div>
	                      <button class="btn btn-info">view next event</button>
	                    </li>
	                    <li>
	                      <div id="gage-4" style="width:180px; height:140px"></div>
	                      <button class="btn btn-success">incomes review</button>
	                    </li>
	                  </ul>
	                      <div class="clearfix"></div>


	                </div>
	               
	            </div>                 




	          </div>


	          <div class="row-fluid">

	            <div class="block span9 block-head-btn new">
	              <p class="block-heading">Charts

	                  <span class="pull-right">
	                      <button data-toggle="modal" class="btn btn-primary" href="#myModal1"><i class="icon-cog"></i></button>
	                  </span>

	                    <div aria-hidden="true" aria-labelledby="myModalLabel1" role="dialog" tabindex="-1" class="modal hide fade" id="myModal1">
	                      <div class="modal-header modal-default">
	                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
	                        <h3 id="myModalLabel1">Setting</h3>
	                      </div>
	                      <div class="modal-body">

	                    <form action="#" class="inbox-form">

	                      <table class="table">  
	                        <tbody>
	                        <tr>
	                          <td class="td-check"><input type="checkbox"></td>
	                          <td class="td-star">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
	                        </tr> 
	                        <tr>
	                          <td class="td-check"><input type="checkbox"></td>
	                          <td class="td-star">Repellat nisi delectus non totam dicta illo at libero. </td>
	                        </tr>
	                        <tr>
	                          <td class="td-check"><input type="checkbox"></td>
	                          <td class="td-star">Voluptates iure temporibus inventore necessitatibus omnis dolore iste sed minus dolor minima hic.</td>
	                        </tr> 
	                      </tbody>
	                     </table>                           

	                    </form> 
	                        
	                      </div>
	                      <div class="modal-footer">
	                        <button aria-hidden="true" data-dismiss="modal" class="btn btn-primary">Save</button>
	                      </div>
	                    </div>                    
	              </p>
	              <div class="block-body">

	                <div id="example-section9"> 
	                  <div id="flotcontainer" style="text-align: center; margin:0 auto;"> </div>
	                </div> 

	                </div>
	               
	            </div>              

	            <div class="block span3 block-head-btn new">
	              <p class="block-heading">Visitor

	                  <span class="pull-right">
	                      <button data-toggle="modal" class="btn btn-primary" href="#myModal2"><i class="icon-cog"></i></button>
	                  </span>

	                    <div aria-hidden="true" aria-labelledby="myModalLabel2" role="dialog" tabindex="-1" class="modal hide fade" id="myModal2">
	                      <div class="modal-header modal-default">
	                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
	                        <h3 id="myModalLabel2">Setting</h3>
	                      </div>
	                      <div class="modal-body">

	                    <form action="#" class="inbox-form">

	                      <table class="table">  
	                        <tbody>
	                        <tr>
	                          <td class="td-check"><input type="checkbox"></td>
	                          <td class="td-star">Notify me when any new message arrives in my inbox.</td>
	                        </tr> 
	                        <tr>
	                          <td class="td-check"><input type="checkbox"></td>
	                          <td class="td-star">When I send a message to a new person, add them to Other Contacts so that I can auto-complete to them next time.</td>
	                        </tr>
	                        <tr>
	                          <td class="td-check"><input type="checkbox"></td>
	                          <td class="td-star">Show snippets of the message.</td>
	                        </tr> 
	                      </tbody>
	                     </table>                           

	                    </form> 
	                        
	                      </div>
	                      <div class="modal-footer">
	                        <button aria-hidden="true" data-dismiss="modal" class="btn btn-primary">Save</button>
	                      </div>
	                    </div>                    
	              </p>
	              <div class="block-body">

	                <div id="example-section16"> 
	                  <div id="flotcontainer" > </div>
	                </div> 

	                </div>
	               
	            </div>  
	                  
	          </div>

	          <div class="row-fluid">

	            <div class="block span4">
	              <p class="block-heading">
	                <span class="block-icon pull-right">
	                      <a href="#" class="demo-cancel-click" rel="tooltip" title="settings"><i class="icon-cog"></i></a>
	                </span>

	                <span>Chat</span>
	              </p>                  
	              <div class="block-body">

	                <div class="left">
	                    <img src="assets/images/alagoon.jpg" alt="avatar" class="chat-avatar pull-left">
	                    <div class="message">
	                      <div class="arrow-left"></div>
	                      <p><strong>Wyatt Prescott</strong> <small> April 12, 2013 10:07</small></p>
	                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate consequatur quas voluptates.
	                    </div>
	                </div>                                                        

	                <div class="right">
	                    <img src="assets/images/cibawoman.jpg" alt="avatar" class="chat-avatar pull-right">
	                    <div class="message">
	                      <div class="arrow-right"></div>
	                      <p><strong>Janet Parker</strong> <small> April 12, 2013 12:07</small></p>
	                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate consequatur quas.
	                    </div>
	                </div> 

	                <div class="left">
	                    <img src="assets/images/alagoon.jpg" alt="avatar" class="chat-avatar pull-left">
	                    <div class="message">
	                      <div class="arrow-left"></div>
	                      <p><strong>Wyatt Prescott</strong> <small> April 12, 2013 10:07</small></p>
	                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestiae optio ea?   
	                    </div>
	                </div>                                                        

	                <div class="right">
	                    <img src="assets/images/cibawoman.jpg" alt="avatar" class="chat-avatar pull-right">
	                    <div class="message">
	                      <div class="arrow-right"></div>
	                      <p><strong>Janet Parker</strong> <small> April 12, 2013 12:07</small></p>
	                      Lorem ipsum dolor sit amet, consectetur adipisicing elit!
	                    </div>
	                </div>                       
	                <div class="chat-form">
	                  <textarea placeholder="Enter your message..."></textarea>
	                  <button class="btn btn-info">Send message</button>
	                </div>

	              </div>
	            </div>                   

	            <div class="block span4">
	              <p class="block-heading">
	                <span class="block-icon pull-right">
	                      <a href="#" class="demo-cancel-click" rel="tooltip" title="settings"><i class="icon-cog"></i></a>
	                </span>

	                <span>Task In progress</span>
	              </p>                  
	              <div class="block-body project">

	                <ul class="unstyled">
	                  <li class="first-child">
	                    <span class="btn btn-inverse"> <i class="icon-refresh"></i></span>  update Jquery <strong class="label label-info"> 80%</strong>
	                    <div class="progress">
	                      <div class="bar" style="width: 80%;"></div>
	                    </div>                          
	                  </li>
	                  <li>
	                    <span class="btn btn-inverse"> <i class="icon-refresh"></i></span>  update awsome font <strong class="label label-info"> 48%</strong>
	                    <div class="progress">
	                      <div class="bar" style="width: 48%;"></div>
	                    </div>                          
	                  </li>
	                  <li>
	                    <span class="btn btn-inverse"> <i class="icon-fire"></i></span>  update firefox <strong class="label label-danger"> 34%</strong>
	                    <div class="progress progress-danger">
	                      <div class="bar" style="width: 34%;"></div>
	                    </div>                          
	                  </li>
	                  <li>
	                    <span class="btn btn-inverse"> <i class="icon-refresh"></i></span>  update Opera mobile <strong class="label label-info"> 66%</strong>
	                    <div class="progress">
	                      <div class="bar" style="width: 66%;"></div>
	                    </div>                          
	                  </li>
	                  <li class="last-child">
	                    <span class="btn btn-inverse"> <i class="icon-exclamation-sign"></i></span>  update backbone <strong class="label label-warning"> 95%</strong>
	                    <div class="progress progress-warning">
	                      <div class="bar" style="width: 95%;"></div>
	                    </div>                          
	                  </li>                                                                        

	                </ul>


	              </div>
	            </div>      

	            <div class="block span4">
	              <p class="block-heading">
	                <span class="block-icon pull-right">
	                      <a href="#" class="demo-cancel-click" rel="tooltip" title="Refresh"><i class="icon-refresh"></i></a>
	                </span>

	                <span>Activity</span>
	              </p>                  
	              <div class="stat block-body">

	                <ul class="unstyled">
	                  <li class="first-child">
	                    <span class="badge badge-success"> <i class="icon-envelope"></i></span><strong> 3</strong> email <span class="pull-right"><small>16 April</small></span>
	                  </li>
	                  <li>
	                    <span class="badge badge-info"> <i class="icon-picture"></i></span><strong> 8</strong> New picture <span class="pull-right"><small>12 April</small></span>
	                  </li>
	                  <li>
	                    <span class="badge badge-info"> <i class="icon-cloud"></i></span><strong> 30</strong> cloud files  <span class="pull-right"><small>9 April</small></span>
	                  </li>
	                  <li>
	                    <span class="badge badge-inverse"> <i class="icon-search"></i></span><strong> 105</strong> search <span class="pull-right"><small>9 April</small></span>
	                  </li>
	                  <li>
	                    <span class="badge badge-warning"> <i class="icon-download"></i></span><strong> 25</strong> download <span class="pull-right"><small>9 April</small></span>
	                  </li>                                                
	                  <li>
	                    <span class="badge badge-important"> <i class="icon-tag"></i></span><strong> 86</strong> New  tag  <span class="pull-right"><small>7 April</small></span>
	                  </li>
	                  <li>
	                    <span class="badge badge-info"> <i class="icon-gift"></i></span><strong> 8</strong> gift  <span class="pull-right"><small>4 April</small></span>
	                  </li>                                                                        
	                  <li>
	                    <span class="badge badge-info"> <i class="icon-cloud"></i></span><strong> 30</strong> cloud files  <span class="pull-right"><small>9 April</small></span>
	                  </li>
	                  <li>
	                    <span class="badge badge-inverse"> <i class="icon-search"></i></span><strong> 105</strong> search <span class="pull-right"><small>9 April</small></span>
	                  </li>
	                  <li class="last-child">
	                    <span class="badge badge-warning"> <i class="icon-download"></i></span><strong> 25</strong> download <span class="pull-right"><small>9 April</small></span>
	                  </li>                                                
	                </ul>


	              </div>
	            </div>                                    

	          </div>   


	      </div>
	    </div><!-- wrapper-content -->    
	</div><!-- content -->   

	@include('admin.blocks.footer')

	</body>

<!-- Mirrored from www.mickael-girault.fr/preview/austra/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 31 May 2013 14:12:03 GMT -->
</html>

