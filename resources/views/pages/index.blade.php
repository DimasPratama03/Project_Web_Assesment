<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
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

        h1 {
            text-align: center;
            color: #333333;
        }

        .progress {
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .progress-bar {
            height: 100%;
            background-color: #ff5a5f;
            border-radius: 5px;
            transition: width 0.3s ease-in-out;
        }

        .quiz-info {
            text-align: center;
            color: #777777;
            margin-bottom: 20px;
        }

        .error {
            color: #ff5a5f;
            margin-bottom: 10px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }

        .question {
            margin-bottom: 15px;
        }

        .question p {
            margin: 0;
        }

        .answer {
            margin-bottom: 10px;
        }

        .answer label {
            display: block;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .answer input[type="radio"] {
            margin-right: 5px;
        }

        .navigation {
            text-align: center;
            margin-top: 20px;
        }

        .navigation a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }

        .navigation button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .navigation button:hover {
            background-color: #0056b3;
        }

        /* Style untuk tombol kembali ke dashboard */
        .back-to-dashboard {
            display: inline-block;
            background-color: #f31212;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .back-to-dashboard:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Introvert and Extrovert Personal Assessment Form</h1>

        <!-- Tambahkan tombol kembali ke dashboard -->
        <div>
            <a href="{{ route('back.dashboard') }}" class="back-to-dashboard">Kembali ke Dashboard</a>
        </div>

        <!-- Tampilkan progress bar untuk pertanyaan -->
        <div class="progress">
            @php
                $totalQuestions = count($questions);
            @endphp

            @if ($totalQuestions > 0)
                <div class="progress-bar" role="progressbar" style="width: {{ ($start / $totalQuestions) * 100 }}%" aria-valuenow="{{ $start }}" aria-valuemin="0" aria-valuemax="{{ $totalQuestions }}"></div>
            @else
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"></div>
            @endif
        </div>

        <!-- Tampilkan jumlah pertanyaan yang telah dijawab dan total jumlah pertanyaan -->
        <p class="quiz-info">{{ $start }} / {{ $totalQuestions }} Pertanyaan</p>

        <!-- Tampilkan pesan error jika jawaban tidak diisi -->
        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('quiz.submit') }}" method="POST">
            @csrf
            @foreach($paginatedQuestions as $index => $question)
                @php
                    $questionIndex = $start + $index;
                    $questionData = $questions[$questionIndex];
                @endphp
                <input type="hidden" name="question_index" value="{{ $questionIndex }}">
                <div class="question">
                    <p>Pertanyaan {{ $questionIndex + 1 }}: {{ $questionData['question'] }}</p>
                </div>
                <div class="answer">
                    <label for="answer-{{ $questionIndex }}-ya">
                        <input type="radio" name="answers[{{ $questionIndex }}]" id="answer-{{ $questionIndex }}-ya" value="Ya">
                        Ya
                    </label>
                </div>
                <div class="answer">
                    <label for="answer-{{ $questionIndex }}-tidak">
                        <input type="radio" name="answers[{{ $questionIndex }}]" id="answer-{{ $questionIndex }}-tidak" value="Tidak">
                        Tidak
                    </label>
                </div>
            @endforeach

            <div class="navigation">
                @if ($paginatedQuestions->previousPageUrl())
                    <a href="{{ $paginatedQuestions->previousPageUrl() }}">Sebelumnya</a>
                @endif

                @if ($paginatedQuestions->currentPage() < $paginatedQuestions->lastPage())
                    <button type="submit" onclick="return validateAnswers()">Selanjutnya</button>
                @else
                    <button type="submit">Selesai</button>
                @endif
            </div>
        </form>
    </div>

    <script>
        function validateAnswers() {
            var selectedAnswers = document.querySelectorAll('input[type="radio"]:checked');
            var totalQuestions = {{ $paginatedQuestions->count() }};
            if (selectedAnswers.length < totalQuestions) {
                var errorElement = document.querySelector('.error');
                if (errorElement) {
                    errorElement.innerHTML = "Harap jawab semua pertanyaan sebelum melanjutkan.";
                } else {
                    var newErrorElement = document.createElement('div');
                    newErrorElement.classList.add('error');
                    newErrorElement.innerHTML = "Harap jawab semua pertanyaan sebelum melanjutkan.";
                    var formElement = document.querySelector('form');
                    formElement.insertBefore(newErrorElement, formElement.firstChild);
                }
                return false;
            }
        }
    </script>
</body>
</html>
