<?php
include ('includes/header.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Open University</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="StilizimiCss.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="jquery-1.11.2.min.js"></script>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>

<script>

    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 210 || document.documentElement.scrollTop > 210) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    };

</script>
<?php
include ('includes/nav.php')
?>

<figure id="uni1">
    <a href="universiteti.jpg" >
        <img src="foto/universiteti.jpg" alt="Fotografia e Objektit universitar" height="100%" width="100%"/>
    </a>
</figure>
<hr size="10" color="black" style="margin:0 20px 0 20px;">
<section id="foto4" >
    <table class="table4foto" cellpadding="30px" cellspacing="5px">
        <tr>

            <figure>
                <td>
                    <div class="wrapper">
                        <img  class="fotoborder" src="foto/prospectivestudents.jpg" height="130" width="200" alt="Photo Students">
                        <div class="overlay">
                            <div class="content">
                                <a href="">Read More</a>

                            </div>
                        </div>

                    </div>
                    <figcaption class="figc">Prospective Students</figcaption>
                </td>
                <td>
                    <div class="wrapper">
                        <img class="fotoborder" src="foto/currentstudents.jpg" height="130" width="200">
                        <div class="overlay">
                            <div class="content">
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <figcaption class="figc">Current Students</figcaption>

                </td>
                <td>
                    <div class="wrapper">
                        <img  class="fotoborder" src="foto/internationalstudents.jpg" height="130" width="200">
                        <div class="overlay">
                            <div class="content">
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <figcaption class="figc">International Students</figcaption>
                </td>
                <td>
                    <div class="wrapper">
                        <img class="fotoborder" src="foto/administration.jpg" height="130" width="200">
                        <div class="overlay">
                            <div class="content">
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <figcaption class="figc">Administration</figcaption>
                </td>
            </figure>
        </tr>
    </table>

</section>
<hr size="10" color="#e2e2e2" style="margin:0 20px 0 20px">
<section id="lajmet">
    <table  style="margin-left: 190px;" cellspacing="5px" cellpadding="5px">
        <tr >
            <td style="vertical-align: top;">
                <h4 class="title4">Make An Application</h4>
                <div class="wrapper">
                    <img class="fotoborder" src="foto/application.jpg" width="200" height="80" alt="Photo">
                    <div class="overlay">
                        <div class="content">
                            <a href="">Click Here</a>

                        </div>
                    </div>
                </div>
            </td>
            <td style="vertical-align: top ;align-items: center;" >
                <h4 class="title4">Latest News & Events</h4>

                <img class="fotoborder" src="foto/event1.png" width="125" height="125" alt="Photo">

            </td>
            <td style="vertical-align: top;">

                <h4 class="h4text">Sentumquisque morbi dui congue</h4><br>
                <p>Morbitincidunt maurisque eros molest nunc<br> anteget sed vel lacus mus semper. Anterd <br>umnullam interdum eros dui urna consequam<br> ac nisl nullam ligula vestassa.<br> Condimentumfelis et amet tellent quisquet.</p>

            </td>
            <td rowspan="0" style="vertical-align: top; ">
                <h4 class="title4">Take The Virtual Tour</h4>
                <video class="fotoborder" controls="controls" width="209" height="248" >
                    <source src="foto/uvideo.mp4" type="video/mp4">
                </video>
                <p style="padding-top: 15px">For the other video and images of<br> the university,its grounds and <br>facilties pleas click here</p>

            </td>
        </tr>
        <tr>
            <td style="vertical-align: top;">
                <h4 class="title4">Order A Prospectus</h4>
                <div class="wrapper">
                    <img class="fotoborder" src="foto/prospectus.jpg" width="200" height="80" alt="Photo">
                    <div class="overlay">
                        <div class="content">
                            <a href="">Click Here</a>
                        </div>
                    </div>
                </div>
            </td>
            <td width="180px" style="vertical-align:center; padding-right: 10px">

                <img class="fotoborder" src="foto/event2.jpg" width="125" height="125" alt="Photo">

            </td>

            <td>

                <h4 class="h4text">Sentumquisque morbi dui congue</h4><br>
                <p class="test">Morbitincidunt maurisque eros molest nunc<br> anteget sed vel lacus mus semper. Anterd <br>umnullam interdum eros dui urna consequam<br> ac nisl nullam ligula vestassa.<br> Condimentumfelis et amet tellent quisquet.</p>

            </td>
        </tr>
        <tr>
            <td>
                <h4 class="title4" >Fees & Funding</h4>
                <div class="wrapper">
                    <img class="fotoborder" src="foto/fees.jpg" width="200" height="80" alt="Photo">
                    <div class="overlay">
                        <div class="content">
                            <a href="">Click Here</a>
                        </div>
                    </div>
                </div>
            </td>
            <td colspan="2" style="text-align: center;">
                <p style="color: #660000;">Click here to view all of the latest news and events»</p>
            </td>
        </tr>
    </table>
    <script>
        function getVote(int) {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("poll").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","poll_vote.php?vote="+int,true);
            xmlhttp.send();
        }
    </script>
    <div id="poll" align="center">
        <h2>Cilin prej drejtimeve ju pelqen me shume ?</h2>
        <form>
            FIEK:
            <input type="radio" name="vote" value="0" onclick="getVote(this.value)">
            <br>FIM:
            <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
            <br>FNA:
            <input type="radio" name="vote" value="2" onclick="getVote(this.value)">
        </form>
    </div>
</section>
<hr color="#e2e2e2" size="2" style="margin: 0 20px 0 20px">

<section id="Secfund" style="margin: 0 20px 0 20px ;padding-top: 5px;">
    <h4 style="margin-left: 15px;" class="title4" >Quickly Find What You Are Looking For</h4>
    <hr color="#e2e2e2" size="1" style="margin: 0 15px 0 15px;">
    <table  cellspacing="15px">
        <td  ><pre>
<a class="linkat"href="#">» Visiting the University</a>
<a class="linkat"href="#">» Maps and Directions</a>
<a class="linkat"href="#">» Undergraduate Courses</a>
<a class="linkat"href="#">» Graduate Courses</a>
<a class="linkat"href="#">» Postgraduate Research</a>
<a class="linkat"href="#">» Postgraduate Taught</a>
<a class="linkat"href="#">» International Students</a>
<a class="linkat"href="#">» Lifelong Learning</a>
<a class="linkat"href="#">» Graduate Health Services</a>
<a class="linkat"href="#">» Graduate Housing</a>
<a class="linkat"href="#">» Graduate Programs</a>
<a class="linkat"href="#">» Graduate Student Association</a>
</pre>
        </td>
        <td>
          <pre>
<a class="linkat" href="#">» Academic Advisory</a>
<a class="linkat" href="#">» Academic Assistance</a>
<a class="linkat" href="#">» Academic Calendars</a>
<a class="linkat" href="#">» Academics Office</a>
<a class="linkat" href="#">» Administration</a>
<a class="linkat" href="#">» Adult Learners</a>
<a class="linkat" href="#">» Alumni Chapters</a>
<a class="linkat" href="#">» Alumni Events</a>
<a class="linkat" href="#">» International Students</a>
<a class="linkat" href="#">» Intramural Sports</a>
<a class="linkat" href="#">» Language Resources</a>
<a class="linkat" href="#">» Maps and Directions</a>
</pre>
        </td>
        <td>
         <pre>
<a class="linkat" href="#">» Athletics</a>
<a class="linkat" href="#">» Campus Life At a Glance</a>
<a class="linkat" href="#">» Campus Recreation</a>
<a class="linkat" href="#">» Campus Safety & Security</a>
<a class="linkat" href="#">» Class Schedules</a>
<a class="linkat" href="#">» Counselling Center</a>
<a class="linkat" href="#">» Course Descriptions & Catalogue</a>
<a class="linkat" href="#">» Department Directory</a>
<a class="linkat" href="#">» Residential Colleges</a>
<a class="linkat" href="#">» Schools and Colleges</a>
<a class="linkat" href="#">» Student Activities</a>
<a class="linkat" href="#">» Student Affairs</a></pre>
        </td>
        <td>
         <pre>
<a class="linkat" href="#">» Departments & Programs</a>
<a class="linkat" href="#">» Fellowships</a>
<a class="linkat" href="#">» Finals Schedules</a>
<a class="linkat" href="#">» Financial Aid</a>
<a class="linkat" href="#">» Fitness and Recreation Facilities</a>
<a class="linkat" href="#">» Global Learning</a>
<a class="linkat" href="#">» Graduate</a>
<a class="linkat" href="#">» Graduate Admissions</a>
<a class="linkat" href="#">» Student Research</a>
<a class="linkat" href="#">» Students with Disabilities</a>
<a class="linkat" href="#">» Transfer Students</a>
<a class="linkat" href="#">» Undergraduate Admissions</a>
         </pre>
        </td>

    </table>
</section>

<?php include('includes\footer.php')?>

</body>
</html>