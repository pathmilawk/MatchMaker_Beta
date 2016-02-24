@extends('master_page')
@section('css_ref')
    @parent
{{--
    <link rel="stylesheet" href="{{asset('//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css')}}">
--}}
    <link rel="stylesheet" href="{{asset('internal_css/lib/jquery-ui/jquery-ui.css')}}">
@stop

@section('content')

    <div id="dialog-form" title="Create new user" style="display:none">

        <form>
            <fieldset>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="Jane Smith">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">

                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
            </fieldset>
        </form>
    </div>


    <div id="users-contain" class="ui-widget">
        <h1>Existing Users:</h1>
        <table id="users" class="ui-widget ui-widget-content">
            <thead>
            <tr class="ui-widget-header ">
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John Doe</td>
                <td>john.doe@example.com</td>
                <td>johndoe1</td>
            </tr>
            </tbody>
        </table>
    </div>
    <button id="create-user">Create new user</button>
    <div class="row">
        <div class="col-md-7"></div>
    </div>
    <div class="row">
        <div class="col-md-5 dash-right">
            <button id="abc" class="btn btn-warning">Add preferences</button>
        </div>
    </div>

@stop


@section('js_ref')
    @parent
    <script src="{{asset('//code.jquery.com/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('//code.jquery.com/ui/1.11.4/jquery-ui.js')}}"></script>

    <script>
            $(function () {
                var dialog, form,


                dialog = $("#dialog-form").dialog({
                    autoOpen: false,
                    height: 300,
                    width: 350,
                    modal: true,
                    buttons: {
                        "Create an account": dialog.dialog("close"),
                        Cancel: function () {
                            dialog.dialog("close");
                        }
                    },
                    close: function () {
                        form[0].reset();
/*
                        allFields.removeClass("ui-state-error");
*/
                    }
                });

                form = dialog.find("form").on("submit", function (event) {
                    event.preventDefault();
                   /* addUser();*/
                });

                $("#abc").button().on("click", function () {
                    dialog.dialog("open");
                });
            });

    </script>
@stop
