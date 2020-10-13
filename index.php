<?php
session_start();
//include 'table.php';
include 'header.php';
include'pi.php';
$form = new Form();

$form->create_field(['name' => 'SQRT_2', 'type' => 'submit', 'description' => 'SQRT_2: ','value'=>'SQRT_2']);
$form->create_field(['name' => 'pi', 'type' => 'submit', 'description' => 'PI: ','value'=>'PI']);
$form->create_field(['name' => 'Neper', 'type' => 'submit', 'description' => 'Neper: ','value'=>'NEPER']);
$form->create_field(['name' => 'search', 'type' => 'text', 'description' => 'search : ']);
$form->show();
//var_dump($_GET);die;
if(isset($_GET['pi'])){
    $count=0;
    echo'<table>';
    foreach($arr_PI as $val){
        
       if($count%87==0){
           echo '<tr>';
        }
       $count++;
       $color1="aa2288";
        if($val=='1'){echo '<td  bgcolor='.$color1.'>'.$val.'</td>';}
        else if($val=='2'){echo '<td bgcolor=green>'.$val.'</td>';}
        else if($val=='3'){echo '<td bgcolor="cc0044">'.$val.'</td>';}
        else if($val=='4'){echo '<td bgcolor=dd9922>'.$val.'</td>';}
        
        else if($val==5){echo '<td bgcolor=eeAAf9>'.$val.'</td>';}
        else if($val==6){echo '<td bgcolor=ffbbe7>'.$val.'</td>';}
        else if($val==7){echo '<td bgcolor=99ccd6>'.$val.'</td>';}
        else if($val==8){echo '<td bgcolor=55ddc5>'.$val.'</td>';}
        else if($val==9){echo '<td bgcolor=4433e4>'.$val.'</td>';}
        else if($val==0){echo '<td bgcolor=3399f3>'.$val.'</td>';}
        else if($val==99){echo '<td bgcolor=666666>'.$val.'</td>';}
        else if(!empty ($_GET['search'])&&$val==$search){echo '<td bgcolor=red>'.$val.'</td>';}
        else{echo '<td bgcolor=236666>'.$val.'</td>';} 
         
        if($count%87==0){
            echo'</tr>';
       
           }
    
}
echo '</table>';
}
if(isset($_GET['SQRT_2'])){
    $count=0;
    echo'<table>';
    foreach($arr_sqrt_2 as $val){
        
       if($count%100==0){
           echo '<tr>';
        }
       $count++;
       $color1="aa2288";
        if($val=='1'){echo '<td  bgcolor='.$color1.'>'.$val.'</td>';}
        else if($val=='2'){echo '<td bgcolor=green>'.$val.'</td>';}
        else if($val=='3'){echo '<td bgcolor="cc0044">'.$val.'</td>';}
        else if($val=='4'){echo '<td bgcolor=dd9922>'.$val.'</td>';}
        
        else if($val==5){echo '<td bgcolor=eeAAf9>'.$val.'</td>';}
        else if($val==6){echo '<td bgcolor=ffbbe7>'.$val.'</td>';}
        else if($val==7){echo '<td bgcolor=99ccd6>'.$val.'</td>';}
        else if($val==8){echo '<td bgcolor=55ddc5>'.$val.'</td>';}
        else if($val==9){echo '<td bgcolor=4433e4>'.$val.'</td>';}
        else if($val==0){echo '<td bgcolor=3399f3>'.$val.'</td>';}
         else{echo '<td bgcolor=236666>'.$val.'</td>';}
         
        if($count%100==0){
            echo'</tr>';
       
           }
    
}
echo '</table>';
}
if(isset($_GET['Neper'])){
    $count=0;
    echo'<table>';
    foreach($arr_oiler as $val){
        
       if($count%87==0){
           echo '<tr>';
        }
       $count++;
       $color1="aa2288";
        if($val=='1'){echo '<td  bgcolor='.$color1.'>'.$val.'</td>';}
        else if($val=='2'){echo '<td bgcolor=green>'.$val.'</td>';}
        else if($val=='3'){echo '<td bgcolor="cc0044">'.$val.'</td>';}
        else if($val=='4'){echo '<td bgcolor=dd9922>'.$val.'</td>';}
        
        else if($val==5){echo '<td bgcolor=eeAAf9>'.$val.'</td>';}
        else if($val==6){echo '<td bgcolor=ffbbe7>'.$val.'</td>';}
        else if($val==7){echo '<td bgcolor=99ccd6>'.$val.'</td>';}
        else if($val==8){echo '<td bgcolor=55ddc5>'.$val.'</td>';}
        else if($val==9){echo '<td bgcolor=4433e4>'.$val.'</td>';}
        else if($val==0){echo '<td bgcolor=3399f3>'.$val.'</td>';}
        
         else{echo '<td bgcolor=236666>'.$val.'</td>';} 
         
        if($count%87==0){
            echo'</tr>';
       
           }
    
}
echo '</table>';
}




?>
</body>
</html>

