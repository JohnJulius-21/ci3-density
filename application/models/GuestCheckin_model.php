<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GuestCheckin_model extends CI_Model
{
    // Mendapatkan semua data check-in
    public function get_all_checkins()
    {
        $this->db->select('guest_checkins.*, guest.name, rooms.room_number');
        $this->db->from('guest_checkins');
        $this->db->join('guest', 'guest_checkins.guest_id = guest.guest_id');
        $this->db->join('rooms', 'guest_checkins.room_id = rooms.room_id');
        return $this->db->get()->result();
    }

    // Menyimpan data check-in baru
    public function insert_checkin($data)
    {
        return $this->db->insert('guest_checkins', $data);
    }

    // Mengambil data check-in berdasarkan ID
    public function get_checkin_by_id($id)
    {
        $this->db->select('guest_checkins.*, rooms.room_number, rooms.price');
        $this->db->from('guest_checkins');
        $this->db->join('rooms', 'guest_checkins.room_id = rooms.room_id');
        $this->db->where('guest_checkins.check_id', $id);
        return $this->db->get()->row();
    }


    // Memperbarui data check-out berdasarkan ID
    public function update_checkout($id, $data)
    {
        return $this->db->where('check_id', $id)->update('guest_checkins', $data);
    }
}
