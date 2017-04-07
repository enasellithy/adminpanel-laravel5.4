
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{URL::to('public/front')}}/ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
    <script src="{{secure_asset('public/front')}}/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/counter-up/jquery.counterup.min.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/isotope/isotope.min.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/isotope/jquery.fancybox.pack.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/isotope/isotope-triger.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/countdown/jquery.syotimer.js"></script>
    <script src="{{URL::to('public/front')}}/plugins/smoothscroll/SmoothScroll.js"></script>
    <script src="{{URL::to('public/front')}}/options/optionswitcher.js"></script>
    <script src="{{URL::to('public/front')}}/js/custom.js"></script>



	@yield('js')
  </body>
</html>