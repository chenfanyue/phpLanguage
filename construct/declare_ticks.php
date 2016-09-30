<?php
register_tick_function ( function () {
	echo "tick_handler() called\n";
} );

declare ( ticks = 1 ) {
	
	echo 11;
	
	if (1 > 0) {
		echo 22;
		echo 33;
	}
}
