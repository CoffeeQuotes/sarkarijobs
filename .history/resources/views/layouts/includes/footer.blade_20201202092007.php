<div id='ss_menu'>
    <div> <i class="fa fa-facebook-official"></i> </div>
    <div> <i class="fa fa-twitter"></i> </div>
    <div> <i class="fa fa-linkedin"></i> </div>
    <div> <i class="fa fa-google-plus"></i> </div>
    <div class='menu'>
      <div class='share' id='ss_toggle' data-rot='180'>
        <div class='circle'></div>
        <div class='bar'></div>
      </div>
    </div>
  </div>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script>
    $(document).ready(function(ev) {
      var toggle = $('#ss_toggle');
      var menu = $('#ss_menu');
      var rot;

      $('#ss_toggle').on('click', function(ev) {
        rot = parseInt($(this).data('rot')) - 180;
        menu.css('transform', 'rotate(' + rot + 'deg)');
        menu.css('webkitTransform', 'rotate(' + rot + 'deg)');
        if ((rot / 180) % 2 == 0) {
          //Moving in
          toggle.parent().addClass('ss_active');
          toggle.addClass('close');
        } else {
          //Moving Out
          toggle.parent().removeClass('ss_active');
          toggle.removeClass('close');
        }
        $(this).data('rot', rot);
      });

      menu.on('transitionend webkitTransitionEnd oTransitionEnd', function() {
        if ((rot / 180) % 2 == 0) {
          $('#ss_menu div i').addClass('ss_animate');
        } else {
          $('#ss_menu div i').removeClass('ss_animate');
        }
      });

    });
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<p class="text-center pt-5">
    <strong class="bg-warning text-danger p-1">Disclaimer</strong> : The Examination Results / Marks published in this Website is only for the immediate Information to the Examinees an does not to be a constitute to be a Legal Document. While all efforts have been made to make the Information available on this Website as Authentic as possible. We are not responsible for any Inadvertent Error that may have crept in the Examination Results / Marks being published in this Website, not for any loss to anybody or anything caused by any Shortcoming, Defect or Inaccuracy of the Information on this Website.
</p>
<div class="container-fluid">
    <footer class="py-3">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-column flex-md-row border-bottom pb-2">
          <h5 class="ml-0 ml-md-3 mb-0"><a href="#">Sarkari Results</a></h5>
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Enterprise</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
            <li class="nav-item"><a class="nav-link" href="#">ICO</a></li>
          </ul>
        </div>
        <div class="d-flex justify-content-center align-items-center justify-content-md-between flex-column flex-md-row mx-3 mt-3">
          <div class="d-flex"><a href="#"><img class="mr-3" src="placeholder/icons/twitter.svg" alt=""></a><a href="#"><img class="mr-3" src="placeholder/icons/facebook-f.svg" alt=""></a><a href="#"><img src="placeholder/icons/instagram.svg" alt=""></a></div>
          <div class="d-flex mt-3 mt-md-0">
            <p class="mb-0 small text-muted">&copy; 2020 Sarkari Results India. All right reserved.</p>
          </div>
        </div>
      </div>
    </footer>

</body>
</html>
