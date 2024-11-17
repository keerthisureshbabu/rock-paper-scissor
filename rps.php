<?php
$player_1=0;
$player_2=0;

// $a=readline();
// $b=readline();
for($i=1;$i<=3;$i++){
    echo"Round ".$i."\n";
    $a=readline();
    $b=readline();
    if($a=='R'){
        if($b=='R'){
            echo "Draw";
        }else if($b=='P'){
            $player_2+=1;
        }else if($b=='S'){
            $player_1+=1;
        }else{
             echo "Invalid comment";
        }
    }else if($a=='P'){
        if($b=='P'){
            echo "match is draw";
        }else if($b=='S'){
            $player_2+=1;
        }else if($b=='R'){
            $player_1+=1;
        }else{
             echo "Invalid comment";
        }
    }else if($a=='S'){
        if($b=='S'){
            echo "match is draw";
        }else if($b=='R'){
            $player_2+=1;
        }else if($b=='P'){
            $player_2+=1;
        }else{
             echo "Invalid comment";
        }
    }
}
echo "PLAYER 1 -".$player_1."\n";
echo "PLAYER 2 -".$player_2."\n";
?>
