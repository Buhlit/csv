<?php

class CSV {
    private $file_name = 'tmp';
    private $headers = array();
    private $lists = array();

    /**
     * @param string $string
     */
    public function addHeader($string) {
        $this->headers[] = $string;
    }

    /**
     * @param array $headers
     */
    public function addHeaders($headers) {
        if(is_array($headers)) {
            foreach($headers AS $header) {
                $this->addHeader($header);
            }
        }
    }

    /**
     * @param array $values
     */
    public function addList($values) {
        $this->lists[] = $values;
    }

    public function download() {
        $this->makeCVSFile();

        header('Content-Encoding: UTF-8');
        header('Content-Type: application/csv; charset=UTF-8');
        header('Content-Disposition: attachment; filename="'.$this->file_name.'.csv";');
    }

    private function makeCVSFile() {
        $f = fopen('php://output', 'w');
        fprintf($f, chr(0xEF).chr(0xBB).chr(0xBF));

        fputcsv($f, $this->getHeaders(), ';');

        foreach ($this->lists as $list) {
            fputcsv($f, $list, ';');
        }
    }

    public function getHeaders() {
        return $this->headers;
    }

    public function getLists() {
        return $this->lists;
    }

    public function getFileName() {
        return $this->file_name;
    }

    /**
     * @param string $name
     */
    public function setFileName($name) {
        $this->file_name = $name;
    }
}