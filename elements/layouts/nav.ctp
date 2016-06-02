<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="/">
        <?= $this->Html->image('pacific-gateway-mark.png', array('alt' => 'Pacific Gateway Logo Mark')) ?>
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">Menu Item</a></li>
        <li><a href="#about">Menu Item</a></li>
        <li><a href="#contact">About Pacific Gateway</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="help-link">
          <a href="https://www.uservoice.com/" target="_blank">
            <i class="fa fa-user-voice"></i>
            Help
          </a>
        </li>
        <?php if ($this->Session->read('Auth.User')): ?>
          <?php
            $email = $this->Session->read('Auth.User.email');
            $grav_url = "https://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?s=30";
          ?>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?= $this->Html->image($grav_url, array('class' => 'img-circle')) ?>

              <div>
                <?= $this->Session->read('Auth.User.firstname') ?> <?= $this->Session->read('Auth.User.lastname') ?>
              </div>

              <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
              <li><a href="">Test</a></li>
              <li class="divider"></li>
              <li><a href="/users/logout">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li>
            <a href="/users/login">
              Login
              <i class="fa fa-sign-out"></i>
            </a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>