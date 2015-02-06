<?php
	foreach($notes as $note)
	{ ?>
	<div class='note'>
		<h2><?= $note['title'] ?></h2>
		<form action='/notes/update' method='post'>
			<textarea name='desc'><?= $note['description'] ?></textarea>
			<input type='hidden' name='id' value='<?= $note['id'] ?>' />
 		</form>
		<form action='/notes/delete' method='post'>
			<input type='hidden' name='id' value='<?= $note['id'] ?>' />
			<input type='submit' value='Delete' />
 		</form>
	</div>
<?php
	} ?>