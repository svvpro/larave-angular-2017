@extends('layouts.site')
@section('content')
    <table class="table table-striped" >
        <thead>
        <tr>
            <th>id</th>
            <th>Surname</th>
            <th>Name</th>
            <th>Email</th>
            <th><button id="btn-add" class="btn btn-success" ng-click="toggle('add', 0)">Добавить</button></th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="supplier in suppliers">
            <th>@{{ supplier.id }}</th>
            <th>@{{ supplier.surname }}</th>
            <th>@{{ supplier.name }}</th>
            <th>@{{ supplier.email }}</th>
            <th>
                <button id="btn-add" class="btn btn-warning" ng-click="toggle('edit', supplier.id)">Edit</button>
                <button id="btn-add" class="btn btn-danger" ng-click="confirmDelete(supplier.id)">Delete</button>
            </th>
        </tr>

        </tbody>
    </table>




    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">@{{ form_title }}</h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" novalidate="">
                        <div class="form-group">
                            <label for="surname" class="col-sm-3 control-label">Фамилия</label>
                            <div class="col-sm-9">
                                <input type="text"  class="form-control" name="surname" placeholder="Фамилия" value="@{{ surname }}" ng-model="supplier.surname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Имя</label>
                            <div class="col-sm-9">
                                <input type="text"  class="form-control" name="name" placeholder="Имя" value="@{{ name }}" ng-model="supplier.name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text"  class="form-control" name="email" placeholder="Email" value="@{{ email }}" ng-model="supplier.email">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="save(modalstate, id)">Сохранить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection