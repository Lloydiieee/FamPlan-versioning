<!-- Client ID -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_client_id">Client ID <b class="text-danger">*</b></label>
            <span class="form-note">Enter the client ID here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_client_id" name="inp_client_id" required maxlength="255"
            placeholder="Enter Client ID">
    </div>
</div>

<!-- PhilHealth No -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_philhealth_no">PhilHealth No <b class="text-danger">*</b></label>
            <span class="form-note">Enter the PhilHealth number here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_philhealth_no" name="inp_philhealth_no" required
            maxlength="255" placeholder="Enter PhilHealth No">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_plan_to_have_more_children">NHTS<b class="text-danger">*</b></label>
            <span class="form-note">Specify if you're a NHTS.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_nhts" name="inp_nhts" required>
            <option value="">--Select Type--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_plan_to_have_more_children">4P's <b class="text-danger">*</b></label>
            <span class="form-note">Specify if you're a member.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_4ps" name="inp_4ps" required>
            <option value="">--Select Type--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<!-- Name Fields -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_name_last">Last Name <b class="text-danger">*</b></label>
            <span class="form-note">Enter the last name here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_name_last" name="inp_name_last" required maxlength="255"
            placeholder="Enter Last Name">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_name_given">Given Name <b class="text-danger">*</b></label>
            <span class="form-note">Enter the given name here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_name_given" name="inp_name_given" required maxlength="255"
            placeholder="Enter Given Name">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_name_mi">Middle Initial <b class="text-danger">*</b></label>
            <span class="form-note">Enter the middle initial here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_name_mi" name="inp_name_mi" required maxlength="255"
            placeholder="Enter Middle Initial">
    </div>
</div>

<!-- Date of Birth -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dob">Date of Birth <b class="text-danger">*</b></label>
            <span class="form-note">Enter the date of birth here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_dob" name="inp_dob" required
            placeholder="Enter Date of Birth">
    </div>
</div>

<!-- Age -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_age">Age <b class="text-danger">*</b></label>
            <span class="form-note">Enter the age here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_age" name="inp_age" required placeholder="Enter Age">
    </div>
</div>

<!-- Education Attainment -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_educ_attain">Education Attainment <b class="text-danger">*</b></label>
            <span class="form-note">Enter the education level here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_educ_attain" name="inp_educ_attain" required
            maxlength="255" placeholder="Enter Education Attainment">
    </div>
</div>

<!-- Occupation -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_occupation">Occupation <b class="text-danger">*</b></label>
            <span class="form-note">Enter the occupation here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_occupation" name="inp_occupation" required
            maxlength="255" placeholder="Enter Occupation">
    </div>
</div>

<!-- Address Fields -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_address_no">House/Building No. <b class="text-danger">*</b></label>
            <span class="form-note">Enter the house/building number here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_address_no" name="inp_address_no" required
            maxlength="255" placeholder="Enter House/Building No.">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_address_street">Street <b class="text-danger">*</b></label>
            <span class="form-note">Enter the street name here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_address_street" name="inp_address_street" required
            maxlength="255" placeholder="Enter Street Name">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_address_barangay">Barangay <b class="text-danger">*</b></label>
            <span class="form-note">Enter the barangay here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_address_barangay" name="inp_address_barangay" required
            maxlength="255" placeholder="Enter Barangay">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_address_city">City/Municipality <b class="text-danger">*</b></label>
            <span class="form-note">Enter the city or municipality here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_address_city" name="inp_address_city" required
            maxlength="255" placeholder="Enter City/Municipality">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_address_province">Province <b class="text-danger">*</b></label>
            <span class="form-note">Enter the province here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_address_province" name="inp_address_province" required
            maxlength="255" placeholder="Enter Province">
    </div>
</div>

<!-- Contact Number -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_contact_number">Contact Number <b class="text-danger">*</b></label>
            <span class="form-note">Enter the contact number here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_contact_number" name="inp_contact_number" required
            maxlength="255" placeholder="Enter Contact Number">
    </div>
</div>

<!-- Civil Status -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_civil_status">Civil Status <b class="text-danger">*</b></label>
            <span class="form-note">Enter the civil status here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_civil_status" name="inp_civil_status" required
            maxlength="255" placeholder="Enter Civil Status">
    </div>
</div>

<!-- Religion -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_religion">Religion <b class="text-danger">*</b></label>
            <span class="form-note">Enter the religion here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_religion" name="inp_religion" required maxlength="255"
            placeholder="Enter Religion">
    </div>
</div>

<!-- Spouse Name Fields -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_spouse_last">Spouse Last Name <b class="text-danger">*</b></label>
            <span class="form-note">Enter the spouse's last name here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_spouse_last" name="inp_spouse_last" required
            maxlength="255" placeholder="Enter Spouse Last Name">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_spouse_given">Spouse Given Name <b class="text-danger">*</b></label>
            <span class="form-note">Enter the spouse's given name here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_spouse_given" name="inp_spouse_given" required
            maxlength="255" placeholder="Enter Spouse Given Name">
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_spouse_mi">Spouse Middle Initial <b class="text-danger">*</b></label>
            <span class="form-note">Enter the spouse's middle initial here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_spouse_mi" name="inp_spouse_mi" required maxlength="255"
            placeholder="Enter Spouse Middle Initial">
    </div>
</div>

<!-- Spouse Date of Birth -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_spouse_dob">Spouse Date of Birth <b class="text-danger">*</b></label>
            <span class="form-note">Enter the spouse's date of birth here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="date" class="form-control" id="inp_spouse_dob" name="inp_spouse_dob" required
            placeholder="Enter Spouse Date of Birth">
    </div>
</div>

<!-- Spouse Age -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_spouse_age">Spouse Age <b class="text-danger">*</b></label>
            <span class="form-note">Enter the spouse's age here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_spouse_age" name="inp_spouse_age" required
            placeholder="Enter Spouse Age">
    </div>
</div>

<!-- Spouse Occupation -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_spouse_occupation">Spouse Occupation <b
                    class="text-danger">*</b></label>
            <span class="form-note">Enter the spouse's occupation here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_spouse_occupation" name="inp_spouse_occupation" required
            maxlength="255" placeholder="Enter Spouse Occupation">
    </div>
</div>

<!-- Number of Living Children -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_no_of_living_children">No. of Living Children <b
                    class="text-danger">*</b></label>
            <span class="form-note">Enter the number of living children here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="number" class="form-control" id="inp_no_of_living_children" name="inp_no_of_living_children"
            required placeholder="Enter No. of Living Children">
    </div>
</div>

<!-- Plan to Have More Children -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_plan_to_have_more_children">Plan to Have More Children <b
                    class="text-danger">*</b></label>
            <span class="form-note">Specify if planning to have more children.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_plan_to_have_more_children" name="inp_plan_to_have_more_children"
            required>
            <option value="">--Select Type--</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
</div>

<!-- Average Monthly Income -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_average_monthly_income">Average Monthly Income <b
                    class="text-danger">*</b></label>
            <span class="form-note">Enter the average monthly income here.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <input type="text" class="form-control" id="inp_average_monthly_income" name="inp_average_monthly_income"
            required maxlength="255" placeholder="Enter Average Monthly Income">
    </div>
</div>

<!-- Type of Client -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_type_of_client">Type of Client <b class="text-danger">*</b></label>
            <span class="form-note">Specify the type of client.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_type_of_client" name="inp_type_of_client" required>
            <option value="">--Select Type--</option>
            <option value="new_acceptor">New Acceptor</option>
            <option value="current_user">Current User</option>
            <option value="changing_clinic">Changing Clinic</option>
            <option value="changing_method">Changing Method</option>
            <option value="dropout_restart">Dropout/Restart</option>
        </select>
    </div>
</div>

<!-- Reason for Family Planning -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_reason_for_fp">Reason for Family Planning <b
                    class="text-danger">*</b></label>
            <span class="form-note">Select the reason for family planning.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_reason_for_fp" name="inp_reason_for_fp" required>
            <option value="">--Select Reason--</option>
            <option value="spacing">Spacing</option>
            <option value="limiting">Limiting</option>
            <option value="others">Others</option>
        </select>
    </div>
</div>

<!-- Method Currently Used -->
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_method_currently_used">Method Currently Used <b
                    class="text-danger">*</b></label>
            <span class="form-note">Specify the method currently used.</span>
        </div>
    </div>
    <div class="col-lg-7">
        <select class="form-control" id="inp_method_currently_used" name="inp_method_currently_used" required>
            <option value="">--Select Method--</option>
            <option value="coc">COC</option>
            <option value="pop">POP</option>
            <option value="injectable">Injectable</option>
            <option value="iud_interval">IUD Interval</option>
            <option value="iud_post_partum">IUD Post-partum</option>
            <option value="condom">Condom</option>
            <option value="bom_cmm">BOM/CMM</option>
            <option value="bbt">BBT</option>
            <option value="stm">STM</option>
            <option value="sdm">SDM</option>
            <option value="lam">LAM</option>
            <option value="others">Others</option>
        </select>
    </div>
</div>
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <!-- Empty for spacing -->
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
