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

}