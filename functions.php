<?php
function getImages() {
	$handle = opendir( dirname( realpath( __FILE__ ) ) . '/img/portfolio/' );
	while ( $file = readdir( $handle ) ) {
		if ( $file !== '.' && $file !== '..' ) {
			$images[] = $file;
		}
	}

	return $images;
}


function readPortfolio( $dir ) {

	$result  = array();
	$scandir = $_SERVER['DOCUMENT_ROOT'] . $dir;
	$cdir    = scandir( $scandir );
	foreach ( $cdir as $key => $value ) {
		if ( ! in_array( $value, array( ".", ".." ) ) ) {
			if ( is_dir( $scandir . DIRECTORY_SEPARATOR . $value ) ) {
				$result[ $value ] = readPortfolio( $dir . DIRECTORY_SEPARATOR . $value );
			} else {
				$result[] = $value;
			}
		}
	}

	return $result;
}
