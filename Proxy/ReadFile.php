<?php


namespace Proxy;


class ReadFile extends AbstractReadFile
{
    const DOCUMENTS_PATH = __DIR__;

    public function __construct($fileName)
    {
        $this->setFileName($fileName);
        $this->contents = file_get_contents(self::DOCUMENTS_PATH . "/" . $this->getFileName());
    }
}