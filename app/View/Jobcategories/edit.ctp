<div class="jobcategories form">
<?php echo $this->Form->create('Jobcategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Jobcategory'); ?></legend>
	<?php
		echo $this->Form->input('idJobCategory');
		echo $this->Form->input('Name');
		echo $this->Form->input('Description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Jobcategory.y')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Jobcategory.y'))); ?></li>
		<li><?php echo $this->Html->link(__('List Jobcategories'), array('action' => 'index')); ?></li>
	</ul>
</div>
