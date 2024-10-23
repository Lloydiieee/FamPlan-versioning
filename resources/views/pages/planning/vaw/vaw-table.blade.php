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
                <th>Unpleasant Relationship</th>
                <th>Partner Disapproves FP Visit</th>
                <th>History of Domestic Violence</th>
                <th>Referred to DSWD</th>
                <th>Referred to WCPS</th>
                <th>Referred to NGOs</th>
                <th>Referred to Others</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->vaw_unpleasant_relationship }}</td>
                    <td>{{ $data->vaw_partner_disapproves_fp_visit }}</td>
                    <td>{{ $data->vaw_history_of_domestic_violence }}</td>
                    <td>{{ $data->vaw_referred_to_dswd }}</td>
                    <td>{{ $data->vaw_referred_to_wcps }}</td>
                    <td>{{ $data->vaw_referred_to_ngos }}</td>
                    <td>{{ $data->vaw_referred_to_others }}</td>
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
