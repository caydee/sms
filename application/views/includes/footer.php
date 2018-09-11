 <!-- footer content -->
        <footer>
          <div class="pull-right">
           Created by <a href="https://www.caydeesoft.org" style="color:rgba(0,0,255,0.6);text-shadow:rgb(75,75,75,0.3) 1px 1px 1px; font-weight: bold;">CAYDEESOFT SOLUTIONS LTD</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url("assets/vendors/jquery/dist/jquery.min.js"); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url("assets/vendors/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url("assets/js/custom.min.js"); ?>"></script>
	 <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
   <script>
     $(document).ready(function() {
        $('.summernote').summernote({
          height:200,
           focus: true  
        });
      });
     
   </script>
  </body>
</html>
