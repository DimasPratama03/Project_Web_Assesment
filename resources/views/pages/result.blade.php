<!DOCTYPE html>
<html>
<head>
    <title>Hasil Quiz</title>
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

        .quiz-info {
            text-align: center;
            color: #777777;
            margin-bottom: 20px;
        }

        canvas {
            margin-top: 20px;
        }

        /* Style untuk ART FACTORY */
        .art-factory {
            text-align: center;
            margin-top: 50px;
        }

        .art-factory h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .art-factory p {
            color: #777777;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .art-factory a {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 20px;
        }

        .art-factory a:hover {
            background-color: #0056b3;
        }

        .save-button {
            text-align: center;
            margin-top: 20px;
        }

        .save-button button {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            cursor: pointer;
        }

        .save-button button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <h3>Hasil Penilaian Introvert and Extrovert Personal Assessment</h3>
            <p>Skor Introvert: {{ $introvertScore }} ({{ $introvertPercentage }}%)</p>
            <p>Skor Ekstrovert: {{ $ekstrovertScore }} ({{ $ekstrovertPercentage }}%)</p>
            
            <canvas id="chart"></canvas>
        </div>

        <div>
            <h3>Personality dan Deskripsi</h3>
            <p>Personality: {{ $personality }}</p>
            <p>Deskripsi: {{ $deskripsi }}</p>
        </div>

        <div class="save-button">
            <button onclick="saveResult()">Simpan</button>
        </div>

        <div class="art-factory">
            <h1></h1>
            <p>Apabila Hasil Penilaian Diatas Kurang Memuaskan, Harap Lakukan Tes Kepribadian Kepada Ahlinya</p>
            <a href="{{ route('back.dashboard') }}">Kembali ke Dashboard</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        function saveResult() {
            // Implementasi logika untuk menyimpan hasil penilaian
            alert('Hasil penilaian berhasil disimpan!');
        }

        var ctx = document.getElementById('chart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Introvert', 'Ekstrovert'],
                datasets: [{
                    label: 'Persentase Skor',
                    data: [{{ $introvertPercentage }}, {{ $ekstrovertPercentage }}],
                    backgroundColor: ['#f31212', '#0056b3'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var label = data.labels[tooltipItem.index] || '';
                            var value = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                            return label + ': ' + value + '%';
                        }
                    }
                }
            }
        });
    </script>

</body>
</html>
