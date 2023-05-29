@extends('pages.master_quiz')
<body>
@include('pages.navbar')
@include('pages.welcomeareaquiz')

    <div class="container">

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
                    <button type="submit" class="main-button" onclick="return validateAnswers()">Selanjutnya</button>
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
