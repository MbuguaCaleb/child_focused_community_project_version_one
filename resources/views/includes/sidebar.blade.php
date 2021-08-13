<!-- start sidebar menu -->
<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll">
            <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="row">
                            <div class="sidebar-userpic">
                                <img src="{{asset('assets/img/dp.jpg')}}" class="img-responsive" alt=""> </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> {{Auth::user()->username}}</div>
                            <div class="profile-usertitle-job">{{Auth::user()->role = 1 ? 'House Head' :'Sponsor'}}
                            </div>
                        </div>

                    </div>
                </li>


                <li class="nav-item">
                    <a href="index.html#" class="nav-link nav-toggle">
                        <i class="material-icons">business_center</i>
                        <span class="title">House Holds</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item">
                            <a href="{{url('/household/create')}}" class="nav-link ">
                                <span class="title">New HouseHold</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view_booking.html" class="nav-link ">
                                <span class="title">View HouseHold</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end sidebar menu -->