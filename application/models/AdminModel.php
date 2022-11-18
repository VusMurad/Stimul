<?php

class AdminModel extends CI_Model
{
    public function check_admin($data){
        return $this->db->where($data)->get('admins')->row_array();
    }

    public function insert_languages($data){
        $this->db->insert('languages', $data);
    }
    
    public function get_all_languages(){
        return $this->db->order_by('l_id', 'DESC')->get('languages')->result_array();
    }

    public function delete_languages($id){
        $this->db->where('l_id', $id)->delete('languages');
    }

    public function get_single_language($id){
        return $this->db->where('l_id', $id)->get('languages')->row_array();
    }

    public function update_language($id, $data){
        $this->db->where('l_id', $id)->update('languages',$data);
    }

    public function insert_comp_course($data){
        $this->db->insert('compcourse',$data);
    }
    
    public function get_all_compcourses(){
        return $this->db->order_by('c_id', 'DESC')->get('compcourse')->result_array();
    }

    public function delete_compcourse($id){
        $this->db->where('c_id', $id)->delete('compcourse');
    }

    public function get_single_compcourse($id){
        return $this->db->where('c_id' ,$id)->get('compcourse')->row_array();
    }

    public function update_comp_course($id, $data){
        $this->db->where('c_id', $id)->update('compcourse',$data);
    }

    public function insert_psychology($data){
        $this->db->insert('psychology', $data);
    }

    public function get_all_psychology(){
        return $this->db->order_by('p_id', 'DESC')->get('psychology')->result_array();
    }

    public function get_single_psychology($id){
        return $this->db->where('p_id',$id)->get('psychology')->row_array();
    }
    
    public function delete_psychology($id){
        $this->db->where('p_id',$id)->delete('psychology');
    }

    public function update_psychology($id, $data){
        $this->db->where('p_id', $id)->update('psychology',$data);
    }

    public function insert_toefl($data){
        $this->db->insert('toefl', $data);
    }

    public function get_all_toefl(){
        return $this->db->order_by('t_id', "DESC")->get('toefl')->result_array();
    }

    public function get_single_toefl($id){
        return $this->db->where('t_id', $id)->get('toefl')->row_array();
    }

    public function update_toefl($id, $data){
        $this->db->where('t_id',$id)->update('toefl',$data);
    }

    public function delete_toefl($id){
        $this->db->where('t_id', $id)->delete('toefl');
    }

    public function insert_acca($data){
        $this->db->insert('acca', $data);
    }

    public function get_all_acca(){
        return $this->db->order_by('ac_id', 'DESC')->get('acca')->result_array();
    }

    public function get_single_acca($id){
        return $this->db->where('ac_id',$id)->get('acca')->row_array();
    }

    public function update_acca($id, $data){
        $this->db->where('ac_id', $id)->update('acca', $data);
    }

    public function delete_acca($id){
        $this->db->where('ac_id', $id)->delete('acca');
    }

    public function insert_design($data){
        $this->db->insert('design' , $data);
    }

    public function get_all_design(){
        return $this->db->order_by('d_id', "DESC")->get('design')->result_array();
    }

    public function get_single_design($id){
        return $this->db->where('d_id',$id)->get('design')->row_array();
    }

    public function update_design($id, $data){
        $this->db->where('d_id', $id)->update('design', $data);
    }

    public function delete_design($id){
        $this->db->where('d_id',$id)->delete('design');
    }

    public function insert_prepearing($data){
        $this->db->insert('prepearing' , $data);
    }

    public function get_all_prepearing(){
        return $this->db->order_by('pr_id',"DESC")->get('prepearing')->result_array();
    }

    public function get_single_prepearing($id){
        return $this->db->where('pr_id', $id)->get('prepearing')->row_array();
    }

    public function update_prepearing($id, $data){
        $this->db->where('pr_id',$id)->update('prepearing',$data);
    }

    public function delete_prepearing($id){
        $this->db->where('pr_id', $id)->delete('prepearing');
    }

    public function insert_yos($data){
        $this->db->insert('yos', $data);
    }

    public function get_all_yos(){
        return $this->db->order_by('y_id','DESC')->get('yos')->result_array();
    }

    public function get_single_yos($id){
        return $this->db->where('y_id', $id)->get('yos')->row_array();
    }

    public function update_yos($id, $data){
        $this->db->where('y_id',$id)->update('yos',$data);
    }

    public function delete_yos($id){
        $this->db->where('y_id', $id)->delete('yos');
    }

    public function insert_translation($data){
        $this->db->insert('translation', $data);
    }

    public function get_all_translation(){
        return $this->db->order_by("tr_id",'DESC')->get('translation')->result_array();
    }

    public function get_single_translation($id){
        return $this->db->where("tr_id", $id)->get('translation')->row_array();
    }

    public function update_translation($id, $data){
        $this->db->where('tr_id', $id)->update('translation',$data);
    }

    public function delete_translation($id){
        $this->db->where('tr_id', $id)->delete('translation');
    }

    public function insert_training($data){
        $this->db->insert('training', $data);
    }

    public function get_all_training(){
        return $this->db->order_by("trg_id",'DESC')->get('training')->result_array();
    }

    public function get_single_training($id){
        return $this->db->where('trg_id', $id)->get('training')->row_array();
    }

    public function update_training($id, $data){
        $this->db->where('trg_id', $id)->update('training',$data);
    }

    public function delete_training($id){
        $this->db->where('trg_id', $id)->delete('training');
    }

    public function insert_study($data){ 
        $this->db->insert('studyabrd', $data);
    }

    public function get_all_study(){
        return $this->db->order_by('s_id','DESC')->get('studyabrd')->result_array();
    }

    public function get_single_study($id){
        return $this->db->where('s_id', $id)->get('studyabrd')->row_array();
    } 

    public function update_study($id, $data){
        $this->db->where('s_id', $id)->update('studyabrd',$data);
    }

    public function delete_study($id){
        $this->db->where('s_id', $id)->delete('studyabrd');
    }

    public function insert_customer($data){
        $this->db->insert('customers', $data);
    }

    public function get_all_customers(){
        return $this->db->order_by('cs_id', 'DESC')->get('customers')->result_array();
    }

    public function get_single_customer($id){
        return $this->db->where('cs_id' ,$id)->get('customers')->row_array();
    }

    public function update_customer($id, $data){
        $this->db->where('cs_id', $id)->update('customers',$data);
    }

    public function delete_customers($id){
        $this->db->where('cs_id', $id)->delete('customers');
    }

    public function insert_colleagues($data){
        $this->db->insert('colleagues',$data);
    }

    public function get_all_colleagues(){
        return $this->db->order_by('cl_id','DESC')->get('colleagues')->result_array();
    }

    public function update_colleagues($id, $data){
        $this->db->where('cl_id' , $id)->update('colleagues' , $data);
    }

    public function get_single_colleagues($id){
        return $this->db->where('cl_id' , $id)->get('colleagues')->row_array();
    }

    public function delete_colleagues($id){
        $this->db->where('cl_id',$id)->delete('colleagues');
    }

    public function insert_students($data){
        $this->db->insert('students', $data);
    }

    public function get_all_students(){
        return $this->db->order_by('st_id', "DESC")->get('students')->result_array();
    }

    public function update_students($id, $data){
        $this->db->where('st_id', $id)->update('students' , $data);
    } 

    public function get_single_student($id){
        return $this->db->where('st_id', $id)->get('students')->row_array();
    }

    public function delete_student($id){
        $this->db->where('st_id', $id)->delete('students');
    }

    public function get_all_message(){
        return $this->db->order_by('us_id', "DESC")->get('user_message')->result_array();
    }

    public function delete_reguest($id){
        $this->db->where('us_id', $id)->delete('user_message');
    }

    public function get_single_message($id){
        return $this->db->where('us_id' , $id)->get('user_message')->row_array();
    }

    public function insert_gallery($data){
        $this->db->insert('gallery', $data);
    }

    public function get_all_gallery(){
        return $this->db->order_by('g_id', "DESC")->get('gallery')->result_array();
    }

    public function get_single_img($id){
        return $this->db->where('g_id', $id)->get('gallery')->row_array();
    }
    public function update_gallery($id, $data){
        $this->db->where('g_id', $id)->update('gallery', $data);
    }

    public function delete_img($id){
        $this->db->where('g_id', $id)->delete('gallery');
    }
}

