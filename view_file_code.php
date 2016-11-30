// Running first db query.
$qry = $this->db->query("SELECT * FROM users ORDER BY `u_id` DESC");
print_r($qry->result());
 
// Loading second db and running query.
$CI = &get_instance();
//setting the second parameter to TRUE (Boolean) the function will return the database object.
$this->db2 = $CI->load->database('db2', TRUE);
$qry = $this->db2->query("SELECT * FROM cds");
print_r($qry->result());
