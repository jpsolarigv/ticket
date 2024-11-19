
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


