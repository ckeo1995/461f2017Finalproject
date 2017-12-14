<?php
 if ( array_key_exists ('file', $_POST)){
       $filename = $_POST['file'];
       if ( file_exists ( $filename ) ) {
           unlink( $filename );
           echo 'File '.$filename.' has been deleted';
       }	
  }
?>
