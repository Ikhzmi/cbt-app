<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $ips = Subject::where('name','IPS')->first();
        $mtk = Subject::where('name','Matematika')->first();
        $bindo = Subject::where('name','Bahasa Indonesia')->first();

        // ===================== IPS (1-150) =====================

        // IPS 1
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kapan peristiwa Proklamasi Kemerdekaan Indonesia dilaksanakan?','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'17 Agustus 1944','is_correct'=>false,'is_active'=>true],['text'=>'17 Agustus 1945','is_correct'=>true,'is_active'=>true],['text'=>'1 Juni 1945','is_correct'=>false,'is_active'=>true],['text'=>'20 Mei 1908','is_correct'=>false,'is_active'=>true]]);

        // IPS 2
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Siapakah tokoh yang membacakan teks Proklamasi Kemerdekaan Indonesia?','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Mohammad Hatta','is_correct'=>false,'is_active'=>true],['text'=>'Sutan Sjahrir','is_correct'=>false,'is_active'=>true],['text'=>'Ir. Soekarno','is_correct'=>true,'is_active'=>true],['text'=>'Achmad Soebardjo','is_correct'=>false,'is_active'=>true]]);

        // IPS 3
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Teks Proklamasi Kemerdekaan Indonesia diketik oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sayuti Melik','is_correct'=>true,'is_active'=>true],['text'=>'B.M. Diah','is_correct'=>false,'is_active'=>true],['text'=>'Fatmawati','is_correct'=>false,'is_active'=>true],['text'=>'Wikana','is_correct'=>false,'is_active'=>true]]);

        // IPS 4
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Bunyi sila pertama Pancasila adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kemanusiaan yang adil dan beradab','is_correct'=>false,'is_active'=>true],['text'=>'Persatuan Indonesia','is_correct'=>false,'is_active'=>true],['text'=>'Keadilan sosial bagi seluruh rakyat Indonesia','is_correct'=>false,'is_active'=>true],['text'=>'Ketuhanan Yang Maha Esa','is_correct'=>true,'is_active'=>true]]);

        // IPS 5
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Lambang sila ketiga Pancasila adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kepala banteng','is_correct'=>false,'is_active'=>true],['text'=>'Pohon beringin','is_correct'=>true,'is_active'=>true],['text'=>'Rantai','is_correct'=>false,'is_active'=>true],['text'=>'Padi dan kapas','is_correct'=>false,'is_active'=>true]]);

        // IPS 6
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sila kelima Pancasila berbunyi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Keadilan sosial bagi seluruh rakyat Indonesia','is_correct'=>true,'is_active'=>true],['text'=>'Kerakyatan yang dipimpin oleh hikmat kebijaksanaan dalam permusyawaratan/perwakilan','is_correct'=>false,'is_active'=>true],['text'=>'Persatuan Indonesia','is_correct'=>false,'is_active'=>true],['text'=>'Kemanusiaan yang adil dan beradab','is_correct'=>false,'is_active'=>true]]);

        // IPS 7
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Lambang sila kedua Pancasila adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Bintang','is_correct'=>false,'is_active'=>true],['text'=>'Pohon beringin','is_correct'=>false,'is_active'=>true],['text'=>'Rantai','is_correct'=>true,'is_active'=>true],['text'=>'Kepala banteng','is_correct'=>false,'is_active'=>true]]);

        // IPS 8
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Lambang sila keempat Pancasila adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Padi dan kapas','is_correct'=>false,'is_active'=>true],['text'=>'Rantai','is_correct'=>false,'is_active'=>true],['text'=>'Bintang','is_correct'=>false,'is_active'=>true],['text'=>'Kepala banteng','is_correct'=>true,'is_active'=>true]]);

        // IPS 9
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Lambang sila pertama Pancasila adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Bintang','is_correct'=>true,'is_active'=>true],['text'=>'Pohon beringin','is_correct'=>false,'is_active'=>true],['text'=>'Padi dan kapas','is_correct'=>false,'is_active'=>true],['text'=>'Rantai','is_correct'=>false,'is_active'=>true]]);

        // IPS 10
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Hari Lahir Pancasila diperingati setiap tanggal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'17 Agustus','is_correct'=>false,'is_active'=>true],['text'=>'28 Oktober','is_correct'=>false,'is_active'=>true],['text'=>'1 Juni','is_correct'=>true,'is_active'=>true],['text'=>'20 Mei','is_correct'=>false,'is_active'=>true]]);

        // IPS 11
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pancasila berkedudukan sebagai ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Undang-undang','is_correct'=>false,'is_active'=>true],['text'=>'Dasar negara dan pandangan hidup bangsa','is_correct'=>true,'is_active'=>true],['text'=>'Peraturan daerah','is_correct'=>false,'is_active'=>true],['text'=>'Lambang negara saja','is_correct'=>false,'is_active'=>true]]);

        // IPS 12
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Ketua Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan Indonesia (BPUPKI) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'dr. K.R.T. Radjiman Wedyodiningrat','is_correct'=>true,'is_active'=>true],['text'=>'Ir. Soekarno','is_correct'=>false,'is_active'=>true],['text'=>'Mohammad Yamin','is_correct'=>false,'is_active'=>true],['text'=>'Mohammad Hatta','is_correct'=>false,'is_active'=>true]]);

        // IPS 13
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Dataran luas yang berada pada ketinggian lebih dari 200 meter di atas permukaan laut disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Dataran rendah','is_correct'=>false,'is_active'=>true],['text'=>'Pegunungan','is_correct'=>false,'is_active'=>true],['text'=>'Lembah','is_correct'=>false,'is_active'=>true],['text'=>'Dataran tinggi','is_correct'=>true,'is_active'=>true]]);

        // IPS 14
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kumpulan air yang luas dan dikelilingi daratan disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Selat','is_correct'=>false,'is_active'=>true],['text'=>'Danau','is_correct'=>true,'is_active'=>true],['text'=>'Teluk','is_correct'=>false,'is_active'=>true],['text'=>'Tanjung','is_correct'=>false,'is_active'=>true]]);

        // IPS 15
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Selat Sunda memisahkan dua pulau, yaitu ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Jawa dan Bali','is_correct'=>false,'is_active'=>true],['text'=>'Sumatra dan Kalimantan','is_correct'=>false,'is_active'=>true],['text'=>'Sumatra dan Jawa','is_correct'=>true,'is_active'=>true],['text'=>'Jawa dan Madura','is_correct'=>false,'is_active'=>true]]);

        // IPS 16
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sebuah peta berskala 1 : 1.000.000. Artinya, 1 cm pada peta mewakili jarak sebenarnya sejauh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'10 km','is_correct'=>true,'is_active'=>true],['text'=>'1 km','is_correct'=>false,'is_active'=>true],['text'=>'100 km','is_correct'=>false,'is_active'=>true],['text'=>'1.000 km','is_correct'=>false,'is_active'=>true]]);

        // IPS 17
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Bagian peta yang berisi keterangan tentang arti simbol-simbol pada peta disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Skala','is_correct'=>false,'is_active'=>true],['text'=>'Legenda','is_correct'=>true,'is_active'=>true],['text'=>'Judul peta','is_correct'=>false,'is_active'=>true],['text'=>'Garis lintang','is_correct'=>false,'is_active'=>true]]);

        // IPS 18
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Arah mata angin yang terletak di antara utara dan timur adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Barat laut','is_correct'=>false,'is_active'=>true],['text'=>'Tenggara','is_correct'=>false,'is_active'=>true],['text'=>'Barat daya','is_correct'=>false,'is_active'=>true],['text'=>'Timur laut','is_correct'=>true,'is_active'=>true]]);

        // IPS 19
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Garis khayal yang membagi bumi menjadi belahan bumi utara dan belahan bumi selatan disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Garis khatulistiwa','is_correct'=>true,'is_active'=>true],['text'=>'Garis bujur','is_correct'=>false,'is_active'=>true],['text'=>'Garis tanggal internasional','is_correct'=>false,'is_active'=>true],['text'=>'Garis meridian','is_correct'=>false,'is_active'=>true]]);

        // IPS 20
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Indonesia terletak di antara dua benua, yaitu ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Asia dan Afrika','is_correct'=>false,'is_active'=>true],['text'=>'Eropa dan Australia','is_correct'=>false,'is_active'=>true],['text'=>'Asia dan Australia','is_correct'=>true,'is_active'=>true],['text'=>'Amerika dan Asia','is_correct'=>false,'is_active'=>true]]);

        // IPS 21
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Indonesia terletak di antara dua samudra, yaitu ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Samudra Atlantik dan Samudra Hindia','is_correct'=>false,'is_active'=>true],['text'=>'Samudra Hindia dan Samudra Pasifik','is_correct'=>true,'is_active'=>true],['text'=>'Samudra Pasifik dan Samudra Atlantik','is_correct'=>false,'is_active'=>true],['text'=>'Samudra Arktik dan Samudra Hindia','is_correct'=>false,'is_active'=>true]]);

        // IPS 22
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kegiatan menghasilkan atau membuat barang dan jasa disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Konsumsi','is_correct'=>false,'is_active'=>true],['text'=>'Distribusi','is_correct'=>false,'is_active'=>true],['text'=>'Investasi','is_correct'=>false,'is_active'=>true],['text'=>'Produksi','is_correct'=>true,'is_active'=>true]]);

        // IPS 23
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kegiatan menggunakan atau menghabiskan nilai guna barang dan jasa disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Konsumsi','is_correct'=>true,'is_active'=>true],['text'=>'Produksi','is_correct'=>false,'is_active'=>true],['text'=>'Distribusi','is_correct'=>false,'is_active'=>true],['text'=>'Promosi','is_correct'=>false,'is_active'=>true]]);

        // IPS 24
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kegiatan menyalurkan barang dari produsen kepada konsumen disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Produksi','is_correct'=>false,'is_active'=>true],['text'=>'Konsumsi','is_correct'=>false,'is_active'=>true],['text'=>'Distribusi','is_correct'=>true,'is_active'=>true],['text'=>'Investasi','is_correct'=>false,'is_active'=>true]]);

        // IPS 25
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Yang termasuk kebutuhan primer manusia adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sandang, pangan, dan papan','is_correct'=>true,'is_active'=>true],['text'=>'Televisi, kulkas, dan sepeda motor','is_correct'=>false,'is_active'=>true],['text'=>'Perhiasan, mobil, dan rumah mewah','is_correct'=>false,'is_active'=>true],['text'=>'Rekreasi, hiburan, dan olahraga','is_correct'=>false,'is_active'=>true]]);

        // IPS 26
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sistem tukar-menukar barang dengan barang secara langsung tanpa menggunakan uang disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Jual beli','is_correct'=>false,'is_active'=>true],['text'=>'Kredit','is_correct'=>false,'is_active'=>true],['text'=>'Sewa','is_correct'=>false,'is_active'=>true],['text'=>'Barter','is_correct'=>true,'is_active'=>true]]);

        // IPS 27
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Salah satu fungsi uang adalah sebagai ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'alat tukar dan satuan hitung','is_correct'=>true,'is_active'=>true],['text'=>'alat produksi','is_correct'=>false,'is_active'=>true],['text'=>'alat distribusi barang','is_correct'=>false,'is_active'=>true],['text'=>'alat konsumsi','is_correct'=>false,'is_active'=>true]]);

        // IPS 28
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Jika harga suatu barang naik, sedangkan hal lain tidak berubah, maka jumlah barang yang diminta konsumen cenderung ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'naik','is_correct'=>false,'is_active'=>true],['text'=>'tetap','is_correct'=>false,'is_active'=>true],['text'=>'turun','is_correct'=>true,'is_active'=>true],['text'=>'berlipat ganda','is_correct'=>false,'is_active'=>true]]);

        // IPS 29
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kerajaan Hindu tertua di Indonesia adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Majapahit','is_correct'=>false,'is_active'=>true],['text'=>'Kutai','is_correct'=>true,'is_active'=>true],['text'=>'Sriwijaya','is_correct'=>false,'is_active'=>true],['text'=>'Tarumanegara','is_correct'=>false,'is_active'=>true]]);

        // IPS 30
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Peninggalan sejarah Kerajaan Kutai yang menjadi bukti keberadaannya adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Prasasti Yupa','is_correct'=>true,'is_active'=>true],['text'=>'Prasasti Kedukan Bukit','is_correct'=>false,'is_active'=>true],['text'=>'Candi Borobudur','is_correct'=>false,'is_active'=>true],['text'=>'Prasasti Ciaruteun','is_correct'=>false,'is_active'=>true]]);

        // IPS 31
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Raja terbesar Kerajaan Kutai adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Purnawarman','is_correct'=>false,'is_active'=>true],['text'=>'Hayam Wuruk','is_correct'=>false,'is_active'=>true],['text'=>'Balaputradewa','is_correct'=>false,'is_active'=>true],['text'=>'Mulawarman','is_correct'=>true,'is_active'=>true]]);

        // IPS 32
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Raja terbesar Kerajaan Tarumanegara di Jawa Barat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Mulawarman','is_correct'=>false,'is_active'=>true],['text'=>'Airlangga','is_correct'=>false,'is_active'=>true],['text'=>'Purnawarman','is_correct'=>true,'is_active'=>true],['text'=>'Sri Jayanasa','is_correct'=>false,'is_active'=>true]]);

        // IPS 33
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kerajaan maritim bercorak Buddha yang berpusat di Palembang dan menguasai Selat Malaka adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kediri','is_correct'=>false,'is_active'=>true],['text'=>'Sriwijaya','is_correct'=>true,'is_active'=>true],['text'=>'Singasari','is_correct'=>false,'is_active'=>true],['text'=>'Mataram Kuno','is_correct'=>false,'is_active'=>true]]);

        // IPS 34
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kerajaan Majapahit mencapai puncak kejayaan pada masa pemerintahan raja ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Raden Wijaya','is_correct'=>false,'is_active'=>true],['text'=>'Kertanegara','is_correct'=>false,'is_active'=>true],['text'=>'Ken Arok','is_correct'=>false,'is_active'=>true],['text'=>'Hayam Wuruk','is_correct'=>true,'is_active'=>true]]);

        // IPS 35
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sumpah Palapa yang bertujuan menyatukan Nusantara diucapkan oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Gajah Mada','is_correct'=>true,'is_active'=>true],['text'=>'Hayam Wuruk','is_correct'=>false,'is_active'=>true],['text'=>'Mulawarman','is_correct'=>false,'is_active'=>true],['text'=>'Raden Wijaya','is_correct'=>false,'is_active'=>true]]);

        // IPS 36
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Candi Borobudur merupakan candi bercorak Buddha yang dibangun oleh dinasti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sanjaya','is_correct'=>false,'is_active'=>true],['text'=>'Singasari','is_correct'=>false,'is_active'=>true],['text'=>'Syailendra','is_correct'=>true,'is_active'=>true],['text'=>'Isyana','is_correct'=>false,'is_active'=>true]]);

        // IPS 37
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Candi Prambanan merupakan candi bercorak ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Buddha','is_correct'=>false,'is_active'=>true],['text'=>'Islam','is_correct'=>false,'is_active'=>true],['text'=>'Hindu','is_correct'=>true,'is_active'=>true],['text'=>'Konghucu','is_correct'=>false,'is_active'=>true]]);

        // IPS 38
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kerajaan Islam pertama di Indonesia adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Samudra Pasai','is_correct'=>true,'is_active'=>true],['text'=>'Demak','is_correct'=>false,'is_active'=>true],['text'=>'Mataram Islam','is_correct'=>false,'is_active'=>true],['text'=>'Banten','is_correct'=>false,'is_active'=>true]]);

        // IPS 39
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pendiri Kesultanan Demak adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sultan Agung','is_correct'=>false,'is_active'=>true],['text'=>'Sultan Hasanuddin','is_correct'=>false,'is_active'=>true],['text'=>'Sunan Gunung Jati','is_correct'=>false,'is_active'=>true],['text'=>'Raden Patah','is_correct'=>true,'is_active'=>true]]);

        // IPS 40
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sultan Agung dari Kerajaan Mataram Islam terkenal karena berusaha mengusir VOC dengan menyerang ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Malaka','is_correct'=>false,'is_active'=>true],['text'=>'Batavia','is_correct'=>true,'is_active'=>true],['text'=>'Makassar','is_correct'=>false,'is_active'=>true],['text'=>'Ambon','is_correct'=>false,'is_active'=>true]]);

        // IPS 41
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Raja Gowa yang dijuluki "Ayam Jantan dari Timur" adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sultan Ageng Tirtayasa','is_correct'=>false,'is_active'=>true],['text'=>'Sultan Iskandar Muda','is_correct'=>false,'is_active'=>true],['text'=>'Sultan Hasanuddin','is_correct'=>true,'is_active'=>true],['text'=>'Sultan Nuku','is_correct'=>false,'is_active'=>true]]);

        // IPS 42
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Para penyebar agama Islam di Pulau Jawa dikenal dengan sebutan Wali Songo. Kata "songo" berarti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'sembilan','is_correct'=>true,'is_active'=>true],['text'=>'tujuh','is_correct'=>false,'is_active'=>true],['text'=>'delapan','is_correct'=>false,'is_active'=>true],['text'=>'sepuluh','is_correct'=>false,'is_active'=>true]]);

        // IPS 43
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Perkumpulan dagang Belanda VOC didirikan pada tahun ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1596','is_correct'=>false,'is_active'=>true],['text'=>'1619','is_correct'=>false,'is_active'=>true],['text'=>'1799','is_correct'=>false,'is_active'=>true],['text'=>'1602','is_correct'=>true,'is_active'=>true]]);

        // IPS 44
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sistem Tanam Paksa (Cultuurstelsel) diberlakukan oleh Gubernur Jenderal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Daendels','is_correct'=>false,'is_active'=>true],['text'=>'Johannes van den Bosch','is_correct'=>true,'is_active'=>true],['text'=>'Thomas Stamford Raffles','is_correct'=>false,'is_active'=>true],['text'=>'J.P. Coen','is_correct'=>false,'is_active'=>true]]);

        // IPS 45
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pangeran Diponegoro memimpin perlawanan rakyat terhadap Belanda pada tahun 1825-1830 yang dikenal sebagai ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Perang Jawa','is_correct'=>true,'is_active'=>true],['text'=>'Perang Padri','is_correct'=>false,'is_active'=>true],['text'=>'Perang Aceh','is_correct'=>false,'is_active'=>true],['text'=>'Perang Banjar','is_correct'=>false,'is_active'=>true]]);

        // IPS 46
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Tokoh yang memimpin perlawanan rakyat Minangkabau dalam Perang Padri adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Pangeran Antasari','is_correct'=>false,'is_active'=>true],['text'=>'Teuku Umar','is_correct'=>false,'is_active'=>true],['text'=>'Tuanku Imam Bonjol','is_correct'=>true,'is_active'=>true],['text'=>'Pattimura','is_correct'=>false,'is_active'=>true]]);

        // IPS 47
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Organisasi pergerakan nasional pertama di Indonesia, Budi Utomo, didirikan pada tanggal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'28 Oktober 1928','is_correct'=>false,'is_active'=>true],['text'=>'20 Mei 1908','is_correct'=>true,'is_active'=>true],['text'=>'10 November 1945','is_correct'=>false,'is_active'=>true],['text'=>'9 Desember 1912','is_correct'=>false,'is_active'=>true]]);

        // IPS 48
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sumpah Pemuda diikrarkan pada tanggal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'20 Mei 1908','is_correct'=>false,'is_active'=>true],['text'=>'17 Agustus 1945','is_correct'=>false,'is_active'=>true],['text'=>'1 Juni 1945','is_correct'=>false,'is_active'=>true],['text'=>'28 Oktober 1928','is_correct'=>true,'is_active'=>true]]);

        // IPS 49
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Tiga butir isi Sumpah Pemuda adalah bertumpah darah, berbangsa, dan berbahasa ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'satu, Indonesia','is_correct'=>true,'is_active'=>true],['text'=>'daerah, masing-masing','is_correct'=>false,'is_active'=>true],['text'=>'persatuan, Melayu','is_correct'=>false,'is_active'=>true],['text'=>'satu, Jawa','is_correct'=>false,'is_active'=>true]]);

        // IPS 50
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pendudukan Jepang di Indonesia dimulai pada tahun ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1940','is_correct'=>false,'is_active'=>true],['text'=>'1945','is_correct'=>false,'is_active'=>true],['text'=>'1942','is_correct'=>true,'is_active'=>true],['text'=>'1938','is_correct'=>false,'is_active'=>true]]);

        // IPS 51
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kerja paksa tanpa upah pada masa pendudukan Jepang disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Tanam paksa','is_correct'=>false,'is_active'=>true],['text'=>'Romusha','is_correct'=>true,'is_active'=>true],['text'=>'Kerja bakti','is_correct'=>false,'is_active'=>true],['text'=>'Rodi','is_correct'=>false,'is_active'=>true]]);

        // IPS 52
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'ASEAN didirikan pada tanggal 8 Agustus 1967 di kota ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Jakarta','is_correct'=>false,'is_active'=>true],['text'=>'Kuala Lumpur','is_correct'=>false,'is_active'=>true],['text'=>'Bangkok','is_correct'=>true,'is_active'=>true],['text'=>'Manila','is_correct'=>false,'is_active'=>true]]);

        // IPS 53
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sekretariat ASEAN berkedudukan di kota ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Jakarta','is_correct'=>true,'is_active'=>true],['text'=>'Bangkok','is_correct'=>false,'is_active'=>true],['text'=>'Singapura','is_correct'=>false,'is_active'=>true],['text'=>'Hanoi','is_correct'=>false,'is_active'=>true]]);

        // IPS 54
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Lima negara pendiri ASEAN adalah Indonesia, Malaysia, Singapura, Filipina, dan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Vietnam','is_correct'=>false,'is_active'=>true],['text'=>'Myanmar','is_correct'=>false,'is_active'=>true],['text'=>'Kamboja','is_correct'=>false,'is_active'=>true],['text'=>'Thailand','is_correct'=>true,'is_active'=>true]]);

        // IPS 55
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pertempuran heroik di Surabaya pada tanggal 10 November 1945 diperingati sebagai Hari ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Pahlawan','is_correct'=>true,'is_active'=>true],['text'=>'Kebangkitan Nasional','is_correct'=>false,'is_active'=>true],['text'=>'Sumpah Pemuda','is_correct'=>false,'is_active'=>true],['text'=>'Kartini','is_correct'=>false,'is_active'=>true]]);

        // IPS 56
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Peristiwa pembakaran kota oleh rakyat agar tidak dimanfaatkan sekutu dan NICA pada tahun 1946 terjadi di kota ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Surabaya','is_correct'=>false,'is_active'=>true],['text'=>'Semarang','is_correct'=>false,'is_active'=>true],['text'=>'Bandung','is_correct'=>true,'is_active'=>true],['text'=>'Ambarawa','is_correct'=>false,'is_active'=>true]]);

        // IPS 57
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kegiatan bekerja sama tanpa pamrih untuk kepentingan bersama di lingkungan masyarakat disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Persaingan','is_correct'=>false,'is_active'=>true],['text'=>'Individualisme','is_correct'=>false,'is_active'=>true],['text'=>'Kompetisi','is_correct'=>false,'is_active'=>true],['text'=>'Gotong royong','is_correct'=>true,'is_active'=>true]]);

        // IPS 58
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Penduduk yang tinggal di daerah pantai pada umumnya bermata pencaharian sebagai ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'petani sawah','is_correct'=>false,'is_active'=>true],['text'=>'nelayan','is_correct'=>true,'is_active'=>true],['text'=>'peternak sapi perah','is_correct'=>false,'is_active'=>true],['text'=>'penambang batu bara','is_correct'=>false,'is_active'=>true]]);

        // IPS 59
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Cara menyelesaikan perbedaan pendapat dengan bermusyawarah untuk mencapai mufakat sesuai dengan sila ke-....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'empat','is_correct'=>true,'is_active'=>true],['text'=>'tiga','is_correct'=>false,'is_active'=>true],['text'=>'dua','is_correct'=>false,'is_active'=>true],['text'=>'lima','is_correct'=>false,'is_active'=>true]]);

        // IPS 60
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Contoh sikap yang mencerminkan sila kedua Pancasila adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'menjenguk teman yang sedang sakit','is_correct'=>true,'is_active'=>true],['text'=>'memaksakan kehendak dalam rapat','is_correct'=>false,'is_active'=>true],['text'=>'menolak bergaul dengan teman berbeda suku','is_correct'=>false,'is_active'=>true],['text'=>'mengabaikan hasil musyawarah','is_correct'=>false,'is_active'=>true]]);

                // IPS 61
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Gunung tertinggi di Indonesia adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Gunung Kerinci','is_correct'=>false,'is_active'=>true],['text'=>'Gunung Semeru','is_correct'=>false,'is_active'=>true],['text'=>'Puncak Jaya','is_correct'=>true,'is_active'=>true],['text'=>'Gunung Rinjani','is_correct'=>false,'is_active'=>true]]);

        // IPS 62
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Danau terbesar di Indonesia yang terletak di Sumatra Utara adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Danau Toba','is_correct'=>true,'is_active'=>true],['text'=>'Danau Singkarak','is_correct'=>false,'is_active'=>true],['text'=>'Danau Maninjau','is_correct'=>false,'is_active'=>true],['text'=>'Danau Poso','is_correct'=>false,'is_active'=>true]]);

        // IPS 63
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Ibu kota Provinsi Sumatra Utara adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Padang','is_correct'=>false,'is_active'=>true],['text'=>'Pekanbaru','is_correct'=>false,'is_active'=>true],['text'=>'Palembang','is_correct'=>false,'is_active'=>true],['text'=>'Medan','is_correct'=>true,'is_active'=>true]]);

        // IPS 64
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pulau dengan jumlah penduduk terbanyak di Indonesia adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sumatra','is_correct'=>false,'is_active'=>true],['text'=>'Jawa','is_correct'=>true,'is_active'=>true],['text'=>'Sulawesi','is_correct'=>false,'is_active'=>true],['text'=>'Kalimantan','is_correct'=>false,'is_active'=>true]]);

        // IPS 65
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Indonesia memiliki dua musim, yaitu ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'musim semi dan musim gugur','is_correct'=>false,'is_active'=>true],['text'=>'musim panas dan musim dingin','is_correct'=>false,'is_active'=>true],['text'=>'musim hujan dan musim kemarau','is_correct'=>true,'is_active'=>true],['text'=>'musim salju dan musim panas','is_correct'=>false,'is_active'=>true]]);

        // IPS 66
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Angin yang membawa banyak uap air dan menyebabkan musim hujan di Indonesia adalah angin ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'muson barat','is_correct'=>true,'is_active'=>true],['text'=>'muson timur','is_correct'=>false,'is_active'=>true],['text'=>'angin darat','is_correct'=>false,'is_active'=>true],['text'=>'angin gunung','is_correct'=>false,'is_active'=>true]]);

        // IPS 67
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Iklim yang dimiliki Indonesia karena letaknya di sekitar garis khatulistiwa adalah iklim ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kutub','is_correct'=>false,'is_active'=>true],['text'=>'sedang','is_correct'=>false,'is_active'=>true],['text'=>'subtropis','is_correct'=>false,'is_active'=>true],['text'=>'tropis','is_correct'=>true,'is_active'=>true]]);

        // IPS 68
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Jika di Jakarta pukul 10.00 WIB, maka di Makassar waktunya adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'09.00 WITA','is_correct'=>false,'is_active'=>true],['text'=>'11.00 WITA','is_correct'=>true,'is_active'=>true],['text'=>'12.00 WITA','is_correct'=>false,'is_active'=>true],['text'=>'10.00 WITA','is_correct'=>false,'is_active'=>true]]);

        // IPS 69
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Jika di Bandung pukul 08.00 WIB, maka di Jayapura waktunya adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'09.00 WIT','is_correct'=>false,'is_active'=>true],['text'=>'11.00 WIT','is_correct'=>false,'is_active'=>true],['text'=>'10.00 WIT','is_correct'=>true,'is_active'=>true],['text'=>'06.00 WIT','is_correct'=>false,'is_active'=>true]]);

        // IPS 70
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kota berikut yang termasuk wilayah Waktu Indonesia Tengah (WITA) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Denpasar','is_correct'=>true,'is_active'=>true],['text'=>'Semarang','is_correct'=>false,'is_active'=>true],['text'=>'Ambon','is_correct'=>false,'is_active'=>true],['text'=>'Pontianak','is_correct'=>false,'is_active'=>true]]);

        // IPS 71
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pada peta, warna biru biasanya digunakan untuk menunjukkan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'dataran tinggi','is_correct'=>false,'is_active'=>true],['text'=>'pegunungan','is_correct'=>false,'is_active'=>true],['text'=>'perairan','is_correct'=>true,'is_active'=>true],['text'=>'dataran rendah','is_correct'=>false,'is_active'=>true]]);

        // IPS 72
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pada peta, warna hijau biasanya menunjukkan daerah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'dataran rendah','is_correct'=>true,'is_active'=>true],['text'=>'laut dalam','is_correct'=>false,'is_active'=>true],['text'=>'puncak gunung bersalju','is_correct'=>false,'is_active'=>true],['text'=>'gurun pasir','is_correct'=>false,'is_active'=>true]]);

        // IPS 73
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Jarak dua kota pada peta 5 cm. Jika skala peta 1 : 2.000.000, jarak sebenarnya kedua kota adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'10 km','is_correct'=>false,'is_active'=>true],['text'=>'50 km','is_correct'=>false,'is_active'=>true],['text'=>'200 km','is_correct'=>false,'is_active'=>true],['text'=>'100 km','is_correct'=>true,'is_active'=>true]]);

        // IPS 74
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Jarak sebenarnya dua kota 60 km. Jika skala peta 1 : 1.500.000, jarak kedua kota pada peta adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3 cm','is_correct'=>false,'is_active'=>true],['text'=>'4 cm','is_correct'=>true,'is_active'=>true],['text'=>'5 cm','is_correct'=>false,'is_active'=>true],['text'=>'6 cm','is_correct'=>false,'is_active'=>true]]);

        // IPS 75
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Alat yang digunakan untuk menentukan arah mata angin adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'termometer','is_correct'=>false,'is_active'=>true],['text'=>'barometer','is_correct'=>false,'is_active'=>true],['text'=>'kompas','is_correct'=>true,'is_active'=>true],['text'=>'higrometer','is_correct'=>false,'is_active'=>true]]);

        // IPS 76
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Garis bujur 0 derajat yang melewati kota Greenwich di Inggris disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'meridian utama','is_correct'=>true,'is_active'=>true],['text'=>'garis khatulistiwa','is_correct'=>false,'is_active'=>true],['text'=>'garis balik utara','is_correct'=>false,'is_active'=>true],['text'=>'garis balik selatan','is_correct'=>false,'is_active'=>true]]);

        // IPS 77
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Letak astronomis Indonesia adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'6° LU - 11° LS dan 95° BT - 141° BT','is_correct'=>true,'is_active'=>true],['text'=>'11° LU - 6° LS dan 95° BB - 141° BB','is_correct'=>false,'is_active'=>true],['text'=>'6° LS - 11° LU dan 141° BT - 180° BT','is_correct'=>false,'is_active'=>true],['text'=>'0° - 6° LU dan 95° BT - 105° BT','is_correct'=>false,'is_active'=>true]]);

        // IPS 78
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Negara yang berbatasan darat langsung dengan Provinsi Papua adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Australia','is_correct'=>false,'is_active'=>true],['text'=>'Timor Leste','is_correct'=>false,'is_active'=>true],['text'=>'Papua Nugini','is_correct'=>true,'is_active'=>true],['text'=>'Filipina','is_correct'=>false,'is_active'=>true]]);

        // IPS 79
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Berikut ini yang termasuk pelaku kegiatan ekonomi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'rumah tangga, perusahaan, dan pemerintah','is_correct'=>true,'is_active'=>true],['text'=>'sungai, gunung, dan laut','is_correct'=>false,'is_active'=>true],['text'=>'sawah, ladang, dan hutan','is_correct'=>false,'is_active'=>true],['text'=>'jalan, jembatan, dan pelabuhan','is_correct'=>false,'is_active'=>true]]);

        // IPS 80
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Tokoh yang dijuluki Bapak Koperasi Indonesia adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ir. Soekarno','is_correct'=>false,'is_active'=>true],['text'=>'Ki Hajar Dewantara','is_correct'=>false,'is_active'=>true],['text'=>'Mohammad Hatta','is_correct'=>true,'is_active'=>true],['text'=>'Sutan Sjahrir','is_correct'=>false,'is_active'=>true]]);

        // IPS 81
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Hari Koperasi Nasional diperingati setiap tanggal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'12 Juli','is_correct'=>true,'is_active'=>true],['text'=>'12 Agustus','is_correct'=>false,'is_active'=>true],['text'=>'21 April','is_correct'=>false,'is_active'=>true],['text'=>'2 Mei','is_correct'=>false,'is_active'=>true]]);

        // IPS 82
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Badan usaha yang modalnya seluruhnya atau sebagian besar dimiliki oleh pemerintah disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'BUMS','is_correct'=>false,'is_active'=>true],['text'=>'BUMN','is_correct'=>true,'is_active'=>true],['text'=>'koperasi','is_correct'=>false,'is_active'=>true],['text'=>'usaha perorangan','is_correct'=>false,'is_active'=>true]]);

        // IPS 83
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Ciri utama kegiatan jual beli di pasar tradisional adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'harga pasti dan tidak dapat ditawar','is_correct'=>false,'is_active'=>true],['text'=>'terjadi tawar-menawar antara penjual dan pembeli','is_correct'=>true,'is_active'=>true],['text'=>'pembeli melayani diri sendiri','is_correct'=>false,'is_active'=>true],['text'=>'transaksi dilakukan secara daring','is_correct'=>false,'is_active'=>true]]);

        // IPS 84
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kegiatan menjual barang produksi dalam negeri ke luar negeri disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'impor','is_correct'=>false,'is_active'=>true],['text'=>'ekspor','is_correct'=>true,'is_active'=>true],['text'=>'barter','is_correct'=>false,'is_active'=>true],['text'=>'subsidi','is_correct'=>false,'is_active'=>true]]);

        // IPS 85
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kegiatan membeli barang dari luar negeri untuk dijual atau digunakan di dalam negeri disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'ekspor','is_correct'=>false,'is_active'=>true],['text'=>'produksi','is_correct'=>false,'is_active'=>true],['text'=>'konsumsi','is_correct'=>false,'is_active'=>true],['text'=>'impor','is_correct'=>true,'is_active'=>true]]);

        // IPS 86
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sumber daya alam yang termasuk dapat diperbarui adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'minyak bumi','is_correct'=>false,'is_active'=>true],['text'=>'batu bara','is_correct'=>false,'is_active'=>true],['text'=>'hutan','is_correct'=>true,'is_active'=>true],['text'=>'gas alam','is_correct'=>false,'is_active'=>true]]);

        // IPS 87
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sumber daya alam yang tidak dapat diperbarui adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'batu bara','is_correct'=>true,'is_active'=>true],['text'=>'ikan','is_correct'=>false,'is_active'=>true],['text'=>'tanaman padi','is_correct'=>false,'is_active'=>true],['text'=>'kayu jati','is_correct'=>false,'is_active'=>true]]);

        // IPS 88
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Uang kertas dan uang logam termasuk jenis uang ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'giral','is_correct'=>false,'is_active'=>true],['text'=>'kartal','is_correct'=>true,'is_active'=>true],['text'=>'elektronik','is_correct'=>false,'is_active'=>true],['text'=>'kuasi','is_correct'=>false,'is_active'=>true]]);

        // IPS 89
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Lembaga yang berwenang menerbitkan dan mengedarkan uang rupiah adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Bank Rakyat Indonesia','is_correct'=>false,'is_active'=>true],['text'=>'Bank Mandiri','is_correct'=>false,'is_active'=>true],['text'=>'Kementerian Keuangan','is_correct'=>false,'is_active'=>true],['text'=>'Bank Indonesia','is_correct'=>true,'is_active'=>true]]);

        // IPS 90
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Salah satu manfaat menabung di bank adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'uang lebih aman dan mendapat bunga','is_correct'=>true,'is_active'=>true],['text'=>'uang pasti habis dibelanjakan','is_correct'=>false,'is_active'=>true],['text'=>'terhindar dari kewajiban membayar pajak','is_correct'=>false,'is_active'=>true],['text'=>'nilai uang selalu berlipat tanpa bunga','is_correct'=>false,'is_active'=>true]]);

        // IPS 91
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Raja terkenal dari Kerajaan Kediri yang meramalkan Jayabaya dalam Jangka Jayabaya adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Raja Sri Jayabhaya','is_correct'=>true,'is_active'=>true],['text'=>'Raja Airlangga','is_correct'=>false,'is_active'=>true],['text'=>'Raja Kertajaya','is_correct'=>false,'is_active'=>true],['text'=>'Raja Anusapati','is_correct'=>false,'is_active'=>true]]);

        // IPS 92
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pendiri Kerajaan Singasari adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Raden Wijaya','is_correct'=>false,'is_active'=>true],['text'=>'Kertanegara','is_correct'=>false,'is_active'=>true],['text'=>'Ken Arok','is_correct'=>true,'is_active'=>true],['text'=>'Tunggul Ametung','is_correct'=>false,'is_active'=>true]]);

        // IPS 93
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pendiri Kerajaan Majapahit adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Raden Wijaya','is_correct'=>true,'is_active'=>true],['text'=>'Hayam Wuruk','is_correct'=>false,'is_active'=>true],['text'=>'Gajah Mada','is_correct'=>false,'is_active'=>true],['text'=>'Ken Arok','is_correct'=>false,'is_active'=>true]]);

        // IPS 94
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Ekspedisi Pamalayu untuk memperluas pengaruh ke Sumatra dilakukan pada masa pemerintahan raja ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ken Arok','is_correct'=>false,'is_active'=>true],['text'=>'Kertanegara','is_correct'=>true,'is_active'=>true],['text'=>'Jayanegara','is_correct'=>false,'is_active'=>true],['text'=>'Airlangga','is_correct'=>false,'is_active'=>true]]);

        // IPS 95
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kitab Negarakertagama yang menceritakan kejayaan Majapahit ditulis oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Mpu Tantular','is_correct'=>false,'is_active'=>true],['text'=>'Mpu Sindok','is_correct'=>false,'is_active'=>true],['text'=>'Mpu Prapanca','is_correct'=>true,'is_active'=>true],['text'=>'Mpu Kanwa','is_correct'=>false,'is_active'=>true]]);

        // IPS 96
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Semboyan Bhinneka Tunggal Ika terdapat dalam kitab Sutasoma karangan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Mpu Tantular','is_correct'=>true,'is_active'=>true],['text'=>'Mpu Prapanca','is_correct'=>false,'is_active'=>true],['text'=>'Mpu Sindok','is_correct'=>false,'is_active'=>true],['text'=>'Mpu Panuluh','is_correct'=>false,'is_active'=>true]]);

        // IPS 97
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Candi Borobudur terletak di kabupaten ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sleman','is_correct'=>false,'is_active'=>true],['text'=>'Klaten','is_correct'=>false,'is_active'=>true],['text'=>'Magelang','is_correct'=>true,'is_active'=>true],['text'=>'Bantul','is_correct'=>false,'is_active'=>true]]);

        // IPS 98
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Prasasti Kedukan Bukit merupakan peninggalan kerajaan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kutai','is_correct'=>false,'is_active'=>true],['text'=>'Tarumanegara','is_correct'=>false,'is_active'=>true],['text'=>'Kalingga','is_correct'=>false,'is_active'=>true],['text'=>'Sriwijaya','is_correct'=>true,'is_active'=>true]]);

        // IPS 99
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Agama Hindu dan Buddha masuk ke Indonesia terutama melalui kegiatan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'perdagangan','is_correct'=>true,'is_active'=>true],['text'=>'peperangan','is_correct'=>false,'is_active'=>true],['text'=>'penjajahan','is_correct'=>false,'is_active'=>true],['text'=>'pertanian','is_correct'=>false,'is_active'=>true]]);

        // IPS 100
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Raja Airlangga membagi Kerajaan Kahuripan menjadi dua, yaitu ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Singasari dan Kediri','is_correct'=>false,'is_active'=>true],['text'=>'Jenggala dan Panjalu','is_correct'=>true,'is_active'=>true],['text'=>'Majapahit dan Pajajaran','is_correct'=>false,'is_active'=>true],['text'=>'Mataram dan Kalingga','is_correct'=>false,'is_active'=>true]]);

        // IPS 101
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Agama Islam masuk ke Indonesia dibawa oleh para pedagang dari ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Eropa dan Amerika','is_correct'=>false,'is_active'=>true],['text'=>'Gujarat, Arab, dan Persia','is_correct'=>true,'is_active'=>true],['text'=>'Jepang dan Korea','is_correct'=>false,'is_active'=>true],['text'=>'Australia dan Selandia Baru','is_correct'=>false,'is_active'=>true]]);

        // IPS 102
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kerajaan Aceh Darussalam mencapai puncak kejayaan pada masa Sultan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Iskandar Muda','is_correct'=>true,'is_active'=>true],['text'=>'Hasanuddin','is_correct'=>false,'is_active'=>true],['text'=>'Ageng Tirtayasa','is_correct'=>false,'is_active'=>true],['text'=>'Baabullah','is_correct'=>false,'is_active'=>true]]);

        // IPS 103
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sultan Baabullah adalah raja terkenal dari Kesultanan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Gowa','is_correct'=>false,'is_active'=>true],['text'=>'Banten','is_correct'=>false,'is_active'=>true],['text'=>'Demak','is_correct'=>false,'is_active'=>true],['text'=>'Ternate','is_correct'=>true,'is_active'=>true]]);

        // IPS 104
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sultan Ageng Tirtayasa memerintah Kesultanan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Banten','is_correct'=>true,'is_active'=>true],['text'=>'Cirebon','is_correct'=>false,'is_active'=>true],['text'=>'Mataram Islam','is_correct'=>false,'is_active'=>true],['text'=>'Aceh','is_correct'=>false,'is_active'=>true]]);

        // IPS 105
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Bangsa Eropa yang pertama kali tiba di Maluku untuk mencari rempah-rempah adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Belanda','is_correct'=>false,'is_active'=>true],['text'=>'Portugis','is_correct'=>true,'is_active'=>true],['text'=>'Inggris','is_correct'=>false,'is_active'=>true],['text'=>'Jepang','is_correct'=>false,'is_active'=>true]]);

        // IPS 106
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pelaut Belanda yang pertama kali mendarat di Banten pada tahun 1596 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Vasco da Gama','is_correct'=>false,'is_active'=>true],['text'=>'Cornelis de Houtman','is_correct'=>true,'is_active'=>true],['text'=>'Christopher Columbus','is_correct'=>false,'is_active'=>true],['text'=>'Ferdinand Magellan','is_correct'=>false,'is_active'=>true]]);

        // IPS 107
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Jalan Raya Pos yang membentang dari Anyer sampai Panarukan dibangun atas perintah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Thomas Stamford Raffles','is_correct'=>false,'is_active'=>true],['text'=>'Herman Willem Daendels','is_correct'=>true,'is_active'=>true],['text'=>'J.P. Coen','is_correct'=>false,'is_active'=>true],['text'=>'Van den Bosch','is_correct'=>false,'is_active'=>true]]);

        // IPS 108
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Thomas Stamford Raffles memerintah Pulau Jawa atas nama pemerintah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Belanda','is_correct'=>false,'is_active'=>true],['text'=>'Portugis','is_correct'=>false,'is_active'=>true],['text'=>'Jepang','is_correct'=>false,'is_active'=>true],['text'=>'Inggris','is_correct'=>true,'is_active'=>true]]);

        // IPS 109
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Tiga program Politik Etis (Balas Budi) adalah irigasi, edukasi, dan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'emigrasi','is_correct'=>false,'is_active'=>true],['text'=>'imigrasi','is_correct'=>false,'is_active'=>true],['text'=>'transmigrasi','is_correct'=>true,'is_active'=>true],['text'=>'urbanisasi','is_correct'=>false,'is_active'=>true]]);

        // IPS 110
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pahlawan wanita asal Aceh yang gigih melawan Belanda bersama suaminya, Teuku Umar, adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Martha Christina Tiahahu','is_correct'=>false,'is_active'=>true],['text'=>'Cut Nyak Dhien','is_correct'=>true,'is_active'=>true],['text'=>'R.A. Kartini','is_correct'=>false,'is_active'=>true],['text'=>'Dewi Sartika','is_correct'=>false,'is_active'=>true]]);

        // IPS 111
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Perlawanan rakyat Maluku terhadap Belanda pada tahun 1817 dipimpin oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Pattimura','is_correct'=>true,'is_active'=>true],['text'=>'Sultan Nuku','is_correct'=>false,'is_active'=>true],['text'=>'Pangeran Antasari','is_correct'=>false,'is_active'=>true],['text'=>'Sisingamangaraja XII','is_correct'=>false,'is_active'=>true]]);

        // IPS 112
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pangeran Antasari memimpin perlawanan rakyat melawan Belanda di daerah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sumatra Barat','is_correct'=>false,'is_active'=>true],['text'=>'Kalimantan Selatan','is_correct'=>true,'is_active'=>true],['text'=>'Sulawesi Selatan','is_correct'=>false,'is_active'=>true],['text'=>'Jawa Tengah','is_correct'=>false,'is_active'=>true]]);

        // IPS 113
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'R.A. Kartini dikenal sebagai pelopor perjuangan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kemerdekaan bersenjata','is_correct'=>false,'is_active'=>true],['text'=>'kemajuan pendidikan dan emansipasi perempuan','is_correct'=>true,'is_active'=>true],['text'=>'perdagangan rempah-rempah','is_correct'=>false,'is_active'=>true],['text'=>'pembentukan partai politik','is_correct'=>false,'is_active'=>true]]);

        // IPS 114
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Ki Hajar Dewantara mendirikan perguruan yang bernama ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Muhammadiyah','is_correct'=>false,'is_active'=>true],['text'=>'Taman Siswa','is_correct'=>true,'is_active'=>true],['text'=>'INS Kayutanam','is_correct'=>false,'is_active'=>true],['text'=>'Sekolah Kartini','is_correct'=>false,'is_active'=>true]]);

        // IPS 115
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Tanggal 20 Mei diperingati setiap tahun sebagai Hari ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sumpah Pemuda','is_correct'=>false,'is_active'=>true],['text'=>'Kebangkitan Nasional','is_correct'=>true,'is_active'=>true],['text'=>'Pahlawan','is_correct'=>false,'is_active'=>true],['text'=>'Pendidikan Nasional','is_correct'=>false,'is_active'=>true]]);

        // IPS 116
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Serikat Dagang Islam (SDI) didirikan oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'H. Samanhudi','is_correct'=>true,'is_active'=>true],['text'=>'dr. Soetomo','is_correct'=>false,'is_active'=>true],['text'=>'Ki Hajar Dewantara','is_correct'=>false,'is_active'=>true],['text'=>'Douwes Dekker','is_correct'=>false,'is_active'=>true]]);

        // IPS 117
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Tiga Serangkai pendiri Indische Partij adalah Douwes Dekker, Cipto Mangunkusumo, dan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ir. Soekarno','is_correct'=>false,'is_active'=>true],['text'=>'Ki Hajar Dewantara','is_correct'=>true,'is_active'=>true],['text'=>'dr. Soetomo','is_correct'=>false,'is_active'=>true],['text'=>'Mohammad Hatta','is_correct'=>false,'is_active'=>true]]);

        // IPS 118
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Lagu Indonesia Raya pertama kali dikumandangkan pada Kongres Pemuda II oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ismail Marzuki','is_correct'=>false,'is_active'=>true],['text'=>'W.R. Supratman','is_correct'=>true,'is_active'=>true],['text'=>'H. Mutahar','is_correct'=>false,'is_active'=>true],['text'=>'C. Simanjuntak','is_correct'=>false,'is_active'=>true]]);

        // IPS 119
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'BPUPKI dibentuk oleh pemerintah pendudukan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Belanda','is_correct'=>false,'is_active'=>true],['text'=>'Inggris','is_correct'=>false,'is_active'=>true],['text'=>'Jepang','is_correct'=>true,'is_active'=>true],['text'=>'Portugis','is_correct'=>false,'is_active'=>true]]);

        // IPS 120
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Ketua Panitia Persiapan Kemerdekaan Indonesia (PPKI) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ir. Soekarno','is_correct'=>true,'is_active'=>true],['text'=>'Mohammad Hatta','is_correct'=>false,'is_active'=>true],['text'=>'Achmad Soebardjo','is_correct'=>false,'is_active'=>true],['text'=>'Radjiman Wedyodiningrat','is_correct'=>false,'is_active'=>true]]);

        // IPS 121
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Para pemuda membawa Soekarno dan Hatta ke Rengasdengklok dengan tujuan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'merayakan kemerdekaan','is_correct'=>false,'is_active'=>true],['text'=>'menyusun undang-undang dasar','is_correct'=>false,'is_active'=>true],['text'=>'mendesak agar segera memproklamasikan kemerdekaan','is_correct'=>true,'is_active'=>true],['text'=>'menyerahkan diri kepada Jepang','is_correct'=>false,'is_active'=>true]]);

        // IPS 122
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Proklamasi Kemerdekaan Indonesia dibacakan di rumah Ir. Soekarno di Jalan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Pegangsaan Timur No. 56','is_correct'=>true,'is_active'=>true],['text'=>'Merdeka Barat No. 17','is_correct'=>false,'is_active'=>true],['text'=>'Sudirman No. 45','is_correct'=>false,'is_active'=>true],['text'=>'Diponegoro No. 10','is_correct'=>false,'is_active'=>true]]);

        // IPS 123
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Bendera Sang Saka Merah Putih yang dikibarkan saat Proklamasi dijahit oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Fatmawati','is_correct'=>true,'is_active'=>true],['text'=>'S.K. Trimurti','is_correct'=>false,'is_active'=>true],['text'=>'Rahmi Hatta','is_correct'=>false,'is_active'=>true],['text'=>'Cut Nyak Meutia','is_correct'=>false,'is_active'=>true]]);

        // IPS 124
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Presiden dan Wakil Presiden pertama Republik Indonesia dipilih oleh PPKI pada tanggal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'17 Agustus 1945','is_correct'=>false,'is_active'=>true],['text'=>'19 Agustus 1945','is_correct'=>false,'is_active'=>true],['text'=>'18 Agustus 1945','is_correct'=>true,'is_active'=>true],['text'=>'22 Agustus 1945','is_correct'=>false,'is_active'=>true]]);

        // IPS 125
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Undang-Undang Dasar 1945 disahkan pada tanggal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'18 Agustus 1945','is_correct'=>true,'is_active'=>true],['text'=>'17 Agustus 1945','is_correct'=>false,'is_active'=>true],['text'=>'1 Juni 1945','is_correct'=>false,'is_active'=>true],['text'=>'29 Mei 1945','is_correct'=>false,'is_active'=>true]]);

        // IPS 126
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pertempuran Ambarawa pada tahun 1945 dipimpin oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kolonel Soedirman','is_correct'=>true,'is_active'=>true],['text'=>'Bung Tomo','is_correct'=>false,'is_active'=>true],['text'=>'A.H. Nasution','is_correct'=>false,'is_active'=>true],['text'=>'I Gusti Ngurah Rai','is_correct'=>false,'is_active'=>true]]);

        // IPS 127
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Perang Puputan Margarana melawan Belanda pada tahun 1946 dipimpin oleh ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Bung Tomo','is_correct'=>false,'is_active'=>true],['text'=>'Robert Wolter Monginsidi','is_correct'=>false,'is_active'=>true],['text'=>'Kolonel Soedirman','is_correct'=>false,'is_active'=>true],['text'=>'I Gusti Ngurah Rai','is_correct'=>true,'is_active'=>true]]);

        // IPS 128
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Belanda mengakui kedaulatan Indonesia melalui Konferensi Meja Bundar pada tanggal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'27 Desember 1949','is_correct'=>true,'is_active'=>true],['text'=>'17 Agustus 1950','is_correct'=>false,'is_active'=>true],['text'=>'27 Desember 1945','is_correct'=>false,'is_active'=>true],['text'=>'23 Agustus 1949','is_correct'=>false,'is_active'=>true]]);

        // IPS 129
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Konferensi Asia Afrika (KAA) pertama diselenggarakan pada tahun 1955 di kota ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Jakarta','is_correct'=>false,'is_active'=>true],['text'=>'Yogyakarta','is_correct'=>false,'is_active'=>true],['text'=>'Bandung','is_correct'=>true,'is_active'=>true],['text'=>'Surabaya','is_correct'=>false,'is_active'=>true]]);

        // IPS 130
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Lembaga negara yang bertugas membuat undang-undang bersama presiden adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Mahkamah Agung','is_correct'=>false,'is_active'=>true],['text'=>'Dewan Perwakilan Rakyat','is_correct'=>true,'is_active'=>true],['text'=>'Badan Pemeriksa Keuangan','is_correct'=>false,'is_active'=>true],['text'=>'Mahkamah Konstitusi','is_correct'=>false,'is_active'=>true]]);

        // IPS 131
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pemilihan umum di Indonesia untuk memilih presiden dilaksanakan setiap ... tahun sekali.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tiga','is_correct'=>false,'is_active'=>true],['text'=>'empat','is_correct'=>false,'is_active'=>true],['text'=>'enam','is_correct'=>false,'is_active'=>true],['text'=>'lima','is_correct'=>true,'is_active'=>true]]);

        // IPS 132
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kepala pemerintahan di tingkat provinsi disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'bupati','is_correct'=>false,'is_active'=>true],['text'=>'gubernur','is_correct'=>true,'is_active'=>true],['text'=>'wali kota','is_correct'=>false,'is_active'=>true],['text'=>'camat','is_correct'=>false,'is_active'=>true]]);

        // IPS 133
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Salah satu kewajiban siswa di sekolah adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'menaati tata tertib sekolah','is_correct'=>true,'is_active'=>true],['text'=>'mendapat pelajaran dari guru','is_correct'=>false,'is_active'=>true],['text'=>'menggunakan fasilitas perpustakaan','is_correct'=>false,'is_active'=>true],['text'=>'menerima beasiswa','is_correct'=>false,'is_active'=>true]]);

        // IPS 134
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Hak setiap warga negara Indonesia untuk memperoleh pengajaran diatur dalam UUD 1945 pasal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'27','is_correct'=>false,'is_active'=>true],['text'=>'31','is_correct'=>true,'is_active'=>true],['text'=>'33','is_correct'=>false,'is_active'=>true],['text'=>'29','is_correct'=>false,'is_active'=>true]]);

        // IPS 135
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Semboyan Bhinneka Tunggal Ika mengandung arti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'bersatu kita teguh, bercerai kita runtuh','is_correct'=>false,'is_active'=>true],['text'=>'berbeda-beda tetapi tetap satu jua','is_correct'=>true,'is_active'=>true],['text'=>'satu nusa, satu bangsa','is_correct'=>false,'is_active'=>true],['text'=>'gotong royong membangun negeri','is_correct'=>false,'is_active'=>true]]);

        // IPS 136
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Rumah Gadang merupakan rumah adat dari provinsi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Sumatra Barat','is_correct'=>true,'is_active'=>true],['text'=>'Sumatra Utara','is_correct'=>false,'is_active'=>true],['text'=>'Aceh','is_correct'=>false,'is_active'=>true],['text'=>'Riau','is_correct'=>false,'is_active'=>true]]);

        // IPS 137
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Tari Saman berasal dari daerah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Bali','is_correct'=>false,'is_active'=>true],['text'=>'Jawa Barat','is_correct'=>false,'is_active'=>true],['text'=>'Aceh','is_correct'=>true,'is_active'=>true],['text'=>'Papua','is_correct'=>false,'is_active'=>true]]);

        // IPS 138
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Rumah adat Joglo berasal dari daerah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Jawa Tengah','is_correct'=>true,'is_active'=>true],['text'=>'Sulawesi Selatan','is_correct'=>false,'is_active'=>true],['text'=>'Nusa Tenggara Timur','is_correct'=>false,'is_active'=>true],['text'=>'Kalimantan Barat','is_correct'=>false,'is_active'=>true]]);

        // IPS 139
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Alat musik tradisional angklung berasal dari daerah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Jawa Timur','is_correct'=>false,'is_active'=>true],['text'=>'Jawa Barat','is_correct'=>true,'is_active'=>true],['text'=>'Sumatra Selatan','is_correct'=>false,'is_active'=>true],['text'=>'Maluku','is_correct'=>false,'is_active'=>true]]);

        // IPS 140
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kain tenun tradisional ulos berasal dari suku ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Dayak','is_correct'=>false,'is_active'=>true],['text'=>'Batak','is_correct'=>true,'is_active'=>true],['text'=>'Bugis','is_correct'=>false,'is_active'=>true],['text'=>'Asmat','is_correct'=>false,'is_active'=>true]]);

        // IPS 141
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Sikap yang tepat dalam menghadapi keragaman suku dan budaya di Indonesia adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'menghargai dan menghormati perbedaan','is_correct'=>true,'is_active'=>true],['text'=>'menganggap budaya sendiri paling unggul','is_correct'=>false,'is_active'=>true],['text'=>'menghindari pergaulan dengan suku lain','is_correct'=>false,'is_active'=>true],['text'=>'memaksa orang lain mengikuti budaya kita','is_correct'=>false,'is_active'=>true]]);

        // IPS 142
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Negara Brunei Darussalam resmi menjadi anggota ASEAN pada tahun ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1967','is_correct'=>false,'is_active'=>true],['text'=>'1984','is_correct'=>true,'is_active'=>true],['text'=>'1995','is_correct'=>false,'is_active'=>true],['text'=>'1999','is_correct'=>false,'is_active'=>true]]);

        // IPS 143
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Ibu kota negara Filipina adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Manila','is_correct'=>true,'is_active'=>true],['text'=>'Hanoi','is_correct'=>false,'is_active'=>true],['text'=>'Bangkok','is_correct'=>false,'is_active'=>true],['text'=>'Vientiane','is_correct'=>false,'is_active'=>true]]);

        // IPS 144
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Ibu kota negara Vietnam adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Phnom Penh','is_correct'=>false,'is_active'=>true],['text'=>'Hanoi','is_correct'=>true,'is_active'=>true],['text'=>'Yangon','is_correct'=>false,'is_active'=>true],['text'=>'Kuala Lumpur','is_correct'=>false,'is_active'=>true]]);

        // IPS 145
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Hari ASEAN diperingati setiap tanggal ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'8 Agustus','is_correct'=>true,'is_active'=>true],['text'=>'17 Agustus','is_correct'=>false,'is_active'=>true],['text'=>'8 Maret','is_correct'=>false,'is_active'=>true],['text'=>'1 Oktober','is_correct'=>false,'is_active'=>true]]);

        // IPS 146
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Salah satu tujuan dibentuknya ASEAN adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'menguasai wilayah negara tetangga','is_correct'=>false,'is_active'=>true],['text'=>'mempercepat pertumbuhan ekonomi, sosial, dan budaya di kawasan','is_correct'=>true,'is_active'=>true],['text'=>'membentuk pasukan militer bersama untuk menyerang','is_correct'=>false,'is_active'=>true],['text'=>'menghapus perbedaan bahasa antarnegara','is_correct'=>false,'is_active'=>true]]);

        // IPS 147
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Salah satu penyebab banjir di perkotaan adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'menanam pohon di daerah resapan','is_correct'=>false,'is_active'=>true],['text'=>'membersihkan selokan secara rutin','is_correct'=>false,'is_active'=>true],['text'=>'membuat sumur resapan','is_correct'=>false,'is_active'=>true],['text'=>'membuang sampah sembarangan ke sungai','is_correct'=>true,'is_active'=>true]]);

        // IPS 148
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Kegiatan menanam kembali hutan yang telah gundul disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'reboisasi','is_correct'=>true,'is_active'=>true],['text'=>'erosi','is_correct'=>false,'is_active'=>true],['text'=>'abrasi','is_correct'=>false,'is_active'=>true],['text'=>'urbanisasi','is_correct'=>false,'is_active'=>true]]);

        // IPS 149
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Pengikisan lapisan tanah oleh air atau angin disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'sedimentasi','is_correct'=>false,'is_active'=>true],['text'=>'erosi','is_correct'=>true,'is_active'=>true],['text'=>'reboisasi','is_correct'=>false,'is_active'=>true],['text'=>'irigasi','is_correct'=>false,'is_active'=>true]]);

        // IPS 150
        $q = Question::create(['subject_id'=>$ips->id,'payload'=>'Perpindahan penduduk dari desa ke kota disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'transmigrasi','is_correct'=>false,'is_active'=>true],['text'=>'emigrasi','is_correct'=>false,'is_active'=>true],['text'=>'urbanisasi','is_correct'=>true,'is_active'=>true],['text'=>'imigrasi','is_correct'=>false,'is_active'=>true]]);

                // ===================== MATEMATIKA (1-150) =====================

        // MTK 1
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 356 + 289 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'645','is_correct'=>true,'is_active'=>true],['text'=>'635','is_correct'=>false,'is_active'=>true],['text'=>'655','is_correct'=>false,'is_active'=>true],['text'=>'745','is_correct'=>false,'is_active'=>true]]);

        // MTK 2
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 1.204 - 758 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'456','is_correct'=>false,'is_active'=>true],['text'=>'546','is_correct'=>false,'is_active'=>true],['text'=>'446','is_correct'=>true,'is_active'=>true],['text'=>'436','is_correct'=>false,'is_active'=>true]]);

        // MTK 3
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 47 x 23 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1.071','is_correct'=>false,'is_active'=>true],['text'=>'1.081','is_correct'=>true,'is_active'=>true],['text'=>'1.181','is_correct'=>false,'is_active'=>true],['text'=>'1.091','is_correct'=>false,'is_active'=>true]]);

        // MTK 4
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 936 : 12 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'72','is_correct'=>false,'is_active'=>true],['text'=>'76','is_correct'=>false,'is_active'=>true],['text'=>'84','is_correct'=>false,'is_active'=>true],['text'=>'78','is_correct'=>true,'is_active'=>true]]);

        // MTK 5
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 25 x 36 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'900','is_correct'=>true,'is_active'=>true],['text'=>'800','is_correct'=>false,'is_active'=>true],['text'=>'950','is_correct'=>false,'is_active'=>true],['text'=>'860','is_correct'=>false,'is_active'=>true]]);

        // MTK 6
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 1.500 - 687 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'823','is_correct'=>false,'is_active'=>true],['text'=>'813','is_correct'=>true,'is_active'=>true],['text'=>'713','is_correct'=>false,'is_active'=>true],['text'=>'913','is_correct'=>false,'is_active'=>true]]);

        // MTK 7
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 48 x 15 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'700','is_correct'=>false,'is_active'=>true],['text'=>'740','is_correct'=>false,'is_active'=>true],['text'=>'720','is_correct'=>true,'is_active'=>true],['text'=>'780','is_correct'=>false,'is_active'=>true]]);

        // MTK 8
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 2.400 : 8 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'250','is_correct'=>false,'is_active'=>true],['text'=>'300','is_correct'=>true,'is_active'=>true],['text'=>'350','is_correct'=>false,'is_active'=>true],['text'=>'320','is_correct'=>false,'is_active'=>true]]);

        // MTK 9
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 125 + 375 + 250 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'650','is_correct'=>false,'is_active'=>true],['text'=>'700','is_correct'=>false,'is_active'=>true],['text'=>'800','is_correct'=>false,'is_active'=>true],['text'=>'750','is_correct'=>true,'is_active'=>true]]);

        // MTK 10
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 64 x 25 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1.600','is_correct'=>true,'is_active'=>true],['text'=>'1.500','is_correct'=>false,'is_active'=>true],['text'=>'1.650','is_correct'=>false,'is_active'=>true],['text'=>'1.400','is_correct'=>false,'is_active'=>true]]);

        // MTK 11
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 8 + 6 x 4 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'56','is_correct'=>false,'is_active'=>true],['text'=>'32','is_correct'=>true,'is_active'=>true],['text'=>'28','is_correct'=>false,'is_active'=>true],['text'=>'24','is_correct'=>false,'is_active'=>true]]);

        // MTK 12
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari (15 - 7) x 5 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'32','is_correct'=>false,'is_active'=>true],['text'=>'35','is_correct'=>false,'is_active'=>true],['text'=>'40','is_correct'=>true,'is_active'=>true],['text'=>'80','is_correct'=>false,'is_active'=>true]]);

        // MTK 13
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 100 - 4 x 12 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'48','is_correct'=>false,'is_active'=>true],['text'=>'52','is_correct'=>true,'is_active'=>true],['text'=>'62','is_correct'=>false,'is_active'=>true],['text'=>'1.152','is_correct'=>false,'is_active'=>true]]);

        // MTK 14
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 72 : 8 + 9 x 3 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'27','is_correct'=>false,'is_active'=>true],['text'=>'45','is_correct'=>false,'is_active'=>true],['text'=>'36','is_correct'=>true,'is_active'=>true],['text'=>'63','is_correct'=>false,'is_active'=>true]]);

        // MTK 15
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bilangan prima di antara 20 dan 30 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'21 dan 27','is_correct'=>false,'is_active'=>true],['text'=>'25 dan 27','is_correct'=>false,'is_active'=>true],['text'=>'22 dan 28','is_correct'=>false,'is_active'=>true],['text'=>'23 dan 29','is_correct'=>true,'is_active'=>true]]);

        // MTK 16
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Faktorisasi prima dari 60 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'2 x 2 x 3 x 5','is_correct'=>true,'is_active'=>true],['text'=>'2 x 3 x 10','is_correct'=>false,'is_active'=>true],['text'=>'2 x 3 x 5 x 5','is_correct'=>false,'is_active'=>true],['text'=>'3 x 4 x 5','is_correct'=>false,'is_active'=>true]]);

        // MTK 17
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'KPK dari 6 dan 8 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'12','is_correct'=>false,'is_active'=>true],['text'=>'48','is_correct'=>false,'is_active'=>true],['text'=>'24','is_correct'=>true,'is_active'=>true],['text'=>'14','is_correct'=>false,'is_active'=>true]]);

        // MTK 18
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'KPK dari 12 dan 18 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'36','is_correct'=>true,'is_active'=>true],['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'72','is_correct'=>false,'is_active'=>true],['text'=>'216','is_correct'=>false,'is_active'=>true]]);

        // MTK 19
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'FPB dari 24 dan 36 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'8','is_correct'=>false,'is_active'=>true],['text'=>'12','is_correct'=>true,'is_active'=>true],['text'=>'18','is_correct'=>false,'is_active'=>true]]);

        // MTK 20
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'FPB dari 30 dan 45 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'5','is_correct'=>false,'is_active'=>true],['text'=>'10','is_correct'=>false,'is_active'=>true],['text'=>'20','is_correct'=>false,'is_active'=>true],['text'=>'15','is_correct'=>true,'is_active'=>true]]);

        // MTK 21
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'KPK dari 4, 6, dan 10 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'30','is_correct'=>false,'is_active'=>true],['text'=>'60','is_correct'=>true,'is_active'=>true],['text'=>'120','is_correct'=>false,'is_active'=>true],['text'=>'40','is_correct'=>false,'is_active'=>true]]);

        // MTK 22
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'FPB dari 48 dan 72 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'24','is_correct'=>true,'is_active'=>true],['text'=>'12','is_correct'=>false,'is_active'=>true],['text'=>'36','is_correct'=>false,'is_active'=>true],['text'=>'16','is_correct'=>false,'is_active'=>true]]);

        // MTK 23
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bel A berbunyi setiap 6 menit dan bel B setiap 8 menit. Keduanya berbunyi bersamaan pukul 08.00. Kedua bel akan berbunyi bersamaan lagi pada pukul ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'08.14','is_correct'=>false,'is_active'=>true],['text'=>'08.48','is_correct'=>false,'is_active'=>true],['text'=>'08.24','is_correct'=>true,'is_active'=>true],['text'=>'08.30','is_correct'=>false,'is_active'=>true]]);

        // MTK 24
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Ani berenang setiap 4 hari sekali dan Budi setiap 6 hari sekali. Pada tanggal 1 Mei mereka berenang bersama. Mereka akan berenang bersama lagi setelah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'10 hari','is_correct'=>false,'is_active'=>true],['text'=>'8 hari','is_correct'=>false,'is_active'=>true],['text'=>'24 hari','is_correct'=>false,'is_active'=>true],['text'=>'12 hari','is_correct'=>true,'is_active'=>true]]);

        // MTK 25
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Ibu memiliki 36 apel dan 48 jeruk. Buah-buah itu akan dimasukkan ke dalam keranjang dengan isi apel dan jeruk sama banyak. Banyak keranjang paling banyak yang dapat dibuat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'8','is_correct'=>false,'is_active'=>true],['text'=>'12','is_correct'=>true,'is_active'=>true],['text'=>'24','is_correct'=>false,'is_active'=>true]]);

        // MTK 26
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 3/4 + 1/8 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'7/8','is_correct'=>true,'is_active'=>true],['text'=>'4/12','is_correct'=>false,'is_active'=>true],['text'=>'3/8','is_correct'=>false,'is_active'=>true],['text'=>'1','is_correct'=>false,'is_active'=>true]]);

        // MTK 27
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 2/3 + 1/4 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3/7','is_correct'=>false,'is_active'=>true],['text'=>'5/12','is_correct'=>false,'is_active'=>true],['text'=>'7/12','is_correct'=>false,'is_active'=>true],['text'=>'11/12','is_correct'=>true,'is_active'=>true]]);

        // MTK 28
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 5/6 - 1/3 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'2/3','is_correct'=>false,'is_active'=>true],['text'=>'1/2','is_correct'=>true,'is_active'=>true],['text'=>'1/6','is_correct'=>false,'is_active'=>true],['text'=>'4/3','is_correct'=>false,'is_active'=>true]]);

        // MTK 29
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 3/5 x 2/3 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'5/8','is_correct'=>false,'is_active'=>true],['text'=>'9/10','is_correct'=>false,'is_active'=>true],['text'=>'2/5','is_correct'=>true,'is_active'=>true],['text'=>'1/5','is_correct'=>false,'is_active'=>true]]);

        // MTK 30
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 3/4 : 1/2 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1 1/2','is_correct'=>true,'is_active'=>true],['text'=>'3/8','is_correct'=>false,'is_active'=>true],['text'=>'1/3','is_correct'=>false,'is_active'=>true],['text'=>'2 1/2','is_correct'=>false,'is_active'=>true]]);

        // MTK 31
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 2 1/2 + 1 3/4 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3 3/4','is_correct'=>false,'is_active'=>true],['text'=>'3 1/4','is_correct'=>false,'is_active'=>true],['text'=>'4 3/4','is_correct'=>false,'is_active'=>true],['text'=>'4 1/4','is_correct'=>true,'is_active'=>true]]);

        // MTK 32
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pecahan yang senilai dengan 2/3 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3/5','is_correct'=>false,'is_active'=>true],['text'=>'4/9','is_correct'=>false,'is_active'=>true],['text'=>'4/6','is_correct'=>true,'is_active'=>true],['text'=>'5/8','is_correct'=>false,'is_active'=>true]]);

        // MTK 33
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Urutan pecahan 3/4, 1/2, dan 2/3 dari yang terkecil ke terbesar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1/2, 2/3, 3/4','is_correct'=>true,'is_active'=>true],['text'=>'3/4, 2/3, 1/2','is_correct'=>false,'is_active'=>true],['text'=>'2/3, 1/2, 3/4','is_correct'=>false,'is_active'=>true],['text'=>'1/2, 3/4, 2/3','is_correct'=>false,'is_active'=>true]]);

        // MTK 34
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pecahan 3/4 jika diubah ke bentuk desimal menjadi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'0,34','is_correct'=>false,'is_active'=>true],['text'=>'0,7','is_correct'=>false,'is_active'=>true],['text'=>'0,57','is_correct'=>false,'is_active'=>true],['text'=>'0,75','is_correct'=>true,'is_active'=>true]]);

        // MTK 35
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bentuk pecahan biasa paling sederhana dari 0,6 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3/10','is_correct'=>false,'is_active'=>true],['text'=>'3/5','is_correct'=>true,'is_active'=>true],['text'=>'3/50','is_correct'=>false,'is_active'=>true],['text'=>'2/3','is_correct'=>false,'is_active'=>true]]);

        // MTK 36
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 2,5 + 1,75 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3,75','is_correct'=>false,'is_active'=>true],['text'=>'4,35','is_correct'=>false,'is_active'=>true],['text'=>'4,25','is_correct'=>true,'is_active'=>true],['text'=>'4,15','is_correct'=>false,'is_active'=>true]]);

        // MTK 37
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 5,2 - 2,85 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'2,35','is_correct'=>true,'is_active'=>true],['text'=>'2,45','is_correct'=>false,'is_active'=>true],['text'=>'3,35','is_correct'=>false,'is_active'=>true],['text'=>'2,25','is_correct'=>false,'is_active'=>true]]);

        // MTK 38
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 1,5 x 0,4 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'0,06','is_correct'=>false,'is_active'=>true],['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'0,64','is_correct'=>false,'is_active'=>true],['text'=>'0,6','is_correct'=>true,'is_active'=>true]]);

        // MTK 39
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 4,8 : 0,6 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'0,8','is_correct'=>false,'is_active'=>true],['text'=>'80','is_correct'=>false,'is_active'=>true],['text'=>'8','is_correct'=>true,'is_active'=>true],['text'=>'7,2','is_correct'=>false,'is_active'=>true]]);

        // MTK 40
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'25% dari 240 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'50','is_correct'=>false,'is_active'=>true],['text'=>'60','is_correct'=>true,'is_active'=>true],['text'=>'65','is_correct'=>false,'is_active'=>true],['text'=>'120','is_correct'=>false,'is_active'=>true]]);

        // MTK 41
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'15% dari 200 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'30','is_correct'=>true,'is_active'=>true],['text'=>'35','is_correct'=>false,'is_active'=>true],['text'=>'25','is_correct'=>false,'is_active'=>true],['text'=>'20','is_correct'=>false,'is_active'=>true]]);

        // MTK 42
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bentuk pecahan paling sederhana dari 40% adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1/4','is_correct'=>false,'is_active'=>true],['text'=>'4/5','is_correct'=>false,'is_active'=>true],['text'=>'2/5','is_correct'=>true,'is_active'=>true],['text'=>'3/5','is_correct'=>false,'is_active'=>true]]);

        // MTK 43
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pecahan 3/8 jika dinyatakan dalam persen adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'38%','is_correct'=>false,'is_active'=>true],['text'=>'35%','is_correct'=>false,'is_active'=>true],['text'=>'375%','is_correct'=>false,'is_active'=>true],['text'=>'37,5%','is_correct'=>true,'is_active'=>true]]);

        // MTK 44
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Harga sebuah baju Rp80.000,00 mendapat diskon 25%. Harga baju setelah diskon adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Rp60.000,00','is_correct'=>true,'is_active'=>true],['text'=>'Rp20.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp65.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp55.000,00','is_correct'=>false,'is_active'=>true]]);

        // MTK 45
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Dina memiliki tabungan Rp150.000,00. Sebanyak 20% dari tabungan itu dipakai untuk membeli buku. Sisa tabungan Dina adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Rp30.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp130.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp120.000,00','is_correct'=>true,'is_active'=>true],['text'=>'Rp100.000,00','is_correct'=>false,'is_active'=>true]]);

        // MTK 46
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Dalam suatu kelas terdapat 40 siswa. Sebanyak 35% di antaranya adalah siswa perempuan. Banyak siswa perempuan adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'12 siswa','is_correct'=>false,'is_active'=>true],['text'=>'14 siswa','is_correct'=>true,'is_active'=>true],['text'=>'16 siswa','is_correct'=>false,'is_active'=>true],['text'=>'15 siswa','is_correct'=>false,'is_active'=>true]]);

        // MTK 47
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Keliling sebuah persegi dengan panjang sisi 12 cm adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'24 cm','is_correct'=>false,'is_active'=>true],['text'=>'36 cm','is_correct'=>false,'is_active'=>true],['text'=>'48 cm','is_correct'=>true,'is_active'=>true],['text'=>'144 cm','is_correct'=>false,'is_active'=>true]]);

        // MTK 48
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Luas sebuah persegi dengan panjang sisi 9 cm adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'36 cm²','is_correct'=>false,'is_active'=>true],['text'=>'72 cm²','is_correct'=>false,'is_active'=>true],['text'=>'18 cm²','is_correct'=>false,'is_active'=>true],['text'=>'81 cm²','is_correct'=>true,'is_active'=>true]]);

        // MTK 49
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah persegi panjang berukuran panjang 15 cm dan lebar 8 cm. Luas persegi panjang tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'120 cm²','is_correct'=>true,'is_active'=>true],['text'=>'46 cm²','is_correct'=>false,'is_active'=>true],['text'=>'23 cm²','is_correct'=>false,'is_active'=>true],['text'=>'160 cm²','is_correct'=>false,'is_active'=>true]]);

        // MTK 50
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah persegi panjang berukuran panjang 15 cm dan lebar 8 cm. Keliling persegi panjang tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'23 cm','is_correct'=>false,'is_active'=>true],['text'=>'46 cm','is_correct'=>true,'is_active'=>true],['text'=>'120 cm','is_correct'=>false,'is_active'=>true],['text'=>'92 cm','is_correct'=>false,'is_active'=>true]]);

        // MTK 51
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah segitiga memiliki alas 14 cm dan tinggi 9 cm. Luas segitiga tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'126 cm²','is_correct'=>false,'is_active'=>true],['text'=>'46 cm²','is_correct'=>false,'is_active'=>true],['text'=>'63 cm²','is_correct'=>true,'is_active'=>true],['text'=>'23 cm²','is_correct'=>false,'is_active'=>true]]);

        // MTK 52
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah jajar genjang memiliki alas 12 cm dan tinggi 7 cm. Luas jajar genjang tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'84 cm²','is_correct'=>true,'is_active'=>true],['text'=>'42 cm²','is_correct'=>false,'is_active'=>true],['text'=>'38 cm²','is_correct'=>false,'is_active'=>true],['text'=>'72 cm²','is_correct'=>false,'is_active'=>true]]);

        // MTK 53
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah trapesium memiliki sisi sejajar 8 cm dan 12 cm serta tinggi 5 cm. Luas trapesium tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'100 cm²','is_correct'=>false,'is_active'=>true],['text'=>'50 cm²','is_correct'=>true,'is_active'=>true],['text'=>'40 cm²','is_correct'=>false,'is_active'=>true],['text'=>'60 cm²','is_correct'=>false,'is_active'=>true]]);

        // MTK 54
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah belah ketupat memiliki panjang diagonal 10 cm dan 16 cm. Luas belah ketupat tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'160 cm²','is_correct'=>false,'is_active'=>true],['text'=>'26 cm²','is_correct'=>false,'is_active'=>true],['text'=>'52 cm²','is_correct'=>false,'is_active'=>true],['text'=>'80 cm²','is_correct'=>true,'is_active'=>true]]);

        // MTK 55
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah layang-layang memiliki diagonal 12 cm dan 9 cm. Luas layang-layang tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'54 cm²','is_correct'=>true,'is_active'=>true],['text'=>'108 cm²','is_correct'=>false,'is_active'=>true],['text'=>'21 cm²','is_correct'=>false,'is_active'=>true],['text'=>'42 cm²','is_correct'=>false,'is_active'=>true]]);

        // MTK 56
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Luas lingkaran dengan jari-jari 7 cm (π = 22/7) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'44 cm²','is_correct'=>false,'is_active'=>true],['text'=>'154 cm²','is_correct'=>true,'is_active'=>true],['text'=>'308 cm²','is_correct'=>false,'is_active'=>true],['text'=>'49 cm²','is_correct'=>false,'is_active'=>true]]);

        // MTK 57
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Keliling lingkaran dengan diameter 28 cm (π = 22/7) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'44 cm','is_correct'=>false,'is_active'=>true],['text'=>'176 cm','is_correct'=>false,'is_active'=>true],['text'=>'88 cm','is_correct'=>true,'is_active'=>true],['text'=>'616 cm','is_correct'=>false,'is_active'=>true]]);

        // MTK 58
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Keliling lingkaran dengan jari-jari 21 cm (π = 22/7) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'66 cm','is_correct'=>false,'is_active'=>true],['text'=>'132 cm','is_correct'=>true,'is_active'=>true],['text'=>'264 cm','is_correct'=>false,'is_active'=>true],['text'=>'1.386 cm','is_correct'=>false,'is_active'=>true]]);

        // MTK 59
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Volume sebuah kubus dengan panjang rusuk 6 cm adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'36 cm³','is_correct'=>false,'is_active'=>true],['text'=>'108 cm³','is_correct'=>false,'is_active'=>true],['text'=>'216 cm³','is_correct'=>true,'is_active'=>true],['text'=>'196 cm³','is_correct'=>false,'is_active'=>true]]);

        // MTK 60
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Volume sebuah balok dengan ukuran 12 cm x 8 cm x 5 cm adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'480 cm³','is_correct'=>true,'is_active'=>true],['text'=>'96 cm³','is_correct'=>false,'is_active'=>true],['text'=>'240 cm³','is_correct'=>false,'is_active'=>true],['text'=>'400 cm³','is_correct'=>false,'is_active'=>true]]);

        // MTK 61
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Luas permukaan kubus dengan panjang rusuk 5 cm adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'125 cm²','is_correct'=>false,'is_active'=>true],['text'=>'100 cm²','is_correct'=>false,'is_active'=>true],['text'=>'150 cm²','is_correct'=>true,'is_active'=>true],['text'=>'75 cm²','is_correct'=>false,'is_active'=>true]]);

        // MTK 62
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Luas permukaan balok dengan ukuran 10 cm x 6 cm x 4 cm adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'240 cm²','is_correct'=>false,'is_active'=>true],['text'=>'124 cm²','is_correct'=>false,'is_active'=>true],['text'=>'480 cm²','is_correct'=>false,'is_active'=>true],['text'=>'248 cm²','is_correct'=>true,'is_active'=>true]]);

        // MTK 63
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Volume tabung dengan jari-jari 7 cm dan tinggi 10 cm (π = 22/7) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'154 cm³','is_correct'=>false,'is_active'=>true],['text'=>'1.540 cm³','is_correct'=>true,'is_active'=>true],['text'=>'3.080 cm³','is_correct'=>false,'is_active'=>true],['text'=>'440 cm³','is_correct'=>false,'is_active'=>true]]);

        // MTK 64
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Volume kerucut dengan jari-jari 7 cm dan tinggi 12 cm (π = 22/7) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1.848 cm³','is_correct'=>false,'is_active'=>true],['text'=>'308 cm³','is_correct'=>false,'is_active'=>true],['text'=>'616 cm³','is_correct'=>true,'is_active'=>true],['text'=>'462 cm³','is_correct'=>false,'is_active'=>true]]);

        // MTK 65
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Volume bola dengan jari-jari 3 cm (π = 3,14) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'113,04 cm³','is_correct'=>true,'is_active'=>true],['text'=>'37,68 cm³','is_correct'=>false,'is_active'=>true],['text'=>'84,78 cm³','is_correct'=>false,'is_active'=>true],['text'=>'226,08 cm³','is_correct'=>false,'is_active'=>true]]);

        // MTK 66
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah limas memiliki alas berbentuk persegi dengan sisi 6 cm dan tinggi 10 cm. Volume limas tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'360 cm³','is_correct'=>false,'is_active'=>true],['text'=>'120 cm³','is_correct'=>true,'is_active'=>true],['text'=>'60 cm³','is_correct'=>false,'is_active'=>true],['text'=>'240 cm³','is_correct'=>false,'is_active'=>true]]);

        // MTK 67
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Banyak rusuk pada sebuah kubus adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'8','is_correct'=>false,'is_active'=>true],['text'=>'12','is_correct'=>true,'is_active'=>true],['text'=>'24','is_correct'=>false,'is_active'=>true]]);

        // MTK 68
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Banyak sisi pada sebuah prisma segitiga adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3','is_correct'=>false,'is_active'=>true],['text'=>'4','is_correct'=>false,'is_active'=>true],['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'5','is_correct'=>true,'is_active'=>true]]);

        // MTK 69
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bangun ruang yang memiliki satu titik puncak dan alas berbentuk lingkaran adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tabung','is_correct'=>false,'is_active'=>true],['text'=>'bola','is_correct'=>false,'is_active'=>true],['text'=>'limas segiempat','is_correct'=>false,'is_active'=>true],['text'=>'kerucut','is_correct'=>true,'is_active'=>true]]);

        // MTK 70
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Jumlah besar ketiga sudut dalam sebuah segitiga adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'270°','is_correct'=>false,'is_active'=>true],['text'=>'360°','is_correct'=>false,'is_active'=>true],['text'=>'180°','is_correct'=>true,'is_active'=>true],['text'=>'90°','is_correct'=>false,'is_active'=>true]]);

        // MTK 71
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Dua sudut sebuah segitiga besarnya 55° dan 65°. Besar sudut yang ketiga adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'60°','is_correct'=>true,'is_active'=>true],['text'=>'70°','is_correct'=>false,'is_active'=>true],['text'=>'120°','is_correct'=>false,'is_active'=>true],['text'=>'50°','is_correct'=>false,'is_active'=>true]]);

        // MTK 72
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pelurus dari sudut 75° adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'15°','is_correct'=>false,'is_active'=>true],['text'=>'115°','is_correct'=>false,'is_active'=>true],['text'=>'285°','is_correct'=>false,'is_active'=>true],['text'=>'105°','is_correct'=>true,'is_active'=>true]]);

        // MTK 73
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Penyiku dari sudut 35° adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'145°','is_correct'=>false,'is_active'=>true],['text'=>'65°','is_correct'=>false,'is_active'=>true],['text'=>'55°','is_correct'=>true,'is_active'=>true],['text'=>'35°','is_correct'=>false,'is_active'=>true]]);

        // MTK 74
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pada denah rumah berskala 1 : 500, panjang halaman pada denah adalah 8 cm. Panjang halaman sebenarnya adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'4 m','is_correct'=>false,'is_active'=>true],['text'=>'40 m','is_correct'=>true,'is_active'=>true],['text'=>'400 m','is_correct'=>false,'is_active'=>true],['text'=>'4.000 m','is_correct'=>false,'is_active'=>true]]);

        // MTK 75
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Panjang sebuah lapangan sebenarnya 30 m. Pada denah, panjang lapangan digambar 6 cm. Skala denah tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1 : 50','is_correct'=>false,'is_active'=>true],['text'=>'1 : 300','is_correct'=>false,'is_active'=>true],['text'=>'1 : 500','is_correct'=>true,'is_active'=>true],['text'=>'1 : 5.000','is_correct'=>false,'is_active'=>true]]);

        // MTK 76
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah mobil melaju dengan kecepatan 70 km/jam selama 3 jam. Jarak yang ditempuh mobil tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'210 km','is_correct'=>true,'is_active'=>true],['text'=>'190 km','is_correct'=>false,'is_active'=>true],['text'=>'220 km','is_correct'=>false,'is_active'=>true],['text'=>'240 km','is_correct'=>false,'is_active'=>true]]);

        // MTK 77
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah bus menempuh jarak 150 km dalam waktu 3 jam. Kecepatan rata-rata bus tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'45 km/jam','is_correct'=>false,'is_active'=>true],['text'=>'50 km/jam','is_correct'=>true,'is_active'=>true],['text'=>'55 km/jam','is_correct'=>false,'is_active'=>true],['text'=>'450 km/jam','is_correct'=>false,'is_active'=>true]]);

        // MTK 78
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Rudi berangkat ke sekolah pukul 07.30 dan tiba di kota pukul 10.15. Lama perjalanan Rudi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'2 jam 15 menit','is_correct'=>false,'is_active'=>true],['text'=>'2 jam 30 menit','is_correct'=>false,'is_active'=>true],['text'=>'2 jam 45 menit','is_correct'=>true,'is_active'=>true],['text'=>'3 jam','is_correct'=>false,'is_active'=>true]]);

        // MTK 79
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'3 jam 20 menit sama dengan ... menit.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'320','is_correct'=>false,'is_active'=>true],['text'=>'180','is_correct'=>false,'is_active'=>true],['text'=>'210','is_correct'=>false,'is_active'=>true],['text'=>'200','is_correct'=>true,'is_active'=>true]]);

        // MTK 80
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'2,5 km sama dengan ... m.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'250','is_correct'=>false,'is_active'=>true],['text'=>'25.000','is_correct'=>false,'is_active'=>true],['text'=>'2.500','is_correct'=>true,'is_active'=>true],['text'=>'205','is_correct'=>false,'is_active'=>true]]);

        // MTK 81
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'4,5 kg sama dengan ... gram.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'4.500','is_correct'=>true,'is_active'=>true],['text'=>'450','is_correct'=>false,'is_active'=>true],['text'=>'45.000','is_correct'=>false,'is_active'=>true],['text'=>'405','is_correct'=>false,'is_active'=>true]]);

        // MTK 82
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'3 liter + 500 ml = ... ml.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3.050','is_correct'=>false,'is_active'=>true],['text'=>'3.500','is_correct'=>true,'is_active'=>true],['text'=>'8.000','is_correct'=>false,'is_active'=>true],['text'=>'350','is_correct'=>false,'is_active'=>true]]);

        // MTK 83
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Nilai ulangan Tono adalah 70, 80, 90, dan 60. Rata-rata nilai ulangan Tono adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'70','is_correct'=>false,'is_active'=>true],['text'=>'80','is_correct'=>false,'is_active'=>true],['text'=>'75','is_correct'=>true,'is_active'=>true],['text'=>'300','is_correct'=>false,'is_active'=>true]]);

        // MTK 84
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Diketahui data: 6, 7, 7, 8, 9, 7, 5. Modus dari data tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'5','is_correct'=>false,'is_active'=>true],['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'9','is_correct'=>false,'is_active'=>true],['text'=>'7','is_correct'=>true,'is_active'=>true]]);

        // MTK 85
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Median dari data 3, 5, 7, 9, 11 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'5','is_correct'=>false,'is_active'=>true],['text'=>'7','is_correct'=>true,'is_active'=>true],['text'=>'9','is_correct'=>false,'is_active'=>true],['text'=>'11','is_correct'=>false,'is_active'=>true]]);

        // MTK 86
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Median dari data 4, 8, 6, 10 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'8','is_correct'=>false,'is_active'=>true],['text'=>'9','is_correct'=>false,'is_active'=>true],['text'=>'7','is_correct'=>true,'is_active'=>true]]);

        // MTK 87
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Rata-rata nilai 5 siswa adalah 72. Jumlah seluruh nilai kelima siswa tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'360','is_correct'=>true,'is_active'=>true],['text'=>'72','is_correct'=>false,'is_active'=>true],['text'=>'350','is_correct'=>false,'is_active'=>true],['text'=>'370','is_correct'=>false,'is_active'=>true]]);

        // MTK 88
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Angka Romawi XLIV bernilai ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'46','is_correct'=>false,'is_active'=>true],['text'=>'64','is_correct'=>false,'is_active'=>true],['text'=>'44','is_correct'=>true,'is_active'=>true],['text'=>'34','is_correct'=>false,'is_active'=>true]]);

        // MTK 89
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari -5 + 9 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'-14','is_correct'=>false,'is_active'=>true],['text'=>'-4','is_correct'=>false,'is_active'=>true],['text'=>'4','is_correct'=>true,'is_active'=>true],['text'=>'14','is_correct'=>false,'is_active'=>true]]);

        // MTK 90
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari -8 - 5 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'-13','is_correct'=>true,'is_active'=>true],['text'=>'-3','is_correct'=>false,'is_active'=>true],['text'=>'13','is_correct'=>false,'is_active'=>true],['text'=>'3','is_correct'=>false,'is_active'=>true]]);

        // MTK 91
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari (-6) x 7 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'42','is_correct'=>false,'is_active'=>true],['text'=>'-42','is_correct'=>true,'is_active'=>true],['text'=>'-13','is_correct'=>false,'is_active'=>true],['text'=>'13','is_correct'=>false,'is_active'=>true]]);

        // MTK 92
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Suhu di sebuah kota pada pagi hari -3°C. Siang hari suhu naik 8°C. Suhu di kota itu pada siang hari adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'11°C','is_correct'=>false,'is_active'=>true],['text'=>'-5°C','is_correct'=>false,'is_active'=>true],['text'=>'-11°C','is_correct'=>false,'is_active'=>true],['text'=>'5°C','is_correct'=>true,'is_active'=>true]]);

        // MTK 93
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 5² + 3³ adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'34','is_correct'=>false,'is_active'=>true],['text'=>'52','is_correct'=>true,'is_active'=>true],['text'=>'58','is_correct'=>false,'is_active'=>true],['text'=>'225','is_correct'=>false,'is_active'=>true]]);

        // MTK 94
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari √144 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'14','is_correct'=>false,'is_active'=>true],['text'=>'11','is_correct'=>false,'is_active'=>true],['text'=>'12','is_correct'=>true,'is_active'=>true],['text'=>'72','is_correct'=>false,'is_active'=>true]]);

        // MTK 95
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari √225 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'15','is_correct'=>true,'is_active'=>true],['text'=>'25','is_correct'=>false,'is_active'=>true],['text'=>'13','is_correct'=>false,'is_active'=>true],['text'=>'5','is_correct'=>false,'is_active'=>true]]);

        // MTK 96
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 7³ adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'21','is_correct'=>false,'is_active'=>true],['text'=>'243','is_correct'=>false,'is_active'=>true],['text'=>'49','is_correct'=>false,'is_active'=>true],['text'=>'343','is_correct'=>true,'is_active'=>true]]);

        // MTK 97
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Ibu membeli 3 kg apel dengan harga Rp35.000,00 per kg dan 2 kg jeruk dengan harga Rp28.000,00 per kg. Total uang yang harus dibayar Ibu adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Rp151.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp161.000,00','is_correct'=>true,'is_active'=>true],['text'=>'Rp171.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp163.000,00','is_correct'=>false,'is_active'=>true]]);

        // MTK 98
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pak Budi memiliki 120 ekor ayam. Sebanyak 3/8 dari ayam itu dijual. Banyak ayam yang tersisa adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'45 ekor','is_correct'=>false,'is_active'=>true],['text'=>'80 ekor','is_correct'=>false,'is_active'=>true],['text'=>'75 ekor','is_correct'=>true,'is_active'=>true],['text'=>'85 ekor','is_correct'=>false,'is_active'=>true]]);

        // MTK 99
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah bus membawa 48 penumpang. Di terminal, 15 penumpang turun dan 22 penumpang naik. Banyak penumpang di dalam bus sekarang adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'53 orang','is_correct'=>false,'is_active'=>true],['text'=>'63 orang','is_correct'=>false,'is_active'=>true],['text'=>'85 orang','is_correct'=>false,'is_active'=>true],['text'=>'55 orang','is_correct'=>true,'is_active'=>true]]);

        // MTK 100
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Rina membaca buku setebal 240 halaman. Pada hari pertama ia membaca 1/4 bagian dan pada hari kedua 1/3 bagian. Banyak halaman yang belum dibaca Rina adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'100 halaman','is_correct'=>true,'is_active'=>true],['text'=>'140 halaman','is_correct'=>false,'is_active'=>true],['text'=>'80 halaman','is_correct'=>false,'is_active'=>true],['text'=>'60 halaman','is_correct'=>false,'is_active'=>true]]);

                // MTK 101
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pak Tani memiliki sawah seluas 2.400 m². Sebanyak 3/5 bagian ditanami padi. Luas sawah yang ditanami padi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1.240 m²','is_correct'=>false,'is_active'=>true],['text'=>'1.440 m²','is_correct'=>true,'is_active'=>true],['text'=>'960 m²','is_correct'=>false,'is_active'=>true],['text'=>'1.640 m²','is_correct'=>false,'is_active'=>true]]);

        // MTK 102
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Perbandingan kelereng Adi dan Budi adalah 3 : 5. Jika jumlah kelereng mereka 64 butir, banyak kelereng Budi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'24 butir','is_correct'=>false,'is_active'=>true],['text'=>'32 butir','is_correct'=>false,'is_active'=>true],['text'=>'40 butir','is_correct'=>true,'is_active'=>true],['text'=>'38 butir','is_correct'=>false,'is_active'=>true]]);

        // MTK 103
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Harga 5 buku tulis adalah Rp37.500,00. Harga 8 buku tulis yang sama adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Rp60.000,00','is_correct'=>true,'is_active'=>true],['text'=>'Rp52.500,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp62.500,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp67.500,00','is_correct'=>false,'is_active'=>true]]);

        // MTK 104
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Enam pekerja dapat menyelesaikan sebuah pekerjaan dalam waktu 12 hari. Jika pekerjaan itu dikerjakan 8 pekerja, waktu yang dibutuhkan adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'16 hari','is_correct'=>false,'is_active'=>true],['text'=>'9 hari','is_correct'=>true,'is_active'=>true],['text'=>'10 hari','is_correct'=>false,'is_active'=>true],['text'=>'8 hari','is_correct'=>false,'is_active'=>true]]);

        // MTK 105
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pak Ali membeli sepeda motor bekas seharga Rp15.000.000,00, lalu menjualnya Rp16.500.000,00. Persentase keuntungan Pak Ali adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'5%','is_correct'=>false,'is_active'=>true],['text'=>'15%','is_correct'=>false,'is_active'=>true],['text'=>'10%','is_correct'=>true,'is_active'=>true],['text'=>'11%','is_correct'=>false,'is_active'=>true]]);

        // MTK 106
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bu Sari membeli tas seharga Rp20.000,00 dan menjualnya Rp18.000,00. Persentase kerugian Bu Sari adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'10%','is_correct'=>true,'is_active'=>true],['text'=>'8%','is_correct'=>false,'is_active'=>true],['text'=>'12%','is_correct'=>false,'is_active'=>true],['text'=>'20%','is_correct'=>false,'is_active'=>true]]);

        // MTK 107
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 1/2 + 1/3 + 1/6 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'5/6','is_correct'=>false,'is_active'=>true],['text'=>'2/3','is_correct'=>false,'is_active'=>true],['text'=>'11/12','is_correct'=>false,'is_active'=>true],['text'=>'1','is_correct'=>true,'is_active'=>true]]);

        // MTK 108
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 1 1/2 x 2 2/3 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3','is_correct'=>false,'is_active'=>true],['text'=>'4','is_correct'=>true,'is_active'=>true],['text'=>'3 1/3','is_correct'=>false,'is_active'=>true],['text'=>'4 1/2','is_correct'=>false,'is_active'=>true]]);

        // MTK 109
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 4 : 2/3 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'5','is_correct'=>false,'is_active'=>true],['text'=>'7','is_correct'=>false,'is_active'=>true],['text'=>'6','is_correct'=>true,'is_active'=>true],['text'=>'8','is_correct'=>false,'is_active'=>true]]);

        // MTK 110
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 7/8 - 3/4 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'1/4','is_correct'=>false,'is_active'=>true],['text'=>'3/8','is_correct'=>false,'is_active'=>true],['text'=>'1/2','is_correct'=>false,'is_active'=>true],['text'=>'1/8','is_correct'=>true,'is_active'=>true]]);

        // MTK 111
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 5 3/4 - 2 1/2 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3 3/4','is_correct'=>false,'is_active'=>true],['text'=>'3 1/4','is_correct'=>true,'is_active'=>true],['text'=>'2 1/4','is_correct'=>false,'is_active'=>true],['text'=>'4 1/4','is_correct'=>false,'is_active'=>true]]);

        // MTK 112
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 0,25 x 80 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'2','is_correct'=>false,'is_active'=>true],['text'=>'200','is_correct'=>false,'is_active'=>true],['text'=>'20','is_correct'=>true,'is_active'=>true],['text'=>'25','is_correct'=>false,'is_active'=>true]]);

        // MTK 113
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'12,5% dari 160 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'16','is_correct'=>false,'is_active'=>true],['text'=>'20','is_correct'=>true,'is_active'=>true],['text'=>'18','is_correct'=>false,'is_active'=>true],['text'=>'25','is_correct'=>false,'is_active'=>true]]);

        // MTK 114
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bilangan desimal 0,75 jika dinyatakan dalam persen adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'7,5%','is_correct'=>false,'is_active'=>true],['text'=>'0,75%','is_correct'=>false,'is_active'=>true],['text'=>'750%','is_correct'=>false,'is_active'=>true],['text'=>'75%','is_correct'=>true,'is_active'=>true]]);

        // MTK 115
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pecahan campuran 3 1/5 jika diubah ke bentuk desimal menjadi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3,2','is_correct'=>true,'is_active'=>true],['text'=>'3,5','is_correct'=>false,'is_active'=>true],['text'=>'3,02','is_correct'=>false,'is_active'=>true],['text'=>'3,15','is_correct'=>false,'is_active'=>true]]);

        // MTK 116
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Urutan bilangan -7, 3, -2, 0 dari yang terkecil ke terbesar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'-2, -7, 0, 3','is_correct'=>false,'is_active'=>true],['text'=>'3, 0, -2, -7','is_correct'=>false,'is_active'=>true],['text'=>'-7, -2, 0, 3','is_correct'=>true,'is_active'=>true],['text'=>'-7, 0, -2, 3','is_correct'=>false,'is_active'=>true]]);

        // MTK 117
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari (-12) : 3 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'4','is_correct'=>false,'is_active'=>true],['text'=>'-9','is_correct'=>false,'is_active'=>true],['text'=>'-36','is_correct'=>false,'is_active'=>true],['text'=>'-4','is_correct'=>true,'is_active'=>true]]);

        // MTK 118
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari (-9) x (-4) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'-36','is_correct'=>false,'is_active'=>true],['text'=>'-13','is_correct'=>false,'is_active'=>true],['text'=>'36','is_correct'=>true,'is_active'=>true],['text'=>'13','is_correct'=>false,'is_active'=>true]]);

        // MTK 119
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil dari 15 - (-6) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'21','is_correct'=>true,'is_active'=>true],['text'=>'9','is_correct'=>false,'is_active'=>true],['text'=>'-21','is_correct'=>false,'is_active'=>true],['text'=>'-9','is_correct'=>false,'is_active'=>true]]);

        // MTK 120
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Seorang penyelam berada 12 m di bawah permukaan laut, lalu naik 5 m. Posisi penyelam sekarang adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'17 m di bawah permukaan laut','is_correct'=>false,'is_active'=>true],['text'=>'7 m di atas permukaan laut','is_correct'=>false,'is_active'=>true],['text'=>'7 m di bawah permukaan laut','is_correct'=>true,'is_active'=>true],['text'=>'5 m di bawah permukaan laut','is_correct'=>false,'is_active'=>true]]);

        // MTK 121
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah taman berbentuk persegi panjang dengan panjang 25 m dan lebar 16 m. Taman itu akan dipagari kawat di sekelilingnya. Panjang kawat minimal yang dibutuhkan adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'41 m','is_correct'=>false,'is_active'=>true],['text'=>'400 m','is_correct'=>false,'is_active'=>true],['text'=>'164 m','is_correct'=>false,'is_active'=>true],['text'=>'82 m','is_correct'=>true,'is_active'=>true]]);

        // MTK 122
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Lantai sebuah ruangan berukuran 6 m x 4 m akan dipasangi ubin berbentuk persegi dengan sisi 20 cm. Banyak ubin yang dibutuhkan adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'500 buah','is_correct'=>false,'is_active'=>true],['text'=>'1.200 buah','is_correct'=>false,'is_active'=>true],['text'=>'600 buah','is_correct'=>true,'is_active'=>true],['text'=>'60 buah','is_correct'=>false,'is_active'=>true]]);

        // MTK 123
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah bak mandi berbentuk balok dengan panjang 1 m, lebar 60 cm, dan tinggi 50 cm. Jika bak diisi penuh, banyak air di dalamnya adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'250 liter','is_correct'=>false,'is_active'=>true],['text'=>'350 liter','is_correct'=>false,'is_active'=>true],['text'=>'300 liter','is_correct'=>true,'is_active'=>true],['text'=>'30 liter','is_correct'=>false,'is_active'=>true]]);

        // MTK 124
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah keran mengalirkan 600 liter air dalam waktu 20 menit. Debit air keran tersebut adalah ... liter/menit.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'20','is_correct'=>false,'is_active'=>true],['text'=>'25','is_correct'=>false,'is_active'=>true],['text'=>'40','is_correct'=>false,'is_active'=>true],['text'=>'30','is_correct'=>true,'is_active'=>true]]);

        // MTK 125
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Besar sudut yang dibentuk jarum jam pada pukul 03.00 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'60°','is_correct'=>false,'is_active'=>true],['text'=>'120°','is_correct'=>false,'is_active'=>true],['text'=>'90°','is_correct'=>true,'is_active'=>true],['text'=>'30°','is_correct'=>false,'is_active'=>true]]);

        // MTK 126
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Jumlah besar keempat sudut dalam sebuah segiempat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'360°','is_correct'=>true,'is_active'=>true],['text'=>'180°','is_correct'=>false,'is_active'=>true],['text'=>'270°','is_correct'=>false,'is_active'=>true],['text'=>'720°','is_correct'=>false,'is_active'=>true]]);

        // MTK 127
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sudut yang termasuk sudut tumpul adalah sudut yang besarnya ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'30°','is_correct'=>false,'is_active'=>true],['text'=>'120°','is_correct'=>true,'is_active'=>true],['text'=>'90°','is_correct'=>false,'is_active'=>true],['text'=>'180°','is_correct'=>false,'is_active'=>true]]);

        // MTK 128
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Banyak titik sudut pada sebuah balok adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'6','is_correct'=>false,'is_active'=>true],['text'=>'12','is_correct'=>false,'is_active'=>true],['text'=>'4','is_correct'=>false,'is_active'=>true],['text'=>'8','is_correct'=>true,'is_active'=>true]]);

        // MTK 129
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Jaring-jaring kubus terdiri atas ... buah persegi yang kongruen.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'4','is_correct'=>false,'is_active'=>true],['text'=>'5','is_correct'=>false,'is_active'=>true],['text'=>'6','is_correct'=>true,'is_active'=>true],['text'=>'8','is_correct'=>false,'is_active'=>true]]);

        // MTK 130
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bangun datar yang memiliki empat sumbu simetri lipat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'trapesium','is_correct'=>false,'is_active'=>true],['text'=>'persegi','is_correct'=>true,'is_active'=>true],['text'=>'persegi panjang','is_correct'=>false,'is_active'=>true],['text'=>'jajar genjang','is_correct'=>false,'is_active'=>true]]);

        // MTK 131
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Banyak simetri lipat pada segitiga sama sisi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'3','is_correct'=>true,'is_active'=>true],['text'=>'1','is_correct'=>false,'is_active'=>true],['text'=>'2','is_correct'=>false,'is_active'=>true],['text'=>'6','is_correct'=>false,'is_active'=>true]]);

        // MTK 132
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Rata-rata dari data 6, 7, 8, 9, 10 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'7','is_correct'=>false,'is_active'=>true],['text'=>'9','is_correct'=>false,'is_active'=>true],['text'=>'8','is_correct'=>true,'is_active'=>true],['text'=>'10','is_correct'=>false,'is_active'=>true]]);

        // MTK 133
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Modus dari data 4, 5, 5, 6, 6, 6, 7 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'6','is_correct'=>true,'is_active'=>true],['text'=>'5','is_correct'=>false,'is_active'=>true],['text'=>'7','is_correct'=>false,'is_active'=>true],['text'=>'4','is_correct'=>false,'is_active'=>true]]);

        // MTK 134
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Rata-rata tinggi badan 5 siswa adalah 150 cm. Jika seorang siswa dengan tinggi 162 cm bergabung, rata-rata tinggi badan menjadi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'151 cm','is_correct'=>false,'is_active'=>true],['text'=>'152 cm','is_correct'=>true,'is_active'=>true],['text'=>'153 cm','is_correct'=>false,'is_active'=>true],['text'=>'156 cm','is_correct'=>false,'is_active'=>true]]);

        // MTK 135
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Rata-rata nilai 8 siswa adalah 70, sedangkan rata-rata nilai 2 siswa lainnya adalah 85. Rata-rata nilai kesepuluh siswa tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'72','is_correct'=>false,'is_active'=>true],['text'=>'75','is_correct'=>false,'is_active'=>true],['text'=>'73','is_correct'=>true,'is_active'=>true],['text'=>'77,5','is_correct'=>false,'is_active'=>true]]);

        // MTK 136
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Dari 200 siswa, 25% di antaranya menyukai sepak bola. Banyak siswa yang menyukai sepak bola adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'50 siswa','is_correct'=>true,'is_active'=>true],['text'=>'25 siswa','is_correct'=>false,'is_active'=>true],['text'=>'75 siswa','is_correct'=>false,'is_active'=>true],['text'=>'100 siswa','is_correct'=>false,'is_active'=>true]]);

        // MTK 137
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Pak Rudi menabung Rp25.000,00 setiap minggu. Jumlah tabungan Pak Rudi setelah 12 minggu adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Rp250.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp350.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp275.000,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp300.000,00','is_correct'=>true,'is_active'=>true]]);

        // MTK 138
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah sepeda motor melaju dengan kecepatan rata-rata 40 km/jam. Waktu yang dibutuhkan untuk menempuh jarak 100 km adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'2 jam','is_correct'=>false,'is_active'=>true],['text'=>'2 jam 30 menit','is_correct'=>true,'is_active'=>true],['text'=>'2 jam 45 menit','is_correct'=>false,'is_active'=>true],['text'=>'3 jam','is_correct'=>false,'is_active'=>true]]);

        // MTK 139
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Toko menjual pensil per lusin. Jika Rani membeli 3 lusin pensil ditambah 5 pensil lagi, banyak pensil yang dibeli Rani adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'36 buah','is_correct'=>false,'is_active'=>true],['text'=>'35 buah','is_correct'=>false,'is_active'=>true],['text'=>'41 buah','is_correct'=>true,'is_active'=>true],['text'=>'15 buah','is_correct'=>false,'is_active'=>true]]);

        // MTK 140
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Satu kodi sama dengan 20 buah. Banyak baju dalam 5 kodi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'100 buah','is_correct'=>true,'is_active'=>true],['text'=>'50 buah','is_correct'=>false,'is_active'=>true],['text'=>'120 buah','is_correct'=>false,'is_active'=>true],['text'=>'25 buah','is_correct'=>false,'is_active'=>true]]);

        // MTK 141
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Hasil pembulatan bilangan 4.567 ke ratusan terdekat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'4.500','is_correct'=>false,'is_active'=>true],['text'=>'4.570','is_correct'=>false,'is_active'=>true],['text'=>'4.600','is_correct'=>true,'is_active'=>true],['text'=>'5.000','is_correct'=>false,'is_active'=>true]]);

        // MTK 142
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Nilai tempat angka 8 pada bilangan 3.842 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'puluhan','is_correct'=>false,'is_active'=>true],['text'=>'ribuan','is_correct'=>false,'is_active'=>true],['text'=>'satuan','is_correct'=>false,'is_active'=>true],['text'=>'ratusan','is_correct'=>true,'is_active'=>true]]);

        // MTK 143
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bilangan 5.062 dibaca ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'lima ribu enam puluh dua','is_correct'=>true,'is_active'=>true],['text'=>'lima ribu enam ratus dua','is_correct'=>false,'is_active'=>true],['text'=>'lima puluh enam ribu dua','is_correct'=>false,'is_active'=>true],['text'=>'lima ribu enam puluh','is_correct'=>false,'is_active'=>true]]);

        // MTK 144
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bilangan tiga angka terbesar yang dapat dibentuk dari angka 2, 5, dan 8 (tanpa pengulangan) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'285','is_correct'=>false,'is_active'=>true],['text'=>'582','is_correct'=>false,'is_active'=>true],['text'=>'852','is_correct'=>true,'is_active'=>true],['text'=>'825','is_correct'=>false,'is_active'=>true]]);

        // MTK 145
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Suku ke-6 dari barisan bilangan 3, 7, 11, 15, .... adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'19','is_correct'=>false,'is_active'=>true],['text'=>'21','is_correct'=>false,'is_active'=>true],['text'=>'25','is_correct'=>false,'is_active'=>true],['text'=>'23','is_correct'=>true,'is_active'=>true]]);

        // MTK 146
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Bilangan berikutnya dari barisan 2, 4, 8, 16, .... adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'32','is_correct'=>true,'is_active'=>true],['text'=>'24','is_correct'=>false,'is_active'=>true],['text'=>'30','is_correct'=>false,'is_active'=>true],['text'=>'20','is_correct'=>false,'is_active'=>true]]);

        // MTK 147
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Jumlah semua bilangan genap dari 1 sampai 10 adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'25','is_correct'=>false,'is_active'=>true],['text'=>'35','is_correct'=>false,'is_active'=>true],['text'=>'30','is_correct'=>true,'is_active'=>true],['text'=>'55','is_correct'=>false,'is_active'=>true]]);

        // MTK 148
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Satu windu sama dengan 8 tahun. Tiga windu sama dengan ... tahun.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'21','is_correct'=>false,'is_active'=>true],['text'=>'32','is_correct'=>false,'is_active'=>true],['text'=>'24','is_correct'=>true,'is_active'=>true],['text'=>'27','is_correct'=>false,'is_active'=>true]]);

        // MTK 149
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Andi memiliki uang Rp50.000,00. Ia membeli 3 buku dengan harga Rp8.500,00 per buku dan sebuah pulpen seharga Rp4.000,00. Sisa uang Andi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Rp21.500,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp20.500,00','is_correct'=>true,'is_active'=>true],['text'=>'Rp19.500,00','is_correct'=>false,'is_active'=>true],['text'=>'Rp25.500,00','is_correct'=>false,'is_active'=>true]]);

        // MTK 150
        $q = Question::create(['subject_id'=>$mtk->id,'payload'=>'Sebuah kolam berbentuk persegi panjang memiliki keliling 36 m dan panjang 11 m. Luas kolam tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'72 m²','is_correct'=>false,'is_active'=>true],['text'=>'88 m²','is_correct'=>false,'is_active'=>true],['text'=>'77 m²','is_correct'=>true,'is_active'=>true],['text'=>'81 m²','is_correct'=>false,'is_active'=>true]]);

        // ===================== BAHASA INDONESIA (1-150) =====================

        // BIND 1
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Perhatikan paragraf berikut! Membaca adalah jendela dunia. Dengan membaca, kita memperoleh pengetahuan baru. Membaca juga melatih kita berpikir kritis. Ide pokok paragraf tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'manfaat membaca','is_correct'=>true,'is_active'=>true],['text'=>'cara memilih buku bacaan','is_correct'=>false,'is_active'=>true],['text'=>'jenis-jenis buku','is_correct'=>false,'is_active'=>true],['text'=>'perpustakaan sekolah','is_correct'=>false,'is_active'=>true]]);

        // BIND 2
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sinonim kata cantik adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'buruk','is_correct'=>false,'is_active'=>true],['text'=>'elok','is_correct'=>true,'is_active'=>true],['text'=>'kusam','is_correct'=>false,'is_active'=>true],['text'=>'lusuh','is_correct'=>false,'is_active'=>true]]);

        // BIND 3
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Antonim kata rajin adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tekun','is_correct'=>false,'is_active'=>true],['text'=>'giat','is_correct'=>false,'is_active'=>true],['text'=>'malas','is_correct'=>true,'is_active'=>true],['text'=>'ulet','is_correct'=>false,'is_active'=>true]]);

        // BIND 4
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sinonim kata murka adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'marah','is_correct'=>true,'is_active'=>true],['text'=>'sedih','is_correct'=>false,'is_active'=>true],['text'=>'senang','is_correct'=>false,'is_active'=>true],['text'=>'takut','is_correct'=>false,'is_active'=>true]]);

        // BIND 5
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Antonim kata hemat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'cermat','is_correct'=>false,'is_active'=>true],['text'=>'irit','is_correct'=>false,'is_active'=>true],['text'=>'bijak','is_correct'=>false,'is_active'=>true],['text'=>'boros','is_correct'=>true,'is_active'=>true]]);

        // BIND 6
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sinonim kata sunyi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'ramai','is_correct'=>false,'is_active'=>true],['text'=>'sepi','is_correct'=>true,'is_active'=>true],['text'=>'gaduh','is_correct'=>false,'is_active'=>true],['text'=>'bising','is_correct'=>false,'is_active'=>true]]);

        // BIND 7
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Antonim kata maju adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'mundur','is_correct'=>true,'is_active'=>true],['text'=>'naik','is_correct'=>false,'is_active'=>true],['text'=>'lurus','is_correct'=>false,'is_active'=>true],['text'=>'cepat','is_correct'=>false,'is_active'=>true]]);

        // BIND 8
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sinonim kata gembira adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'sedih','is_correct'=>false,'is_active'=>true],['text'=>'kesal','is_correct'=>false,'is_active'=>true],['text'=>'kecewa','is_correct'=>false,'is_active'=>true],['text'=>'riang','is_correct'=>true,'is_active'=>true]]);

        // BIND 9
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Antonim kata kaya adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'miskin','is_correct'=>true,'is_active'=>true],['text'=>'mewah','is_correct'=>false,'is_active'=>true],['text'=>'kikir','is_correct'=>false,'is_active'=>true],['text'=>'sederhana','is_correct'=>false,'is_active'=>true]]);

        // BIND 10
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sinonim kata buku adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tulisan','is_correct'=>false,'is_active'=>true],['text'=>'kertas','is_correct'=>false,'is_active'=>true],['text'=>'pustaka','is_correct'=>true,'is_active'=>true],['text'=>'sampul','is_correct'=>false,'is_active'=>true]]);

        // BIND 11
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata dasar dari kata menulis adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'nulis','is_correct'=>false,'is_active'=>true],['text'=>'tulis','is_correct'=>true,'is_active'=>true],['text'=>'lulis','is_correct'=>false,'is_active'=>true],['text'=>'menulis','is_correct'=>false,'is_active'=>true]]);

        // BIND 12
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata dasar dari kata menyapu adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'nyapu','is_correct'=>false,'is_active'=>true],['text'=>'yapu','is_correct'=>false,'is_active'=>true],['text'=>'sapu','is_correct'=>true,'is_active'=>true],['text'=>'menyap','is_correct'=>false,'is_active'=>true]]);

        // BIND 13
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata dasar dari kata memukul adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'pukul','is_correct'=>true,'is_active'=>true],['text'=>'mukul','is_correct'=>false,'is_active'=>true],['text'=>'ukul','is_correct'=>false,'is_active'=>true],['text'=>'memuk','is_correct'=>false,'is_active'=>true]]);

        // BIND 14
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Awalan pada kata bermain adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'me-','is_correct'=>false,'is_active'=>true],['text'=>'ber-','is_correct'=>true,'is_active'=>true],['text'=>'ter-','is_correct'=>false,'is_active'=>true],['text'=>'per-','is_correct'=>false,'is_active'=>true]]);

        // BIND 15
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Imbuhan yang terdapat pada kata dibersihkan adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'di- dan -kan','is_correct'=>true,'is_active'=>true],['text'=>'di- dan -an','is_correct'=>false,'is_active'=>true],['text'=>'ber- dan -kan','is_correct'=>false,'is_active'=>true],['text'=>'me- dan -kan','is_correct'=>false,'is_active'=>true]]);

        // BIND 16
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata pembangunan mendapat imbuhan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'pe- dan -an','is_correct'=>false,'is_active'=>true],['text'=>'per- dan -an','is_correct'=>false,'is_active'=>true],['text'=>'pem- dan -an','is_correct'=>true,'is_active'=>true],['text'=>'ke- dan -an','is_correct'=>false,'is_active'=>true]]);

        // BIND 17
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata dasar sapu mendapat awalan me- menjadi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'mensapu','is_correct'=>false,'is_active'=>true],['text'=>'mesapu','is_correct'=>false,'is_active'=>true],['text'=>'memsapu','is_correct'=>false,'is_active'=>true],['text'=>'menyapu','is_correct'=>true,'is_active'=>true]]);

        // BIND 18
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata dasar kirim mendapat awalan me- menjadi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'mengirim','is_correct'=>true,'is_active'=>true],['text'=>'menkirim','is_correct'=>false,'is_active'=>true],['text'=>'memkirim','is_correct'=>false,'is_active'=>true],['text'=>'menyirim','is_correct'=>false,'is_active'=>true]]);

        // BIND 19
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata dasar tani mendapat awalan pe- menjadi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'pentani','is_correct'=>false,'is_active'=>true],['text'=>'petani','is_correct'=>true,'is_active'=>true],['text'=>'pemtani','is_correct'=>false,'is_active'=>true],['text'=>'pengtani','is_correct'=>false,'is_active'=>true]]);

        // BIND 20
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat baku di bawah ini adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ibu lagi masak nasi di dapur.','is_correct'=>false,'is_active'=>true],['text'=>'Ibu sedang memasak nasi di dapur.','is_correct'=>true,'is_active'=>true],['text'=>'Ibu lagi memasak nasi di dapur.','is_correct'=>false,'is_active'=>true],['text'=>'Ibu sedang masak nasi di dapur.','is_correct'=>false,'is_active'=>true]]);

        // BIND 21
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat yang menggunakan kata baku adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Andi sudah mengumpulkan tugas tepat waktu.','is_correct'=>true,'is_active'=>true],['text'=>'Andi udah mengumpulkan tugas tepat waktu.','is_correct'=>false,'is_active'=>true],['text'=>'Andi sudah ngumpulin tugas tepat waktu.','is_correct'=>false,'is_active'=>true],['text'=>'Andi telah ngumpulkan tugas tepat waktu.','is_correct'=>false,'is_active'=>true]]);

        // BIND 22
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang tepat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'silahkan','is_correct'=>false,'is_active'=>true],['text'=>'silakan','is_correct'=>true,'is_active'=>true],['text'=>'sillakan','is_correct'=>false,'is_active'=>true],['text'=>'silahkang','is_correct'=>false,'is_active'=>true]]);

        // BIND 23
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'aktifitas','is_correct'=>false,'is_active'=>true],['text'=>'aktivites','is_correct'=>false,'is_active'=>true],['text'=>'activitas','is_correct'=>false,'is_active'=>true],['text'=>'aktivitas','is_correct'=>true,'is_active'=>true]]);

        // BIND 24
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'analisa','is_correct'=>false,'is_active'=>true],['text'=>'analisis','is_correct'=>true,'is_active'=>true],['text'=>'analises','is_correct'=>false,'is_active'=>true],['text'=>'analisys','is_correct'=>false,'is_active'=>true]]);

        // BIND 25
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'resiko','is_correct'=>false,'is_active'=>true],['text'=>'risiko','is_correct'=>true,'is_active'=>true],['text'=>'risyko','is_correct'=>false,'is_active'=>true],['text'=>'resico','is_correct'=>false,'is_active'=>true]]);

        // BIND 26
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'apotik','is_correct'=>false,'is_active'=>true],['text'=>'apotek','is_correct'=>true,'is_active'=>true],['text'=>'apotick','is_correct'=>false,'is_active'=>true],['text'=>'apoteck','is_correct'=>false,'is_active'=>true]]);

        // BIND 27
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'nasehat','is_correct'=>false,'is_active'=>true],['text'=>'nasihat','is_correct'=>true,'is_active'=>true],['text'=>'nasikhat','is_correct'=>false,'is_active'=>true],['text'=>'nasehad','is_correct'=>false,'is_active'=>true]]);

        // BIND 28
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'jadual','is_correct'=>false,'is_active'=>true],['text'=>'jadwal','is_correct'=>true,'is_active'=>true],['text'=>'jaddwal','is_correct'=>false,'is_active'=>true],['text'=>'jadwall','is_correct'=>false,'is_active'=>true]]);

        // BIND 29
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'praktek','is_correct'=>false,'is_active'=>true],['text'=>'prakthik','is_correct'=>false,'is_active'=>true],['text'=>'praktik','is_correct'=>true,'is_active'=>true],['text'=>'praktick','is_correct'=>false,'is_active'=>true]]);

        // BIND 30
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat efektif di bawah ini adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Para siswa-siswa mengikuti upacara bendera.','is_correct'=>false,'is_active'=>true],['text'=>'Para siswa mengikuti upacara bendera.','is_correct'=>true,'is_active'=>true],['text'=>'Para siswa-siswi semuanya mengikuti upacara bendera.','is_correct'=>false,'is_active'=>true],['text'=>'Para siswa banyak-banyak mengikuti upacara bendera.','is_correct'=>false,'is_active'=>true]]);

        // BIND 31
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat yang tidak mengandung pemborosan kata (pleonasme) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Anak itu turun ke bawah dengan cepat.','is_correct'=>false,'is_active'=>true],['text'=>'Kami berjalan menyusuri tepi sungai.','is_correct'=>true,'is_active'=>true],['text'=>'Ibu maju ke depan untuk menerima hadiah.','is_correct'=>false,'is_active'=>true],['text'=>'Ayah naik ke atas loteng rumah.','is_correct'=>false,'is_active'=>true]]);

        // BIND 32
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan huruf kapital yang tepat terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kami berlibur ke danau toba pada hari minggu.','is_correct'=>false,'is_active'=>true],['text'=>'kami berlibur ke Danau Toba pada hari Minggu.','is_correct'=>false,'is_active'=>true],['text'=>'Kami berlibur ke Danau Toba pada hari Minggu.','is_correct'=>true,'is_active'=>true],['text'=>'Kami Berlibur ke Danau Toba pada Hari minggu.','is_correct'=>false,'is_active'=>true]]);

        // BIND 33
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penggunaan tanda koma yang tepat terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ibu membeli apel, jeruk dan, mangga.','is_correct'=>false,'is_active'=>true],['text'=>'Ibu membeli, apel jeruk, dan mangga.','is_correct'=>false,'is_active'=>true],['text'=>'Ibu membeli apel, jeruk, dan mangga.','is_correct'=>true,'is_active'=>true],['text'=>'Ibu membeli apel jeruk, dan mangga.','is_correct'=>false,'is_active'=>true]]);

        // BIND 34
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat tanya yang menggunakan tanda baca dengan tepat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Siapa nama guru barumu.','is_correct'=>false,'is_active'=>true],['text'=>'Siapa nama guru barumu!','is_correct'=>false,'is_active'=>true],['text'=>'Siapa nama guru barumu?','is_correct'=>true,'is_active'=>true],['text'=>'Siapa nama guru barumu,','is_correct'=>false,'is_active'=>true]]);

        // BIND 35
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata depan yang tepat terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Buku itu diletakkan diatas meja.','is_correct'=>false,'is_active'=>true],['text'=>'Buku itu di letakkan di atas meja.','is_correct'=>false,'is_active'=>true],['text'=>'Buku itu diletakkan di atas meja.','is_correct'=>true,'is_active'=>true],['text'=>'Buku itu di letakkan diatas meja.','is_correct'=>false,'is_active'=>true]]);

        // BIND 36
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan imbuhan di- yang tepat terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Surat itu di kirim oleh Ayah kemarin.','is_correct'=>false,'is_active'=>true],['text'=>'Surat itu dikirim oleh Ayah kemarin.','is_correct'=>true,'is_active'=>true],['text'=>'Surat itu di-kirim oleh Ayah kemarin.','is_correct'=>false,'is_active'=>true],['text'=>'Surat itu di.kirim oleh Ayah kemarin.','is_correct'=>false,'is_active'=>true]]);

        // BIND 37
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Gagasan pokok yang mendasari sebuah cerita disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'alur','is_correct'=>false,'is_active'=>true],['text'=>'latar','is_correct'=>false,'is_active'=>true],['text'=>'amanat','is_correct'=>false,'is_active'=>true],['text'=>'tema','is_correct'=>true,'is_active'=>true]]);

        // BIND 38
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Rangkaian peristiwa yang membentuk cerita disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'alur','is_correct'=>true,'is_active'=>true],['text'=>'tema','is_correct'=>false,'is_active'=>true],['text'=>'tokoh','is_correct'=>false,'is_active'=>true],['text'=>'latar','is_correct'=>false,'is_active'=>true]]);

        // BIND 39
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Tempat, waktu, dan suasana terjadinya peristiwa dalam cerita disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'amanat','is_correct'=>false,'is_active'=>true],['text'=>'latar','is_correct'=>true,'is_active'=>true],['text'=>'alur','is_correct'=>false,'is_active'=>true],['text'=>'sudut pandang','is_correct'=>false,'is_active'=>true]]);

        // BIND 40
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Cara pengarang menggambarkan sifat tokoh dalam cerita disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tema','is_correct'=>false,'is_active'=>true],['text'=>'amanat','is_correct'=>false,'is_active'=>true],['text'=>'latar','is_correct'=>false,'is_active'=>true],['text'=>'penokohan','is_correct'=>true,'is_active'=>true]]);

        // BIND 41
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Pesan yang ingin disampaikan pengarang kepada pembaca melalui cerita disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'amanat','is_correct'=>true,'is_active'=>true],['text'=>'alur','is_correct'=>false,'is_active'=>true],['text'=>'tema','is_correct'=>false,'is_active'=>true],['text'=>'latar','is_correct'=>false,'is_active'=>true]]);

        // BIND 42
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Dalam sebuah cerpen, pelaku utama menceritakan dirinya sendiri dengan kata aku. Sudut pandang yang digunakan pengarang adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'orang ketiga serba tahu','is_correct'=>false,'is_active'=>true],['text'=>'orang pertama pelaku utama','is_correct'=>true,'is_active'=>true],['text'=>'orang ketiga pengamat','is_correct'=>false,'is_active'=>true],['text'=>'orang kedua','is_correct'=>false,'is_active'=>true]]);

        // BIND 43
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Dengan senang hati, Dito membagi bekalnya kepada temannya yang lupa membawa makanan. Sifat Dito dalam kutipan tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kikir','is_correct'=>false,'is_active'=>true],['text'=>'sombong','is_correct'=>false,'is_active'=>true],['text'=>'pemalu','is_correct'=>false,'is_active'=>true],['text'=>'dermawan','is_correct'=>true,'is_active'=>true]]);

        // BIND 44
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Satu bait pantun terdiri atas ... baris.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'dua','is_correct'=>false,'is_active'=>true],['text'=>'empat','is_correct'=>true,'is_active'=>true],['text'=>'enam','is_correct'=>false,'is_active'=>true],['text'=>'delapan','is_correct'=>false,'is_active'=>true]]);

        // BIND 45
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sampiran pada pantun terdapat pada baris ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'ketiga dan keempat','is_correct'=>false,'is_active'=>true],['text'=>'pertama dan ketiga','is_correct'=>false,'is_active'=>true],['text'=>'kedua dan keempat','is_correct'=>false,'is_active'=>true],['text'=>'pertama dan kedua','is_correct'=>true,'is_active'=>true]]);

        // BIND 46
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Pantun pada umumnya memiliki pola rima ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'a-a-a-a','is_correct'=>false,'is_active'=>true],['text'=>'a-b-a-b','is_correct'=>true,'is_active'=>true],['text'=>'a-a-b-b','is_correct'=>false,'is_active'=>true],['text'=>'a-b-c-d','is_correct'=>false,'is_active'=>true]]);

        // BIND 47
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Isi atau maksud pantun terdapat pada baris ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'ketiga dan keempat','is_correct'=>true,'is_active'=>true],['text'=>'pertama dan kedua','is_correct'=>false,'is_active'=>true],['text'=>'pertama dan keempat','is_correct'=>false,'is_active'=>true],['text'=>'kedua dan ketiga','is_correct'=>false,'is_active'=>true]]);

        // BIND 48
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Teks yang berisi langkah-langkah untuk melakukan atau membuat sesuatu disebut teks ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'narasi','is_correct'=>false,'is_active'=>true],['text'=>'deskripsi','is_correct'=>false,'is_active'=>true],['text'=>'prosedur','is_correct'=>true,'is_active'=>true],['text'=>'eksposisi','is_correct'=>false,'is_active'=>true]]);

        // BIND 49
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata penghubung yang sering digunakan untuk menunjukkan urutan langkah dalam teks prosedur adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'pertama, kemudian, selanjutnya','is_correct'=>true,'is_active'=>true],['text'=>'meskipun, walaupun, sekalipun','is_correct'=>false,'is_active'=>true],['text'=>'karena, sebab, oleh karena itu','is_correct'=>false,'is_active'=>true],['text'=>'sedangkan, tetapi, namun','is_correct'=>false,'is_active'=>true]]);

        // BIND 50
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Teks yang menggambarkan suatu objek secara rinci sehingga pembaca seolah-olah melihatnya sendiri disebut teks ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'prosedur','is_correct'=>false,'is_active'=>true],['text'=>'deskripsi','is_correct'=>true,'is_active'=>true],['text'=>'persuasi','is_correct'=>false,'is_active'=>true],['text'=>'laporan','is_correct'=>false,'is_active'=>true]]);

                // BIND 51
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata yang ejaan dan lafalnya sama tetapi maknanya berbeda disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'sinonim','is_correct'=>false,'is_active'=>true],['text'=>'antonim','is_correct'=>false,'is_active'=>true],['text'=>'homonim','is_correct'=>true,'is_active'=>true],['text'=>'hiponim','is_correct'=>false,'is_active'=>true]]);

        // BIND 52
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata bisa pada kalimat "Bisa ular kobra sangat mematikan" bermakna ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'racun','is_correct'=>true,'is_active'=>true],['text'=>'dapat','is_correct'=>false,'is_active'=>true],['text'=>'mampu','is_correct'=>false,'is_active'=>true],['text'=>'sanggup','is_correct'=>false,'is_active'=>true]]);

        // BIND 53
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Ungkapan panjang tangan berarti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'suka menolong','is_correct'=>false,'is_active'=>true],['text'=>'suka mencuri','is_correct'=>true,'is_active'=>true],['text'=>'suka menari','is_correct'=>false,'is_active'=>true],['text'=>'suka berolahraga','is_correct'=>false,'is_active'=>true]]);

        // BIND 54
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Ungkapan buah hati berarti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'teman dekat','is_correct'=>false,'is_active'=>true],['text'=>'penyakit hati','is_correct'=>false,'is_active'=>true],['text'=>'sahabat lama','is_correct'=>false,'is_active'=>true],['text'=>'anak kesayangan','is_correct'=>true,'is_active'=>true]]);

        // BIND 55
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Ungkapan kepala batu berarti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'keras kepala','is_correct'=>true,'is_active'=>true],['text'=>'sangat pintar','is_correct'=>false,'is_active'=>true],['text'=>'sakit kepala','is_correct'=>false,'is_active'=>true],['text'=>'sangat kuat','is_correct'=>false,'is_active'=>true]]);

        // BIND 56
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Ungkapan membanting tulang berarti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'berolahraga keras','is_correct'=>false,'is_active'=>true],['text'=>'mengalami patah tulang','is_correct'=>false,'is_active'=>true],['text'=>'bekerja keras','is_correct'=>true,'is_active'=>true],['text'=>'bermalas-malasan','is_correct'=>false,'is_active'=>true]]);

        // BIND 57
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Ungkapan cari muka berarti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'mencari wajah yang hilang','is_correct'=>false,'is_active'=>true],['text'=>'berusaha mendapat pujian atau perhatian','is_correct'=>true,'is_active'=>true],['text'=>'malu bertemu orang','is_correct'=>false,'is_active'=>true],['text'=>'berdandan dengan rapi','is_correct'=>false,'is_active'=>true]]);

        // BIND 58
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Ungkapan gulung tikar berarti ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'bangkrut','is_correct'=>true,'is_active'=>true],['text'=>'membereskan tikar','is_correct'=>false,'is_active'=>true],['text'=>'bekerja sama','is_correct'=>false,'is_active'=>true],['text'=>'pindah rumah','is_correct'=>false,'is_active'=>true]]);

        // BIND 59
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat "Ia berlari bagaikan kijang" menggunakan majas ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'metafora','is_correct'=>false,'is_active'=>true],['text'=>'simile','is_correct'=>true,'is_active'=>true],['text'=>'hiperbola','is_correct'=>false,'is_active'=>true],['text'=>'personifikasi','is_correct'=>false,'is_active'=>true]]);

        // BIND 60
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat "Matahari tersenyum menyambut pagi" menggunakan majas ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'simile','is_correct'=>false,'is_active'=>true],['text'=>'hiperbola','is_correct'=>false,'is_active'=>true],['text'=>'ironi','is_correct'=>false,'is_active'=>true],['text'=>'personifikasi','is_correct'=>true,'is_active'=>true]]);

        // BIND 61
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat "Suaranya menggelegar membelah langit" merupakan contoh majas ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'hiperbola','is_correct'=>true,'is_active'=>true],['text'=>'simile','is_correct'=>false,'is_active'=>true],['text'=>'litotes','is_correct'=>false,'is_active'=>true],['text'=>'metafora','is_correct'=>false,'is_active'=>true]]);

        // BIND 62
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat "Dialah bunga desa ini" menggunakan majas ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'personifikasi','is_correct'=>false,'is_active'=>true],['text'=>'hiperbola','is_correct'=>false,'is_active'=>true],['text'=>'metafora','is_correct'=>true,'is_active'=>true],['text'=>'sinekdoke','is_correct'=>false,'is_active'=>true]]);

        // BIND 63
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Paragraf yang kalimat utamanya terletak di awal paragraf disebut paragraf ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'induktif','is_correct'=>false,'is_active'=>true],['text'=>'campuran','is_correct'=>false,'is_active'=>true],['text'=>'deduktif','is_correct'=>true,'is_active'=>true],['text'=>'naratif','is_correct'=>false,'is_active'=>true]]);

        // BIND 64
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Paragraf yang kalimat utamanya terletak di akhir paragraf disebut paragraf ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'induktif','is_correct'=>true,'is_active'=>true],['text'=>'deduktif','is_correct'=>false,'is_active'=>true],['text'=>'deskriptif','is_correct'=>false,'is_active'=>true],['text'=>'eksposisi','is_correct'=>false,'is_active'=>true]]);

        // BIND 65
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Perhatikan paragraf berikut! Sampah plastik sulit terurai. Sampah plastik dapat bertahan ratusan tahun di dalam tanah. Karena itu, penggunaan plastik perlu dikurangi. Ide pokok paragraf tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'cara mendaur ulang plastik','is_correct'=>false,'is_active'=>true],['text'=>'harga plastik yang murah','is_correct'=>false,'is_active'=>true],['text'=>'sampah plastik sulit terurai','is_correct'=>true,'is_active'=>true],['text'=>'tanah yang tercemar limbah','is_correct'=>false,'is_active'=>true]]);

        // BIND 66
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat yang berisi rincian atau penjelasan untuk mendukung kalimat utama disebut kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'penjelas','is_correct'=>true,'is_active'=>true],['text'=>'majemuk','is_correct'=>false,'is_active'=>true],['text'=>'tanya','is_correct'=>false,'is_active'=>true],['text'=>'seru','is_correct'=>false,'is_active'=>true]]);

        // BIND 67
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata ganti orang pertama jamak yang tidak mencakup lawan bicara adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kita','is_correct'=>false,'is_active'=>true],['text'=>'kalian','is_correct'=>false,'is_active'=>true],['text'=>'mereka','is_correct'=>false,'is_active'=>true],['text'=>'kami','is_correct'=>true,'is_active'=>true]]);

        // BIND 68
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata ganti orang yang mencakup pembicara dan lawan bicara adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kami','is_correct'=>false,'is_active'=>true],['text'=>'kita','is_correct'=>true,'is_active'=>true],['text'=>'beliau','is_correct'=>false,'is_active'=>true],['text'=>'engkau','is_correct'=>false,'is_active'=>true]]);

        // BIND 69
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata tanya yang tepat untuk menanyakan tempat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kapan','is_correct'=>false,'is_active'=>true],['text'=>'siapa','is_correct'=>false,'is_active'=>true],['text'=>'mengapa','is_correct'=>false,'is_active'=>true],['text'=>'di mana','is_correct'=>true,'is_active'=>true]]);

        // BIND 70
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata tanya yang tepat untuk menanyakan cara adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'bagaimana','is_correct'=>true,'is_active'=>true],['text'=>'berapa','is_correct'=>false,'is_active'=>true],['text'=>'apa','is_correct'=>false,'is_active'=>true],['text'=>'kapan','is_correct'=>false,'is_active'=>true]]);

        // BIND 71
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata tanya yang tepat untuk menanyakan alasan atau sebab adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'di mana','is_correct'=>false,'is_active'=>true],['text'=>'mengapa','is_correct'=>true,'is_active'=>true],['text'=>'siapa','is_correct'=>false,'is_active'=>true],['text'=>'berapa','is_correct'=>false,'is_active'=>true]]);

        // BIND 72
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata tanya yang tepat untuk menanyakan orang adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'apa','is_correct'=>false,'is_active'=>true],['text'=>'kapan','is_correct'=>false,'is_active'=>true],['text'=>'siapa','is_correct'=>true,'is_active'=>true],['text'=>'bagaimana','is_correct'=>false,'is_active'=>true]]);

        // BIND 73
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata hubung yang menyatakan pertentangan adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'dan','is_correct'=>false,'is_active'=>true],['text'=>'tetapi','is_correct'=>true,'is_active'=>true],['text'=>'karena','is_correct'=>false,'is_active'=>true],['text'=>'sehingga','is_correct'=>false,'is_active'=>true]]);

        // BIND 74
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Lengkapilah kalimat berikut! Andi tidak masuk sekolah ... ia sedang sakit.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tetapi','is_correct'=>false,'is_active'=>true],['text'=>'agar','is_correct'=>false,'is_active'=>true],['text'=>'jika','is_correct'=>false,'is_active'=>true],['text'=>'karena','is_correct'=>true,'is_active'=>true]]);

        // BIND 75
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Lengkapilah kalimat berikut! ... hari hujan, kami akan tetap berangkat ke sekolah.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Meskipun','is_correct'=>true,'is_active'=>true],['text'=>'Karena','is_correct'=>false,'is_active'=>true],['text'=>'Sehingga','is_correct'=>false,'is_active'=>true],['text'=>'Agar','is_correct'=>false,'is_active'=>true]]);

        // BIND 76
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Lengkapilah kalimat berikut! Rina belajar dengan tekun ... ia lulus dengan nilai baik.','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'meskipun','is_correct'=>false,'is_active'=>true],['text'=>'agar','is_correct'=>true,'is_active'=>true],['text'=>'tetapi','is_correct'=>false,'is_active'=>true],['text'=>'walaupun','is_correct'=>false,'is_active'=>true]]);

        // BIND 77
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat majemuk setara terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Adik menangis karena jatuh dari sepeda.','is_correct'=>false,'is_active'=>true],['text'=>'Ayah membaca koran, sedangkan Ibu memasak di dapur.','is_correct'=>true,'is_active'=>true],['text'=>'Kami pulang setelah hujan reda.','is_correct'=>false,'is_active'=>true],['text'=>'Ani rajin belajar agar naik kelas.','is_correct'=>false,'is_active'=>true]]);

        // BIND 78
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat tunggal terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ibu memasak sayur dan Ayah membaca koran.','is_correct'=>false,'is_active'=>true],['text'=>'Kami belajar karena besok ada ulangan.','is_correct'=>false,'is_active'=>true],['text'=>'Dia tidak datang sebab sakit.','is_correct'=>false,'is_active'=>true],['text'=>'Nelayan menebar jala di laut.','is_correct'=>true,'is_active'=>true]]);

        // BIND 79
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Subjek pada kalimat "Adik membaca buku cerita di teras" adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Adik','is_correct'=>true,'is_active'=>true],['text'=>'membaca','is_correct'=>false,'is_active'=>true],['text'=>'buku cerita','is_correct'=>false,'is_active'=>true],['text'=>'di teras','is_correct'=>false,'is_active'=>true]]);

        // BIND 80
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Predikat pada kalimat "Ibu menyiram bunga di halaman" adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ibu','is_correct'=>false,'is_active'=>true],['text'=>'bunga','is_correct'=>false,'is_active'=>true],['text'=>'menyiram','is_correct'=>true,'is_active'=>true],['text'=>'di halaman','is_correct'=>false,'is_active'=>true]]);

        // BIND 81
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Objek pada kalimat "Kakak membeli sepatu baru di toko" adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kakak','is_correct'=>false,'is_active'=>true],['text'=>'membeli','is_correct'=>false,'is_active'=>true],['text'=>'di toko','is_correct'=>false,'is_active'=>true],['text'=>'sepatu baru','is_correct'=>true,'is_active'=>true]]);

        // BIND 82
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Keterangan tempat pada kalimat "Kami bermain bola di lapangan sekolah" adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kami','is_correct'=>false,'is_active'=>true],['text'=>'di lapangan sekolah','is_correct'=>true,'is_active'=>true],['text'=>'bermain','is_correct'=>false,'is_active'=>true],['text'=>'bola','is_correct'=>false,'is_active'=>true]]);

        // BIND 83
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat perintah terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Tolong tutup pintu itu.','is_correct'=>true,'is_active'=>true],['text'=>'Pintu itu sudah ditutup.','is_correct'=>false,'is_active'=>true],['text'=>'Siapa yang menutup pintu itu?','is_correct'=>false,'is_active'=>true],['text'=>'Wah, pintu itu besar sekali!','is_correct'=>false,'is_active'=>true]]);

        // BIND 84
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat seru terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kapan kamu pulang dari sekolah?','is_correct'=>false,'is_active'=>true],['text'=>'Kamu pulang dari sekolah pukul dua.','is_correct'=>false,'is_active'=>true],['text'=>'Pulanglah sebelum hujan turun.','is_correct'=>false,'is_active'=>true],['text'=>'Wah, indah sekali pemandangan ini!','is_correct'=>true,'is_active'=>true]]);

        // BIND 85
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Bentuk pasif dari kalimat "Ani membaca buku itu" adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Buku itu dibaca Ani.','is_correct'=>true,'is_active'=>true],['text'=>'Buku itu membaca Ani.','is_correct'=>false,'is_active'=>true],['text'=>'Ani dibaca buku itu.','is_correct'=>false,'is_active'=>true],['text'=>'Ani terbaca buku itu.','is_correct'=>false,'is_active'=>true]]);

        // BIND 86
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Bentuk aktif dari kalimat "Rumah itu dibersihkan oleh Ibu" adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Rumah itu membersihkan Ibu.','is_correct'=>false,'is_active'=>true],['text'=>'Rumah itu bersih oleh Ibu.','is_correct'=>false,'is_active'=>true],['text'=>'Ibu dibersihkan rumah itu.','is_correct'=>false,'is_active'=>true],['text'=>'Ibu membersihkan rumah itu.','is_correct'=>true,'is_active'=>true]]);

        // BIND 87
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Singkatan dari kata "dan sebagainya" yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'dll.','is_correct'=>false,'is_active'=>true],['text'=>'dsb.','is_correct'=>true,'is_active'=>true],['text'=>'dst.','is_correct'=>false,'is_active'=>true],['text'=>'dkk.','is_correct'=>false,'is_active'=>true]]);

        // BIND 88
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Singkatan dari kata "Yang terhormat" yang digunakan pada surat adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Yth.','is_correct'=>true,'is_active'=>true],['text'=>'Yg.','is_correct'=>false,'is_active'=>true],['text'=>'Yhs.','is_correct'=>false,'is_active'=>true],['text'=>'Yt.','is_correct'=>false,'is_active'=>true]]);

        // BIND 89
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan nilai uang yang tepat terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Harga buku itu Rp 15,000.00.','is_correct'=>false,'is_active'=>true],['text'=>'Harga buku itu Rp15.000,00.','is_correct'=>true,'is_active'=>true],['text'=>'Harga buku itu rp15.000,00.','is_correct'=>false,'is_active'=>true],['text'=>'Harga buku itu Rp.15.000,-','is_correct'=>false,'is_active'=>true]]);

        // BIND 90
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penggunaan tanda baca yang tepat pada kalimat langsung terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ibu berkata, "Nak, makanlah dulu."','is_correct'=>true,'is_active'=>true],['text'=>'Ibu berkata "Nak, makanlah dulu".','is_correct'=>false,'is_active'=>true],['text'=>'Ibu berkata. "Nak, makanlah dulu."','is_correct'=>false,'is_active'=>true],['text'=>'Ibu berkata, Nak, makanlah dulu.','is_correct'=>false,'is_active'=>true]]);

        // BIND 91
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penggunaan tanda titik dua yang tepat terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kami memerlukan: gunting, lem, dan kertas.','is_correct'=>false,'is_active'=>true],['text'=>'Kami memerlukan tiga macam alat: gunting, lem, dan kertas.','is_correct'=>true,'is_active'=>true],['text'=>'Kami: memerlukan gunting, lem, dan kertas.','is_correct'=>false,'is_active'=>true],['text'=>'Kami memerlukan tiga macam alat, gunting: lem, dan kertas.','is_correct'=>false,'is_active'=>true]]);

        // BIND 92
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'sistim','is_correct'=>false,'is_active'=>true],['text'=>'sisitem','is_correct'=>false,'is_active'=>true],['text'=>'sestem','is_correct'=>false,'is_active'=>true],['text'=>'sistem','is_correct'=>true,'is_active'=>true]]);

        // BIND 93
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kwalitas','is_correct'=>false,'is_active'=>true],['text'=>'kualitas','is_correct'=>true,'is_active'=>true],['text'=>'kwalites','is_correct'=>false,'is_active'=>true],['text'=>'kualites','is_correct'=>false,'is_active'=>true]]);

        // BIND 94
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'obyek','is_correct'=>false,'is_active'=>true],['text'=>'objeck','is_correct'=>false,'is_active'=>true],['text'=>'objek','is_correct'=>true,'is_active'=>true],['text'=>'obyeck','is_correct'=>false,'is_active'=>true]]);

        // BIND 95
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'izin','is_correct'=>true,'is_active'=>true],['text'=>'ijin','is_correct'=>false,'is_active'=>true],['text'=>'ijjin','is_correct'=>false,'is_active'=>true],['text'=>'idzin','is_correct'=>false,'is_active'=>true]]);

        // BIND 96
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tehnik','is_correct'=>false,'is_active'=>true],['text'=>'tekhnik','is_correct'=>false,'is_active'=>true],['text'=>'teknik','is_correct'=>true,'is_active'=>true],['text'=>'tenik','is_correct'=>false,'is_active'=>true]]);

        // BIND 97
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kwitansi','is_correct'=>false,'is_active'=>true],['text'=>'kuitansi','is_correct'=>true,'is_active'=>true],['text'=>'kwitanci','is_correct'=>false,'is_active'=>true],['text'=>'kuitanci','is_correct'=>false,'is_active'=>true]]);

        // BIND 98
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'hakekat','is_correct'=>false,'is_active'=>true],['text'=>'hakikat','is_correct'=>true,'is_active'=>true],['text'=>'hakiqat','is_correct'=>false,'is_active'=>true],['text'=>'hakekad','is_correct'=>false,'is_active'=>true]]);

        // BIND 99
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata baku yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'atlit','is_correct'=>false,'is_active'=>true],['text'=>'atlet','is_correct'=>true,'is_active'=>true],['text'=>'atled','is_correct'=>false,'is_active'=>true],['text'=>'athlet','is_correct'=>false,'is_active'=>true]]);

        // BIND 100
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan nama bulan yang baku adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Nopember','is_correct'=>false,'is_active'=>true],['text'=>'Nofember','is_correct'=>false,'is_active'=>true],['text'=>'Novemper','is_correct'=>false,'is_active'=>true],['text'=>'November','is_correct'=>true,'is_active'=>true]]);

        // BIND 101
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Satu baris dalam puisi disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'bait','is_correct'=>false,'is_active'=>true],['text'=>'larik','is_correct'=>true,'is_active'=>true],['text'=>'rima','is_correct'=>false,'is_active'=>true],['text'=>'diksi','is_correct'=>false,'is_active'=>true]]);

        // BIND 102
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kumpulan larik dalam puisi yang membentuk satu kesatuan disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'bait','is_correct'=>true,'is_active'=>true],['text'=>'baris','is_correct'=>false,'is_active'=>true],['text'=>'tema','is_correct'=>false,'is_active'=>true],['text'=>'judul','is_correct'=>false,'is_active'=>true]]);

        // BIND 103
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Persamaan bunyi pada akhir larik puisi disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'alur','is_correct'=>false,'is_active'=>true],['text'=>'amanat','is_correct'=>false,'is_active'=>true],['text'=>'sampiran','is_correct'=>false,'is_active'=>true],['text'=>'rima','is_correct'=>true,'is_active'=>true]]);

        // BIND 104
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Puisi lama yang terdiri atas dua baris, baris pertama berisi syarat atau masalah dan baris kedua berisi akibatnya, disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'talibun','is_correct'=>false,'is_active'=>true],['text'=>'gurindam','is_correct'=>true,'is_active'=>true],['text'=>'karmina','is_correct'=>false,'is_active'=>true],['text'=>'syair','is_correct'=>false,'is_active'=>true]]);

        // BIND 105
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Puisi lama yang terdiri atas empat baris, bersajak a-a-a-a, dan tidak memiliki sampiran disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'syair','is_correct'=>true,'is_active'=>true],['text'=>'pantun','is_correct'=>false,'is_active'=>true],['text'=>'gurindam','is_correct'=>false,'is_active'=>true],['text'=>'seloka','is_correct'=>false,'is_active'=>true]]);

        // BIND 106
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Perhatikan pantun berikut! Anak ayam turun sepuluh, mati satu tinggal sembilan. Rajin belajar jangan bertangguh, agar ilmu bertambah dalam. Pantun tersebut termasuk pantun ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'jenaka','is_correct'=>false,'is_active'=>true],['text'=>'nasihat','is_correct'=>true,'is_active'=>true],['text'=>'teka-teki','is_correct'=>false,'is_active'=>true],['text'=>'perkenalan','is_correct'=>false,'is_active'=>true]]);

        // BIND 107
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Tokoh yang memiliki watak baik dan menjadi tokoh utama dalam cerita disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'antagonis','is_correct'=>false,'is_active'=>true],['text'=>'figuran','is_correct'=>false,'is_active'=>true],['text'=>'protagonis','is_correct'=>true,'is_active'=>true],['text'=>'narator','is_correct'=>false,'is_active'=>true]]);

        // BIND 108
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Tokoh yang berperan sebagai penentang tokoh utama dalam cerita disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'antagonis','is_correct'=>true,'is_active'=>true],['text'=>'protagonis','is_correct'=>false,'is_active'=>true],['text'=>'pengarang','is_correct'=>false,'is_active'=>true],['text'=>'pembaca','is_correct'=>false,'is_active'=>true]]);

        // BIND 109
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Cerita yang peristiwanya disusun berurutan dari awal, tengah, hingga akhir memiliki alur ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'mundur','is_correct'=>false,'is_active'=>true],['text'=>'campuran','is_correct'=>false,'is_active'=>true],['text'=>'maju','is_correct'=>true,'is_active'=>true],['text'=>'melingkar','is_correct'=>false,'is_active'=>true]]);

        // BIND 110
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Cerita yang mengisahkan kembali peristiwa masa lalu tokoh disebut beralur ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'maju','is_correct'=>false,'is_active'=>true],['text'=>'mundur','is_correct'=>true,'is_active'=>true],['text'=>'lurus','is_correct'=>false,'is_active'=>true],['text'=>'tertutup','is_correct'=>false,'is_active'=>true]]);

        // BIND 111
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Bagian alur cerita ketika konflik mencapai puncak ketegangan disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'pengenalan','is_correct'=>false,'is_active'=>true],['text'=>'penyelesaian','is_correct'=>false,'is_active'=>true],['text'=>'klimaks','is_correct'=>true,'is_active'=>true],['text'=>'orientasi','is_correct'=>false,'is_active'=>true]]);

        // BIND 112
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Malam itu hujan turun deras dan petir menyambar. Rumah tua itu terasa mencekam. Latar suasana dalam kutipan tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'gembira','is_correct'=>false,'is_active'=>true],['text'=>'tenang','is_correct'=>false,'is_active'=>true],['text'=>'mencekam','is_correct'=>true,'is_active'=>true],['text'=>'lucu','is_correct'=>false,'is_active'=>true]]);

        // BIND 113
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata ulang yang menyatakan makna saling adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tolong-menolong','is_correct'=>true,'is_active'=>true],['text'=>'berlari-lari','is_correct'=>false,'is_active'=>true],['text'=>'rumah-rumah','is_correct'=>false,'is_active'=>true],['text'=>'kupu-kupu','is_correct'=>false,'is_active'=>true]]);

        // BIND 114
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata berikut yang termasuk kata ulang semu adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'buku-buku','is_correct'=>false,'is_active'=>true],['text'=>'laba-laba','is_correct'=>true,'is_active'=>true],['text'=>'main-main','is_correct'=>false,'is_active'=>true],['text'=>'sayur-mayur','is_correct'=>false,'is_active'=>true]]);

        // BIND 115
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata dasar dari kata kesedihan adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'sedih','is_correct'=>true,'is_active'=>true],['text'=>'kesedih','is_correct'=>false,'is_active'=>true],['text'=>'sedihan','is_correct'=>false,'is_active'=>true],['text'=>'edih','is_correct'=>false,'is_active'=>true]]);

        // BIND 116
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Yang termasuk kata majemuk adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'lari-lari','is_correct'=>false,'is_active'=>true],['text'=>'berlari','is_correct'=>false,'is_active'=>true],['text'=>'kereta api','is_correct'=>true,'is_active'=>true],['text'=>'larian','is_correct'=>false,'is_active'=>true]]);

        // BIND 117
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Unsur berita yang menjawab pertanyaan siapa yang terlibat dalam peristiwa (who) adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tempat kejadian','is_correct'=>false,'is_active'=>true],['text'=>'pelaku atau tokoh','is_correct'=>true,'is_active'=>true],['text'=>'waktu kejadian','is_correct'=>false,'is_active'=>true],['text'=>'penyebab kejadian','is_correct'=>false,'is_active'=>true]]);

        // BIND 118
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Unsur why pada sebuah berita menjelaskan ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'tempat peristiwa terjadi','is_correct'=>false,'is_active'=>true],['text'=>'waktu peristiwa terjadi','is_correct'=>false,'is_active'=>true],['text'=>'sebab peristiwa terjadi','is_correct'=>true,'is_active'=>true],['text'=>'pelaku peristiwa','is_correct'=>false,'is_active'=>true]]);

        // BIND 119
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Bagian surat resmi yang berisi pokok isi surat secara singkat disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'lampiran','is_correct'=>false,'is_active'=>true],['text'=>'perihal','is_correct'=>true,'is_active'=>true],['text'=>'salam penutup','is_correct'=>false,'is_active'=>true],['text'=>'alamat pengirim','is_correct'=>false,'is_active'=>true]]);

        // BIND 120
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Tempat dan tanggal pembuatan surat ditulis pada bagian ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'pojok kiri bawah','is_correct'=>false,'is_active'=>true],['text'=>'tengah surat','is_correct'=>false,'is_active'=>true],['text'=>'pojok kanan atas','is_correct'=>true,'is_active'=>true],['text'=>'paling bawah surat','is_correct'=>false,'is_active'=>true]]);

        // BIND 121
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Tujuan utama teks eksposisi adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'menghibur pembaca dengan cerita khayalan','is_correct'=>false,'is_active'=>true],['text'=>'memaparkan gagasan atau informasi disertai fakta','is_correct'=>true,'is_active'=>true],['text'=>'menceritakan pengalaman pribadi penulis','is_correct'=>false,'is_active'=>true],['text'=>'menggambarkan perasaan dengan kata indah','is_correct'=>false,'is_active'=>true]]);

        // BIND 122
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Teks yang bertujuan mengajak atau membujuk pembaca untuk melakukan sesuatu disebut teks ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'persuasi','is_correct'=>true,'is_active'=>true],['text'=>'narasi','is_correct'=>false,'is_active'=>true],['text'=>'deskripsi','is_correct'=>false,'is_active'=>true],['text'=>'laporan','is_correct'=>false,'is_active'=>true]]);

        // BIND 123
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Teks yang menceritakan rangkaian peristiwa secara berurutan disebut teks ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'deskripsi','is_correct'=>false,'is_active'=>true],['text'=>'prosedur','is_correct'=>false,'is_active'=>true],['text'=>'eksposisi','is_correct'=>false,'is_active'=>true],['text'=>'narasi','is_correct'=>true,'is_active'=>true]]);

        // BIND 124
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Teks laporan hasil observasi berisi ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'hasil pengamatan terhadap suatu objek','is_correct'=>true,'is_active'=>true],['text'=>'ajakan untuk membeli produk','is_correct'=>false,'is_active'=>true],['text'=>'cerita khayalan tokoh binatang','is_correct'=>false,'is_active'=>true],['text'=>'perasaan penulis terhadap alam','is_correct'=>false,'is_active'=>true]]);

        // BIND 125
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Struktur teks prosedur yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'langkah-langkah, tujuan, alat dan bahan','is_correct'=>false,'is_active'=>true],['text'=>'alat dan bahan, penutup, tujuan','is_correct'=>false,'is_active'=>true],['text'=>'tujuan, alat dan bahan, langkah-langkah','is_correct'=>true,'is_active'=>true],['text'=>'orientasi, komplikasi, resolusi','is_correct'=>false,'is_active'=>true]]);

        // BIND 126
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat yang lazim digunakan dalam langkah-langkah teks prosedur adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Telur itu sudah dipecahkan oleh Ibu.','is_correct'=>false,'is_active'=>true],['text'=>'Alangkah lezatnya telur dadar itu!','is_correct'=>false,'is_active'=>true],['text'=>'Kami sangat menyukai telur dadar.','is_correct'=>false,'is_active'=>true],['text'=>'Kocoklah telur hingga tercampur rata.','is_correct'=>true,'is_active'=>true]]);

        // BIND 127
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Cerita yang tokoh-tokohnya binatang dan berperilaku seperti manusia disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'fabel','is_correct'=>true,'is_active'=>true],['text'=>'legenda','is_correct'=>false,'is_active'=>true],['text'=>'biografi','is_correct'=>false,'is_active'=>true],['text'=>'hikayat','is_correct'=>false,'is_active'=>true]]);

        // BIND 128
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Cerita rakyat yang mengisahkan asal-usul suatu tempat atau kejadian disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'fabel','is_correct'=>false,'is_active'=>true],['text'=>'pantun','is_correct'=>false,'is_active'=>true],['text'=>'legenda','is_correct'=>true,'is_active'=>true],['text'=>'gurindam','is_correct'=>false,'is_active'=>true]]);

        // BIND 129
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Riwayat hidup seseorang yang ditulis oleh orang lain disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'autobiografi','is_correct'=>false,'is_active'=>true],['text'=>'biografi','is_correct'=>true,'is_active'=>true],['text'=>'memoar','is_correct'=>false,'is_active'=>true],['text'=>'catatan harian','is_correct'=>false,'is_active'=>true]]);

        // BIND 130
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Riwayat hidup seseorang yang ditulis oleh dirinya sendiri disebut ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'biografi','is_correct'=>false,'is_active'=>true],['text'=>'berita','is_correct'=>false,'is_active'=>true],['text'=>'autobiografi','is_correct'=>true,'is_active'=>true],['text'=>'laporan','is_correct'=>false,'is_active'=>true]]);

        // BIND 131
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat yang efektif adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Para hadirin sekalian dimohon segera duduk.','is_correct'=>false,'is_active'=>true],['text'=>'Hadirin dimohon segera duduk.','is_correct'=>true,'is_active'=>true],['text'=>'Para hadirin-hadirin dimohon segera duduk.','is_correct'=>false,'is_active'=>true],['text'=>'Hadirin semuanya dimohon agar segera untuk duduk.','is_correct'=>false,'is_active'=>true]]);

        // BIND 132
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kalimat yang efektif adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Berbagai macam-macam buah dijual di pasar itu.','is_correct'=>false,'is_active'=>true],['text'=>'Banyak berbagai buah dijual di pasar itu.','is_correct'=>false,'is_active'=>true],['text'=>'Berbagai buah dijual di pasar itu.','is_correct'=>true,'is_active'=>true],['text'=>'Buah-buahan bermacam-macam dijual di pasar itu.','is_correct'=>false,'is_active'=>true]]);

        // BIND 133
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Bentuk kata berimbuhan yang baku adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'merubah','is_correct'=>false,'is_active'=>true],['text'=>'mengubah','is_correct'=>true,'is_active'=>true],['text'=>'mengrubah','is_correct'=>false,'is_active'=>true],['text'=>'menrubah','is_correct'=>false,'is_active'=>true]]);

        // BIND 134
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Bentuk kata berimbuhan yang baku adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'mempengaruhi','is_correct'=>false,'is_active'=>true],['text'=>'memengaruhi','is_correct'=>true,'is_active'=>true],['text'=>'mengpengaruhi','is_correct'=>false,'is_active'=>true],['text'=>'menpengaruhi','is_correct'=>false,'is_active'=>true]]);

        // BIND 135
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata depan ke yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kesekolah','is_correct'=>false,'is_active'=>true],['text'=>'ke-sekolah','is_correct'=>false,'is_active'=>true],['text'=>'ke sekolah','is_correct'=>true,'is_active'=>true],['text'=>'kesekolahan','is_correct'=>false,'is_active'=>true]]);

        // BIND 136
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan partikel pun yang benar terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Siapapun boleh ikut lomba itu.','is_correct'=>false,'is_active'=>true],['text'=>'Siapa-pun boleh ikut lomba itu.','is_correct'=>false,'is_active'=>true],['text'=>'Siapa pun boleh ikut lomba itu.','is_correct'=>true,'is_active'=>true],['text'=>'Siapa.pun boleh ikut lomba itu.','is_correct'=>false,'is_active'=>true]]);

        // BIND 137
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan kata ulang yang benar adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'anak2','is_correct'=>false,'is_active'=>true],['text'=>'anak anak','is_correct'=>false,'is_active'=>true],['text'=>'anak-anak','is_correct'=>true,'is_active'=>true],['text'=>'anak-anak-','is_correct'=>false,'is_active'=>true]]);

        // BIND 138
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan huruf kapital pada nama jalan yang tepat terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Kami tinggal di jalan merdeka.','is_correct'=>false,'is_active'=>true],['text'=>'Kami tinggal di Jalan Merdeka.','is_correct'=>true,'is_active'=>true],['text'=>'Kami tinggal di jalan Merdeka.','is_correct'=>false,'is_active'=>true],['text'=>'Kami tinggal di JALAN merdeka.','is_correct'=>false,'is_active'=>true]]);

        // BIND 139
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Penulisan huruf kapital yang tepat terdapat pada kalimat ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Dia fasih berbicara bahasa inggris.','is_correct'=>false,'is_active'=>true],['text'=>'Dia fasih berbicara Bahasa inggris.','is_correct'=>false,'is_active'=>true],['text'=>'Dia fasih berbicara BAHASA Inggris.','is_correct'=>false,'is_active'=>true],['text'=>'Dia fasih berbicara bahasa Inggris.','is_correct'=>true,'is_active'=>true]]);

        // BIND 140
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Perhatikan paragraf berikut! Olahraga teratur sangat bermanfaat bagi tubuh. Olahraga membuat jantung lebih sehat. Olahraga juga membantu tubuh melawan penyakit. Ide pokok paragraf tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'jenis-jenis olahraga','is_correct'=>false,'is_active'=>true],['text'=>'manfaat olahraga teratur','is_correct'=>true,'is_active'=>true],['text'=>'cara menjaga kesehatan jantung','is_correct'=>false,'is_active'=>true],['text'=>'penyakit yang sering menyerang','is_correct'=>false,'is_active'=>true]]);

        // BIND 141
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Rina menyiram tanaman setiap sore. Ia juga memupuk dan mencabut rumput liar di sekitarnya. Tanaman Rina pun tumbuh subur. Watak Rina dalam kutipan tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'pemalas','is_correct'=>false,'is_active'=>true],['text'=>'tekun','is_correct'=>true,'is_active'=>true],['text'=>'pemarah','is_correct'=>false,'is_active'=>true],['text'=>'penakut','is_correct'=>false,'is_active'=>true]]);

        // BIND 142
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Dalam sebuah cerita, seorang anak mengembalikan dompet yang ia temukan kepada pemiliknya dan mendapat pujian. Amanat cerita tersebut adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'kejujuran akan mendatangkan kebaikan','is_correct'=>true,'is_active'=>true],['text'=>'temuan sebaiknya disimpan sendiri','is_correct'=>false,'is_active'=>true],['text'=>'pujian harus selalu dicari','is_correct'=>false,'is_active'=>true],['text'=>'dompet mudah hilang','is_correct'=>false,'is_active'=>true]]);

        // BIND 143
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Antonim kata terang adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'benderang','is_correct'=>false,'is_active'=>true],['text'=>'cerah','is_correct'=>false,'is_active'=>true],['text'=>'gelap','is_correct'=>true,'is_active'=>true],['text'=>'silau','is_correct'=>false,'is_active'=>true]]);

        // BIND 144
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sinonim kata pandai adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'pintar','is_correct'=>true,'is_active'=>true],['text'=>'bodoh','is_correct'=>false,'is_active'=>true],['text'=>'lambat','is_correct'=>false,'is_active'=>true],['text'=>'lugu','is_correct'=>false,'is_active'=>true]]);

        // BIND 145
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sinonim kata hadiah adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'denda','is_correct'=>false,'is_active'=>true],['text'=>'pajak','is_correct'=>false,'is_active'=>true],['text'=>'kado','is_correct'=>true,'is_active'=>true],['text'=>'utang','is_correct'=>false,'is_active'=>true]]);

        // BIND 146
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Antonim kata luas adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'lebar','is_correct'=>false,'is_active'=>true],['text'=>'sempit','is_correct'=>true,'is_active'=>true],['text'=>'panjang','is_correct'=>false,'is_active'=>true],['text'=>'besar','is_correct'=>false,'is_active'=>true]]);

        // BIND 147
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Antonim kata awal adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'mula','is_correct'=>false,'is_active'=>true],['text'=>'pertama','is_correct'=>false,'is_active'=>true],['text'=>'permulaan','is_correct'=>false,'is_active'=>true],['text'=>'akhir','is_correct'=>true,'is_active'=>true]]);

        // BIND 148
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Sinonim kata lelah adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'letih','is_correct'=>true,'is_active'=>true],['text'=>'segar','is_correct'=>false,'is_active'=>true],['text'=>'kuat','is_correct'=>false,'is_active'=>true],['text'=>'bugar','is_correct'=>false,'is_active'=>true]]);

        // BIND 149
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata tidak baku pada kalimat "Kemaren Ibu belanja ke pasar" adalah ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'Ibu','is_correct'=>false,'is_active'=>true],['text'=>'pasar','is_correct'=>false,'is_active'=>true],['text'=>'ke','is_correct'=>false,'is_active'=>true],['text'=>'Kemaren','is_correct'=>true,'is_active'=>true]]);

        // BIND 150
        $q = Question::create(['subject_id'=>$bindo->id,'payload'=>'Kata membaca termasuk jenis kata ....','score'=>1,'description'=>null,'is_active'=>true]);
        $q->answers()->createMany([['text'=>'benda','is_correct'=>false,'is_active'=>true],['text'=>'sifat','is_correct'=>false,'is_active'=>true],['text'=>'keterangan','is_correct'=>false,'is_active'=>true],['text'=>'kerja','is_correct'=>true,'is_active'=>true]]);
    }
}