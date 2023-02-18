<?php


namespace Adapter;


class DataAdapter implements AdapterInterface
{
    private DataService $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function setData(array $data)
    {
        $this->dataService->setName($data['name']);
        $this->dataService->setPhoneNumber($data['phone']);
        $this->dataService->setEmail($data['email']);
    }
}