@extends('layouts.main')

@section('content')
    <!-- CONTENT HEADER -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Useful Links</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.usefullinks.index')}}">Useful Links</a></li>
                        <li class="breadcrumb-item"><a class="text-muted" href="{{route('admin.usefullinks.edit' , $link->id)}}">Edit</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTENT HEADER -->

    <!-- MAIN CONTENT -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('admin.usefullinks.update' , $link->id)}}" method="POST">
                                @csrf
                                @method('PATCH')


                                <div class="form-group">
                                    <label for="icon">Icon class name</label>
                                    <input value="{{$link->icon}}" id="icon" name="icon"
                                           type="text"
                                           placeholder="fas fa-user"
                                           class="form-control @error('icon') is-invalid @enderror"
                                           required="required">
                                    <div class="text-muted">
                                        You can find available free icons <a target="_blank"
                                                                             href="https://fontawesome.com/v5.15/icons?d=gallery&p=2">here</a>
                                    </div>
                                    @error('icon')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input value="{{$link->title}}" id="title" name="title"
                                           type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           required="required">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input value="{{$link->link}}" id="link" name="link"
                                           type="text"
                                           class="form-control @error('link') is-invalid @enderror"
                                           required="required">
                                    @error('link')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description"
                                              name="description"
                                              type="text"
                                              class="form-control @error('description') is-invalid @enderror">
                                        {{$link->description}}
                                    </textarea>
                                    @error('description')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>



                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END CONTENT -->

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Summernote
            $('#description').summernote({
                height: 100,
                toolbar: [
                    [ 'style', [ 'style' ] ],
                    [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                    [ 'fontname', [ 'fontname' ] ],
                    [ 'fontsize', [ 'fontsize' ] ],
                    [ 'color', [ 'color' ] ],
                    [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                    [ 'table', [ 'table' ] ],
                    [ 'insert', [ 'link'] ],
                    [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
                ]
            })
        })
    </script>

@endsection
