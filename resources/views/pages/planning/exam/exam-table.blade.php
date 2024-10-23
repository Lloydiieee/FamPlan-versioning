<div class="py-12 pt-4">
    @if ($errors->any())
        <div class="alert alert-pro alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Weight</th>
                <th>Height</th>
                <th>Blood Pressure</th>
                <th>Pulse Rate</th>
                <th>Skin Condition</th>
                <th>Conjunctiva Condition</th>
                <th>Neck Condition</th>
                <th>Breast Condition</th>
                <th>Abdomen Condition</th>
                <th>Extremities Condition</th>
                <th>Pelvic Mass</th>
                <th>Pelvic Abnormal Discharge</th>
                <th>Pelvic Cervical Abnormalities</th>
                <th>Pelvic Warts</th>
                <th>Pelvic Polyp/Cyst</th>
                <th>Pelvic Inflammation/Erosion</th>
                <th>Pelvic Bloody Discharge</th>
                <th>Pelvic Cervical Consistency</th>
                <th>Pelvic Cervical Tenderness</th>
                <th>Adnexal Mass/Tenderness</th>
                <th>Uterine Position</th>
                <th>Uterine Depth (cm)</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->exm_weight }}</td>
                    <td>{{ $data->exm_height }}</td>
                    <td>{{ $data->exm_blood_pressure }}</td>
                    <td>{{ $data->exm_pulse_rate }}</td>
                    <td>{{ $data->exm_skin }}</td>
                    <td>{{ $data->exm_conjunctiva }}</td>
                    <td>{{ $data->exm_neck }}</td>
                    <td>{{ $data->exm_breast }}</td>
                    <td>{{ $data->exm_abdomen }}</td>
                    <td>{{ $data->exm_extremities }}</td>
                    <td>{{ $data->exm_pelvic_mass }}</td>
                    <td>{{ $data->exm_pelvic_abnormal_discharge }}</td>
                    <td>{{ $data->exm_pelvic_cervical_abnormalities }}</td>
                    <td>{{ $data->exm_pelvic_warts }}</td>
                    <td>{{ $data->exm_pelvic_polyp_or_cyst }}</td>
                    <td>{{ $data->exm_pelvic_inflammation_or_erosion }}</td>
                    <td>{{ $data->exm_pelvic_bloody_discharge }}</td>
                    <td>{{ $data->exm_pelvic_cervical_consistency }}</td>
                    <td>{{ $data->exm_pelvic_cervical_tenderness }}</td>
                    <td>{{ $data->exm_pelvic_adnexal_mass_tenderness }}</td>
                    <td>{{ $data->exm_uterine_position }}</td>
                    <td>{{ $data->exm_uterine_depth }}</td>
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
