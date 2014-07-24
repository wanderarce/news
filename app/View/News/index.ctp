<h2><?php echo __('News'); ?></h2>
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

<div class="row">
    <div class="panel">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('title'); ?></th>
                    <th><?php echo $this->Paginator->sort('subtitle'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th><?php echo $this->Paginator->sort('fonte'); ?></th>
                    <th><?php echo $this->Paginator->sort('category_id'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($news as $news): ?>
                    <tr>
                        <td><?php echo h($news['News']['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($news['User']['username'], array('controller' => 'users', 'action' => 'view', $news['User']['id'])); ?>
                        </td>
                        <td><?php echo h($news['News']['title']); ?>&nbsp;</td>
                        <td><?php echo ($news['News']['subtitle']); ?>&nbsp;</td>
                        <td><?php echo h($news['News']['created']); ?>&nbsp;</td>
                        <td><?php echo h($news['News']['modified']); ?>&nbsp;</td>
                        <td><?php echo h($news['News']['fonte']); ?>&nbsp;</td>
                        <td><?php echo h($news['Category']['category']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), array(), __('Are you sure you want to delete # %s?', $news['News']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            <div class="clearfix">
            <p>
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>	
            </p>
        </div>
        <ul class="pagination pull-right">
            <li><?php
                echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                echo $this->Paginator->numbers(array('separator' => ''));
                echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                ?>
            </li>
        </ul>

    </div>
</div>
