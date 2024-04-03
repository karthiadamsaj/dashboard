
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<style>

/* The Modal */
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0,0.4); 
  background-color: rgba(0,0,0,0.4); 
}

 textarea {
    border-radius: 5px;
    height: 120px;
    width: 380px;
    box-shadow: none;
    margin: auto 0;
    border: 1px solid #ecf0f2 !important;
    padding: 10px;
    font-size: 15px;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: rgb(198 53 201);
  color: white;
  width: 100%;
}

.modal-body {padding: 20px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: rgb(198 53 201);
  color: white;
  width: 100%;
}
.btn-container {
  margin-left: 75%;
  margin-top: 6%;
}
</style>
</head>
<body>
<div class="container">
<h3 style="padding-top:20px">Datelah Dashboard</h3>
</div>
<div class="btn-container">
<button id="myBtn" class="btn btn-info">New Chat</button>
</div>
<br><br>
<div class="container">
<!-- The Modal -->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width: 40%">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Send a Message</h2>
    </div>
    <div class="modal-body">
      <form method="POST" action="message_ajax.php">
      <!-- <label for="name">Name</label><br>
    <input type="text" id="name" name="id"> <br> -->
      <textarea type="text" class="text-1" placeholder="Enter your message" 
      maxlength="100" value="" id="input-empty" name="dlmessage" required></textarea>
      
    <div class="modal-footer" method="POST" action="message_ajax.php">
      <button id="sendbtn" type="submit" value="submit" class="btn btn-primary">Send </button>
      <button id="cancelbtn" type="cancel" class="btn btn-danger" action="">Cancel</button>
    </div>
    </form>
    </div>
  </div>

</div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



$(document).ready(function() {
  // Initialize DataTable
  $('#messageTable').DataTable();

  // Function to send message
  window.sendMessage = function() {
    // Get message content from textarea
    var message = $('#modal-body').val();
    
    // Add message content to DataTable
    $('#messageTable').DataTable().row.add([message]).draw();

    // Clear textarea and close modal
    $('#messageContent').val('');
    $('#sendMessageModal').modal('hide');
  };
});


// $(document).ready(function){

//   $("#sendbtn").click function(){
//     $.ajax({
//       url:"message_ajax.php",
//       type: POST,
//       data:{
//          message:"Message content here"
//       }
//       success:function(response){
//         alert("message send successfully");
//       }
//       error:function(status, error){
//         console.error("error", error);
//         alert("Failed to send message");
//       }
//     })
//   }
// }
// $("#cancelbtn").click(function() {

// alert("Session cancelled!");
// });


</script>


<?php
include "tab.php";
include "message_ajax.php";
?>


</body>
</html>
