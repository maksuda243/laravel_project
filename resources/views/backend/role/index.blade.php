@extends('backend.layouts.app')
@section('title',trans('Role'))
@section('page',trans('List'))
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
                        <a href="{{route('role.create')}}" class="btn btn-primary">
                            <i class="fa fa-plus"></i> {{ trans('Add Role') }}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('#SL') }}</th>
                                    <th scope="col">{{__('Name')}}</th>
                                    <th scope="col">{{__('Identity')}}</th>
                                    <th class="text-center">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($data as $p)
                                <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->name}}</td>
                                <td>{{$p->identity}}</td>

                                    <td class="text-center">
                                        <a href="{{ route('role.edit', encryptor('encrypt', $p->id)) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-unlock"></i>
                                        </a>
                                        <a href="{{ route('permission.list', encryptor('encrypt', $p->id)) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="deleteUser('{{ $p->id }}')" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-form-{{ $p->id }}" action="{{ route('role.destroy', encryptor('encrypt', $p->id)) }}" method="post" style="display: none;">
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

@endsection
