<?php

include '../Includes/dbcon.php';

    $cid = intval($_GET['cid']);//

        $queryss=mysqli_query($conn,"select * from tblservicearea_arms where classId=".$cid."");                        
        $countt = mysqli_num_rows($queryss);

        echo '
        <select required name="classArmId" class="form-control mb-3">';
        echo'<option value="">--Select Service Area Arm--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['Id'].'" >'.$row['serviceareaArms'].'</option>';
        }
        echo '</select>';
?>

