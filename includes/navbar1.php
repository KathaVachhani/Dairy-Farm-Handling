     <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            
            <a class="navbar-brand">Dairy Farm Handling
            </a>
            <ul class="navbar-nav hk-navbar-content">

                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="dist/img/user.png" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
<?php 
//Getting  name

$query=mysqli_query($con,"select username from tbl_member");
$row=mysqli_fetch_array($query);
?>                            
                            <div class="media-body">
                                <span><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                       
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>