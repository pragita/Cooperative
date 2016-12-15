<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/14/2016
 * Time: 1:09 PM
 */
?>
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<title>Cooperative</title>
<head></head>
<body>
<main>
    <div class="col-md-4 col-md-offset-1" style="top:200px">
        <div class="form-header red light-4">
            <h4 style="margin-bottom: 0px;margin-top: 50px">Search</h4>
        </div>
        {!! Form::open(['method'=>'GET','url'=>'search','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
        <div class="input-group custom-search-form md-form">
            <input type="text" id="form9" class="form-control" name="search" required style="width: 300px;">
            <span class="input-group-btn">
                <button class="btn-btn-unique" type="submit" style="background-color: grey;font-size: 16px">Search</button>
            </span>
            {!! Form::close() !!}
        </div>
    </div>
</main>
</body>
</html>