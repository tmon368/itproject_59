<!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020
              <a href="http://www.bootstrapdash.com/" target="_blank">WU DISCIPLANE</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url ('re/vendors/js/vendor.bundle.base.js');?> "></script>
  <script src="<?php echo base_url ('re/vendors/js/vendor.bundle.addons.js'); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url ('re/js/off-canvas.js');?>"></script>
  <script src="<?php echo base_url ('re/js/misc.js'); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url ('re/js/dashboard.js');?>"></script>
  <!-- End custom js for this page-->
 
  <script>
      $(document).ready(function() {
          $('#style_table').DataTable();
      } );

  </script>

</body>

</html>
