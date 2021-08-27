<!-- jQuery -->
<script src="<?php echo assets_url('plugins','jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo assets_url('plugins','jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo assets_url('plugins','bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo assets_url('plugins','moment/moment.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo assets_url('plugins','overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo assets_url('dist','js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo assets_url('dist','js/demo.js'); ?>"></script>
<script src="<?php echo assets_url('js','CustomJs.js'); ?>"></script>
<script src="<?php echo assets_url('js','validation/formValidation.min.js'); ?>"></script>
<script src="<?php echo assets_url('plugins','sweetalert2/sweetalert2.min.js'); ?>"></script>
<script src="<?php echo assets_url('plugins','toastr/toastr.min.js'); ?>"></script>
<script type="text/javascript">	
$(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 1000
    });
});
</script>
<script>
  $(".pagination>li>a,.nav-link, .spinner_loader").on( "click", function() {
  //alert( $( this ).text() );
  $("#spinner").show();
});
</script>

  





