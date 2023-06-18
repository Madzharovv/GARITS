<?php
  include 'php/connectdb.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || Admin - Dashboard</title>
    <script defer src="script.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="sidebar">
        <div class="sidebar__menu"></div>
        <ul class="side-nav">
            <li class="reception__sidebar-nav-item reception">
                <a href="admin-dashboard.php"
                  ><img
                    src="assets/icons/staff.svg"
                    alt="Reception Images"
                  /><span>Staff</span></a
                >
              </li>
              
              <li class="reception__sidebar-nav-item reception reception-last">
                <a href="login.html"
                  ><img
                    src="assets/icons/logout.svg"
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
                src="./assets/images/avatar.png"
                alt="user"
                class="user-avatar__photo"
              />
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
                <div class="staff__total">
                  <h3 class="staff__total-text">
                    Total staff: <span class="staff__total-number">
                      <?php

                        $query_StaffTotal = "SELECT COUNT(GARITS_Staff.StaffID) FROM GARITS_Staff ";
                        $result = $db->query($query_StaffTotal);
                        $row = $result->fetch_assoc();
                        echo $row["COUNT(GARITS_Staff.StaffID)"] 

                      ?>
                    </span>
                  </h3>
                </div>
                <a href="./register-staff.html" class="staff__cta">Add new</a>
              </div>
            </section>
            <section class="section-search">
              <div class="search">
                <div class="search__box">
                  <input
                    type="text"
                    class="search__input"
                    placeholder="Search"
                  />
                  <div class="search__icon"></div>
                </div>
                <div class="search-sort">
                  <select class="search__select">
                    <option>Show all</option>
                    <option>Receptionist</option>
                    <option>Mechanic</option>
                    <option>Franchisee</option>
                  </select>
                </div>
              </div>
            </section>
            <section class="section-table">
              <div class="table">
                <div class="table__title">All staff</div>
                <div>
                  <table class="customers">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Role</th>
                      <th>UserName</th>
                      
                      
                  </tr>
                    <?php

                      $query_StaffTable = "SELECT StaffID,StaffName,StaffSurname,StaffRole,StaffUsername FROM GARITS_Staff ";
              
                      $result = $db->query($query_StaffTable);
              
              
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()){
                              echo "<tr><td>" . $row["StaffID"] . "</td><td>" 
                              . $row["StaffName"] . " " . $row["StaffSurname"] . "</td><td>" 
                              . $row["StaffRole"] . "</td><td>" 
                              . $row["StaffUsername"] . "</td><td>" 
                              . "<a href=\"edit-staff.php?username=".$row["StaffUsername"] ."\"><img src=\"assets/icons/edit.svg\"/></a>" . "</td><td>"
                              . "<a href=\"deletestaff.php?ID="  . $row["StaffUsername"] . "\"><img src=\"assets/icons/delete.svg\" /></a>" ."</td><td>";
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
