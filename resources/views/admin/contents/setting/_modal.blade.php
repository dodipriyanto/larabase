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
                    <label for="user-name">Parameter</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="parameter" name="parameter"
                               placeholder="Parameter"
                               data-validation-required-message="This field is required">
                    </div>
                </fieldset>

                <fieldset class="form-group floating-label-form-group">
                    <label for="group">Type</label>
                    <div class="controls">
                        <select class="js-example-basic-single form-control" id="type" name="type">
                            <option value="text">Text</option>
                            <option value="upload">Upload</option>
                            <option value="editor">Editor</option>

                        </select>
                    </div>
                </fieldset>

                <fieldset class="form-group floating-label-form-group">
                    <label for="user-name">Value</label>
                    <div class="controls">
                        {{--                            <input type="text" class="form-control" id="value" name="value"--}}
                        {{--                                   placeholder="Value"--}}
                        {{--                                   data-validation-required-message="This field is required">--}}
                    </div>
                    <textarea class="form-control" id="value" name="value"></textarea>
                    <input type="file" class="files hidden" id="fileUpload">
                </fieldset>

                <div class="modal-footer">
                    <button id="save" type="submit" class="btn btn-outline-info save">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>


