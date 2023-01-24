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
                        <label for="user-name">Nama</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Nama"
                                   data-validation-required-message="This field is required">
                        </div>
                    </fieldset>

                    <fieldset class="form-group floating-label-form-group">
                        <label for="user-name">Kode</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="code" name="code"
                                   placeholder="Kode" required
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


