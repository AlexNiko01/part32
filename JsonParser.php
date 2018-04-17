<?php

/**
 * Class JsonParser
 */
class JsonParser
{
    /**
     * @var
     */
    protected $generator;

    /**
     * @param generator
     */
    public function __construct($generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return array
     */
    public function parseJson(): array
    {
        $arr = [];
        foreach ($this->generator as $key => $line) {
            if ($key === 0 || $key === 1 || $key === 2) {
                continue;
            }
            $singleLineArr = json_decode($line, true);
            $arr[] = $this->dataRefactor($singleLineArr);
            if ($key === 10) {
                break;
            }
        }
        return $arr;
    }

    /**
     * @param $singleLineArr array
     * @return array
     */

    protected function dataRefactor($singleLineArr):array
    {
        $singleLineArr['_source']['_id'] = $singleLineArr['_id'];
        $singleLineArr = $singleLineArr['_source'];
        ksort($singleLineArr);
        return $singleLineArr;
    }
}