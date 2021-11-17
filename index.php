<?php
include 'head.php';
session_start();


echo'<img src = "images/multa.jpg" width = "820" height = "350" alt = "multas-trafico"/>';

$multas = array(
		array(
			'matricula' => '1111BBB',
			'radar' => 1,
			'limite' => 30,
            'velocidad' => 64,
			'cuantia'=>390,
            'fecha_hora' => '14-03-2021T10:45',
            'pagada'=> 'SI'

		),
        array(
			'matricula' => '2222CCC',
			'radar' => 2,
			'limite' => 50,
            'velocidad' => 58,
			'cuantia'=>130,
			'fecha_hora' => '25-08-2021T16:32',
            'pagada'=> 'NO'

		),
                array(
			'matricula' => '3333DDD',
			'radar' => 3,
			'limite' => 90,
            'velocidad' => 130,
			'cuantia'=>450,
            'fecha_hora' => '03-09-2021T21:36',
            'pagada'=> 'NO'

		),
                array(
			'matricula' => '4444FFF',
			'radar' => 4,
			'limite' => 100,
            'velocidad' => 127,
			'cuantia'=>320,
            'fecha_hora' => '27-09-2021T19:29',
            'pagada'=> 'NO'

		),
                
    );
//array radares con su identificacion y limite maximo permitido de velocidad
$radares=array("Radar 1"=>30,"Radar 2"=>50,"Radar 3"=>90,"Radar 4"=>100);


include 'pie.php';											
                           