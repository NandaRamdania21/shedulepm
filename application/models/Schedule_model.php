class Schedule_model extends CI_Model {

public function __construct() {
    parent::__construct();
    $this->load->database();
}

// Fungsi untuk mengambil jadwal
public function get_schedules() {
    $query = $this->db->get('schedules');
    return $query->result_array();
}
}
