<?php

include "msgdb.php";




    // function sendMessage($id, $name, $message, $date){
    //     $stmt = $conn->prepare("INSERT INTO dluser_msg (name, message, date)  VALUES (:name, :message, :date)");

    //     $stmt->bindParam(':name', $name);
    //     $stmt->bindParam(':message', $message);
    //     $stmt->bindParam(':date', $date);

    //     $stmt->excute();
    //     echo "message send succesfully";

    // }


if($_SERVER["REQUEST_METHOD"] == "POST"){
  $message = $_POST ['dlmessage'];

  

  if (!empty($dluser_name) && !empty($dlmessage) && !empty($dlregister_date)) {
    $stmt = $conn->prepare("INSERT INTO (`dluser_name`, `dlmessage`, `dlregister_date`) FROM `dluser2_msg` VALUES (:dluser_name :dlmessage dlregister_date)");
    $stmt->bindparam(':name', $dluser_name);
    $stmt->bindparam(':message', $dlmessage);
    $stmt->bindparam(':date', $dlregister_date);

    $stmt->excute();
    echo "message send succesfully";

//     $messagequery="SELECT `dlusername`,`dlmessage`, `dlregister_date` FROM `dluser2_msg` WHERE `message`='$dlmessage'";
//   foreach($conn->query($messagequery) as $row){
//     $username = $row['dluser_name'];
//     $message = $row['dlmessage'];
//     $date = $row['dlregister_date'];
// }

    echo "message send succesfully";
  }
  else{
    // echo "Error: " .conn . "<br>" .$conn->error;
  }
}




// catch(PDOException $e) {
//     echo "connection failed". $e->getMessage();
// }

?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(documet).ready(function){
  $('#sendbtn').click(function(){
    var dlmessage = $('#input-empty').val();

    $.ajax({
      type: 'POST';
      url: 'message_ajax.php';
      data: {dlmessage :dlmessage},
      success: function(response) {
        alert(response);
      }
    })
  })
}



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


$("#cancelbtn").click(function() {

        alert("Session cancelled!");
    });




    $(document).ready(function() {
  $('#messageTable').DataTable();

  window.sendMessage = function() {
    // message content textarea
    var message = $('#modal-body').val();
    
    //message content to DataTable
    $('#messageTable').DataTable().row.add([message]).draw();

    // Clear textarea and close modal
    $('#messageContent').val('');
    $('#sendMessageModal').modal('hide');
  };
});

</script>