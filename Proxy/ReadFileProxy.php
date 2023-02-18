<?php


namespace Proxy;


class ReadFileProxy extends AbstractReadFile
{
    private $file;

    public function __construct($fileName)
    {
        $this->setFileName($fileName);
    }

    public function lazyLoad()
    {
        if($this->file === null) {
            $this->file = new ReadFile($this->getFileName());
        }
        return $this->file;
    }
}