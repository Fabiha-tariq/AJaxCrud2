<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
</head>

<body class="antialiased">
    <div class="container mt-3">
        <h3>Modal Example</h3>
        <p>Click on the button to open the modal.</p>

        <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Add
            Data
        </a>
    </div>
    <div class="container">
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Passwords</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody id="list_data">
                @foreach ($data as $data)
                    <tr id="list_data{{ $data->id }}">
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->firstname }}</td>
                        <td>{{ $data->lastname }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->password }}</td>
                        <td>
                            <button  data-bs-toggle="modal" data-bs-target="#updateModal" 
                            data-id="{{ $data->id }}"
                            data-firstname="{{ $data->firstname }}"
                            data-lastname="{{ $data->lastname }}"
                            data-email="{{ $data->email }}"
                            data-password="{{ $data->password }}"

                                class="btn btn-success update_data_form">Edit</button>

                                
                            <button type="button"  data-id="{{ $data->id }}"
                                class="btn btn-danger delete_data">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>



   

 @include('add_data_model')
 @include('update_data_model')
   @include('data_js')
  

</body>

</html>
