<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ asset('/admin/dashboard') }}">
            <span class="sidebar-brand-text align-middle">
                Dashboard
                {{-- <sup><small class="badge bg-primary text-uppercase">Pro</small></sup> --}}
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none"
                stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF"
                style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        {{-- <div class="sidebar-user">
            <div class="d-flex justify-content-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('backend/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1"
                        alt="Charles Hall" />
                </div>
                <div class="flex-grow-1 ps-2">
                    <a class="sidebar-user-title dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{-- {{$LoggedUserInfo['name']}} --}}
        {{-- </a>
                    <div class="dropdown-menu dropdown-menu-start"> --}}
        {{-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings &
                            Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div> --}}
        {{-- <a class="dropdown-item" href="{{route('auth.login')}}">Log out</a> --}}
        {{-- </div>

                    {{-- <div class="sidebar-user-subtitle">{{$LoggedUserInfo['email']}}</div>
                {{-- </div>
            </div>
        </div> --}}

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>


            <li class="sidebar-item">
                <a data-bs-target="#home" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Home</span>
                </a>
                <ul id="home" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/home-slider') }}">Home
                            Slider</a></li>

                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/language') }}">Languages</a>
                        </li>

                        <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/language-detail') }}">Languages Detail</a>
                        </li>

                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/content-type') }}">Content Type</a></li>
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/affiliation') }}">Affiliation</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/exam') }}">Exam
                            Preparation</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#gallery" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Gallery</span>
                </a>
                <ul id="gallery" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/gallery') }}">Manage
                            Gallery</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Pages</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/page') }}">Manage
                            Pages</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#client" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Client</span>
                </a>
                <ul id="client" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/client') }}">Manage
                            Client</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#review" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Review</span>
                </a>
                <ul id="review" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/review') }}">Manage
                            Review</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#blog" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Blog</span>
                </a>
                <ul id="blog" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/blog') }}">Manage
                            Blog</a></li>
                </ul>
            </li>


            <li class="sidebar-item">
                <a data-bs-target="#files" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Files</span>
                </a>
                <ul id="files" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/files') }}">Manage
                            Files</a></li>
                </ul>
            </li>


            <li class="sidebar-item">
                <a data-bs-target="#Enquiry" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Enquiry</span>
                </a>
                <ul id="Enquiry" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                     <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/program-app') }}">Program App</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/lead-enquiry') }}">Lead
                            Enquiry</a></li>
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/career-enquiry') }}">Career Enquiry</a></li>
                    
                   
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/people-query') }}">Query List</a></li>
                            
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/certificate') }}">Certificate</a></li>
                            
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{ url('/admin/thesunvillage') }}">Thesunvillage</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#Setting" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Setting</span>
                </a>
                <ul id="Setting" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('user_list') }}">Users</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin_followup_list') }}">Activity</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin_planner_list') }}">Planner</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin_assign_lead') }}">Assign Lead</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin_transfer_lead') }}">Transfer Lead</a></li>
                </ul>
            </li>


        </ul>
    </div>
</nav>
