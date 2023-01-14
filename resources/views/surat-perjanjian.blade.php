<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Perjanjiang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" media="print, screen" href="{{ '/css/style.css' }}">

</head>

<body>
    {{-- @dd($data) --}}
    <div id="container-surat">
        <div class="judul"><u>PERJANJIAN HUTANG</u>
        </div>
        <div class="nomor-surat">
            <p class="fst-italic">Nomor : {{ $data->surat_perjanjian[0]->nomor_surat }}</p>
        </div>
        <p class="tab-size" style="margin-bottom: 5px">Kami yang bertanda tangan dibawah ini :</p>
        <table style="margin-bottom:10px;">
            <tr>
                <td>Nama</td>
                <td class="tab-size1">: </td>
                <td class="pd-lf">{{ $data->nama_peminjam }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td class="tab-size1">:</td>
                <td class="pd-lf">{{ $data->alamat }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td class="tab-size1">:</td>
                <td class="pd-lf">{{ $data->pekerjaan }}</td>
            </tr>
        </table>
        <p class="tab-size" style="margin-bottom: 2px">Yang berhutang, dan selanjutnya disebut <span
                class="fw-bold">PIHAK KESATU.</span></p>
        <table style="margin-bottom:10px;">
            <tr>
                <td>Nama</td>
                <td class="tab-size1">:</td>
                <td class="pd-lf"></td>
            </tr>
            <tr>
                <td class="align-top">Pekerjaan</td>
                <td class="tab-size1 align-top">:</td>
                <td class="pd-lf">Pengelola KSP CITRA ABADI berkedudukan di Jl. Raya Deandles - GRESIK (Timur Kantor
                    Kel. Sambi Pondok) Telp. 0812 3502 0022-0857 332 99987, yang Berpiutang</td>
            </tr>
        </table>
        <p><span class="tab-size"></span>
            Dalam hal ini bertindak dalam kedudukannya tersebut diatas, oleh karena itu
            sah mewakili, Selanjutnya disebut <span class="fw-bold">PIHAK KEDUA.</span>
        </p>

        <p><span class="tab-size"></span>
            PIHAK KESATU menerangkan, bahwa PIHAK KESATU benar-benar dengan sah berhutang kepada PIHAK KEDUA karena
            pinjaman uang sebesar Rp. {{ number_format($data->nominal_pinjaman, 2, ',', '.') }}
            ({{ $terbilang }} Rupiah)
            yang telah
            diterima
            PIHAK KESATU dari PIHAK KEDUA di kantor PIHAK KEDUA.
            <br>
            Pada tanggal {{ $data->surat_perjanjian[0]->tanggal_pembuatan }} dan untuk penerimaan uang tersebut akta
            ini dinyatakan berlaku sebagai tanda
            penerimaan yang sah (Kwitansi) dan PIHAK KEDUA dengan ini menerima dengan baik Perjanjian Hutang dari PIHAK
            KESATU
            tersebut.
        </p>
        <p><span class="tab-size"></span>
            Sehubungan dengan pinjaman / hutang tersebut, PIHAK KESATU dan PIHAK KEDUA telah bersepakat bahwa
            perjanjian hutang tersebut dilakukan dan diterima dengan syarat-syarat sebagai berikut:
        </p>

        <div class="pasal">PASAL 1</div>
        <p>
            Hutang sebesar Rp. {{ number_format($data->nominal_pinjaman, 2, ',', '.') }}
            ({{ $terbilang }} Rupiah) Ditambah dengan jasa pinjaman yang telah ditentukan ............% Setiap bulan
            selama..............( ...) bulan menjadi sebesar Rp: ………. (……) harus dilunasi dalam jangka waktu
            {{ $data->waktu_pelunasan }} ({{ $terbilang_waktu_pelunasan }}) bulan, dengan ketentuan: <br>
            ........................ <br>
            pembayaran angsuran harus dilakukan paling lambat pada setiap tanggal ............. dan untuk pertama
            kalinya dimulai pada tanggal ............. dan demikian seterusnya hingga berakhir paling
            lambat pada tanggal ..................... <br>
            Jasa Pinjaman sewaktu-waktu dapat berubah sesuai dengan suku bunga
            pasar. Perubahan jasa
            pinjaman diberitahukan
            secara tertulis kepada PIHAK KESATU
        </p>

        <div class="pasal">PASAL 2</div>
        <p>
            Semua pembayaran harus dilakukan oleh PIHAK KESATU kepada dan di kantor PIHAK KEDUA dengan menunjukkan kartu
            angsuran PIHAK KESATU memperoleh bukti angsuran (Kwitansi I) dari PIHAK KEDUA.
        </p>

        <div class="pasal">PASAL 3</div>
        <p>
            Dalam hal PIHAK KESATU tidak membayar salah satu angsuran tepat pada waktunya sebagaimana telah ditentukan
            dalam Pasal 1 akta ini, maka PIHAK KESATU sudah dinyatakan lalai walaupun tanpa peringatan atau teguran baik
            lisan maupun tertulis terlebih dahulu, dan oleh sebab itu PIHAK KESATU dikenakan sanksi keterlambatan atau
            kewajiban membayar penggantian kerugian kepada PIHAK KEDUA sebesar : 0,5 % ( Nol Koma Lima Persen Juntuk
            setiap hari keterlambatannya. Yaitu keterlambatan tiap-tiap bulan jatuh tempo ANGSURAN/JASAPINJAMAN/POKOK.
            <br>
            Dan bilamana dalam waktu 7 (Tujuh) hari setelah pembayaran satu angsuran terbit PIHAK KESATU belum juga
            melunasi kewajibannya tersebut, maka perjanjian ini batal dengan sendirinya, tidak diperlukan lagi keputusan
            hakim, karena ketentuan yang tersebut dalam Pasal 1266 dan Pasal 1267 KUH Perdata Indonesia, dengan ini
            dilepaskan oleh para pihak dan PIHAK KESATU berkewajiban menyerahkan kembali barang yang dijaminkan.
        </p>

        <div class="pasal">PASAL 4</div>
        <p>
            Menyimpang dari ketentuan tersebut dalam Pasal 1 di atas, PIHAK KEDUA berhak menagih piutang kepada terhadap
            PIHAK KESATU seketika dan sekaligus: <br>
        <ol>
            <li>Jika PIHAK KESATU lalai dan kelalaian ini sudah cukup dibuktikan dengan lewatnya
                7 (Tujuh) hari sejak hari pembayaran tersebut, atau PIHAK KESATU tidak kurang menepati
                janji-janjinya menurut akta
                ini.
            </li>
            <li>Jika PIHAK KESATU ditaruh dibawah pengampunan (Curatele ) atau karena
                dengan cara apapun kehilangan hak
                untuk mengurus harta benda / (kekayaan) nya, dinyatakan pailit atau tidak mampu lagi membayar
                hutang-hutangnya, atau mengajukan penundaan pembayaran hutang.
            </li>
            <li>
                Jika menurut pertimbangan PIHAK KEDUA, bahwa harta benda (kekayaan) PIHAK
                KESATU menyusut atau berkurang,
                dan tidak lagi mempunyai kegiatan usaha yang berarti atau mundur.
            </li>
            <li>
                Jika harta benda (kekayaan) PIHAK KESATU baik seluruh atau sebagian secara
                apapun dikenakan penyitaan oleh instansi yang berwenang / pihak lain.
            </li>
            <li>
                Jika barang yang masih berstatus barang yang dijaminkan oleh PIHAK KESATU berdasarkan akta ini akan
                dipindah tangankan secara apapun kepada pihak lain tanpa persetujuan PIHAK KEDUA.
            </li>
            <li>
                Jika suatu pernyataan, keterangan atau dokumen yang diberikan oleh PIHAK KESATU sehubungan dengan
                perjanjian ini ternyata tidak sesuai dengan kenyataan sebenarnya.
            </li>
            <li>
                Jika PIHAK KESATU meninggal dunia atau perusahaannya dilikuidasi, kecuali ahli warisnya yang sah sanggup
                menyelesaikan atau mengadakan perubahan (pembaharuan) perjanjian lainnya dan bersedia untuk
                menyelesaikan
                hutang dan kewajibannya kepada PIHAK KEDUA.
            </li>
        </ol>
        </p>

        <div class="pasal">PASAL 5</div>
        <p>
            Dalam hal terjadinya salah satu dari kejadian yang dimaksud dalam Pasal 4 di atas dan pada waktu penagihan
            PIHAK KESATU tidak melunasi apa yang terhutang olehnya kepada PIHAK KEDUA, maka PIHAK KEDUA berhak dan
            dianggap sudah diberi kuasa untuk menjual jaminan tersebut.
        <p>
            Dari hasil penjualan jaminan tersebut PIHAK KEDUA berhak menerima uang penjualan dan memberikan tanda
            penerimaannya untuk pelunasan hutang pokok berikut Jasa Pinjaman, sanksi keterlambatan, dan biaya-biaya
            lainnya yang timbul.
        </p>
        <p>
            Bilamana ada kekurangan, maka kekurangan tersebut tetap menjadi tanggungan dan harus segera diselesaikan
            oleh PIHAK KESATU.
            Semua biaya-biaya untuk menagih hutang menurut akta ini, demikian pula biaya-biaya lain yang ada (mungkin
            timbul) sehubungan dengan perjanjian hutang PIHAK KESATU menurut / berdasarkan akta ini harus dipikul dan
            dibayar oleh PIHAK KESATU.
        </p>

        <div class="pasal">PASAL 6</div>
        <p>
            Untuk menjamin lebih kuat dan pasti bahwa PIHAK KESATU akan membayar semua hutangnya, baik berupa hutang
            pokok, jasa pinjaman dan biaya lainnya kepada PIHAK KEDUA dengan tertib dan sebagaimana mestinya, sesuai
            dengan apa yang diperjanjikan menurut akta ini, maka PIHAK KESATU dengan Akta Fiduciaire tertanggal hari ini
            memberi jaminan secara Fiduciaire kepada PIHAK KEDUA atas barang milik PIHAK KESATU yang diserahkan sebagai
            jaminan berupa : ……… (…….) unit kendaraan bermotor roda …….. (…….) beserta BPKB-nya, data-data sebagai
            berikut :

        <table>
            <tr>
                <td>Merk/Type</td>
                <td class="tab-size1">:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tahun/Warna</td>
                <td class="tab-size1">:</td>
                <td></td>
            </tr>
            <tr>
                <td>No. Polisi</td>
                <td class="tab-size1">:</td>
                <td></td>
            </tr>
            <tr>
                <td>No. Rangka</td>
                <td class="tab-size1">:</td>
                <td></td>
            </tr>
            <tr>
                <td>No. Mesin</td>
                <td class="tab-size1">:</td>
                <td></td>
            </tr>
            <tr>
                <td>No. BPKB</td>
                <td class="tab-size1">:</td>
                <td></td>
            </tr>
            <tr>
                <td>Atas Nama</td>
                <td class="tab-size1">:</td>
                <td></td>
            </tr>
        </table>
        </p>

        <div class="pasal">PASAL 7</div>
        <p>
            Guna menjamin kepastian dan ketertiban pembayaran hutang PIHAK KESATU kepada PIHAK KEDUA, maka penyerahan
            atas barang jaminan tersebut akan dibuat dalam perjanjian tersendiri, yaitu Pengikatan Jaminan secara
            Fiduciaire dan Kuasa untuk Menjual tertanggal hari ini, No. : ……… Akta Fiduciaire yang mana akan dibuat
            tersendiri dan merupakan bagian yang tidak dapat dicabut kembali atau menjadi batal oleh sebab apapun selama
            hutang PIHAK KESATU kepada PIHAK belum terbayar lunas, karena alasan apapun juga seperti yang disebut dalam
            Pasal 1813 Kitab Undang-Undang Hukum Perdata yang berlaku di Indonesia. Disamping kuasa tersebut, PIHAK
            KEDUA juga diberi kuasa khusus untuk mengambil kendaraan yang dijaminkan apabila terjadi wanprestasi yang
            dibuat secara tersendiri.
        </p>

        <div class="pasal">PASAL 8</div>
        <p>PIHAK KESATU menjamin kepada PIHAK KEDUA:</p>
        <ol>
            <li>
                Bahwa PIHAK KESATU adalah satu-satunya pemilik sah dari barang jaminan tersebut diatas.
            </li>
            <li>
                Bahwa barang jaminan tersebut di atas saat ini bebas dari sitaan dan tidak dalam keadaan sengketa.
            </li>
            <li>
                Bahwa barang jaminan tersebut tidak dialihkan / disewakan tanpa persetujuan dari PIHAK KEDUA.
            </li>
        </ol>

        <div class="pasal">PASAL 9</div>
        <p>
            Untuk segala urusan mengenai perjanjian ini dengan akibat-akibatnya, kedua belah pihak memilih domisili yang
            tetap dan umum di Kantor Panitera Pengadilan Negeri di Gresik.
        </p>
        <div style="text-align: right" class="mb-2">Gresik, 07 Januari 2023</div>
        <table class="ttd">
            <tr>
                <td>PIHAK KEDUA :</td>
                <td>PIHAK KESATU :</td>
            </tr>
            <tr style="height: 2cm"></tr>
            <tr>
                <td>...............................</td>
                <td>...............................</td>
            </tr>
            <tr style="height: 20px"></tr>
            <tr>
                <td>SAKSI II :</td>
                <td>SAKSI I :</td>
            </tr>
            <tr style="height: 2cm"></tr>
            <tr>
                <td>...............................</td>
                <td>...............................</td>
            </tr>
            <tr style="height: 20px"></tr>
        </table>
        <p>
            ------------------------------------------------------------------------------------------------------------------------
        </p>
        <p>
            Atas permintaan dari PIHAK KESATU dan apabila mendapat persetujuan dari PIHAK KEDUA jangka waktu pinjaman
            dapat diperpanjang dalam waktu yang lamanya akan ditentukan oleh PIHAK KEDUA.
        </p>
        <p>
            Tanggal Perpanjangan: ………. Jangka Waktu: …….. (……....) bulan
        </p>
        <p>
            Mulai Tanggal : ………. sampai dengan tanggal : ..................
        </p>
        <p style="margin: 1cm 0 1cm 0">
            PIHAK KESATU : ................ PIHAK KEDUA : ....................
        </p>
        <p>
            Tanggal Perpanjangan: ………. Jangka Waktu: …….. (……....) bulan
        </p>
        <p>
            Mulai Tanggal : ………. sampai dengan tanggal : ..................
        </p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
