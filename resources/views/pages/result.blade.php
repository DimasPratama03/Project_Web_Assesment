@extends('pages.master_quiz')
<body>
@include('pages.navbar')
@include('pages.welcomeareaquiz')

    <div class="container">
        <div>
            <h3>Hasil Penilaian Tes Kepribadian</h3>
            <p>Skor Introvert: {{ $introvertScore }} ({{ $introvertPercentage }}%)</p>
            <p>Skor Ekstrovert: {{ $ekstrovertScore }} ({{ $ekstrovertPercentage }}%)</p>
            
            <canvas id="chart"></canvas>
        </div>

        <div>
            <p>Personality: {{ $personality }}</p>
            <p>Deskripsi: {{ $deskripsi }}</p>
        </div>
        
        <div class="save-button">
            <h1></h1>
            <p>Klik Simpan Jika Anda Ingin Menyimpan Hasil Tes</p>
            <button onclick="saveResult()" class="main-button" >Simpan</button>
            <a href="{{ route('back.dashboard') }}" class="main-button" >Kembali ke Dashboard</a>
        </div>

        {{-- <div class="art-factory">
            <h1></h1>
            <p>Apabila Hasil Penilaian Diatas Kurang Memuaskan, Harap Lakukan Tes Kepribadian Kepada Ahlinya</p>
            <a href="{{ route('back.dashboard') }}" class="main-button" >Kembali ke Dashboard</a>
        </div> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        function saveResult() {
            fetch('/save-result', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    introvertScore: '{{ $introvertScore }}',
                    ekstrovertScore: '{{ $ekstrovertScore }}',
                    introvertPercentage: '{{ $introvertPercentage }}',
                    ekstrovertPercentage: '{{ $ekstrovertPercentage }}',
                    personality: '{{ $personality }}',
                    deskripsi: '{{ $deskripsi }}'
                })
            })
            .then(response => response.json())
            .then(data => {
                alert('Hasil penilaian berhasil disimpan!');
            })
            .catch(error => {
                console.error('Error:', error);
            });
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
