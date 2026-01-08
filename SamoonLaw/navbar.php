<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .Top {
      background-color: #266470;
      position: sticky;
      top: 0;
      z-index: 1;
      width: 100%;
    }

    .Top-items {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.5rem;
      padding-left: 1rem;
    }

    .Top-list1, .Top-list2 {
      display: flex;
      align-items: center;
    }

    .Top-list1 ul, .Top-list2 ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      align-items: center;
    }

    .Top-list1 ul li, .Top-list2 ul li {
      position: relative;
      display: flex;
      align-items: center;
    }

    .Top-list1 a, .Top-list2 a {
      color: #fff;
      text-decoration: none;
      padding: 0.8rem;
      display: flex;
      align-items: center;
    }

    .Top-list1 a:hover, .Top-list2 a:hover {
      background-color: #000;
      transition-duration: 0.3s;
    }
    
    .Top-list2 i {
      margin-left: 0.5rem; /* Space between icon and text */
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #266470;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 2;
      top: 100%;
      left: 0;
      overflow: auto;
      max-height: 300px; /* Limit height to ensure it doesn't overflow the viewport */
    }

    .dropdown-content a {
      color: #fff;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #000;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .menu-icon {
      display: none;
      font-size: 1.5rem;
      cursor: pointer;
      color: #fff;
    }

    .Top-list1 ul.show, .Top-list2 ul.show {
      display: flex;
    }

    @media screen and (max-width: 768px) {
      .Top-items {
        flex-direction: column;
        align-items: flex-start;
      }

      .Top-list1 ul, .Top-list2 ul {
        display: none;
        width: 100%;
        flex-direction: column;
      }

      .Top-list1 ul.show, .Top-list2 ul.show {
        display: flex;
      }

      .menu-icon {
        display: block;
      }

      .Top-list1 ul li, .Top-list2 ul li {
        width: 100%;
        text-align: center;
      }

      .dropdown-content {
        position: static;
        min-width: 100%;
        box-shadow: none;
        max-height: none; /* Remove max-height limitation on mobile */
      }
    }
  </style>
</head>
<body>
  <div class="Top">
    <div class="Top-items">
      <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
      <div class="Top-list1">
        <ul id="menu">
          <li><i class="fa-solid fa-home"></i><a href="index.php">Home</a></li>
          <li class="dropdown">
            <i class="fa-solid fa-book"></i><a href="#practice-area">Practice</a>
            <div class="dropdown-content">
            
            </div>
          </li>
          <!-- <li class="dropdown">
            <i class="fa-solid fa-money-check-dollar"></i><a href="#">Quick Links</a>
            <div class="dropdown-content">
              <a href="staff.php">Staff</a>
              <a href="aboutus.php">About Us</a>
              <a href="contact.php">Contact</a>
            </div>
          </li> -->
          <li class="dropdown">
            <i class="fa-solid fa-user-graduate"></i><a href="opportunities.php">Opportunities</a>
            <div class="dropdown-content">
             
            </div>
          </li>
        </ul>
      </div>
      <div class="Top-list2">
        <ul id="login-menu">
          <li><a href="../SamoonLaw/loginsystem//admin/">Login<i class="fa-solid fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <script>
    function toggleMenu() {
      const menu = document.getElementById('menu');
      menu.classList.toggle('show');
    }
  </script>
</body>
</html>
