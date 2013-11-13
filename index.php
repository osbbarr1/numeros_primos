
        <?php
             $num = $_GET['numero'];
             
             $cuenta=0;
            for($i=1;$i<$num;$i++){
                if (numeroPrimo($i)){
                    echo $i." , ";
                }  else {
                        
                }
                }
                
                
                
                
                
                
                function numeroPrimo($numero){
                    $cuenta=0;
                    for($i=1;$i<$numero;$i++){
                        
                        if($numero%$i==0){
                            $cuenta++;
                            if ($cuenta>1){
                                return false;
                            } 
                            
                        }
                    
                    }
                    return true;
                }
        ?>
    
<!--function numeroPrimo($numero){
                    $cuenta=0;
                    for($i=1;$i<$numero;$i++){                        
                        if($numero%$i==0){                            
                            
                            $cuenta++;                            
                        }                    
                    }
                    
                    if($cuenta>1){
                        return false;
                    }
                    
                    
                    return true;
                }-->