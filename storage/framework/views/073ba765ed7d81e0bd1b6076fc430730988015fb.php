<li
<?php if($page == 'mk_diajar'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('dosen/krs-khs/mk_diajar')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Mata Kuliah Diajar</a>
</li>
<li class="treeview">
    <a href=""><i class='fa fa-user'></i> <span>Layanan Akademik</span></a>
    <ul class="treeview-menu">

            <li
                  <?php if($page == 'download-dokumen'): ?>
                  <?php echo 'class="active"'; ?>

                  <?php endif; ?>
                  > <a href="<?php echo e(url('dosen/Download_Dokumen')); ?>"><i class="fa fa-file-text"></i>Shared Dokumen</a>
                  </li>

            <li
            <?php if($page == 'kalender-ruang'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('dosen/Kalender_Ruang')); ?>"><i class="fa fa-calendar" aria-hidden="true"></i>Kalender Ruang</a>

            </li>

            <li
            <?php if($page == 'memohon-ruangan'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('dosen/memohon-ruangan')); ?>"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Memohon Ruangan</a>
            </li>

            <li
            <?php if($page == 'surat-masuk'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('dosen/surat-masuk')); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>Surat Masuk</a>

            </li>

            <li
            <?php if($page == 'surat-keluar-dosen'): ?>
            <?php echo 'class="active"'; ?>

             <?php endif; ?>
            >
            <a href="<?php echo e(url('dosen/surat-keluar-dosen')); ?>"><i class='fa fa-envelope'></i> <span>Surat Keluar</span></a>

            </li>
      </ul>
</li>

<li class="treeview">
    <a href=""><i class='fa fa-user'></i> <span>Laporan Kinerja Dosen</span></a>
    <ul class="treeview-menu">
      

<li
<?php if($page == 'konferensi'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('/dosen/konferensi')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Konferensi</a>
</li> 

<li
<?php if($page == 'penelitian'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('/dosen/penelitian')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Penelitian</a>
</li>

<li

<?php if($page == 'pengmas'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('/dosen/pengmas')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i> Pengmas</a>
</li> 

<li
<?php if($page == 'jurnal'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
><a href="<?php echo e(url('/dosen/jurnal')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i> Jurnal</a>
</li>  

<li
<?php if($page == 'surattugas'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
><a href="<?php echo e(url('/dosen/surat-tugas')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i> SK Tugas</a>
</li> 

<li
<?php if($page == 'validasi'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
><a href="<?php echo e(url('/dosen/validasi/jurnal')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i> Validasi</a>
</li> 

<li
<?php if($page == 'data-dosen'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('/dosen/data-dosen/penelitian')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Data Penelitian Dosen</a>
</li>

<li
<?php if($page == 'data-dosen'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('/dosen/data-dosen/jurnal')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Data Jurnal Dosen</a>
</li>

<li
<?php if($page == 'data-dosen'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('/dosen/data-dosen/konferensi')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Data konferensi Dosen</a>
</li>

<li
<?php if($page == 'data-dosen'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('/dosen/data-dosen/pengmas')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Data Pengmas Dosen</a>
</li>

<li
<?php if($page == 'data-dosen'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
>
<a href="<?php echo e(url('/dosen/data-dosen/surat-tugas')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Data SK Tugas Dosen</a>
</li>

 

<li
<?php if($page == 'laporan'): ?>
<?php echo 'class="active"'; ?>

<?php endif; ?>
><a href="<?php echo e(url('/dosen/laporan/pilih')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i> Laporan Kinerja Dosen</a>
</li> 
      </ul>
</li>
<li> 
<a href="<?php echo e(url('/inventaris/dosen/asset')); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a> 
</li>
<li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            <?php if($page == 'notulensi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="<?php echo e(url('undangandosen')); ?>"><i class='fa fa-book'></i> <span>Undangan</span></a>
            <a href=""><i class='fa fa-book'></i> <span>Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            <?php if($page == 'notulensi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            
            <a href="<?php echo e(url('notulensi/konfirmasi')); ?>"><i class='fa fa-book'></i> <span>Konfirmasi Hasil</span></a></li>
            <li
            <?php if($page == 'notulensi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('notulensi/listhasil')); ?>"><i class='fa fa-book'></i> <span>List Hasil</span></a>
            </li></ul>
            <a href="<?php echo e(url('dosen/notulensidosen/kalenderRapat')); ?>"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </ul>
            </li>
            <!-- Monitoring Skripsi -->
<li>
      <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
      <ul class="treeview-menu">
            <li
            <?php if($page == 'skripsi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('dosen/monitoring-skripsi/skripsi')); ?>"><i class='fa fa-id-card'></i><span> Data Skripsi</span></a>
            </li>

            <li
            <?php if($page == 'konsultasi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('dosen/monitoring-skripsi/konsultasi')); ?>"><i class='fa fa-handshake-o'></i><span> Konsultasi</span></a>
            </li>

            <li
            <?php if($page == 'berkas'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('dosen/monitoring-skripsi/berkas')); ?>"><i class='fa fa-file-word-o '></i><span> Berkas</span></a>
            </li>

            <li
              <?php if($page == 'jadwal-sidang'): ?>
              <?php echo 'class="active"'; ?>

              <?php endif; ?>
              >
              <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Jadwal Sidang</a>
              
              <ul class="treeview-menu">
                
              <li
              <?php if($page == 'manage-jadwal-sidang-proposal'): ?>
              <?php echo 'claass="active"'; ?>

              <?php endif; ?>>
              <a href="<?php echo e(url('dosen/monitoring-skripsi/view-jadwal-sidang-proposal-dosen')); ?>"><i class='fa fa-circle-o'></i><span>Jadwal Sidang Proposal</span>
              </a>
              </li>

              <li
              <?php if($page == 'manage-jadwal-sidang-skripsi'): ?>
              <?php echo 'claass="active"'; ?>

              <?php endif; ?>>
              <a href="<?php echo e(url('dosen/monitoring-skripsi/view-jadwal-sidang-skripsi-dosen')); ?>"><i class='fa fa-circle-o'></i><span>Jadwal Sidang Skripsi</span>
              </a> 
              </li>


              </ul>
            </li>

              <li
              <?php if($page == 'hasil-sidang'): ?>
              <?php echo 'class="active"'; ?>

              <?php endif; ?>
              >
              <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i>Hasil Sidang</a>
              
              <ul class="treeview-menu">
                
              <li
              <?php if($page == 'manage-hasil-sidang-proposal'): ?>
              <?php echo 'claass="active"'; ?>

              <?php endif; ?>>
              <a href="<?php echo e(url('dosen/monitoring-skripsi/view-hasil-sidang-proposal-dosen')); ?>"><i class='fa fa-circle-o'></i><span>Hasil Proposal </span>
              </a>
              </li>

              <li
              <?php if($page == 'manage-hasil-sidang-skripsi'): ?>
              <?php echo 'claass="active"'; ?>

              <?php endif; ?>>
              <a href="<?php echo e(url('dosen/monitoring-skripsi/view-hasil-sidang-skripsi-dosen')); ?>"><i class='fa fa-circle-o'></i><span>Hasil Skripsi </span>
              </a>
              </li>


              </ul>
              </li>
      </ul>
</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->
<!-- MODUL KRS KHS -->
<li
  <?php if($page == 'mahasiswa'): ?>
  <?php echo 'class="active"'; ?>

  <?php endif; ?>
>
<a href="<?php echo e(url('dosen/krs-khs/approve/view')); ?>"><i class='fa fa-users'></i><span>Mahasiswa Wali</span>
</a>
</li>

<li class="treeview">
            <a href=""><i class='fa fa-book'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            <?php if($page == 'kurikulum'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
          <a href="<?php echo e(url('dosen/kurikulum/rps')); ?>"><i class='fa fa-book'></i> <span> RPS</span></a>
            <a href="<?php echo e(url('dosen/kurikulum/silabus')); ?>"><i class='fa fa-book'></i> <span> Silabus</span></a>
            <a href="<?php echo e(url('dosen/kurikulum/cp_program')); ?>"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
          <a href="<?php echo e(url('dosen/kurikulum/kodecppem')); ?>"><i class='fa fa-book'> </i> <span> Kode Capaian Pembelajaran</span></a>
          <a href="<?php echo e(url('dosen/kurikulum/cp_pembelajaran')); ?>"><i class='fa fa-book'> </i> <span> Capaian Pembelajaran</span></a>
            </li>
            </ul>
</li>
<!-- Akhir modul krs khs -->