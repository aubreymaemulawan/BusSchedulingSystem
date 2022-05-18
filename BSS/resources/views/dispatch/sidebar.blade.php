<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./dispatch">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Dispatcher Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="./dispatch">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dispatcher Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Bus Collapse Menu -->
    <li id=main-bus class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBus"
            aria-expanded="true" aria-controls="collapseBus">
            <i class="fas fa-fw fa-bus"></i>
            <span>Manage Bus</span>
        </a>
        <div id="collapseBus" class="collapse" aria-labelledby="headingBus" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a id=menu-bus class="collapse-item" href="./bus">Manage Bus</a>
                <a class="collapse-item" href="./location">Locations</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <!-- Nav Item - Schedule Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSchedule"
            aria-expanded="true" aria-controls="collapseSchedule">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Manage Schedule</span>
        </a>
        <div id="collapseSchedule" class="collapse" aria-labelledby="headingSchedule" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="./schedule">Schedule List</a>
                <a class="collapse-item" href="#">Transactions</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Websites
    </div>

    <!-- Nav Item - Website -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-globe"></i>
            <span>Go to Website</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->