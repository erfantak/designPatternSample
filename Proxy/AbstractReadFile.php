<?php


namespace Proxy;


class AbstractReadFile
{
    protected $fileName;
    protected $contents;

    public function getFileName()
    {
        return $this->fileName;
    }

    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    public function getContents()
    {
        return $this->contents;
    }
}