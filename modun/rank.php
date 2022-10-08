<?php
session_start();
if(isset($_GET["auth"]))
{
  echo file_get_contents("rank.html");
}