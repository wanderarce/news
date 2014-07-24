
<h2><?php echo __('Categories'); ?></h2>
<div class="row">

    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('Section'), array('action' => 'add')); ?>
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-list">
            <?php echo $this->Html->link(__('News'), array('controller' => 'news', 'action' => 'index')); ?> 
        </b>
    </button>
    <button class="btn-link">
        <b class=" glyphicon glyphicon-plus">
            <?php echo $this->Html->link(__('News'), array('controller' => 'news', 'action' => 'add')); ?> 
        </b>
    </button>
    
	
</div>

<div class="row">
    <div class="panel">
        <table class="table">
            <thead>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('section'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
             </thead>
            <tbody>
            <?php foreach ($sections as $section): ?>
            <tr>
                <td><?php echo h($section['Section']['id']); ?>&nbsp;</td>
                <td><?php echo h($section['Section']['section']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $section['Section']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $section['Section']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $section['Section']['id']), array(), __('Are you sure you want to delete # %s?', $section['Section']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
            </tbody>
    </table>
        <hr>
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
