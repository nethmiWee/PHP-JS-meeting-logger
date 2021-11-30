// JavaScript Document


      function openForm() {
        document.getElementById("popupForm").style.display = "block";
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }

var countID = 1; //! is ID of hardcoded row
var table = document.getElementById("content-table");
var trs = table.getElementsByTagName('tr');  // list of all rows

function addRow(){
var date = document.getElementById("date").value;
var member = document.getElementById("member").value;
var activity = document.getElementById("activity").value;
var duration = document.getElementById("duration").value;

// Create an empty <tr> element and add it to the 1st position of the table:
var row = table.insertRow(-1);

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
var cell4 = row.insertCell(3);

// Add some text to the new cells:
cell1.innerHTML = date;
cell2.innerHTML = member;
cell3.innerHTML = activity;
cell4.innerHTML = duration;
	
//Increase count
countID = countID + 1;
console.log(countID);

//update table
updateRows();
}

function updateRows(){
	save();
}

function save() {

  var values = [];  // will be a (potentially jagged) 2D array of all values
		
  for (var i = 1; i < trs.length; i++) {
    // loop through all rows, each will be one entry in values
	  
    var trValues = []; //All rows
    var tds = trs[i].getElementsByTagName('td');  // list of all cells in this row, field data
    
    for (var j = 0; j < tds.length; j++) {
      trValues[j] = tds[j].innerText;
      // get the value of the cell (preserve newlines, if you don't want that use .textContent)
    }
    
    values[i] = trValues;
  }
  // save values
	if (trValues.length > 0) {
		
	
  console.log(values);
		
	}
}

function appendRow(values) {
  row = table.insertRow(table.rows.length);      // append table row var i;
	
  // insert table cells to the new row
	var cellNo = [];
	
  for (var i = 1; i < trs.length; i++) {
	  for(var x= 0; x < 3; x++ ){
		  
		 if(values[i] !== undefined){
		 cellNo[x] = row.insertCell(x);
		 cellNo[x].innerHTML = values[i];
		  console.log(x);
		  if(x >= 3){
			  row = table.insertRow(table.rows.length); 
		  }
		 }
		  
	  }
     
  }
}
