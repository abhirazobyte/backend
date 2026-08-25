<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('user_dashboard') }}">
            <span class="sidebar-brand-text align-middle">
                Dashboard
                <!-- <sup><small class="badge bg-primary text-uppercase">Pro</small></sup> -->
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>


        <ul class="sidebar-nav">


            <li class="sidebar-item">
                <a href="{{route('user_dashboard')}}" class="sidebar-link">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#leads" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Leads</span>
                </a>
                <ul id="leads" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('active_lead') }}">Active Leads</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('inactive_lead') }}">InActive Leads</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('archived_lead') }}">Admission Done</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#followup" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle" data-feather="layout"></i> <span class="align-middle">Followup</span>
                </a>
                <ul id="followup" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('all_followup_list') }}">Activity List</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('all_planner_list') }}">Planner List</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>