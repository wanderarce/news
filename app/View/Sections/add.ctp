<div class="row">
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?>
        </b>
    </button>
</div>
<div class="categories form">
    <?php echo $this->Form->create('Section'); ?>
    <fieldset>
        <legend><?php echo __('Add Section'); ?></legend>
        <div class="row">
            <div class="col-md-4">

                <?php
                echo $this->Form->input('section', array('class' => 'form-control'));
                ?>
            </div>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
