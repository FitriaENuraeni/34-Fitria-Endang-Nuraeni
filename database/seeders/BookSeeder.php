<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("books")->insert([
            [
                'title' => 'Episode Rasa',
                'cover' => './images/episode-rasa.jpg',
                'summary' => 'Aku tak menyiapkan apa-apa saat kamu memutuskan untuk pergi. Karena aku selalu mengira, kita akan baik-baik saja. Pada akhirnya, harapan memang tidak pernah sejalan dengan kenyataan.

                Untuk seseorang di masa silam, terima kasih untuk patah yang teramat parah. Terima kasih, untuk semua kenang yang tak menyenangkan. Terima kasih, untuk manismu yang melukaiku. Kini, aku sudah berhenti mencintaimu.
                
                ***
                
                Sebuah episode tentang rasa, tentang segala pernah yang bermuara pada musnah.',
                'author_id' => 3,
                'year' => 2017,
            ],
            [
                'title' => 'ABU BAKAR ASH- SHIDIQ sebuah biografi',
                'cover' => './images/abu-bakar.jpg',
                'summary' => 'Abu Bakar Adalah Salah Satu Sahabat Rasulullah Yang Paling Dekat. Abu Bakar Juga Merupakan Salah Satu Khulafaur Rasidin Yang Berjasa Dalam Perkembangan Islam. Kedekatan Abu Bakar Dengan Rasulullah Dimulai Sejak Kecil. Karena Usia Mereka Berdua Tidak Terpaut Jauh Dan Tinggal Bersama Dalam Satu Perkampungan. Persahabat Itulah Yang Membuat Abu Bakar Untuk Selalu Berada Di Samping Rasulullah. Begitu Juga Abu Bakar, la Telah Bertekad Untuk Melindungi Dan Menemani Rasulullah Dalam Keadaan Apapun. Abu Bakar Menjadi Teman Pendamping Hijrah Rasulullah Pertama Kalinya Ke Madinah. Banyak Suka Duka Yang Dialami Oleh Abu Bakar Pada Masa Rasulullah. Abu Bakar Juga Menjadi Orang Pertama Yang Membenarkan Apa Yang Disampaikan Oleh Rasulullah Setelah Melakukan Isra Miraj. Ketika Semua Orang Menyangkal Apa Yang Disampaikan Oleh Rasulullah. Abu Bakar Tetap Teguh Dalam Menemani Perialanan Dakwah Rasulullah. Abu Bakar Senantiasa Mengorbankan Hartanya Untuk Kepentingan Islam. Tidak Hanya Cukup Sampai Di Situ, Abu Bakar Terus Melakukan Gerakan Untuk Menyebar Luaskan Ajaran Agama Islam Sampai Persia Dan Romawi. Tekad Abu Bakar Untuk Menaklukkan Persia Sangat Besar, Bahkan Bukan Hanya Persia Namun Diharapkan Bisa Sampai Romawi. Usaha Yang Dilakukan Oleh Abu Bakar Berakhir Gemilang, Hingga Saatnya Abu Bakar Menyusul Rasulullah Mengahadap Allah. Abu Bakar Mengembuskan Nafas Terakhir Ketika Pasukan Islam Sedang Melakukan Penyerangan Terhadap Irak. Pemerintah Abu Bakar Hanya Berlangsung Sekitar Dua Tahunan, Akan Tetapi Jasa-jasa Abu Bakar Terhadap Islam Tidak Ada Yang Dapat Menandinginya.',
                'author_id' => 1,
                'year' => 2022,
            ],
            [
                'title' => 'Bahagia Itu Sederhana',
                'cover' => './images/bahagia-itu-sederhana.jpg',
                'summary' => 'Melalui perenungan penulis tentang kehidupan dan kebahagiaan, dan
                dilengkapi dengan kutipan-kutipan dari para tokoh ahli kebijaksanaan di
                masa lampau yang sangat terkenal, buku ini membagikan hal-hal sederhana,
                namun berharga, yang telah terbukti bisa membuat dirinya bahagia, yang
                juga dapat dimanfaatkan oleh semua orang untuk juga bahagia.',
                'author_id' => 2,
                'year' => 2022,
            ],
            [
                'title' => '5 Guru Kecilku',
                'cover' => './images/5_guru_kecilku.jpg',
                'summary' => 'Buku ini bukanlah buku teori parenting, buku ini adalah buku bagaimana teori parenting dapat diaplikasikan dengan penuh kesabaran dan keyakinan. Buku ini mengangkat kisah-kisah seputar pengasuhan anak yang mungkin sangat umum terjadi dalam keluarga. Namun atas petunjuk Allah SWT penulis mampu menyibak rahasia dan mengumpulkan hikmah yang berserak dari setiap permasalahan yang dihadapi dalam pengasuhan anak sehingga menjadi pelajaran berharga bagi para orang tua.
                Buku ini tidak hanya memberikan teladan dalam mengatasi berbagai konflik yang spesifik seputar pengasuhan anak, namun juga memberikan hikmah yang dapat menjadi ruh dalam menyelesaikan permasalahan kehidupan lainnya. Meskipun permasalahan yang diangkat adalah seputar pengasuhan anak usia dini dan remaja, namun hikmah yang tergali dapat menjadi pelajaran berharga bagi orang tua dengan segala usia.',
                'author_id' => 5,
                'year' => 2015,
            ],
            [
                'title' => 'Rindu',
                'cover' => './images/rindu.jpg',
                'summary' => '"Apalah arti memiliki, ketika diri kami sendiri bukanlah milik kami?

                Apalah arti kehilangan, ketika kami sebenarnya menemukan banyak saat kehilangan, dan sebaliknya, kehilangan banyak pula saat menemukan?',
                'author_id' => 4,
                'year' => 2014,
            ],

        ]);
    }
}
