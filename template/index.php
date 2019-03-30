<DOCTYPE html>
<html>
	<head>		
	</head>
<body>
	<div>					
	    <?php
		    if (false !== $results) {
					foreach ($results as $band) {
						    echo '<div><h1>'.$band->getName().'</h1></div>'."\n";
						    echo '<div><strong>'.$band->getGenre().'</strong></div>'."\n";
							
						foreach ($band->getMusician() as $music) {
						    echo '<div>'."\n";
						    echo '<div>'.$music->getName()
									.'<br />'
									.'<small>'.$music->getMusicianType().'</small>'
									.'</div>'."\n";
							echo '<div>';
							foreach ($music->getInstrument() as $instrument) {
									echo $instrument->getName().'<br />'
										.'<small>'.$instrument->getCategory().'</small><br />';
								}
								echo '</div>'."\n";
								echo '</div><hr />';
							}
							
						}
					}
				?>					
	</body>
</html>