<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Load database
    }

    // Function to save reservation data
    public function insert_reservation($data)
    {
        $this->db->insert('reservations', $data); // Assuming 'reservations' is the table name
    }

    public function get_all_reservations()
    {
        return $this->db->get('reservations')->result();
    }

    public function get_reservation_by_id($reservation_id)
    {
        return $this->db->where('reservation_id', $reservation_id)
            ->get('reservations')
            ->row(); // Mengambil satu baris data
    }

}
