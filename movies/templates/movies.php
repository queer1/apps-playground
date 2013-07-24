<?php
if(empty($_['movies'])) {
	print_unescaped($this->inc('part.empty'));
} else {
	print_unescaped($this->inc('part.movies'));
}