<?php

/**
 * Class FileReader
 */
class FileReader
{
    /**
     * @var $file
     */
    protected $file;

    /**
     * @param $file string
     */
    public function __construct($file) {
        $this->file = $file;
    }
    /**
     * @return Generator
     */
    public function readFile(): generator
    {
        $fp = fopen($this->file, 'rb');

        while (($line = fgets($fp)) !== false)
            yield rtrim($line, "\r\n");

        fclose($fp);
    }


}