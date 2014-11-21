<div class="provinces index">
	<h2><?php echo __('Provinces'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idProvince'); ?></th>
			<th><?php echo $this->Paginator->sort('Name'); ?></th>
			<th><?php echo $this->Paginator->sort('idCountry'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($provinces as $province): ?>
	<tr>
		<td><?php echo h($province['Province']['idProvince']); ?>&nbsp;</td>
		<td><?php echo h($province['Province']['Name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($province['Country']['Name'], array('controller' => 'countries', 'action' => 'view', $province['Country']['idCountry'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $province['Province']['idProvince'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $province['Province']['idProvince'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $province['Province']['idProvince']), array(), __('Are you sure you want to delete # %s?', $province['Province']['idProvince'])); ?>
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
		<li><?php echo $this->Html->link(__('New Province'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
