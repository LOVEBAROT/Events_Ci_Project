<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function fGetDate($time)
{
    $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after

    $dt = new DateTime();
    $dt->setTimestamp($time);
    $dt->setTimezone($tz);
    return $dt->format('d-M-Y H:i:s');
}
