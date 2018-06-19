 <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="ion-chatbubble-working"></span> Send a Message</h4>
        </div>
        <div class="modal-body">
          
            <div class="form-group">
              <label for="usrname"><span class="ion-compose"></span> Title</label>
              <input type="text" class="form-control" id="msg-title" placeholder="Enter the title">
            </div>
            <div class="form-group">
              <label for="psw"><span class="ion-email"></span> Message</label>
              <textarea  rows="4" cols="50" class="form-control" id="msg-message" placeholder="Enter the message"></textarea>
            </div>
            
            <button id="send-message" class="btn-primary btn-block" senderid="<?php echo $_SESSION["id"]; ?>" reciverid="<?php echo $_GET["id"]; ?>"><span class="ion-reply"></span> Send</button>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><span class="ion-backspace-outline"></span> Cancel</button>
        </div>
      </div>
    </div>
     </div>
  </div>