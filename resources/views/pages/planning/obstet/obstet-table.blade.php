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
                <th>Total Pregnancies (Gravidity)</th>
                <th>Viable Pregnancies (Parity)</th>
                <th>Full-term Pregnancies</th>
                <th>Premature Births</th>
                <th>Abortions</th>
                <th>Living Children</th>
                <th>Last Delivery Date</th>
                <th>Last Delivery Type</th>
                <th>Last Menstrual Period</th>
                <th>Menstrual Flow</th>
                <th>Dysmenorrhea</th>
                <th>Hydatidiform Mole</th>
                <th>Ectopic Pregnancy</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->obs_gravidity }}</td>
                    <td>{{ $data->obs_parity }}</td>
                    <td>{{ $data->obs_num_full_term }}</td>
                    <td>{{ $data->obs_num_premature }}</td>
                    <td>{{ $data->obs_num_abortion }}</td>
                    <td>{{ $data->obs_num_living_children }}</td>
                    <td>{{ $data->obs_last_delivery_date }}</td>
                    <td>{{ $data->obs_last_delivery_type }}</td>
                    <td>{{ $data->obs_last_menstrual_period }}</td>
                    <td>{{ $data->obs_menstrual_flow }}</td>
                    <td>{{ $data->obs_dysmenorrhea }}</td>
                    <td>{{ $data->obs_hydatidiform_mole }}</td>
                    <td>{{ $data->obs_ectopic_pregnancy }}</td>
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
