@extends('backend.layouts.app')
@section('title', trans('Users List'))

@section('content')

<!-- Enhanced Bordered table -->
<section class="p-3">
    <div class="container">
     <div class="row" id="table-bordered">
        <div class="col-lg-10 offset-lg-2">
            <div class="card">
                <div class="card-header">
                    <h4>{{ trans('Users List') }}</h4>
                    <div class="card-header-action">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> {{ trans('Add User') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('#SL') }}</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Contact') }}</th>
                                    <th scope="col">{{ __('Role') }}</th>
                                    <th scope="col">{{ __('Image') }}</th>
                                    <th scope="col">{{ __('Status') }}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $p)
                                <tr>
                                    <td>{{ ++$loop->index }}</td>
                                    <td>{{ $p->name_en }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->contact_no_en }}</td>
                                    <td>{{ $p->role ? $p->role->identity : '-' }}</td>
                                    <td><img width="50px" src="{{ asset('public/uploads/users/'.$p->image) }}" alt=""></td>
                                    <td>
                                        @if($p->status == 1)
                                            <span class="badge badge-success">{{ __('Active') }}</span>
                                        @else
                                            <span class="badge badge-secondary">{{ __('Inactive') }}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('user.edit', encryptor('encrypt', $p->id)) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteUser('{{ $p->id }}')" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $p->id }}" action="{{ route('user.destroy', encryptor('encrypt', $p->id)) }}" method="post" style="display: none;">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
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
</section>

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
