<?php
class Report {

    public $report = [];

    public function print()
    {
        print_r($this->report);
    }

    public function add($file)
    {
        $this->report[] = $file;
    }
}