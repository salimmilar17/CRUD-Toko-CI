<?php

if($matakuliah){
	echo "<h1> List Matakuliah</h1>";
	echo "<h2> NIM  : 1811510179</h2>";
	echo "<h2> Nama : Milardi Salim</h2>";
	echo "<table border='1' cellpadding='5' cellpadding='0'>";
	echo "<tr>
			<th>No.</th>
			<th>Kode Matakuliah</th>
			<th>Nama Matakuliah</th>
			<th>sks</th>
			<th>Action</th>
		 </tr>";
		 
	$no = 1;
	foreach($matakuliah as $content){
	echo " <tr>
			<td>$no.</td>
			<td>$content[0].</td>
			<td>$content[1].</td>
			<td>$content[2].</td>
			<td>".
			anchor('matakuliah/delete/'.$content[0], 'Delete' , 'title="Delete Data"')." | " .
			anchor('matakuliah/form_update/'.$content[0], 'Update' , 'title="Update Data"').
			"</td>
			</tr>";
			$no++;
	}
	echo "</table>";
	echo "<br>";
	echo anchor('matakuliah/form_tambah/' , 'Tambah' , 'title="Tambah Data"');
}
?>