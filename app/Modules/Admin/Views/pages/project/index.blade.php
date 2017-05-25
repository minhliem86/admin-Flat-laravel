@extends('Admin::layouts.main-layout')

@section('link')
    {{Html::link(route('admin.project.create'),'Add New',['class'=>'btn btn-primary'])}}
    <button type="button" class="btn btn-danger" id="btn-remove-all">Remove All Selected</button>
@stop

@section('content')
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Warning!</strong> Best check yo self, you're not looking too good.
    </div>
    <div class="row">
      <div class="col-sm-12">
         @if(!$inst->isEmpty())
        <table class="table table-hover">
          <thead>
            <tr>
            @foreach($inst as $value)
              <th>{{dd(array_keys($value->))}}</th>
              <th>First Name</th>
              <th><i class="glyphicon glyphicon-search"></i> Last Name</th>
              <th>Username</th>
                @endforeach
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Liem</td>
              <td>@mdo</td>
              <td align="right">
                <a href="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> EDIT</a>
                <span class="inline-block-span">
                  <Form action="" method="DELETE">
                    <button class="btn  btn-danger btn-xs remove-btn" type="button" attrid="" onclick="confirm_remove(this);"><i class="glyphicon glyphicon-remove"></i> REMOVE</button>
                  </Form>
                </span>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td align="right">
                <a href="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> EDIT</a>
                <span class="inline-block-span">
                  <Form action="" method="DELETE">
                    <button class="btn  btn-danger btn-xs remove-btn" type="button" attrid="" onclick="confirm_remove(this);"><i class="glyphicon glyphicon-remove"></i> REMOVE</button>
                  </Form>
                </span>
              </td>
            </tr>
          </tbody>
        </table>
        @else
            <p>No data</p>
        @endif
      </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/bootflat-admin/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/dist/js/site.min.js"></script>
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/dist/js/scroll/jquery.mCustomScrollbar.min.js"></script>
    <!-- DATA TABLE -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/datatables/jquery.dataTables.min.css">
    <script src="{{asset('/public/assets/admin')}}/dist/js/plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- ALERTIFY -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/alertify.css">
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/bootstrap.min.css">
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/dist/js/plugins/alertify/alertify.js"></script>

    <script src="{{asset('/public/assets/admin')}}/dist/js/script.js"></script>

    <script>
      $(document).ready(function(){

        // REMOVE ALL
        var table = $('table').DataTable({
          'ordering': false,
          "bLengthChange": false,
          "bFilter" : false,
          "searching": true
        });
        /*SELECT ROW*/
        $('table tbody').on('click','tr',function(){
          $(this).toggleClass('selected');
        })

        // SEARCH TAB
        $('input[type="search"]').on('keyup', function(){
          table.columns(2).search(this.value).draw();
        })


        $('#btn-remove-all').click( function () {
          var data = [];
          table.rows('.selected').data().each(function(index, e){
            data.push(index[0]);
          });
          alertify.confirm('You can not undo this action. Are you sure ?', function(e){
            if(e){
              $.ajax({
                'url':"",
                'data' : {arr: data,_token:$('meta[name="csrf-token"]').attr('content')},
                'type': "POST",
                'success':function(result){
                  if(result.msg = 'ok'){
                    table.rows('.selected').remove();
                    table.draw();
                    alertify.success('The data is removed!');
                  }
                }
              });
            }
          })
        })

      })

      function confirm_remove(a){
          alertify.confirm('You can not undo this action. Are you sure ?', function(e){
              if(e){
                  a.parentElement.submit();
              }
          });
      }
    </script>
@stop
