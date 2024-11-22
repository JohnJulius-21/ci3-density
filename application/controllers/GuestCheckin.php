<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GuestCheckin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GuestCheckin_model');
        $this->load->model('Guest_model'); // Untuk mendapatkan data guest
        $this->load->model('Room_model'); // Untuk mendapatkan data guest
        $this->load->model('Reservation_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Menampilkan semua data check-in
    public function index()
    {
        $data['title'] = 'Check-Ins';
        $data['checkins'] = $this->GuestCheckin_model->get_all_checkins();
        $data['content'] = 'admin/check/checkin_index';
        $this->load->view('admin/layouts/main', $data);
    }

    // Menampilkan form untuk check-in tamu
    public function create()
    {
        $data['title'] = 'Check In';
        $data['guests'] = $this->Guest_model->get_all_guests(); // Mengambil semua data guest untuk dropdown
        $data['rooms'] = $this->Room_model->get_available_rooms();
        $data['content'] = 'admin/check/checkin_create';
        $this->load->view('admin/layouts/main', $data);
    }

    // Menyimpan data check-in
    public function store()
    {
        $this->form_validation->set_rules('guest_id', 'Guest', 'required');
        $this->form_validation->set_rules('room_id[]', 'Room', 'required');
        $this->form_validation->set_rules('checkin_date', 'Check-In Date', 'required');
        $this->form_validation->set_rules('checkout_date', 'Check-Out Date', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            // Ambil data dari form
            $guest_id = $this->input->post('guest_id');
            $room_ids = $this->input->post('room_id[]'); // Dapatkan semua room_id yang dipilih sebagai array
            $checkin_date = $this->input->post('checkin_date');
            $checkout_date = $this->input->post('checkout_date');

            // Hitung durasi menginap dalam hari
            $duration = max(1, (strtotime($checkout_date) - strtotime($checkin_date)) / (60 * 60 * 24));

            $total_price = 0;
            $price_per_night = 0;

            // Loop melalui setiap room_id untuk menghitung total harga
            foreach ($room_ids as $room_id) {
                // Ambil harga per malam dari data kamar yang dipilih
                $room = $this->Room_model->get_room_by_id($room_id);
                $price_per_night += $room->price;
                $total_price += $room->price * $duration;

                // Simpan setiap check-in per kamar
                $data = array(
                    'guest_id' => $guest_id,
                    'room_id' => $room_id,
                    'checkin_date' => $checkin_date,
                    'checkout_date' => $checkout_date,
                    'duration' => $duration,
                    'price_per_night' => $room->price,
                    'total_price' => $room->price * $duration,
                    'status' => 'checked_in',
                );

                // Simpan data check-in ke database
                $this->GuestCheckin_model->insert_checkin($data);

                // Update status kamar menjadi 'not available'
                $this->Room_model->update_room_status($room_id, 'not available');
            }

            // Berikan pesan sukses dan redirect ke halaman guest check-in
            $this->session->set_flashdata('success', 'Check-In successful');
            redirect('guestcheckin');
        }
    }


    // Menampilkan form untuk check-out tamu
    public function checkout($id)
    {
        $data['title'] = 'Check Out';
        $data['checkin'] = $this->GuestCheckin_model->get_checkin_by_id($id);
        $data['content'] = 'admin/check/checkin_checkout';
        $this->load->view('admin/layouts/main', $data);
    }


    // Memperbarui data check-out
    public function update_checkout($id)
    {
        $this->form_validation->set_rules('checkout_date', 'Check-Out Date', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->checkout($id);
        } else {
            // Ambil data check-in berdasarkan ID
            $checkin = $this->GuestCheckin_model->get_checkin_by_id($id);
            $room_id = $checkin->room_id; // Dapatkan room_id dari data check-in

            $data = array(
                'checkout_date' => $this->input->post('checkout_date'),
                'status' => 'checked_out',
            );

            // Update status kamar menjadi 'available'
            $this->Room_model->update_room_status($room_id, 'available');

            // Update data check-out di tabel guest_checkins
            $this->GuestCheckin_model->update_checkout($id, $data);

            // Berikan pesan sukses dan redirect ke halaman guest check-in
            $this->session->set_flashdata('success', 'Check-Out successful');
            redirect('guestcheckin');
        }
    }

}
