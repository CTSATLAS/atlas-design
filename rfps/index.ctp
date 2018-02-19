<div class="rfps">
    <?php foreach ($rfps as $rfp): ?>
        <div class="rfp">
            <h2><?php echo $rfp['Rfp']['title'] ?></h2>
            <p><?php echo $rfp['Rfp']['byline'] ?></p>
            <p><?php echo $rfp['Rfp']['description'] ?></p>

            <ul>
                <li><strong><?php __('Date Posted:') ?></strong> <?php echo date('m/d/Y', strtotime($rfp['Rfp']['created'])) ?></li>
                <li><strong><?php __('Deadline:') ?></strong> <?php echo date('m/d/Y', strtotime($rfp['Rfp']['deadline'])) ?></li>
                <li><strong><?php __('Contact:') ?></strong> <?php echo $rfp['Rfp']['contact_email'] ?></li>
            </ul>

            <?php if (!empty($rfp['Rfp']['file'])): ?>
                <br />
                <a class="rfp_download" href="<?php echo $rfp['Rfp']['file'] ?>"><img src="/img/icons/rfp_download_big.png" /><br />Download Public Notice</a>
            <?php endif ?>
        </div>
    <?php endforeach; ?>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
        ));
        ?>  </p>
    <br />
    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
        |   <?php echo $this->Paginator->numbers();?>
        |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
    </div>
</div>
