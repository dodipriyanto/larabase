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
                    <label for="user-name">Name</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Nama" required
                               data-validation-required-message="This field is required">
                    </div>
                </fieldset>


                <fieldset class="form-group floating-label-form-group">
                    <label for="group">Parent</label>
                    <div class="controls">
                        <select class="js-example-basic-single form-control" id="parent_id" name="parent_id">
                            <option value="" selected="true" disabled="true">-- PARENT --</option>
                            @foreach($parent as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </fieldset>

                <fieldset class="form-group floating-label-form-group">
                    <label for="user-name">Code</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="code" name="code"
                               placeholder="Code" required
                               data-validation-required-message="This field is required">
                    </div>
                </fieldset>

                <fieldset class="form-group floating-label-form-group">
                    <label for="user-name">Order</label>
                    <div class="controls">
                        <input type="text" class="form-control number-only" id="menu_order" name="menu_order"
                               placeholder="Order" required
                               data-validation-required-message="This field is required">
                    </div>
                </fieldset>

                <fieldset class="form-group floating-label-form-group">
                    <label for="user-name">Route Name</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="route_name" name="route_name"
                               placeholder="Route Name"
                        >
                    </div>
                </fieldset>

                <fieldset class="form-group floating-label-form-group">
                    <label for="user-name">Icon</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="icon" name="icon"
                               placeholder="Icon"
                               data-validation-required-message="This field is required">
                    </div>
                </fieldset>




                <div class="modal-footer">
                    <button id="formSubmit" type="submit" class="btn btn-outline-info">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


