<?php

include "php/connectdb.php";
$jobID = $_GET["ID"];
$query_jobDetails = "SELECT GARITS_Job.JobID,
GARITS_Job.JobEstimatedTime,
GARITS_Job.JobDescription,
GARITS_Job.JobAcceptedDate,
GARITS_Job.JobDeadlineDate,
GARITS_Job.JobStatus,
GARITS_Job.JobType,
GARITS_Job.FK_CustomerCardID,
GARITS_Vehicle.VehicleModel,
GARITS_Job.FK_VehicleRegistrationIDNumber

FROM GARITS_Job

INNER JOIN GARITS_Vehicle on GARITS_Job.FK_VehicleRegistrationIDNumber=GARITS_Vehicle.VehicleRegistrationIDNumber

WHERE GARITS_Job.JobStatus = 'To be completed'";

$result = $db->query($query_jobDetails);
$row=$result->fetch_assoc();
$estTime=$row["JobEstimatedTime"];
$desc=$row["JobDescription"];
$accDate=$row["JobAcceptedDate"];
$deadline=$row["JobDeadlineDate"];
$status=$row["JobStatus"];
$type=$row["JobType"];
$customerID=$row["FK_CustomerCardID"];
$model=$row["VehicleModel"];
$reg=$row["FK_VehicleRegistrationIDNumber"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || New job</title>
    <script defer src="script.js"></script>
</head>
<body>
    <div class="container">
        <nav class="sidebar">
            <div class="sidebar__menu"></div>
            <ul class="side-nav">
                <li class="reception__sidebar-nav-item reception">
                    <a href="mechanic.php"
                      ><img
                        src="assets/icons/mechanic.svg"
                        alt="Reception Images"
                      /><span>Jobs</span></a
                    >
                  </li>
                  <li class="reception__sidebar-nav-item reception">
                    <a href="stock.php"
                      ><img
                        src="assets/icons/tools.svg"
                        alt="Reception Images"
                      /><span>Stock</span></a
                    >
                  </li>
                  
                  <li class="reception__sidebar-nav-item reception reception-last">
                    <a href="login.html"
                      ><img
                        src="img/reception/reception7.svg"
                        alt="Reception Images"
                      /><span>Logout</span></a
                    >
                  </li>
            </ul>
        </nav>
        <div class="right-side">
            <header class="header">
                <div class="user-avatar">
                    <div class="user-avatar__box">
                        <img src="assets/images/avatar.png" alt="user" class="user-avatar__photo" />
                    </div>                    
                    <div class="user-avatar__text">
                        <h3>Welcome</h3>
                        <p>GlideAdmin 101</p>
                    </div>
                </div>
            </header>
            <main class="admin-view">
                <div class="dashboard-container">
                    <section class="section section-staff">
                        <div class="staff">
                            <div class="edit-staff">
                              <h3 class="staff__total-text">Job Details</h3>
                            </div>
                          </div>
                    </section>
                    
                    <section class="section-current-job">
                        <div class="current-job">
                            <ul class="current-job__list">
                                <li class="current-job__item">Job ID: <span class="current-job__span"><?php echo $jobID ?></span></li>
                                
                            </ul>

                            <ul class="current-job__list">
                                <li class="current-job__item">Job Type: <span class="current-job__span"><?php echo $type ?></span></span></li>
                            </ul>

                            <ul class="current-job__list">
                                <li class="current-job__item">Estimated Time: <span class="current-job__span"><?php echo $estTime ?></span></li>
                            </ul>

                            <ul class="current-job__list">
                                <li class="current-job__item">Job Accepted Date: <span class="current-job__span"><?php echo $accDate ?></span></li>
                                <li class="current-job__item">Job Deadline Date: <span class="current-job__span"><?php echo $deadline ?></span></li>
                            </ul>

                            <ul class="current-job__list">
                                <li class="current-job__item">Vehicle Reg. Number: <span class="current-job__span"><?php echo $reg ?></span</li>
                            </ul>

                            <ul class="current-job__list">
                                <li class="current-job__item">Customer Card ID: <span class="current-job__span"><?php echo $customerID ?></span></li>
                            </ul>

                            <ul class="current-job__list">
                                <li class="current-job__item">Job Description: <span class="current-job__span current-job__span--desc"><?php echo $desc ?></span></li>
                            </ul>
                        </div>

                        <div class="form__cta">
                            <a href="/currentjob.html" class="form__btn">Pick up job</a>
                        </div>
                    </section>

                
            </div>
            </main>
        </div>
    </div>
</body>
</html>