<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room_model extends CI_Model
{
    // Mengambil semua data rooms
    public function get_all_rooms()
    {
        return $this->db->get('rooms')->result();
    }

    // Mengambil data room berdasarkan ID
    public function get_room_by_id($id)
    {
        return $this->db->get_where('rooms', ['room_id' => $id])->row();
    }

    // Menyimpan data room baru
    public function insert_room($data)
    {
        return $this->db->insert('rooms', $data);
    }

    // Memperbarui data room berdasarkan ID
    public function update_room($id, $data)
    {
        return $this->db->where('room_id', $id)->update('rooms', $data);
    }

    public function update_room_status($room_id, $status)
    {
        return $this->db->where('room_id', $room_id)
            ->update('rooms', ['status' => $status]);
    }


    public function get_available_rooms()
    {
        // Mendapatkan semua kamar yang statusnya 'available'
        $this->db->where('status', 'available');
        return $this->db->get('rooms')->result();
    }


    // Menghapus data room berdasarkan ID
    public function delete_room($id)
    {
        return $this->db->where('room_id', $id)->delete('rooms');
    }
}
