<!--core-->
<div id="top-nav" class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="/"><?php echo Configure::read('Company.name') ?></a>
            <ul class="nav pull-right">
                <?php if ($this->Session->read('Auth.User') && $this->Session->read('Auth.User.role_id') != 1 ): ?>
                    <li>
                        <a href="/admin/users/dashboard"><strong><?php echo Configure::read('Company.name') ?> Administration</strong></a>
                    </li>
                <?php endif ?>
                <?php var_dump($this->Session->read('Auth.User.role_id')) ?>
            </ul>
        </div>
    </div>
</div>
