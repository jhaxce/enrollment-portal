<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MSU-GSC Enrollment Portal</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="icon" href="img/msu-tan.png" sizes="150x150" />
  <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
  <!-- <link rel='stylesheet' type='text/css' media='screen' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'> -->
  <script src='js/dark.js'></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/dynamic.js"></script>
</head>

<body>
  <div class="app-container">
    <div class="app-header">
      <div class="app-header-left">
        <!-- <span class="app-icon" title="Menu"></span> -->
        <button class="app-menu" title="Menu">
          <span>
            <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
          </span>
        </button>
        <p class="app-name">Mindanao State University - Enrollment Portal</p>
        <!-- <div class="search-wrapper">
          <input class="search-input" type="text" placeholder="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search"
            viewBox="0 0 24 24">
            <defs></defs>
            <circle cx="11" cy="11" r="8"></circle>
            <path d="M21 21l-4.35-4.35"></path>
          </svg>
        </div> -->
      </div>
      <div class="app-header-right">
        <button class="mode-switch" title="Switch Theme">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <!-- <button class="add-btn" title="Add New Project">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-plus">
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" />
          </svg>
        </button> -->
        <button class="notification-btn" title="Notifications">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-bell">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
            <path d="M13.73 21a2 2 0 0 1-3.46 0" />
          </svg>
        </button>
        <button class="profile-btn" title="Profile">
          <?php
            require('../db.php');

            $query = "SELECT profile_picture FROM stud_settings WHERE student_id = ?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("s", $studentId);

            $profilePicture = '';

            if ($stmt->execute()) {
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $profilePicture = $row['profile_picture'];
                }
            }

            $stmt->close();
            $con->close();
          ?>
          <img src="<?php echo ($profilePicture === '') ? 'img/profile.png' : 'data:image/jpeg;base64,' . base64_encode($profilePicture); ?>" alt="Profile Picture" height="auto" width="150">
          <span>
            <?php
              // Assuming you have established a MySQLi database connection
              require('../db.php');

              // Retrieve the student ID from the session
              $studentId = $_SESSION['student_id'];

              // Fetch the first_name and last_name from the database based on the student ID
              $query = "SELECT first_name, last_name FROM stud_profile WHERE student_id = ?";
              $stmt = $con->prepare($query);
              $stmt->bind_param("s", $studentId);
              $stmt->execute();
              $result = $stmt->get_result();

              if ($row = $result->fetch_assoc()) {
                  $first_name = $row['first_name'];
                  $last_name = $row['last_name'];

                  echo $first_name . ' ' . $last_name;
              } else {
                  echo $_SESSION['username'];
              }

              // Close the statement and database connection
              $stmt->close();
              $con->close();
            ?>
          </span>
        </button>
      </div>
    </div>