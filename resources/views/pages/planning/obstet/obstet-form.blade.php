<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_gravidity"> Total Number of Pregnancies (Gravidity) <b class="text-danger">*</b></label>
            <span class="form-note">Please enter the total number of pregnancies.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_gravidity" name="inp_gravidity" placeholder="Enter the number of pregnancies" required>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_parity"> Number of Pregnancies Carried to Viable Gestational Age (Parity) <b class="text-danger">*</b></label>
            <span class="form-note">Please enter the number of viable pregnancies.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_parity" name="inp_parity" placeholder="Enter the number of viable pregnancies" required>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_num_full_term"> Number of Full-term Pregnancies <b>(optional)</b></label>
            <span class="form-note">Please enter the number of full-term pregnancies.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_num_full_term" name="inp_num_full_term" placeholder="Enter the number of full-term pregnancies">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_num_premature"> Number of Premature Births <b>(optional)</b></label>
            <span class="form-note">Please enter the number of premature births.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_num_premature" name="inp_num_premature" placeholder="Enter the number of premature births">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_num_abortion"> Number of Abortions <b>(optional)</b></label>
            <span class="form-note">Please enter the number of abortions.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_num_abortion" name="inp_num_abortion" placeholder="Enter the number of abortions">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_num_living_children"> Number of Living Children <b>(optional)</b></label>
            <span class="form-note">Please enter the number of living children.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_num_living_children" name="inp_num_living_children" placeholder="Enter the number of living children">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_last_delivery_date"> Date of Last Delivery <b>(optional)</b></label>
            <span class="form-note">Please enter the date in YYYY-MM-DD format.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_last_delivery_date" name="inp_last_delivery_date">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_last_delivery_type"> Type of Last Delivery <b>(optional)</b></label>
            <span class="form-note">Please select the type of delivery.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_last_delivery_type" name="inp_last_delivery_type">
            <option value="" selected disabled>Select an option</option>
            <option value="Vaginal">Vaginal</option>
            <option value="Cesarean">Cesarean</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_last_menstrual_period"> Last Menstrual Period <b>(optional)</b></label>
            <span class="form-note">Please enter the date in YYYY-MM-DD format.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_last_menstrual_period" name="inp_last_menstrual_period">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_menstrual_flow"> Menstrual Flow <b class="text-danger">*</b></label>
            <span class="form-note">Please select the flow type.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_menstrual_flow" name="inp_menstrual_flow" required>
            <option value="" selected disabled>Select an option</option>
            <option value="scanty">Scanty</option>
            <option value="moderate">Moderate</option>
            <option value="heavy">Heavy</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dysmenorrhea"> Dysmenorrhea <b class="text-danger">*</b></label>
            <span class="form-note">Please select Yes or No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_dysmenorrhea" name="inp_dysmenorrhea" required>
            <option value="" selected disabled>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hydatidiform_mole"> Hydatidiform Mole <b class="text-danger">*</b></label>
            <span class="form-note">Please select Yes or No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_hydatidiform_mole" name="inp_hydatidiform_mole" required>
            <option value="" selected disabled>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_ectopic_pregnancy"> History of Ectopic Pregnancy <b class="text-danger">*</b></label>
            <span class="form-note">Please select Yes or No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_ectopic_pregnancy" name="inp_ectopic_pregnancy" required>
            <option value="" selected disabled>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

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
