<?php
    include 'php/connectdb.php'

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || All Customers</title>
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
              <p>Receptionist 101</p>
            </div>
          </div>
        </header>
        <main class="admin-view">
          <div class="dashboard-container">
            <section class="section section-staff">
              <div class="staff">
                <div class="staff__total">
                  <h3 class="staff__total-text">
                    Total Customers:
                    <span class="staff__total-number">
                      <?php


                        $query_CustomerTotal = "SELECT COUNT(GARITS_Customer.CustomerMobileNumber) FROM GARITS_Customer";
                        $result = $db->query($query_CustomerTotal);
                        $row = $result->fetch_assoc();
                        echo $row["COUNT(GARITS_Customer.CustomerMobileNumber)"];
                        
                      ?>
                    </span>
                  </h3>
                </div>
                <a href="addnewcustomer.html" class="staff__cta">Add New</a>
              </div>
            </section>

            <section class="section-search m-mt">
              <div class="search">
                <div class="search__box">
                  <form action="search.php" method="POST">
                    <input
                      type="text"
                      class="search__input"
                      placeholder="Search"
                    />
                    <button type="submit" name="submit_search">Search</button>
                    <div class="search__icon"></div>
                    
                  </form>
                </div>
                <div class="search-sort">
                  <select class="search__select">
                    <option>Show all</option>
                  </select>
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
                    <p class="table__head-description">All Customers</p>
                  </div>
                </div>
                <div>
                  <table class="customers">
                  <tr>
            <th>Card ID</th>
            <th>Name</th>
            <th>Customer Type</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>PostCode</th>
            <th>Fax</th>
            <th>Card Issue Date</th>
        </tr>
                    <?php

                      $query_CustomerTable = "SELECT * From GARITS_Customer";

                      $result = $db->query($query_CustomerTable);


                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()){
                              echo "<tr><td>" . $row["CustomerCardID"] .
                               "</td><td>" . $row["CustomerName"] .
                                "</td><td>" . $row["CustomerType"] .
                                 "</td><td>" . $row["CustomerMobileNumber"] .
                                  "</td><td>" . $row["CustomerEmail"] .
                                   "</td><td>" . $row["CustomerPostCode"] .
                                    "</td><td>" .  $row["CustomerCardIssueDate"] .
                                     "</td><td>" .  $row["CustomerFaxNumber"] .
                                      "</td><td>" . "<a href=\"editcustomer.php?ID="  . $row["CustomerCardID"] . "\"><img src=\"assets/icons/edit.svg\" /></a>" ."</td><td>"
                                      . "<a href=\"deletecustomer.php?ID="  . $row["CustomerCardID"] . "\"><img src=\"assets/icons/delete.svg\" /></a>" ."</td><td>";
                              
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
