@extends('common.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form id="formUpload" method="post" action="{{ route('adminupload') }}" enctype="multipart/form-data">

                    @include('common.message')

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Image name" required>
                            </div>
                            <div class="col">
                                <input type="number" min="10" name="width" class="form-control" value="300" placeholder="Image width">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="fbx_file" class="form-control" id="fbx" placeholder="FBX File URL">
                            </div>
                            <div class="col">
                                <input type="text" name="image_metedata" class="form-control" placeholder="Image Metadata">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control-file" id="image" required>
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