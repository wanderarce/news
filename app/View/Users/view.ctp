
<h2><?php echo __('User'); ?></h2>

<div class="row">

    <button class="btn-link">
        <b class=" glyphicon glyphicon-edit">
            <?php echo $this->Html->link(__('User'), array('action' => 'edit', $user['User']['id'])); ?> 
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-minus">
            <?php echo $this->Form->postLink(__('User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id'])));
            ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('Users'), array('action' => 'index')); ?>
        </b>
    </button>

    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('Groups'), array('controller' => 'groups', 'action' => 'index')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('Group'), array('controller' => 'groups', 'action' => 'add')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('News'), array('controller' => 'news', 'action' => 'index')); ?>
        </b>
    </button>

    <button class="btn-link">
        <b class=" glyphicon glyphicon-add">
            <?php echo $this->Html->link(__('News'), array('controller' => 'news', 'action' => 'add')); ?>
        </b>
    </button>

</div>

<div class="rows">
    <?php 
    ?>
    <?php echo $this->Html->image('files/photo/photo_dir/'.$user['User']['photo']); ?>

    
    <p><b><?php echo __('Username'); ?></b>
        <?php echo h($user['User']['username']); ?></p>
    
    <p><b><?php echo __('Password'); ?></b>
        <?php echo h($user['User']['password']); ?></p>
    
    <p><b><?php echo __('Group'); ?></b>
        <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']));
        ?>
    </p>

    
    <p><b><?php echo __('Created'); ?></b>
        <?php echo h($user['User']['created']); ?>

    </p>
    <p><b><?php echo __('Modified'); ?></b>
        <?php echo h($user['User']['modified']); ?>
        &nbsp;
    </p>

</div>


<div class="related">
    <h3><?php echo __('Related News'); ?></h3>
    <?php if (!empty($user['News'])): ?>
        <table cellpadding = "0" cellspacing = "0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Title'); ?></th>
                <th><?php echo __('Body'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Fonte'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($user['News'] as $news): ?>
                <tr>
                    <td><?php echo $news['id']; ?></td>
                    <td><?php echo $news['user_id']; ?></td>
                    <td><?php echo $news['title']; ?></td>
                    <td><?php echo $news['body']; ?></td>
                    <td><?php echo $news['created']; ?></td>
                    <td><?php echo $news['modified']; ?></td>
                    <td><?php echo $news['fonte']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'news', 'action' => 'view', $news['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'news', 'action' => 'edit', $news['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'news', 'action' => 'delete', $news['id']), array('confirm' => __('Are you sure you want to delete # %s?', $news['id']))); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
