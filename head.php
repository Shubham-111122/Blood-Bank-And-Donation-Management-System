<html>
<head>
  <style>
    .header {
      overflow: hidden;
      background-color: black; /* Complete black background */
      top: 0;
      width: 100%;
      padding: 10px 5px;
      color: #FF0404;
    }

    /* Style the header links */
    .header a {
      float: left;
      color: white;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      font-family: "Times New Roman", Times, serif; /* Times New Roman font */
      border-radius: 4px;
      font-weight: normal; /* Removed bold from hyperlinks */
      transition: all 0.3s ease; /* Smooth transition for hover effect */
    }

    /* Style the logo link */
    .header a.logo {
      font-size: 25px;
      font-weight: bold;
      color: #FF0404;
      font-family: "Times New Roman", Times, serif; /* Times New Roman font */
    }

    /* Hover effect: increase font size and weight */
    .header a:hover {
      font-size: 20px; /* Increase font size slightly */
      font-weight: bold; /* Make text bold */
    }

    /* Float the link section to the right */
    .header-right {
      float: right;
    }

    /* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }
      .header-right {
        float: none;
      }
    }

    /* Style the active/current link */
    a.act {
      color: #FF0404; /* Highlighted active link */
      border-radius: 30px;
    }
  </style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Blood Bank & Donation </a>
    <div class="header-right">
      <a href="about_us.php" <?php if($active=='about') echo "class='act'"; ?>>About Us</a>
      <a href="why_donate_blood.php" <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php" <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div>
</body>
</html>
