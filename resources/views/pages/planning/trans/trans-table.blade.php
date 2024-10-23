<div class="py-12 pt-4">
    @if ($errors->any())
        <div class="alert alert-danger">
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
                <th>Abnormal Discharge</th>
                <th>Discharge From</th>
                <th>Sores or Ulcers</th>
                <th>Genital Pain</th>
                <th>Treatment for STIs</th>
                <th>HIV/AIDS or Pelvic Disease</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->trans_abnormal_discharge ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->trans_discharge_from }}</td>
                    <td>{{ $data->trans_sores_or_ulcers ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->trans_genital_pain ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->trans_treatment_for_stis ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->trans_hiv_aids_pelvic_disease ? 'Yes' : 'No' }}</td>
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
