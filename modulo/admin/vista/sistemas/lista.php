<!-- ### PAGE-BODY ### -->
<div class="page-body">

    <!-- Botones fuera de la tabla -->
  
    
    
    
    <button id="columnVisibilityBtn" class="btn-export">Visibilidad de Columnas</button>



    <div class="container-xl d-flex flex-column justify-content-center">
           
        

    <div class="col-12">
    <div class="card">
        <div class="table-responsive">
         
   
    <table id="example" class="display table-vcenter" style="width:80%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Posición</th>
                <th>Oficina</th>
                <th>Edad</th>
                <th>Inicio</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan Pérez</td>
                <td>Gerente</td>
                <td>Lima</td>
                <td>45</td>
                <td>2010/10/15</td>
                <td>$120,000</td>
            </tr>
            <tr>
                <td>Ana Gómez</td>
                <td>Analista</td>
                <td>Madrid</td>
                <td>35</td>
                <td>2015/03/25</td>
                <td>$80,000</td>
            </tr>
        </tbody>
    </table>

    </div>
    </div>
  </div>

  </div>
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