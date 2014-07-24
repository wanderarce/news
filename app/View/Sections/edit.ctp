<div class="row">
    <button class="btn-link">
        <b class=" glyphicon glyphicon-remove">
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Section.id')), array('confirm'=> __('Are you sure you want to delete # %s?', $this->Form->value('Section.id')))); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?>
        </b>
    </button>
</div>
<div class="categories form">
<?php echo $this->Form->create('Section'); ?>
	<fieldset>
		<legend><?php echo __('Edit Section'); ?></legend>
	<div class="row">
            <div class="col-md-4">

                    <?php
		echo $this->Form->input('id');
		echo $this->Form->input('section',array('class'=>'form-control'));
	?>
            </div>
        </div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
