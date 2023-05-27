<?php

namespace App\Http\Controllers;

use App\Models\JenisKepribadian;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller 
{
    private function paginateQuestions($questions, $perPage)
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = array_slice($questions, ($currentPage - 1) * $perPage, $perPage);
        $paginatedQuestions = new LengthAwarePaginator($currentItems, count($questions), $perPage);
        $paginatedQuestions->setPath('/quiz'); // Atur path halaman ke '/quiz'
        $paginatedQuestions->setPageName('page'); // Atur nama parameter halaman menjadi 'page'

        return $paginatedQuestions;
    }

    public function index(Request $request)
    {
        $start = (int) $request->query('start', 0); // Mengambil nilai start dari query parameter, defaultnya 0
        $perPage = 4;

        $questions = [
            [
                'type' => 'introvert',
                'question' => 'Saya lebih suka menikmati waktu luang seorang diri',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka mengikuti banyak kegiatan',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya kurang menyukai tantangan',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Jumlah teman dan kenalan saya terus bertambah',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih memilih diam daripada beradu argumen dengan orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya cepat berinteraksi dengan orang baru',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya kurang menyukai kegiatan yang terlalu banyak menguras energi',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka bercerita tentang diri saya kepada orang lain',
            ],
            [
                'type' => 'introvert',
                'question' => 'Melakukan banyak aktivitas bukanlah diri saya',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya sering melakukan sesuatu secara langsung tanpa harus berpikir panjang',
            ],
            [
                'type' => 'introvert',
                'question' => 'Suara bising mengganggu saya',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya lebih suka melakukan kegiatan yang melibatkan banyak orang',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih suka sendirian daripada berkumpul bersama orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka mengobrol meskipun orang tersebut belum saya kenal',
            ],
            [
                'type' => 'introvert',
                'question' => 'Ketika saya ingin mengetahui tentang suatu hal, saya lebih suka mencari sendiri daripada bertanya kepada orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Ketika berkumpul bersama orang-orang, saya suka membicarakan banyak hal',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya merasa kurang nyaman saat berada dalam kerumunan orang banyak',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya cepat beradaptasi dengan orang baru',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih suka berkegiatan sendiri',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka menjadi pusat perhatian',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya tidak suka berbasa-basi',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya kurang menyukai situasi yang monoton',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya hanya berkumpul dengan beberapa orang yang memahami saya',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka bercanda, mengobrol, dan bercerita',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya cenderung berpikir lebih lama sebelum berbicara',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka berkumpul dengan teman-teman',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih suka menikmati hari libur seorang diri',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka tantangan baru',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya kurang suka menjadi pusat perhatian',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka bepergian atau jalan-jalan bersama orang lain',
            ],
            [
                'type' => 'introvert',
                'question' => 'Membutuhkan waktu lama bagi saya untuk beradaptasi dengan situasi dan lingkungan baru',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Orang lain menilai saya sebagai orang yang bersemangat',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih banyak diam saat berinteraksi dengan orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya tidak betah sendirian',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya kurang menyukai aktivitas yang melibatkan banyak orang',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya mampu menghidupkan suasana sepi',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya menyukai percakapan berkualitas hanya dengan sedikit orang',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka berdiskusi dengan teman-teman',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya tidak biasa menceritakan tentang diri saya pada orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Mudah bagi saya untuk memulai pembicaraan dengan orang lain sekalipun orang tersebut baru saya kenal',
            ],
        ];

        $paginatedQuestions = $this->paginateQuestions($questions, $perPage);

        // Memperbarui indeks pertanyaan yang akan ditampilkan berdasarkan nilai $start
        $start = $start * $perPage;

        return view('pages.index', compact('questions', 'paginatedQuestions', 'start', 'perPage'));
    }

    public function submit(Request $request)
    {
        $answers = $request->input('answers', []);
    $questionIndex = (int) $request->input('question_index', 0);
    $perPage = 4;
    $start = (int) ($questionIndex / $perPage);


        $questions = [
            [
                'type' => 'introvert',
                'question' => 'Saya lebih suka menikmati waktu luang seorang diri',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka mengikuti banyak kegiatan',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya kurang menyukai tantangan',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Jumlah teman dan kenalan saya terus bertambah',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih memilih diam daripada beradu argumen dengan orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya cepat berinteraksi dengan orang baru',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya kurang menyukai kegiatan yang terlalu banyak menguras energi',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka bercerita tentang diri saya kepada orang lain',
            ],
            [
                'type' => 'introvert',
                'question' => 'Melakukan banyak aktivitas bukanlah diri saya',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya sering melakukan sesuatu secara langsung tanpa harus berpikir panjang',
            ],
            [
                'type' => 'introvert',
                'question' => 'Suara bising mengganggu saya',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya lebih suka melakukan kegiatan yang melibatkan banyak orang',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih suka sendirian daripada berkumpul bersama orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka mengobrol meskipun orang tersebut belum saya kenal',
            ],
            [
                'type' => 'introvert',
                'question' => 'Ketika saya ingin mengetahui tentang suatu hal, saya lebih suka mencari sendiri daripada bertanya kepada orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Ketika berkumpul bersama orang-orang, saya suka membicarakan banyak hal',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya merasa kurang nyaman saat berada dalam kerumunan orang banyak',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya cepat beradaptasi dengan orang baru',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih suka berkegiatan sendiri',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka menjadi pusat perhatian',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya tidak suka berbasa-basi',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya kurang menyukai situasi yang monoton',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya hanya berkumpul dengan beberapa orang yang memahami saya',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka bercanda, mengobrol, dan bercerita',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya cenderung berpikir lebih lama sebelum berbicara',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka berkumpul dengan teman-teman',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih suka menikmati hari libur seorang diri',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka tantangan baru',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya kurang suka menjadi pusat perhatian',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka bepergian atau jalan-jalan bersama orang lain',
            ],
            [
                'type' => 'introvert',
                'question' => 'Membutuhkan waktu lama bagi saya untuk beradaptasi dengan situasi dan lingkungan baru',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Orang lain menilai saya sebagai orang yang bersemangat',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya lebih banyak diam saat berinteraksi dengan orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya tidak betah sendirian',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya kurang menyukai aktivitas yang melibatkan banyak orang',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya mampu menghidupkan suasana sepi',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya menyukai percakapan berkualitas hanya dengan sedikit orang',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Saya suka berdiskusi dengan teman-teman',
            ],
            [
                'type' => 'introvert',
                'question' => 'Saya tidak biasa menceritakan tentang diri saya pada orang lain',
            ],
            [
                'type' => 'ekstrovert',
                'question' => 'Mudah bagi saya untuk memulai pembicaraan dengan orang lain sekalipun orang tersebut baru saya kenal',
            ],

        ];

        $questionCount = count($questions);
    $currentQuestionIndex = $questionIndex;
    $nextQuestionIndex = $currentQuestionIndex + 1;

    // Simpan jawaban pada session
    $sessionKey = 'answers_' . $start; // Gunakan key yang unik untuk setiap halaman
    $request->session()->put($sessionKey, $answers);

    if ($nextQuestionIndex < $questionCount) {
        $nextStart = (int) (($currentQuestionIndex + 1) / $perPage);
        return redirect('/quiz?start=' . $nextStart . '&question_index=' . $nextQuestionIndex);
    }

    // Calculate scores
$introvertScore = 0;
$ekstrovertScore = 0;

// Menggabungkan jawaban dari semua halaman
for ($i = 0; $i <= $start; $i++) {
    $sessionKey = 'answers_' . $i;
    $sessionAnswers = $request->session()->get($sessionKey, []);
    foreach ($sessionAnswers as $index => $answer) {
        if (isset($questions[$index])) { // Periksa apakah indeks ada dalam array questions
            $questionType = $questions[$index]['type'];
            if ($questionType === 'introvert') {
                if ($answer === 'Ya') {
                    $introvertScore += 1;
                }
            } elseif ($questionType === 'ekstrovert') {
                if ($answer === 'Ya') {
                    $ekstrovertScore += 1;
                }
            }
        }
    }
}

// Clear session answers
for ($i = 0; $i <= $start; $i++) {
    $sessionKey = 'answers_' . $i;
    $request->session()->forget($sessionKey);
}

// Convert scores to percentage with adjustments
$totalIntrovertQuestions = 20;
$totalEkstrovertQuestions = 20;
$introvertPercentage = ($introvertScore / $totalIntrovertQuestions) * 100;
$ekstrovertPercentage = ($ekstrovertScore / $totalEkstrovertQuestions) * 100;

// Adjust percentages to ensure they add up to 100
$totalPercentage = $introvertPercentage + $ekstrovertPercentage;
$introvertPercentage = ($introvertPercentage / $totalPercentage) * 100;
$ekstrovertPercentage = ($ekstrovertPercentage / $totalPercentage) * 100;

// Get personality and description
$personalityData = JenisKepribadian::where('personality', $introvertScore > $ekstrovertScore ? 'introvert' : 'ekstrovert')->first();
$personality = $personalityData->personality;
$deskripsi = $personalityData->deskripsi;

return view('pages.result', [
    'introvertScore' => $introvertScore,
    'introvertPercentage' => $introvertPercentage,
    'ekstrovertScore' => $ekstrovertScore,
    'ekstrovertPercentage' => $ekstrovertPercentage,
    'personality' => $personality,
    'deskripsi' => $deskripsi,
]);


    }
}

