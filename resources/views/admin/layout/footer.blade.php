</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
</script>
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/owl.min.js') }}"></script>
<script src="{{ asset('assets/js/paroller.js') }}"></script>
<script src="{{ asset('assets/js/chart.js') }}"></script>
<script src="{{ asset('assets/js/circle-progress.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
{{-- datatable --}}

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

<script>
    $('.progress1.circle').circleProgress({
        value: .75,
        fill: {
            gradient: ['#00cca2', '#00cca2']
        },
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
    });
    $('.progress2.circle').circleProgress({
        value: .90,
        fill: {
            gradient: ['#8d16e8', '#8d16e8']
        },
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(90 * progress) + '<i>%</i>');
    });
    $('.progress3.circle').circleProgress({
        value: .85,
        fill: {
            gradient: ['#ef764c', '#ef764c']
        },
    }).on('circle-animation-progress', function(event, progress) {
        $(this).find('strong').html(Math.round(85 * progress) + '<i>%</i>');
    });
</script>

</body>

</html>
