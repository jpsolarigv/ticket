</div>     
<!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- DataTables -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <!-- Botones de DataTables -->
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <!-- PDFMake -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <!-- Exportación a Excel y CSV -->
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <!-- Librería JSZip para Excel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <!-- Impresión -->
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  <!-- ColVis -->
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
   
  <script>
        $(document).ready(function () {
            // Inicializar la tabla DataTables
            var table = $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        text: 'Exportar a PDF',
                        className: 'btn-pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Exportar a Excel',
                        className: 'btn-excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'Exportar a CSV',
                        className: 'btn-csv',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        text: 'Imprimir',
                        className: 'btn-print',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        text: 'Visibilidad de Columnas',
                        className: 'btn-colvis'
                    }
                ]
            });

            // Configurar botones externos
            $('#exportPdfBtn').on('click', function () {
                table.button('.buttons-pdf').trigger();
            });
            $('#exportExcelBtn').on('click', function () {
                table.button('.buttons-excel').trigger();
            });
            $('#exportCsvBtn').on('click', function () {
                table.button('.buttons-csv').trigger();
            });
            $('#printBtn').on('click', function () {
                table.button('.buttons-print').trigger();
            });
            $('#columnVisibilityBtn').on('click', function () {
                table.button('.buttons-colvis').trigger();
            });
        });
    </script>

  
</body>
</html>