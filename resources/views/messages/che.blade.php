

@extends('master_page')
@section('css_ref')
    @parent
   {{-- <link rel="stylesheet" href={{asset('internal_css/lib/fontawesome/css/font-awesome.css')}}>
    <link rel="stylesheet" href={{asset('internal_css/lib/weather-icons/css/weather-icons.css')}}>
    <link rel="stylesheet" href={{asset('internal_css/lib/jquery-toggles/toggles-full.css')}}>
    <link rel="stylesheet" href={{asset('internal_css/lib/summernote/summernote.css')}}>

    <link rel="stylesheet" href={{asset('/css/quirk.css')}}>--}}
@stop

@section('content')
<br><br><br><br><br>

    <div class="col-sm-4 col-md-3 col-lg-2">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Inbox Messages</h4>
            </div>
            <div class="panel-body">
                <ul class="media-list user-list">
                    <li class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object img-circle" src={{asset('images/user9.png')}} alt="">
                            </a>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading"><a href="">Ashley T. Brewington</a></h4>
                            <span class="pull-right">5,323</span> <?php echo $body ?>
                        </div>
                    </li>




                </ul>
            </div>
        </div><!-- panel -->




@stop


@section('js_ref')


    @parent

    <script src={{asset('internal_css/lib/jquery/jquery.js')}}></script>
    <script src={{asset('internal_css/lib/jquery-ui/jquery-ui.js')}}></script>
    <script src={{asset('internal_css/lib/bootstrap/js/bootstrap.js')}}></script>
    <script src={{asset('internal_css/lib/jquery-toggles/toggles.js')}}></script>
    <script src={{asset('internal_css/lib/summernote/summernote.js')}}></script>

    <script src={{asset('internal_css/js/quirk.js')}}></script>
    <script>
        $(document).ready(function() {
            $('.emailcontent input[type=checkbox]').click(function() {
                if($(this).is(':checked')) {
                    $(this).closest('.list-group-item').addClass('selected');
                } else {
                    $(this).closest('.list-group-item').removeClass('selected');
                }
            });

            // Mark a star
            $('.markstar').click(function() {
                if($(this).hasClass('starred')) {
                    $(this).removeClass('starred');
                } else {
                    $(this).addClass('starred');
                }
            });

            // Clicking a message
            $('.list-group-item > .media').click(function() {

                $('.list-group-item').each(function() {
                    $(this).removeClass('active');
                });

                $(this).parent().addClass('active').removeClass('unread');
                $('.nomail').addClass('hide');
                $('.mailcontent').removeClass('hide');
            });


            // Summernote
            $('#summernote, #summernote2').summernote({
                height: 100,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']]
                ]
            });

        });
    </script>

@stop