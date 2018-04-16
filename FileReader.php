<?php

/**
 * Class FileReader
 */
class FileReader
{
    /**
     * @param string $fileName
     * @return resource
     */
    public function readFile(string $fileName)
    {
        $filePath = 'txt/'.$fileName;
        $fileHandle = fopen($filePath, "r");
        return $fileHandle;
    }

}