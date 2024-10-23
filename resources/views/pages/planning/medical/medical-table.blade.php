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
                <th>Severe Headaches/Migraine</th>
                <th>History of Stroke/Heart Attack/Hypertension</th>
                <th>Non-Traumatic Hematoma/Frequent Bruising</th>
                <th>History of Breast Cancer/Mass</th>
                <th>Severe Chest Pain</th>
                <th>Cough More Than 14 Days</th>
                <th>Jaundice</th>
                <th>Unexplained Vaginal Bleeding</th>
                <th>Abnormal Vaginal Discharge</th>
                <th>Anti-Seizure or Rifampicin</th>
                <th>Smoker</th>
                <th>Disability</th>
                <th>Disability Details</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->med_severe_headaches_migraine }}</td>
                    <td>{{ $data->med_history_of_stroke_heart_attack_hypertension }}</td>
                    <td>{{ $data->med_non_traumatic_hematoma_frequent_bruising }}</td>
                    <td>{{ $data->med_history_of_breast_cancer_mass }}</td>
                    <td>{{ $data->med_severe_chest_pain }}</td>
                    <td>{{ $data->med_cough_more_than_14_days }}</td>
                    <td>{{ $data->med_jaundice }}</td>
                    <td>{{ $data->med_unexplained_vaginal_bleeding }}</td>
                    <td>{{ $data->med_abnormal_vaginal_discharge }}</td>
                    <td>{{ $data->med_anti_seizure_or_rifampicin }}</td>
                    <td>{{ $data->med_smoker }}</td>
                    <td>{{ $data->med_disability }}</td>
                    <td>{{ $data->med_disability_details }}</td>
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
