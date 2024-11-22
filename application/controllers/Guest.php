<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load necessary models, helpers, and libraries
        $this->load->model('Guest_model');
        $this->load->model('Reservation_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Menampilkan form guest
    public function index()
    {
        $data['title'] = 'Guest';
        $data['guests'] = $this->Guest_model->get_all_guests();
        $data['content'] = 'admin/guest/guest_index';
        $data['success'] = $this->session->flashdata('success');
        $this->load->view('admin/layouts/main', $data); // Memuat view
    }

    // Menampilkan halaman create guest
    public function create()
    {
        $data['title'] = 'Guest';
        $data['reservations'] = $this->Reservation_model->get_all_reservations();
        $data['content'] = 'admin/guest/guest_create';

        // Ambil flashdata untuk menampilkan pesan error atau success
        $data['error'] = $this->session->flashdata('error');
        // $data['success'] = $this->session->flashdata('success');

        $this->load->view('admin/layouts/main', $data);
    }

    // Fungsi untuk menyimpan data dari form
    public function store()
    {
        // Set aturan validasi
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('identity_type', 'Identity Type', 'required');
        $this->form_validation->set_rules('identity_number', 'Identity Number', 'required');

        // Cek apakah validasi berhasil
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, set flashdata error dan kembali ke halaman create
            $this->session->set_flashdata('error', validation_errors('<div class="alert alert-danger">', '</div>'));
            redirect('guest/create');
        } else {
            // Ambil data dari form
            $data = array(
                'name' => $this->input->post('name'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'identity_type' => $this->input->post('identity_type'),
                'identity_number' => $this->input->post('identity_number'),
            );

            // Simpan data melalui model
            if ($this->Guest_model->insert_guest($data)) {
                $this->session->set_flashdata('success', '<div class="alert alert-success">Guest data has been successfully saved.</div>');
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Failed to save guest data.</div>');
            }

            redirect('guest/index');
        }
    }

    public function get_reservation_data($reservation_id)
    {
        // Cek apakah reservation_id ada
        if (!$reservation_id) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid Reservation ID']);
            return;
        }

        // Ambil data reservasi berdasarkan reservation_id
        $reservation = $this->Reservation_model->get_reservation_by_id($reservation_id);

        // Jika data tidak ditemukan
        if (empty($reservation)) {
            echo json_encode(['status' => 'error', 'message' => 'Reservation not found']);
            return;
        }

        // Kirimkan data reservasi sebagai JSON
        echo json_encode(['status' => 'success', 'data' => $reservation]);
    }


    // Menampilkan form edit guest
    public function edit($id)
    {
        $data['title'] = 'Edit Guest';
        $data['guest'] = $this->Guest_model->get_guest_by_id($id);
        $data['content'] = 'admin/guest/guest_edit';

        // Jika data guest tidak ditemukan, redirect ke halaman index dengan pesan error
        if (empty($data['guest'])) {
            $this->session->set_flashdata('error', '<div class="alert alert-danger">Guest not found.</div>');
            redirect('guest/index');
        }

        $this->load->view('admin/layouts/main', $data);
    }

    // Update data guest
    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('identity_type', 'Identity Type', 'required');
        $this->form_validation->set_rules('identity_number', 'Identity Number', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors('<div class="alert alert-danger">', '</div>'));
            redirect('guest/edit/' . $id);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'identity_type' => $this->input->post('identity_type'),
                'identity_number' => $this->input->post('identity_number'),
            );

            if ($this->Guest_model->update_guest($id, $data)) {
                $this->session->set_flashdata('success', '<div class="alert alert-success">Guest data has been updated successfully.</div>');
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-danger">Failed to update guest data.</div>');
            }

            redirect('guest/index');
        }
    }

    // Hapus data guest
    public function delete($id)
    {
        if ($this->Guest_model->delete_guest($id)) {
            $this->session->set_flashdata('success', '<div class="alert alert-success">Guest data has been deleted successfully.</div>');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger">Failed to delete guest data.</div>');
        }

        redirect('guest/index');
    }
}
