<!-- General Information -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_weight"> Weight <b class="text-danger">*</b></label>
            <span class="form-note">Please enter the weight in kg.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_weight" name="inp_weight" required placeholder="Enter weight">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_height"> Height <b class="text-danger">*</b></label>
            <span class="form-note">Please enter the height in cm.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_height" name="inp_height" required
            placeholder="Enter height">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_blood_pressure"> Blood Pressure <b class="text-danger">*</b></label>
            <span class="form-note">Please enter blood pressure in mmHg.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_blood_pressure" name="inp_blood_pressure" required
            placeholder="Enter blood pressure">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pulse_rate"> Pulse Rate <b class="text-danger">*</b></label>
            <span class="form-note">Please enter pulse rate per minute.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_pulse_rate" name="inp_pulse_rate" required
            placeholder="Enter pulse rate">
    </div>
</div>

<!-- Skin -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_skin"> Skin Condition <b class="text-danger">*</b></label>
            <span class="form-note">Please select skin condition.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_skin" name="inp_skin" required>
            <option value="" disabled selected>Select an option</option>
            <option value="normal">Normal</option>
            <option value="pale">Pale</option>
            <option value="yellowish">Yellowish</option>
            <option value="hematoma">Hematoma</option>
        </select>
    </div>
</div>

<!-- Conjunctiva -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_conjunctiva"> Conjunctiva Condition <b
                    class="text-danger">*</b></label>
            <span class="form-note">Please select conjunctiva condition.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_conjunctiva" name="inp_conjunctiva" required>
            <option value="" disabled selected>Select an option</option>
            <option value="normal">Normal</option>
            <option value="pale">Pale</option>
            <option value="yellowish">Yellowish</option>
        </select>
    </div>
</div>

<!-- Neck -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_neck"> Neck Condition <b class="text-danger">*</b></label>
            <span class="form-note">Please select neck condition.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_neck" name="inp_neck" required>
            <option value="" disabled selected>Select an option</option>
            <option value="normal">Normal</option>
            <option value="neck mass">Neck Mass</option>
            <option value="enlarged lymph nodes">Enlarged Lymph Nodes</option>
        </select>
    </div>
</div>

<!-- Breast -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_breast"> Breast Condition <b class="text-danger">*</b></label>
            <span class="form-note">Please select breast condition.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_breast" name="inp_breast" required>
            <option value="" disabled selected>Select an option</option>
            <option value="normal">Normal</option>
            <option value="mass">Mass</option>
            <option value="nipple discharge">Nipple Discharge</option>
        </select>
    </div>
</div>

<!-- Abdomen -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_abdomen"> Abdomen Condition <b class="text-danger">*</b></label>
            <span class="form-note">Please select abdomen condition.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_abdomen" name="inp_abdomen" required>
            <option value="" disabled selected>Select an option</option>
            <option value="normal">Normal</option>
            <option value="abdominal mass">Abdominal Mass</option>
            <option value="varicosities">Varicosities</option>
        </select>
    </div>
</div>

<!-- Extremities -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_extremities"> Extremities Condition <b
                    class="text-danger">*</b></label>
            <span class="form-note">Please select extremities condition.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_extremities" name="inp_extremities" required>
            <option value="" disabled selected>Select an option</option>
            <option value="normal">Normal</option>
            <option value="edema">Edema</option>
            <option value="varicosities">Varicosities</option>
        </select>
    </div>
</div>

<!-- Pelvic Examination -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_mass"> Pelvic Mass <b class="text-danger">*</b></label>
            <span class="form-note">Mass: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_mass" name="inp_pelvic_mass" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_abnormal_discharge"> Pelvic Abnormal Discharge <b
                    class="text-danger">*</b></label>
            <span class="form-note">Abnormal discharge: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_abnormal_discharge" name="inp_pelvic_abnormal_discharge"
            required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_cervical_abnormalities"> Pelvic Cervical Abnormalities <b
                    class="text-danger">*</b></label>
            <span class="form-note">Cervical abnormalities: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_cervical_abnormalities" name="inp_pelvic_cervical_abnormalities"
            required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<!-- General Information - Already provided -->

<!-- Pelvic Examination Fields -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_warts"> Pelvic Warts <b class="text-danger">*</b></label>
            <span class="form-note">Warts: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_warts" name="inp_pelvic_warts" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_polyp_or_cyst"> Pelvic Polyp/Cyst <b
                    class="text-danger">*</b></label>
            <span class="form-note">Polyp/Cyst: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_polyp_or_cyst" name="inp_pelvic_polyp_or_cyst" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_inflammation_or_erosion"> Pelvic Inflammation/Erosion <b
                    class="text-danger">*</b></label>
            <span class="form-note">Inflammation/Erosion: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_inflammation_or_erosion"
            name="inp_pelvic_inflammation_or_erosion" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_bloody_discharge"> Pelvic Bloody Discharge <b
                    class="text-danger">*</b></label>
            <span class="form-note">Bloody discharge: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_bloody_discharge" name="inp_pelvic_bloody_discharge" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_cervical_consistency"> Pelvic Cervical Consistency <b
                    class="text-danger">*</b></label>
            <span class="form-note">Cervical consistency: firm/soft.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_cervical_consistency" name="inp_pelvic_cervical_consistency"
            required>
            <option value="" disabled selected>Select an option</option>
            <option value="firm">Firm</option>
            <option value="soft">Soft</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_cervical_tenderness"> Pelvic Cervical Tenderness <b
                    class="text-danger">*</b></label>
            <span class="form-note">Cervical tenderness: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_cervical_tenderness" name="inp_pelvic_cervical_tenderness"
            required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pelvic_adnexal_mass_tenderness"> Pelvic Adnexal Mass/Tenderness <b
                    class="text-danger">*</b></label>
            <span class="form-note">Adnexal mass/tenderness: Yes/No.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_pelvic_adnexal_mass_tenderness"
            name="inp_pelvic_adnexal_mass_tenderness" required>
            <option value="" disabled selected>Select an option</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<!-- Uterine Information Fields -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_uterine_position"> Uterine Position <b
                    class="text-danger">*</b></label>
            <span class="form-note">Uterine position: mid, anteflexed, retroflexed.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_uterine_position" name="inp_uterine_position" required>
            <option value="" disabled selected>Select an option</option>
            <option value="mid">Mid</option>
            <option value="anteflexed">Anteflexed</option>
            <option value="retroflexed">Retroflexed</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_uterine_depth"> Uterine Depth <b class="text-danger">*</b></label>
            <span class="form-note">Please enter uterine depth in cm.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_uterine_depth" name="inp_uterine_depth" required
            placeholder="Enter uterine depth in cm">
    </div>
</div>



<!-- Submit and Reset Buttons -->
<div class="row mt-2 align-center">
    <div class="col-lg-5"></div>
    <div class="col-lg-7 d-flex justify-content-end">
        <div class="form-group mt-2 mb-2">
            <button type="reset" class="btn btn-light bg-white mx-3">Reset</button>
            <button type="submit" class="btn btn-primary">Submit Examination</button>
        </div>
    </div>
</div>
