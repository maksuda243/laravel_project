@extends('backend.layouts.app')
@section('title', trans('Employer User '))

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Employer User</h2>
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
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Company Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Contact No') }}</th>
                                     <th scope="col">{{ __('Designation') }}</th>
                                    <th scope="col">{{ __('Company Address') }}</th>
                                    <th scope="col">{{ __('Years of Establishment') }}</th>
                                    <th scope="col">{{ __('Industry') }}</th>
                                    <th scope="col">{{ __('Organization Type') }}</th>
                                    <th scope="col">{{ __('Company Description') }}</th>
                                    <th scope="col">{{ __('Website URL') }}</th>
                                    <!-- <th class="text-center">{{ __('Action') }}</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($useremployer as $p)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->company_name }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->contact_no }}</td>
                                    <td>{{ $p->designation }}</td>
                                    <td>{{ $p->address }}</td>
                                    <td>{{ $p->years_of_establishment }}</td>
                                    <td>{{ $p->industry }}</td>
                                    <td>{{ $p->organization_type }}</td>
                                    <td>{{ $p->company_description }}</td>
                                    <td>{{ $p->website_url }}</td>
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
