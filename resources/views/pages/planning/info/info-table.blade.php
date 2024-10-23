<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Client ID</th>
                <th>Philhealth No</th>
                <th>4Ps</th>
                <th>NHTS</th>
                <th>Last Name</th>
                <th>Given Name</th>
                <th>Middle Initial</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Educational Attainment</th>
                <th>Occupation</th>
                <th>Address No</th>
                <th>Street</th>
                <th>Barangay</th>
                <th>City</th>
                <th>Province</th>
                <th>Contact Number</th>
                <th>Civil Status</th>
                <th>Religion</th>
                <th>Spouse Last Name</th>
                <th>Spouse Given Name</th>
                <th>Spouse Middle Initial</th>
                <th>Spouse Date of Birth</th>
                <th>Spouse Age</th>
                <th>Spouse Occupation</th>
                <th>No. of Living Children</th>
                <th>Plan to Have More Children</th>
                <th>Average Monthly Income</th>
                <th>Reason for FP</th>
                <th>Type of Client</th>
                <th>Method Currently Used</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->info_client_id }}</td>
                    <td>{{ $data->info_philhealth_no }}</td>
                    <td>{{ $data->info_4ps }}</td>
                    <td>{{ $data->info_nhts }}</td>
                    <td>{{ $data->info_name_last }}</td>
                    <td>{{ $data->info_name_given }}</td>
                    <td>{{ $data->info_name_mi }}</td>
                    <td>{{ $data->info_dob }}</td>
                    <td>{{ $data->info_age }}</td>
                    <td>{{ $data->info_educ_attain }}</td>
                    <td>{{ $data->info_occupation }}</td>
                    <td>{{ $data->info_address_no }}</td>
                    <td>{{ $data->info_address_street }}</td>
                    <td>{{ $data->info_address_barangay }}</td>
                    <td>{{ $data->info_address_city }}</td>
                    <td>{{ $data->info_address_province }}</td>
                    <td>{{ $data->info_contact_number }}</td>
                    <td>{{ $data->info_civil_status }}</td>
                    <td>{{ $data->info_religion }}</td>
                    <td>{{ $data->info_spouse_last }}</td>
                    <td>{{ $data->info_spouse_given }}</td>
                    <td>{{ $data->info_spouse_mi }}</td>
                    <td>{{ $data->info_spouse_dob }}</td>
                    <td>{{ $data->info_spouse_age }}</td>
                    <td>{{ $data->info_spouse_occupation }}</td>
                    <td>{{ $data->info_no_of_living_children }}</td>
                    <td>{{ $data->info_plan_to_have_more_children }}</td>
                    <td>{{ $data->info_average_monthly_income }}</td>
                    <td>{{ $data->info_reason_for_fp }}</td>
                    <td>{{ $data->info_type_of_client }}</td>
                    <td>{{ $data->info_method_currently_used }}</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <!-- Edit Button -->
                        <button class="btn btn-xs btn-light bg-white text-dark me-3">
                            <em class="icon ni ni-edit"></em>
                        </button>
                        <button type="submit" class="btn btn-xs btn-block btn-danger">
                            <em class="icon ni ni-trash"></em>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
