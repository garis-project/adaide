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
      <li class="nav-item dropdown <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="dashboard"){echo "active";}?>">
        <a href="<?= base_url('admin'); ?>" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>

      <li class="menu-header">Data Master</li>
      <li class="nav-item dropdown <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="events"){echo "active";}?>">
        <a href="<?= base_url('admin/events') ?>" class="nav-link"><i class="fas fa-calendar-alt"></i> <span>Events</span></a>
      </li>
      <li class="nav-item dropdown <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="stage"){echo "active";}?>">
        <a href="<?= base_url('admin/stage') ?>" class="nav-link"><i class="fas fa-map-marker-alt"></i> <span>Stage</span></a>
      </li>
      <li class="nav-item dropdown <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="ticket"){echo "active";}?>">
        <a href="<?= base_url('admin/ticket') ?>" class="nav-link"><i class="fas fa-ticket-alt"></i> <span>Ticket Type</span></a>
      </li>
      <li class="menu-header">Operation</li>
      <li class="nav-item dropdown">
        <a href="" class="nav-link has-dropdown <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="order"){echo "active";}?>"><i class="fas fa-bell"></i> <span>Order</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('admin/order'); ?>">By Events</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="" class="nav-link has-dropdown <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="exchange"){echo "active";}?>"><i class="fas fa-exchange-alt"></i> <span>Exchange</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="exhange" && $this->uri->segment(3)=="order"){echo "active";}?>" href="<?= base_url('admin/exchange/order'); ?>">Order</a></li>
          <li><a class="nav-link <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="exhange" && $this->uri->segment(3)=="ticket"){echo "active";}?>" href="<?= base_url('admin/exchange/ticket'); ?>">Ticket</a></li>
        </ul>
      </li>
      <li class="menu-header">Settings</li>
      <li class="nav-item dropdown">
        <a href="<?= base_url('admin/notification'); ?>" class="nav-link <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="wa"){echo "active";}?>"><i class="fas fa-envelope"></i> <span>Whatsapp</span></a>
      </li>
      <li class="nav-item dropdown" onclick="payment()" >
        <a class="nav-link <?php if($this->uri->segment(1)=="admin" && $this->uri->segment(2)=="payment"){echo "active";}?>"><i class="fas fa-university"></i><span>Payment</span></a>
      </li>
    </ul>
  </aside>
</div>
