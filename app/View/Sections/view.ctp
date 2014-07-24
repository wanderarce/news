<div class="row">
    <button class="btn-link">
        <b class=" glyphicon glyphicon-edit">
            <?php echo $this->Html->link(__('Edit Section'), array('action' => 'edit', $section['Section']['id'])); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-remove">
            <?php echo $this->Form->postLink(__('Delete Section'), array('action' => 'delete', $section['Section']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $section['Section']['id']))); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('New Section'), array('action' => 'add')); ?> </li> 
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
    <h2><?php echo __('Section'); ?></h2>
    <p><b><?php echo __('Id') . ": "; ?></b><?php echo h($section['Section']['id']); ?></p>
    <p><b><?php echo __('Section') . ": "; ?></b><?php echo h($section['Section']['section']); ?></p>

    <div class="row">
        <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
            <ul class="event-list">
                <?php
                foreach ($section['Category'] as $category):
                    ?>
                    <li>
                        <h2 class = "title">
                            <?php echo $this->Html->link($category['category'], array('controller' => 'news', 'action' => 'view', $category['id']));
                            ?>
                        </h2>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>
