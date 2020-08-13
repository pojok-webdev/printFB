<html>
<link rel='stylesheet' href='/css/fbs/a4.css' />
<link rel='stylesheet' href='/css/fbs/hal.css' />
<link rel="stylesheet" href="/css/fbs/screen-css.css" media="all" />
<link rel="stylesheet" href="/css/fbs/print-css.css" media="print" />
<script src="/js/fbs/print.js"></script>
<div class='navigator'>
    <a href="/fbs/index"><img src="/img/navigators/home-4x.png" alt="Home" ></a>
    <a href="/fbs/hal2/<?php echo $nofb;?>"><img src="/img/navigators/caret-right-4x.png" ></a>
    <span onclick="winPrint()"><img src="/img/navigators/print-4x.png"></span>
</div>
<page size="A4" id="printArea">
    <div class="leftdiv">
        <div id="logo" >
        <img src="/img/logo_padinet_small4.png" height="75px" alt="">
        </div>
        <div id="headoffice">
            <p class="branch-name">Surabaya Head Office</p>
            <div class="branch-detail">
                <p>Mayjend Sungkono 83, Surabaya 60242</p>
                <p>Ph. 031-5616330 Fax. 031 - 5616304</p>
            </div>
        </div>

    </div>
    <div class="rightdiv">
        <div id="branches">
            <div class="branches">
                <p class="branch-name">Jakarta Branch</p>
                <div class="branch-detail">
                    <p>Graha Sucofindo Lt.10, Jl Raya Pasar Minggu Kav 34 Jakarta Selatan 12780</p>
                    <p>Ph. 021-791886/30 Fax. 021 - 79188602</p>
                </div>
            </div>
            <div class="branches">
                <p class="branch-name">Malang Branch</p>
                <div class="branch-detail">
                    <p>Letjen S. Parman 21 Malang 65141</p>
                    <p>Ph. 0341-404900 Fax. 0341 - 412115</p>
                </div>
            </div>
            <div class="branches">
                <p class="branch-name">Bali Branch</p>
                <div class="branch-detail">
                    <p>Benoa Square 3rd floor</p>
                    <p>Bypass Ngurah Rai 21A, Kedonganan 80361</p>
                    <p>Ph. 0361-8957723 Fax. 0361 - 8957723</p>
                </div>
            </div>            
        </div>
    </div>
    <div class="leftdiv">
        <div class="subheader1">
            <p>Form Berlangganan</p>
        </div>
    </div>
    <div class="rightdiv">
        <div class="subheader1">
            <p>No: <?php echo $nofb;?></p>
        </div>
    </div>
    <hr>
    <div class="headernote">
        <div id="headernotecontent">
            <span class="bold1">Catatan</span>
            <span>Untuk mewakili perusahaan / badan hukum , pengisian aplikasi wajib dilakukan oleh pejabat yang berwenang</span>
        </div>
    </div>
    <div class="categorydiv">
        <div id="categorylabel">
            <span class="categoryoptionlabel">Kategori</span>
        </div>
    </div>
    <div class="categorydiv">
        <div>
            <span class="categoryoptionlabel"><input type="checkbox" name="" id=""> Korporasi</span>
        </div>
    </div>
    <div class="categorydiv">
        <div>
            <span class="categoryoptionlabel"><input type="checkbox" name="" id=""> Game Online</span>
        </div>
    </div>
    <div class="categorydiv">
        <div>
            <span class="categoryoptionlabel"><input type="checkbox" name="" id=""> Perorangan</span>
        </div>
    </div>
    <div class="categorydiv">
        <div>
            <span class="categoryoptionlabel"><input type="checkbox" name="" id=""> Lainnya</span>
        </div>
    </div>
    <div class='rowheader'>
        <div>
            <span>DATA PERUSAHAAN</span>
        </div>
    </div>
    <div class="rowfield">
        <div>
            <span>Nama Perusahaan/Pelanggan</span>
        </div>
        <div>
            <?php echo $name;?>
        </div>
    </div>
    <hr>
    <div class="rowfield">
        <div>
            <span>Jenis Usaha</span>
        </div>
        <div>
            Lain-lain
        </div>
    </div>
    <hr>
    <div class="rowfield">
        <div>
            <span>Nomor Pendaftaran Perusahaan (Harap melampirkan SIUP dan NPWP)</span>
        </div>
        <div>
            SIUP: <?php echo $siup;?>
        </div>
        <div>
            NPWP: <?php echo $npwp;?>
        </div>
    </div>
    <hr>
    <div class="rowfield">
        <div>
            <span>Alamat, Telepon, dan Fax</span>
        </div>
        <div>
            Alamat: <?php echo $address;?>
        </div>
        <div>
            Telp/Fax: <?php echo $telp;?>/<?php echo $fax;?>
        </div>
    </div>
    <hr>
    <div class="rowfield">
        <div>
            <span>Pemohon dan Penanggung Jawab (Harap melampirkan fotokopi kartu identitas)</span>
        </div>
    </div>
    <hr class='fieldrowseparator'>
        <div class="leftdiv">
            <div class='rowfieldheader'>
                Pemohon
            </div>
            <div>
                <div class='leftfield'>Nama</div>: Puji W Prayitno
            </div>
            <div>
                <div class='leftfield'>Jabatan</div>: CEO
            </div>
            <div>
                <div class='leftfield'>No ID (KTP)</div>: 123456789xx
            </div>
            <div>
                <div class="leftfield">Telp/HP</div>
                <div class="xrightfield">: 123456789xx</div>
            </div>
            <div>
                <div class='leftfield'>Email</div>: puji@padi.net.id
            </div>
        
        </div>
        <div class="rightdiv leftborder">
            <div class='rowfieldheader'>
                Penanggung Jawab (Setara Direktur atau Pemilik Usaha)
            </div>
            <div>
                <div class='leftfield'>Nama</div>: Puji W Prayitno
            </div>
            <div>
                <div class='leftfield'>Jabatan</div>: CEO
            </div>
            <div>
                <div class='leftfield'>No ID (KTP)</div>: 123456789xx
            </div>
            <div>
                <div class="leftfield">Telp/HP</div>
                <div>: 123456789xx</div>
            </div>
            <div>
                <div class='leftfield'>Email</div>: puji@padi.net.id
            </div>

        </div>        
        <hr>
        <div class="leftdiv">
            <div class='rowfieldheader'>
                Untuk Keperluan Administrasi, PadiNET akan menghubungi
            </div>
            <div>
                <div class='leftfield'>Nama</div>: Puji W Prayitno
            </div>
            <div>
                <div class='leftfield'>Jabatan</div>: CEO
            </div>
            <div>
                <div class="leftfield">Telp/HP</div>
                <div class="xrightfield">: 123456789xx</div>
            </div>
            <div>
                <div class='leftfield'>Email</div>: puji@padi.net.id
            </div>

        </div>
        <div class="rightdiv leftborder">
            <div class='rowfieldheader'>
                Untuk setup teknis dan instalasi, PadiNET akan menghubungi
            </div>
            <div>
                <div class='leftfield'>Nama</div>: Puji W Prayitno
            </div>
            <div>
                <div class='leftfield'>Jabatan</div>: CEO
            </div>
            <div>
                <div class="leftfield">Telp/HP</div>
                <div>: 123456789xx</div>
            </div>
            <div>
                <div class='leftfield'>Email</div>: puji@padi.net.id
            </div>

        </div>
        <hr>
        <div class="leftdiv">
            <div class='rowfieldheader'>
                Untuk penagihan, PadiNET akan menghubungi
            </div>
            <div>
                <div class='leftfield'>Nama</div>: Puji W Prayitno
            </div>
            <div>
                <div class='leftfield'>Jabatan</div>: CEO
            </div>
            <div>
                <div class="leftfield">Telp/HP</div>
                <div class="xrightfield">: 123456789xx</div>
            </div>
            <div>
                <div class='leftfield'>Email</div>: puji@padi.net.id
            </div>

        </div>
        <div class="rightdiv leftborder">
            <div class='rowfieldheader'>
                Untuk support teknis 24 jam, PadiNET akan menghubungi
            </div>
            <div>
                <div class='leftfield'>Nama</div>: Puji W Prayitno
            </div>
            <div>
                <div class='leftfield'>Jabatan</div>: CEO
            </div>
            <div>
                <div class="leftfield">Telp/HP</div>
                <div>: 123456789xx</div>
            </div>
            <div>
                <div class='leftfield'>Email</div>: puji@padi.net.id
            </div>

        </div>
    <hr>


    <div class="leftdiv">
            <div class='rowfieldheader'>
                Penagihan
            </div>
            <div class="clientAddress">
                <div><input type="checkbox" name="" id="">Account Baru</div>
            </div>
            <div class="clientAddress">
                <div><input type="checkbox" name="" id="">Ditambahkan ke Account yang telah ada</div>
            </div>

        </div>
        <div class="rightdiv leftborder">
            <div class='rowfieldheader'>
                Alamat Penagihan
            </div>
            <div class="clientAddress">
                <div>Komplek Pergudangan Permata Gedangan Blok A / 16</div><br><br>
            </div>

        </div>
    <hr>
    <div id='footer'>
    <div class="leftdiv">
        <div>
            <div class='footer'>Paraf Pelanggan</div>
        </div>

    </div>
    <div class="rightdiv leftborder">
        <div>
            <div class='footer' rightside>Confidential Hal 1</div><br><br>
        </div>

    </div>

    </div>
</page>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/fbs/hal1.js"></script>
</html>