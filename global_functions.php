<?php
//Global PHP functions:

date_default_timezone_set('Europe/London'); //Fix timezone issue

function display_array($array, $option) {
	if($option == 'one_line') {
		foreach($array as $value) {
			echo($value.', ');
		}
	} else if($option == 'line_line') {
		foreach($array as $value) {
			echo($value);
			echo('<br>');
		}
	}
}

?>