<div class="newscategories index">
	<h2><?php echo __('Newscategories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idNewsCategory'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($newscategories as $newscategory): ?>
	<tr>
		<td><?php echo h($newscategory['Newscategory']['idNewsCategory']); ?>&nbsp;</td>
		<td><?php echo h($newscategory['Newscategory']['Name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $newscategory['Newscategory']['idNewsCategory'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $newscategory['Newscategory']['idNewsCategory'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $newscategory['Newscategory']['idNewsCategory']), array(), __('Are you sure you want to delete # %s?', $newscategory['Newscategory']['idNewsCategory'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Newscategory'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List News'), array('controller' => 'news', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('controller' => 'news', 'action' => 'add')); ?> </li>
	</ul>
</div>
