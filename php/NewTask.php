<?php
//connecting to the database//
$db = new mysqli('smcse-stuproj00.city.ac.uk','adbt117','200012740','adbt117');
    if ($db->connect_error) {
        printf("Connection failed: %s/n" . $db->connect_error);
        exit();
    }else{
//initialising the the php variables and linking them to the html ids//
$TASKID = $_POST['taskid'];
$STARTDAY =$_POST['startday'];
$FINISHDAY= $_POST['starfinish'];
$DESCRIPTION = $_POST['description'];
$BAYNUMBER =$_POST['baynumber'];
$RESULT= $_POST['result'];
$SERVICEDAY =$_POST['serviceday'];
$SERVICECOST  =$_POST['servicecost'];
$HOURSTAKEN  =$_POST['hourstaken'];
$STAFFID  =$_POST['staffid'];
$JOBID  =$_POST['jobid'];
//the data inputed in the fields is inserted in the database// 

$query_TASKID = "SELECT TaskID FROM GARITS_Task WHERE TaskID ='$TASKID'";
        $reg_TASKID = mysql_query($db, $query_TASKID);

$query_STAFFID = "SELECT FK_StaffID FROM GARITS_Task WHERE FK_StaffID ='$STAFFID'";
        $reg_STAFFID = mysql_query($db, $query_STAFFID);

        if(mysql_num_rows($reg_TASKID) > 0){
            echo "<script language = 'javascript'>
            alert('This Invoice ID is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";

        }
        if(mysql_num_rows($reg_STAFFID) > 0){
            echo "<script language = 'javascript'>
            alert('This Invoice ID is  already in the database.');
            window.location.href='https://smcse.city.ac.uk/student/adbt117/form.php';
            </script>";

        }

        }
else{
        mysql_query($db, "INSERT INTO `GARITS_Task` (`TaskID`, `TaskStart`, `TaskFinish`, `TaskDescription`, `TaskBayNumber`, `TaskResult`, `TaskServiceDay`, `TaskServiceCost`, `TaskHoursTaken`, `FK_StaffID`, `FK_JobID`) VALUES ('".$TASKID."', '".$STARTDAY."','".$FINISHDAY."','".$DESCRIPTION."','".$BAYNUMBER."','".$RESULT."','".$SERVICEDAY."','".$SERVICECOST."','".$HOURSTAKEN."','".$STAFFID."','".$JOBID."')")
    print_r ($info);
?>