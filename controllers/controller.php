<?php
function DisplayHome()
{
    require("../views/home.php");
}
function Display404()
{
    require("../views/404.php");
}

function dbconnexion(){
    require("../models/connexion.php");
    return db();
}