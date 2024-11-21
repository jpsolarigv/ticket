
 

/*
$(document).ready(function () 
{
  // Inicializa la tabla con DataTables
  $('#lista').DataTable
  ({
    "autoWidth": true,  
    "language": 
    {
      "sProcessing": "Procesando...",
      "sLengthMenu": "Mostrar _MENU_ registros",
      "sZeroRecords": "No se encontraron resultados",
      "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 a 0 de 0 registros",
      "sInfoFiltered": "(filtrado de _MAX_ registros totales)",
      "sSearch": "Buscar:",
      "oPaginate": 
      {
        "sFirst": "Primero",
        "sPrevious": "Anterior",
        "sNext": "Siguiente",
        "sLast": "Último"
      }
    },
    dom: 'Bfrtip',
    buttons: [  ]
  });

   // Configurar el botón externo
   $('#exportPdfBtn').on('click', function () {
    // Llamar al botón de exportación PDF interno
    table.button(0).trigger();
  });


});


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

*/
