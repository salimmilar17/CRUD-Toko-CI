<?php

class Matakuliah_model extends CI_Model {
	
	function retrieve ()
	{
		$query = $this->db->get('matakuliah');
		
		if($query->result()){
			foreach ($query->result() as $content){
				$data[] = array (
					$content->kd_matkul,
					$content->nm_matkul,
					$content->sks
					);
			}
			return $data;
		}else {
			return FALSE;
		}
	}
	
	function add($arg)
	{
		$data = array (
						'kd_matkul'    =>$arg[0],
						'nm_matkul'   =>$arg[1],
						'sks' =>$arg[2],
					);
		$this->db->insert('matakuliah' , $data);
	}
	
	function delete($id)
	{
		$this->db->where('kd_matkul',$id);
		$this->db->delete('matakuliah');
	}
	
	function update($id,$form)
	{
		$data = array(
					'kd_matkul' => $form[0],
					'nm_matkul' => $form[1],
					'sks' => $form[2]
					);
		$this->db->where('kd_matkul',$id);
		$this->db->update('matakuliah',$data);
	}
	
	function getMatakuliah($id)
	{
		$this->db->where('kd_matkul' , $id);
		$query = $this->db->get('matakuliah');
		
		if($query->result()){
			foreach($query->result() as $content){
				$data = array(
							$content->kd_matkul,
							$content->nm_matkul,
							$content->sks
							);
			}
			return $data;
		} else {
			return FALSE;
		}
		
	}
	
}