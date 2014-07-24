<div class="row">

    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__(' News'), array('action' => 'add')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('User'), array('controller' => 'users', 'action' => 'add')); ?>
        </b>
    </button>

    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('Categories'), array('controller' => 'categories', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('User'), array('controller' => 'users', 'action' => 'add')); ?>

        </b>
    </button>
    
</div>
