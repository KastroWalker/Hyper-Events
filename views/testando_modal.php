<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="robots" content="index, follow"/>
  <meta name="description" content="Hyper Events - Modal"/>
  <meta name="keywords" content="Modal"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="author" content="Victor Castro"/> 
	
  <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
	
  <title>Modal - Hyper Events</title>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>	
  <script type="text/javascript" src="../JS/jquery.js"></script>
	<script type="text/javascript" src="../JS/bootstrap/bootstrap.min.js"></script>
</body>
</html>