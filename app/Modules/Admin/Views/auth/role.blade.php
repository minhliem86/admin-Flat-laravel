<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bootflat-Admin Template</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/css/site.min.css">
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/css/customize.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/dist/js/site.min.js"></script>
    <!--
      Bootstrap Select
    -->
    <link rel="stylesheet" href="{{asset('/public/assets/admin')}}/dist/js/plugins/bootstrap-select/css/bootstrap-select.min.css">
    <script type="text/javascript" src="{{asset('/public/assets/admin')}}/dist/js/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    <style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" id="form-role" role="form" action="{{url('register')}}" method="POST">
        {{Form::token()}}
        <fieldset class="role">
          <legend class="form-signin-heading">Register New Role</legend>
          <div class="form-group">
              <input type="text" class="form-control" name="role_name" id="role_name" placeholder="Role Name" autocomplete="off" />
          </div>
          <div class="form-group">
            <textarea name="role_description" rows="3" class="form-control" placeholder="Role description (Opt)..."></textarea>
          </div>
          <button class="btn btn-lg btn-primary btn-block" id="btn-role" type="button">Create Role</button>
        </fieldset>

        <fieldset class="permission">
          <legend class="form-signin-heading">Register New Role</legend>
          <div class="form-group">
            <input type="text" class="form-control" name="permission_name" id="permission_name" placeholder="Permission Name" autocomplete="off" />
          </div>
          <div class="form-group">
            <textarea name="permission_description" rows="3" class="form-control" placeholder="Permission description (Opt)..."></textarea>
          </div>
          <button class="btn btn-lg btn-primary btn-block" id="btn-permission" type="button">Create Permission</button>
        </fieldset>

        <fieldset class="assign">
          <legend class="form-signin-heading">Assign Role & Permission</legend>
          <div class="form-group" id="role_show">
            <select name="role_id" id="role_id" class="form-control selectpicker" disabled>
              <option value="" >Select Role</option>
            </select>
          </div>
          <div class="form-group" id="permission_show">
            <select name="permission_id" id="permission_id" class="form-control selectpicker" disabled>
              <option value="" >Select Permission</option>
            </select>
          </div>
          <button class="btn btn-lg btn-primary btn-block" name="btn-submit" type="submit">Create Permission</button>
        </fieldset>

      </form>

    </div>
  </body>
</html>
