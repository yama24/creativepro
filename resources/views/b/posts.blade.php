@extends('b._layout')
@section('content')
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-description">
                            <h1>{{ $title }}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title float-start">
                                    Post Lists
                                </h5>
                                <a href="/makeapost" class="btn btn-success btn-style-light btn-sm float-end"><i
                                        class="material-icons">add</i>Create Post</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Hero Image</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = ($posts->currentPage() - 1) * 10 + 1; ?>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <th scope="row">{{ $no }}</th>
                                                <td>{{ $post->title }}</td>
                                                <td><img src="{{ asset(Storage::url('posts/' . $post->image)) }}"
                                                        alt="{{ $post->title }}" class="img-fluid" width="200px">
                                                </td>
                                                <td>
                                                    <span class="badge rounded-pill badge-primary">C :
                                                        {{ date('d M Y H:i', strtotime($post->created_at)) }}</span><br>
                                                    <span class="badge rounded-pill badge-success">P :
                                                        {{ $post->published_at ? date('d M Y H:i', strtotime($post->published_at)) : 'Not published yet' }}</span><br>
                                                    <span class="badge rounded-pill badge-warning">U :
                                                        {{ date('d M Y H:i', strtotime($post->updated_at)) }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge rounded-pill badge-danger">{{ $post->category->name }}</span><br>
                                                    <small>by : {{ $post->author->name }}</small>
                                                </td>
                                                <td>
                                                    <a href="/read/{{ $post->slug }}" target="_blank"
                                                        class="mb-1 btn btn-sm btn-rounded btn-style-light btn-warning"><i
                                                            class="material-icons">visibility</i>Read</a>
                                                    <button type="button"
                                                        class="mb-1 btn btn-sm btn-rounded btn-style-light btn-primary"><i
                                                            class="material-icons">edit</i>Edit</button>
                                                    <button type="button" onclick="deletePost({{ $post->id }})"
                                                        class="mb-1 btn btn-sm btn-rounded btn-style-light btn-danger"><i
                                                            class="material-icons">delete</i>Delete</button>
                                                    <button type="button"
                                                        onclick="publishPost({{ $post->id }}, {{ $post->published_at ? 'false' : 'true' }})"
                                                        class="mb-1 btn btn-sm btn-rounded btn-style-light btn-success"><i
                                                            class="material-icons">{{ $post->published_at ? 'download' : 'publish' }}</i>{{ $post->published_at ? 'Unpublish' : 'Publish' }}</button>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                @if ($posts->hasPages())
                                    <div class="float-end">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <?php
                                                $startPage = $posts->currentPage() - 2 < 1 ? 1 : $posts->currentPage() - 2;
                                                $endPage = $posts->currentPage() + 2 > $posts->lastPage() ? $posts->lastPage() : $posts->currentPage() + 2;
                                                if ($startPage == 1 && $endPage < 5) {
                                                    if ($posts->lastPage() > 5) {
                                                        $endPage = 5;
                                                    } else {
                                                        $endPage = $posts->lastPage();
                                                    }
                                                }
                                                if ($endPage - $startPage + 1 < 5) {
                                                    if ($posts->lastPage() > 5) {
                                                        $startPage = $endPage - 4;
                                                    } else {
                                                        $startPage = $endPage - $posts->lastPage() + 1;
                                                    }
                                                }
                                                ?>
                                                {!! $startPage == 1 ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->url(1) . '">First</a></li>' !!}
                                                {!! $posts->onFirstPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->previousPageUrl() . '">Previous</a></li>' !!}
                                                @foreach ($posts->getUrlRange($startPage, $endPage) as $key => $val)
                                                    <li class="page-item {!! $posts->currentPage() == $key ? 'active' : '' !!}"><a class="page-link"
                                                            href="{{ $val }}">{{ $key }}</a></li>
                                                @endforeach
                                                {!! $posts->currentPage() == $posts->lastPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->nextPageUrl() . '">Next</a></li>' !!}
                                                {!! $endPage == $posts->lastPage() ? '' : '<li class="page-item"><a class="page-link" href="' . $posts->url($posts->lastPage()) . '">Last</a></li>' !!}
                                            </ul>
                                        </nav>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function deletePost(id) {
            Swal.fire({
                title: 'Do you want to delete the post?',
                showCancelButton: true,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = '/deletepost/' + id;
                }
            })

        }

        function publishPost(id, mode) {
            if (mode) {
                Swal.fire({
                    title: 'Do you want to publish the post?',
                    showCancelButton: true,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = '/publishpost/' + id;
                    }
                })
            } else {
                Swal.fire({
                    title: 'Do you want to unpublish the post?',
                    showCancelButton: true,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = '/unpublishpost/' + id;
                    }
                })
            }
        }
        @if (session('success'))
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
            timerProgressBar: 'success',
            },
            didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })
        
            Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
            })
        @endif
    </script>
@endsection
