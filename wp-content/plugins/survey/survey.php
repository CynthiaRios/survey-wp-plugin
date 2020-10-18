<?php
   /*
   Plugin Name: Hunger Survey
   Plugin URI:
   description: >-
   Embedded ‘Quiz’ that can be sent to volunteers/donors via email to help us send tailored content.
   Version: 1.0
   Author: Fake ECE bros
   Author URI:
   License: N/A
   */
   add_action( 'EWB Ending World Hunger','html_form_code');
   add_action( __FILE__,'html_form_code');
   function html_form_code() {
     //BEGINNING OF QUESTION ONE
     print '<p>(1) How many people in the world are considered food insecure?</p>';
     if ($_POST['answer2']=="a"){
     print '<p><input type="radio" checked="checked" name="answer2" value="a"/>820 Million<br/>';
     $correct++;
     print '&nbsp;&nbspCorrect!';
     }
     else
     print '<p><input type="radio" name="answer2" value="a"/>820 Million<br/>';
     if ($_POST['answer2']=="b")
     print '<input type="radio" checked="checked" name="answer2" value="b"/>375 Million<br/>';
     else
     print '<input type="radio" name="answer2" value="b"/>375 Million<br/>';
     if ($_POST['answer2']=="c")
     print '<input type="radio" checked="checked" name="answer2" value="c"/>947 Million<br/>';
     else
     print '<input type="radio" name="answer2" value="c"/>947 Million<br/>';
     if ($_POST['answer2']=="d")
     print '<input type="radio" checked="checked" name="answer2" value="d"/>50  Million<br/>';
     else
     print '<input type="radio" name="answer2" value="d"/>50  Million<br/><br/></p>';



     //QUESTION 2
     print '<p>(2) What percent of those facing hunger are women and girls?</p>';
     if ($_POST['answer3']=="a")
     print '<input type="radio" checked="checked" name="answer3" value="a"/>35%<br/>';
     else
     print '<input type="radio" name="answer3" value="a"/>35%<br/>';
     if ($_POST['answer3']=="b"){
     print '<input type="radio" checked="checked" name="answer3" value="b"/>60%<br>';
     $correct++;
     print '&nbsp;&nbspCorrect!';
     }
     else
     print '<input type="radio" name="answer3" value="b"/>60%<br/>';
     if ($_POST['answer3']=="c")
     print '<input type="radio" checked="checked" name="answer3" value="c"/>73%<br/>';
     else
     print '<input type="radio" name="answer3" value="c"/>73%<br/>';
     if ($_POST['answer3']=="d")
     print '<input type="radio" checked="checked" name="answer3" value="d"/>52%<br/><br/>';
     else
     print '<input type="radio" name="answer3" value="d"/>52%<br/><br/>';



     //QUESTION 3
     print '<form action="display_code_2.php" method="post">';
     //BEGINNING OF QUESTION TWO
     print '<p>(3) On average, how many tons of food is wasted around the world annually?</p>';
     if ($_POST['answer1']=="a")
     print '<input type="radio" checked="checked" name="answer1" value="a"/>730 Million<br/>';
     else
     print '<p><input type="radio" name="answer1" value="a"/>730 Million<br/>';
     if ($_POST['answer1']=="b")
     print '<input type="radio" checked="checked" name="answer1" value="b"/>800,000<br/>';
     else
     print '<input type="radio" name="answer1" value="b"/>800,000<br/>';
     if ($_POST['answer1']=="c") {
     print '<input type="radio" checked="checked" name="answer1" value="c"/>1.3 Billion<br/>';
     $correct++;
     print '&nbsp;&nbspCorrect!';
     }
     else
     print '<input type="radio" name="answer1" value="c"/>1.3 Billion<br/>';
     if ($_POST['answer1']=="d"){
     print '<input type="radio" checked="checked" name="answer1" value="d"/>250 Million<br/>';
     }
     else
     print '<input type="radio" name="answer1" value="d"/>250 Million<br/></p>';


     //QUESTION 4
     print '<p>(4) What Pathway to End Hunger are you most interested in learning more about?</p>';
     if ($_POST['answer4']=="a")
     print '<input type="radio" checked="checked" name="answer4" value="a"/>Nourishing Lives<br/>';
     else
     print '<input type="radio" name="answer4" value="a"/>Nourishing Lives<br/>';
     if ($_POST['answer4']=="b")
     print '<input type="radio" checked="checked" name="answer4" value="b"/>Empowering Communities<br>';
     else
     print '<input type="radio" name="answer4" value="b"/>Empowering Communities<br/>';
     if ($_POST['answer4']=="c")
     print '<input type="radio" checked="checked" name="answer4" value="c"/>Responding to Emergencies<br/>';
     else
     print '<input type="radio" name="answer4" value="c"/>Responding to Emergencies<br/>';
     if ($_POST['answer4']=="d")
     print '<input type="radio" checked="checked" name="answer4" value="d"/>Growing the Movement<br/><br/>';
     else
     print '<input type="radio" name="answer4" value="d"/>Growing the Movement<br/><br/>';

     foreach ($_POST as $value){
     if (isset ($value)){
     $done++;
     }
     }

     if ($done !=5)
     print '<input type="submit" name="submit" value="check answers" /><br/><br/>';

     if (($done > 0)&&($done < 5))
     print 'You haven&#8217;t answered all the questions. Please finish the quiz and re-submit your answers.';
     if($done==5){
     if ($correct==0)
     $correct="0";
     print 'The correct answers: (1) 820 Million&nbsp;&nbsp; (2) 60%&nbsp;&nbsp; (3) 1.3 Billion';
     }
     echo '<input type="email" name="cf-email" value="' . ( isset( $_POST["cf-email"] ) ? esc_attr( $_POST["cf-email"] ) : '' ) . '" size="40" />';
     echo '</p>';
     echo '<p><input type="submit" name="cf-submitted" value="Send"></p>';
     }
     print '</form>';
      function deliver_mail() {

      	// if the submit button is clicked, send the email
      	if ( isset( $_POST['cf-submitted'] ) ) {

      		// sanitize form values
      		$name    = sanitize_text_field( $_POST["cf-name"] );
      		$email   = sanitize_email( $_POST["cf-email"] );
      		$subject = sanitize_text_field( $_POST["cf-subject"] );
      		$message = esc_textarea( $_POST["cf-message"] );

      		// get the blog administrator's email address
      		$to = get_option( 'admin_email' );

      		$headers = "From: $name <$email>" . "\r\n";

      		// If email has been process for sending, display a success message
      		if ( wp_mail( $to, $subject, $message, $headers ) ) {
      			echo '<div>';
      			echo '<p>Thanks for contacting me, expect a response soon.</p>';
      			echo '</div>';
      		} else {
      			echo 'An unexpected error occurred';
      		}
      	}
      }

      function cf_shortcode() {
      	ob_start();
      	deliver_mail();
      	html_form_code();

      	return ob_get_clean();
      }

      add_shortcode( 'sitepoint_contact_form', 'cf_shortcode' );

?>
