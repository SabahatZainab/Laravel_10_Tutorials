<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>TodoList</title>
  </head>
  <body>
    <div class="container">
        <div class="row" style="margin:100px;">
            <h5 style="background: rgb(148, 143, 143); color: black; font-weight: bold; text-align: center; margin:10px; padding: 10px;">Todo List</h5>
            <div class="col-6">
                <form action = "{{route('store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label"><b>Title:</b></label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><b>Description</b></label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6">
                <table class="table table-hover">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th colspan="3" style="text-align: center;">Action</th>
                    </tr>
                    @if ($todolist)
                        @foreach ($todolist as $list)
                            <tr>
                                <td>{{ $list->title }}</td>
                                <td>{{ $list->description }}</td>
                                <td>
                                  <a href="#" class="btn btn-info btn-sm" onclick="viewData('{{ $list->title }}','{{ $list->description }}')"
                                    data-toggle="modal" data-target="#View_todolist">
                                    <i class="fa-regular fa-pen-to-square"></i> View
                                  </a>

                                </td>
                                <td>
                                  <a href="#" class="btn btn-success btn-sm" onclick="updateData({{$list->id}},'{{ $list->title }}','{{ $list->description }}')"
                                    data-toggle="modal" data-target="#Update_todolist">
                                    <i class="fa-regular fa-pen-to-square"></i> Update
                                  </a>
                                </td>
                                <td><a href="{{route('delete',$list->id)}}"class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                    @endif

                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="View_todolist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Todo List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 id="titleView">Todo List Title</h5>
                    <p id="descriptionView">Todo List Description</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="Update_todolist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Todo List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('update') }}" id="up_form">
                    @csrf
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="mb-3">
                        <label for="title" class="form-label"><b>Title:</b></label>
                        <input type="text" class="form-control" id="update_title" name="update_title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label"><b>Description</b></label>
                        <input type="text" class="form-control" id="update_description" name="update_description">
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
      <script>
          function viewData(title, description) {
              $('#View_todolist').modal('show');
  
              document.getElementById('titleView').innerHTML = title;
              document.getElementById('descriptionView').innerHTML = description;
  
          }
          function updateData(id, title, description){
            $('#Update_todolist').modal('show');
  
            $('#id').val(id)
            $('#update_title').val(title)
            $('#update_description').val(description)
  
          }
      </script>
  </body>
  </html>