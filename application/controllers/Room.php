<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Room_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('currency');

    }

    // Menampilkan semua data rooms
    public function index()
    {
        $data['title'] = 'Rooms';
        $data['rooms'] = $this->Room_model->get_all_rooms();
        $data['content'] = 'admin/room/room_index';
        $this->load->view('admin/layouts/main', $data);
    }

    // Menampilkan form create room
    public function create()
    {
        $data['title'] = 'Create Room';
        $data['content'] = 'admin/room/room_create';
        $this->load->view('admin/layouts/main', $data);
    }

    // Menyimpan data room
    public function store()
    {
        $this->form_validation->set_rules('room_number', 'Room Number', 'required');
        $this->form_validation->set_rules('room_type', 'Room Type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'room_number' => $this->input->post('room_number'),
                'room_type' => $this->input->post('room_type'),
                'price' => $this->input->post('price'),
            );

            $this->Room_model->insert_room($data);
            $this->session->set_flashdata('success', 'Room added successfully');
            redirect('room');
        }
    }

    // Menampilkan form edit room
    public function edit($id)
    {
        $data['title'] = 'Edit Room';
        $data['room'] = $this->Room_model->get_room_by_id($id);
        $data['content'] = 'admin/room/room_edit';
        $this->load->view('admin/layouts/main', $data);
    }

    // Memperbarui data room
    public function update($id)
    {
        $this->form_validation->set_rules('room_number', 'Room Number', 'required');
        $this->form_validation->set_rules('room_type', 'Room Type', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = array(
                'room_number' => $this->input->post('room_number'),
                'room_type' => $this->input->post('room_type'),
                'price' => $this->input->post('price'),
            );

            $this->Room_model->update_room($id, $data);
            $this->session->set_flashdata('success', 'Room updated successfully');
            redirect('room');
        }
    }

    // Menghapus data room
    public function delete($id)
    {
        $this->Room_model->delete_room($id);
        $this->session->set_flashdata('success', 'Room deleted successfully');
        redirect('room');
    }
}
