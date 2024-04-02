<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
   <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap4.css" >
</head>
<body>
<table id="example" class="table table-striped table-bordered" style="width:95%;padding:40px;margin-left:30px">
<thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Message</th>
                <th><button id="resend" class="btn btn-primary">Resend</button></th>
                <th><button id="delete" class="btn btn-danger">Delete</button></th>
                <th>Date</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Datelah</td>
                <td>hii hru ?</td>
                <td><button id="resend" class="btn btn-primary">Resend</button></td>
                <td><button id="delete" class="btn btn-danger">Delete</button></td>
                <td>31/03/2024</td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </thead>
</table>
</body>
</html>