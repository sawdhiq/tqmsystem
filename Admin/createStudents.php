
<?php 
error_reporting(0);
include '../Includes/dbcon.php';
include '../Includes/session.php';

//------------------------SAVE--------------------------------------------------

if(isset($_POST['save'])){

  $period=$_POST['period'];
  $relativeseat=$_POST['relativeseat'];
  $relativeseatshape=$_POST['relativeseatshape'];
  $electricity=$_POST['electricity'];
  $handwash=$_POST['handwash'];
  $taprun=$_POST['taprun'];
  $spygmeters=$_POST['spygmeters'];
  $spygmetersfunc=$_POST['spygmetersfunc'];
  $bedspace=$_POST['bedspace'];
  $nets=$_POST['nets'];
  $bedshape=$_POST['bedshape'];
  $drugprescform=$_POST['drugprescform'];
  $labtestform=$_POST['labtestform'];
  $linen=$_POST['linen'];
  $linenadequate=$_POST['linenadequate'];
  $consumables=$_POST['consumables'];
  $consumablesadequate=$_POST['consumablesadequate'];
  $nurseduty=$_POST['nurseduty'];
  $classId=$_POST['classId'];
  $classArmId=$_POST['classArmId'];
  $dateCreated = date("Y-m-d");
   
    $query=mysqli_query($conn,"select * from tblstudents where classId ='$classId'");
    $ret=mysqli_fetch_array($query);

    if($ret > 0){ 

        $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>This Details Already Exists!</div>";
    }
    else{

    $query=mysqli_query($conn,"INSERT INTO `tblstudents`(`period`, `relativeseat`, 
    `relativeseatshape`, `electricity`, `handwash`, `taprun`, `sphygmeters`, `sphygmetersfunc`, `bedspace`, `nets`, `bedshape`, 
    `drugprescform`, `labtestform`, `linen`, `linenadequate`, `consumables`, `consumablesadequate`, `nurseduty`, `classId`, `classArmId`, `dateCreated`)
    value('$period','$relativeseat',
    '$relativeseatshape','$electricity','$handwash','$taprun','$spygmeters',
    '$spygmetersfunc','$bedspace','$nets','$bedshape','$drugprescform',
    '$labtestform','$linen','$linenadequate','$consumables','$consumablesadequate',
    '$nurseduty','$classId','$classArmId','$dateCreated')");

    if ($query) {
        
        $statusMsg = "<div class='alert alert-success'  style='margin-right:700px;'>Created Successfully!</div>";
            
    }
    else
    {
         $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
    }
  }
}
    
 

//---------------------------------------EDIT-------------------------------------------------------------






//--------------------EDIT------------------------------------------------------------

 if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "edit")
	{
        $Id= $_GET['Id'];

        $query=mysqli_query($conn,"select * from tblstudents where Id ='$Id'");
        $row=mysqli_fetch_array($query);

        //------------UPDATE-----------------------------

        if(isset($_POST['update'])){
    
  $classId=$_POST['classId'];
  $classArmId=$_POST['classArmId'];
  $dateCreated = date("Y-m-d");
  $classId=$_POST['classId'];
  $classArmId=$_POST['classArmId'];
  $dateCreated = date("Y-m-d");
  $period=$_POST['period'];
  $relativeseat=$_POST['relativeseat'];
  $relativeseatshape=$_POST['relativeseatshape'];
  $electricity=$_POST['electricity'];
  $handwash=$_POST['handwash'];
  $taprun=$_POST['taprun'];
  $spygmeters=$_POST['spygmeters'];
  $spygmetersfunc=$_POST['spygmetersfunc'];
  $bedspace=$_POST['bedspace'];
  $nets=$_POST['nets'];
  $bedshape=$_POST['bedshape'];
  $drugprescform=$_POST['drugprescform'];
  $labtestform=$_POST['labtestform'];
  $linen=$_POST['linen'];
  $linenadequate=$_POST['linenadequate'];
  $consumables=$_POST['consumables'];
  $consumablesadequate=$_POST['consumablesadequate'];
  $nurseduty=$_POST['nurseduty'];

 $query=mysqli_query($conn,"update tblstudents set classId='$classId',classArmId='$classArmId',period='$period',relativeseat='$relativeseat',
 relativeseatshape='$relativeseatshape',electricity='$electricity',handwash='$handwash',taprun='$taprun',spygmeters='$spygmeters',spygmetersfunc='$spygmetersfunc',
 bedspace='$bedspace',nets='$nets',bedshape='$bedshape',drugprescform='$drugprescform',labtestform='$labtestform',linen='$linen',
 linenadequate='$linenadequate',consumables='$consumables',consumablesadequate='$consumablesadequate',nurseduty='$nurseduty'
    where Id='$Id'");
            if ($query) {
                
                echo "<script type = \"text/javascript\">
                window.location = (\"createStudents.php\")
                </script>"; 
            }
            else
            {
                $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
            }
        }
    }


//--------------------------------DELETE------------------------------------------------------------------

  if (isset($_GET['Id']) && isset($_GET['action']) && $_GET['action'] == "delete")
	{
        $Id= $_GET['Id'];
        $classArmId= $_GET['classArmId'];

        $query = mysqli_query($conn,"DELETE FROM tblstudents WHERE Id='$Id'");

        if ($query == TRUE) {

            echo "<script type = \"text/javascript\">
            window.location = (\"createStudents.php\")
            </script>";
        }
        else{

            $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>"; 
         }
      
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/attnlg.jpg" rel="icon">
<?php include 'includes/title.php';?>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">



   <script>
    function classArmDropdown(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxClassArms2.php?cid="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      <?php include "Includes/sidebar.php";?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include "Includes/topbar.php";?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Data Entry</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Data Entry</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Data Entry</h6>
                    <?php echo $statusMsg; ?>
                </div>
                <div class="card-body">
                  <form method="post">
                   <div class="form-group row mb-3">
                        <!-- <div class="col-xl-6">
                        <label class="form-control-label">Period<span class="text-danger ml-2">*</span></label>
                        <input type="text" class="form-control" name="period" value="<?php echo $row['period'];?>" id="exampleInputFirstName" >
                        </div>-->
                        <div class="col-xl-6"> 
                        <label class="form-control-label">Period<span class="text-danger ml-2">*</span></label>
                        <select required name="period" class="form-control value="<?php echo $row['period'];?>>
                          <option value="">--Select Period--</option>
                          <option value="Morning">Morning </option>
                          <option value="Afternoon">Afternoon</option>
                          <option value="NightShift">Night Shift</option>
                        </select>
                        </div>

                        <div class="col-xl-6"> 
                        <label class="form-control-label">Are there chairs for relatives to seat? <span class="text-danger ml-2">*</span></label>
                        <select required name="relativeseat" class="form-control value="<?php echo $row['relativeseat'];?>>
                          <option value="">--Select Relative Seat--</option>
                          <option value="Yes">Yes </option>
                          <option value="No">No</option>
                        </select>
                        </div>
                        <!-- <div class="col-xl-6">
                        <label class="form-control-label">Relative Seat<span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control" name="lastName" value="<?php echo $row['lastName'];?>" id="exampleInputFirstName" >
                        </div> -->
                    </div>
                     <div class="form-group row mb-3">
                     <div class="col-xl-6"> 
                        <label class="form-control-label">(If yes)Are chairs for relatives in good shape? <span class="text-danger ml-2">*</span></label>
                        <select required name="relativeseatshape" class="form-control value="<?php echo $row['relativeseatshape'];?>>
                          <option value="">--Select--</option>
                          <option value="Yes">Yes </option>
                          <option value="No">No</option>
                        </select>
                        </div>

                        <div class="col-xl-6"> 
                        <label class="form-control-label">Is there electricity during visit?  <span class="text-danger ml-2">*</span></label>
                        <select required name="electricity" class="form-control value="<?php echo $row['electricity'];?>>
                          <option value="">--Select --</option>
                          <option value="Yes">Yes </option>
                          <option value="No">No</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                    <div class="col-xl-6">
                        <label class="form-control-label">How many hand-washing outlets are available? <span class="text-danger ml-2">*</span></label>
                      <input type="text" class="form-control" name="handwash" value="<?php echo $row['handwash'];?>" id="exampleInputFirstName" >
                        </div>

                        <div class="col-xl-6"> 
                        <label class="form-control-label">(If hand-washing outlets are available) Are the taps running? <span class="text-danger ml-2">*</span></label>
                        <select required name="taprun" class="form-control value="<?php echo $row['taprun'];?>>
                          <option value="">--Select --</option>
                          <option value="Yes">Yes </option>
                          <option value="No">No</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-xl-6"> 
                            <label class="form-control-label">Are Sphygmomanometers available? <span class="text-danger ml-2">*</span></label>
                            <select required name="spygmeters" class="form-control value="<?php echo $row['spygmeters'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                          
                        </div>
                            <div class="col-xl-6">
                              <label class="form-control-label">(If sphyg are available) How many Sphygmomanometers are functioning? <span class="text-danger ml-2">*</span></label>
                            <input type="text" class="form-control" name="spygmetersfunc" value="<?php echo $row['spygmetersfunc'];?>" id="exampleInputFirstName" >
                            </div>
                     </div>

                     <div class="form-group row mb-3">
                        <div class="col-xl-6">
                            <label class="form-control-label">Number of beds available <span class="text-danger ml-2">*</span></label>
                          <input type="text" class="form-control" name="bedspace" value="<?php echo $row['bedspace'];?>" id="exampleInputFirstName" >
                            </div>

                            <div class="col-xl-6"> 
                            <label class="form-control-label">Are nets available (during night shift?) <span class="text-danger ml-2">*</span></label>
                            <select required name="nets" class="form-control value="<?php echo $row['nets'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                        </div>
                     </div>


                     <div class="form-group row mb-3">
                     <div class="col-xl-6"> 
                            <label class="form-control-label">Are all beds in good shape? <span class="text-danger ml-2">*</span></label>
                            <select required name="bedshape" class="form-control value="<?php echo $row['bedshape'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-xl-6"> 
                            <label class="form-control-label">Are drugs prescription forms available?  <span class="text-danger ml-2">*</span></label>
                            <select required name="drugprescform" class="form-control value="<?php echo $row['drugprescform'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                        </div>
                     </div>


                     <div class="form-group row mb-3">
                     <div class="col-xl-6"> 
                            <label class="form-control-label">Are lab test investigation forms available? <span class="text-danger ml-2">*</span></label>
                            <select required name="labtestform" class="form-control value="<?php echo $row['labtestform'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-xl-6"> 
                            <label class="form-control-label">Are linen available for use? <span class="text-danger ml-2">*</span></label>
                            <select required name="linen" class="form-control value="<?php echo $row['linen'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                        </div>
                     </div>

                     <div class="form-group row mb-3">
                     <div class="col-xl-6"> 
                            <label class="form-control-label">Are available linen adequate? <span class="text-danger ml-2">*</span></label>
                            <select required name="linenadequate" class="form-control value="<?php echo $row['linenadequate'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                        </div>

                        <div class="col-xl-6"> 
                            <label class="form-control-label">Are consumables (cotton wools, spirit etc.) available? <span class="text-danger ml-2">*</span></label>
                            <select required name="consumables" class="form-control value="<?php echo $row['consumables'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                        </div>
                     </div>

                     <div class="form-group row mb-3">
                        <div class="col-xl-6"> 
                            <label class="form-control-label">(If consumables are available) Are consumables adequate for use? <span class="text-danger ml-2">*</span></label>
                            <select required name="consumablesadequate" class="form-control value="<?php echo $row['consumablesadequate'];?>>
                              <option value="">--Select --</option>
                              <option value="Yes">Yes </option>
                              <option value="No">No</option>
                            </select>
                          
                        </div>
                            <div class="col-xl-6">
                              <label class="form-control-label">Ratio of Nurse on duty to patients on admission<span class="text-danger ml-2">*</span></label>
                            <input type="text" class="form-control" name="nurseduty" value="<?php echo $row['nurseduty'];?>" id="exampleInputFirstName" >
                            </div>
                     </div>

                    <div class="form-group row mb-3">
                        <div class="col-xl-6">
                        <label class="form-control-label">Select Service Area<span class="text-danger ml-2">*</span></label>
                         <?php
                        $qry= "SELECT * FROM tblserviceArea ORDER BY serviceArea ASC";
                        $result = $conn->query($qry);
                        $num = $result->num_rows;		
                        if ($num > 0){
                          echo ' <select required name="classId" onchange="classArmDropdown(this.value)" class="form-control mb-3">';
                          echo'<option value="">--Select Class--</option>';
                          while ($rows = $result->fetch_assoc()){
                          echo'<option value="'.$rows['Id'].'" >'.$rows['serviceArea'].'</option>';
                              }
                                  echo '</select>';
                              }
                            ?>  
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">Service Area Arm<span class="text-danger ml-2">*</span></label>
                            <?php
                                echo"<div id='txtHint'></div>";
                            ?>
                        </div>
                    </div>
                      <?php
                    if (isset($Id))
                    {
                    ?>
                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                    } else {           
                    ?>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                    <?php
                    }         
                    ?>
                    </form>
                 </div>
               </div>

              <!-- Input Group -->
                 <div class="row">
              <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Data Entry</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Period</th>
                        <th>Relative Seat</th>
                        <th>electricity</th>
                        <th>Nurse duty</th>
                        <th>Class</th>
                        <th>Class Arm</th>
                        <th>Date Created</th>
                         <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                
                    <tbody>

                  <?php
                      $query = "SELECT tblstudents.Id,tblservicearea.serviceArea,tblservicearea_arms.serviceareaArms,tblservicearea_arms.Id AS classArmId,tblstudents.period,
                      	tblstudents.relativeseat,tblstudents.relativeseatshape,tblstudents.electricity,tblstudents.handwash,
                        tblstudents.sphygmeters,tblstudents.sphygmetersfunc,tblstudents.bedspace,tblstudents.nets,tblstudents.bedshape,
                        tblstudents.drugprescform,tblstudents.labtestform,tblstudents.linen,tblstudents.linenadequate,
                        tblstudents.consumables,tblstudents.consumablesadequate,tblstudents.nurseduty,tblstudents.dateCreated
                      FROM tblstudents
                      INNER JOIN tblservicearea ON tblservicearea.Id = tblstudents.classId
                      INNER JOIN tblservicearea_arms ON tblservicearea_arms.Id = tblstudents.classArmId";
                      $rs = $conn->query($query);
                      $num = $rs->num_rows;
                      $sn=0;
                      $status="";
                      if($num > 0)
                      { 
                        while ($rows = $rs->fetch_assoc())
                          {
                             $sn = $sn + 1;
                            echo"
                              <tr>
                                <td>".$sn."</td>
                                <td>".$rows['period']."</td>
                                <td>".$rows['relativeseat']."</td>
                                <td>".$rows['electricity']."</td>
                                <td>".$rows['nurseduty']."</td>
                                <td>".$rows['handwash']."</td>
                                <td>".$rows['serviceArea']."</td>
                                 <td>".$rows['dateCreated']."</td>
                                <td><a href='?action=edit&Id=".$rows['Id']."'><i class='fas fa-fw fa-edit'></i></a></td>
                                <td><a href='?action=delete&Id=".$rows['Id']."'><i class='fas fa-fw fa-trash'></i></a></td>
                              </tr>";
                          }
                      }
                      else
                      {
                           echo   
                           "<div class='alert alert-danger' role='alert'>
                            No Record Found!
                            </div>";
                      }
                      
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!--Row-->

          <!-- Documentation Link -->
          <!-- <div class="row">
            <div class="col-lg-12 text-center">
              <p>For more documentations you can visit<a href="https://getbootstrap.com/docs/4.3/components/forms/"
                  target="_blank">
                  bootstrap forms documentations.</a> and <a
                  href="https://getbootstrap.com/docs/4.3/components/input-group/" target="_blank">bootstrap input
                  groups documentations</a></p>
            </div>
          </div> -->

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
       <?php include "Includes/footer.php";?>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
   <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
</body>

</html>