<?php

/**
 * Class CsvExporter
 */
class CsvExporter
{
    /**
     * @param $productData
     */
    public function saveCsv($productData)
    {
        $file = 'csv/product_distributors.csv';
        chmod('csv', 0775);
        $fp = fopen($file, 'w');
        fwrite($fp, $productData);
        fclose($fp);
    }
}