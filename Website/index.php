<!DOCTYPE html>
<html>
   <head>
      <title>Anna University, CEO 
      </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
      <link rel="stylesheet" href="css/myStyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body style="background-color:#FFFFFF;">
      <?php include 'header.php'; ?>
      <div class="container">
         <div class="container-fluid">
            <div class="examination">
               <header id="exam-header">Examination</header>
               <p id="exam-boby">
                  <a href="home.php">Feb./ Mar. Examination, 2018</a><br>
                  <a href="home.php">April/ May Examination, 2018</a><br>
                  <a href="home.php">Nov./ Dec. Examination, 2017</a><br>
               </p>
               <button class="btn btn-default" style="background-color: black; color: white; border-radius: 10px;">
                  <a href="#">No Message Found!!</a>
               </button>
            </div>
         </div>
         <div class="container-fluid">
            <header id="message-header">Message to Institute</header>
            <p id="message-boby">
               <marquee behavior="scroll" direction="up">
               Kind Attention to the Institutes: - All the Principals are requested to kindly mention your college code and college name, when you are making Exam Fees Payment through RTGS, NEFT and Fund Transfer.
               <br><br>
               Notification:- Remittance of Nov./Dec. 2017 Examinations (First Semester) - Registration Fees - Reg -
               <a href="#">Click Here</a> 
               <br><br>
               <p style="color: blue;">
                  Kind Attention to the Institutions: Download the First Year fees abract for Nov / Dec 2017 Examinations from website.
               </p><br>
               </marquee>
            </p>
         </div>
      </div>
      <div class="container footer">
         <?php include 'footer.php'; ?>
      </div>
      <style>
         #exam-header {
            border: 2px solid;
            border-bottom: none;
            border-color: black;
            color: white;
            background-color: #00ABA9;
         }
         #exam-boby {
            border: 2px solid;
            font-weight: bold;
            text-decoration: underline;
         }
         .examination {
            text-align: center;
            position: center;
            margin-left: 30%;
            margin-right: 30%;
         }
         #message-header {
            margin-top: 20px;
            border: 2px solid;
            border-color: black;
            color: white;
            background-color: #00ABA9;
         }

         #message-boby {
            border: 2px solid;
            border-top: none;
            padding: 10px;
            border-color: black;
            color: red;
            font-weight: bold;
         }

      </style>
   </body>
</html>