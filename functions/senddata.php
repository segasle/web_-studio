<?php
	include 'bd.php';
    include 'function.php';
    $data = $_POST;
    echo ajax_form($data);
    