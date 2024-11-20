<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - Trip Planner Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 20px;
    }
    
    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }
    
    p {
      color: #666;
      line-height: 1.6;
      margin-bottom: 10px;
    }
    
    .containers {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    .contact-info {
      margin-bottom: 20px;
    }
    
    .contact-info p {
      margin-bottom: 5px;
    }
    
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .contact-form button {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    .contact-form button:hover {
      background-color: #555;
    }
  </style>
</head>
<body><?php
include "navbar.php";?>
  <div class="containers">
    <h1>Contact Us</h1>
    
    <div class="contact-info">
      <p>Email: info@tripplanner.com</p>
      <p>Phone: +1 123-456-7890</p>
    </div>
    
    <p>We'd love to hear from you! If you have any questions, feedback, or need assistance, please feel free to get in touch with us using the form below:</p>
 

  </div>
</body>
</html>
<?php
     include "footer.php";
    ?>