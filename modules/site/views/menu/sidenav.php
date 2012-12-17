<?php $count = 0; ?>
<ul id="sidenav" class="nav nav-tabs nav-stacked">
	<?php foreach($menu['items'] as &$item): ?>
	<?php $count++; ?>
	<?php $classes = ''; ?>
	<?php $a_classes = ''; ?>
	<?php if(isset($item['classes'])): ?>
		<?php $classes = join(' ', $item['classes']); ?>
		<?php endif; ?>
	<?php if(isset($item['a_classes'])): ?>
		<?php $a_classes = join(' ', $item['a_classes']); ?>
		<?php endif; ?>
	<li class="<?=$classes?>" id="menu<?=$count?>">
		<?php $attributes = array('class' => $a_classes); ?>
		<?=HTML::anchor($item['url'], $item['title'], $attributes, null, false)?>
	</li>
	<?php endforeach; ?>
</ul><!-- sidenav -->