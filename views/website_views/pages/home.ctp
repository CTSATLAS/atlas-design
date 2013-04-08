<?php
/** 
 * @author Brandon Cordell
 * @copyright Complete Technology Solutions 2011
 * @link http://ctsfla.com
 */
?>
      <div class="row">
        <div class="span12">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail">
                <div class="caption">
                  <h3>Employers</h3>
                </div>
                <div class="thumbnail-pad">
                  <?= $this->Nav->links('Employers Middle', false, 'list') ?>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <div class="caption">
                  <h3>Career Seekers</h3>
                </div>
                <div class="thumbnail-pad">
                  <?= $this->Nav->links('Career Seekers Middle', false, 'list') ?>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <div class="caption">
                  <h3>Programs</h3>
                </div>
                <div class="thumbnail-pad">
                  <?= $this->Nav->links('Programs Middle', false, 'list') ?>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <?php echo $this->element('homepage') ?>
      </div>
