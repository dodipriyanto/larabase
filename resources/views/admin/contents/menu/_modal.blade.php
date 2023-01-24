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
</div>


