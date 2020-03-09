<?php

	echo"<h1>Form Update Data</h1>";
	
	$hidden = array('old_kd_matakuliah' => $matakuliah[0]);
	echo form_open('matakuliah/update','',$hidden);
	echo"<pre>";
	$data = array (
				'name'			=> 'var[0]',
				'id'			=> 'var[0]',
				'value'			=> $matakuliah[0],
				'maxlength'		=> '10',
				'size'			=> '10',
				'style'			=> 'color: blue',
				); 
	echo "Kode Matakuliah	:".form_input($data)."<br/>";
	
	$data = array (
				'name'			=> 'var[1]',
				'id'			=> 'var[1]',
				'value'			=> $matakuliah[1],
				'maxlength'		=> '15',
				'size'			=> '30',
				'style'			=> 'color: blue',
				); 
				
	echo"Nama Matakuliah	:".form_input($data)."<br/>";
	
	$data = array (
				'name'			=> 'var[2]',
				'id'			=> 'var[2]',
				'value'			=> $matakuliah[2],
				'rows'			=> '30',
				'cols'			=> '30',
				'style'			=> 'color: blue',
				); 
				
	echo"Sks		:".form_input($data)."<br/>";
	
	echo form_submit('submit','Simpan');
	
	echo"<pre>";
	echo form_close();
	
	if(isset($submitted)){
		echo"Data Berhasil Input";
	}
?>