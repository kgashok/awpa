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
         <div class="tab">
            <button class="tablinks">Student Assessment
            </button>
         </div>
         <div class="tabcontent" style="display:block; border-radius: 10px;">
            <div class="container">
               <div class="form-inline">
                  <table width="500px;">
                     <tr>
                        <td>
                           <label for="assess_period">Assess Period
                           </label>
                        </td>
                        <td>
                           <select class="form-group" style="width: 100%;" id="sel1">
                              <option>select
                              </option>
                              <option>1
                              </option>
                              <option>2
                              </option>
                              <option>3
                              </option>
                              <option>4
                              </option>
                           </select>
                        </td>
                        <td width="50px;">
                        </td>
                        <td>
                           <button class="btn btn-default" style="background-color: black; color: white; border-radius: 10px;" onclick="viewMenu()">Go
                           </button>
                        </td>
                     </tr>
                  </table>
               </div>
               <br>
               <br>
               <div class="container" id="entry_Menu" style="display: none;">
                  <div class="form-inline">
                     <div class="form-group">
                        <label for="university">University:
                        </label>
                        <select class="form-control" id="univ">
                           <option>Select
                           </option>
                           <option>AUC
                           </option>
                           <option>AUCBE
                           </option>
                           <option>AUT
                           </option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="reg">Regulation:
                        </label>
                        <select class="form-control" id="reg">
                           <option>Select
                           </option>
                           <option>2008
                           </option>
                           <option>2013
                           </option>
                           <option>2017
                           </option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="semester">Semester:
                        </label>
                        <select class="form-control" id="semester">
                           <option>Select
                           </option>
                           <option>1st Semester
                           </option>
                           <option>2nd Semester
                           </option>
                           <option>3rd Semester
                           </option>
                           <option>4th Semester
                           </option>
                           <option>5th Semester
                           </option>
                           <option>6th Semester
                           </option>
                           <option>7th Semester
                           </option>
                           <option>8th Semester
                           </option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="period">Period:
                        </label>
                        <select class="form-control" id="period">
                           <option>Select
                           </option>
                           <option>1st
                           </option>
                           <option>2nd
                           </option>
                           <option>3rd
                           </option>
                           <option>4th
                           </option>
                        </select>
                     </div>
                     <div class="container">
                        <br>
                        <div class="form-inline">
                           <label for="Branch">Branch:
                           </label>
                           <select class="form-control" id="branch" style="width: 80%;">
                              <option>Select
                              </option>
                              <option value="B.E CVL">103 - B.E. Civil Engineering
                              </option>
                              <option value="B.E CSE">104 - B.E. Computer Science and Engineering
                              </option>
                              <option value="B.E EEE">105 - B.E. Electrical and Electronics Engineering
                              </option>
                              <option value="B.E ECE">106 - B.E. Electronics and Communication Engineering
                              </option>
                              <option value="B.E MEC">114 - B.E. Mechanical Engineering
                              </option>
                              <option value="B.E IT">205 - B.Tech. Information Technology
                              </option>
                           </select>
                        </div>
                        <br>
                        <div class="form-inline">
                           <label for="sub" >Subject:
                           </label>
                           <select class="form-control" id="subject" style="width: 80%;">
                              <option>Select
                              </option>
                              <option>IT6006 - Data Analtyics
                              </option>
                              <option>IT6801 - Serivce oriented Architecture
                              </option>
                              <option>CS6701 - Cryptography and Network Security
                              </option>
                              <option>CS6702 - Graph Theory and Application
                              </option>
                              <option>CS6703 - Grid and Cloud Computing
                              </option>
                              <option>CS6704 - Resource Management Techniques
                              </option>
                              <option>EC6701 - RF and Microwave Engineering
                              </option>
                              <option>EC6004 - Satellite Communication
                              </option>
                              <option>EC6702 - Optical Communication and Networks
                              </option>
                              <option>EC6703 - Embedded and Real Time Systems
                              </option>
                              <option>EC6016 - Opto Electronic Devices
                              </option>
                              <option>EC6009 - Advanced Computer Architecture
                              </option>
                           </select>
                        </div>
                     </div>
                     <div>
                        <br>
                        <button class="btn btn-default" style="position: absolute; right: 200px; background-color: black; color: white; border-radius: 10px;"><A href="Reports\7117_Architecture.pdf" TARGET="_blank"_>Save</A>
                        </button>
                        <br>
                        <br>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container-fluid" id="studentList">
            </div>
         </div>
      </div>
      <div class="container footer">
         <?php include 'footer.php'; ?>
      </div>
      <script>
         function viewMenu() {
           var x = document.getElementById("entry_Menu");
           if (x.style.display === "none") {
             x.style.display = "block";
           }
           else {
             x.style.display = "none";
           }
         }
      </script>
   </body>
</html>