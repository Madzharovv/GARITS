<?php
  include "php/connectdb.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || Available Parts</title>
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
                class="reception-icon--1"
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
                src="img/reception/reception5.svg"
                alt="Reception Images"
              /><span>Parts</span></a
            >
          </li>
          <li class="reception__sidebar-nav-item reception reception-last">
            <a href="/login.html"
              ><img
                src="img/reception/reception7.svg"
                alt="Reception Images"
              /><span>Logout </span></a
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
              <p>Receptionist 101</p>
            </div>
          </div>
        </header>
        <main class="admin-view">
          <div class="dashboard-container">
            <section class="section section-staff">
              <div class="staff">
                <div class="staff__total width-45">
                  <h3 class="staff__total-text">
                    Total Stock Available:
                    <span class="staff__total-number">
                    <?php
                                  
                                  $query_StockTotal = "SELECT SUM(PartStockLevel) from GARITS_StockLedger";
                                  $result = $db->query($query_StockTotal);
                                  $row = $result->fetch_assoc();
                                  echo $row["SUM(PartStockLevel)"];
                                  
                                ?>
                    </span>
                  </h3>
                </div>
                <div class="utility-btn">
                  <a href="/stockreport.html" class="staff__cta-1">Generate Report</a>
                  <a href="/addnewpart.html" class="staff__cta">Add Part</a>
                </div>
              </div>
            </section>

            <section class="section-search m-mt">
              <div class="search">
                <div class="search__box">
                  <input type="text"class="search__input"placeholder="Search"/>
                  <div class="search__icon"></div>
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
                      src="img/reception/reception3.svg"
                      alt="Photo Icon"
                    />
                    <p class="table__head-description">Available Stocks</p>
                  </div>
                </div>
                <div>
                  <table class="customers">
                    <tr>
                      <th>Part ID</th>
                      <th>Manufacturer</th>
                      <th>Vehcil Type</th>
                      <th>Part Name</th>
                      <th>Price</th>
                      <th>Stock Level</th>
                      <!-- <th>Role</th> -->
                    </tr>
                    <?php

                        $query_stockTable = "SELECT * FROM GARITS_StockLedger";
                        $result = $db->query($query_stockTable);
                
                
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()){
                                echo "<tr><td>" . $row["PartID"] . 
                                "</td><td>" . $row["PartManufacturer"] . 
                                "</td><td>" . $row["PartVehicleType"] . 
                                "</td><td>" . $row["PartName"] .  
                                "</td><td>" . "£" . $row["PartPrice"] . 
                                "</td><td>" . $row["PartStockLevel"] . "</td><td>";
                            }
                        }
                        else{
                            echo "empty table";
                        }
                        #mysqli_query($db, $query_time);

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
