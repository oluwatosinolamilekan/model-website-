        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg" id="myModal{{$contact->id}}">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title mt-0" id="myLargeModalLabel">
                  {{$contact->name}}
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="ion-close-round"></i>
                  </button>
                </div>
                <div class="modal-body">
                      <b>Email:</b>
                     <br>
                  <p>{{$contact->email}}</p>
                  <p>
                     <b>Phone Number:</b>
                     <br>
                     {{$contact->phone}}
                  </p>
                  
                  <div class="text-center">
                      <p>{{$contact->message}}</p>
                  </div>
                 
                  
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->