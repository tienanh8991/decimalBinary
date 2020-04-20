<?php


class Convert
{
    protected $value;
    protected $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $limit->value = [];
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function isEmpty()
    {
        return empty($this->value);
    }

    public function isFull()
    {
        return count($this->value) == $this->limit;
    }

    public function push($data)
    {
        if (!$this->isFull()) {
            array_push($this->value, $data);
        } else {
            throw new Exception('Array is full !');
        }
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            return array_pop($this->value);
        } else {
            throw new Exception('Array is empty !');
        }
    }

}