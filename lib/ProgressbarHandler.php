<?php

class ProgressbarHandler
{
	private $current 			= null;
	private $last		 		= null;
	private $max 				= null;
	private $addClasses 		= null;
	private $id					= null;
	private $idcontainer		= null;

	public function __construct($addClasses="", $max=100, $current=0)
	{
		$this->current = $current;
		$this->max = $max;
		$this->addClasses = $addClasses;
		$this->id = mt_rand();
		$this->idcontainer = $this->id.'_contrainer';
	}

	public function insert()
	{
		echo('<div id="'.$this->idcontainer.'" class="progress progress-striped center '.$this->addClasses.'">
				<div id="'.$this->id.'" class="progress-bar progress-bar-info" style="width: '.$this->current.'"></div>
			  </div>');
	}

	public function update()
	{
		if($this->current > ($this->last+4))
		{
			$this->last = $this->current;
			echo('<script type="text/javascript">
					$("#'.$this->id.'").stop().animate({width: "'.$this->current.'%"},"fast");
				  </script>');
			echo(str_repeat(' ', 1024*64));
			ob_flush();
          	flush();
		}
	}

	public function hide($timeout=2000)
	{
		echo('<script type="text/javascript">
				$("#'.$this->id.'").stop().animate({width: "100%"},"fast");
				$("#'.$this->idcontainer.'").removeClass("active");
				$("#'.$this->idcontainer.'").delay('.$timeout.').fadeOut();
			  </script>');
	}

	public function set_current($current)
	{
		$this->current = $current;
	}
}

?>