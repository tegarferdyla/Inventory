 <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href=""
        target="_blank">PT. Tegar Digital Solution </a>, All rights reserved. </span>
    </p>
  </footer>
 <!-- BEGIN VENDOR JS-->
  <script src="<?php echo base_url('app-assets/vendors/js/vendors.min.js') ?>" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?php echo base_url('app-assets/vendors/js/charts/chart.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/vendors/js/tables/datatable/datatables.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/vendors/js/extensions/sweetalert.min.js') ?>" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="<?php echo base_url('app-assets/js/core/app-menu.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/core/app.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/scripts/customizer.js') ?>" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?php echo base_url('app-assets/js/scripts/charts/chartjs/pie-doughnut/pie.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js') ?>"
  type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut.js') ?>"
  type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js') ?>"
  type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/scripts/tables/datatables/datatable-basic.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('app-assets/js/scripts/extensions/sweet-alerts.js') ?>" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
  <script>
   function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10<br>
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
  </script>
</body>
</html>