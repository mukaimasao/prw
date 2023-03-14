<?php
    $entrada = explode(" ", readline());
    $a = $entrada[0];
    $b = $entrada[1];
    $c = $entrada[2];
    
    if($a<$b+$c && $a>$b-$c){
        echo"Perimetro = " . number_format(($a+$b+$c), 1, ".", "") . "\n";
    }else{
        echo"Area = " . number_format((($a+$b)*$c)/2, 1 ,".", "") . "\n"; 
    }
    
?>
float a, b, c;
	
	cin>>a>>b>>c;
	
	cout<<fixed;
	cout.precision(1);
	
	if(a<b+c && a>b-c){
		cout<<"Perimetro = "<<a+b+c<<endl;
	} else{
		cout<<"Area = "<<((a + b)*c)/2<<endl;
	}