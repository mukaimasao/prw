<?php 
$n = readline();

for(; $n > 0; $n--) {
    $ti = 0;
    list($x, $y) = explode(" ", readline());

    if($x == $y || $x == $y + 1 || $y == $x + 1) {
        $ti = 0;
    } else if($x < $y && $x % 2 != 0) {
        if($y % 2 != 0) {
            for(; $x < $y - 2;) {
                $x += 2;
                $ti += $x;
            }
        } else {
            for(; $x < $y - 1;) {
                $x += 2;
                $ti += $x;
            }
        }
    } else if($x < $y && $x % 2 == 0) {
        $x -= 1;
        if($y % 2 == 0) {
            for(; $x < $y - 1;) {
                $x += 2;
                $ti += $x;
            }
        } else {
            for(; $x < $y - 2;) {
                $x += 2;
                $ti += $x;
            }
        }
    } else if($y < $x && $y % 2 != 0) {
        if($x % 2 != 0) {
            for(; $y < $x - 2;) {
                $y += 2;
                $ti += $y;
            }
        } else {
            for(; $y < $x - 1;) {
                $y += 2;
                $ti += $y;
            }
        }
    } else if($y < $x && $y % 2 == 0) {
        $y -= 1;
        if($x % 2 == 0) {
            for(; $y < $x - 1;) {
                $y += 2;
                $ti += $y;
            }
        } else {
            for(; $y < $x - 2;) {
                $y += 2;
                $ti += $y;
            }
        }
    }
    
    echo $ti . "\n";
}
?>