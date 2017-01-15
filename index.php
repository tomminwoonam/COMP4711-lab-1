<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         * User: Tommy
         * Date: 1/15/2017
         * Time: 1:49 AM
         */
        include('Student.php');

        $students = array();

        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        $third = new Student();
        $third->surname = "Nam";
        $third->first_name = "Tom";
        $third->add_email('school','tnam1@my.bcit.ca');
        $third->add_grade(85);
        $students['t123'] = $third;

        ksort($students); // one of the many sort functions

        foreach($students as $student)
            echo $student->toString();

        ?>
    </body>
</html>
