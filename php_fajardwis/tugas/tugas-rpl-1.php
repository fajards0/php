<form action="proses-tugas-rpl-1.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <br>    
    <div style="margin-bottom: 1rem;">
        <label>Jenis kelamin</label> <br>
        <select name="jenis">
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal">
    </div>
    <br>
    <div style="margin-bottom: 1rem;">
        <label>Kategori olahraga</label> <br>
        <input type="radio" name="kategori" value="sepak bola"> Sepak bola <br>
        <input type="radio" name="kategori" value="bulu tangkis"> Bulu tangkis <br>
        <input type="radio" name="kategori" value="renang"> Renang
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Pilihan kelas</label> <br>
        <input type="checkbox" name="kelas" value="pemula"> Pemula <br>
        <input type="checkbox" name="kelas" value="menengah"> Menengah <br>
        <input type="checkbox" name="kelas" value="lanjutan"> Lanjutan 
    </div>
    <div>
        <label>Kemampuan fisik</label> <br>
        <textarea name="fisik"></textarea>
    </div>
    <br>
    <div style="margin-bottom: 1rem;">
        <label>Pembayaran</label> <br>
        <select name="pembayaran">
            <option value="transfer">Transfer</option>
            <option value="bank">Bank</option>
            <option value="kartu kredit">Kartu kredit</option>
        </select>
    </div>
    <div>
        <button>Submit</button>
    </div></form>