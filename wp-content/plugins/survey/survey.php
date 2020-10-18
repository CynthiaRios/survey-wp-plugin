<?php
   /*
   Plugin Name: Survey Responses 3
   Plugin URI:
   description: >-
   Embedded ‘Quiz’ that can be sent to volunteers/donors via q2 to help us send tailored content.
   Version: 1.0
   Author: Fake ECE bros
   Author URI:
   License: N/A
   */
   add_action( 'EWB Ending World Hunger','html_form_code');
   add_action( __FILE__,'html_form_code');
   function html_form_code() {
    	echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
      echo '<p>';
	   	echo '(1) How many people in the world are considered food insecure? <br/>';
    	echo '<input type="text" name="cf-q1" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" />';
    	echo '</p>';
      echo '<p>';
	   	echo '(2) What percent of those facing hunger are women and girls? <br/>';
    	echo '<input type="text" name="cf-q2" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" />';
    	echo '</p>';
      echo '<p>';
	   	echo '(3) On average, how many tons of food is wasted around the world annually? <br/>';
    	echo '<input type="text" name="cf-q3" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" />';
    	echo '</p>';
      echo '<p>';
	   	echo '(4) What Pathway to End Hunger are you most interested in learning more about? <br/>';
    	echo '<input type="text" name="cf-q4" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" />';
    	echo '</p>';
    	echo '<p><input type="submit" name="cf-submitted" value="Send"></p>';
    	echo '</form>';
    }

    function deliver_results() {

    	// if the submit button is clicked, send the q2
    	if ( isset( $_POST['cf-submitted'] ) ) {
        $q1    = sanitize_text_field( $_POST["cf-q1"] );
        $q2    = sanitize_text_field( $_POST["cf-q2"] );
        $q3    = sanitize_text_field( $_POST["cf-q3"] );
        $q4    = sanitize_text_field( $_POST["cf-q4"] );


    		// If q2 has been process for sending, display a success q4
        if ($q1=='a'){
          echo '<div>';
          echo 'Correct';
          echo '</div>';
        }
        else{
          echo '<div>';
          echo 'Incorrect';
          echo '</div>';
        }
        if ($q2=='a'){
          echo '<div>';
          echo 'Correct';
          echo '</div>';
        }
        else{
          echo '<div>';
          echo 'Incorrect';
          echo '</div>';
        }
        if ($q3=='a'){
          echo '<div>';
          echo 'Correct';
          echo '</div>';
        }
        else{
          echo '<div>';
          echo 'Incorrect';
          echo '</div>';
        }
        if ($q4=='a'){
          echo '<div>';
          echo 'Correct';
          echo '</div>';
        }
        else{
          echo '<div>';
          echo 'Incorrect';
          echo '</div>';
        }
    	}
    }

    function cf_shortcode() {
    	ob_start();
    	deliver_results();
    	html_form_code();

    	return ob_get_clean();
    }

    add_shortcode( 'sitepoint_contact_form', 'cf_shortcode' );

?>
