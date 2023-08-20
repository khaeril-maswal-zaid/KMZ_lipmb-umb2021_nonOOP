<div class="container pt-4 mx-5">
    <div class="bp">
        <h2 class="text-center">Biaya Pendidikan <br> Tahun Akademik <?=date('Y').' / ',date('Y')+1?></h2>
        <h5 class="text-center mb-4">Universitas Muhammadiyah Bulukumba</h5>
    </div>

    <table class="table table-bordered b-kuliah">
        <thead>
            <tr class="table-warning">
                <th scope="col" rowspan="2" class="align-middle">No</th>
                <th scope="col" rowspan="2" class="align-middle">Program Studi</th>
                <th scope="col" rowspan="2" class="align-middle">BPP *<br> (A)</th>
                <th scope="col" rowspan="2" class="align-middle">SPP **<br> (B)</th>
                <th scope="col" colspan="3">Biaya Tambahan <br> (C)</th>
                <th scope="col" rowspan="2" class="align-middle">Jumlah <br>(A + B + C)</th>
            </tr>
            <tr class="table-warning">
                <th scope="col">Infaq <br>dan KRU ***</th>
                <th scope="col">Almamater <br>dan KTM ****</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $jurusan = [1=>'Pend. Bhs. Inggris', 'Pend. Bhs. Indonesia', 'Pend. Biologi', 'Pend. Non Formal', 'Ilmu Aktuaria', 'Kimia', 'Peternakan', 'PWK'];

                for ($i=1; $i < 9; $i++) :
            ?>

            <tr class="table-info">
                <td scope="col"><?=$i; ?></td>
                <td scope="col" class="text-left"><?=$jurusan[$i]; ?></td>
                <td scope="col"><?=rupiah($valuebp['bpp'.$i])?></td>
                <td scope="col"><?=rupiah($valuebp['spp'.$i])?></td>
                <td scope="col"><?=rupiah($valuebp['ik'.$i])?></td>
                <td scope="col"><?=rupiah($valuebp['ak'.$i])?></td>
                <td scope="col"><?=rupiah($valuebp['ik'.$i]+$valuebp['ak'.$i])?></td>
                <td scope="col"><?=rupiah($valuebp['bpp'.$i]+$valuebp['spp'.$i]+($valuebp['ik'.$i]+$valuebp['ak'.$i]))?></td>
            </tr>

            <?php
                endfor;
            ?>
        </tbody>
    </table>

    <span class="text-danger font-weight-bolder">Catatan :</span>

    <div class="row mt-2">
        <div class="col-1  font-weight-bolder text-right"> * </div>
        <div class="col-1  text-center">:</div>
        <div class="col-10">
            <div class="">Adalah Biaya Penyelenggaraan Pendidikan (uang kuliah) dan dibayarkan setiap semester.</div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-1  font-weight-bolder text-right"> ** </div>
        <div class="col-1  text-center">:</div>
        <div class="col-10">
            <div class="">Adalah Sumbangan Penyelenggaraan Pendidikan (uang pembangunan) hanya dibayar sekali pada saat terdaftar sebagai mahasiswa UMB serta dapat diansur sebanyak dua kali.</div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-1  font-weight-bolder text-right"> *** </div>
        <div class="col-1  text-center">:</div>
        <div class="col-10">
            <div class="">Adalah biaya tambahan untuk Almamater dan KTM dan juga dibayar sekali pada saat terdaftar sebagai mahasiswa UMB.</div>
        </div>
     </div>
    <div class="row mt-2">
        <div class="col-1  font-weight-bolder text-right"> **** </div>
        <div class="col-1  text-center">:</div>
        <div class="col-10">
            <div class="">Adalah biaya tambahan yang dibayar setiap semister jumlahnya sesuai SKS persemister (Setiap semister berbeda-beda).</div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-1 font-weight-bolder text-right">-</div>
        <div class="col-11">
            <span>Pembayaran Sumbangan Penyelenggara Pendidikan (uang pembangunan) melalui Bank BRI No. Rek 0253-01-000545-30-0  a.n BPH STKIP Muhammadiyah Bulukumba. </span> 
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-1 font-weight-bolder text-right">-</div>
        <div class="col-11">
            <span>Pembayaran Biaya Penyelenggara Pendidikan (Uang kuliah) melalui Bank Syariah Mandiri No. Rek 0321007406  a.n Stkip Muhammadiyah Bulukumba.</span> 
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-1 font-weight-bolder text-right">-</div>
        <div class="col-11">
            <span>Untuk biaya Magang, Praktikum, KKN,  Ujian Skripsi dan Wisuda diatur lebih lanjut.</span> 
        </div>
    </div>
</div>
