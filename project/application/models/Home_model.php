<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model 
{
	public function rules()
	{
		return [
			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|trim'
			]
		];
	}

	public function getName()
	{
		$sql = "SELECT `name`.`id` as `employeeID`, `name`.`name` as `employeeName`, 
                 		`work`.`name` as `workName`, `kategori`.`salary` FROM `name` 
                  JOIN `work` ON `name`.`id_work` = `work`.`id`
         		  JOIN `kategori`ON `name`.`id_salary` = `kategori`.`id`";
		return $this->db->query($sql)->result_array();
	}

	public function getNameByID($id)
	{
		return $this->db->get_where('name', ['id' => $id])->row_array();
	}

	public function getWork() 
	{
		return $this->db->get('work')->result_array();
	}

	public function getKategori()
	{
		return $this->db->get('kategori')->result_array();
	}

	public function addName($data)
	{
		$data = [
			'name' => $data['name'],
			'id_work' => $data['work'],
			'id_salary' => $data['kategori']
		];

		$this->db->set($data);
		$this->db->insert('name');
	}

	public function editName($post)
	{
		$data = [
			'name' => $post['name'],
			'id_work' => $post['work'],
			'id_salary' => $post['kategori']
		];

		$this->db->set($data);
		$this->db->where('id', $post['id']);
		$this->db->update('name');
	}

	public function deleteName($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('name');
	}
}