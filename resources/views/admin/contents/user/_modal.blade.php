<!-- Modal -->

<div class="md-modal md-effect-1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" style=" height: 80% !important;" >

    <div class="md-content">
        <h3 class="theme-bg2 modal-title">Modal Dialog</h3>
        <button type="button" class="close  md-close" data-dismiss="modal" aria-label="Close" style="margin-top: -4em">
            <span aria-hidden="true" style="font-size: 2rem; padding: 10px;" class="text-white">&times;</span>
        </button>
        <div>
            <form class="form-horizontal" method="POST" id="formModal"
                  novalidate>
                @csrf
                <input type="hidden" name="id" id="id" class="id">
                <fieldset class="form-group floating-label-form-group">
                    <label for="user-name">Full Name</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="fullname" name="fullname"
                               placeholder="Full Name" required
                               data-validation-required-message="This field is required">
                    </div>
                </fieldset>

                <fieldset class="form-group floating-label-form-group">
                    <label for="user-name">User Name</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="username" name="username"
                               placeholder="User Name" required
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
