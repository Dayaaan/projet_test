<?php 

include 'vendor/autoload.php';
use Carbon\Carbon;
$carbon = new Carbon();                  // equivalent to Carbon::now()
$carbon = new Carbon('first day of January 2008', 'America/Vancouver');
echo get_class($carbon);                 // 'Carbon\Carbon'
$carbon = Carbon::now(-5); 

