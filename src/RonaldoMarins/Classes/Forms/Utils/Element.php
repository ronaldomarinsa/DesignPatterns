<?php
/**
 * @author Ronaldo Marins
 * Date: 18/04/2015
 * 02 - Projeto | Módulo 04 - Design Patterns | Potal Code Education
 * Linguagem: php
 */

namespace RonaldoMarins\Classes\Forms\Utils;
use RonaldoMarins\Classes\Forms\Interfaces\ElementInterfaces;

class Element implements ElementInterfaces
{
    public $tag;
    public  $properties;
    protected $elementsFilho;


    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function open()
    {
        echo "\n<{$this->tag}";
        if ($this->properties){
            foreach ($this->properties as $name=>$value){
                echo " {$name}=\"{$value}\"";
            }
        }
        echo ">\n";

    }

    public function close()
    {
        echo "</{$this->tag}>\n";
    }

    public function render()
    {
        $this->open();
    }
    
} 