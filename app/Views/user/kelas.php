<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<br>
<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Daftar Materi</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="" class="txt"><b>Cras justo odio</b></a></li>
                        <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                        <li class="list-group-item"><a href="" class="txt">Cras justo odio</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="card-title mb-3 post-title font-weight-bold">Belajar Java #01: Pemenganalan Java untuk Pemula</h1>
                    <hr>
                    <div>
                        <span class="badge badge-info">#
                            <a class=text-white rel=tag href=/topik/java>Java </a> </span> </div> <div class="post-content my-5">
                                <p>
                                    <figure class=mb-3><img class="lazyload img-fluid blur-up" src=https://www.petanikode.com/img/cover/java.png data-src=/img/cover/java.png alt="Java Untuk Pemula"></figure>
                                </p>
                                <p>Jadi kamu memutuskan untuk belajar Java..</p>
                                <p>Bagus. 👍</p>
                                <p>Kamu harus simak artikel ini sampai selesai agar tetap termotivasi untuk balajar Java hingga menjadi ahli Java.</p>
                                <p>Pada artikel ini, kita akan membahas:</p>
                                <p>“Apa itu Java?”</p>
                                <p>“Asal usul Java dari mana?”</p>
                                <p>“Mengapa sih belajar Java?”</p>
                                <p>“Bagaimana Cara mulai Belajar Java?”</p>
                                <p>Mari kita mulai…</p>
                                <h2 id=apa-itu-java class=h2>Apa itu Java?</h2>
                                <p>Java adalah bahasa pemrograman yang dibuat oleh James Gosling.</p>
                                <p>
                                    <figure class="mb-3 figure border p-1 rounded-0"><img class="lazyload img-fluid blur-up" src=https://www.petanikode.com/img/java-untuk-pemula/james-gosling.jpg data-src=/img/java-untuk-pemula/james-gosling.jpg alt="James Gosling" title="James Gosling">
                                        <figcaption class="figure-caption text-center my-2">James Gosling</figcaption>
                                    </figure>
                                </p>
                                <p>Sintaks Java mirip seperti C/C++, karena Java banyak terinspirasi dari keuda bahasa ini.</p>
                                <p>Java dirancang untuk tujuan umum (general-purpose) dan sepenuhnya menganut paradigma OOP <em>(Object Oriented Programming)</em>.</p>
                                <p>OOP adalah paradigma pemrograman yang berbasis pada objek. Setiap kita membuat program, maka wajib hukumnya membuat objek terlebih dahulu.</p>
                                <p>Ya.. namanya juga OOP, program yang berorientasikan objek.</p>
                                <p>Namun, jangan khawatir..</p>
                                <p>Jika kamu belum tahu apa-apa tentang OOP, saya tidak akan menggunakan pendekatan OOP dalam menjelaskan Java di tutorial ini.</p>
                                <p>Saya akan menggunakan pendekatan prosedural, yang notabene lebih mudah dipahami pemula.</p>
                                <p>Emang bisa?</p>
                                <p>Java kan sepenuhnya menganut OOP.</p>
                                <p>Ya bisa-bisa saja, meski terkesan dipaksakan. Namun, menurut saya inilah cara terbaik untuk mengenalkan Java kepada pemula.</p>
                                <p>Oke..</p>
                                <p>Sekarang mari kita bahas:</p>
                                <h2>Sejarah Singkat Java</h2>
                                <p>Proyek pengembangan Java dimulai <strong>pada tahun 1991</strong> oleh James Gosling, Mike Sherida, dan Patrick Naughton.</p>
                                <p>Awalnya Java bernama <em>Oak</em>, nama ini diambil dari nama pohon yang berada di dekat kantor James Gosling.</p>
                                <p>Lalu namanya diubah menjadi <em>Green</em>.</p>
                                <p>Pada akhirnya, diubah lagi menjadi <em>Java</em>.</p>
                                <p>Nama Java dipilih karena si Gosling terinspirasi dari asal-usul kopi yang diminumnya, yakni Pulau Jawa.</p>
                                <p>Oleh sebab itu logo Java itu bentuknya seperti secangkir kopi.. 😄</p>
                                <p>
                                    <figure class=mb-3><img class="lazyload img-fluid blur-up" src=https://www.petanikode.com/img/java-untuk-pemula/kopi.jpg data-src=/img/java-untuk-pemula/kopi.jpg alt="Secangkir kopi"></figure>
                                </p>
                                <h2 id=versi-dan-perkembangan-java class=h2>Versi dan Perkembangan Java</h2>
                                <p>Java versi pertama (1.0) dirilis pada tahun 1996. Berikut ini tabel versi Java dari tahun ke tahun.</p>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Versi</th>
                                            <th>Tanggal Rilis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>JDK Beta</td>
                                            <td>1995</td>
                                        </tr>
                                        <tr>
                                            <td>JDK 1.0</td>
                                            <td>January 23, 1996</td>
                                        </tr>
                                        <tr>
                                            <td>JDK 1.1</td>
                                            <td>February 19, 1997</td>
                                        </tr>
                                        <tr>
                                            <td>J2SE 1.2</td>
                                            <td>December 8, 1998</td>
                                        </tr>
                                        <tr>
                                            <td>J2SE 1.3</td>
                                            <td>May 8, 2000</td>
                                        </tr>
                                        <tr>
                                            <td>J2SE 1.4</td>
                                            <td>February 6, 2002</td>
                                        </tr>
                                        <tr>
                                            <td>J2SE 5.0</td>
                                            <td>September 30, 2004</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 6</td>
                                            <td>December 11, 2006</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 7</td>
                                            <td>July 28, 2011</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 8</td>
                                            <td>March 18, 2014</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 9</td>
                                            <td>September 21, 2017</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 10</td>
                                            <td>March 20, 2018</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 11</td>
                                            <td>September 25, 2018</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 12</td>
                                            <td>March 19, 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 13</td>
                                            <td>September 17, 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 14</td>
                                            <td>March 17, 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Java SE 15</td>
                                            <td>September 15, 2020</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Apa itu JDK, J2SE, Java SE, dan Java EE?</p>
                                <p>JDK adalah singkatan dari Java Development Kit. JDK berisi tools, library, dan API yang kita perlukan untuk membuat program dengan Java. Termasuk di dalamnya juga ada JVM.</p>
                                <p>
                                    <figure class=mb-3><img class="lazyload img-fluid blur-up" src=/img/placeholder.svg data-src=/img/cover/jdk.png alt="Java JDK"></figure>
                                </p>
                                <p>Nah, si JDK ini punya beberapa edisi.. ada Java SE <em>(Standart Edition)</em>, Java EE (Enterprise Edition), dan Java ME <em>(Micro Edition)</em>.</p>
                                <p><strong>Java SE</strong> atau <strong>J2SE</strong> adalah Java yang digunakan untuk membuat aplikasi standar seperti aplikasi desktop dan command line (CLI).</p>
                                <p>Sedangkan <strong>Java EE</strong> adalah edisi enterprise yang digunakan untuk membuat aplikasi enterprise seperti dalam Bank, Industri, dll. Namun, Java EE sekarang sudah berubah nama menjadi <strong>Jakarta EE</strong>.</p>
                                <p>Lalu, <strong>Java ME</strong> adalah Java versi mungil yang digunakan untuk membuat aplikasi mobile, micro controller, sensor, dll.</p>
                                <p>Jika kamu pernah pakai HP Nokia sebelum adanya HP Android, di sana kebanyakan aplikasinya dibuat dengan Java ME.</p>
                                <p>
                                    <figure class=mb-3><img class="lazyload img-fluid blur-up" src=/img/placeholder.svg data-src=/img/java-untuk-pemula/nokia-n95.jpg alt="HP Nokia N95"></figure>
                                </p>
                                <h2 id=mengapa-sih-belajar-java class=h2>Mengapa sih Belajar Java?</h2>
                                <p>Setiap orang punya alasan yang berbeda-beda, mengapa mereka ingin belajar Java.</p>
                                <p>Jika kamu belum tahu, mengapa harus belajar Java..</p>
                                <p>Saya coba berikan beberapa alasan yang mungkin akan membuatmu tertarik:</p>
                                <h3 id=1-java-bersifat-general-purpose class=h3>1. Java Bersifat General-purpose</h3>
                                <p>Java itu bahasa yang general-purpose, artinya Java tidak hanya dipakai untuk membuat program yang spesifik saja.</p>
                                <p>Kalau diibaratkan, Java itu seperti kunci inggris yang bisa membuka berbagai macam ukuran baut dan mur.</p>
                                <p>
                                    <figure class=mb-3><img class="lazyload img-fluid blur-up" src=/img/placeholder.svg data-src=/img/java-untuk-pemula/kunci-inggris.jpg alt="Kunci untuk membuka baut"></figure>
                                </p>
                                <p>Sedangkan kunci-kunci yang lainnya hanya bisa membuka baut ukuran tertentu saja.</p>
                                <p>Sebagai Contoh.. ada bahasa SQL yang khusus untuk melakukan query data.</p>
                                <p>Mau bikin tampilan aplikasi desktop pakai SQL?</p>
                                <p>Mana bisa.</p>
                                <p>Sedangkan Java, bisa dipakai untuk membuat berbagai macam aplikasi.</p>
                                <p>Mau bikin aplikasi desktop.. ✅ bisa;</p>
                                <p>Mau bikin aplikasi android.. ✅ bisa;</p>
                                <p>Mau bikin aplikasi web.. ✅ bisa;</p>
                                <p>Jadi punya ilmu Java itu menguntungkan. Selain berguna untuk membuat berbagai macam aplikasi, Java juga banyak dipakai di perushaan.</p>
                                <h3 id=2-java-itu-cross-platform class=h3>2. Java itu Cross-platform</h3>
                                <p>Cross-platform artinya bisa berjalan di atas platform yang berbeda beda.</p>
                                <p>Java bisa digunakan di berbagai macam platform, bisa di Linux, Windows, dan MacOS.</p>
                                <p>
                                    <figure class=mb-3><img class="lazyload img-fluid blur-up" src=/img/placeholder.svg data-src=/img/java-untuk-pemula/windows-mac-linux.png alt="Windows, Mac, dan Linux"></figure>
                                </p>
                                <p>Dengan begini, kita tidak perlu pusing untuk membuat binary untuk tiap-tiap platform.</p>
                                <p>Misalnya, untuk windows kita harus bikin <code>.exe</code>, Linux <code>.deb</code> atau <code>.rpm</code>, dan Mac <code>.dmg</code>.</p>
                                <p>Cukup dengan file <code>jar</code> saja, jika di platform tersebut sudah terinstal Java, maka program tersebut akan langsung bisa dibuka.</p>
                                <h3 id=3-java-untuk-membuat-aplikasi-android class=h3>3. Java untuk Membuat Aplikasi Android</h3>
                                <p>Salah satu alasan yang kuat untuk belajar Java adalah untuk membuat aplikasi android.</p>
                                <p>
                                    <figure class=mb-3><img class="lazyload img-fluid blur-up" src=/img/placeholder.svg data-src=/img/java-untuk-pemula/android-studio.png alt="Android Stuio"></figure>
                                </p>
                                <p>Meskipun sekarang Google lebih mengandalkan Kotlin dibandingkan Java, namun tidak ada salahnya belajar Java terlebih dahulu.</p>
                                <p>Kotlin memang lebih singkat dibandingkan Java, namun dibalik kode yang singkat itu ada peran Java.</p>
                                <p>Nah, dengan mengetahui Java.. nantinya kamu juga akan mudah memahami Kotlin.</p>
                                <h3 id=4-java-itu-populer class=h3>4. Java itu Populer</h3>
                                <p>Berdasarkan TIOBE Programming Community Index, Java adalah bahasa terpopuler dari tahun 2016–2018, dan beberapa tahun di blakang.</p>
                                <p>
                                    <figure class=mb-3><img class="lazyload img-fluid blur-up" src=/img/placeholder.svg data-src=/img/java-untuk-pemula/popularitas-java.png alt="Popularitas Java"></figure>
                                </p>
                                <p>Dari segi popularitas, Java bersaing dengan
                                    <a href=/tutorial/c/>C </a> dan <a href=/tutorial/c++/>C++ </a>. </p> <p>Semakin populer sebuah bahasa, maka komunitasnya akan semakin banyak.</p>
                                <p>Ini tentunya menguntungkan kita, karena saat terjadi masalah.. ada tempat bertanya dan berdiskusi.</p>
                                <h2 id=bagaimana-cara-mulai-belajar-java class=h2>Bagaimana Cara Mulai Belajar Java?</h2>
                                <p>Saat membaca tutorial ini, sebenernya kamu sudah memulai belajar Java.</p>
                                <p>Ini mungkin langkah pertamamu..</p>
                                <p>Selamat! 🥳</p>
                                <p>Berikutnya..</p>
                                <p>Mulailah mempersiapkan alat untuk belajar Java seperti JDK, Teks Editor atau IDE. Ini kita akan bahas ditutorial berikutnya.</p>
                                <p>Setelah itu, pelajari basic-basic Java seperti sintaks dasar Java, Variabel, Fungsi input dan output, hingga nantinya mampu membuat program sendiri dengan Java.</p>
                                <h2 id=apa-selanjutnya class=h2>Apa Selanjutnya?</h2>
                                <p>Baik..</p>
                                <p>Sejauh ini, saya anggap kamu sudah mengenal apa itu Java dan asal usul bahasa pemrograman Java.</p>
                                <p>Berikutnya, silahkan lanjutkan dengan:</p>
                                <ul>
                                    <li><a href=/java-konsep/>Memahami Bagaimana Program Java dieksekusi pada Komputer</a> </li> <li><a href=/java-windows/>Menyiapkan Peralatan untuk Belajar Java di Windows</a> </li> <li><a href=/java-linux/>Menyiapkan Peralatan untuk Belajar Java di Linux</a> </li> </ul> <blockquote>
                                                    <p>Untuk tutorial Java lainnya, cek di 📚
                                                        <a href=/tutorial/java/>List Tutorial Java</a> </p> </blockquote> <p>Selamat Belajar!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <hr>
        <footer class="text-center">
            <div class="container">
                <div class="row">
                    <p>Copyright © 2020 - Kademy. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>


    <?= $this->endSection(); ?>