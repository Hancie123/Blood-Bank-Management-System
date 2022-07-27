<footer>
  <div class=" container-fluid">
    <div class="row">
      <div class="col-sm-12" >
		<p align="center">Copyright &copy; 2022 AHN Blood Bank Management System Pvt.Ltd</p>
      </div><!-- col-sm-6 -->
    </div><!-- row -->
  </div><!-- content container -->
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {

	$(".DATES").datepicker({ 

dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: '1900:' + new Date().getFullYear()
 }).val();
	});
</script>
