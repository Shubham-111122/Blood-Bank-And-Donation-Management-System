<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    body {
      background-color: #f0f8ff; /* Very light blue background */
      font-family: "Times New Roman", Times, serif; /* Set font to Times New Roman */
    }
    h1, h2, h3, h4 {
      font-weight: bold; /* Make all headings bold */
    }
    p {
      font-family: "Times New Roman", Times, serif; /* Set paragraph font to Times New Roman */
    }
    .quote {
      font-family: "Times New Roman", Times, serif; /* Set font to Times New Roman for the quote */
      font-style: italic; /* Make the quote italic */
      text-align: center; /* Center-align the quote */
      margin-top: 30px; Add some margin at the top
      font-size: 1.2em; /* Slightly increase font size for the quote */
    }
  </style>
</head>

<body>

<?php 
$active ='about';
include('head.php');
?>

<div id="page-container" style="margin-top:50px; position: relative; min-height: 84vh;">
  <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-4 mb-3">About Us</h1>
          <p> 
            <?php
              include 'conn.php';
              $sql = "select * from pages where page_type='aboutus'";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }
            ?>
          </p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="image\banner_590x300.jpg" style="height:400px" alt="error">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Blood Donation Quote -->
<div class="quote">
  <p>"The blood you donate gives someone another chance at life. Donate today and save lives!"</p>
</div>

</body>
</html>
