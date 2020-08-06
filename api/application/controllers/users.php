<?php

class Users extends CI_Controller {

    public function register() {

        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
            
        if($this->form_validation->run() == false) {
            
            $data['main_view'] = 'users/register_view';

            $this->load->view('layouts/main', $data);

        } else {
            $this->load->model('user_model');
            if ($this->user_model->create_user()) {

                redirect('home/index');
            }
        }
    }

    public function login() {
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
            
        if ($this->form_validation->run() == false) {

            $data = array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            redirect('home');
            
        } else {
            $this->load->model('user_model');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $user_id = $this->user_model->login_user($username, $password);

            if ($user_id) {
                
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true 
                );
                
                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success', 'You are now logged in');
                
                $data['main_view'] = "admin_view";

                $this->load->view('layouts/main', $data);

                // redirect('home/index');
            
            } else {
                
                $this->session->set_flashdata('login_failed', 'Sorry You are not login');
                
                redirect('home/index');
            }
        }
    }

    public function show($user_id) {

        $this->load->model('user_model');

        $data['results'] = $this->user_model->get_users($user_id, 'rico');

        $this->load->view('user_view', $data);
    }

    public function insert() {
        
        $username = 'peter';
        $password = 'secret';

        $this->load->model('user_model');
        $this->user_model->create_users([
            'username' => $username,
            'password' => $password
        ]);
    }

    public function update($id) {
        
        $username = "William";
        $password  = "not so secret";

        $this->load->model('user_model');
        $this->user_model->update_user([
            'username' => $username,
            'password' => $password
        ], $id);
    }

    public function delete($id) {

        $this->load->model('user_model');
        $this->user_model->delete_user();
    }

    /**
     * @access public
     */
    public function logout() {
        
        $this->session->sess_destroy();

        redirect('home/index');
    }
}