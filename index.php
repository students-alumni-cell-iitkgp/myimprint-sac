
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Senior Class Gift 2018</title>

  <!-- CSS  -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/animate.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<style type="text/css">
body{overflow-x: hidden;}
</style>

<body>
  <div class="navbar-fixed">
    <nav class="white" role="navigation">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo left"style="padding-left: 10px; padding-top: 5px;"><img src="logo.png" width="160px"></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect waves-light item animated" href="#what">WHAT</a></li>
          <li><a class="waves-effect waves-light item animated" href="#why">WHY</a></li>
          <li><a class="waves-effect waves-light item animated" href="#options">OPTIONS</a></li>
          <li><a class="waves-effect waves-light item animated" href="#how">HOW TO</a></li>
          <!--<li><a class="waves-effect waves-light item animated" href="#committee">THE COMMITTEE</a></li>-->
          <li><a class="waves-effect waves-light item animated" href="#recognition">RECOGNITION</a></li>
          <li><a class="waves-effect waves-light item animated" href="#classgift">PREVIOUS CLASS GIFTS</a></li>
          <li><a class="waves-effect waves-light item animated" href="#contact">CONTACT</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#what">WHAT</a></li>
          <li><a href="#why">WHY</a></li>
          <li><a href="#options">OPTIONS</a></li>
          <li><a href="#how">HOW TO</a></li>
          <!--<li><a href="#committee">THE COMMITTEE</a></li>-->
          <li><a href="#recognition">RECOGNITION</a></li>
          <li><a href="#classgift">PREVIOUS CLASS GIFTS</a></li>
          <li><a class="waves-effect waves-light"href="#contact">CONTACT</a></li>

        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
  <div class="row ac-summit">
    <img src="my1.jpg" style="max-height: 95vh; width: 100vw; " >
  </div>
  <!-- <div id="index-banner" class="parallax-container">
    <div class="parallax"><img src="My Imprint.jpg"></div>
  </div> -->
  <div class="container scrollspy"id="what">
    <p class="menuheading animated">What is Senior Class Gift 2018 ?</p> 
    <p class="text">
     IIT-KGP has a long and historic legacy of Alumni Giving Back which has existed in different forms. The Graduating Class Gift is yet another chapter to be added in KGP alumni legacy initiated under My Imprint Programme.

     It is a class-based effort directed towards raising unrestricted funds from students of graduating batch. A part of the collected fund is used for Senior Class Gift while the rest goes towards Endowment. The Endowment would again be utilized for students' services only. It is an opportunity for graduating students to take their first step in being soon-to-be alumni by making their Graduating Class Gift, the gift which impacts student life in the KGP campus. This challenge offers seniors the chance not only to make a gift, but also to leave behind their imprint.
   </p>
 </div>
 <div class="fixed-action-btn" style="bottom: 295px; right: 0px;">
  <a href="https://erp.iitkgp.ernet.in" class="btn btn-large red modal-trigger animated fadeInRight" href="#modal1" style="padding-left: 40px;padding-right: 40px">VOTE NOW</a>
</div>
<form method="POST" action="vote.php">
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="menuheading animated">Enter Your Details</h4>
      <!--FORM-->
      <div class="row">

        <div class="input-field col s12 l6 m12 offset-l3 ">
          <input name="rollno" autofocus placeholder="Roll Number" type="text" required>
          <label for="rollno">Roll Number ( 14THXXXXX )</label>
        </div> </div> 
        <div class="row">
          <div class="input-field col s12 l6 m12 offset-l3 ">
            <input name="dob" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="Date of Birth" type="text" required>
            <label for="dob">Date of Birth ( dd/mm/yyyy)</label>
          </div>
          <div class="row">
            <div class="col s12 l6 m12 offset-l3">
              <button type="submit" id="submit"name="submit" class="waves-effect waves-light btn"required >SUBMIT</button>
            </div></div>
          </div>

          <!--END FORM--> 
        </div>
      </div>
    </form>
    <div class="fixed-action-btn" style="bottom:225px; right: 0px;">
      <a href="https://erp.iitkgp.ernet.in" class="btn btn-large red animated fadeInRight">DONATE NOW
      </a>
    </div>

    <div class="fixed-action-btn" style="bottom: 153px; right: 0px;">
      <a href="#modal2" class="btn btn-large red modal-trigger animated fadeInRight" >LIST OF DONORS</a>
    </div>
    <div id="modal2" class="modal">
     <div class="modal-content">
      <h4 class="menuheading animated">List of All Donors</h4>
      <?php 
     // include 'list.php';      
      ?>
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s2"><a class="active" href="#test1">2012</a></li>
            <li class="tab col s2"><a href="#test2">2013</a></li>
            <li class="tab col s2 "><a href="#test3">2014</a></li>
            <li class="tab col s2"><a href="#test4">2015</a></li>
            <li class="tab col s2"><a href="#test5">2016</a></li>
          </ul>
        </div>
        <div id="test1" class="col s12">
          <table class="responsive-table centered stripped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Roll No</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              foreach ($arr_2012 as $a) {

                echo '<tr><td>'.$a['Roll No'].'</td><td>'.$a['FIRST NAME'].$a['MIDDLE NAME'].$a['LAST NAME'].'</td></tr>';
              }
              ?>

            </tbody>
          </table>
        </div>
        <div id="test2" class="col s12">
          <table class="responsive-table centered stripped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Roll No</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              foreach ($arr_2013 as $a) {

                echo '<tr><td>'.$a['Rollno'].'</td><td>'.$a['Name'].'</td></tr>';
              }
              ?>

            </tbody>
          </table>
        </div>
        <div id="test3" class="col s12">
          <table class="responsive-table centered stripped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Roll No</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              foreach ($arr_2014 as $a) {

                echo '<tr><td>'.$a['ROLL NO'].'</td><td>'.$a['FULL NAME'].'</td></tr>';
              }
              ?>

            </tbody>
          </table>
        </div>
        <div id="test4" class="col s12">
          <table class="responsive-table centered stripped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Roll No</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              foreach ($arr_2015 as $a) {

               echo '<tr><td>'.$a['Rollno'].'</td><td>'.$a['Name'].'</td></tr>';
              }
              ?>

            </tbody>
          </table>
        </div>
        <div id="test5" class="col s12">
          <table class="responsive-table centered stripped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Roll No</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($arr_2016 as $a) {

                echo '<tr><td>'.$a['Roll Number'].'</td><td>'.$a['Full Name'].'</td></tr>';
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="insti2.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class="scrollspy"id="why">
    <p class="menuheading animated">Why would you love to give ?</p> 
    <div class="row">
      <div class="col s12 l4 m4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/brand.jpg" style="height:231px">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Brand value of IIT-KGP<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Brand value of IIT-KGP<i class="material-icons right">close</i></span>
            <p class="smalltext">Your gift would help the Institute in progressing towards being in World's top 20 technological Institute [IIT-KGP VISION 2020]. Institute Ranking increases the value of degrees and so the brand value of campus students as well as alumni across the globe.</p>
          </div>
        </div>
      </div>
      <div class="col s12 l4 m4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/endowment.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Importance of Endowment<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Importance of Endowment<i class="material-icons right">close</i></span>
            <p class="smalltext">Institute's alumni giving rate is an important measure which is used to rank and evaluate IIT-KGP and there is an 80% correlation between World's Top Ranking Institution and their Endowment size. </p>
          </div>
        </div>
      </div>
      <div class="col s12 l4 m4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="insti.jpg"style="height:231px">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Alma Mater that changed lives<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Alma Mater that changed your lives forever<i class="material-icons right">close</i></span>
            <p class="smalltext">IIT-KGP has provided you with outstanding, academic resources, lasting friendships and countless memories over the years you spent at KGP campus. Now it is your chance to pay tribute to your Alma Mater that changed your lives forever. Senior Class Gift provides you with the 1st chance to give back to Alma Mater to enrich the students' experience of future generation. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col s12 l12 m12">
          <p class="menuheading animated">Why your gift matters, at a big institute like IIT Kharagpur?</p> 
          <p class="text">Many of us don't realize that government fund can never cover all of the IIT-KGP experiences. If IIT-KGP wants to start a new pre-professional program, support an innovative student project, or expand student life opportunities, philanthropy makes it possible. </p>

        </div>
      </div>
    </div>
    <div class="parallax-container valign-wrapper">
    <!--<div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>-->
    <div class="parallax"><img src="insti3.jpg" alt="Unsplashed background img 3"></div>
  </div>
  <div class="container scrollspy" id="options">
    <p class="menuheading animated">OPTIONS OF SENIOR CLASS GIFT 2018 </p>
    <p class="text">

      As the My Imprint Program says, "By the students, For the Students", the following 9 options have been formulated by My Imprint Class Gift Committee, comprising of students only. Please click on The Committee tab to see the names of committee members.<br>

    The 9 options have been categorized in 3 slabs, according to the sign-ups raised by the Class of 2015 at the end of campaigning. You may make your choice of Class Gift in every slab. So, vote for 3 class gifts, one in each slab.</p>
    <p class="menuheading animated">SLAB 1 (300 - 450 Signups)</p>
    <div class="row">
     <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/green gym.jpg" style="height:192px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Green Gym</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Green Gym<i class="material-icons right">close</i></span>
          <p class="smalltext">Will enable students to go to gym anytime and without any fees and will provide the freshness of an open environment.
            Proposed area for installation : The empty space near swimming pool.

          </p>
        </div>
      </div>
    </div>
    <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/Community Radio.jpg" style="height:192px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Community Radio</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Community Radio<i class="material-icons right">close</i></span>
          <p class="smalltext">It will aid in <b>broadcasting</b> of content that is popular and relevant to KGP, thus helping the local population and students alike.
</p>
        </div>
      </div>
    </div>
    <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/BC Roy Upgradation.jpg" style="height:192px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">BC Roy Hospital</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Upgradation of BC Roy Hospital<i class="material-icons right">close</i></span>
          <p class="smalltext">Improvement and digitalization of B.C. Roy Hospital beneficial to students and also the other residents of IIT KGP.
</p>
        </div>
      </div>
    </div>
  </div>
  <p class="menuheading animated">SLAB 2 (450 - 600 Signups)</p>
  <div class="row">
    <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/modular room.jpg" height="217px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Modular Rooms</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Modular Rooms for Students<i class="material-icons right">close</i></span>
          <p class="smalltext">Modular Rooms can be used for group discussions, projects and group activities by students. Probable location for these rooms could be behind the Counselling Centre.</p>
        </div>
      </div>
    </div>
    <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/game.jpg" height="217px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Game Room</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Game Room<i class="material-icons right">close</i></span>
          <p class="smalltext">The vacant area next to IOSYS can be used for the construction of an indoor Games’ room that will have facilities like TT tables, foosball and billiards.
</p>
        </div>
      </div>
    </div>
    <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/AV Upgradation.jpg" height="217px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">AV Upgradation</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">AV Upgradation of TOAT<i class="material-icons right">close</i></span>
          <p class="smalltext">The AV Upgradation of TOAT will make it self sufficient and popular movies or Sports matches can be broadcasted there for all the students.</p>
        </div>
      </div>
    </div>
  </div>
  <p class="menuheading animated">SLAB 3 (600+ Signups)</p>
  <div class="row">
    <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/Counselling Centre.jpg" style="height: 193px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Counselling Centre</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Renovation of Counselling Centre<i class="material-icons right">close</i></span>
          <p class="smalltext">Renovation of the counselling centre for giving better environment and good ears to listen to the student community of KGP.</p>
        </div>
      </div>
    </div>
    <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/modular courses.jpg" style="height: 193px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Modular Courses</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Modular Courses for UG/PG/RS Freshman<i class="material-icons right">close</i></span>
          <p class="smalltext">Modular Courses provided by British Council, IELTS can be made accessible to Freshmen for improving their communication and writing skills.</p>
        </div>
      </div>
    </div>
    <div class="col s12 l4 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/musical.jpg"style="height: 193px">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Music Recording Studio</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Music Recording Studio<i class="material-icons right">close</i></span>
          <p class="smalltext">It would be the most desirable gift for the students passionate for music. Also it can be used for Institute recording projects.
          It can be accommodated in the Gymkhana building.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="scrollspy" id='how'>
  <p class="menuheading animated">HOW TO</p><center>
    <ul class="collapsible popout">
      <li>
        <div class="collapsible-header active">HOW TO VOTE?</div>
        <div class=""><p class="text">Voting in different slabs can be either done through clicking on VOTE NOW button or through ERP. An ERP link would be developed on profiles of all graduating students to vote for their Senior Class Gift.</p></div>
      </li>
      <li>
        <div class="collapsible-header active" >HOW TO DONATE?</div>
        <div class=""><p class="text">Donation can be done by clicking on DONATE NOW buuton. Donations would be captured through ERP.
        An ERP link would be developed on profiles of all graduating students to donate their caution money.</p></div>
      </li>
    </ul></center>
  </div>
  
    <div class="scrollspy" id="recognition">
      <p class="menuheading animated">RECOGNITION</p>
      <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row right-align">
             <!-- <h5 class="light left" style="font-size:1.1rem">All Donors will be given Senior Class of 2016 T-shirts. </h5>-->
            </div>
            <div class="row left-align" style="margin-top:230px;">
              <!--<h5 class="light right"style="font-size:1.1rem">Alumni Card and Yearbook 2016 for all the Graduating Students. </h5>-->
            </div>
          </div>
        </div>
        <div class="parallax"><img src="recognition2.jpg" style="width: 100vw;"></div>
      </div>
    </div>
    <div class="scrollspy" id="classgift">
      <p class="menuheading animated">PREVIOUS CLASS GIFTS</p>
      <div class="row">
      <div class="col l3 m3 s12">
          <div class="card hoverable">
            <div class="card-image">
              <img src="img/cg17.jpg">
            </div>
            <div class="card-content">
             <span class="card-title">CLASS GIFT OF 2017</span>
             <p class="text" style="font-size: 100%;">90% of Class of 2017 voted for the gift in various categories and close to 450 students contributed their caution money.<br>
             Class of 2017 voted to gift Bus Stand at Strategic Location in the Campus.</p>
           </div>
         </div>
       </div>

        <div class="col l3 m3 s12">
          <div class="card hoverable">
            <div class="card-image">
              <img src="img/classgift2.jpg">
            </div>
            <div class="card-content">
             <span class="card-title">CLASS GIFT OF 2016</span>
             <p class="text" style="font-size: 100%; padding-bottom: 52px;">80% of Class of 2016 voted for the gift in various categories and close to 400 students contributed their caution money.<br>
             Class of 2015 voted to gift Campus Benches.</p>
           </div>
         </div>
       </div>

       <div class="col l3 m3 s12">
        <div class="card hoverable">
          <div class="card-image">
            <img src="img/classgift.jpg">
          </div>
          <div class="card-content">
           <span class="card-title">CLASS GIFT OF 2015</span>
           <p class="text" style="font-size: 100%; padding-bottom: 52px;">80% of Class of 2015 voted for the gift in various categories and close to 400 students contributed their caution money.<br>
           Class of 2015 voted to gift Campus Benches.</p>
         </div>
       </div>
     </div>

     <div class="col l3 m3 s12">
      <div class="card hoverable">
        <div class="card-image">
          <img src="img/2014.jpg">
        </div>
        <div class="card-content">
         <span class="card-title">CLASS GIFT OF 2014</span>
         <p class="text" style="font-size: 100%;">70% of Class of 2014 voted for the gift in various categories and close to 350 students contributed their caution money.<br>
         Class of 2014 voted to support International Participation of students.</p>
       </div>
     </div>
   </div>
 </div>
</div>
<div id="contact" class="scrollspy">
  <footer class="page-footer white"><center>
    <p class="menuheading animated">CONTACT</p>
    <p class="text" style="padding: 0px"> Office of Alumni Affairs and International Relations</p>
    <p class="smalltext">alumni@hijli.iitkgp.ernet.in<br>
    03222 281860</p>
    <p class="text" style="padding: 0px">Students' Alumni Cell General Secretaries</p>
    <p class="smalltext">Vishal Kumar Singh<br>
      vishalsingh08.iitkgp@gmail.com<br>
      +91 8769797343<br>

      Bharat Chandra<br>
      imbharat16@gmail.com<br>
    +91 9932544235 </p>
    <div class="footer-copyright">
      <p class="text black" style="padding-top: 5px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;height: 50px">&copy;Copyrights reserved 2018</p>

    </div></center>
  </footer>
</div>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script> 
  $(document).ready(function(){
    $(".item , .menuheading").hover(
      function () {
        $(this).addClass('pulse');
      }, 
      function () {
        $(this).removeClass('pulse');
      }
      );
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();

  });</script>

</body>
</html>
