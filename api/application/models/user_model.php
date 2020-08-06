<?php

class User_model extends CI_Model {

    public function get_users($user_id) {

        /* 매핑 색인
            $query = $this->db->get('users');

            return $query->result();
        */

        /* SQL 색인
            $query = $this->db->query('select * from users');

        //  return $query->num_rows(); // row 갯수
            return $query->num_fields(); // column 갯수 
         */

         /* 매핑 색인 단일 조건

            $this->db->where('id', $user_id);

            $query = $this->db->get('users');:
            

             return $query->result();

         */

         /* 매핑 색인 다중 조건
            $this->db->where([
                'id' => $user_id,
                'username' => $username
            ]);
        
            $query = $this->db->get('users');

            return $query->result();
          */
    }

    public function update_user($data, $id) {

        $this->db->where(['id' => $id]);
        $this->db->update('users', $data);
    }

    public function delete_user($id) {
        $this->db->where(['id' => $id]);
        $this->db->delete('users');
    }

    public function create_user() {
        
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );

        $insert_data = $this->db->insert('users', $data);
        
        return $insert_data;
    }

    public function login_user($username, $password) {
        $db = $this->db;

        $db->where('username', $username);
        $db->where('password', $password);

        $result = $db->get('users');
        
        if ($result->num_rows() == 1) {
            
            return $result->row(0)->id;

        } else {
            return false;
        }
    }
}