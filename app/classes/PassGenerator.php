<?php
namespace App\classes;
class PassGenerator
{
    public $givenLength;
    public $passwordData = [];
    public $password;
    public $result;
    public $maxIndex;
    public $index;
    public $i;

    public function __construct($data)
    {
        $this->givenLength = $data['given_length'];
    }

    public function index()
    {
        $this->passwordData = ['A', 'a', '#', '$', '%', '1', '2', '3', '4', '5', '0', '_', '-', '@'];
        $this->maxIndex = count($this->passwordData) - 1;
        for ($this->i = 0; $this->i < $this->givenLength; $this->i++)
        {
            $this->index = rand(0, $this->maxIndex);
            $this->password .= $this->passwordData[$this->index];
        }
        return $this->password;
    }
}