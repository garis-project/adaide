<div class="main-sidebar bg-dark">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mt-3">
      <a href="<?= base_url('admin'); ?>">
        <img class="logo" src="<?= base_url('assets/backend/img/logo/logo-merah.png') ?>" height="50px">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?= base_url('admin'); ?>">AI</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header text-center">Creative takes</li>
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
          <li><a class="nav-link beep beep-sidebar" href="<?= base_url('admin/stage'); ?>">List Stage</a></li>
          <li><a class="nav-link beep beep-sidebar" href="<?= base_url('admin/stage/add'); ?>">Add New Stage</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
