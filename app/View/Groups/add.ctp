<div class="row">
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list-alt">
            <?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list-alt">
            <?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?>
        </b>
    </button>
</div>
<div class="groups form">
    <?php echo $this->Form->create('Group'); ?>
    <fieldset>
        <legend><?php echo __('Add Group'); ?></legend>
        <div class="col-md-4">
            <?php
            echo $this->Form->input('name', array('class'=>'form-control'));
            ?>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>