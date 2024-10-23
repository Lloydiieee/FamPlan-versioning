<div class="py-12 pt-4">
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_abnormal_discharge"> Abnormal Discharge <b class="text-danger">*</b></label>
            </div>
        </div>
        <div class="col-lg-7">
            <select class="form-control" id="inp_abnormal_discharge" name="inp_abnormal_discharge" required>
                <option value="" selected disabled>Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_discharge_from"> Discharge From <b class="text-danger">*</b></label>
            </div>
        </div>
        <div class="col-lg-7">
            <select class="form-control" id="inp_discharge_from" name="inp_discharge_from" required>
                <option value="" selected disabled>Select an option</option>
                <option value="Vagina">Vagina</option>
                <option value="Penis">Penis</option>
            </select>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_sores_or_ulcers"> Sores or Ulcers in the Genital Area <b class="text-danger">*</b></label>
            </div>
        </div>
        <div class="col-lg-7">
            <select class="form-control" id="inp_sores_or_ulcers" name="inp_sores_or_ulcers" required>
                <option value="" selected disabled>Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_genital_pain"> Pain or Burning in the Genital Area <b class="text-danger">*</b></label>
            </div>
        </div>
        <div class="col-lg-7">
            <select class="form-control" id="inp_genital_pain" name="inp_genital_pain" required>
                <option value="" selected disabled>Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_treatment_for_stis"> History of Treatment for STIs <b class="text-danger">*</b></label>
            </div>
        </div>
        <div class="col-lg-7">
            <select class="form-control" id="inp_treatment_for_stis" name="inp_treatment_for_stis" required>
                <option value="" selected disabled>Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_hiv_aids_pelvic_disease"> HIV/AIDS or Pelvic Inflammatory Disease <b class="text-danger">*</b></label>
            </div>
        </div>
        <div class="col-lg-7">
            <select class="form-control" id="inp_hiv_aids_pelvic_disease" name="inp_hiv_aids_pelvic_disease" required>
                <option value="" selected disabled>Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </div>

    <!-- Submit and Reset Buttons -->
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <!-- Empty for spacing -->
        </div>
        <div class="col-lg-7 d-flex justify-content-end">
            <div class="form-group mt-2 mb-2 justify-end">
                <button type="reset" class="btn btn-light bg-white mx-3">
                    <em class="icon ni ni-repeat"></em>
                    Reset
                </button>
                <button type="submit" class="btn btn-primary">
                    <em class="icon ni ni-save"></em>
                    Submit Record
                </button>
            </div>
        </div>
    </div>
</div>
