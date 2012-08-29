<?=$form->render()?>
<script>
	$(document).ready(function() {
		
	});
</script>
<?php if(isset($scripts)): ?>
<?php foreach($scripts as $script): ?>
	<script type="text/javascript" src="/assets/js/<?=$script?>.js"></script>
	<?php endforeach; ?>
<?php endif; ?>