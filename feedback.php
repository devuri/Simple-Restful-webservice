<?php 

	function get_data($find)
	{
		$chars=$arrayName = array('A' => 1,'B'=> 2, 'C'=>3, 'D'=>4);
		
		foreach ($chars as $ch => $char) 
		{
			if ($ch==$find) 
			{
				return $char; 
			}
		}
	}

?>