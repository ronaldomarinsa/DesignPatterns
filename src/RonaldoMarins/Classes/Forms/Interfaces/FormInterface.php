<?php
/**
 * @author Ronaldo Marins
 * Date: 18/04/2015
 * 02 - Projeto | Módulo 04 - Design Patterns | Potal Code Education
 * Linguagem: php
 */

namespace RonaldoMarins\Classes\Forms\Interfaces;
use RonaldoMarins\Classes\Forms\Utils\Element;

interface FormInterface 
{
    public function createField(Element $element);
    
    public function close(Element $element);
}
