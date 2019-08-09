<?php require('partials/header.php'); ?>
		<ul>
			<?php foreach ($tasks as $task) : ?>
		<li>
				<?= $task->name ?>
				<?= $task->email ?>
		</li>
			<?php endforeach; ?>
		</ul>
<?php require('partials/footer.php'); ?>
