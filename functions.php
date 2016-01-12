<?php

/* ________  _________________  __  ___   ________  ___   ______________________  _   _______
  / ____/ / / / ___/_  __/ __ \/  |/  /  / ____/ / / / | / / ____/_  __/  _/ __ \/ | / / ___/
 / /   / / / /\__ \ / / / / / / /|_/ /  / /_  / / / /  |/ / /     / /  / // / / /  |/ /\__ \ 
/ /___/ /_/ /___/ // / / /_/ / /  / /  / __/ / /_/ / /|  / /___  / / _/ // /_/ / /|  /___/ / 
\____/\____//____//_/  \____/_/  /_/  /_/    \____/_/ |_/\____/ /_/ /___/\____/_/ |_//____/                                                                                             
*/




// Allow the session to be used.
add_action('init', 'myStartSession', 1);
add_action('wp_logout', 'myEndSession');
add_action('wp_login', 'myEndSession');

function myStartSession() {
    if(!session_id()) {
        session_start();
    }


    if( isset( $_GET['CID'] ) && ! empty( $_GET['CID'] ) ) {
      $_SESSION['CID'] = $_GET['CID'];
    }

    if( isset( $_GET['key'] ) && ! empty( $_GET['key'] ) ) {
      $_SESSION['key'] = $_GET['key'];
    }


}

function myEndSession() {
    session_destroy ();
}
