<div class="row">
    <button class="btn-link">
        <b class=" glyphicon glyphicon-edit">
            <?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-remove">
            <?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li> 
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> 
        </b>
    </button>
</div>

<div class="categories view">
    <h2><?php echo __('Category'); ?></h2>
    <p><b><?php echo __('Id') . ": "; ?></b><?php echo h($category['Category']['id']); ?></p>
    <p><b><?php echo __('Category') . ": "; ?></b><?php echo h($category['Category']['category']); ?></p>

    <div class="row">
        <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
            <ul class="event-list">
                <?php
                foreach ($category['News'] as $news):
                    $datas = date_create($news['created']);
                    ?>
                    <li>
                        <time datetime="<?php echo date_format($datas, 'H:i:s d/m/Y'); ?>">
                            <?php ?>
                            <span class="day"><?php echo date_format($datas, 'd'); ?></span>
                            <span class="month"><?php echo date_format($datas, 'M'); ?></span>
                            <span class="year"><?php echo date_format($datas, 'Y'); ?></span>
                            <span class="time"><?php echo date_format($datas, 'H:i:s'); ?></span>
                        </time>
                        <div class="info">
                            <h2 class="title"> 
                                <?php echo $this->Html->link($news['title'], array('controller' => 'news', 'action' => 'view', $news['id'])); ?>
                            </h2>
                            <p class="desc"> <?php echo $news['subtitle']; ?> </p>
                        </div>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>
