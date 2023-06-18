<?php
 include "php/connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || Receptionist</title>
    <script defer src="script.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="sidebar">
          <div class="sidebar__menu"></div>
          <ul class="side-nav">
            <li class="reception__sidebar-nav-item reception">
              <a href="allcustomers.php"
                ><img
                  src="img/reception/reception1.svg"
                  alt="Reception Images"
                /><span>Customers</span></a
              >
            </li>
            <li class="reception__sidebar-nav-item reception">
              <a href="allvehicles.php"
                ><img
                  src="img/reception/reception2.svg"
                  alt="Reception Images"
                /><span>Vehicles</span></a
              >
            </li>
            <li class="reception__sidebar-nav-item reception">
              <a href="alljobs.php"
                ><img
                  src="img/reception/reception3.svg"
                  alt="Reception Images"
                /><span>Jobs</span></a
              >
            </li>
            <li class="reception__sidebar-nav-item reception">
              <a href="invoicepage.html"
                ><img
                  src="img/reception/reception4.svg"
                  alt="Reception Images"
                /><span>Invoice</span></a
              >
            </li>
            <li class="reception__sidebar-nav-item reception">
              <a href="availableparts.php"
                ><img
                  src="img/reception/reception6.svg"
                  alt="Reception Images"
                /><span>Parts</span></a
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
              <img
                src="assets/images/avatar.png"
                alt="user"
                class="user-avatar__photo"
              />
            </div>
            <div class="user-avatar__text">
              <h3>Welcome</h3>
              <p>Receptionist01</p>
            </div>
          </div>
        </header>
        <main class="admin-view">
          <div class="dashboard-container">
            <section class="reception__sidebar-customers">
              <div class="reception__sidebar-customer">
                <div class="reception__icon reception__icon--1">
                  <svg
                    width="20"
                    height="25"
                    viewBox="0 0 27 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M26.5049 26.1258C25.9869 25.4433 19.7099 22.1941 18.5709 21.5812C17.4379 20.979 16.9859 19.3103 16.9859 19.3103C16.9859 19.3103 16.4759 19.6876 16.4759 18.6278C16.4759 17.5665 16.9859 19.3103 17.4959 15.218C17.4959 15.218 18.9109 14.6867 18.6299 10.2933H18.2899C18.2899 10.2933 19.1399 5.59612 18.2899 4.00631C17.4369 2.4165 17.1029 1.35663 15.2299 0.596516C13.3599 -0.162258 14.0399 -0.0110385 12.6819 0.0665786C11.3219 0.142857 10.1899 1.12779 10.1899 1.65639C10.1899 1.65639 9.3399 1.73267 9.0019 2.18767C8.6619 2.64266 8.0959 4.76241 8.0959 5.29235C8.0959 5.82228 8.3789 9.38732 8.6619 10.1421L8.3249 10.2893C8.0419 14.684 9.4569 15.2166 9.4569 15.2166C9.9669 19.3089 10.4769 17.5652 10.4769 18.6264C10.4769 19.6863 9.9669 19.3089 9.9669 19.3089C9.9669 19.3089 9.5139 20.9763 8.3819 21.5799C7.2499 22.1861 0.965903 25.4433 0.454903 26.1245C-0.0550975 26.8204 0.00190245 30 0.00190245 30H12.0379L12.9159 25.3697L12.1359 24.3259L13.4789 22.526L14.8219 24.3246L14.0419 25.3684L14.9199 29.9987H26.9559C26.9559 29.9987 27.0189 26.8164 26.5029 26.1218L26.5049 26.1258Z"
                      fill="white"
                    />
                  </svg>
                </div>
                <div class="reception__icon-details">
                  <p class="reception__icon-figure">
                    <?php
                    $query_CustomerTable="SELECT * FROM GARITS_Customer";
                    $result=$db->query($query_CustomerTable);
                    echo $result->num_rows;
                    ?>
                  </p>
                  <p class="reception__name">Total customers</p>
                </div>
              </div>
              <div class="reception__sidebar-customer">
                <div class="reception__icon reception__icon--2">
                  <svg
                    width="20"
                    height="25"
                    viewBox="0 0 28 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M7.50231 20.19C7.72929 20.19 7.95405 20.1453 8.16376 20.0584C8.37347 19.9716 8.56401 19.8442 8.72451 19.6837C8.88502 19.5232 9.01233 19.3327 9.0992 19.123C9.18606 18.9133 9.23077 18.6885 9.23077 18.4615C9.23077 18.2346 9.18606 18.0098 9.0992 17.8001C9.01233 17.5904 8.88502 17.3998 8.72451 17.2393C8.56401 17.0788 8.37347 16.9515 8.16376 16.8646C7.95405 16.7778 7.72929 16.7331 7.50231 16.7331C7.04389 16.7331 6.60425 16.9152 6.2801 17.2393C5.95595 17.5635 5.77385 18.0031 5.77385 18.4615C5.77385 18.92 5.95595 19.3596 6.2801 19.6837C6.60425 20.0079 7.04389 20.19 7.50231 20.19ZM21.9185 18.4592C21.9188 18.9176 21.737 19.3574 21.413 19.6818C21.0891 20.0061 20.6496 20.1885 20.1912 20.1888C19.7327 20.1892 19.293 20.0073 18.9686 19.6834C18.6442 19.3595 18.4618 18.92 18.4615 18.4615C18.4615 18.0031 18.6436 17.5635 18.9678 17.2393C19.2919 16.9152 19.7316 16.7331 20.19 16.7331C20.6484 16.7331 21.0881 16.9152 21.4122 17.2393C21.7364 17.5635 21.9185 18.0031 21.9185 18.4615V18.4592ZM10.3846 0C10.0786 0 9.78511 0.121566 9.56872 0.337954C9.35233 0.554342 9.23077 0.847827 9.23077 1.15385V2.30769H7.65923C6.5373 2.30744 5.45368 2.71586 4.61103 3.45658C3.76837 4.1973 3.22438 5.2196 3.08077 6.33231L2.70692 9.23077H1.15385C0.847827 9.23077 0.554342 9.35233 0.337954 9.56872C0.121566 9.78511 3.78004e-08 10.0786 3.78004e-08 10.3846C3.78004e-08 10.6906 0.121566 10.9841 0.337954 11.2005C0.554342 11.4169 0.847827 11.5385 1.15385 11.5385H2.40923L2.38615 11.7092C1.69221 11.936 1.08775 12.3764 0.659181 12.9675C0.230615 13.5585 -0.000107823 14.2699 3.78004e-08 15V21.9231C3.78004e-08 22.8411 0.364697 23.7216 1.01386 24.3708C1.66303 25.0199 2.54348 25.3846 3.46154 25.3846V28.2692C3.46154 28.7283 3.64389 29.1685 3.96847 29.4931C4.29305 29.8176 4.73328 30 5.19231 30C5.65134 30 6.09156 29.8176 6.41615 29.4931C6.74073 29.1685 6.92308 28.7283 6.92308 28.2692V25.3846H20.7623V28.2692C20.7623 28.7283 20.9447 29.1685 21.2692 29.4931C21.5938 29.8176 22.034 30 22.4931 30C22.9521 30 23.3923 29.8176 23.7169 29.4931C24.0415 29.1685 24.2238 28.7283 24.2238 28.2692V25.3846H24.2308C25.1488 25.3846 26.0293 25.0199 26.6784 24.3708C27.3276 23.7216 27.6923 22.8411 27.6923 21.9231V15C27.6924 14.2674 27.4602 13.5537 27.0289 12.9615C26.5976 12.3694 25.9896 11.9293 25.2923 11.7046L25.2715 11.5385H26.5385C26.8445 11.5385 27.138 11.4169 27.3544 11.2005C27.5707 10.9841 27.6923 10.6906 27.6923 10.3846C27.6923 10.0786 27.5707 9.78511 27.3544 9.56872C27.138 9.35233 26.8445 9.23077 26.5385 9.23077H24.9762L24.6069 6.33923C24.4649 5.22566 23.9219 4.20202 23.0796 3.45994C22.2373 2.71786 21.1534 2.30822 20.0308 2.30769H18.4615V1.15385C18.4615 0.847827 18.34 0.554342 18.1236 0.337954C17.9072 0.121566 17.6137 0 17.3077 0H10.3846ZM4.73538 11.5385L5.37 6.62769C5.4418 6.07134 5.7138 5.56019 6.13513 5.18983C6.55646 4.81947 7.09826 4.61526 7.65923 4.61538H20.0285C20.5898 4.61533 21.1319 4.81986 21.5533 5.1907C21.9746 5.56153 22.2464 6.07323 22.3177 6.63L22.9454 11.5385H4.73769H4.73538ZM25.3846 21.9231C25.3846 22.2291 25.2631 22.5226 25.0467 22.739C24.8303 22.9554 24.5368 23.0769 24.2308 23.0769H3.46154C3.15552 23.0769 2.86203 22.9554 2.64565 22.739C2.42926 22.5226 2.30769 22.2291 2.30769 21.9231V15C2.30769 14.694 2.42926 14.4005 2.64565 14.1841C2.86203 13.9677 3.15552 13.8462 3.46154 13.8462H24.2308C24.5368 13.8462 24.8303 13.9677 25.0467 14.1841C25.2631 14.4005 25.3846 14.694 25.3846 15V21.9231Z"
                      fill="white"
                    />
                  </svg>
                </div>
                <div class="reception__icon-details">
                  <p class="reception__icon-figure">
                  <?php
                    $query_VehicleTable="SELECT * FROM GARITS_Vehicle";
                    $result=$db->query($query_VehicleTable);
                    echo $result->num_rows;
                    ?>
                  </p>
                  <p class="reception__name">Total Vehicle</p>
                </div>
              </div>
              <div class="reception__sidebar-customer">
                <div class="reception__icon reception__icon--3">
                  <svg
                    width="20"
                    height="25"
                    viewBox="0 0 29 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M23.6464 13.1464L23.5 13.2929V13.5V20.5389V21.405V21.42H23.9913L23.75 21.838C24.2266 22.1131 24.599 22.5379 24.8097 23.0463C25.0203 23.5548 25.0572 24.1185 24.9148 24.6501C24.7723 25.1817 24.4585 25.6514 24.0219 25.9864C23.5853 26.3214 23.0503 26.503 22.5 26.503C21.9496 26.503 21.4147 26.3214 20.9781 25.9864C20.5414 25.6514 20.2276 25.1817 20.0851 24.6501C19.9427 24.1185 19.9797 23.5548 20.1903 23.0463C20.4009 22.5379 20.7734 22.1131 21.25 21.838L21.5 21.6936V21.405V13.5V13.2929L21.3535 13.1464L18.3535 10.1464L18.2071 9.99998H18H7.49999H6.99999V10.5V15V15.5H7.49999H11.5V20.5H7.49999H6.99999V21V25.5V26H7.49999H10.92H11.2086L11.353 25.75C11.5727 25.3694 11.8889 25.0534 12.2697 24.834C12.6505 24.6145 13.0823 24.4993 13.5218 24.5C13.9613 24.5007 14.3928 24.6172 14.7729 24.8378C15.153 25.0584 15.4683 25.3753 15.6868 25.7565C15.9054 26.1378 16.0197 26.57 16.018 27.0094C16.0163 27.4489 15.8989 27.8802 15.6774 28.2598C15.456 28.6394 15.1383 28.9539 14.7566 29.1716L15.0043 29.6059L14.7566 29.1716C14.3749 29.3893 13.9425 29.5026 13.503 29.5C13.0667 29.4973 12.6387 29.3806 12.2615 29.1613C11.8844 28.942 11.5711 28.6278 11.353 28.25L11.2087 27.9999H10.92H4.99999V21V20.5H4.49999H0.5V15.5H4.49999H4.99999V15V5.99999V5.49999H4.49999H0.5V0.5H11.5V5.49999H7.49999H6.99999V5.99999V7.49999V7.99999H7.49999H18H18.2071L18.3535 7.85354L22.5 3.7071L27.7928 8.99998L23.6464 13.1464ZM0.999997 4.49999V4.99999H1.5H10.5H11V4.49999V1.5V0.999997H10.5H1.5H0.999997V1.5V4.49999ZM11 16.5V16H10.5H1.5H0.999997V16.5V19.5V20H1.5H10.5H11V19.5V16.5ZM22.8535 4.76144L22.5 4.40788L22.1464 4.76144L18.2614 8.64643L17.9079 8.99998L18.2614 9.35354L22.1464 13.2385L22.5 13.5921L22.8535 13.2385L26.7385 9.35354L27.0921 8.99998L26.7385 8.64643L22.8535 4.76144ZM14.6111 25.337C14.2822 25.1172 13.8955 25 13.5 25C12.9695 25 12.4608 25.2107 12.0858 25.5857C11.7107 25.9608 11.5 26.4695 11.5 27C11.5 27.3955 11.6173 27.7822 11.837 28.1111C12.0568 28.44 12.3692 28.6963 12.7346 28.8477C13.1001 28.9991 13.5022 29.0387 13.8902 28.9615C14.2781 28.8843 14.6345 28.6939 14.9142 28.4142C15.1939 28.1345 15.3844 27.7781 15.4615 27.3901C15.5387 27.0022 15.4991 26.6 15.3477 26.2346C15.1964 25.8691 14.94 25.5568 14.6111 25.337ZM21.3888 25.6629C21.7177 25.8827 22.1044 26 22.5 26C23.0304 26 23.5391 25.7892 23.9142 25.4142C24.2892 25.0391 24.5 24.5304 24.5 24C24.5 23.6044 24.3827 23.2177 24.1629 22.8888C23.9431 22.5599 23.6308 22.3036 23.2653 22.1522C22.8999 22.0008 22.4977 21.9612 22.1098 22.0384C21.7218 22.1156 21.3655 22.306 21.0857 22.5857C20.806 22.8654 20.6156 23.2218 20.5384 23.6098C20.4612 23.9977 20.5008 24.3999 20.6522 24.7653C20.8036 25.1308 21.0599 25.4431 21.3888 25.6629Z"
                      fill="white"
                      stroke="white"
                    />
                  </svg>
                </div>
                <div class="reception__icon-details">
                  <p class="reception__icon-figure">
                  <?php
                    $query_CustomerTable="SELECT * FROM GARITS_Job WHERE JobStatus != 'Completed' ";
                    $result=$db->query($query_CustomerTable);
                    echo $result->num_rows;
                    ?>
                  </p>
                  <p class="reception__name">Total Job</p>
                </div>
              </div>
            </section>

            <section class="section-table">
              <div class="table">
                <div class="table__title">
                  <div class="table__head-details">
                    <img
                      width="20"
                      height="20"
                      src="img/photoicon.png"
                      alt="Photo Icon"
                    />
                    <p class="table__head-description">
                      Recently Added Customers
                    </p>
                    <button class="btn btn__head-table">
                      <a href="addnewcustomer.html">New</a>
                    </button>
                  </div>
                </div>
                <div>
                  <table class="customers">
                    <tr>
                      <th>Customer Id</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <!-- <th>Role</th> -->
                    </tr>
                    <?php
                      $query_CustomerTable = "SELECT * From GARITS_Customer ORDER BY CustomerCardID DESC";
                      $result = $db->query($query_CustomerTable);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>" . $row["CustomerCardID"] .
                             "</td><td>" . $row["CustomerName"] .
                              "</td><td>" . $row["CustomerMobileNumber"] .
                              "</td><td>" . "<a href=\"editcustomer.php?ID="  . $row["CustomerCardID"] . "\"><img src=\"assets/icons/edit.svg\" /></a>" ."</td><td>"
                              . "<a href=\"php/deletecustomer.php?ID="  . $row["CustomerCardID"] . "\"><img src=\"assets/icons/delete.svg\" /></a>" ."</td><td>";
                      
                        }
                    }
                   
                    else{
                        echo "empty table";
                    }
                    ?>
                  </table>
                </div>
              </div>
            </section>
            <section class="section-table">
              <div class="table">
                <div class="table__title">
                  <div class="table__head-details">
                    <img
                      width="20"
                      height="20"
                      src="img/photoicon3.png"
                      alt="Photo Icon"
                    />
                    <p class="table__head-description">
                      Recently Added Vehicles
                    </p>
                    <button class="btn btn__head-table">
                      <a href="addvehicle.html">New</a>
                    </button>
                  </div>
                </div>
                <div>
                  <table class="customers">
                    <tr>
                      <th>Vehicle Reg NO</th>
                      <th>Model</th>
                      <th>Chassis Number</th>
                      <th>Owner</th>
                      <!-- <th>Role</th> -->
                    </tr>
                    <?php
                      $query_VehicleTable = "select GARITS_Vehicle.VehicleRegistrationIDNumber,
                      GARITS_Vehicle.VehicleModel,
                      GARITS_Vehicle.VehicleChassisNumber,
                      GARITS_Customer.CustomerName
                      from GARITS_Vehicle
                      inner join GARITS_Customer on GARITS_Vehicle.FK_CustomerCardID= GARITS_Customer.CustomerCardID;";
                      $result = $db->query($query_VehicleTable);


                      if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>" . $row["VehicleRegistrationIDNumber"] . 
                            "</td><td>" . $row["VehicleModel"] . 
                            "</td><td>" . $row["VehicleChassisNumber"] . 
                            "</td><td>" . $row["CustomerName"] . "</td><td>" . 
                            "<a href=\"editvehicle.php?reg=". $row["VehicleRegistrationIDNumber"] ."\"><img src=\"assets/icons/edit.svg\" /></a>" . "</td><td>"
                            . "<a href=\"php/deletevehicle.php?ID="  . $row["VehicleRegistrationIDNumber"] . "\"><img src=\"assets/icons/delete.svg\" /></a>" ."</td><td>"
                            ;
                        }
                      }
                      else{
                        echo "empty table";
                      }

                    ?>
                  </table>
                </div>
              </div>
            </section>
            <section class="section-table">
              <div class="table">
                <div class="table__title">
                  <div class="table__head-details">
                    <img
                      width="20"
                      height="20"
                      src="img/photoicon2.png"
                      alt="Photo Icon"
                    />
                    <p class="table__head-description">Recently Created Jobs</p>
                    <button class="btn btn__head-table">
                      <a href="createjob.html">New</a>
                    </button>
                  </div>
                </div>
                <div>
                  <table class="customers">
                    <tr>
                      <th>Job Id</th>
                      <th>Estimated Time</th>
                      <th>Description</th>
                      <th>Deadline</th>
                      <th>Status</th>
                      <th>Customer</th>
                      <!-- <th>Role</th> -->
                    </tr>
                    <?php
                      $query_stockTable = "SELECT GARITS_Job.JobID,
                      GARITS_Job.JobEstimatedTime,
                      GARITS_Job.JobDescription,
                      GARITS_Job.JobDeadlineDate,
                      GARITS_Job.JobStatus,
                      GARITS_Customer.CustomerName
  
                      FROM GARITS_Job
  
                      INNER JOIN GARITS_Customer on GARITS_Job.FK_CustomerCardID=GARITS_Customer.CustomerCardID
  
                      WHERE GARITS_Job.JobStatus != 'Completed' ";
  
                      $result = $db->query($query_stockTable);
  
  
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()){
                              echo "<tr><td>" . $row["JobID"] . 
                              "</td><td>" . $row["JobEstimatedTime"] . 
                              "</td><td>" . $row["JobDescription"] . 
                              "</td><td>" . $row["JobDeadlineDate"] . 
                              "</td><td>" . $row["JobStatus"] . 
                              "</td><td>" . $row["CustomerName"] . 
                              "</td><td>" . "<a href=\"alterstatus.php?ID=". $row["JobID"] ." \"><img src=\"assets/icons/edit.svg\" /></a>" ."</td><td>"
                              . "<a href=\"deletejob.php?ID=". $row["JobID"] ." \"><img src=\"assets/icons/delete.svg\" /></a>" ."</td><td>"
                              ;
                              
                          }
                      }
                      else{
                          echo "empty table";
                      }
                    
                    ?>
                  </table>
                </div>
              </div>
            </section>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
