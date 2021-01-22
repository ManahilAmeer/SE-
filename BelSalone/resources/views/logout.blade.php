<?php

use Facade\FlareClient\View;

session()->forget('name');
$view=new View('index'); 
?>
@extends('layout')
<!-- <html>
<a href="index">But</a>
</html> -->