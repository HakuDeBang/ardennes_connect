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
            foreach($company->tags as $id_tag) {
                array_push($tags, $dataTags[$id_tag-1]->name);
            }
            $dataCompany->companies[$index]->tags = $tags;
        }
        
        return $dataCompany->companies;
    }
}
