<?php

class Events extends CI_Model {
	private $table = "events";
    function __construct() {
        parent::__construct();
    }

    function fGetAllRows()
	{
		$query = $this->db->get($this->table);
		return $query->Result();
	} 
	function fGetEventById($EventId)
	{
		$this->db->where('fEventId',$EventId);
		$query = $this->db->get($this->table);
		return $query->Row();
	}

	function fDeleteEvent($EventId)
	{
		$this->db->where('fEventId',$EventId);
		$result = $this->db->delete($this->table);
		if($result == TRUE)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}	 	

}