{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendapatan</title>

    <link rel="stylesheet" href="{{ asset('/AdminLTE-2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>
    <h3 class="text-center">Laporan Pendapatan</h3>
    <h4 class="text-center">
        Tanggal {{ tanggal_indonesia($awal, false) }}
        s/d
        Tanggal {{ tanggal_indonesia($akhir, false) }}
    </h4>

   
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Tanggal</th>
                <th>Penjualan</th>
                <th>Pembelian</th>
                <th>Pengeluaran</th>
                <th>Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($data as  $row) --}}
                {{-- <tr> --}}
                   {{-- <td>{{$row['tanggal']}}}</td>
                    @foreach ($row as $col)
                    
                        <td>{{ $col }}</td>
                    @endforeach --}}
                    {{-- <td>hello</td> --}}
                {{-- </tr> --}}
            {{-- @endforeach --}}
        {{-- </tbody>
    </table>
</body>
</html> --}} 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan-Pendapatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center">Laporan Pendapatan</h3>
    <h4 class="text-center">
        Tanggal {{ tanggal_indonesia($awal, false) }}
        s/d
        Tanggal {{ tanggal_indonesia($akhir, false) }}
    </h4>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th style="border: 1px">Tanggal</th>
                <th style="border: 1px">Penjualan</th>
                <th style="border: 1px">Pembelian</th>
                {{-- <th style="border: 1px">Pengeluaran</th> --}}
                <th style="border: 1px">Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as  $row)
                <tr>
                    @foreach ($row as $col)
                    
                        <td>{{ $col }}</td>
                    @endforeach 
                 </tr> 
            @endforeach
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

