<?php 	 
 function user_data_submit()
	  {
		
	    $data = array(
		'fSeatNo'=>$this->input->post('SeatNo'),
		'fSubName' => $this->input->post('selectedExam')
		);
		$ValueData=$this->mTrial->fVerify($data);
		echo json_encode($data);
	   }
	   ?>