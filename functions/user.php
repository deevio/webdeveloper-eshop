<?php

/**
*is logged in
* @return boolean true - logged in
*/

     function isLoggedIn() {

        if( isset($_SESSION['user']) && is_numeric($_SESSION['user']) ) {
            return true;
        } else {
            return false;
        }
    }

/**
* get logged user id
* @return int $id - logged user id
*/

     function loggedUserId() {

        if( isset($_SESSION['user']) && is_numeric($_SESSION['user']) ) {
            $id = $_SESSION['user'];
        } else {
            $id = 0;
        }

        return $id;
    }

/**
* is logged user Admin?
* @return bool true - is admin
*/
    function isAdmin() {

        if( isset($_SESSION['privileges']) && $_SESSION['privileges'] == 1 ) {
            return true;
        } else {
            return false;
        }
    }

     

?>