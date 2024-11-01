<?php
    $dia=rand(1,7);

    switch ($dia)
    {
        case 1: echo("hoy es lunes\n dia $dia");
            break;
        case 2: echo("hoy es martes\n dia $dia");
            break;
        case 3: echo("hoy es miercoles\n dia $dia");
            break;
        case 4: echo("hoy es jueves\n dia $dia");
            break;
        case 5: echo("hoy es viernes\n dia $dia");
            break;
        case 6: echo("hoy es sabado\n dia $dia");
            break;
        case 7: echo("hoy es Domingo\n dia $dia");
            break;
    }
    