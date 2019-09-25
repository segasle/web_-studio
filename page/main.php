<div class="row">
    <div class="col-12 col-sm-12 col-md-6"></div>
    <div class="col-12 col-sm-12 col-md-6">
        <form method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-12 col-md-4 mb-3">
                    <label for="validationServer01">Имя</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Имя"
                           required="required">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12 col-md-8 mb-3">
                    <label for="validationServer02">телефон</label>
                    <input type="text" class="form-control phone-number is-valid" id="validationServer02"
                           required="required">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer03">City</label>
                    <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City"
                           required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationServer04">State</label>
                    <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State"
                           required>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationServer05">Zip</label>
                    <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip"
                           required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
            </div>
            <button class="btn btn-pink" type="submit">Отправить</button>
        </form>
    </div>
</div>