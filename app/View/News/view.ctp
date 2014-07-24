<div class="rows">

    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('Edit News'), array('action' => 'edit', $news['News']['id'])); ?> 
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">

            <?php
            echo $this->Form->postLink(__('Delete News'), array('action' => 'delete', $news['News']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $news['News']['id'])));
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
            <?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?> 
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


<div class="rows">
    <h1><?php echo __('News'); ?></h1>

    <h2><center><?php echo h($news['News']['title']); ?></center></h2>

    <p><?php echo h($news['News']['subtitle']); ?></p>
    
    <p>
        Publicado por <b>
        <?php
        echo $this->Html->link($news['User']['username'], array('controller' => 'users', 'action' => 'view', $news['User']['id']));
        ?></b>
        <span class="pull-right"><b><?php $datas = date_create($news['News']['created']); echo date_format($datas, 'H:i:s d M Y'); ?></b></span>
    </p>    

    <div class="rows">
        <?php echo $news['News']['body']; ?>
        &nbsp;
    </div>

    <div><b><?php echo __('Created'); ?></b>:  <?php echo h($news['News']['created']); ?></div>

    <div><b><?php echo __('Modified'); ?></b>: <?php echo h($news['News']['modified']); ?>;</div>

    <div><b><?php echo __('Fonte'); ?></b>:   <?php echo h($news['News']['fonte']); ?></div>

    <div><b><?php echo __('Category Id'); ?></b>: <?php echo h($news['News']['category_id']); ?></div>
</div>

<div class="rows">
    <h3><?php echo __('Related Categories'); ?></h3>
    <?php if (!empty($news['Category'])): ?>

        <div class="row">
            <div class="panel">
                <table class="table">
                    <thead>
                        <tr>

                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Category'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        ?>
                        <tr>
                            <td><?php echo $news['Category']['id']; ?></td>
                            <td><?php echo $news['Category']['category']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $news['Category']['id']));
                                ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $news['Category']['id']));
                                ?>
                                <?php
                                echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $news['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $news['Category']['id'])));
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php endif; ?>
            <button class="btn-link">
                <b class=" glyphicon glyphicon-plus">
                    <?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?>
                </b>
            </button>
        </div>
    </div>
