$this->load->library('multipledb'); // loading library.
$query2 = $this->multipledb->db->query('your query goes here'); // running query using library.
$this->multipledb->save();// calling library function.
