/**
 * Created by SVV on 17.02.2017.
 */
app.controller('SupplierController', function($scope, $http, API_URL){
    var getData = function(){
        $http.get(API_URL + 'suppliers').success(function (data) {
            $scope.suppliers = data;
        });
    }

    getData();

    // show modal form
    $scope.toggle = function(modalstate, id){
        $scope.modalstate = modalstate;
        switch(modalstate){
            case 'add':
                $scope.form_title = 'Add new supplier';
                $scope.supplier = {};
                break;
            case 'edit':
                $scope.form_title = 'Edit supplier';
                $scope.id = id;
                $http.get(API_URL+'suppliers/'+id).success(function (data) {
                    $scope.supplier = data;
                });
                break;
            default:
                break;
        }

        $('#myModal').modal('show');

    }

    //save supplier and update record
    $scope.save = function(modalstate, id){
        var url = API_URL + 'suppliers';

        if (modalstate === 'edit'){
            url += '/' + id;
        }

        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.supplier),
            headers: {'Content-Type':'application/x-www-form-urlencoded'}
        }).success(function (data) {
            alert('Запись успешно обновлена');
            getData();
        }).error(function (data) {
            console.log(data);
        });
    }

    //delete supplier
    $scope.confirmDelete = function(id){
        var isConfirmDelete = confirm('Вы действительно хотите удалить запись?');
        if(isConfirmDelete){
            $http({
                method:'DELETE',
                url: API_URL + 'suppliers/' + id
            }).success(function(data){
                console.log(data);
                getData();
            }).error(function (data) {
                console.log(data);
                alert('Невозможно удалить запись');
            })
        }else{
            return false;
        }
    }
});
