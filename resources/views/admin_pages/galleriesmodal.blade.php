        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-lg" id="myModal{{$gallery->id}}">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title mt-0" id="myLargeModalLabel">
                      {{$gallery->first_name."".$gallery->last_name}}
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="ion-close-round"></i>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                      <div class="text-center">
                        <img src="{{$gallery->images}}" alt="" srcset="">
                      </div>
                      
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->