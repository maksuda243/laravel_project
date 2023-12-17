@extends('employeruser.layout.app')
@section('title', trans('Posted Job List'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                {{-- <h2>Employer Dashboard</h2> --}}
            </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('#SL') }}</th>
                                    <th scope="col">{{ __('Company Name') }}</th>
                                    <th scope="col">{{ __('No. of Vacancies') }}</th>
                                    <th scope="col">{{ __('Job Title') }}</th>
                                    <th scope="col">{{ __('Industry') }}</th>
                                    <th scope="col">{{ __('Job Nature') }}</th>
                                    <th scope="col">{{ __('Job Level') }}</th>
                                    <th scope="col">{{ __('Location') }}</th>
                                    <th scope="col">{{ __('Salary') }}</th>
                                    <th scope="col">{{ __('Start Date') }}</th>
                                    <th scope="col">{{ __('Deadline') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $p)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $p->company_name }}</td>
                                    <td>{{ $p->no_of_vacancies }}</td>
                                    <td>{{ $p->job_title }}</td>
                                    <td>{{ $p->job_categories}}</td>
                                    <td>{{ $p->job_nature}}</td>
                                    <td>{{ $p->job_level}}</td>
                                    <td>{{ $p->location}}</td>
                                    <td>{{ $p->salary}}</td>
                                    <td>{{ $p->application_start_date}}</td>
                                    <td>{{ $p->application_deadline}}</td>
                                   
                                    <td class="text-center">
                                        <a class="text-dark" href="{{ route('job_post.edit', encryptor('encrypt', $p->id)) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="text-dark" href="javascript:void(0)" onclick="deleteUser('{{ $p->id }}')">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $p->id }}" action="{{ route('job_post.destroy', encryptor('encrypt', $p->id)) }}" method="post" style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">{{ __('No jobpost Found') }}</td>
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
