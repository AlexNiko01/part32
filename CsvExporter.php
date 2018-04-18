<?php

/**
 * Class CsvExporter
 */
class CsvExporter
{
    /**
     * @param $productsData array
     */
    public function saveCsv($productsData): void
    {
        $file = 'csv/product_distributors.csv';
        $fp = fopen($file, 'w');
        try {
            $header = array_keys($productsData[0]);
            fputcsv($fp, $header);
            foreach ($productsData as $productData) {
                fputcsv($fp, $productData);
            }
        } catch (Exception $e) {
            if (isset($fp) && is_resource($fp))
                fclose($fp);
        }
    }
}