<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perhitungan Rumus</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap DataTables CSS -->
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <style>
        body {
            background-color: rgb(227, 223, 223)
        }
        .table {
            border-color: black;
            color: black;
            border-width: 3px;
            margin-right: 5em;
        }
        .table th {
            border-color: black;
            color: black;
            border-width: 3px;
        }
        .table td {
            border-color: black;
            color: black;
            border-width: 3px;
        }
    </style>
    <!-- Panggil Fungsi -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('.table-paginate').dataTable();
        });
    </script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4">Kalkulator Future Value Investasi</h2>
                <form action="{{ route ('investasi.hitung') }}" method="POST">
                    @csrf                
                    <div class="form-group">
                        <label for="pv">Nilai Awal (PV):</label>
                        <input type="number" class="form-control" name="pv" id="pv" required>
                    </div>
                    <div class="form-group">
                        <label for="i">Tingkat Bunga (%):</label>
                        <input type="number" class="form-control" name="i" id="i" required>
                    </div>
                    <div class="form-group">
                        <label for="n">Jumlah Tahun:</label>
                        <input type="number" class="form-control" name="n" id="n" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Hitung</button>
                </form>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="data col-md-10 offset-md-1">
                        <h2 class="text-center mb-4">Data Investasi</h2>
                        <table class="table table-striped table-bordered table-paginate mx-5 mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nilai Awal (PV)</th>
                                    <th>Tingkat Bunga (%)</th>
                                    <th>Jumlah Tahun</th>
                                    <th>Future Value</th>
                                    <th>Tanggal Input</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($investasis as $investasi)
                                    <tr>
                                        <td>{{ $investasi->id }}</td>
                                        <td>{{ number_format($investasi->pv, 2) }}</td>
                                        <td>{{ $investasi->i }}%</td>
                                        <td>{{ $investasi->n }}</td>
                                        <td>{{ number_format($investasi->future_value, 2) }}</td>
                                        <td>{{ $investasi->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('.table-paginate').dataTable();
    });
</script>
</html>
