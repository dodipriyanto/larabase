<!-- Modal -->
<!-- Modal -->
<div class="modal fade text-left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" id="formModal"
                      novalidate>
                    @csrf
                    <input type="hidden" name="id" id="id" class="id">
                    <fieldset class="form-group floating-label-form-group">
                        <label for="user-name">Full Name</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="fullname" name="fullname"
                                   placeholder="Full Name"
                                   data-validation-required-message="This field is required">
                        </div>
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group">
                        <label for="user-name">User Name</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="username" name="username"
                                   placeholder="User Name"
                                   data-validation-required-message="This field is required">
                        </div>
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group">
                        <label for="user-name">Your Email</label>
                        <div class="controls">
                            <input type="email" name="email" id="email" class="form-control" required
                                   data-validation-required-message="This field is required"
                                   placeholder="Your Email">
                        </div>
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group">
                        <label for="group">Group</label>
                        <div class="controls">

                            <select class="js-example-basic-single form-control" id="group" name="group_id" style="padding:10px !important;">
                                @foreach($group as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach

                            </select>

                        </div>
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group mb-1">
                        <label for="user-password">Enter Password</label>
                        <div class="controls">
                            <input type="password" name="password" id="password"
                                   class="form-control" required
                                   data-validation-required-message="This field is required"
                                   placeholder="Enter Password">
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group mb-1">
                        <label for="user-password">Confirm Password</label>
                        <div class="controls">
                            <input type="password"
                                   data-validation-match-match="password" class="form-control mb-1"
                                   placeholder="Re type password" required>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button id="formSubmit" type="submit" class="btn btn-outline-info">Save changes</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>


