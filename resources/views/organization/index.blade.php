@extends('layouts.app')

@section('content')

    <div id="content" style="display: none;" class="row">
        <div class="col-md-12">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="datetimepicker4">
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

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            var items = localStorage.getItem('roles');
            var res = items.split(" ");

            if (res.indexOf('party') >= 0)
            {
                $('#content').css("display", 'block');
            }
            else {
                $('#content').css("display", 'block');
                $('#content').text('You don\'t have permission to view this page!');
            }
        });
    </script>
@endsection