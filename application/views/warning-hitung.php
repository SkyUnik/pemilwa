<div class="container"><br>
	<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" height="100px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
	viewBox="0 0 65 85"
	 xmlns:xlink="http://www.w3.org/1999/xlink">
	 <defs>
	  <style type="text/css">
	   <![CDATA[
	    .fil0 {fill:grey}
	   ]]>
	  </style>
	 </defs>
	 <g id="Layer_x0020_1">
	  <metadata id="CorelCorpID_0Corel-Layer"/>
	  <path class="fil0" d="M11 40c-6,0 -11,4 -11,10l0 35 65 0 0 -35c0,-6 -5,-10 -11,-10 0,-15 3,-29 -8,-36 -10,-7 -26,-4 -33,7 -3,7 -2,20 -2,29zm5 31c-1,1 -3,1 -4,0 -1,-1 -1,-3 0,-5 1,0 1,-1 2,-2l0 0 0 0c6,-5 13,-8 19,-8 7,0 13,3 19,8 0,1 1,2 2,2 1,2 1,4 -1,5 -1,1 -3,1 -4,0 -1,-1 -1,-2 -2,-2 -4,-5 -9,-7 -14,-7 -5,0 -10,2 -15,7l0 0c0,0 -1,1 -2,2zm6 -31l22 0c0,-9 4,-31 -11,-31 -14,-1 -11,21 -11,31z"/>
	 </g>
	</svg>
	<h1><b>Maaf. </b><small>Halaman tidak bisa dibuka.</small></h1><hr>
	<b>Diagnosa masalah:</b><br>
	<p>Halaman tidak bisa diakses karena pemungutan suara sedang berlangsung.<br>
	Halaman hanya bisa diakses pada waktu yang telah ditentukan. <br><br>
	<b>Saran:</b><br>
	Silakan coba kembali setelah pemungutan suara sudah selesai atau pada jadwal penghitungan suara yang telah ditentukan. <br>
	<?php 
	echo "Jadwal penghitungan suara pada tanggal <b>";
	echo $this->Pemilwa_model->pengaturan('tanggal_hitung'); 
	?>
	.</b></p>
	<hr>
	<a href="<?php echo base_url('admin/menu'); ?>" class="btn btn-default">Kembali ke Menu Utama</a>
	<a href="<?php echo base_url('vote/suara/1'); ?>" class="btn btn-default">Skip</a><br>
	<code>*</code><small>Tombol <b>skip proteksi</b> hanya ada saat pengujian sistem saja.</small><br><br>
</div>