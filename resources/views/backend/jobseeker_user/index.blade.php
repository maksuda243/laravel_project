@extends('backend.layouts.app')
@section('title', trans('Job Seeker Users'))

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Job Seeker Users</h2>
                {{-- <div class="card-header-action float-right">
                    <a href="{{ route('jobseeker_user.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> {{ trans('Add Jobseeker') }}
                    </a>
                </div> --}}
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('#SL') }}</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __("Father's name") }}</th>
                                    <th scope="col">{{ __("Mothers's name") }}</th>
                                    <th scope="col">{{ __("Date of Birth") }}</th>
                                    <th scope="col">{{ __("Gender") }}</th>
                                    <th scope="col">{{ __("Religion") }}</th>
                                    <th scope="col">{{ __("Nationality") }}</th>
                                    <th scope="col">{{ __("Marital Status") }}</th>
                                    <th scope="col">{{ __("Nationl_ID") }}</th>
                                    <th scope="col">{{ __("Present Address") }}</th>
                                    <th scope="col">{{ __("Permanent Address") }}</th>
                                    <th scope="col">{{ __("Contact No") }}</th>
                                    <th scope="col">{{ __("Job Nature") }}</th>
                                    <th scope="col">{{ __("Job Level") }}</th>
                                    <th scope="col">{{ __("Expected Salary") }}</th>
                                    <th scope="col">{{ __("Job Category") }}</th>
                                    <th scope="col">{{ __("Organization Type") }}</th>
                                    <th scope="col">{{ __("Preferred Job Location") }}</th>
                                    <th scope="col">{{ __("Education") }}</th>
                                    <th scope="col">{{ __("Career Objective") }}</th>
                                    <th scope="col">{{ __("Skill") }}</th>
                                    <!-- <th class="text-center">{{ __('Action') }}</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($userJobseeker as $p)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->father_name }}</td>
                                    <td>{{ $p->mother_name }}</td>
                                    <td>{{ $p->date_of_birth }}</td>
                                    <td>{{ $p->gender }}</td>
                                    <td>{{ $p->religion}}</td>
                                    <td>{{ $p->nationality}}</td>
                                    <td>{{ $p->marital_status}}</td>
                                    <td>{{ $p->national_id}}</td>
                                    <td>{{ $p->present_address}}</td>
                                    <td>{{ $p->permanent_address}}</td>
                                    <td>{{ $p->contact_no }}</td>
                                    <td>{{ $p->job_nature }}</td>
                                    <td>{{ $p->job_level }}</td>
                                    <td>{{ $p->expected_salary }}</td>
                                    <td>{{ $p->job_category }}</td>
                                    <td>{{ $p->organization_type }}</td>
                                    <td>{{ $p->location }}</td>
                                    <td>{{ $p->education }}</td>
                                    <td>{{ $p->career_objective }}</td>
                                    <td>{{ $p->skill }}</td>
                                    
                                    <!-- <td class="text-center">
                                        <a href="{{ route('jobseeker_user.edit', encryptor('encrypt', $p->id)) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteUser('{{ $p->id }}')" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $p->id }}" action="{{ route('jobseeker_user.destroy', encryptor('encrypt', $p->id)) }}" method="post" style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td> -->
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">{{ __('No User Found') }}</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- JavaScript Function to Confirm Deletion -->
<script>
    function deleteUser(userId) {
        if (confirm("Are you sure you want to delete this user?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + userId).submit();
        }
    }
</script>

@endsection
