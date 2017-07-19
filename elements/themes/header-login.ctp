<div class="row-fluid">
    <?php if ($this->Session->read('Auth.User')): ?>
        <?php
        $firstname = $this->Session->read('Auth.User.firstname');
        $lastname = $this->Session->read('Auth.User.lastname');
        ?>
        <div style="margin-right:15px">
            <a class="" href="/users/dashboard">
                <?php printf(__('Logged in as: <strong>%s %s</strong>', true), ucwords($firstname), ucwords($lastname)) ?>
            </a>
        </div>
    <?php else: ?>

        <div class="btn-group-1">
            <?=
            $this->Html->link(__('Login', true), array(
                'controller' => 'users',
                'action' => 'login',
                'kiosk' => false
            ), array(
                'class' => 'btn-'
            ))
            ?> |
            <?=
            $this->Html->link(__('Register', true), array(
                'controller' => 'users',
                'action' => 'registration',
                'kiosk' => false
            ), array(
                'class' => 'btn-'
            ))
            ?>
        </div>

    <?php endif ?>
</div>
