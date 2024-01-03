@extends('backend.layouts.app')
@section('title', trans('Blog List'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Blog List</h2>
                <div class="card-header-action float-right">
                    <a href="{{ route('blog.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> {{ trans('Add Blog') }}
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">{{ __('#SL') }}</th>
                                        <th scope="col">{{ __('Blog Title') }}</th>
                                        <th scope="col">{{ __('Short Description') }}</th>
                                        <th scope="col">{{ __('Descriiption') }}</th>
                                        <th scope="col">{{ __('Image') }}</th>
                                        <th scope="col">{{ __('Category') }}</th>
                                        <th scope="col">{{ __('Author') }}</th>
                                        <th scope="col">{{ __('Publish Date') }}</th>
                                        <th class="text-center">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($blog as $b)
                                    <tr>
                                        <td>{{ ++$loop->index }}</td>
                                        <td>{{ $b->title }}</td>
                                        <td>{{ $b->short_description }}</td>
                                        <td>{{ $b->description }}</td>
                                        <td><img width="50px" src="{{ asset('public/uploads/blog/'.$b->image) }}" alt=""></td>
                                        <td>{{ $b->category }}</td>
                                        <td>{{ $b->author }}</td>
                                        <td>{{ $b->publish_date }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('blog.edit', $b->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="deleteBlog('{{ $b->id }}')" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $b->id }}" action="{{ route('blog.destroy', $b->id) }}" method="post" style="display: none;">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">{{ __('No Blog Found') }}</td>
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
    function deleteBlog(blogId) {
        if (confirm("Are you sure you want to delete this blog?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + blogId).submit();
        }
    }
</script>

@endsection
