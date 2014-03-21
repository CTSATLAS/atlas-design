<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mobile_upload_controller
 *
 * @author shawnsandy
 */
class MobileUploadsController extends AppController{
    //put your code here
    
    public $name = 'MobileUpload';

    
    
    function beforeFilter() {
        parent::beforeFilter();
        //view controller actions without login
        $this->Auth->allow('index','test','upload','key', 'error');
        //change the default layout to mobile-upload.ctp
        $this->layout = 'mobile-upload';  
        //print Configure::version();
    }
    
/**
 * 
 * @param mixed $url_key //checks if /url/index/url_key is valid
 */
    public function index ($url_key = null){  
//        if url_key is missing send to mobile_uploads/error/key_error
            if(!$url_key) $this->redirect(array('action' => 'error/key_error'));             
            //TO run function to check is key expired
            $key_expire = true;
            //if verification_key expired send to  mobile_uploads/error/key_expire
            if(!$key_expire) $this->redirect (array('action' => 'error/key_expired'));
            
    }
    //testing stuff
    public function test() { 
        
        echo "my test controller";
        //dont render template I am testing here
        $this->layout = false;  
        $this->autoRender = false;
        
    }
    
    public function upload(){
         
    }
    
    /**
     * Generate validaton key and gives
     * @param type $key
     */
    public function key($key = null) {
                
    }
    
    
    public function error($error = null) {        
        //check if key_error and set key erroy to true        
        if($error == 'key_error') $this->set ('keyerror', 'Your url key is invalid, please visit you local CareerSource website to reactivate your key');        
        if($error == 'key_expired') $this->set ('keyerror', 'Your activation key has expired, please visit you local CareerSource website to reactivate your key');
        
    }
    
}
