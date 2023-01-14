@extends('layouts.main')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>{{ $title }}</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Privacy Policy Questions Section ======= -->
        <section id="faq" class="faq">
          <div class="container" data-aos="fade-up">
    
            <div class="section-header">
              <span>{{ $title }}</span>
              <h2>{{ $title }}</h2>
    
            </div>
    
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-10">
    
                <div class="accordion accordion-flush" id="faqlist">
    
                  <div class="accordion-item">
                    <h3 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                        <i class="bi bi-question-circle question-icon"></i>
                        PENGANTAR
                      </button>
                    </h3>
                    <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                      <div class="accordion-body">
                      Pemberitahuan Privasi berikut ini menjelaskan bagaimana kami, PT GoTo Gojek Tokopedia Tbk dan/atau afiliasi nya (“Gojek”) mengumpulkan, menyimpan, menggunakan, mengolah, menguasai, mentransfer, mengungkapkan dan melindungi Informasi Pribadi anda. Pemberitahuan Privasi ini berlaku untuk semua Pengguna aplikasi seluler kami (termasuk aplikasi Pengguna, aplikasi pedagang, dan aplikasi mitra pengemudi), situs web, layanan, dan produk (bersama-sama disebut "Aplikasi"), kecuali diatur pada pemberitahuan privasi yang terpisah.
                      <br><br>
                      Pemberitahuan Privasi ini disediakan dalam format berlapis sehingga anda dapat mengklik ke area tertentu yang tersedia di bawah ini. Harap baca Pemberitahuan Privasi ini secara menyeluruh untuk memastikan bahwa anda memahami praktik pelindungan data kami. Agar lebih mudah dimengerti, kami sudah merangkum poin-poin pentingnya di bagian ringkasan. Kecuali ditentukan lain, semua istilah dalam huruf kapital yang digunakan dalam Pemberitahuan Privasi ini akan memiliki arti yang sama dengan istilah tersebut dalam Ketentuan Penggunaan yang berlaku antara anda dan Gojek.
                      <br><br>
                      <b><u>Pengakuan dan Persetujuan</u></b>
                      <br>
                      Dengan menyetujui Pemberitahuan Privasi, anda mengakui bahwa anda telah membaca dan memahami Pemberitahuan Privasi ini dan menyetujui segala ketentuannya. Secara khusus, anda setuju dan memberikan persetujuan kepada kami untuk mengumpulkan, menggunakan, membagikan, mengungkapkan, menyimpan, mentransfer, atau mengolah Informasi Pribadi anda sesuai dengan Pemberitahuan Privasi ini.
                      <br><br>
                      Dalam keadaan di mana anda menyediakan kepada kami Informasi Pribadi yang berkaitan dengan individu lain (seperti Informasi Pribadi yang berkaitan dengan pasangan anda, anggota keluarga, teman, atau pihak lain), anda menyatakan dan menjamin bahwa anda telah memperoleh persetujuan dari individu tersebut untuk, dan dengan ini menyetujui atas nama individu tersebut untuk, pengumpulan, penggunaan, pengungkapan dan pengolahan Informasi Pribadi mereka oleh kami.
                      <br><br>
                      Anda dapat menarik persetujuan anda untuk setiap atau segala pengumpulan, penggunaan atau pengungkapan Informasi Pribadi anda kapan saja dengan memberikan kepada kami pemberitahuan yang wajar secara tertulis menggunakan rincian kontak yang disebutkan di bawah ini. Anda juga dapat menarik persetujuan pengiriman komunikasi dan informasi tertentu dari kami melalui fasilitas "opt-out" atau pilihan "berhenti berlangganan" yang tersedia dalam pesan kami kepada anda. Tergantung pada keadaan dan sifat persetujuan yang anda tarik, anda harus memahami dan mengakui bahwa setelah penarikan persetujuan tersebut, anda mungkin tidak lagi dapat menggunakan Aplikasi atau layanan. Penarikan persetujuan anda dapat mengakibatkan penghentian Akun anda atau hubungan kontraktual anda dengan kami, dengan semua hak dan kewajiban yang muncul sepenuhnya harus dipenuhi. Setelah menerima pemberitahuan untuk menarik persetujuan untuk pengumpulan, penggunaan atau pengungkapan Informasi Pribadi anda, kami akan menginformasikan kepada anda tentang konsekuensi yang mungkin terjadi dari penarikan tersebut sehingga anda dapat memutuskan apakah anda tetap ingin menarik persetujuan.

                    </div>

                    </div>
                  </div><!-- # Faq item-->
    
                  <div class="accordion-item">
                    <h3 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                        <i class="bi bi-question-circle question-icon"></i>
                        RINGKASAN
                      </button>
                    </h3>
                    <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                      <div class="accordion-body">
                        <b><u>Informasi apa yang kami kumpulkan tentang anda?</u></b>
                        <br>
                        Kami mengumpulkan Informasi Pribadi saat anda menggunakan Aplikasi kami. Kami juga mengumpulkan informasi perangkat dan teknis dari anda, dan informasi lain yang mungkin anda kirimkan saat anda menggunakan Aplikasi kami. Jika anda memilih untuk tidak menyediakan informasi tersebut, kami tidak akan dapat menyediakan Aplikasi kepada anda secara normal.
                        <br><br>
                        <b><u>Bagaimana kami menggunakan informasi tentang anda?</u></b>
                        <br>
                        Bagaimana kami menggunakan informasi anda tergantung pada apakah anda seorang Pengguna atau Penyedia Layanan. Jika anda adalah Pengguna, kami menggunakan informasi anda untuk mengatur dan mengelola Akun anda dengan kami, berkomunikasi dengan anda, dan sebaliknya memberi anda berbagai layanan dan fungsi yang tersedia di Aplikasi kami. Jika anda adalah Penyedia Layanan, kami menggunakan informasi anda untuk memverifikasi bahwa anda dapat menyediakan layanan, memungkinkan anda menyediakan layanan kepada Pengguna, mengatur dan mengelola akun anda dengan kami, berkomunikasi dengan anda, dan sebaliknya memberi anda berbagai layanan dan fungsi yang tersedia di Aplikasi kami. Kami juga menggunakan informasi anda untuk melakukan pemeliharaan atas Aplikasi kami, dan untuk menyesuaikan produk dan layanan kami dengan preferensi anda. Selain itu, kami menggunakan informasi anda untuk memasarkan produk dan layanan kami kepada anda, dan dari perusahaan dalam grup kami, mitra, dan agen (dengan persetujuan anda jika diwajibkan oleh Peraturan Perundang-undangan yang Berlaku).
                        <br><br>
                        <b><u>Dengan siapa kami membagikan informasi anda?</u></b>
                        <br>
                        Kami membagikan data anda dengan Pengguna dan Penyedia Layanan (sebagaimana berlaku) untuk memfasilitasi kinerja layanan untuk atau oleh anda, dengan mitra dan pemasok pihak ketiga kami, sejauh yang diperlukan bagi mereka untuk menyediakan layanan mereka, seperti pemrosesan pembayaran, klaim dan verifikasi asuransi. Kami menggunakan layanan pihak ketiga ini semata-mata untuk mengolah atau menyimpan informasi anda untuk tujuan sebagaimana dijelaskan dalam Pemberitahuan Privasi ini. Kami juga membagikan informasi anda dengan Afiliasi kami untuk tujuan yang dijelaskan dalam Pemberitahuan Privasi ini dan dengan lembaga pemerintah dan otoritas pemerintah lainnya sebagaimana diwajibkan oleh Peraturan Perundang-undangan yang Berlaku.
                        <br><br>
                        <b><u>Dimana kami memproses informasi anda?</u></b>
                        <br>
                        Server kami mungkin berlokasi di luar Wilayah. Kami juga dapat mentransfer informasi anda pada Afiliasi kami dan pemasok pihak ketiga serta mitra di luar Wilayah untuk tujuan sebagaimana ditetapkan dalam Pemberitahuan Privasi ini.
                        <br><br>
                        <b><u>Berapa lama kami menyimpan informasi anda?</u></b>
                        <br>
                        Kami menyimpan informasi anda selama diperlukan untuk memenuhi tujuan pengumpulannya, atau sebagaimana diwajibkan oleh Peraturan Perundang-undangan yang Berlaku.
                        <br><br>
                        <b><u>Bagaimana Saya bisa melaksanakan hak saya atas informasi saya?</u></b>
                        <br>
                        Anda mungkin memiliki berbagai hak sehubungan dengan data anda berdasarkan Peraturan Perundang-undangan yang Berlaku dan anda dapat menghubungi kami untuk melaksanakan hak anda.
                        <br><br>
                        <b><u>Hubungi kami</u></b>
                        <br>
                        Apabila anda memiliki pertanyaan, perhatian atau keluhan, dapat menghubungi kami melalui rincian kontak yang dapat ditemukan pada bagian Hubungi Kami.
                        <br><br>
                        <b><u>Bagaimana kami akan memberitahukan anda terkait perubahan?</u></b>
                        <br>
                        Kami akan mengubah Pemberitahuan Privasi ini dari waktu ke waktu dan memberitahu anda tentang versi yang diperbarui melalui Aplikasi kami atau email anda yang terdaftar pada kami. Silakan periksa kembali secara berkala untuk melihat pembaruan atau perubahan apapun pada Pemberitahuan Privasi ini.
                        <br><br>
                        Penjelasan lebih lanjut tentang hal di atas dapat dibaca pada bagian di bawah ini.
                      </div>
                    </div>
                  </div><!-- # Faq item-->
    
                  <div class="accordion-item">
                    <h3 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                        <i class="bi bi-question-circle question-icon"></i>
                        INFORMASI PRIBADI YANG KAMI KUMPULKAN
                      </button>
                    </h3>
                    <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                      <div class="accordion-body">
                        <ol type="1">
                          <li><b><u>Jenis-jenis Informasi Pribadi Yang Kami Kumpulkan Tentang Anda</u></b>
                            <br>
                            “Informasi Pribadi” berarti informasi yang mengidentifikasi atau dapat digunakan untuk mengidentifikasi, menghubungi, atau menemukan orang atau perangkat yang terkait dengan informasi tersebut. Informasi Pribadi termasuk, namun tidak terbatas pada, nama, alamat, tanggal lahir, pekerjaan, nomor telepon, alamat email, rekening bank dan rincian kartu kredit, jenis kelamin, identifikasi (termasuk paspor atau dokumen identitas nasional) atau tanda pengenal lainnya yang dikeluarkan pemerintah, informasi kendaraan, foto, kewarganegaraan, nomor telepon Pengguna dan non-Pengguna di daftar kontak telepon seluler anda, data kesehatan, informasi terkait keuangan, dan informasi biometrik (termasuk namun tidak terbatas pada pengenalan wajah). Selain itu, sejauh informasi lain, termasuk profil pribadi, dan/atau pengenal unik, dikaitkan atau digabungkan dengan Informasi Pribadi, maka informasi tersebut juga merupakan Informasi Pribadi.
                            <br><br>
                            Jenis Informasi Pribadi yang kami kumpulkan bergantung pada keadaan pengumpulan dan sifat layanan yang diminta atau transaksi yang dilakukan.
                            <br><br>
                            Sepanjang diizinkan oleh Peraturan Perundang-undangan yang Berlaku, kami dapat mengumpulkan, menggunakan, menyimpan dan mentransfer jenis-jenis berbeda dari Informasi Pribadi tentang anda yang telah kami kategorikan sebagai berikut:
                            <br><br>
                            <ol type="a">
                                <li><b>Data Identitas</b>
                                  termasuk nama, nama pengguna, kartu tanda penduduk, nomor pokok wajib pajak, identitas pengguna atau pengenal lainnya, jabatan, tanggal kelahiran, jenis kelamin, tempat kelahiran, pekerjaan, kebangsaan, foto dan/atau data biometrik.
                                </li>
                                <li><b>Data Kontak</b>
                                  termasuk alamat (-alamat) penagihan, alamat (-alamat) pengiriman, alamat (-alamat) email, nomor telepon dan daftar kontak.
                                </li>
                                <li><b>Data Kelayakan</b>
                                  termasuk, dalam kaitannya dengan Penyedia Layanan, lisensi, persetujuan, dan otorisasi lain yang mengizinkan anda untuk mengoperasikan kendaraan dan menyediakan transportasi atau layanan lainnya, dan perincian polis asuransi.
                                </li>
                                <li><b>Data Transaksi</b>
                                  mencakup pembelian atau pesanan yang anda lakukan, minat, preferensi, masukan, dan tanggapan survei anda, sehubungan dengan Pengguna, jenis layanan yang dicari, perincian mengenai pengambilan dan/atau pengiriman; dan dalam kaitannya dengan Penyedia Layanan, jenis layanan yang dapat diterima pada saat itu.
                                </li>
                                <li><b>Data Keuangan</b>
                                  mencakup rincian rekening bank dan kartu pembayaran seperti jenis kartu atau rekening pembayaran yang digunakan, nama penerbit kartu atau rekening pembayaran tersebut, nama pemegang kartu atau rekening pembayaran tersebut, nomor identifikasi rekening tersebut atau kartu pembayaran, kode verifikasi kartu pembayaran atau akun tersebut, dan tanggal kedaluwarsa kartu pembayaran atau akun tersebut, sebagaimana berlaku, riwayat keuangan (termasuk namun tidak terbatas pada riwayat transaksi kartu pembayaran atau rekening, rincian kartu pembayaran atau rekening, dan pemetaan dan/atau status dan keadaan dari kartu pembayaran atau rekening) dan penilaian kredit (credit scoring).
                                </li>
                                <li><b>Data Pembayaran</b>
                                  meliputi rincian pembayaran atau transfer yang dilakukan melalui fasilitas uang elektronik dan/atau dompet elektronik yang disediakan oleh kami seperti informasi yang berkaitan dengan penggunaan, pembayaran, rincian penerima (termasuk rincian rekening mereka), jumlah pembayaran yang dibayarkan, rincian tagihan, dan rincian faktur.
                                </li>
                                <li><b>Data Teknis</b>
                                  mencakup rincian tentang penggunaan anda atas Aplikasi kami seperti alamat protokol internet (IP), informasi sebagai halaman web yang dilihat sebelumnya atau sesudahnya, durasi setiap kunjungan/sesi, identitas (ID) perangkat internet atau alamat kontrol akses media, ID periklanan dan informasi perangkat lainnya termasuk informasi mengenai produsen, model, dan sistem operasi perangkat yang anda gunakan untuk mengakses Aplikasi dan crash logs.
                                </li>
                                <li><b>Data Lokasi</b>
                                  mencakup informasi lokasi geografis waktu-nyata (real-time) anda.
                                </li>
                                <br><br>
                                Kami dapat membuat, menggunakan, melisensikan, atau mengungkapkan Data Gabungan seperti data statistik atau demografi untuk tujuan apa pun. Data Gabungan dapat berasal dari Informasi Pribadi anda tetapi tidak akan dianggap sebagai Informasi Pribadi karena data ini tidak akan secara langsung atau tidak langsung mengungkapkan identitas anda karena kami akan memastikan: (i) bahwa semua pengenal telah dihapus sedemikian rupa sehingga data, sendiri atau bersama-sama dengan data lain yang tersedia, tidak dapat dikaitkan atau dihubungkan dengan atau tidak dapat mengidentifikasi siapa pun, dan (ii) data tersebut kemudian digabungkan dengan data serupa sehingga data asli membentuk bagian dari kumpulan data yang lebih besar.
                              </ol>
                            </br>
                          </li>
                          <li><b><u>Jika anda menyediakan Informasi Pribadi yang tidak lengkap</u></b>
                          <br>
                          Jika kami perlu mengumpulkan Informasi Pribadi berdasarkan hukum, atau berdasarkan ketentuan sebuah perjanjian yang kami miliki dengan anda, dan anda memilih untuk tidak menyediakan Informasi Pribadi tersebut atau menyediakan Informasi Pribadi yang tidak lengkap kepada kami saat diminta, kami mungkin tidak dapat melaksanakan perjanjian yang kami miliki atau sedang dalam proses untuk disepakati dengan anda (misalnya, untuk menyediakan barang atau jasa kepada anda).
                          </li>
                          <br>
                          <li><b><u>Bagaimana Kami Mengumpulkan Informasi Pribadi Anda</u></b>
                          <br>
                          Informasi Pribadi yang kami kumpulkan dapat diberikan oleh anda secara langsung atau oleh pihak ketiga (misalnya: ketika anda mendaftar atau menggunakan Aplikasi, ketika anda menghubungi layanan pelanggan kami, atau sebaliknya ketika anda menyediakan Informasi Pribadi kepada kami). Kami dapat mengumpulkan informasi dalam berbagai macam bentuk dan tujuan (termasuk tujuan yang diizinkan berdasarkan Peraturan Perundang-undangan yang Berlaku).
                          <br><br>
                            <ol type="a">
                              <li><b>Informasi yang kami kumpulkan dari anda atau perangkat seluler anda secara langsung</b></li>
                              Anda dapat memberikan kepada kami Data Identitas, Kontak, Kelayakan, Profil, Keuangan dan Pembayaran, termasuk dalam keadaan dimana hal tersebut diminta oleh kami atau dalam keadaan diharuskan oleh Peraturan Perundang-undangan yang Berlaku, saat berinteraksi dengan kami secara langsung atau berkorespondensi dengan kami melalui surat, email atau lainnya. Hal ini termasuk Informasi Pribadi yang anda sediakan ketika anda:
                                <ol type="i">
                                <li>mendaftar dan membuat sebuah Akun dengan kami menggunakan Aplikasi;</li>
                                <li>menggunakan Aplikasi, termasuk jika anda mendaftar sebagai Penyedia Layanan atau menggunakan layanan sebagai Pengguna;</li>
                                <li>menggunakan fasilitas uang elektronik dan/atau dompet elektronik apapun yang kami sediakan (baik sebagai pembayar atau penerima);</li>
                                <li>mendaftar sebagai pemilik akun terdaftar atau terverifikasi dari sebuah fasilitas uang elektronik;</li>
                                <li>menambahkan sumber pendanaan untuk pembayaran pada Aplikasi;</li>
                                <li>menggunakan fitur chat pada Aplikasi; dan</li>
                                <li>memberikan masukan atau menghubungi kami.</li>
                                </ol>
                              <br>
                              <li><b>Informasi yang dikumpulkan setiap kali anda menggunakan Aplikasi</b>
                              <br>
                              Anda dapat memberi kami Data Teknis dan Lokasi setiap kali anda menggunakan dan/atau mengunjungi Aplikasi. Setiap kali anda mengakses Aplikasi melalui Perangkat Seluler anda, kami akan melacak dan mengumpulkan informasi lokasi geografis anda secara waktu-nyata (real-time). Dalam beberapa kasus, anda akan diminta untuk mengaktifkan Global Positioning System (GPS) pada Perangkat Seluler anda agar kami dapat memberikan anda pengalaman yang lebih baik dalam menggunakan Aplikasi (misalnya, untuk memberi Anda informasi tentang seberapa dekat Penyedia Layanan dengan anda. Anda selalu dapat memilih untuk menonaktifkan informasi pelacakan lokasi geografis pada Perangkat Seluler anda untuk sementara. Namun, hal itu dapat memengaruhi fungsi yang tersedia pada Aplikasi.
                              <br><br>
                              Jika anda menggunakan dan/atau ketika pembayaran atau transfer dilakukan melalui fasilitas uang elektronik dan/atau dompet elektronik yang disediakan oleh kami (baik sebagai pembayar atau penerima), kami dapat mengumpulkan Data Keuangan, Profil, dan Pembayaran tertentu terkait dengan pembayaran dan transfer tersebut.
                              <br><br>
                              Selain itu, setiap kali anda menggunakan dan/atau mengunjungi Aplikasi, informasi tertentu juga dapat dikumpulkan secara otomatis menggunakan cookies. Cookies adalah file aplikasi kecil yang disimpan pada komputer atau perangkat seluler anda. Kami menggunakan cookies untuk melacak aktivitas pengguna untuk meningkatkan antarmuka dan pengalaman pengguna. Sebagian besar Perangkat Seluler dan browser internet mendukung penggunaan cookies; tetapi anda dapat menyesuaikan pengaturan pada Perangkat Seluler atau browser internet anda untuk menolak beberapa jenis cookies tertentu atau cookies spesifik tertentu. Perangkat Seluler dan/atau browser anda juga memungkinkan anda untuk menghapus cookies apa pun yang sebelumnya telah disimpan kapan pun. Namun, hal itu dapat memengaruhi fungsi yang tersedia pada Aplikasi.
                              </li>
                              <br>
                              <li><b>Informasi yang dikumpulkan dari pihak ketiga</b>
                              <br>
                              Kami juga dapat mengumpulkan Informasi Pribadi anda dari pihak ketiga (termasuk agen, vendor, pemasok, kontraktor, mitra, dan pihak lainnya yang menyediakan layanan kepada kami, mengumpulkan Data Pribadi dan/atau melakukan tugas atas nama kami, atau dengan siapa kami melakukan kerja sama). Dalam kasus tersebut, kami hanya akan mengumpulkan Informasi Pribadi anda untuk atau sehubungan dengan tujuan yang melibatkan pihak ketiga tersebut atau tujuan kerja sama kami dengan pihak ketiga tersebut (tergantung pada situasinya). Khususnya pada saat anda mendaftarkan kartu pembayaran atau rekening melalui Aplikasi dan/atau mengakses, menambahkan dan/atau menghubungkan kartu pembayaran atau rekening anda pada Aplikasi (sebagaimana berlaku di negara anda), kami dapat mengumpulkan informasi keuangan tertentu dan catatan finansial anda (termasuk tetapi tidak terbatas pada catatan transaksi, rincian dan penempatan kartu pembayaran atau rekening, dan/atau status dan negara kartu pembayaran atau rekening anda) dari penerbit kredensial pembayaran tersebut atau dari pihak ketiga lainnya.
                              </li>
                              <br>
                              <li><b>Informasi tentang pihak ketiga yang anda berikan kepada kami</b>
                              <br>
                              Anda dapat memberikan kepada kami Informasi Pribadi yang berkaitan dengan individu pihak ketiga lainnya (termasuk Informasi Pribadi yang berkaitan dengan pasangan anda, anggota keluarga, teman, atau individu lain). Dalam hal demikian, anda tentu saja akan memerlukan persetujuan dari mereka terlebih dahulu untuk melakukannya - lihat “Pengakuan dan Persetujuan”, di atas, untuk informasi lebih lanjut.
                              <br><br>
                              Jika anda menggunakan fitur pesan di aplikasi perangkat seluler kami, anda akan menyediakan nomor telepon yang tersimpan di dalam kontak telepon selular anda untuk menjadikan anda dapat menggunakan fitur pesan kami serta tujuan lainnya.
                              </li>
                              <br>
                              <li><b>Rekaman dalam kendaraan</b>
                              <br>
                              Kami tidak mewajibkan atau mendukung, ataupun melarang, pemasangan atau penggunaan alat perekam dalam kendaraan di kendaraan apa pun. Jika perangkat tersebut dipasang dan digunakan di kendaraan, kami tidak mengumpulkan Informasi Pribadi apapun dari rekaman dalam kendaraan oleh perangkat tersebut, dan pengumpulan Informasi Pribadi dari rekaman di dalam kendaraan tersebut tidak dilakukan atas nama kami. Pengumpulan Informasi Pribadi dari rekaman di dalam kendaraan tersebut merupakan diskresi dari Penyedia Layanan. Kami tidak memiliki kendali atas pengumpulan Informasi Pribadi tersebut oleh Penyedia Layanan dan setiap penggunaan atau pengungkapan oleh Penyedia Layanan dari Informasi Pribadi yang dikumpulkan. Jika anda adalah Penyedia Layanan dan memilih untuk mengunduh dan menggunakan perangkat rekaman di dalam kendaraan tersebut di kendaraan anda, anda bertanggung jawab sepenuhnya untuk memberitahukan Pengguna. Jika anda adalah seorang Pengguna dan anda keberatan atas penggunaan alat perekam dalam kendaraan Penyedia Layanan, anda harus menyampaikan hal tersebut kepada Penyedia Layanan secara langsung dan hal tersebut menjadi tanggung jawab pribadi anda.
                              </li>
                            </ol>
                          </li>
                          
                        </ol>
                      </div>
                    </div>
                  </div><!-- # Faq item-->
    
                  <div class="accordion-item">
                    <h3 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                        <i class="bi bi-question-circle question-icon"></i>
                        PENGGUNAAN INFORMASI PRIBADI
                      </button>
                    </h3>
                    <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                      <div class="accordion-body">
                        <i class="bi bi-question-circle question-icon"></i>
                        <ol type="1">
                          <li><b><u>Bagaimana Kami Menggunakan Informasi Pribadi Anda</u></b>
                          <br>
                          Kami dapat menggunakan Informasi Pribadi yang dikumpulkan untuk tujuan sebagai berikut maupun untuk tujuan lain yang diizinkan oleh Peraturan Perundang-undangan yang Berlaku ("<b>Tujua</b>"):
                          <br><br>
                          <ol type="a">
                            <li><b>Jika anda adalah Pengguna, kami dapat menggunakan Informasi Pribadi anda:</b>
                            <br>
                            <ol type="i">
                              <li>untuk mengidentifikasi dan mendaftarkan anda sebagai Pengguna dan untuk mengadministrasikan, memverifikasi, menonaktifkan, atau mengelola akun anda;</li>
                              <li>untuk memfasilitasi atau memungkinkan verifikasi apapun yang menurut pertimbangan kami diperlukan sebelum Penyedia Layanan menyediakan layanan kepada anda atau sebelum kami mendaftarkan anda sebagai Pengguna, termasuk melakukan proses Mengenal Pelanggan (Know Your Customer - KYC) dan penilaian kredit (credit scoring) (sebagaimana berlaku);</li>
                              <li>untuk memungkinkan Penyedia Layanan untuk menyediakan layanan yang anda minta;</li>
                              <li>untuk mengolah dan memfasilitasi pesanan dan transaksi pembayaran yang anda lakukan, termasuk sebagaimana berlaku, transaksi yang dilakukan melalui kartu pembayaran atau rekening yang tersedia pada Aplikasi;</li>
                              <li>untuk memberitahu anda atas transaksi atau aktivitas yang terjadi dalam Aplikasi atau sistem lain yang terhubung dengan Aplikasi kami;</li>
                              <li>untuk memfasilitasi pentautan akun dan/atau dompet, jika anda melakukan atau mengaktifkan pentautan akun dan/atau dompet antara akun Gojek atau dompet GoPay anda dengan platform pihak ketiga (sebagaimana berlaku);</li>
                              <li>untuk berkomunikasi dengan anda dan mengirimkan anda informasi sehubungan dengan penggunaan Aplikasi;</li>
                              <li>untuk memberitahu anda mengenai segala pembaruan pada Aplikasi atau perubahan pada layanan yang disediakan;</li>
                              <li>untuk mengolah dan menanggapi pertanyaan dan saran yang diterima dari anda;</li>
                              <li>untuk melakukan pemeliharaan, mengembangkan, menguji, meningkatkan, dan mempersonalisasikan Aplikasi untuk memenuhi kebutuhan dan preferensi anda sebagai Pengguna;</li>
                              <li>untuk memantau dan menganalisis aktivitas, perilaku, dan data demografis pengguna termasuk kebiasaan dan penggunaan berbagai layanan yang tersedia di Aplikasi;</li>
                              <li>untuk memproses dan mengelola reward points anda (sebagaimana berlaku);</li>
                              <li>untuk menawarkan atau menyediakan layanan dari afiliasi atau mitra kami (sebagaimana berlaku); dan</li>
                              <li>untuk mengirimkan anda komunikasi pemasaran, iklan, voucher, survei, dan informasi secara langsung atau terfokus, dan informasi tentang penawaran atau promosi khusus.</li>
                            </ol>
                            </li>
                            <br>
                            <li><b>Jika anda adalah Penyedia Layanan, kami dapat menggunakan Informasi Pribadi anda:</b>
                            <br>
                            <ol type="i">
                              <li>untuk mengidentifikasi anda dan mendaftarkan anda sebagai Penyedia Layanan dan untuk mengadministrasi, mengelola atau memverifikasi Akun anda;</li>
                              <li>untuk memfasilitasi atau memungkinkan verifikasi apapun yang menurut pertimbangan kami mungkin perlu dilakukan sebelum kami dapat mendaftarkan anda sebagai Penyedia Layanan, termasuk untuk KYC (Know Your Customer) dan penilaian kredit (credit scoring) (sebagaimana berlaku);</li>
                              <li>untuk memungkinkan anda menyediakan layanan kepada Pengguna;</li>
                              <li>untuk mengolah, memfasilitasi, dan menyelesaikan pembayaran kepada anda terkait dengan layanan yang telah anda berikan;</li>
                              <li>untuk berkomunikasi dengan anda dan mengirimkan anda informasi terkait dengan penyediaan layanan anda, termasuk untuk menyampaikan pesanan Pengguna kepada anda dan untuk memfasilitasi penerimaan anda atas pesanan tersebut;</li>
                              <li>untuk menyediakan anda pemberitahuan dan pembaruan pada Aplikasi atau perubahan cara penyediaan layanan;</li>
                              <li>untuk memberi anda laporan terkait dengan layanan yang telah anda sediakan;</li>
                              <li>untuk memproses dan menanggapi saran dari Pengguna terhadap layanan yang telah anda berikan;</li>
                              <li>untuk memelihara, mengembangkan, menguji, meningkatkan, dan mempersonalisasikan Aplikasi untuk memenuhi kebutuhan dan preferensi anda sebagai Penyedia Layanan;</li>
                              <li>untuk memantau dan menganalisis aktivitas, perilaku, dan data demografis Pengguna termasuk kebiasaan dan daya tanggap Penyedia Layanan untuk berbagai layanan yang tersedia pada Aplikasi;</li>
                              <li>untuk memproses dan mengelola reward points anda (sebagaimana berlaku);</li>
                              <li>untuk menawarkan atau menyediakan layanan dari afiliasi atau mitra kami; dan</li>
                              <li>untuk mengirimkan anda komunikasi pemasaran, iklan, promo, survei, dan penawaran khusus atau promosi secara langsung atau tertuju.</li>
                            </ol>
                            </li>
                            <br>
                            <li><b>Baik anda merupakan Pengguna ataupun Penyedia Layanan atau pihak yang menyediakan Informasi Pribadi kepada kami, kami juga dapat menggunakan Informasi Pribadi anda secara lebih umum untuk tujuan-tujuan sebagai berikut (walaupun dalam kasus tertentu kami akan bertindak secara wajar dan tidak menggunakan Informasi Pribadi anda lebih dari apa yang diperlukan untuk tujuan tersebut):</b>
                            <br>
                            <ol type="i">
                              <li>untuk melakukan proses dan fungsi bisnis terkait;</li>
                              <li>untuk memantau penggunaan Aplikasi dan mengelola, mendukung serta meningkatkan efisiensi kinerja, perkembangan, pengalaman pengguna dan fungsi-fungsi Aplikasi;</li>
                              <li>untuk menyediakan bantuan sehubungan dengan dan untuk menyelesaikan kesulitan teknis atau masalah operasional dengan Aplikasi atau layanan;</li>
                              <li>untuk menghasilkan informasi statistik dan data analitik untuk tujuan pengujian, penelitian, analisis, pengembangan produk, kemitraan komersial, dan kerja sama;</li>
                              <li>untuk mencegah, mendeteksi dan menyelidiki segala kegiatan yang dilarang, ilegal, tidak sah, atau curang;</li>
                              <li>untuk memfasilitasi transaksi aset bisnis (yang dapat berupa penggabungan, akuisisi, atau penjualan aset) yang melibatkan kami dan/atau afiliasi kami;</li>
                              <li>untuk memungkinkan kami mematuhi semua kewajiban berdasarkan Peraturan Perundang-undangan yang Berlaku, termasuk namun tidak terbatas pada menanggapi permintaan, penyelidikan, atau arahan peraturan, mematuhi persyaratan pengarsipan, pelaporan, dan perizinan yang disyaratkan oleh hukum atau peraturan yang berlaku dan melakukan pemeriksaan audit, uji tuntas dan penyelidikan; dan</li>
                              <li>untuk tujuan lain yang kami beritahukan kepada anda, dan apabila disyaratkan oleh Peraturan Perundang-undangan yang Berlaku, yang kami peroleh persetujuan nya.</li>
                            </ol>
                            </li>
                          </ol>
                        </li>
                        <br>
                        <li>
                          <b><u>Pengungkapan Informasi Pribadi Anda</u></b>
                          <br>
                          Kami dapat mengungkapkan memberikan akses atau membagikan Informasi Pribadi anda dengan afiliasi dan pihak lain untuk tujuan sebagai berikut ini serta untuk tujuan lain yang diizinkan oleh Peraturan Perundang-undangan yang Berlaku:
                          <br>
                          <ol type="a">
                            <li>jika anda adalah Pengguna, untuk memungkinkan Penyedia Layanan, untuk melakukan atau memberikan layanan, termasuk untuk menghubungi anda;/li>
                            <li>jika anda adalah Penyedia Layanan, untuk memungkinkan pengguna untuk meminta atau menerima layanan dari anda, termasuk untuk menghubungi anda;</li>
                            <li>jika disyaratkan atau diotorisasikan oleh Peraturan Perundang-undangan yang Berlaku (termasuk namun tidak terbatas pada menanggapi pertanyaan terkait regulasi, penyelidikan atau pedoman, atau mematuhi persyaratan atau ketentuan pengarsipan dan pelaporan berdasarkan undang-undang), untuk tujuan yang ditentukan dalam Peraturan Perundang-undangan yang Berlaku;</li>
                            <li>jika diinstruksikan, diminta, disyaratkan atau diperbolehkan oleh pemerintah yang berwenang, untuk tujuan sebagaimana disebutkan dalam kebijakan pemerintah, peraturan atau Peraturan Perundang-undangan yang Berlaku;</li>
                            <li>jika terdapat proses hukum dalam bentuk apapun antara anda dengan kami, atau antara anda dengan pihak lain, sehubungan dengan, atau terkait dengan layanan, untuk keperluan proses hukum tersebut;</li>
                            <li>sehubungan dengan segala proses verifikasi kami atau pihak ketiga perlukan sebelum Penyedia Layanan menyediakan layanan kepada anda atau kami mendaftarkan anda sebagai pengguna, termasuk proses KYC (Know Your Customer) dan penilaian kredit (credit scoring) (sebagaimana berlaku);</li>
                            <li>saat layanan kami tersedia di platform pihak ketiga manapun, (i) untuk membantu kami memperoleh Informasi Pribadi anda dan/atau (ii) mendaftarkan anda atau membantu anda menggunakan layanan kami pada platform pihak ketiga tersebut;</li>
                            <li>dalam keadaan darurat terkait kesehatan atau keselamatan anda (baik anda adalah Pengguna atau Penyedia Layanan) untuk keperluan menangani keadaan darurat tersebut;</li>
                            <li>dalam situasi terkait kesehatan anda atau kepentingan umum (baik anda adalah Pengguna atau Penyedia Layanan), kami dapat membagikan Informasi Pribadi anda kepada pemerintah yang berwenang dan/atau institusi lainnya yang dapat ditunjuk oleh pemerintah yang berwenang atau memiliki kerja sama dengan kami, untuk tujuan pelacakan kontak, mendukung inisiatif, kebijakan atau program pemerintah, kesehatan public dan tujuan lainnya sebagaimana dibutuhkan secara wajar;</li>
                            <li>sehubungan dengan, penggabungan, penjualan aset perusahaan, konsolidasi atau restrukturisasi, pembiayaan atau akuisisi semua atau sebagian dari bisnis kami oleh atau ke perusahaan lain, untuk keperluan transaksi tersebut (bahkan jika kemudian transaksi tidak dilanjutkan);</li>
                            <li>sehubungan dengan proses klaim asuransi, kami akan membagikan Informasi Pribadi anda untuk tujuan pemrosesan klaim asuransi kepada perusahaan asuransi yang bekerja sama atau berkolaborasi dengan kami;</li>
                            <li>kepada pihak ketiga (termasuk agen, vendor, pemasok, kontraktor, mitra, dan pihak lain yang menyediakan layanan kepada kami atau anda, melakukan tugas atas nama kami, atau pihak dengan siapa kami mengadakan kerja sama komersial), untuk atau sehubungan dengan tujuan di mana pihak ketiga tersebut terlibat, untuk melaksanakan pengungkapan kepada pihak ketiga terkait yang secara teknis diperlukan untuk memproses transaksi anda atau tujuan kerja sama kami dengan pihak ketiga tersebut (tergantung keadaannya), yang dapat mencakup diperbolehkannya pihak ketiga tersebut untuk memperkenalkan atau menawarkan produk atau layanan kepada anda, melakukan autentikasi terhadap anda atau menghubungkan anda dengan Akun atau melakukan kegiatan lain termasuk pemasaran, penelitian, analisis dan pengembangan produk; dan</li>
                            <li>dalam hal kami berbagi Informasi Pribadi dengan afiliasi, kami akan melakukannya dengan maksud agar mereka membantu kami dalam menyediakan Aplikasi, untuk mengoperasikan bisnis kami (termasuk, ketika anda berlangganan milis kami, untuk tujuan pemasaran langsung), atau untuk tujuan pengolahan data atas nama kami. Misalnya, sebuah afiliasi Gojek di negara lain dapat mengolah dan/atau menyimpan Informasi Pribadi anda atas nama perusahaan grup Gojek di negara anda. Semua afiliasi kami berkomitmen untuk mengolah Informasi Pribadi yang mereka terima dari kami sesuai dengan Pemberitahuan Privasi dan Peraturan Perundang-undangan yang Berlaku ini.
                              <br><br>
                              Ketika Informasi Pribadi tidak perlu dikaitkan dengan anda, kami akan melakukan upaya yang wajar untuk menghapus dikaitkannya Informasi Pribadi tersebut dengan anda sebagai individu sebelum mengungkapkan atau berbagi informasi tersebut.
                              <br><br>
                              Kami tidak akan menjual atau menyewakan Informasi Pribadi anda.
                              <br><br>
                              Selain sebagaimana diatur dalam Pemberitahuan Privasi ini, kami dapat mengungkapkan dan membagikan Informasi Pribadi anda jika kami memberitahu anda dan kami telah memperoleh persetujuan anda untuk pengungkapan atau pembagian tersebut.
                            </li>
                            </ol>
                        </li>
                        <br><br>
                        <li>
                          <b><u>Transfer Internasional</u></b>
                          <br>
                          Saat anda menggunakan Aplikasi dan layanan kami di negara lain dimana Aplikasi kami dapat diakses (“<b>Negara Tujuan</b>”), kami dapat mentransfer Informasi Pribadi anda dari negara asal (“<b>Negara Asal</b>”) ke Negara Tujuan untuk membuat anda dapat mengakses dan memastikan pengalaman pelanggan yang lancar ketiga anda menggunakan Aplikasi kami di luar negeri.
                          <br><br>
                          Informasi Pribadi anda juga dapat disimpan atau diolah di luar negara anda oleh personel kami yang bekerja untuk kami di negara lain, atau oleh penyedia layanan pihak ketiga, vendor, pemasok, mitra, kontraktor, atau afiliasi kami.
                          <br><br>
                          Kami akan mematuhi seluruh Peraturan Perundang-undangan yang Berlaku dan menggunakan seluruh usaha yang terbaik untuk memastikan Afiliasi kami di negara lain dan seluruh pihak ketiga penyedia layanan menyediakan tingkat pelindungan yang setara dengan komitmen kami dalam Pemberitahuan Privasi ini dan sebagaimana ditentukan berdasarkan hukum di negara anda.
                          <br><br>
                          Anda memahami dan menyetujui transfer Informasi Pribadi anda keluar dari negara asal anda dan/atau Negara Asal sebagaimana dijelaskan dalam Pemberitahuan Privasi ini.
                          <br>
                        </li>
                        </ol>
                      </div>
                    </div>
                  </div><!-- # Faq item-->
    
                  <div class="accordion-item">
                    <h3 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                        <i class="bi bi-question-circle question-icon"></i>
                        MELINDUNGI INFORMASI PRIBADI ANDA
                      </button>
                    </h3>
                    <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                      <div class="accordion-body">
                        <ol type="1">
                          <li>
                            <b><u>Keamanan Data</u></b>
                            <br>
                            Kerahasiaan Informasi Pribadi anda adalah hal yang terpenting bagi kami. Kami akan memberlakukan upaya terbaik untuk melindungi dan mengamankan Informasi Pribadi anda dari akses, pengumpulan, penggunaan atau pengungkapan oleh orang-orang yang tidak berwenang dan dari pengolahan yang bertentangan dengan hukum, kehilangan yang tidak disengaja, pemusnahan dan kerusakan atau risiko serupa. Namun, pengiriman informasi melalui internet tidak sepenuhnya aman. Walau kami akan berusaha sebaik mungkin untuk melindungi Informasi Pribadi anda, anda mengakui bahwa kami tidak dapat menjamin keutuhan dan keakuratan Informasi Pribadi apa pun yang anda kirimkan melalui Internet, atau menjamin bahwa Informasi Pribadi tersebut tidak akan dicegat, diakses, diungkapkan, diubah atau dihancurkan oleh pihak ketiga yang tidak berwenang, karena faktor-faktor di luar kendali kami. Anda bertanggung jawab untuk menjaga kerahasiaan detail Akun anda dan anda wajib untuk tidak membagikan detail Akun anda, termasuk kata sandi anda dan One Time Password (OTP) dengan siapapun, dan anda harus selalu menjaga dan bertanggung jawab atas keamanan perangkat yang anda gunakan.
                          </li>
                          <br>
                          <li>
                            <b><u>Penyimpanan Data</u></b>
                            <br>
                            Informasi Pribadi anda hanya akan disimpan selama diperlukan untuk memenuhi tujuan dari pengumpulannya, atau selama penyimpanan tersebut diperlukan atau diperbolehkan oleh Peraturan Perundang-undangan yang Berlaku. Kami akan berhenti menyimpan Informasi Pribadi, atau menghapus maksud dari dikaitkannya Informasi Pribadi tersebut dengan anda sebagai individu, segera setelah dianggap bahwa tujuan pengumpulan Informasi Pribadi tersebut tidak lagi dibutuhkan dengan menyimpan Informasi Pribadi dan penyimpanan tidak lagi diperlukan untuk tujuan bisnis atau secara hukum.
                            <br><br>
                            Mohon diperhatikan bahwa masih ada kemungkinan bahwa beberapa Informasi Pribadi anda disimpan oleh pihak lain dengan termasuk institusi pemerintah cara tertentu. Dalam hal kami membagikan Informasi Pribadi anda kepada institusi pemerintah yang berwenang dan/atau institusi lainnya yang dapat ditunjuk oleh pemerintah yang berwenang atau memiliki kerja sama dengan kami, anda menyetujui dan mengakui bahwa penyimpanan Informasi Pribadi anda oleh institusi terkait akan mengikuti kebijakan penyimpanan data masing-masing institusi tersebut. Informasi yang disampaikan melalui komunikasi antara Pengguna dan Penyedia Layanan yang dilakukan selain melalui penggunaan Aplikasi (seperti melalui panggilan telepon, SMS, pesan seluler atau cara komunikasi lainnya dan pengumpulan atas Informasi Pribadi anda oleh agen kami) juga dapat disimpan dengan beberapa cara. Kami tidak mengizinkan penyimpanan Informasi Pribadi dengan cara demikian dan kami tidak bertanggung jawab kepada anda untuk hal tersebut. Sepanjang diizinkan oleh Peraturan Perundang-undangan yang Berlaku, kami tidak akan bertanggung jawab atas penyimpanan Informasi Pribadi anda tersebut. Anda setuju untuk mengganti rugi, membela, dan membebaskan kami, pejabat, direktur, karyawan, agen, mitra, pemasok, kontraktor, dan afiliasi kami dari dan terhadap setiap dan segala klaim, kerugian, kewajiban, biaya, kerusakan, dan ongkos (termasuk tetapi tidak terbatas pada biaya hukum dan pengeluaran biaya ganti rugi penuh) yang dihasilkan secara langsung atau tidak langsung dari setiap penyimpanan yang tidak sah atas Informasi Pribadi anda.
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div><!-- # Faq item-->

                  <!-- # Faq item-->
    
                  <div class="accordion-item">
                    <h3 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                        <i class="bi bi-question-circle question-icon"></i>
                        HAK ANDA SEBAGAI PENGGUNA
                      </button>
                    </h3>
                    <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                      <div class="accordion-body">
                        <b><u>Hak Hukum Anda</u></b>
                        <br>
                        Anda mungkin memiliki hak tertentu berdasarkan Peraturan Perundang-undangan yang Berlaku untuk meminta kepada kami terhadap akses kepada, koreksi dari dan/atau penghapusan terhadap Informasi Pribadi anda yang berada dalam penguasaan dan kendali kami. Sepanjang hak ini tersedia bagi anda sesuai dengan ketentuan Peraturan Perundang-undangan yang Berlaku, anda dapat melaksanakan hak tersebut dengan menghubungi kami di perincian yang disediakan di bawah ini.
                        <br><br>
                        Kami berhak menolak permintaan anda terhadap akses pada, koreksi dari dan/atau penghapusan terhadap, sebagian atau semua Informasi Pribadi anda yang kami kuasai atau kendalikan jika diizinkan atau diperlukan berdasarkan Peraturan Perundang-undangan yang Berlaku. Hal ini termasuk dalam keadaan di mana Informasi Pribadi tersebut dapat berisi referensi kepada orang lain atau di mana permintaan untuk akses atau permintaan untuk mengoreksi atau menghapus adalah untuk alasan yang kami anggap tidak relevan, tidak serius, atau menyulitkan. Tunduk pada Peraturan Perundang-undangan yang Berlaku, kami mencadangkan hak untuk membebankan biaya administratif untuk setiap permintaan akses dan/atau koreksi.
                      </div>
                    </div>
                  </div><!-- # Faq item-->
    
                </div>
    
              </div>
            </div>
    
          </div>
        </section><!-- End Privacy Policy Section -->

  </main><!-- End #main -->

@endsection