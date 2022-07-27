<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<body>


<?php include"top_nav.php";?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/s1.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/s2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/s3.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary">
                   Online Blood Bank Management System
                </h1>
            </div>
            		 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                        <a href="Donor_reg.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i> Need Blood</h4>
                    </div>
                    <div class="panel-body">
                        <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.  </p>
                        <a href="request_blood.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>Search Donor</h4>
                    </div>
                    <div class="panel-body">
                        <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</p>
                        <a href="Search_Donor.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
      <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Blood Donor Camps</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p4.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p6.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Why we need you to give blood ?</h2>
            </div>
            <div class="col-md-6">
              

			<ul>
				<li>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>

				<li>Many people would not be alive today if donors had not generously given their blood.</li>

				<li>We need over 2,000 blood donations every day to treat patients in need across Nepal. Which is why there’s always a need for people to give blood.</li>

				<li>Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>

				<li>Most people between the ages of 17-65 are able to give blood.</li>

				<li>Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood, so we can make sure we have enough blood in the future.</li>

			</ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/contact.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>If you have any problems or suggestions. For more details and any subject related queries..</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="contact.php"><i class="fa fa-phone"></i> Contact Us</a>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

        <hr>

        <!-- Footer -->
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

</body>

</html>
