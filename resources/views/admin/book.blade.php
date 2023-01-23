@extends('layout.admin')
@section('content')

<head>
    <title>Data Buku</title>
</head>

<div class="home_content">
    <div class="content2">
        <h3>Create Book</h3>
        <div class="formbook">
            <div class="formbookcontent">
                <div class="titleform">
                    <h4>Form Create</h4>
                </div>
                <form method="POST" action="{{ route('storeBook') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="input-group">
                            <div class="titleinput">
                                <label for="">Title</label>
                            </div>
                                <input type="text" class="form-control" name="title">
                            <div class="titleinput" style="margin-left: 20px">
                                <label for="">Writter</label>
                            </div>
                                <input type="text" class="form-control" name="writter">
                        </div>     
                    <div class="input-group">

                        <div class="titleinput">
                            <label for="">Publisher</label>
                        </div>               
                            <input type="text" class="form-control" name="publisher">
                        <div class="titleinput" style="margin-left: 20px">
                        <label for="">No ISBN</label>
                        </div>
                            <input type="text" class="form-control" name="ISBN">
                    </div>
                    <div class="input-group">


                            <div class="titleinput">
                                <label for="">Category Book</label>
                            </div>
                                <select class="form-select" aria-label="Default select example" name="category">
                                    <option hidden disabled selected>Choose Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->categoryID }}">{{ $category['category'] }}</option>
                                    @endforeach
                                </select>
                            <div class="titleinput" style="margin-left: 20px">
                                <label for="">Sinopsis</label>
                            </div>
                                <textarea class="form-control" name="synopsis"></textarea>

                    </div>
                    <div class="titleinput">
                        <input type="file" class="form-control" name="cover_book">
                    </div>

                    <div class="submit">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Book ID</th>
                    <th>Category ID</th>
                    <th>Title</th>
                    <th>Writer</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>Sinopsis</th>
                    <th>Cover Book</th>
                    <th>Action</th>
                </tr>
            </thead>
     
     
            <tbody>
                @foreach ($books as $number => $book)
                <tr>
                    <td>{{ $number +1 }}</td>
                    <td>{{ $book['bookID'] }}</td>
                    <td>{{ $book['category'] }} </td>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['writter'] }}</td>
                    <td>{{ $book['publisher'] }}</td>
                    <td>{{ $book['ISBN'] }}</td>
                    <td>{{ $book['synopsis'] }}</td>
                    <td>
                        <img width="100px" src="/img/{{ $book['cover_book'] }}" alt="">
                    </td>
                    <td>
                        <div class="btn btn-success">Edit</div>
                        <a href="{{ route('destroyBook', $book->bookID) }}"><div class="btn btn-danger">Delete</div></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<script>

    $(document).ready(function() {
        $('.table-paginate').dataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        }); 
     } );
    
    </script>

@endsection