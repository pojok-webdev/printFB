<link rel='stylesheet' href='/css/fbs/a4.css' />
<link rel='stylesheet' href='/css/fbs/hal2.css' />
<link rel="stylesheet" href="/css/fbs/screen-css.css" media="all" />
<link rel="stylesheet" href="/css/fbs/print-css.css" media="print" />
<link rel="stylesheet" href="/css/fbs/screen-css.css" media="all" />
<link rel="stylesheet" href="/css/fbs/print-css.css" media="print" />
<script src="/js/fbs/print.js"></script>
<div class='navigator'>
    <a href="/fbs/index"><img src="/img/navigators/home-4x.png" alt="Home" ></a>
    <a href="/fbs/hal1/<?php echo $nofb;?>"><img src="/img/navigators/caret-left-4x.png" ></a>
    <span onclick="winPrint()"><img src="/img/navigators/print-4x.png"></span>
</div>
<page size="A4">
    <div class='rowheader1st serviceheader'>
        <div>
            <span>LAYANAN</span>
        </div>
    </div>
    <div class="servicedata">
        <div>
            <span>
                <?php foreach($services as $service){
                    echo $service->category . ' ';
                    echo $service->name . ' ';
                    echo 'Up '.$service->upstr . ' Mbps';
                    echo 'Down '.$service->dnstr . ' Mbps';
                    echo '<br />';
                }?>
            </span>
        </div>
    </div>
    <div class="perioddata">
        <div>
            <span>Tanggal Aktivasi</span><span>&#9;:&#9;<?php echo $activationdate?></span>
        </div>
        <div>
            <span>Periode Kontrak</span><span>&#9;:&#9; <?php echo $period1 . ' - ' . $period2;?></span>
        </div>
    </div>
    <div class='rowheader serviceheader'>
        <div>
            <span>BIAYA BERLANGGANAN</span>
        </div>
    </div>
    <div >
        <div>
            <div class='leftfieldbiaya'>Biaya Setup</div>
            <div class='rightfieldbiaya'>: Rp. <?php echo $setupfeedpp;?>+PPn = Rp. <?php echo $setupfeetotal;?></div>
        </div>
        <div>
            <div class='leftfieldbiaya'>Biaya berlangganan bulanan</div>
            <div class='rightfieldbiaya'>: Rp. <?php echo $monthlyfeedpp;?>+PPn = Rp. <?php echo $monthlyfeetotal;?></div>
        </div>
        <div>
            <div class='leftfieldbiaya'>Biaya perangkat</div>
            <div class='rightfieldbiaya'>: Rp. <?php echo $devicefeedpp;?>+PPn = Rp. <?php echo $devicefeetotal;?></div>
        </div>
        <div>
            <div class='leftfieldbiaya'>Biaya lainnya</div>
            <div class='rightfieldbiaya'>: Rp. <?php echo $otherfeedpp;?></div>
        </div>
    </div>

    <div class='rowheader serviceheader'>
        <div>
        <span>PERSETUJUAN</span>

        </div>
    </div>
    <div >
        <ol class='agreement'>
            <li>Pelanggan memberikan konfirmasi atas keinginannya menggunakan layanan yang disediakan oleh PadiNET dan secara otomatis terikat dengan SYARAT DAN KETENTUAN BERLANGGANAN yang diberlakukan oleh PadiNET</li>
            <li>Form berlangganan ini berfungsi dan memiliki kekuatan sebagaimana Kontrak Berlangganan, sesuai dengan periode yang tercantum dalam halaman 2</li>
            <li>PadiNET akan melaksanakan kegiatan instalasi dan setup sesuai dengan layanan yang dipilih sebagaimana tertera di atas dan akan dituangkan kemudian dalam Berita Acara Aktivasi</li>
            <li>Pelanggan setuju bahwa Form Berlangganan bersama dengan Berita Acara Aktivasi dapat digunakan oleh PadiNET sebagai dasar penagihan</li>
            <li>Untuk layanan yang menggunakan media wireless dan layanan collocation, proses upgrade bisa dilakukan sewaktu-waktu mengikuti periode kontrak sebelumnya</li>
            <li>Downgrade hanya dapat dilaksanakan setelah layanan dan / atau perubahan terakhir layanan berjalan minimal 3 bulan</li>
            <li>Downgrade hanya bisa dilaksanakan pada tahun pertama secara otomatis akan memperpanjang masa kontrak selama12 bulan ke depan sejak dilaksanakannya downgrade</li>
            <li>Upgrade layanan yang menggunakan media fiber optik dan satelit wajib dipertahankan sampai minimal kontrak 12 bulan berakhir</li>
            <li>Downgrade untuk layanan yang menggunakan media fiber optik dan satelit baru dapat diaksakanakan setelah minimal periode kontrak 12 bulan berjalan</li>
        </ol>
    </div>
    <hr>
    <div class='sign'>
        <p class='leftdiv'>Saya menyatakan bahwa form ini diisi dengan sebenar-benarnya dan saya bersedia untuk mengikuti segala persyaratan dan ketentuan yang ditetapkan oleh PadiNET</p>
        <p class='rightdiv'>Autorisasi PadiNET</p>
    </div>
    <div class='signx'>
        <div class='leftsignpart'>
            <span class='leftdivsmaller1 hasoverline'>Tanda Tangan & Nama Terang</span>
            <span class='leftdivsmaller2 hasoverline'>Tanggal</span>
            <span class='leftdivsmaller3 hasoverline'>Stempel</span>
        </div>
        <div class='rightsignpart'>
            <span class='rightdivsmaller1 hasoverline'>Tanda Tangan & Nama Terang</span>    
            <span class='rightdivsmaller2 hasoverline'>Stempel PadiNET</span>
        </div>
    </div>

    <div class='rowheaderx internalheader'>
        <div>
        <span>UNTUK PENGGUNAAN INTERNAL</span>

        </div>
    </div>



    <div class='mostbottom'>
        <div class='leftdiv2 hasbottomline'>
            <br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
            <span class='leftdivsmaller1'>
                <span id='unholder'><?php echo $username;?></span>
                <span id='ttholder' class='hasoverline'>Tanda Tangan & Nama AM</span>
            </span>
            <span class='leftdivsmaller2'>
                <span>&nbsp;</span>
                <span class='centered hasoverline'>Tanggal</span>
            </span>
        </div>
        <div class='verticalline'>
        <br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
        </div>
        <div class='rightdiv2 hasbottomline'>
            <span id='keteranganinternal' class='hasoverlinex'>Keterangan</span>
            <br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
        </div>
    </div>
</page>
