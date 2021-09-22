<?php
class UsersController extends AppController {
    // public function index()
    // {

    // }
	public function users() {
        if($this->request->is('post')){

        $this->User->create(); 
           $this->User->save($this->request->data);
        //    {
        //        $this->redirect('index'); 
        //    }
        //    else{
        //        print($this->User->save($this->request->data));
        //        print("NO");
        //    }
        }

	}

}