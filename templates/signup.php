

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword1">Re-enter Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
          </div> -->
          <button type="submit" class="btn btn-default pull-right">Submit</button>
        </form>
      </div>

    </div>
  </div>
</div>
