@extends('layout.admin')
@section('content')


<div class="home_content">
    <div class="content2">
        <h3>Create Book</h3>
        <div class="formbook">
            <div class="formbookcontent">
                <div class="titleform">
                    <h4>Form Create</h4>
                </div>
                <form method="POST" action="{{ route('storeCategory') }}">
                    @csrf
                    <div class="mt-3">
                        <div class="titleinput">
                            <label for="">Title</label>
                        </div>
                            <input type="text" class="form-control" name="categoryName">    
                        

                        <div class="submit">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Title</th>
                </tr>
            </thead>
     
     
            <tbody>
                @foreach($categories as $number => $category)
                <tr>
                    <td>{{ $number+1 }}</td>
                    <td>{{ $category['categoryID'] }}</td>
                    <td>{{ $category['categoryName'] }}</td>
                    <td>
                        <a href="{{ route('destroyCategory', $category->categoryID) }}"><div class="btn btn-danger">Delete</div></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<script>

    $(document).ready(function() {
        $('.table-paginate').dataTable();
     } );
    
    </script>

@endsection