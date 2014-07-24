<div class="row">

    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?>
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

        
        
        
        
        
<div class="row">
    <?php echo $this->Form->create('User',array('type' => 'file')); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <div class="row">
            <div class="col-md-5">
                <?php echo $this->Form->input('photo', array('type' => 'file')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 ">
                <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php echo $this->Form->input('group_id', array('class' => 'form-control')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php echo $this->Form->label('locked'); echo $this->Form->input('locked',array('type'=> 'checkbox')); ?>
            </div>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>