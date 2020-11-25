<?php
/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		 parent::__construct();
		 $this->load->model('Events');
	}
	public function index()
	{
		$data['Events'] = $this->Events->fGetAllRows();
		//var_dump($data);exit();
		$this->load->view('EventList',$data);
	}
	function fViewAddEvent()
	{
		$this->load->view('AddEvent');
	}
	function fAddEvent()
	{
		$this->form_validation->set_rules('EventTitle', 'Event Title', 'required');
		$this->form_validation->set_rules('StartDate', 'Start Date', 'required');
		$this->form_validation->set_rules('EndDate', 'End Date', 'required');
		$this->form_validation->set_rules('Recurrence', 'Recurrence', 'required'); 	 	
		$this->form_validation->set_rules('Recurrence1', 'Recurrence', 'required');
		$this->form_validation->set_error_delimiters("<p class='text-danger' style='font-weight:bold;color:red'>", "</p>");
        if ($this->form_validation->run() == TRUE) {
        	 $InsertData = array(
                'fEventTitle' => $this->input->post('EventTitle'),
                'fEventStartDate' => $this->input->post('StartDate'),
                'fEventEndDate' => $this->input->post('EndDate'),
                'fRecurrence' => $this->input->post('Recurrence').'-'. $this->input->post('Recurrence1'),
            );
        	$result = $this->db->insert('events',$InsertData);
        	if ($result == TRUE)
        	{
        		$this->session->set_flashdata('message', 'Event Inserted Successfully.');
                return redirect('home');
        	}
        }else{
        	$this->load->view('AddEvent');
        }
	}
	function fEditEvent($EventId)
	{
		//var_dump($EventId);exit();
		$this->form_validation->set_rules('EventTitle', 'Event Title', 'required');
		$this->form_validation->set_rules('StartDate', 'Start Date', 'required');
		$this->form_validation->set_rules('EndDate', 'End Date', 'required');
		$this->form_validation->set_rules('Recurrence', 'Recurrence', 'required'); 	 	
		$this->form_validation->set_rules('Recurrence1', 'Recurrence', 'required');
		$this->form_validation->set_error_delimiters("<p class='text-danger' style='font-weight:bold;color:red'>", "</p>");
        if ($this->form_validation->run() == TRUE) {
        	 $UpdateData = array(
                'fEventTitle' => $this->input->post('EventTitle'),
                'fEventStartDate' => $this->input->post('StartDate'),
                'fEventEndDate' => $this->input->post('EndDate'),
                'fRecurrence' => $this->input->post('Recurrence').'-'. $this->input->post('Recurrence1'),
            );
        	 $this->db->where('fEventId',$EventId);
        	 $result = $this->db->update('events',$UpdateData);
        	 if ($result == TRUE)
        	{
        		$this->session->set_flashdata('message', 'Event Updated Successfully.');
                return redirect('home');
        	}
        }else{
        	$data['Events'] = $this->Events->fGetEventById($EventId);
        	$this->load->view('EditEvent',$data);
        }
	}
	function fViewEditEvent($EventId)
	{
		$data['Events'] = $this->Events->fGetEventById($EventId);
		//var_dump($data);exit();
		$this->load->view('EditEvent',$data);
	}
	function fDeleteEvent($EventId)
	{
		$Delete_Id = $this->Events->fDeleteEvent($EventId);
		if ($Delete_Id == TRUE)
		{
				$this->session->set_flashdata('message_Delete', 'Event Deleted Successfully.');
                return redirect('home');
		}
	}
	function fViewEvent($EventId)
	{
		$data['Events'] = $this->Events->fGetEventById($EventId);
		$start_Date = $data['Events']->fEventStartDate;
		$End_Date = $data['Events']->fEventEndDate;
		$Recurrence =  explode("-", $data['Events']->fRecurrence);
		$days = $this->DateDiffDays($start_Date,$End_Date) + 1;
		if ($Recurrence[0] == "Every")
		{
			$count = 1;
		}elseif($Recurrence[0] == "Everyother")
		{
			$count = 2;
		}elseif($Recurrence[0] == "everythird")
		{
			$count = 3;
		}elseif($Recurrence[0] == "everyfourth")
		{
			$count = 4;
		}

		if ($Recurrence[1] == "day")
		{
			$count1 =  1;
		}elseif($Recurrence[1] == "week")
		{
			$count1 = 7;
		}elseif($Recurrence[1] == "month")
		{
			$count1 =  30;
		}elseif($Recurrence[1] == "year")
		{
			$count1 = 365;
		}
		$count3 = round($days / $count1);
		$data ['Recurrence'] = $count3 / $count;
		$this->load->view('ViewEvent',$data);
	}
	function DateDiffDays($start_Date,$End_Date)
	{
		$diff = strtotime($End_Date) - strtotime($start_Date);

		return abs(round($diff / 86400));
	}
}
 ?>