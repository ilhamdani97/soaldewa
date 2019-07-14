<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
    // Query SQL
    // SELECT name.id, name.id_work,name.id_salary, name.name, work.name_work, salary.salary FROM name JOIN work ON name.id_work = work.id JOIN salary ON work.id_salary = salary.id ORDER BY name
    function getdata() {  
        $this->db->select('name.id,name.id_work,name.id_salary,name.name,work.name_work,salary.salary');
        $this->db->from('name');
        $this->db->join('work','name.id_work = work.id');
        $this->db->join('salary','work.id_salary = salary.id');
        $this->db->order_by('name');
        return $this->db->get();
    }
     
    function insert($datainsert=array()) {
        $this->db->insert('name', $datainsert);
        return $this->db->insert_id();
    }
    function update($data=array(),$where=array()) {
        $this->db->update('name', $data, $where);
    }
    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('name'); 
    }
}
?>