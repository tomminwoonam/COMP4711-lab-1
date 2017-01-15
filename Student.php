<?php

/**
 * User: Tommy
 * Date: 1/15/2017
 * Time: 1:49 AM
 */
class Student
{

    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    function add_email($which,$address)
    {
        $this->emails[$which] = $address;
    }

    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }

    function average()
    {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    function toString()
    {
        $result = '<h3>' . $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")</h3>";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }

}