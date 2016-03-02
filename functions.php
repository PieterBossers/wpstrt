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
}

function myEndSession() {
    session_destroy ();
}


// function to get a blob
//
// Translated piece of content
function __blob( $name ) {

  // get the blob in the current language that we need.
    $blob = get_posts(
        array(
            'name'      => $name,
            'post_type' => 'blob'
        )
    );

    // hey we got a blob?
    if( $blob ) {
      return $blob[0]->post_content;
    }

    // ok no blob move along.
    return false;
}


// Echo out a blob
function _eblob( $name ) {
  echo __blob( $name );
}