<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 1</title>

	<!-- Internal CSS -->
	<style>
		.warna-baris{
			background-color: yellow;
		}
	</style>

</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0">
		<?php for( $i = 1; $i <= 6; $i++ ) : ?>
		   <?php if( $i % 2 == 1 ) : ?>
			  <tr class="warna-baris">
		   <?php else : ?>
		      <tr></tr>
		   <?php endif; ?>

				<?php for( $j = 1; $j <= 5; $j++ ) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>
			</tr>
		 <?php endfor; ?>
	</table>

</body>
</html>