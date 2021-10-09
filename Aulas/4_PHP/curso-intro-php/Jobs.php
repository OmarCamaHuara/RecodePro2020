<?php

    require 'app/Models/Job.php'; 
    require 'app/Models/Project.php';
    require_once 'app/Models/Printable.php';

    $job1 = new Job('PHP Developer','this is a awesome job!!!');
    $job1->months = 16;

    $job2 = new Job('Phyton Developer', 'This is a awesome jobe!!!');
    $job2->months = 24;

    $job3 = new Job('HTML Developer','This is a awesome jobe!!!');
    $job3->months = 32;

    $project1 = new Project('Proyect 1', 'Descripcion 1');
    
    $jobs = [
        $job1,
        $job2, 
        $job3
    ];

    $project = [
        $project1
    ];

    // tipe ginting "Printable $job" darle un tipo de entrada a al function

    function printElement(Printable $job){
        if($job->visible == false){
            return;
        }
            echo '<li class="work-position">';
            echo '<h5>' .$job->getTitle() . '</h5>';
            echo '<p>' . $job->getDesription() . '</p>';
            echo '<p>'. $job->getDurationsAsString() .'</p>';
            echo '<strong>Achievements: </strong>';
            echo '<ul>';
            echo '<li>Loren ipsum dolor sit amet, 80% consectetuer adipiscing el</li>';
            echo '<li>Loren ipsum dolor sit amet, 80% consectetuer adipiscing el</li>';
            echo '<li>Loren ipsum dolor sit amet, 80% consectetuer adipiscing el</li>';
            echo '</ul>';
            echo '</li>';
    }

?>