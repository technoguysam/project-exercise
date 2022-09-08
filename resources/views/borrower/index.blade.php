@extends('layouts.app')

@section('title','Dashboard')


@section('content')

    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Borrower List</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Borrower List</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>




            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">

                                    <a href="{{Route('borrowercreate')}}">
                                        <button type="button" class="btn btn-success">Create Borrower</button>
                                    </a>


                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>

                                            <th>Id</th>
                                            <th>Steps</th>
                                            <th>Legal Business Name</th>
                                            <th>Email</th>
                                            <th>DOB</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($borrowershow as $values )

                                            <tr>

                                                <td>{{$values->id}}</td>
                                                <td>{{$values->steps}}</td>
                                                <td>{{$values->legal_business_name}}</td>
                                                <td>{{$values->email}}</td>
                                                <td>{{$values->dob}}</td>
                                                <td width="200px"><a href="{{ route('updateborrower',$values->id)}}"><button type="button" class="btn btn-block btn-info">Edit</button></a></td>
                                                <td width="200px"><a href="{{ route('deleteborrower',$values->id)}}"><button type="button" class="btn btn-block btn-danger">Delete</button></a></td>

                                            </tr>

                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->



@endsection;
