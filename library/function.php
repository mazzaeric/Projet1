<?php 

/**
 * Processes the checksum
 * @param integer $num
 * @return number
 */
function test($num) 
{
    for ($i=0; $i < 4; $i++) {
        $num += $i;
    }
    return $num;
}
