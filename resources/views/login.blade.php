@extends('layouts.app')
@section('contain')

<div class="cotainer">
    <div class="row">
        <div class="col-sm-4">
        <div class="container custom-login">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                            </div>
                        </div>
                    </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection