<style>
    /*add full-width input fields*/

    form
    {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid #ccc;
        box-sizing: border-box;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kwes.io/js/kwes.js"></script>

<?php
  /*
   Plugin Name: Radio Quiz
   Plugin URI:
   description: Radio Button Working Survey
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
    	echo '<input type="radio" name="cf-q1" pattern="[a-zA-Z0-9 ]+" value="a' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" />820 Million<br/>';
      echo '<input type="radio" name="cf-q1" pattern="[a-zA-Z0-9 ]+" value="b' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" />375 Million<br/>';
      echo '<input type="radio" name="cf-q1" pattern="[a-zA-Z0-9 ]+" value="c' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" />947 Million<br/>';
      echo '<input type="radio" name="cf-q1" pattern="[a-zA-Z0-9 ]+" value="d' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" />50  Million<br/>';
    	echo '</p>';
      echo '<p>';
	   	echo '(2) What percent of those facing hunger are women and girls? <br/>';
    	echo '<input type="radio" name="cf-q2" pattern="[a-zA-Z0-9 ]+" value="a' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" />35%<br/>';
      echo '<input type="radio" name="cf-q2" pattern="[a-zA-Z0-9 ]+" value="b' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" />60%<br/>';
      echo '<input type="radio" name="cf-q2" pattern="[a-zA-Z0-9 ]+" value="c' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" />73%<br/>';
      echo '<input type="radio" name="cf-q2" pattern="[a-zA-Z0-9 ]+" value="d' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" />52%<br/>';
    	echo '</p>';
      echo '<p>';
	   	echo '(3) On average, how many tons of food is wasted around the world annually? <br/>';
    	echo '<input type="radio" name="cf-q3" pattern="[a-zA-Z0-9 ]+" value="a' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" />730 Million<br/>';
      echo '<input type="radio" name="cf-q3" pattern="[a-zA-Z0-9 ]+" value="b' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" />800,000<br/>';
      echo '<input type="radio" name="cf-q3" pattern="[a-zA-Z0-9 ]+" value="c' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" />1.3 Billion<br/>';
      echo '<input type="radio" name="cf-q3" pattern="[a-zA-Z0-9 ]+" value="d' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" />250 Million<br/>';
    	echo '</p>';
      echo '<p>';
	   	echo '(4) What Pathway to End Hunger are you most interested in learning more about? <br/>';
    	echo '<input type="radio" name="cf-q4" pattern="[a-zA-Z0-9 ]+" value="a' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" />Nourishing Lives<br/>';
      echo '<input type="radio" name="cf-q4" pattern="[a-zA-Z0-9 ]+" value="b' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" />Empowering Communities<br/>';
      echo '<input type="radio" name="cf-q4" pattern="[a-zA-Z0-9 ]+" value="c' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" />Responding to Emergencies<br/>';
      echo '<input type="radio" name="cf-q4" pattern="[a-zA-Z0-9 ]+" value="d' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" />Growing the Movement<br/>';
    	echo '</p>';
      echo '<p>';
      echo 'Your Email (required) <br/>';
      echo '<input type="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />';
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
        $email    = sanitize_text_field( $_POST["cf-email"] );


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
        if ($q2=='b'){
          echo '<div>';
          echo 'Correct';
          echo '</div>';
        }
        else{
          echo '<div>';
          echo 'Incorrect';
          echo '</div>';
        }
        if ($q3=='c'){
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
        if ($q4=='b'){
          echo '<div>';
          echo 'Correct';
          echo '</div>';
        }
        if ($q4=='c'){
          echo '<div>';
          echo 'Correct';
          echo '</div>';
        }
        if ($q4=='d'){
          echo '<div>';
          echo 'Correct';
          echo '</div>';
        }
        echo '<br>';
        echo $email;
    	}
    }

    function cf_shortcode() {
    	ob_start();
    	html_form_code();
		  deliver_results();

    	return ob_get_clean();
    }

    add_shortcode( 'radio_quiz', 'cf_shortcode' );

?>
