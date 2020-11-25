<?php

if (!defined('BASEPATH'))
     exit('No direct script access allowed');

function getSearch()
{
     $string = '<div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
                <input id="searchTerm" type="text" class="form-control" placeholder="Search Data..." onkeyup="doSearch()">
            </div>';
     return $string;
}

function getBreadcrumn($message = '')
{
     $string = '<ol class="breadcrumb">
            <li>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <a href="' . site_url("home") . '">
                    Home
                </a>
            </li>
            <li>';
     $string .=isset($message) ? $message : "Nothing";
     $string .='</li>
            </ol>';
     return $string;
}

function send_message($id, $message, $current, $total, $redirect = true, $status = "Running", $info = "")
{
     $data = array(
         'current' => $current,
         'total' => $total,
         'message' => $message,
         'redirect' => $redirect,
         'status' => $status,
         'info' => $info,
     );

     echo json_encode($data);
     ob_flush();
     flush();
}
