<?php


namespace App\Classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $i;
    protected $result;
    protected $type;

    public function __construct($data = null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
        $this->type = $data['type'];
    }

    public function index()
    {
        if ($this->type == 'asc')
        {
            for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
            {
                $this->result .= $this->i . ' ';
            }
        } else
            {
                for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
                {
                    $this->result .= $this->i . ' ';
                }
            }
        return $this->result;


    }
}