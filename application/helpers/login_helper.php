<?php

if (!defined('BASEPATH'))
        exit('No direct script access allowed');

function is_logged_in()
{
        $CI = & get_instance();

        $CI->load->library('session');

        // Check if all session variables are set 
        if ($CI->session->userdata('logged_in'))
                return TRUE;
        else
                return FALSE;
}
