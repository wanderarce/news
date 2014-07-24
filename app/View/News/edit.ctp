<div class="row">
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('News.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('News.id'))));
            ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?>
        </b>
    </button>


</div>
<div class="news form">
    <?php echo $this->Form->create('News'); ?>
    <fieldset>
        <legend><?php echo __('Edit News'); ?></legend>
        <div class="rows">
            <div class="col-md-11 rows" id="news">
                <?php
                $user_name = $this->Session->read('Auth.User.username');
                echo 'Publicando como: <b>' . $user_name . '</b>';
                $user_id = $this->Session->read('Auth.User.id');

                echo $this->Form->input('user_id', array('class' => 'form-control', 'value' => $user_id, 'type' => 'hidden'));

                echo $this->Form->input('category_id', array('class' => 'form-control'));
                echo $this->Form->input('id', array('class' => 'form-control'));
                
                echo $this->Form->input('title', array('class' => 'form-control'));
                echo $this->Form->input('subtitle', array('class' => 'form-control'));
                ?>


                <label for="texto" >Body</label>
                
                <div class="col-md-9  ">
                <?php echo $this->Form->textarea('body', array('class' => 'ckeditor form-control','id' => 'texto')); ?>
                </div>

                <?php
                echo $this->Form->input('fonte', array('class' => 'form-control'));
                ?>
            </div>
        </div>

    </fieldset>
    <?php echo $this->Form->end(__('Salvar')); ?>
</div>

