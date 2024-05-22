


<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
	  <button type="button" class="btn btn-primary">1</button>
	  <button type="button" class="btn btn-primary">2</button>
	
<div class="btn-group" role="group">
	<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
	  Dropdown
	</button>
	<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
	  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
	  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
	</ul>
  </div>	  <div class="btn-group" role="group">
	  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
		Dropdown
	  </button>
	  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
		<li><a data-location="result" data-file="process" data-value="26 - Twenty Six" class="dropdown-item jslink" href="#">Star 26</a></li>
		<li><a data-location="result" data-file="process" data-value="14 - Twenty Seven" class="dropdown-item jslink" href="#">Star 27</a></li>
	  </ul>
	</div>
	</div>
<a href="#" data-location="result" data-file="process" data-value="Blast-4" class="jslink star">Blast 4</a>
	<?php if (!empty($_POST)) {     
		   
	var_dump($_POST);
	} ?>
	
