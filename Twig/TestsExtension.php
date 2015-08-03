<?php
namespace Victoire\Widget\ProgressBundle\Twig;

class TestsExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'isNumber' => new \Twig_Filter_Method($this, 'isNumberFunction'),
        );
    }

    public function isNumberFunction($var)
    {
        return (is_integer($var) || is_float($var) || is_double($var)) ? true : false;
    }

    public function getName()
    {
        return 'tests_extension';
    }
}
