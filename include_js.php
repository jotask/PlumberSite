<link href="original/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="original/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--<link href="../original/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />-->
<link href="original/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--<link href="../original/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />-->

<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--<script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
<script type='text/javascript' src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>

<script type="text/javascript" src="js/bootstrap-slider.js"></script>

<script src="original/js/bootstrap.min.js"></script>
<script src="original/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="original/js/custom.js"></script>
<script src="original/js/nicescroll/jquery.nicescroll.min.js"></script>
<!--<script src="../original/js/icheck/icheck.min.js"></script>-->
<script src="original/js/datatables/jquery.dataTables.min.js"></script>
<script src="original/js/datatables/dataTables.bootstrap.js"></script>
<script src="original/js/datatables/dataTables.buttons.min.js"></script>
<script src="original/js/datatables/buttons.bootstrap.min.js"></script>
<!--<script src="../original/js/datatables/jszip.min.js"></script>-->
<!--<script src="../original/js/datatables/pdfmake.min.js"></script>-->
<!--<script src="../original/js/datatables/vfs_fonts.js"></script>-->
<script src="original/js/datatables/buttons.html5.min.js"></script>
<!--<script src="../original/js/datatables/buttons.print.min.js"></script>-->
<!--<script src="../original/js/datatables/dataTables.fixedHeader.min.js"></script>-->
<script src="original/js/datatables/dataTables.keyTable.min.js"></script>
<script src="original/js/datatables/dataTables.responsive.min.js"></script>
<script src="original/js/datatables/responsive.bootstrap.min.js"></script>
<!--<script src="../original/js/datatables/dataTables.scroller.min.js"></script>-->
<script src="original/js/pace/pace.min.js"></script>

<script src="original/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="original/js/custom.js"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<script type='text/javascript'>
    $(document).ready(function() {
        $('#datatable-responsive').DataTable({});
    });
</script>

<script type='text/javascript'>
    $('.slider').slider();

    $(document).ready(function() {
        function initialize() {
            var myLatlng = new google.maps.LatLng(52.412426, -4.08273);
            var mapOptions = {
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: myLatlng
            }

            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                title:"Plumber"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    });

    $(window).resize(function () {
        var h = $(window).height(),
            offsetTop = 250;
        $('#map-canvas').css('height', (h - offsetTop));
    }).resize();

</script>