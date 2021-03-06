@extends('common.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Target ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Width</th>
                            <th scope="col">Active Flag</th>
                            <th scope="col">Tracking Rating</th>
                            <th scope="col">Reco Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $data->target_id }}</td>
                            <td>{{ $data->name }}</a></td>
                            <td>{{ $data->width }}</a></td>
                            <td>{{ $data->active_flag }}</a></td>
                            <td>{{ $data->tracking_rating }}</a></td>
                            <td>{{ $data->reco_rating }}</a></td>
                        </tr>
                    </tbody>
                </table>

                <form id="formUpload" method="post" action="{{ route('admingetUpdate', $id) }}" enctype="multipart/form-data">

                    @include('common.message')

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Image name" required value="{{ $data->name }}">
                            </div>
                            <div class="col">
                                <input type="number" min="10" name="width" class="form-control" value="{{ $data->width }}" placeholder="Image width">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="fbx_file" class="form-control" id="fbx" value="{{ $imageTarget->fbx_file }}" placeholder="FBX File URL">
                            </div>
                            <div class="col">
                                <input type="text" name="image_metadata" class="form-control" placeholder="Image Metadata">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control-file" id="image">
                            </div>
                            <div class="col">
                                {{--  <input type="text" name="image_metedata" class="form-control" placeholder="Image Metadata">  --}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">
                            Upload
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection