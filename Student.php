<?php

/**
 * User: Tommy
 * Date: 1/15/2017
 * Time: 1:49 AM
 */
class Student
{

    //the student constructor
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    //the function to add emails to the email array
    function add_email($which,$address)
    {
        $this->emails[$which] = $address;
    }

    //the function to add grades to the grades array
    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }

    //the function to calculate the average of the student
    function average()
    {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    //the function to return a presentable representation of the student data
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