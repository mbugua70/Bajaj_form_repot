<?php
require("connection.php");
$output=array();
$success=array();
$failure=array();
$sql= "";

$ba_name=mysqli_real_escape_string ( $connect ,$_POST['ba_name']);
$ba_phone=mysqli_real_escape_string ( $connect ,$_POST['ba_phone']);
$ba_region=mysqli_real_escape_string ( $connect ,$_POST['ba_region']);
$place=mysqli_real_escape_string ( $connect ,$_POST['place']);

switch ($place) {
    case 'DEALER':

    $sub_1_1=mysqli_real_escape_string ( $connect ,$_POST['sub_1_1']);
    $sub_1_2=mysqli_real_escape_string ( $connect ,$_POST['sub_1_2']);
    $sub_1_3=mysqli_real_escape_string ( $connect ,$_POST['sub_1_3']);
    $sub_1_4=mysqli_real_escape_string ( $connect ,$_POST['sub_1_4']);
    $sub_1_5=mysqli_real_escape_string ( $connect ,$_POST['sub_1_5']);
    $sub_1_6=mysqli_real_escape_string ( $connect ,$_POST['sub_1_6']);
    $sub_1_7=mysqli_real_escape_string ( $connect ,$_POST['sub_1_7']);
    $sub_1_8=mysqli_real_escape_string ( $connect ,$_POST['sub_1_8']);
    $sub_1_9=mysqli_real_escape_string ( $connect ,$_POST['sub_1_9']);  
    $sub_1_10=mysqli_real_escape_string ( $connect ,$_POST['sub_1_10']);
    $sub_1_11=mysqli_real_escape_string ( $connect ,$_POST['sub_1_11']);
    $sub_1_12=mysqli_real_escape_string ( $connect ,$_POST['sub_1_12']);
    $sub_1_13=mysqli_real_escape_string ( $connect ,$_POST['sub_1_13']);
    $sub_1_14=mysqli_real_escape_string ( $connect ,$_POST['sub_1_14']);
    $sub_1_15=mysqli_real_escape_string ( $connect ,$_POST['sub_1_15']); 
    $sql="";
    $sql=" INSERT INTO `bajaj_promoter_dealer`( `ba_name`, `ba_phone`, `ba_region`, `sub_1_1`, `sub_1_2`, `sub_1_3`, `sub_1_4`, `sub_1_5`, `sub_1_6`, `sub_1_7`, `sub_1_8`, `sub_1_9`, `sub_1_10`, `sub_1_11`, `sub_1_12`, `sub_1_13`, `sub_1_14`, `sub_1_15`) VALUES ( '$ba_name', '$ba_phone', '$ba_region', '$sub_1_1', '$sub_1_2', '$sub_1_3', '$sub_1_4', '$sub_1_5', '$sub_1_6', '$sub_1_7', '$sub_1_8', '$sub_1_9', '$sub_1_10', '$sub_1_11', '$sub_1_12', '$sub_1_13', '$sub_1_14', '$sub_1_15')  ";
    
    break;  


    case 'FEEDBACK':

        $sub_1_1=mysqli_real_escape_string ( $connect ,$_POST['sub_1_1']);
        $sub_1_2=mysqli_real_escape_string ( $connect ,$_POST['sub_1_2']);
       
      //  $sql="";
        $sql=" INSERT INTO `bajaj_feedback`( `ba_name`, `ba_phone`, `ba_region`, `sub_1_1`, `sub_1_2` ) VALUES ( '$ba_name', '$ba_phone', '$ba_region', '$sub_1_1', '$sub_1_2')  ";
    
        break;  


    case 'RIDER':

        $sub_1_1=mysqli_real_escape_string ( $connect ,$_POST['sub_1_1']);
        $sub_1_2=mysqli_real_escape_string ( $connect ,$_POST['sub_1_2']);
        $sub_1_3=mysqli_real_escape_string ( $connect ,$_POST['sub_1_3']);
        $sub_1_4=mysqli_real_escape_string ( $connect ,$_POST['sub_1_4']);
        $sub_1_5=mysqli_real_escape_string ( $connect ,$_POST['sub_1_5']);
        $sub_1_6=mysqli_real_escape_string ( $connect ,$_POST['sub_1_6']);
        $sub_1_7=mysqli_real_escape_string ( $connect ,$_POST['sub_1_7']);
        $sub_1_8=mysqli_real_escape_string ( $connect ,$_POST['sub_1_8']);
        $sub_1_9=mysqli_real_escape_string ( $connect ,$_POST['sub_1_9']);  
        $sub_1_10=mysqli_real_escape_string ( $connect ,$_POST['sub_1_10']);
        $sub_1_11=mysqli_real_escape_string ( $connect ,$_POST['sub_1_11']);
        $sub_1_12=mysqli_real_escape_string ( $connect ,$_POST['sub_1_12']);
        $sub_1_13=mysqli_real_escape_string ( $connect ,$_POST['sub_1_13']);
        $sub_1_14=mysqli_real_escape_string ( $connect ,$_POST['sub_1_14']);
        $sub_1_15=mysqli_real_escape_string ( $connect ,$_POST['sub_1_15']); 
        $sql=" INSERT INTO `bajaj_rider_data`( `ba_name`, `ba_phone`, `ba_region`, `sub_1_1`, `sub_1_2`, `sub_1_3`, `sub_1_4`, `sub_1_5`, `sub_1_6`, `sub_1_7`, `sub_1_8`, `sub_1_9`, `sub_1_10`, `sub_1_11`, `sub_1_12`, `sub_1_13`, `sub_1_14`, `sub_1_15`) VALUES ( '$ba_name', '$ba_phone', '$ba_region', '$sub_1_1', '$sub_1_2', '$sub_1_3', '$sub_1_4', '$sub_1_5', '$sub_1_6', '$sub_1_7', '$sub_1_8', '$sub_1_9', '$sub_1_10', '$sub_1_11', '$sub_1_12', '$sub_1_13', '$sub_1_14', '$sub_1_15')  ";
    
        
        break;  

    case 'FLEET':

        $sub_1_1=mysqli_real_escape_string ( $connect ,$_POST['sub_1_1']);
        $sub_1_2=mysqli_real_escape_string ( $connect ,$_POST['sub_1_2']);
        $sub_1_3=mysqli_real_escape_string ( $connect ,$_POST['sub_1_3']);
        $sub_1_4=mysqli_real_escape_string ( $connect ,$_POST['sub_1_4']);
        $sub_1_5=mysqli_real_escape_string ( $connect ,$_POST['sub_1_5']);
        $sub_1_6=mysqli_real_escape_string ( $connect ,$_POST['sub_1_6']);
        $sub_1_7=mysqli_real_escape_string ( $connect ,$_POST['sub_1_7']);
        $sub_1_8=mysqli_real_escape_string ( $connect ,$_POST['sub_1_8']);
        $sub_1_9=mysqli_real_escape_string ( $connect ,$_POST['sub_1_9']);  
        $sub_1_10=mysqli_real_escape_string ( $connect ,$_POST['sub_1_10']);
        $sub_1_11=mysqli_real_escape_string ( $connect ,$_POST['sub_1_11']);
        $sub_1_12=mysqli_real_escape_string ( $connect ,$_POST['sub_1_12']);
        $sub_1_13=mysqli_real_escape_string ( $connect ,$_POST['sub_1_13']);
        $sub_1_14=mysqli_real_escape_string ( $connect ,$_POST['sub_1_14']);
        $sub_1_15=mysqli_real_escape_string ( $connect ,$_POST['sub_1_15']); 
        $sub_1_16=mysqli_real_escape_string ( $connect ,$_POST['sub_1_16']);
        $sub_1_17=mysqli_real_escape_string ( $connect ,$_POST['sub_1_17']);
        $sub_1_18=mysqli_real_escape_string ( $connect ,$_POST['sub_1_18']);
        $sub_1_19=mysqli_real_escape_string ( $connect ,$_POST['sub_1_19']);
        $sub_1_20=mysqli_real_escape_string ( $connect ,$_POST['sub_1_20']);
        $sub_1_21=mysqli_real_escape_string ( $connect ,$_POST['sub_1_21']);
        $sub_1_22=mysqli_real_escape_string ( $connect ,$_POST['sub_1_22']);
        $sub_1_23=mysqli_real_escape_string ( $connect ,$_POST['sub_1_23']);
        $sub_1_24=mysqli_real_escape_string ( $connect ,$_POST['sub_1_24']);
        $sub_1_25=mysqli_real_escape_string ( $connect ,$_POST['sub_1_25']);
        $sub_1_26=mysqli_real_escape_string ( $connect ,$_POST['sub_1_26']);
        $sub_1_27=mysqli_real_escape_string ( $connect ,$_POST['sub_1_27']);
        $sub_1_28=mysqli_real_escape_string ( $connect ,$_POST['sub_1_28']);
        $sub_1_29=mysqli_real_escape_string ( $connect ,$_POST['sub_1_29']);
        $sub_1_30=mysqli_real_escape_string ( $connect ,$_POST['sub_1_30']);

        $sql=" INSERT INTO `fleet_owner_data`( `ba_name`, `ba_phone`, `ba_region`, `sub_1_1`, `sub_1_2`, `sub_1_3`, `sub_1_4`, `sub_1_5`, `sub_1_6`, `sub_1_7`, `sub_1_8`, `sub_1_9`, `sub_1_10`, `sub_1_11`, `sub_1_12`, `sub_1_13`, `sub_1_14`, `sub_1_15`, `sub_1_16`, `sub_1_17`, `sub_1_18`, `sub_1_19`, `sub_1_20`, `sub_1_21`, `sub_1_22`, `sub_1_23`, `sub_1_24`, `sub_1_25`, `sub_1_26`, `sub_1_27`, `sub_1_28`, `sub_1_29`, `sub_1_30`)  VALUES ( '$ba_name', '$ba_phone', '$ba_region', '$sub_1_1', '$sub_1_2', '$sub_1_3', '$sub_1_4', '$sub_1_5', '$sub_1_6', '$sub_1_7', '$sub_1_8', '$sub_1_9', '$sub_1_10', '$sub_1_11', '$sub_1_12', '$sub_1_13', '$sub_1_14', '$sub_1_15', '$sub_1_16', '$sub_1_17', '$sub_1_18', '$sub_1_19', '$sub_1_20', '$sub_1_21', '$sub_1_22', '$sub_1_23', '$sub_1_24', '$sub_1_25', '$sub_1_26', '$sub_1_27', '$sub_1_28', '$sub_1_29', '$sub_1_30') ";
        break;  



        case '125HD':

            $sub_1_1=mysqli_real_escape_string ( $connect ,$_POST['sub_1_1']);
            $sub_1_2=mysqli_real_escape_string ( $connect ,$_POST['sub_1_2']);
            $sub_1_3=mysqli_real_escape_string ( $connect ,$_POST['sub_1_3']);
            $sub_1_4=mysqli_real_escape_string ( $connect ,$_POST['sub_1_4']);
            $sub_1_5=mysqli_real_escape_string ( $connect ,$_POST['sub_1_5']);
            $sub_1_6=mysqli_real_escape_string ( $connect ,$_POST['sub_1_6']);
            $sub_1_7=mysqli_real_escape_string ( $connect ,$_POST['sub_1_7']);
            $sub_1_8=mysqli_real_escape_string ( $connect ,$_POST['sub_1_8']);
            $sub_1_9=mysqli_real_escape_string ( $connect ,$_POST['sub_1_9']);  
            $sub_1_10=mysqli_real_escape_string ( $connect ,$_POST['sub_1_10']);
            $sub_1_11=mysqli_real_escape_string ( $connect ,$_POST['sub_1_11']);
            $sub_1_12=mysqli_real_escape_string ( $connect ,$_POST['sub_1_12']);
            $sub_1_13=mysqli_real_escape_string ( $connect ,$_POST['sub_1_13']);
            $sub_1_14=mysqli_real_escape_string ( $connect ,$_POST['sub_1_14']);
            $sub_1_15=mysqli_real_escape_string ( $connect ,$_POST['sub_1_15']); 
            $sub_1_16=mysqli_real_escape_string ( $connect ,$_POST['sub_1_16']);
            $sub_1_17=mysqli_real_escape_string ( $connect ,$_POST['sub_1_17']);
            $sub_1_18=mysqli_real_escape_string ( $connect ,$_POST['sub_1_18']);
            $sub_1_19=mysqli_real_escape_string ( $connect ,$_POST['sub_1_19']);
            $sub_1_20=mysqli_real_escape_string ( $connect ,$_POST['sub_1_20']);
            $sub_1_21=mysqli_real_escape_string ( $connect ,$_POST['sub_1_21']);
            $sub_1_22=mysqli_real_escape_string ( $connect ,$_POST['sub_1_22']);
            $sub_1_23=mysqli_real_escape_string ( $connect ,$_POST['sub_1_23']);
            $sub_1_24=mysqli_real_escape_string ( $connect ,$_POST['sub_1_24']);
            $sub_1_25=mysqli_real_escape_string ( $connect ,$_POST['sub_1_25']);
            $sub_1_26=mysqli_real_escape_string ( $connect ,$_POST['sub_1_26']);
            $sub_1_27=mysqli_real_escape_string ( $connect ,$_POST['sub_1_27']);
          
            $sub_1_28=mysqli_real_escape_string ( $connect ,$_POST['sub_1_28']);
            $sub_1_29=mysqli_real_escape_string ( $connect ,$_POST['sub_1_29']);
            $sub_1_30=mysqli_real_escape_string ( $connect ,$_POST['sub_1_30']);
            $sub_1_31=mysqli_real_escape_string ( $connect ,$_POST['sub_1_31']);
          
            $sql=" INSERT INTO `bajaj_125_hd_test_rides`(`ba_name`, `ba_phone`, `ba_region`, `sub_1_1`, `sub_1_2`, `sub_1_3`, `sub_1_4`, `sub_1_5`, `sub_1_6`, `sub_1_7`, `sub_1_8`, `sub_1_9`, `sub_1_10`, `sub_1_11`, `sub_1_12`, `sub_1_13`, `sub_1_14`, `sub_1_15`, `sub_1_16`, `sub_1_17`, `sub_1_18`, `sub_1_19`, `sub_1_20`, `sub_1_21`, `sub_1_22`, `sub_1_23`, `sub_1_24`, `sub_1_25`, `sub_1_26`, `sub_1_27`, `sub_1_28`, `sub_1_29`, `sub_1_30`, `sub_1_31` )  VALUES ( '$ba_name', '$ba_phone', '$ba_region', '$sub_1_1', '$sub_1_2', '$sub_1_3', '$sub_1_4', '$sub_1_5', '$sub_1_6', '$sub_1_7', '$sub_1_8', '$sub_1_9', '$sub_1_10', '$sub_1_11', '$sub_1_12', '$sub_1_13', '$sub_1_14', '$sub_1_15', '$sub_1_16', '$sub_1_17', '$sub_1_18', '$sub_1_19', '$sub_1_20', '$sub_1_21', '$sub_1_22', '$sub_1_23', '$sub_1_24', '$sub_1_25', '$sub_1_26', '$sub_1_27', '$sub_1_28', '$sub_1_29', '$sub_1_30', '$sub_1_31') ";
            break;  
    


    } 

      mysqli_query($connect,$sql) or die(mysqli_error($connect));


        if (mysqli_affected_rows($connect)>0) 
        {
        $output['response']="success";  
        }
        else
        {
        $output['response']="fail";
        
        }






$output['success']=$success;
$output['failure']=$failure;
$json = json_encode($output);

    echo $json;
exit;


        
        

function checkRecord($outlet_id,$team_leader_id)
{
    global $connect;
    $sql="SELECT * FROM training WHERE outlet_id='$outlet_id' and ba_name='$team_leader_id'" ;
    //echo $sql;
    $res=mysqli_query($connect,$sql);
if (mysqli_num_rows($res)>0) {
//  echo $TID." sync now \n";
    return true;
    //echo $TID;
}
else
{
    return false;
//  echo $TID." sync fail \n";
}
}


 function generateImage($img,$folderPath,$image_name_prefix)
    {

        global $PID,$DID,$connect,$text,$arr,$IMAGE_BLANK;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("uploads/", $image_parts[0]);
        $image_base64 = base64_decode($image_parts[1]);
        $name = $image_name_prefix.uniqid() . '.png';
        $file = $folderPath . $name;

       
            file_put_contents($file, $image_base64);
        
        

            return $name;

    }


?>