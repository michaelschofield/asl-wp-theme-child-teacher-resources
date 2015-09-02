<?php 

wp_register_script( 'asl-listicles', '//sherman.library.nova.edu/cdn/scripts/min/embed-listicles-1.0.min.js', array( 'pls-js' ), '', true );
wp_register_script( 'asl-librarylearn', '//sherman.library.nova.edu/cdn/scripts/min/embed-librarylearn-videos-1.0.min.js', array( 'pls-js' ), '', true );

wp_register_style( 'teacher-resources', 'http://sherman2.library.nova.edu/cdn/styles/css/public-global/s--teacher-resources.css', array( 'pls-stylesheet'), 'all' );

wp_enqueue_script( 'asl-listicles' ); 
wp_enqueue_script( 'asl-librarylearn' ); 
 wp_enqueue_style('teacher-resources');


?>