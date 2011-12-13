<div class="posts index">
	<h2><?php echo __('Posts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo 'id' //$this->Paginator->sort('id');?></th>
			<th><?php echo 'name' //$this->Paginator->sort('name');?></th>
			<th><?php echo 'text' //$this->Paginator->sort('text');?></th>
			<th><?php echo 'created' //$this->Paginator->sort('created');?></th>
			<th><?php echo 'modified' //$this->Paginator->sort('modified');?></th>
			<th class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['name']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['text']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<a href="/php/cake/blog2/posts/view/<?php echo $post['Post']['id'];?>">View</a>
			<a href="/php/cake/blog2/posts/edit/<?php echo $post['Post']['id'];?>">Edit</a>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>

			<form action="/php/cake/blog2/posts/delete/<?php echo $post['Post']['id'];?>" name="post_<?php echo $post['Post']['id'];?>" id="post_<?php echo $post['Post']['id'];?>" style="display:none;" method="post"><input type="hidden" name="_method" value="POST"/></form><a href="#" onclick="if (confirm(&#039;Are you sure you want to delete # <?php echo $post['Post']['id'];?>?&#039;)) { document.post_<?php echo $post['Post']['id'];?>.submit(); } event.returnValue = false; return false;">Delete</a>	
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
	</ul>
</div>