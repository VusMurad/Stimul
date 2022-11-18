<?php 

class UserModel extends CI_Model{

    public function get_all_languages($limit, $count){
        return $this->db->limit($limit, $count)->get('languages')->result();
    }

    public function get_languages_count(){
        return $this->db->count_all('languages');
    }

    public function get_all_languages2(){
        return $this->db->limit(6)->get('languages')->result_array();
    }
    
    public function get_single_language($id){
        return $this->db->where('l_id', $id)->get('languages')->row_array();
    } 

    public function get_all_compcourse2(){
        return $this->db->limit(6)->get('compcourse')->result_array();
    }

    public function get_all_compcourse($limit, $count){
        return $this->db->limit($limit, $count)->get('compcourse')->result();
    }

    public function get_compcourse_count(){
        return $this->db->count_all('compcourse');
    }

    public function get_single_compcourse($id){
        return $this->db->where('c_id',$id)->get('compcourse')->row_array();
    }

    public function get_all_psychology($limit, $count){
        return $this->db->limit($limit, $count)->get('psychology')->result();
    }

    public function  get_psychology_count(){
        return $this->db->count_all('psychology');
    }

    public function get_single_psychology($id){
        return $this->db->where('p_id',$id)->get('psychology')->row_array();
    }

    public function get_all_toefl($limit, $count){
        return $this->db->limit($limit, $count)->get('toefl')->result();
    }

    public function get_toefl_count(){
        return $this->db->count_all('toefl');
    }

    public function get_single_toefl($id){
        return $this->db->where('t_id',$id)->get('toefl')->row_array();
    }

    public function get_all_acca($limit , $count){
        return $this->db->limit($limit , $count)->get('acca')->result();
    }

    public function get_acca_count(){
        return $this->db->count_all('acca');
    }

    public function get_single_acca($id){
        return $this->db->where('ac_id',$id)->get('acca')->row_array();
    }

    public function get_all_design($limit , $count){
        return $this->db->limit($limit , $count)->get('design')->result();
    }

    public function get_design_count(){
        return $this->db->count_all('design');
    }

    public function get_single_design($id){
        return $this->db->where('d_id',$id)->get('design')->row_array();
    }

    public function get_all_prepearing($limit , $count){
        return $this->db->limit($limit , $count)->get('prepearing')->result();
    }

    public function get_prepearing_count(){
        return $this->db->count_all('prepearing');
    }

    public function get_single_prepearing($id){
        return $this->db->where('pr_id',$id)->get('prepearing')->row_array();
    }

    public function get_all_yos($limit , $count){
        return $this->db->limit($limit , $count)->get('yos')->result();
    }

    public function get_yos_count(){
        return $this->db->count_all('yos');
    }

    public function get_single_yos($id){
        return $this->db->where('y_id',$id)->get('yos')->row_array();
    }

    public function get_all_translation(){
        return $this->db->order_by('tr_id','DESC')->get('translation')->result_array();
    }

    public function get_single_translation($id){
        return $this->db->where('tr_id' , $id)->get('translation')->row_array();
    }

    public function get_single_trnslatn($id){
        return $this->db->where('tr_id' , $id)->get('translation')->row_array();
    }

    public function get_all_training2(){
        return $this->db->limit(6)->get('training')->result_array();
    }

    public function get_all_training($limit , $count){
        return $this->db->limit($limit , $count)->get('training')->result();
    }

    public function get_training_count(){
        return $this->db->count_all('training');
    }

    public function get_single_training($id){
        return $this->db->where('trg_id',$id)->get('training')->row_array();
    }

    public function get_all_study2(){
        return $this->db->limit(6)->get('studyabrd')->result_array();
    }

    public function get_all_study($limit , $count){
        return $this->db->limit($limit , $count)->get('studyabrd')->result();
    }

    public function get_stabroad_count(){
        return $this->db->count_all('studyabrd');
    }

    public function get_single_study_abr($id){
        return $this->db->where('s_id',$id)->get('studyabrd')->row_array();
    }

    public function insert_message($data){
        $this->db->insert('user_message', $data);
    }

    public function get_all_customers($limit , $count){
        return $this->db->limit($limit , $count)->get('customers')->result_array();
    } 

    public function get_customers_count(){
        return $this->db->count_all('customers');
    }

    public function get_all_colleagues($limit , $count){
        return $this->db->limit($limit , $count)->get('colleagues')->result_array();
    }

    public function get_colleagues_count(){
        return $this->db->count_all('colleagues');
    }

    public function get_single_colleagues($id){
        return $this->db->where('cl_id',$id)->get('colleagues')->row_array();
    } 

    public function get_all_students(){
        return $this->db->order_by('st_id','DESC')->get('students')->result_array();
    }

    public function get_all_gallery(){
        return $this->db->order_by('g_id', 'DESC')->get('gallery')->result();
    }

}