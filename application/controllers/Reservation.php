<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models and libraries
        $this->load->model('Reservation_model'); // Assuming you have a Reservation_model to handle DB operations
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Display reservation form
    public function index()
    {
        $data['title'] = 'Reservation';
        $data['content'] = 'user/reservation/reservation_index';
        $this->load->view('user/layouts/main', $data); // Load the view and pass data
    }

    // Handle form submission
    public function store()
    {
        // Set form validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('checkin_date', 'Check In Date', 'required');
        $this->form_validation->set_rules('checkout_date', 'Check Out Date', 'required');
        $this->form_validation->set_rules('adults', 'Adults', 'required|integer');
        $this->form_validation->set_rules('children', 'Children', 'integer');
        $this->form_validation->set_rules('rooms', 'Rooms', 'required');
        $this->form_validation->set_rules('message', 'Message', 'max_length[500]'); // Optional

        // Check if form validation passes
        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the form with validation errors
            $data['title'] = 'Reservation';
            $data['content'] = 'user/reservation/reservation_index';
            $this->load->view('user/layouts/main', $data);
        } else {
            // Prepare the data to be saved
            $reservation_data = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'checkin_date' => $this->input->post('checkin_date'),
                'checkout_date' => $this->input->post('checkout_date'),
                'adults' => $this->input->post('adults'),
                'children' => $this->input->post('children'),
                'rooms' => $this->input->post('rooms'),
                'number_rooms' => $this->input->post('number_rooms'),
                'message' => $this->input->post('message'),
            );

            // Save the reservation data to the database
            $this->Reservation_model->insert_reservation($reservation_data);


            // Redirect to a success page (or display success message)
            $this->session->set_flashdata('success', 'Reservation successfully made!, we will contact you to go over details and availability before the order is completed. If you would like faster service and direct information on current stock and pricing please contact us at (+62) 274-544-551 or official@density.co.id');
            redirect('reservation');
        }
    }
}
