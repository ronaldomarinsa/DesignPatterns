<?php
namespace rma\Form;


class Form
{
    private $elements=array();

    public function addElement($object)
    {
        $this->elements[] = $object;
    }

    public function render()
    {
        $html="<form>";
        for ($i=0;$i<count($this->elements);$i++)
        {
            switch ($this->elements[$i]->getType())
            {
                case "textarea":
                    $html.=$this->elements[$i]->getNameId() . ": <textarea name='" . $this->elements[$i]->getNameId() . "' id='" . $this->elements[$i]->getNameId() . "' cols=30 rows=4></textarea><br /><br />";
                    break;
                case "input_text":
                    $html.=$this->elements[$i]->getNameId() . ": <input type=text name='" . $this->elements[$i]->getNameId() . "' id='" . $this->elements[$i]->getNameId() . "' size=20><br /><br />";
                    break;
                default:
                    $html.="Erro obtendo elemento de nome/id " . $this->elements[$i]->getNameId() . " do tipo " . $this->elements[$i]->getType();
            }
        }

        $html.="<input type=submit value='Enviar'>";
        $html.="</form>";

        return $html;
    }
}