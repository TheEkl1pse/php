    <?php

    function getAdults($array){
        $ar = [];
        foreach($array as $key => $value){
           
            $i=0;
            if($value[0]>=18){ 
                ?> <table>
                <tr> <td><?=$key?> </td>              
                </tr>
                <tr><td>
                <li><?=$value[$i]?></li>
                <li><?=$value[$i+1]?></li>
                <li><?=$value[$i+2]?></li>    
                </td>               
                </table> 
                <?php 
                $i++;   
            }
        }
    }

    function search($array, $el){
        for($i=0, $n = count($array);$i<=$n;$i++){           
            if($array[$i] == $el){
                $t++;
            }                    
         }       
         if($t>0)
            {$r = "Элемент $el найден";}
            else{$r = "Элемент $el не найден";}  
        echo $r;
    } 

   function arrayRand($x,$y){
    for($i=0, $n=count($a);$i<$n;$i++){          
        $a[$i]=rand($x,$y);
    }
        return $a;
    }
    
    function dumpArray($a){
        for($i=0, $n=count($a);$i<$n;$i++){
         echo $a[$i], " ";         
        }
    }

    function dumpArrayN($a){
        for($i=0, $n=count($a);$i<$n;$i++){
         echo $a[$i], "";         
        }
    }

    function dumpArrayR($a){
        for($i=0, $n=count($a);$i<$n;$i++){    
         return $a[$i];
        }        
    }

    function minOfChet($a){
        $o = 9999999;
        for($i=0;$i<20;$i++)
            {
                if($a[$i]%2==0){
                    if($a[$i]<$o){
                    $o=$a[$i];
                }
                    echo $a[$i], ' ';}
            }
        return $o;
    }

    function arrayMaxEnd4($x,$y){
        for($i=0;$i<20;$i++){                
        $a[$i]=rand($x,$y);
        if($a[$i]%10==4){
            echo $a[$i], ' ';
           $k++;
            $o=-9999999;
            if($a[$i]>$o){
                $o = $a[$i];                
            }
        }
        
    }
        echo ' ', "<br>Max: ", $o, "<br>Их кол-во: ", $k;
           
    }

    function maxOfChetNechet($a){
        for($i=0;$i<20;$i++){
            if($a[$i]%2==0){
                $k=-9999999;                
                $c = $a[$i];
                if($c>$k)
                {$bc=$c;}
            }
            if($a[$i]%2==1){
                $k=-9999999;                
                $nc = $a[$i];
                if($nc>$k)
                {$bnc=$nc;}
        }
    }
    if($bc>$bnc){
    echo $bc, ' > ', $bnc;
    }
    else{echo $bc, ' < ', $bnc;}
}

function minusNaPlus($a){
    for($i=0;$i<20;$i++){
        if($a[$i]<0){
            $a[$i] = $a[$i]*-1;            
        }
        echo $a[$i], ' ';
    }
}

function srArefmOfArray($a){
    for($i=0;$i<20;$i++){
        $l += $a[$i];       
    }
    $res = $l/20;
    echo 'Cред. арефметическое массива: ', $res;
    return $res;
}

function proizvOfFirst5Chet($a){    
    for($i=0;$i<20;$i++){
        if($a[$i]>-1){
            $o=1;
            $o = $o*$a[$i];
        }
    }
    return $o;
    }

    function zad8($a){
       $kol=0;
        $k=srArefmOfArray($a);
        echo '<br>';
        for($i=0;$i<20;$i++){
if($a[$i]>$k){
    $kol++;
echo $a[$i], ' ';
}
        }
        echo "<br>Количество элементов больше ср. арефм. $kol";
    }

    function maxOfArray($y,$y1){
        for($i=0;$i<20;$i++){
            if($a[$i]>$y){
                $max=$a[$i];
            }
        }
        return $max;
    }

    function zad9($a){     
        $kol=1;   
        for($i=0;$i<20;$i++){
            if($a[$i]==$max){
                $kol++;
            }
    }
    echo "Количество равных максимальному значению массива: $kol";
}
        
function numberOfMassElem($a){
    $k=7+1;
foreach($a as $value){
    $num = 7-$k;
    $k++;
    echo $value;    
}
}

function summOfArray($a)
{$k = 0;
    for($i=0;$i<20;$i++)
    {
      $k = $k + $a[$i];
    }
    echo $k;
}

function zad4($a){
    $cena=1;
    foreach($a as $key => $value)
    {
       $i = $value; 
    $cena = $cena;

    }
    echo $i;
}

function hNumOfKeys($a)
{$o = -9999999;
    foreach($a as $key => $value)
    {   $c = $value;
        if($c>$o){
            $o = $c;
            $k = $key;
        }
    }
    echo "$k => Цена: $o";
}

function lNumOfKeys($a)
{$o = 9999999;
    foreach($a as $key => $value)
    {   $c = dumpArrayR($value);
        if($c<$o){
            $o = $c;
            $k = $key;
        }
    }
    echo "$k => Цена: $o";
}

function srArefmOfKeys($a){
    foreach($a as $key => $value)
    {   $c = dumpArrayR($value);
        $cost = $cost + $c;
        $k++;
        
    }
    $t=$cost/$k;
    echo $t;
}



?>  
