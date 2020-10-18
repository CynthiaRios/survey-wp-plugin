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
    button {
      background-color: white; /* Green */
      border: none;
      color: black;
      padding-left: 15px;
      padding-right: 15px;
      padding-bottom: 5px;
      padding-top: 5px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    input[type=button] {
        background-color: white;
        color: black;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 5px;
        padding-bottom: 5px;
        margin: 8px 0;
        cursor: pointer;
        width: 100%;
      }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kwes.io/js/kwes.js"></script>

<?php
   /*
   Plugin Name: Button Survey
   Plugin URI:
   description: Large Button Form Example
   Embedded ‘Quiz’ that can be sent to volunteers/donors via q2 to help us send tailored content.
   Version: 1.0
   Author: Fake ECE bros
   Author URI:
   License: N/A
   */
   add_action( 'EWB Ending World Hunger','html_form_code');
   add_action( __FILE__,'html_form_code');

   function html_form_code() {
      echo '<boxed>';
      echo '<div class="kwes-form">';
    	echo '<form multistep action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
      echo '<form-step>';
      echo '<h1 style="center">';
      echo 'Test Your Knowledge';
      echo '</h1>';
      echo '<p>';
	   	echo '(1) How many people in the world are considered food insecure? <br/>';
    	echo '<input type="button" name="cf-q1a" pattern="[a-zA-Z0-9 ]+" value="820 Million' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" data-toggle="modal" data-target="#question1correct"/><br/>';
      echo '<input type="button" name="cf-q1b" pattern="[a-zA-Z0-9 ]+" value="375 Million' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q1c" pattern="[a-zA-Z0-9 ]+" value="947 Million' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q1d" pattern="[a-zA-Z0-9 ]+" value="50  Million' . ( isset( $_POST["cf-q1"] ) ? esc_attr( $_POST["cf-q1"] ) : '' ) . '" size="40" /><br/>';
      //echo '<button>';
      //echo 'Check Your Answer';
      //echo '</button>';
      echo '</p>';
      echo '</form-step>';
      echo '<form-step>';
      echo '<h1 style="center">';
      echo 'Test Your Knowledge';
      echo '</h1>';
      echo '<p>';
	   	echo '(2) What percent of those facing hunger are women and girls? <br/>';
    	echo '<input type="button" name="cf-q2a" pattern="[a-zA-Z0-9 ]+" value="35%' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q2b" pattern="[a-zA-Z0-9 ]+" value="60%' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q2c" pattern="[a-zA-Z0-9 ]+" value="73%' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q2d" pattern="[a-zA-Z0-9 ]+" value="52%' . ( isset( $_POST["cf-q2"] ) ? esc_attr( $_POST["cf-q2"] ) : '' ) . '" size="40" /><br/>';
      //echo '<button>';
      //echo 'Check Your Answer';
      //echo '</button>';
    	echo '</p>';
      echo '</form-step>';
      echo '<form-step>';
      echo '<h1 style="center">';
      echo 'Test Your Knowledge';
      echo '</h1>';
      echo '<p>';
	   	echo '(3) On average, how many tons of food is wasted around the world annually? <br/>';
    	echo '<input type="button" name="cf-q3a" pattern="[a-zA-Z0-9 ]+" value="730 Million' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q3b" pattern="[a-zA-Z0-9 ]+" value="800,000' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q3c" pattern="[a-zA-Z0-9 ]+" value="1.3 Billion' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q3d" pattern="[a-zA-Z0-9 ]+" value="250 Million' . ( isset( $_POST["cf-q3"] ) ? esc_attr( $_POST["cf-q3"] ) : '' ) . '" size="40" /><br/>';
    	echo '</p>';
      //echo '<button>';
      //echo 'Check Your Answer';
      //echo '</button>';
      echo '</form-step>';
      echo '<form-step>';
      echo '<h1 style="center">';
      echo 'Test Your Knowledge';
      echo '</h1>';
      echo '<p>';
	   	echo '(4) What Pathway to End Hunger are you most interested in learning more about? <br/>';
    	echo '<input type="button" name="cf-q4a" pattern="[a-zA-Z0-9 ]+" value="Nourishing Lives' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q4b" pattern="[a-zA-Z0-9 ]+" value="Empowering Communities' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q4c" pattern="[a-zA-Z0-9 ]+" value="Responding to Emergencies' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" /><br/>';
      echo '<input type="button" name="cf-q4d" pattern="[a-zA-Z0-9 ]+" value="Growing the Movement' . ( isset( $_POST["cf-q4"] ) ? esc_attr( $_POST["cf-q4"] ) : '' ) . '" size="40" /><br/>';
    	echo '</p>';
      //echo '<button>';
      //echo 'Check Your Answer';
      //echo '</button>';
      echo '</form-step>';
    	echo '</form>';
      echo '</div>';
      echo '</boxed>';
    }

    function cf_shortcode() {
    	html_form_code();
    }

    add_shortcode( 'button_survey', 'cf_shortcode' );

?>
