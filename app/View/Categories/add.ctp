<div class="row">
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?>
        </b>
    </button>
</div>
<div class="categories form">
    <?php echo $this->Form->create('Category'); ?>
    <fieldset>
        <legend><?php echo __('Add Category'); ?></legend>
        <div class="row">
            <div class="col-md-4">

                <?php
                echo $this->Form->input('category', array('class' => 'form-control'));
                
                echo $this->Form->input('section_id', array('class' => 'form-control'));
                ?>
            </div>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
