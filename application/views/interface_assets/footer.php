    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
	$('#create_station_profile #country').val($("#dxcc_select option:selected").text());
	$("#create_station_profile #dxcc_select" ).change(function() {
	  $('#country').val($("#dxcc_select option:selected").text());
	});
});
</script>


<?php if ($this->uri->segment(1) == "radio") { ?>
<!-- If this is the admin/radio page run the JS -->
<script type="text/javascript">
    $(document).ready(function(){
        setInterval(function() {
            // Get Mode
            $.get('radio/status/', function(result) {
                    //$('.status').append(result);
                    $('.status').html(result);
            });
        }, 1000);
 });
</script>
<?php } ?>

  </body>
</html>