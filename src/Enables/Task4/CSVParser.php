<?php

namespace Enables\Task4;


class CSVParser {

    private $calculator;

    public function setCalculator($calculator) {
        $this->calculator = $calculator;
    }

    public function processCSV($fileLocation) {
        $result = '';
        $handle = fopen($fileLocation,'r');
        while ($line = fgets($handle)) {
            $items = explode(',',trim($line));
            if (empty($items[0]) || ! isset($items[1])) {
                continue;
            }
            $result .= $this->calculator->parseItem( trim($items[0]), trim($items[1])).PHP_EOL;
        }
        fclose($handle);
        return $result;
    }

}

