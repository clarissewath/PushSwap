<?php

function push_swap(&$argv)
{
    $instructions = "";
    $lb = [];
    $la = $argv;
    array_shift($la);

    // change $la's val in int
    foreach ($la as &$value)
    {
        $value = intval($value);
    }

    $given_tab = $la;
    
    if (count($la) <= 1) // si la liste est vide, si la liste ne contient qu'un seul nombre
    {
        if (count($la) == 1)
        {
            echo PHP_EOL;
            return;
        }
        echo PHP_EOL;
        return;
    }
    
    while (!empty($la))
    {
        if ($la[0] > min($la)) // si la val index[0] est supp a la val minim de LA 
        {
            // ra : le premier elem devient le dernier
            array_push($la, array_shift($la));
            if ($instructions != "")
                $instructions .= " ";
            $instructions .= "ra";
            
        }
        elseif ($la[0] === min($la)) // sinon si la val index[0] est la val minimale
        {
            array_unshift($lb, $la[0]); // pb : push la[0] vers lb[0]
            array_shift($la); // clear $la
            if ($instructions != "")
                $instructions .= " ";
            $instructions .= "pb";
        }
    }

    while (!empty($lb))
    {
        if ($lb[0] === max($lb))
        {
            array_unshift($la, $lb[0]);
            array_shift($lb);
            if ($instructions != "")
                $instructions .= " ";
            $instructions .= "pa";
        }
    }

    if ($given_tab === $la)
    {
        echo PHP_EOL;
        return;
    }
    else
        echo $instructions . PHP_EOL;
}

push_swap($argv);