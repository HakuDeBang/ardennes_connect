<?php
require_once('src/model/company.php');
require_once('src/model/tag.php');

function listPage($dataJson = null)
{
    $filter = [];
    if (!is_null($dataJson)) $filter = json_decode($dataJson);

    $Company = new Company();
    $Tag = new Tag();
    $tags = $Tag->getAll();

    if (!empty($filter)) {
        $companies = $Company->getCompanyByFilter($filter);
    } else {
        $companies = $Company->getAll();
    }

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
