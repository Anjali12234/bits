<div class="left-side-bar">
    <div class="brand-logo bg-white border-neutral-600">
        <a href="{{ route('admin.dashboard') }}">
            <img src="" alt="" />
            <h5>Brilliant IT Solution</h5>

        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.systemSetting.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">System Setting</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.slider.create')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">Slider</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.notice.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">Notice</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.about.create')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">About</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.service.create')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Service</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.team.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Team</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.gallery.create')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-command"></span><span class="mtext">Gallery</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.generalQuestion.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-pie-chart"></span><span class="mtext">GeneralQuestion</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.contact.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-pie-chart"></span><span class="mtext">Contact Messages</span>
                    </a>

                </li>
                
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
