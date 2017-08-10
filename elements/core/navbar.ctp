<style>
.nav li a.admin-dash-link {

  background-color: #005CA8;
  text-transform: uppercase

}
#top-nav li a:hover  {

  background-color: #0D74BD;
  text-transform: uppercase
  color: #033C7C;

}

</style>
<div id="top-nav" class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/"><?php echo Configure::read('Company.name') ?></a>
            <ul class="nav pull-right">
                <?php if ($this->Session->read('Auth.User') && $this->Session->read('Auth.User.role_id') != 1 ): ?>
                    <li>
                   
                        <a href="/admin/users/dashboard" class="admin-dash-link"><strong> <i class="fa fa-chevron-right"></i> Admin Dashboard</strong></a>
                    </li>
                <?php endif ?>
                
            </ul>
        </div>
    </div>
</div>
