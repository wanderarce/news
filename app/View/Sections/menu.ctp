
<ul class="nav-mk navbar-nav">
    <?php
    foreach ($sections as $section):
        ?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo h($section['Section']['section']); ?><span class="glyphicon glyphicon-user pull-right"></span></a>
            <ul class="dropdown-menu">
                <?php
                foreach ($categories as $cat):
                    if ($cat['Category']['section_id'] == $section['Section']['id']) {
                        ?>
                        <li><?php echo $this->Html->link($cat['Category']['category'], array('controller'=>'categories','action' => 'view', $cat['Category']['id'])); ?></li>
                        <?php
                    }
                endforeach;
                ?>
            </ul>
        </li>
        <?php
                foreach ($categories as $cat):
                    if (isset($cat['Category']['section_id'])) {
                        ?>
                        <li><?php echo $this->Html->link($cat['Category']['category'], array('controller'=>'categories','action' => 'view', $cat['Category']['id'])); ?></li>
                        <?php
                    }
                endforeach;
                ?>
<?php endforeach; ?>

</ul>