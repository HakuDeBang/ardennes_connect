<?php
require_once('src/model/Company.php');
require_once('src/model/Tag.php');

function listPage()
{
    $Company = new Company();
    $companies = $Company->getAll();

    $Tag = new Tag();
    $tags = $Tag->getAll();
    
    include('src/view/activity_list.php');
}

function filteredList($filter = null )
{
}
