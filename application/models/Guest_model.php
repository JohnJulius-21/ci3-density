<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guest_model extends CI_Model
{
    // Mengambil semua data guest
    public function get_all_guests()
    {
        return $this->db->get('guest')->result();
    }

    // Mengambil data guest berdasarkan ID
    public function get_guest_by_id($id)
    {
        return $this->db->get_where('guest', ['guest_id' => $id])->row();
    }

    public function insert_checkin($data)
    {
        return $this->db->insert('guest_checkins', $data);
    }


    // Menyimpan data guest baru
    public function insert_guest($data)
    {
        return $this->db->insert('guest', $data);
    }

    // Memperbarui data guest berdasarkan ID
    public function update_guest($id, $data)
    {
        return $this->db->where('guest_id', $id)->update('guest', $data);
    }

    // Menghapus data guest berdasarkan ID
    public function delete_guest($id)
    {
        return $this->db->where('guest_id', $id)->delete('guest');
    }
}
