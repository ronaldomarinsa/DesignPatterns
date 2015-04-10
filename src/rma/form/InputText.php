<?php
namespace rma\Form;

class InputText implements FormElementInterface
{
    //O name e id do objeto serão iguais.
    //Não serão utilizados os demais atributos como: rows, cols, OnClick, OnKeyPress, etc...
    private $name_id;
    private $type;

    public function __construct($name_id)
    {
        $this->name_id = $name_id;
        $this->type="input_text";
    }

    public function getType()
    {
        return $this->type;
    }

    public function getNameId()
    {
        return $this->name_id;
    }
}