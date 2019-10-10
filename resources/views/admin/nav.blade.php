<nav class="navbar-custom">
    <ul class="navbar-right d-flex list-inline float-right mb-0">
      <li class="dropdown notification-list d-none d-sm-block">
      </li>
      
     <li class="dropdown notification-list">
                 <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                   <i class="mdi mdi-bell noti-icon"></i> 
                   {{-- @if(auth()->user()->unreadnotifications->count())
                   <span class="badge badge-pill badge-info noti-icon-badge">
                     {{count(auth()->user()->unreadnotifications)}}
                    </span>
                    @endif --}}
                  </a>
                 <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                    <!-- item-->
                    {{-- <h6 class="dropdown-item-text">Notifications ({{count(auth()->user()->unreadnotifications)}})</h6> --}}
                    <div class="slimscroll notification-item-list">
                       <!-- item--> 
                    {{-- @foreach(auth()->user()->unreadnotifications as $notification)
                       <a href="{{route('admin.markAsRead',$notification->data['question']['slug'])}}" class="dropdown-item notify-item active">
                          <div class="notify-icon bg-warning">
                            <i class="mdi mdi-message"></i>
                          </div>
                          <p class="notify-details">
                            {{$notification->data['question']['subject']}}
                            <span class="text-muted">
                              You have {{count(auth()->user()->unreadnotifications)}} unread messages
                            </span>
                          </p>
                        @endforeach --}}
                       </a>
                      <!-- item--> 
                    </div>
                    <!-- All--> <a href="#" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a>
                 </div>
              </li>
      <li class="dropdown notification-list">
        <div class="dropdown notification-list nav-pro-img">
          <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light"
            data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="{{ asset('backend/assets/images/users/user1.jpg') }}"
              alt="user" class="rounded-circle">
            </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown">
            <!-- item-->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="{{ route('logout')}}"><i class="mdi mdi-power text-danger"></i>
              Logout</a>
          </div>
        </div>
      </li>
    </ul>
    <ul class="list-inline menu-left mb-0">
      <li class="float-left"><button class="button-menu-mobile open-left waves-effect waves-light"><i class="mdi mdi-menu"></i></button></li>
    
    </ul>
  </nav>