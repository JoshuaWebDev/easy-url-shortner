<?php

class Shortener {
    private $id;
    private $url;
    private $access;

    public function setId($id) {
        $this->id = $id;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setAccess($access) {
        $this->url = $access;
    }

    public function getId() {
        return $this->id;
    }

    public function getUrl() {
        return $this->url;
    }

    public function getAccess() {
        return $this->access;
    }
}