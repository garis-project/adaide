<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url('admin'); ?>">ADAIDE</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('admin'); ?>">AI</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="<?= base_url('admin'); ?>" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
         
              <li class="menu-header">Data Master</li>
              <li class="nav-item dropdown">
                <a href="" class="nav-link has-dropdown"><i class="fas fa-calendar-alt"></i> <span>Events</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="<?= base_url('admin/events'); ?>">List Events</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="<?= base_url('admin/events/add'); ?>">Add New Events</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Stage</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="<?= base_url('stage'); ?>">List Stage</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="<?= base_url('stage/add'); ?>">Add New Stage</a></li>
                </ul>
              </li>
              <!-- <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ticket-alt"></i> <span>Ticket</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="<?= base_url('ticket'); ?>">List Ticket</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="<?= base_url('ticket/add'); ?>">Add New Ticket</a></li>
                </ul>
              </li> -->
              <!-- <li class="menu-header">Operation Data</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-sellsy"></i> <span>Sales</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link beep beep-sidebar" href="<?= base_url('events'); ?>">List Events</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="<?= base_url('events/add'); ?>">Add New Events</a></li>
                </ul>
              </li> -->
            </ul>
<!-- 
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div> -->
        </aside>
      </div>