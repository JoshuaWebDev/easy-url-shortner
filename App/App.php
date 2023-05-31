<?php
require_once("Shortener.php");

class App {
    
    public function __construct() {
        if (!is_dir(PATH)) {
            mkdir(PATH, 0775, true);
        }
    }

    public function write(string $url) {
        $shortener = new Shortener();
        $shortener->setId($this->getRandomString(URLLENGTH));
        $shortener->setUrl($url);
        $shortener->setAccess(0);

        $objData = serialize($shortener);

        $fp = fopen(PATH . "/" . $shortener->getId() . ".db", "w");
        fwrite($fp, $objData);
        fclose($fp);
    }

    public function readAll() {
        //
    }

    public function readAllFiles() {
        //
    }

    public function readByUrl(string $url) {
        //
    }

    public function getRandomString(int $lenght) {
        $alphanumeric = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTWXYZ";
        $alphanumLenght = strlen($alphanumeric);

        $str = "";

        for ($i =0; $i < $lenght; $i++) {
            $str .= $alphanumeric[rand(0, $alphanumLenght - 1)];
        }

        return $str;
    }

    public function debug($variable) {
        echo "<div style='background-color: #777; color: #eee; padding: 10px'><pre>";
        print_r($variable);
        echo "</pre></div>";
    }
}