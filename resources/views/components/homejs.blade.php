@jquery
@toastr_js
@toastr_render
<script src="../homepage/js/jquery.js"></script>
<script src="../homepage/js/boot.min.js"></script>
<script src="../homepage/js/waypoints.min.js"></script>
<script src="../homepage/js/counterup.min.js"></script>
<script src="../homepage/js/nouislider.js"></script>
<script src="../homepage/js/splide.min.js"></script>
<script src="../homepage/js/lazysizes.min.js"></script>
<script src="../homepage/js/ls.bgset.min.js"></script>
<script src="../homepage/js/tab.js"></script>
<script src="../homepage/js/img-zoom.js"></script>
<script src="../homepage/js/gsap-core.js"></script>
<script src="../homepage/js/scroll-trigger.js"></script>
<script src="../homepage/js/select2.min.js"></script>
<script src="../homepage/js/addIndicators.js"></script>
<script src="../homepage/js/animation.gsap.js"></script>
<script src="../homepage/js/brator-script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
    });
</script>
</body>

</html>