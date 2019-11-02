@extends('layouts.app')

@php

    if( $country == 'tw'){
        $page_title = "隱私政策";
    } else {
        $page_title = __('title.tnc');
    }

@endphp

@section('title')
    {{ $page_title }}
@stop

@section('content')
    <main>
        <section class="top-nav-padding terms-panel">
            <div class="container">
                <div class=" py-4">

                    <h2 class="mb-4 font-weight-light ls-0">{{ $page_title }}</h2>

                    <div class="terms-wrap ls-0">

                        <h3>1. Kebijakan Privasi</h3>
                        <p>Nexstgo Company Limited dan segenap afiliasi kami (“Nexstgo,” “kami,” “kita) mengetahui betapa pentingnya privasi bagi para pelanggan kami, dan kami bermaksud untuk lebih jelas tentang bagaimana kami mengumpulkan, menggunakan dan mengungkapkan, pengalihan ataupun menyimpan Informasi Anda. Kebijakan Privasi ini menyediakan sebuah tinjauan luas tentang praktik informasi kami. Kebijakan Privasi berlaku untuk perangkat Nexstgo, situs dan pendaftaran online yang merujuk kepada atau tautan kebijakan privasi (keseluruhan, layanan kami)</p>
                        <p>Sementara kebijakan privasi berlaku kepada seluruh layanan kami, kami juga menyediakan tambahan privasi yang lebih spesifik, dimana menyangkut tambahan informasi mengenai praktik kami dalam hubungan dengan layanan tertentu. Tambahan ini berlaku untuk penggunaan Anda dalam layanan yang disediakan. Tambahan persetujuan akan diperlukan untuk beberapa aktifitas proses data.</p>
                        <p>Mohon diperhatikan bahwa kebijakan privasi berlaku untuk keperluan penggunaan perangkat Nexstgo Anda (dimana diantara layanan yang disediakan tercakup dalam kebijakan privasi, Bersama dengan situs kami dan pendaftaran online). Juga berlaku apakah Anda menggunakan computer, telepon genggam, tablet ataupun perangkat lainnya untuk mengakses layanan kami. Penting bagi Anda untuk membaca kebijakan privasi dengan seksama karena setiap saat Anda menggunakan layanan kami, Anda memberikan persetujuan terhadap praktik yang kami jabarkan didalam kebijakan privasi dan tambahannya. Apabila Anda tidak menyetujui prakti yang dijelaskan dalam kebijakan privasi maka sebaikanya Anda tidak menggunakan layanan yang kami sediakan.</p>
                        <p>Kami harap Anda dapat memeriksa kembali secara berkala mengenai pembaruan kebijakan privasi. Apabila kami melakukan pembaruan kebijakan privasi, kami akan memberikan informasi dengan memberikan catatan pada layanan yang terkait. Dengan mengakses atau menggunakan layanan setelah kami memberikan banyak notifikasi, persetujuan Anda kepada praktik baru teridentifikasi didalam pembaruan. Versi terbaru dari kebijakan privasi akan selalu tersedia disini http://www.avita.global/ . Anda dapat memeriksa tanggal efektif yang tercantum diatas untuk mengetahui pembaruan terakhir dari kebijakan privasi.</p>

                        <h3>2. Informasi apa saja tentang Anda yang kami kumpulkan?</h3>

                        <h4>2.1.    Informasi yang Anda sediakan secara langsung</h4>
                        <p>Beberapa layanan memungkinkan memberikan informasi Anda kepada kami secara langsung, contohnya:</p>
                        <p>Beberapa layanan kami memungkinkan pengguna untuk membuat akun atau profil. Berhubungan dengan layanan-layanan ini, kami mungkin meminta Anda untuk memberikan informasi mengenai Anda sendiri guna membuat akun atau profil. Sebagai contohnya, Anda dapat menyerahkan beberapa infomasi mengenai diri Anda sendiri seperti nama dan alamat email saat Anda membuat akun Nexstgo.</p>
                        <p>Apabila Anda memesan sebuah produk atau layanan berbayar kepada kami, kami mungkin akan menanyakan nama Anda, kontak informasi, alamat tagihan dan pengiriman dan informasi kartu kredit guna melakukan proses pesanan Anda.</p>
                        <p>Bebebrapa layanan kami memungkinkan Anda untuk berkomunikasi dengan orang lain. Komunikasi tersebut akan dikirimkan melalui dan disimpan di sistem kami.</p>

                        <h4>2.2.    Informasi mengenai penggunaan Anda pada layanan-layanan</h4>
                        <p>Tambahan terhadap informasi yang Anda sediakan, kami mungkin meminta informasi mengenai penggunaan Anda pada layanan kami melalui perangkat lunak pada perangkat Anda dan lainnya, contohnya kami mungkin meminta:</p>
                        <p>Informasi perangkat seperti model perangkat keras Anda, Nomor Seri dan pengenal perangkat unik lainnya, alamat MAC, alamat IP, sistem operasi, dan pengaturan perangkat yang Anda gunakan untuk mengakses layanan.</p>
                        <p>Pencatatan informasi seperti waktu dan durasi dari penggunaan layanan, pertanyaan pencarian yang Anda masukan melalui layanan dan informasi lainnya yang tersimpan dalam cookies yang kami atur dalam perangkat Anda</p>
                        <p>Informasi lokasi seperti sinyal GPS Perangkat Anda atau informasi mengenai Akses WiFi terdekat dan juga menara seluler yang mungkin mengirimkan data kepada kami, dengan persetujuan ketika Anda menggunakan beberapa layanan.</p>
                        <p>Informasi suara seperti rekaman suara Anda yang kami buat (dan mungkin disimpan dalam server kami) ketika Anda menggunakan perintah suara untuk mengatur layanan (Catatan kami bekerja dengan penyedia layanan pihak ke-3 yang menyediakan layanan konversi bicara kepada teks, penyedia layanan ini mungkin akan menerima dan menyimpan beberapa perintah suara) </p>
                        <p>Informasi lainnya mengenai penggunaan layanan seperti aplikasi yang Anda gunakan, situs yang Anda kunjungi dan bagaimana Anda melakukan interaksi dengan isi yang ditawarkan melalui layanan.</p>

                        <h4>2.3.    Informasi dari layanan pihak ke-3</h4>
                        <p>Kami mungkin menerima informasi mengenai Anda dari sumber publik dan komersial yang tersedia (yang diizinkan oleh hukum yang berlaku) yang akan kami padukan dengan informasi lainnya yang kami terima dari dan tentang Anda. Kami juga mungkin menerima informasi mengenai Anda dari layanan sosial media pihak ke-3 ketika Anda memilih untuk menghubungkan dengan layanan tersebut.</p>

                        <h4>2.4. Informasi lainnya yang kami kumpulkan</h4>
                        <p>Kami mungkin mengumpulkan informasi lainnya mengenai Anda, Perangkat Anda dan penggunaan layanan didalam yang kami rincikan kepada Anda saat pengumpulan ataupun lainnya dengan persetujuan.</p>
                        <p>Anda dapat memilih untuk tidak memberikan beberapa jenis informasi (contoh : informasi yang kami minta saat pendaftaran akun Nexstgo), tetapi dengan melakukan itu mungkin akan mempengaruhi penggunaan beberapa penggunaan layanan kami.</p>

                        <h3>3. Kepada siapa kami akan membuka informasi Anda?</h3>

                        <p>Kami tidak akan membuka informasi Anda kepada pihak ke-3 untuk keperluan pemasaran atau bisnis mereka tanpa persetujuan Anda. Bagaimanapun juga, kami mungkin membuka informasi Anda kepada entitas berikut:</p>
                        <p>Afiliasi, Informasi Anda mungkin kami bagikan kepada afiliasi Nexstgo</p>
                        <p>Rekan bisnis, kami mungkin berbagi informasi Anda dengan rekan bisnis yang terpercaya, termasuk penyelenggara nirkabel. Entitas tersebut mungkin menggunakan informasi Anda untuk menyediakan layanan yang Anda butuhkan, membuat perkiraan mengenai ketertarikan Anda dan mungkin menyediakan materi promosi, materi iklan dan materi lainnya untuk Anda.</p>
                        <p>Penyelenggara layanan, kami mungkin juga membuka informasi Anda kepada perusahaan yang menyediakan layanan atas nama kami, seperti perusahaan yang membantu kami menyiapkan tagihan atau mengirimkan email atas nama kami. Entitas ini adalah terbatas dalam kemampuan mereka untuk menggunakan informasi Anda untuk kebutuhan selain menyediakan layanan bagi kami.</p>
                        <p>Pihak lainnya ketika dibutuhkan oleh hukum sebagai kebutuhan untuk melindungi layanan kami. Ada kemungkinan dimana kami akan membuka informasi Anda kepada pihak lain:</p>
                        <p>Untuk mengikuti proses hukum atau menanggapi kewajiban hukum (seperti surat perintah penggeledahan atau perintah pengadilan lainnya)</p>
                        <p>Untuk verifikasi atau melaksanakan kewajiban dengan kebijakan pengaturan layanan kami; dan</p>
                        <p>Untuk melindungi hak, kepemilikan atau keamanan Nexstgo, atau afiliasi lain, rekan bisnis dan pelanggan lain.</p>
                        <p>Pihak lain yang berhubungan dengan transaksi perusahaan. Kami mungkin membuka informasi Anda kepada pihak ke-3 sebagai bagian dari penggabungan, pemindahan atau proses pengesahan pailit.</p>
                        <p>Pihak lain dengan persetujuan Anda atau arahan Anda. Sebagai tambahan bagi pengungkapan yang tertulis didalam kebijakan privasi, kami mungkin berbagi informasi mengenai Anda dengan pihak ke-3 ketika Anda memberikan persetujuan kepada atau permintaan berbagi tersebut.</p>

                        <h3>4. Apa yang kami lakukan untuk mengamankan informasi Anda?</h3>
                        <p>Kami telah menyiapkan teknis dan fisik untuk meyakinkan keamanan atas informasi yang kami kumpulkan dan berhubungan dengan layanan-layanan. Meskipun demikian meskipun kami menyediakan langkah pengamanan informasi Anda, tidak ada situs, transmisi internet, sistem computer atau koneksi nirkabel yang benar-benar aman.</p>

                        <h4>4.1. Persetujuan terhadap transfer data internasional</h4>
                        <p>Dengan menggunakan atau berpartisipasi terhadap layanan dan atau menyediakan informasi Anda kepada kami, Anda telah menyetujui untuk pengumpulan, pemindahan, penyimpanan dan proses informasi Anda diluar negara tempat tinggal Anda (e.g. Indonesia) konsisten dengan kebijakan privasi. Mohon dicatat bahwa proteksi data dan hukum negara lainnya dimana informasi Anda mungkin dipindahkan mungkin tidak menyeluruh seperti yang ada di negara Anda.</p>

                        <h4>4.2. Mengakses Informasi Anda</h4>
                        <p>Berdasarkan hukum dari beberapa yurisdiksi, Anda mempunyai hak untuk meminta detil dari informasi yang kami kumpulkan dan memperbaiki akurasi informasi. Perubahan terhadap undang-undang tidak berdampak pada hak pengguna. Apabila diizinkan oleh hukum, kami mungkin akan membebankan sedikit biaya untuk memberikan layanan ini. Kami mungkin menolak untuk melakukan proses yang berulang, membutuhkan usaha teknis yang tidak proporsional, membahayakan privasi orang lain, sangat tidak praktis atau untuk diana akses tidak dibutuhkan oleh hukum setempat. Apabila Anda ingin membuat permintaan untuk mengakses informasi Anda, silakan hubungi bagian layanan pelanggan kami.</p>

                        <h4>4.3 Penyimpanan Data</h4>
                        <p>Kami mengambil langkah-langkah untuk memastikan bahwa kami mendapatkan informasi tentang Anda selama dibutuhkan sesuai dengan tujuan dari pengumpulan data tersebut, atau dibutuhkan sesuai kontrak atau hukum yang berlaku.</p>

                        <h4>Pihak ke-3 dan Layanan Produk Kami</h4>
                        <p>Layanan kami mungkin terhubung dengan situs dan layanan pihak ke-3 yang berada di luar kendali kami. Kami tidak bertanggung jawab terhadap keamanan ataupu privasi dari informasi yang dikumpulkan oleh situs dan layanan lainnya. Anda diharapkan berhati-hati dan meninjau penyataan privasi yang terdapat pada situs pihak ke-3 dan layanan yang Anda gunakan.</p>
                        <p>Kami juga menyediakan beberapa produk dan layanan yang dibuat oleh pihak ke-3. Nexstgo tidak bertanggung jawab terhadap produk dan layanan pihak ke-3</p>
                        <p>Pihak ke-3 yang menyediakan isi, iklan atau fungsi pada layanan kami</p>
                        <p>Beberapa isi, iklan atau fungsi pada layanan kami mungkin disediakan oleh pihak ke-3 yang tidak mempunyai afiliasi dengan kami, sebegai contoh:</p>
                        <p>Beberapa pihak ke-3 mungkin menyediakan iklan atau melacak iklan yang dilihat oleh penguna, seberapa serinng mereka melihat iklan tersebut dan apa yang dilakukan pengguna terhadap ikaln tersebut; dan</p>
                        <p>Kami memungkinkan Anda untuk berbagi beberapa materi dalam layanan dengan lainnya melalui layanan jaringan sosial seperti Facebook, Twitter, Google + dan LinkedIn</p>
                        <p>Apabila anda terhubung dengan layanan jaringan sosial, kami mungkin menerima dan menyimpan otentikasi informasi melalui layanan yang memungkinkan anda untuk masuk. Dan informasi lainnya yang memungkinkan kami untuk menerima ketika Anda terhubung dengan layanan tersebut.</p>
                        <p>Also, please note that if you choose to connect with a social networking service on a device used by people in addition to you, those other users may be able to see information stored or displayed in connection with your account on the social networking service(s) with which you connect.</p>
                        <p>Juga, mohon diperhatikan apabila Anda memutuskan untuk terhubung dengan layanan jaringan sosial melalui perangkat yang digunakan orang lain selain Anda, pengguna lain mungkin dapat melihat informasi yang disimpan atau ditampilkan tehubung dengan akun Anda dalam layanan jaringan sosial.</p>

                        <h3>5 Cookies, Suar dan Teknologi sejenis.</h3>
                        Kami, dan juga beberapa pihak ke-3 yang menyediakan isi, iklan dan fungsi lainnya dalam layanan kami mungkin menggunakan cookies, suar dan teknologi lainnya dalam beberapa area layanan kami.

                        <h4>5.1 Cookies</h4>

                        <p>Cookies adalah file kecil yang menyimpan informasi pada komputer Anda, telepon genggam dan perangkat lainnya. Mereka memungkinkan untuk mengenali anda dalam lintas situs  berbeda, layanan, perangkat, dan atau sesi menjelajah. Cookies menyediakan banyak kegunaan, antara lain:</p>
                        <p>Cookies dapat mengingat kredensial masuk Anda, sehingga Anda tidak perlu memasukan kembali setiap Anda masuk dalam suatu layanan.</p>
                        <p>Cookies membanntu kami dan pihak ke-3 untuk mengerti bagian dari layanan kami yang paling terkenal karena mereka membantu kami melihat halaman dan fitur yang sering dan lama diakses oleh pengunjung. Dengan mempelajari informasi ini, kami akan lebih mudah dalam memberikan layanan yang sesuai dengan kebutuhan Anda</p>
                        <p>Cookies juga membantu kami dan pihak ke-3 untuk mengerti iklan mana yang Anda lihat sehingga Anda tidak perlu melihak iklan yang sama saat Anda menggunakan layanan.</p>
                        <p>Cookies membatu kami dan pihak ke-3 untuk menyediakan isi yang relevan dan iklan dengan mengumpulkan informasi mengenai penggunaan layanan, situs dan aplikasi lainnya.</p>
                        <p>Ketika Anda menggunakan perambah jaringan untuk mengakses layanan, Anda dapat mengatur perambah jaringan Anda untuk menerima seluruh cookies, menolak semua cookies atau memberitahu kapan cookies dikirimkan. Stiap perambah berbeda, harap memeriksa menu “Bantuan” dalam perambah Anda untuk mempelajari bagaimana merubah preferensi cookies Anda. Sistem operasi dari perangkat Anda mungkin berisi tambahan kendali untuk cookies.</p>
                        <p>Harap diperhatikan, bagaimanapun juga beberapa layanan mungkin didesain untuk bekerja menggunakan cookies dan mematikan cookies akan berdampak pada penggunaan layanan tersebut atau beberapa bagiannya.</p>

                        <h4>5.2 Penyimpanan lainnya</h4>
                        <p>Kami, Bersama pihak ke-3 mungkin menggunakan teknologi penyimpanan local lainnya, seperti Local Shared Objects (atau disebut juga sebagai “Flash Cookies”) dan HTML5 local storage, dalam hubungannya dengan layanan lami, teknologi ini sejenis dengan cookies yang dibahas diatas, dimana mereka menyimpan didalam perangkat da dapat digunakan untuk menyimpan beberapa informasi mengenai aktifitas dan preferensi Anda. Bagaimanapun juga teknologi ini mungkin menggunakan bagian berbeda dari perangkat Anda dari cookies yang biasa. Dan Anda dapat tidak bisa mengendalikan mereka melalui perangkat perambah biasa. Untuk informasi mengenai mematikan atau menghapus informasi yang tersimpan di Flash Cookies, silakan klik disini.</p>

                        <h4>5.3 Suar</h4>
                        <p>Kami, Bersama pihak ke-3 mungkin menggunakan teknologi yang disebut dengan Suar (atau “pixels”) yang berkomunikasi informasi dari perangkat Anda ke sebuah server. Suar dapat tertanam pada isi online, video, dan email, dan dapat memberikan izin kepada sebuah server untuk mebaca beberapa jenis informasi dari perangkat Anda. Mengetahui kapan Anda melihat beberapa isi atau email, menentukan waktu dan tanggal ketika anda melihat suar, dan alamat IP perangkat Anda. Kami dan beberapa pihak ke-3 lainnya menggunakan Suar untuk berbagai keperluan, termasuk untuk menganalisa penggunaan layanan (dan sehubungan dengan cookies) untuk menyediakan isi dan iklan yang relevan terhadap Anda.</p>
                        <p>Dengan mengakses dan menggunakan layanan kami, Anda menyetujui penggunaan cookies, teknologi local stoage lainnya, Suar dan informasi lainnya dalam perangkat Anda. Anda juga menyetujui akses terhadap cookies, teknologi local storage, suar dan informasi lainnya oleh kami dan pihak ke-3 lainnya yang disebutkan diatas.</p>

                        <h3>6 Pilihan Anda</h3>
                        <p>Kami menawarkan beberapa pillihan tentang bagaimana kami menggunakan informasi Anda, Anda dapat membuat pilihan mengenai apakah Anda ingin menerima komunikasi promosi dari kami dengan mengikuti instruksi berhenti berlangganan yang termasuk dalam komunikasi, sebagai tambahan Anda juga dapat membuat pilihan dalam pengaturan Anda atau mengunjungi relevan halaman jaringan yang terdaftar dibawah;</p>
                        <p>Dengan tujuan untuk memberikan iklan yang Anda sukai; dan</p>
                        <p>Dengan tujuan untuk memberikan pilihan untuk kombinasi dari data Anda lintas layanan dan perangkat untuk tujuan yang tercantum dalam kebijakan privasi http://www.avita.global/support</p>
                        <p>Dan Anda juga dapat membuat pilihan secara lebih spesifik terhadap layanan atau ketika kami memberikan notifikasi.</p>

                    </div>
                </div>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>
    </main>

@endsection

