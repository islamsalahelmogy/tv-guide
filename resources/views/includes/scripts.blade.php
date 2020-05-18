<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/dist/js/adminlte.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('assets/dist/js/demo.js')}}"></script>
<script src="{{ asset('assets/dist/js/pages/dashboard3.js') }}"></script>

<script>
    $(function () {
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "autoWidth": false,
      });
    });
  </script>

</body>
</html>
