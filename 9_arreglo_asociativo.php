<?php

    $alex = array(
                    'telefono' => '1139341085',
                    'edad' => 25,
                    'apellido' => 'menacho',
                    'pais' => 'argentina'
                );

    echo $alex['telefono'] . '<br/>';      
    echo $alex['edad'] . '<br/>';     
    echo $alex['apellido'] . '<br/>';     
    echo $alex['pais'] . '<br/>';     

    $alex['edad'] = 29;

    echo $alex['edad'] . '<br/>';

?>