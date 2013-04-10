<?php $this->load->view('main/header');?>
<?php
$usernm=$this->session->userdata['username'];

?>

<section id="kontener-full">
	
			<?php echo !empty($navigation) ? $navigation : ''; ?>

	<section id="main">
		<div class="grid2">
			<div class="summary rounded">
				un. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.
			</div>
			<div class="summary rounded">
				Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.
			</div>
		</div>
		<div class="grid2">
			<div class="summary rounded">
				<?php Modules::Run('')?>
							</div>
		</div>
		</section>
	
</section>
<?php $this->load->view('main/footer');?>