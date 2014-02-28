<header class="p0">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="header-block clearfix">
                    <div class="row masthead">
                        <div class="span4">
                            <h1 class="brand">
                                <a href="/"><img src="/img/theme/pinellas.png" alt=""></a>
                            </h1>
                        </div>
                    </div>
        <?= $this->element('layouts/nav') ?>
                </div>
            </div>
        </div>
<?php if (!empty($this->params['pass']) && $this->params['pass'][0] == 'home'): ?>
    <?= $this->element('layouts/middle_nav') ?>
<?php endif; ?>
    </div>
</header>
