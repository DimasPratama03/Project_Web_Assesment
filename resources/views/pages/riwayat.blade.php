<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Hasil Tes</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h3 {
            text-align: center;
            color: #333333;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        .back-button a {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 20px;
        }

        .back-button a:hover {
            background-color: #0056b3;
        }

        @media screen and (max-width: 600px) {
            table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Riwayat Hasil Tes</h3>
        
        <div style="overflow-x: auto;">
            <table>
                <thead>
                    <tr>
                        <th>Tanggal Tes</th>
                        <th>Tanggal Tes Expired</th>
                        <th>Skor Introvert</th>
                        <th>Skor Ekstrovert</th>
                        <th>Personality</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                    <tr>
                        <td>{{ $result->date }}</td>
                        <td>{{ $result->date_expired }}</td>
                        <td>{{ $result->value_introvert }}</td>
                        <td>{{ $result->value_extrovert }}</td>
                        <td>{{ $result->personality }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="back-button">
            <a href="{{ route('back.dashboard') }}">Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
