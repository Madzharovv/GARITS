<?php
  include "php/connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || Mechanic</title>
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
                    <section class="reception__sidebar-customers">
                        <div class="reception__sidebar-customer">
                          <div class="reception__icon reception__icon--1">
                            <img src="assets/icons/mechanic.svg" alt="icon" />
                          </div>
                          <a class="links" href="/total-job-completed.html">
                            <div class="reception__icon-details">
                                <p class="reception__icon-figure">100</p>
                                <p class="reception__name">Total Jobs Completed</p>
                              </div>
                          </a>
                        </div>
                        <div class="reception__sidebar-customer">
                          <div class="reception__icon reception__icon--2">
                            <img src="assets/icons/ongoing.svg" alt="icon" />
                          </div>
                          <a class="links" href="/currentjob.html">
                          <div class="reception__icon-details">
                            <p class="reception__icon-figure">1</p>
                            <p class="reception__name">Ongoing Jobs</p>
                          </div>
                        </a>
                        </div>      
                      </section>

                      <section class="section-table">
                        <div class="table">
                          <div class="table__title">
                            <div class="table__head-details">
                              <img
                                width="20"
                                height="20"
                                src="assets/icons/mechanic.svg"
                                alt="Photo Icon"
                              />
                              <p class="table__head-description">
                                New Jobs
                              </p>
                            
                            </div>
                          </div>
                          <div>
                            <table class="customers">
                              <tr>
                                <th>Job ID</th>
                                <th>Estimated Time</th>
                                <th>Description</th>
                                <th>Brand</th>
                                <!-- <th>Role</th> -->
                              </tr>
                              <?php

                                                    
                                $query_stockTable = "SELECT GARITS_Job.JobID,
                                GARITS_Job.JobEstimatedTime,
                                GARITS_Job.JobDescription,
                                GARITS_Job.JobDeadlineDate,
                                GARITS_Job.JobStatus,
                                GARITS_Vehicle.VehicleModel

                                FROM GARITS_Job

                                INNER JOIN GARITS_Vehicle on GARITS_Job.FK_VehicleRegistrationIDNumber=GARITS_Vehicle.VehicleRegistrationIDNumber

                                WHERE GARITS_Job.JobStatus = 'To be completed' ";

                                $result = $db->query($query_stockTable);


                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()){
                                        echo "<tr><td>" . $row["JobID"] . 
                                        "</td><td>" . $row["JobEstimatedTime"] . 
                                        "</td><td>" . $row["JobDescription"] . 
                                        "</td><td>" . $row["VehicleModel"] . 
                                        "</td><td>" . "<a href=\"newjob.php?ID=". $row["JobID"] ." \"><img src=\"assets/icons/edit.svg\" /></a>" ."</td><td>";
                                        
                                    }
                                }
                                else{
                                    echo "empty table";
                                }

                              ?>
                            </table>
                          </div>
                        </div>
                        <section class="section-paginate">
                          <div class="paginate">
                            <div class="paginate__number">Page 2 of 24</div>
                            <div class="paginate__index">
                              <a href="#" class="paginate__index-double"
                                >&#x2770;&#x2770;</a
                              >
                              <a href="#" class="paginate__index-single">&#x2770;</a>
                              <a href="#">1</a>
                              <a href="#">2</a>
                              <a href="#">3</a>
                              <a href="#">4</a>
                              <a href="#">5</a>
                              <a href="#">6</a>
                              <a href="#">7</a>
                              <a href="#">8</a>
                              <a href="#">9</a>
                              <a href="#">10</a>
                              <a href="#" class="paginate__index-single">&#x2771;</a>
                              <a href="#" class="paginate__index-double"
                                >&#x2771;&#x2771;</a
                              >
                            </div>
                          </div>
                        </section>
                      </section>
                    
                    
            </div>
            </main>
        </div>
    </div> 
</body>
</html>