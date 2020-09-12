<?php namespace Finalclass\classdir;

class Prefix
{
    private $date;
    public function set($date)
    {
        $this->date=$date;
    }
    public function get()
    {
        return $this->date;
    }
}