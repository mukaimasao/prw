<?php
    $ptg = doubleval();
    $sn = doubleval();
    $ra = doubleval();
    $sa = readline();
    if($sa <= 400){
    	$ptg = 15.00/100;
    	$sn = $sa * $ptg + $sa;
    	$ra = $sn - $sa;	
	} else if($sa<=800){
		$ptg = 12.00/100;
    	$sn = $sa * $ptg + $sa;
    	$ra = $sn - $sa;
	} else if($sa<=1200){
		$ptg = 10.00/100;
    	$sn = $sa * $ptg + $sa;
    	$ra = $sn - $sa;
	} else if($sa<=2000){
		$ptg = 7.00/100;
    	$sn = $sa * $ptg + $sa;
    	$ra = $sn - $sa;
	} else if($sa>2000){
		$ptg = 4.00/100;
    	$sn = $sa * $ptg + $sa;
    	$ra = $sn - $sa;
	}
    $ra = number_format($ra,2, ".", "");
    $sn = number_format($sn, 2, ".", "");
    $ptg =number_format($ptg*100, 0, "", "");
    echo"Novo salario: $sn\n";
    echo"Reajuste ganho: $ra\n";
    echo"Em percentual: $ptg %\n";
?>