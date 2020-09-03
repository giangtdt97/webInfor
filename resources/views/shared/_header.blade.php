
<!-- Modal -->
<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="addModal" action="{{route('quote')}}">
                    @if ($errors->any())
                        <div class="alert alert-danger" >
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{csrf_field()}}
                    <div class="form-group">
                        <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                        <input type="text" name ="name" class="form-control" id="appointment_name" placeholder="Full Name" required="true">
                    </div>
                    <div class="form-group">
                        <!-- <label for="appointment_email" class="text-black">Email</label> -->
                        <input type="text" name="email" class="form-control" id="appointment_email" placeholder="Email" required="true">
                    </div>

                    <div class="form-group">
                        <!-- <label for="appointment_message" class="text-black">Message</label> -->
                        <textarea name="quote_content" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message" required="true"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Get a Quote" id="Get_a_Quote" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
            </div>
            <div class="modal-body">
                <p>Request is sent!!!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

