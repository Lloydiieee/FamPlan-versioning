<div class="py-12 pt-4">
    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Date of Visit</th>
                <th>Medical Findings</th>
                <th>Method Accepted</th>
                <th>Service Provider</th>
                <th>Follow-Up Date</th>
                <th>Question 1</th>
                <th>Question 2</th>
                <th>Question 3</th>
                <th>Question 4</th>
                <th>Question 5</th>
                <th>Question 6</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->c_date_of_visit }}</td>
                    <td>{{ $data->c_medical_findings }}</td>
                    <td>{{ $data->c_method_accepted }}</td>
                    <td>{{ $data->c_name_of_service_provider }}</td>
                    <td>{{ $data->c_date_of_follow_up_visit }}</td>
                    <td>{{ $data->c_quetsion_1 }}</td>
                    <td>{{ $data->c_question_2 }}</td>
                    <td>{{ $data->c_question_3 }}</td>
                    <td>{{ $data->c_question_4 }}</td>
                    <td>{{ $data->c_question_5 }}</td>
                    <td>{{ $data->c_question_6 }}</td>
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
