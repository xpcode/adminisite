<?php 

class CRM_model extends CI_Model {

	public $_table   = null;
    public $_primary = null;

	function __construct() {
		parent::__construct();

		$this->load->database();
	}
    
    /**
     * 增加记录
     * @param array $data
     * @return int|boolean
     */
    public function add($data=array()){
        $this->db->insert($this->_table, $data);

        $result_id=$this->db->insert_id();
        
        return empty($result_id) ? FALSE : $result_id;
    }
    
    /**
     * 删除指定ID记录
     * @param int $id
     * @return int|boolean 
     */
    public function del_byid($id){
       $this->db->where($this->_primary, $id) ->delete($this->_table);

       $rows = $this->db->affected_rows();
       
        if($rows>0){
            return $rows;
        }
        return FALSE;
    }
    
    /**
     * 更新记录
     * @param int $id
     * @param array $data
     * @return object|boolean 
     */
    public function update($id, $data=array()){
        return $this->db->update($this->_table, $data, array($this->_primary => $id));
    }
    
    /**
     * 根据ID查询
     * @param int $id
     * @return array|boolean 
     */
    public function get_byid($id){
        $query = $this->db->get_where($this->_table, array($this->_primary => $id));

        if($query->num_rows()>0){
            return $query->result_array()[0];
        }
        return FALSE;
    }
    
    /**
     * 遍历数据库全部信息
     * @param int $limit
     * @param int $offset
     * @return array|boolean
     */
    public function get_all($limit=null, $offset=null){
        $result = $this->db ->get($this->_table, $limit, $offset) ->result_array();

        return empty($result) ? FALSE : $result;
    }
    
    /**
     * 字段查询--只查询字符型字段
     * @param array $param 数据参数 array('column_name'=>'字段名','column_value'=>'字段值')
     * @param string $order 排序规则
     * @param int $offset  结果偏移量
     * @param int $limit 结果数量
     * @return array
     */
    public function get_bycolumn($param=array(), $order='DESC', $offset=null, $limit=null) 
    {
        $this->db->select('*')
                 ->where($param)
                 ->from($this->_table)
                 ->order_by($this->_primary, $order)
                 ->limit($limit, $offset);
       
        $query = $this->db->get()->result_object();

        return $this->object_2_array($query);
    }

    public function count($param=array(), $order='DESC', $offset=null, $limit=null) 
    {
        $this->db->select('id')
                 ->where($param)
                 ->from($this->_table);

        $query = $this->db->get();

        return $query->num_rows();
    }

    public function get_by($param=array()) 
    {
        $this->db->select('*')
                 ->where($param)
                 ->from($this->_table);
       
        $query = $this->db->get()->result_object();

        return $this->object_2_array($query);
    }

    function object_2_array($obj){
        $result = array();

        foreach($obj as $key =>$value){

            if(gettype($value) == 'array' || gettype($value) == 'object'){
                $result[$key] = $this->object_2_array($value);
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}