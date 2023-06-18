<?php
    include "php/connectdb.php";
    $username=$_GET["username"];
    $query_staff="SELECT * FROM GARITS_Staff WHERE StaffUsername = '$username'";
    $result = $db->query($query_staff);
    $row = $result->fetch_assoc();
    $id=$row["StaffID"];
    $name=$row["StaffName"];
    $surname=$row["StaffSurname"];
    $role=$row["StaffRole"];
    $rate=$row["StaffHourlyRate"];
    echo $role;
    //$password=$row["StaffPassword"];

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Quick fix || Edit Staff</title>
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
                                <h3 class="staff__total-text">Edit Staff</h3>
                            </div>
                        </div>
                    </section>
                    
                    <section class="section-form">
                        <form class="form" action="php/updatestaff.php" method="post">
                            <div class="form__box">
                                <div class="form__input-box form__input-box--left">
                                    <label for="fname" class="form__label">First Name</label>
                                    <input type="text" class="form__input" name="name" value="<?php echo $name ?>"  required/>
                                </div>
                                <div class="form__input-box">
                                    <label for="fname" class="form__label">Surname</label>
                                    <input type="text" class="form__input" name="surname" value="<?php echo $surname ?>" required />
                                </div>
                            </div>
                            <div class="form__box">
                                <div class="form__input-box form__input-box--left">
                                    <label for="fname" class="form__label">Username</label>
                                    <input type="text" class="form__input" name="username" value="<?php echo $username ?>" required/>
                                </div>
                                <div class="form__input-box">
                                    <label for="fname" class="form__label">Staff Id</label>
                                    <input type="text" class="form__input semi-disable" name="id" value="<?php echo $id ?>" readonly />
                                </div>
                            </div>
                            <div class="form__box">
                                <div class="form__input-box">
                                    <label for="fname" class="form__label">Role</label>
                                    <select class="form__select" name="role" required>
                                        <option value='Mechanic' <?php if($role=='Mechanic'){ echo ' selected="selected"'; } ?>>Mechanic</option>
                                        <option value='Receptionist' <?php if($role=='Receptionist'){ echo ' selected="selected"'; } ?>>Receptionist</option>
                                        <option value='Franchisee' <?php if($role=='Franchisee'){ echo ' selected="selected"'; } ?>>Franchisee</option>
                                        <option value='Administrator' <?php if($role=='Administrator'){ echo ' selected="selected"'; } ?>>Administrator</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form__box">
                                <div class="form__input-box form__input-box--password">
                                    <label for="fname" class="form__label">Hourly Rate(£)</label>
                                    <input type="text" class="form__input form__input" name="rate" value="<?php echo $rate ?>" required/>
                                </div>
                                <div class="form__input-box form__input-box--password">
                                    <label for="fname" class="form__label">Password</label>
                                    <input type="password" class="form__input form__input" name="password" required/>
                                </div>
                            </div>
                            <div class="form__cta">
                                <button type="submit" class="form__btn">Save</button>
                            </div>
                        </form>
                    </section>
            </div>
            </main>
        </div>
    </div>
</body>
</html>