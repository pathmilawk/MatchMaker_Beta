

@extends('master_page')
@section('css_ref')
    @parent
@stop

@section('content')

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">


                <form id="subscribe-email-form" action="t" method="post">
                    <div class="modal-body">
                        <input type="email" placeholder="email" name="email"/>
                        <p>This service will notify you by email should any issue arise that affects your service.</p>
                    </div>
                    <div class="modal-footer">
                        <input id="subscribe-email-submit" type="submit" value="SUBMIT" class="btn" />
                    </div>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


@stop


@section('js_ref')
    @parent

    <script>
        $(function(){
            $('subscribe-email-form').on('submit', function(e){
                e.preventDefault();
                $.ajax({
                    url: "t",
                    type: "POST",
                    data: $("subscribe-email-form").serialize(),
                    success: function(data){
                        alert("Successfully submitted.")
                    }
                });
            });
        });
    </script>

@stop
