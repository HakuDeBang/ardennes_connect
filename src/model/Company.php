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

        // var_dump($dataCompany);

        foreach ($dataCompany->companies as $index => $company) {
            if ($this->checkTag($filter, $company->tags)) {
                $tags = [];
                foreach ($company->tags as $id_tag) {
                    array_push($tags, $dataTags[$id_tag - 1]->name);
                }
                $dataCompany->companies[$index]->tags = $tags;
            } else {
                var_dump(json_encode($dataCompany));
                unset($dataCompany->companies[$index]);
                var_dump(json_encode($dataCompany));
            }
        }

        return $dataCompany->companies;
    }
    private function checkTag($filter, $tags)
    {
        foreach ($tags as $tag) {
            $bool = false;
            if (in_array($tag, $filter)) {
                $bool = true;
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


        foreach ($dataCompany->companies as $index => $company) {
            if (str_contains($company->name, $valueInput)) {
                $tags = [];
                foreach ($company->tags as $id_tag) {
                    array_push($tags, $dataTags[$id_tag - 1]->name);
                }
                $dataCompany->companies[$index]->tags = $tags;
            } else {
                unset($dataCompany->companies[$index]);
            }
        }

        return $dataCompany->companies;
    }
}
