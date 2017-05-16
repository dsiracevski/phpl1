<?php


$homework = [
    'name' => 'Lista na zadachi',
    'assigned_date' => date("Y/m/d"),
    'assigned_to' => 'Darko',
    'due_date' => date("Y/m/d", strtotime('+1 Week')),
    'completed' => false
];


require 'index.tmlp.php';