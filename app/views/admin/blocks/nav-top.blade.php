<div class="navbar">
	    <div class="navbar-inner">

	            <ul class="nav pull-right">

	                <li>
	                <form class="search form-inline">
	                    <input type="text" placeholder="Search...">
	                    <button class="search-submit btn-search" value="" type="submit"><i class="icon-search"></i></button>                        
	                </form>                        

	                </li>
	                
	                <li class="dropdown header-border">
	                    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
	                        <span class="email-notify"><i class="icon-envelope-alt"></i><span class="email-alert"><i class="icon-circle"></i> </span></span>
	                    </a>

	                    <ul class="dropdown-menu block-dark messages">
	                        <li class="view-all"><a href="#">View all messages</a></li>   
	                        <li><a href="#">
	                            <div class="avatar"><img height="45" width="45" src="assets/images/face-1.jpg" alt="Your profile"></div>
	                            <div class="info">Antonio Heide <span class="timer">36 min</span></div>    
	                            <div class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem necessitatibus.</div>
	                            </a>
	                        </li>
	                        <li><a href="#">
	                            <div class="avatar"><img height="45" width="45" src="assets/images/face-2.jpg" alt="Your profile"></div>
	                            <div class="info">Melissa Evans <span class="timer">52 min</span></div>    
	                            <div class="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis optio ad placeat incidunt iste non enim nisi quae culpa.</div>
	                            </a>
	                        </li>                                               
	                    </ul>
	                </li>   

	                <li class="dropdown header-border">
	                    <a href="#" role="button" class="dropdown-toggle " data-toggle="dropdown">
	                        <div class="notify">7</div>
	                    </a>

	                    <ul class="dropdown-menu block-dark messages msg-notify">
	                        <li class="view-all"><a href="#">View all notifications</a></li>   
	                        <li><a href="#"><div><i class="icon-comment"></i>  new comment <span class="timer">2 min</span></div></a>                        
	                        <li><a href="#"><div><i class="icon-twitter"></i>  new follower <span class="timer">6 min</span></div></a> 
	                        <li><a href="#"><div><i class="icon-thumbs-up"></i> new like <span class="timer">9 min</span></div></a>                        
	                        <li><a href="#"><div><i class="icon-twitter"></i>  new follower <span class="timer">25 min</span></div></a> 
	                        <li><a href="#"><div><i class="icon-user"></i>  new registration <span class="timer">32 min</span></div></a>                        
	                        <li><a href="#"><div><i class="icon-comment"></i>  new comment <span class="timer">2 hours</span></div></a>     
	                        <li><a href="#"><div><i class="icon-map-marker"></i>  new localization <span class="timer">Yesterday</span></div></a>     
	                    </ul>
	                </li>                                   

	                <li class="dropdown header-border">
	                    <a href="#" role="button" class="dropdown-toggle " data-toggle="dropdown">
	                        <div class="thumb-account">
	                            <img height="20" width="20" src="{{ URL::to('admin') }}/assets/images/timeline-team.jpg" alt="Your profile">
	                            <span><i class="icon-caret-down"></i></span>
	                        </div>
	                    </a>

	                    <ul class="dropdown-menu block-dark account">
	                        <li class="first"><a tabindex="-1" href="#"><i class="icon-user"></i> Your profile</a></li>
	                        <li class="first"><a tabindex="-1" href="#"><i class="icon-cogs"></i> Settings</a></li>
	                        <li><a tabindex="-1" href="sign-out.html"><i class="icon-signin"></i> Log in</a></li>
	                        <li class="last notify-disabled"><a tabindex="-1" href="sign-in.html"><i class="icon-signout"></i> Logout</a></li>
	                    </ul>
	                </li>
	                

	            </ul>
	            <a class="brand" href="{{ URL::to('/') }}"><span class="title">Activity Site</span> <span class="logo"></span></a>
	    </div>
	</div><!-- navbar --> 
