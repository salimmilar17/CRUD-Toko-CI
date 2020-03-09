<?php

	echo "<h1>Form Tambah Data</h1>";
	echo form_open('matakuliah/submit');
	echo"<pre>";
	$data = array (
				'name'			=> 'var[0]',
				'id'			=> 'var[0]',
				'value'			=> 'A01',
				'maxlength'		=> '10',
				'size'			=> '10',
				'style'			=> 'color: blue',
				);
				
	echo "Kode Matakuliah	:".form_input($data)."<br/>";
	
	$data = array (
				'name'			=> 'var[1]',
				'id'			=> 'var[1]',
				'value'			=> 'Pemrograman Web 2',
				'maxlength'		=> '50',
				'size'			=> '30',
				'style'			=> 'color: blue',
				);
				
	echo "Nama Matakuliah	:".form_input($data)."<br/>";
	
	$data = array (
				'name'			=> 'var[2]',
				'id'			=> 'var[2]',
				'value'			=> '3',
				'maxlength'		=> '50',
				'size'			=> '30',
				'style'			=> 'color: blue',
				);
	echo "SKS		:".form_input($data)."<br/>";
	
	echo form_submit('submit','simpan');
	echo"</pre>";
	echo form_close();
	
	if(isset($submitted)){
		echo"Data Berhasil diinput<br>";
		echo "<a href='".base_url()."index.php/matakuliah'>kembali</a>";
	}
?>








