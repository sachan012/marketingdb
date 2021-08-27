<?php

class Common_model extends CI_Model{   


    function record_count_year_data(){        
        $resSQL = $this->db->query("SELECT year, COUNT(*) as total FROM gpi_data GROUP BY year")        
                ->result_array();
        //echo $this->db->last_query();
        //echo "<pre>";print_r($query);die;
        return $resSQL;
    }

    function count_unique_campaign_data(){
        $resSQL = $this->db->query("SELECT campaign_name, COUNT(*) as total FROM gpi_data GROUP BY campaign_name")        
        ->result_array();
        //echo $this->db->last_query();
        //echo "<pre>";print_r($resSQL);die;
        return $resSQL;
    }


    function count_circlewise_data(){       
        $resSQL = $this->db->query("SELECT circle, COUNT(*) as total FROM gpi_data GROUP BY circle")        
        ->result_array();
        //echo $this->db->last_query();
        //echo "<pre>";print_r($resSQL);die;
        return $resSQL;
    }

       public function record_count($tableName,$condition){
        //echo "<pre>";print_r($condition);die;
        if(!empty($condition)){
             foreach($condition['like'] as $key=>$value){
                //echo $key.'->'.$val;die;
                //$like[] = $key . " like '%" . $value . "%' AND";
                $where[] = $key . " ='".$value."' AND";
            }
            //echo"<pre>";print_r($where);die;
            $str = implode(" ",$where);
            $sd = preg_replace('~\\s+\\S+$~', '', $str);
            //echo $sd;die;
            $sql = "select count(id) as totalrows from gpi_data where $sd;";	
            //echo $sql;die; 
        }else{
            $sql = "select count(id) as totalrows from gpi_data;";
        } 
        $result = $this->db->query($sql)->row_array();       
        //echo   $result['totalrows'];die;                 
        return $result['totalrows'];
    }
    
    public function get_records($tableName, $start, $limit, $condition = array())
    {
        //echo "<pre>";print_r($condition);die;
        //SetCondition($condition);		
		//echo"<pre>";print_r(SetCondition($condition));die;
        //echo"<pre>";print_r($condition['like']);die;
        if(!empty($condition)){
            foreach($condition['like'] as $key=>$value){
                //echo $key.'->'.$val;die;
                //$like[] = $key . " like '%" . $value . "%' AND";
                $where[] = $key . " ='".$value."' AND";
            }
            //echo"<pre>";print_r($where);die;
            $str = implode(" ",$where);
            $sd = preg_replace('~\\s+\\S+$~', '', $str);
            //echo $sd;die;
            $sql = "select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data where ".$sd." Order by id DESC LIMIT $limit,$limit ;";	
            //echo $sql;die; 
        }else{
            $sql = "select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT $limit,$limit;";
        }                 
        $query = $this->db->query($sql);
        //$query = $this->db->get($this->table);   
			//echo $this->db->last_query();die;  
		//echo "<pre>";print_r($query->result_array());die;
        return ( $query->num_rows() > 0 ) ? $query->result_array() : false;
    }

    function get_distinct_year_list(){
        $yearList = $this->db->distinct()->select('year')->order_by("year","asc")->get('gpi_data')->result_array();
        return $yearList;
    }

    function get_distinct_circle_list(){
        $circleList = $this->db->distinct()->select('circle')->order_by("circle","asc")->get('gpi_data')->result_array();
        return $circleList;
    }

    function get_distinct_frenchysebrand_list(){
        $res = $this->db->distinct()->select('franchise_brand')->order_by("franchise_brand","asc")->get('gpi_data')->result_array();
        //echo "<pre>";print_r($res);die;
        return $res;
    }

    function get_distinct_acting_brand_list(){
       $res = $this->db->distinct()->select('acting_brand')->order_by("acting_brand","asc")->get('gpi_data')->result_array();
        return $res;
    }

    function get_distinct_city_list(){
       $res = $this->db->distinct()->select('city')->order_by("city","asc")->get('gpi_data')->result_array();
        return $res;
    }

    function get_distinct_state_list(){
       $res = $this->db->distinct()->select('state')->order_by("state","asc")->get('gpi_data')->result_array();
      // echo "<pre>";print_r($res);die;
        return $res;
    }

    function get_distinct_campaign_list(){
       $res = $this->db->distinct()->select('campaign_name')->order_by("campaign_name","asc")->get('gpi_data')->result_array();
        return $res;
    }

    function getExcelData(){
        $query = $this->db->select("*")->from("gpi_data")
        ->order_by("id")
        ->limit(1000)
        ->get();
        $result = $query->result_array();
        //echo $this->db->last_query();
        //echo "<pre>";print_r($query);die;
        return $result;
    }

    public function csv_data_insert($data) {
        $res = $this->db->insert_batch('gpi_data',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
    }



    
    

}

?>