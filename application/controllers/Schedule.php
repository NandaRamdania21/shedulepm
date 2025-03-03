class Schedule extends CI_Controller {

public function __construct() {
    parent::__construct();
    $this->load->model('Schedule_model');
}

public function index() {
    $data['schedules'] = $this->Schedule_model->get_schedules();  // Ambil data jadwal dari model

    // Muat header, body, dan footer
    $this->load->view('templates/header');  // Memuat header
    $this->load->view('schedule/index', $data);  // Menampilkan view dengan data
    $this->load->view('templates/footer');  // Memuat footer
}
}