<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    // Menampilkan halaman login
    public function index() {
        $this->load->view('login');  // Menampilkan view login.php
    }

    // Proses login
    public function login_process() {
        $this->load->helper('url');  // Membantu pengaturan URL
        $this->load->library('session');  // Menambahkan session untuk menyimpan login

        // Ambil data dari form login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Cek kredensial username dan password
        if($username == 'admin' && $password == 'admin123') {
            // Jika login berhasil, alihkan ke dashboard
            $this->session->set_userdata('logged_in', TRUE);  // Menyimpan status login
            redirect('LoginController/dashboard');
        } else {
            // Jika login gagal, kembali ke halaman login dengan pesan error
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('LoginController/index');
        }
    }

    // Menampilkan dashboard setelah login berhasil
    public function dashboard() {
        // Cek apakah user sudah login, jika belum alihkan ke halaman login
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('LoginController/index');
        }
        
        $this->load->view('dashboard');  // Menampilkan halaman dashboard
    }

    // Logout
    public function logout() {
        // Hapus sesi login dan arahkan kembali ke halaman login
        $this->session->sess_destroy();
        redirect('LoginController/index');
    }
}
?>
