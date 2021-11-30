<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scal=1.0"/>
<title>Time Log</title>
<script src="index.js" defer></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css" />
</head>
<body>
<main>
<section class="glass">
	<div class="dashboard">
		<div class="user">
<img src="https://firebasestorage.googleapis.com/v0/b/meeting-logger-2a02d.appspot.com/o/femaleuser.png?alt=media&token=54be8fea-ad44-4425-a574-1783ed2c9f05" width="64" height="64" alt=""/>
<h2 id="user"><strong>User</strong></h2>
<p>Team Member</p>
      </div>
	<div class="links">
	<div class="link">
	  <img src="https://firebasestorage.googleapis.com/v0/b/meeting-logger-2a02d.appspot.com/o/calendar.png?alt=media&token=e92aa2b8-f194-4e9f-bed3-51007166b284" width="25" height="25" alt=""/> 
	  <h2><a class="timeLog-link" href="timeLog.php"> Time Log</a></h2>
	   </div>
	
	<div class="link">
	 <img src="https://firebasestorage.googleapis.com/v0/b/meeting-logger-2a02d.appspot.com/o/check.png?alt=media&token=63a6d7fc-b86b-490b-9c94-e3bd94b8f39a" width="25" height="25" alt=""/>
     <h2><a class="progress-link" href="index.html">Progress</a></h2>
	  </div>
	  <div class="link">
	 <img src="https://firebasestorage.googleapis.com/v0/b/meeting-logger-2a02d.appspot.com/o/binoculars.png?alt=media&token=bd2a5d42-0b00-4703-82b2-8afd0495f99b"   width="25" height="25" alt=""/>
	 <h2><a class="overview-link" href="#">Overview</a></h2>
	  </div>
	<div class="link">
	<img src="https://firebasestorage.googleapis.com/v0/b/meeting-logger-2a02d.appspot.com/o/briefcase.png?alt=media&token=1d6101ec-237a-4a0f-a8b2-e9cd0616d62c" width="25" height="25" alt=""/>
    <h2><a class="meetings-link" href="meetings.html">Meetings</a></h2>
	  </div>
	
	
    </div>
    <div class="pro">
	<h2>Admin User Tracker</h2>
    <img src="https://firebasestorage.googleapis.com/v0/b/meeting-logger-2a02d.appspot.com/o/home.png?alt=media&token=79f717a3-6be8-4924-925e-d6aa46c33584" width="50" height="50" alt=""/>
   
    </div>
    </div>
     <div class="Home">
    	<div class="status">
    		<h1>Time Log</h1>
    		<input type="text"/>
    	</div>
        <div class="table">
        	<table class="content-table" id="content-table">
        		<thead>
        			<tr>
        				<th>Date</th>
        				<th>Member</th>
        				<th>Activity</th>
        				<th>Duration</th>
        			</tr>
        		</thead>
        		
        		<tbody>
        			<tr>
        				<td>14/1/2021</td>
        				<td>Harith</td>
        				<td>Researched on ways of overcoming the visual impairment faced</td>
        				<td>1 hr</td>
        			</tr>
        			
        		</tbody>
        		
        	</table>
        </div>
        <div class="buttons">
    <button class="add" onClick="openForm()">Add</button>
      <div class="formPopup" id="popupForm">
     <?php 
      if(isset($_POST['submit'])) {
	$date = $_POST['date'];
  $member = $_POST['member'];
  $activity = $_POST['activity'];
	$duration = $_POST['duration'];
}
		 
		  echo "works";
     ?>
        <form action="" method="POST" class="formContainer">
          <h2>Fill in the information</h2>
          <label for="date">
            <strong>Date</strong>
          </label>
          <input type="text" id="date" placeholder="Enter date" name="date" required>
          <label for="member">
            <strong>Member</strong>
          </label>
          <input type="text" id="member" placeholder="Enter member" name="member" required>
          <label for="activity">
            <strong>Activity</strong>
          </label>
          <input type="text" id="activity" placeholder="Enter activity" name="activity" required>
          <label for="duration">
            <strong>Duration</strong>
          </label>
          <input type="text" id="duration" placeholder="Enter duration" name="duration" required>
          <button type="button" class="btn" onClick="addRow()">Add</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
		</div>
     <button class="update">Update</button>
     <button class="delete">Delete</button>
    </div>
	    </div>
</section>
<div class="circle1"></div>
</main>
<div class="circle2"></div>
</body>
</html>

<?php
function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

?>
