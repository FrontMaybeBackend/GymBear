<?php

namespace classes;

use FormConfig;

include("database/FormConfig.php");

class
FormControl extends FormConfig
{

    public $title;

    public $body;

    public $img;

    public function __construct($title, $body, $img)
    {
        $this->title = $title;
        $this->body = $body;
        $this->img = $img;
    }

    public $errorForm = array(
        "inputs" => "inputs are required"
    );

    public function formValidation()
    {
        $send = true;
        if ($this->inputsValidation() == false) {
            $send = false;
            return $this->errorForm['inputs'];
        }
        if ($send == true) {
            $this->addFormToDatabase("$this->title", "$this->body", $this->img);

        }
        return $send;
    }

    public function inputsValidation()
    {
        $form = true;
        if (empty($this->title) || empty($this->body) || empty($this->img)) {
            $form = false;
        } else {
            $form = true;
        }
        return $form;
    }

}