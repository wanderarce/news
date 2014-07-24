<div class="row">

    <button class="btn-link">
        <b class=" glyphicon glyphicon-remove">
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))));
            ?>
        </b>
    </button>
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
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('Group'), array('controller' => 'groups', 'action' => 'add')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?>
        </b>
    </button>


</div>


<div class="users form">

    <?php echo $this->Form->create('User',array('type' => 'file')); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <div class="row">
            <div class="col-md-5">
                
                <?php 
                   //oq vc ta fazendo??? seguindo o que vc fl 
                echo $this->Form->input('photo', array('type' => 'file')); ?>
                <?php echo $this->Form->input('photo_dir', array('type' => 'hidden')); 
                ?>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <?php echo $this->Form->input('id', array('class' => 'form-control')); ?>
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
            <div class="col-md-5">
                <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <?php echo $this->Form->input('group_id', array('class' => 'form-control')); ?>
            </div>
        </div>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>