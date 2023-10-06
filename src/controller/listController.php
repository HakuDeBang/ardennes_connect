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

function filteredListPage($dataJson)
{
    $data = json_decode($dataJson)->filter;
    $Company = new Company();
    $companies = null;

    if (!empty($data)) {
        $companies = $Company->getCompanyByFilter($data);
    } else {
        $companies = $Company->getAll();
    }
    // var_dump($companies);
    include('src/view/activity_list.php');
}

function filteredList_by_tag($dataJson)
{
    $data = json_decode($dataJson)->filter;
    $Company = new Company();
    $companies = null;

    if (!empty($data)) {
        $companies = $Company->getCompanyByFilter($data);
    } else {
        $companies = $Company->getAll();
    }
    // var_dump($companies);
    echo json_encode($companies);
}

function filteredList_by_search($dataJson)
{
    $data = json_decode($dataJson)->filter;
    $Company = new Company();
    $companies = $Company->getCompanyBySearch($data);

    echo json_encode($companies);
}
