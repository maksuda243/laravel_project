@extends('backend.layouts.app')
@section('title', trans('Applied Job '))

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Applied Jobs</h2>
                {{-- <div class="card-header-action float-right">
                    <a href="{{ route('employer_user.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> {{ trans('Add Employer') }}
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
                                    <th scope="col">{{ __('Job ID') }}</th>
                                    <th scope="col">{{ __('Jobseeker ID') }}</th>
                                     <th scope="col">{{ __('Seen') }}</th>
                                     <th scope="col">{{ __('Status') }}</th>
                                    <!-- <th class="text-center">{{ __('Action') }}</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($applyjob as $p)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $p->job_id }}</td>
                                    <td>{{ $p->jobseeker_id }}</td>
                                    <td>{{ $p->seen}}</td>
                                    <td>{{ $p->status }}</td>
                                    
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
