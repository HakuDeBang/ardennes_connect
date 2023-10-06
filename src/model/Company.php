<?php

class Company
{
    private $dataCompany = 'src/assets/datas/Company.json';

    function getAll()
    {
        $dataCompany = json_decode(file_get_contents($this->dataCompany));
        $Tags = new Tag();
        $dataTags = $Tags->getAll();

        foreach ($dataCompany->companies as $index => $company) {
            $tags = [];
            foreach ($company->tags as $id_tag) {
                array_push($tags, $dataTags[$id_tag - 1]->name);
            }
            $dataCompany->companies[$index]->tags = $tags;
        }

        return $dataCompany->companies;
    }

    function getCompanyByFilter($filter)
    {
        $dataCompany = json_decode(file_get_contents($this->dataCompany));
        $Tags = new Tag();
        $dataTags = $Tags->getAll();

        $companies = [];

        foreach ($dataCompany->companies as $index => $company) {

            if ($this->checkTag($filter, $company->tags)) {
                $tags = [];
                foreach ($company->tags as $id_tag) {
                    array_push($tags, $dataTags[$id_tag - 1]->name);
                }
                $dataCompany->companies[$index]->tags = $tags;
                array_push($companies, $dataCompany->companies[$index]);
            }
        }

        return $companies;
    }
    private function checkTag($filters, $tags)
    {
        $bool = true;
        foreach ($filters as $filter) {
            if (!in_array($filter, $tags)) {
                $bool = false;
                break;
            }
        }
        return $bool;
    }

    function getCompanyBySearch($valueInput)
    {
        $dataCompany = json_decode(file_get_contents($this->dataCompany));
        $Tags = new Tag();
        $dataTags = $Tags->getAll();

        $companies = [];
        foreach ($dataCompany->companies as $index => $company) {
            if (str_contains(strtolower($company->name), strtolower($valueInput))) {
                $tags = [];
                foreach ($company->tags as $id_tag) {
                    array_push($tags, $dataTags[$id_tag - 1]->name);
                }
                $dataCompany->companies[$index]->tags = $tags;
                array_push($companies, $dataCompany->companies[$index]);
            }
        }

        return $companies;
    }
}
