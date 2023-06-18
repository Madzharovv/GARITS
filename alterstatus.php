<?php
    include 'php/connectdb.php';
    //get customer info
    $ID = $_GET['ID'];
    $query_Job = "SELECT * From GARITS_Job WHERE JobID  = $ID";
    $result = $db->query($query_Job);
    $row = $result->fetch_assoc();
    $type = $row["JobType"];
    $status = $row["JobStatus"];
    $estTime =$row["JobEstimatedTime"]; 
    $desc =$row["JobDescription"];
    $accDate = $row["JobAcceptedDate"];
    $deadline = $row["JobDeadlineDate"];
    $customerID = $row["FK_CustomerCardID"];
    $regNum = $row["FK_VehicleRegistrationIDNumber"];


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || ALter Status</title>
    <script defer src="script.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="sidebar">
        <div class="sidebar__menu"></div>
        <ul class="side-nav">
          <li class="reception__sidebar-nav-item reception">
            <a href="/allcustomers.php"
              ><img
                src="img/reception/reception1.svg"
                alt="Reception Images"
              /><span>Customers</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="/allvehicles.php"
              ><img
                src="img/reception/reception2.svg"
                alt="Reception Images"
              /><span>Vehicles</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="/alljobs.php"
              ><img
                src="img/reception/reception3.svg"
                alt="Reception Images"
              /><span>Jobs</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="/invoicepage.html"
              ><img
                src="img/reception/reception4.svg"
                alt="Reception Images"
              /><span>Invoice</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception">
            <a href="/availableparts.php"
              ><img
                src="img/reception/reception6.svg"
                alt="Reception Images"
              /><span>Parts</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception reception-last">
            <a href="/availableparts.php"
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
              <img
                src="/assets/images/avatar.png"
                alt="user"
                class="user-avatar__photo"
              />
            </div>
            <div class="user-avatar__text">
              <h3>Welcome</h3>
              <p>Receptionist 102</p>
            </div>
          </div>
        </header>
        <main class="admin-view">
          <div class="dashboard-container">
            <section class="section section-staff">
              <div class="staff">
                <div class="staff__total">
                  <h3 class="staff__total-text">Change Job Status</h3>
                </div>
              </div>
            </section>

            <section class="section-form">
              <form class="form" action="php/updatestatus.php" method="POST">
                <div class="form__box">
                  <div
                    class="form__input-box form__input-box--left semi-disable"
                  >
                    <label for="fname" class="form__label">Job ID</label>
                    <?php
                        echo "<input type='text' name=\"ID\" class='form__input' readonly value=". $ID .">"
                      ?>
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Job Status</label>
                    <select class="form__select" name="status">
                      <option value="In Progress" <?php if($status=='In Progress'){ echo ' selected="selected"'; } ?> >In Progress</option>
                      <option value="Completed" <?php if($status=='Completed'){ echo ' selected="selected"'; } ?>>Completed</option>
                      <option value="To be completed" <?php if($status=='To be completed'){ echo ' selected="selected"'; } ?>>To be completed</option>
                      <option value="Cancel" <?php if($status=='Cancel'){ echo ' selected="selected"'; } ?>>Cancel</option>
                    </select>
                  </div>
                </div>

                <div class="form__box semi-disable">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label">Job Type</label>
                      <?php
                        echo "<input type='text' class='form__input' disabled value=". $type ." />"
                      ?>
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Estimated Time</label>
                      <?php
                        echo "<input type='text' class='form__input' disabled value= " . $estTime . " />"
                      ?>
                  </div>
                </div>

                <div class="form__box semi-disable">
                  <div class="form__input-box">
                    <label for="fname" class="form__label">Job Description</label>
                      <?php 
                        echo "<textarea class='form__input' name='' id='fname' cols='30' rows='10' disabled>". $desc ."</textarea>"
                      ?>
                  </div>
                </div>
                <div class="form__box semi-disable">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label"
                      >Job Accepted Date</label
                    >
                      <?php
                        echo "<input type='text' class='form__input' disabled value=". $accDate .">"
                      ?>
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label"
                      >Job Deadline Date</label
                    >
                      <?php
                        echo "<input type='text' class='form__input' disabled value=". $deadline .">"
                      ?>
                  </div>
                </div>
                <div class="form__box semi-disable">
                  <div class="form__input-box form__input-box--left">
                    <label for="fname" class="form__label"
                      >Vehicle Reg. Number</label
                    >
                    <?php
                        echo "<input type='text' class='form__input' disabled value=". $regNum .">"
                      ?>
                  </div>
                  <div class="form__input-box">
                    <label for="fname" class="form__label"
                      >Customer Card ID</label
                    >
                      <?php
                        echo "<input type='text' class='form__input' disabled value=". $customerID .">"
                      ?>
                  </div>
                </div>
                <div class="form__cta">
                  <button type="submit" class="btn form__btn">Save</button>
                </div>
              </form>
            </section>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
