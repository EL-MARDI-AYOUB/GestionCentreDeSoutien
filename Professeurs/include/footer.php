
        <!-- Sticky Footer -->
    <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © ILISI 2019</span>
      </div>
    </div>
    </footer>
    <script src="scripts/timetable.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="../Techno/vendor/jquery/jquery.min.js"></script>
  <script src="../Techno/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../Techno/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../Techno/vendor/chart.js/Chart.min.js"></script>
  <script src="../Techno/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../Techno/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../Techno/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../Techno/js/demo/datatables-demo.js"></script>
  <script src="../Techno/js/demo/chart-area-demo.js"></script>
  
  <script> $('.custom-file-input').on('change', function() { 
    let fileName = $(this).val().split('\\').pop(); 
    $(this).next('.custom-file-label').addClass("selected").html(fileName); 
  });</script>
  
</body>

</html>