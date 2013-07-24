<div id="moviescontainer">
<?php
foreach($_['movies'] as $movie) {
	print_unescaped($this->inc('part.movie', array('movie' => $movie)));
}
?>
</div>