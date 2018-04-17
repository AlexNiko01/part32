<?php

/**
 * Class CsvExporter
 */
class CsvExporter
{
    /**
     * @param $productsData array
     */
    public function saveCsv($productsData)
    {
        $file = 'csv/product_distributors.csv';

        $fp = fopen($file, 'w');
        $header = array_keys($productsData[0]);
        fputcsv($fp, $header);
        foreach ($productsData as $productData) {
            fputcsv($fp, $productData);
        }
        fclose($fp);
    }
}