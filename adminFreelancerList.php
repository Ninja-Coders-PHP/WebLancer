<html>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" type="text/css" href="./css/global.css">
   <link rel="stylesheet" type="text/css" href="./css/adminFreelancerList.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <body>
      <?php include "header.php";?>
      <div class="container">
         <div class="card-header">
            <h2>Freelancers List</h2>
         </div>
         <div class="row">
             <div class="profile-pic col-md-6">
                <img src="./images/profile.png" alt="profile">
             </div>
             <div class="freelancer-details col-md-6">
               <h3><a href="#">Jake Perralta</a></h3>
               <h4>SKILLS</h4>
               <p>Web Developer</p>
               <p>UI/UX designer</p>
               <p>Wordpress Developer</p>
               <p>Database Developer</p>
               <h4>EXPERIENCE</h4>
               <p>2 year</p>
             </div>
            
         </div>
         <div class="row pt-2 border-b-1">
         <div class="col-md-6">
            <ul class="list-inline list-unstyled">
               <li class="list-inline-item">
                  <p>Approve?</p>
               </li>
               <li class="list-inline-item"><button type="button" class="btn btn-outline-success">Yes</button> </li>
               <li class="list-inline-item"><button type="button" class="btn btn-outline-danger">No</button> </li>
            </ul>
         </div>
      </div>
         <div class="row">
            <div class="profile-pic col-md-6">
                <img src="./images/profile.png" alt="profile">
             </div>
            <div class="freelancer-details col-md-6">
               <h3><a href="#">Amy Santiago</a></h3>
               <h4>SKILLS</h4>
               <p>Web Developer</p>
               <p>UX designer</p>
               <p>Wordpress Developer</p>
               <h4>EXPERIENCE</h4>
               <p>4 year</p>
            </div>
         </div>
         <div class="row pt-2 border-b-1">
         <div class="col-md-6">
            <ul class="list-inline list-unstyled">
               <li class="list-inline-item">
                  <p>Approve?</p>
               </li>
               <li class="list-inline-item"><button type="button" class="btn btn-outline-success">Yes</button> </li>
               <li class="list-inline-item"><button type="button" class="btn btn-outline-danger">No</button> </li>
            </ul>
         </div>
      </div>
      </div>
      <?php include "footer.php";?>
   </body>
</html>