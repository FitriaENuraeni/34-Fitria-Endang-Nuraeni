<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $book = [
        [
            'title' => 'Episode Rasa',
            'cover' => './images/episode-rasa.jpg',
            'summary' => 'Aku tak menyiapkan apa-apa saat kamu memutuskan untuk pergi. Karena aku selalu mengira, kita akan baik-baik saja. Pada akhirnya, harapan memang tidak pernah sejalan dengan kenyataan.

            Untuk seseorang di masa silam, terima kasih untuk patah yang teramat parah. Terima kasih, untuk semua kenang yang tak menyenangkan. Terima kasih, untuk manismu yang melukaiku. Kini, aku sudah berhenti mencintaimu.
            
            ***
            
            Sebuah episode tentang rasa, tentang segala pernah yang bermuara pada musnah.',
            'author' => 'Suci Indriyani',
            'year' => 2017,
            'genre' => ['Romance', 'Novel']   
        ],
        [
            'title' => 'ABU BAKAR ASH- SHIDIQ sebuah biografi',
            'cover' => './images/abu-bakar.jpg',
            'summary' => 'Abu Bakar Adalah Salah Satu Sahabat Rasulullah Yang Paling Dekat. Abu Bakar Juga Merupakan Salah Satu Khulafaur Rasidin Yang Berjasa Dalam Perkembangan Islam. Kedekatan Abu Bakar Dengan Rasulullah Dimulai Sejak Kecil. Karena Usia Mereka Berdua Tidak Terpaut Jauh Dan Tinggal Bersama Dalam Satu Perkampungan. Persahabat Itulah Yang Membuat Abu Bakar Untuk Selalu Berada Di Samping Rasulullah. Begitu Juga Abu Bakar, la Telah Bertekad Untuk Melindungi Dan Menemani Rasulullah Dalam Keadaan Apapun. Abu Bakar Menjadi Teman Pendamping Hijrah Rasulullah Pertama Kalinya Ke Madinah. Banyak Suka Duka Yang Dialami Oleh Abu Bakar Pada Masa Rasulullah. Abu Bakar Juga Menjadi Orang Pertama Yang Membenarkan Apa Yang Disampaikan Oleh Rasulullah Setelah Melakukan Isra Miraj. Ketika Semua Orang Menyangkal Apa Yang Disampaikan Oleh Rasulullah. Abu Bakar Tetap Teguh Dalam Menemani Perialanan Dakwah Rasulullah. Abu Bakar Senantiasa Mengorbankan Hartanya Untuk Kepentingan Islam. Tidak Hanya Cukup Sampai Di Situ, Abu Bakar Terus Melakukan Gerakan Untuk Menyebar Luaskan Ajaran Agama Islam Sampai Persia Dan Romawi. Tekad Abu Bakar Untuk Menaklukkan Persia Sangat Besar, Bahkan Bukan Hanya Persia Namun Diharapkan Bisa Sampai Romawi. Usaha Yang Dilakukan Oleh Abu Bakar Berakhir Gemilang, Hingga Saatnya Abu Bakar Menyusul Rasulullah Mengahadap Allah. Abu Bakar Mengembuskan Nafas Terakhir Ketika Pasukan Islam Sedang Melakukan Penyerangan Terhadap Irak. Pemerintah Abu Bakar Hanya Berlangsung Sekitar Dua Tahunan, Akan Tetapi Jasa-jasa Abu Bakar Terhadap Islam Tidak Ada Yang Dapat Menandinginya.',
            'author' => 'Ari Ghorir Atiq',
            'year' => 2022,
            'genre' => ['Biografi', 'Islami']   
        ],
        [
            'title' => 'Bahagia Itu Sederhana',
            'cover' => './images/bahagia-itu-sederhana.jpg',
            'summary' => 'Melalui perenungan penulis tentang kehidupan dan kebahagiaan, dan
            dilengkapi dengan kutipan-kutipan dari para tokoh ahli kebijaksanaan di
            masa lampau yang sangat terkenal, buku ini membagikan hal-hal sederhana,
            namun berharga, yang telah terbukti bisa membuat dirinya bahagia, yang
            juga dapat dimanfaatkan oleh semua orang untuk juga bahagia.',
            'author' => 'Sir John Lubbock',
            'year' => 2022,
            'genre' => ['Psikologi', 'Pengembangan Diri']
        ],
    ];

    return view('book.index', compact('book'));
});

Route::get('/create', function () {

    $genre = [
        [
            'id' => 1,
            'name' => 'novel'
        ],
        [
            'id' => 2,
            'name' => 'fiksi'
        ],
        [
            'id' => 3,
            'name' => 'biografi'
        ],
    ];

    return view('book.create', compact('genre'));
});
