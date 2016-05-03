@extends('admin')
@section('css_ref')
    @parent
    <style type="text/css">
    #e:hover{
    background-color: #d0d4e7;
    }
    </style>
@stop

@section('content')
    <div id="dom-target" style="display: none;">

        <input type="hidden" value="{{ $contactFirst->id }}" id="idin" name="idin" />
        <input type="hidden" value="{{ $contactFirst->question }}" id="questionin" name="questionin" />
        <input type="hidden" value="{{ $contactFirst->answer }}" id="answerin" name="answerin" />
        <input type="hidden" value="{{ $contactFirst->published }}" id="publishedin" name="publishedin" />
        <input type="hidden" value="{{ $contactFirst->name }}" id="namein" name="namein" />
    </div>
    <div class="row">
        <div class="col-md-7" style="margin-left:30px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 style="color: #ffffff">Contact us</h3>
                </div>
                <div class="panel-body">



                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="col-md-8" style="height: 20px;text-align: center;"><h4 class="text-primary">Question</h4></div>
                                <div class="col-md-2" style="height: 20px;text-align: center;"><h4 class="text-primary">Answer status</h4></div>
                                <div class="col-md-2" style="height: 20px;text-align: center;"><h4 class="text-primary">Published status</h4></div>
                            </div>
                            @foreach($contacts as $contact)
                                <div class="row" id="e">
                                    <a href="javascript:showAnswer('{{ $contact->id }}','{{ $contact->name }}','{{ $contact->question }}','{{ $contact->answer }}','{{ $contact->published }}')">

                                    <div class="col-md-8" style="height: 50px;text-align: left;color: slategrey;"><p style="font-size: medium">{{ $contact->question }}</p></div>
                                    <div class="col-md-2" style="height: 50px;text-align: center;color: slategrey;">
                                        <p style="font-size: medium">
                                            @if($contact->answer != "")
                                                Answered`
                                            @endif
                                            @if($contact->answer == "")
                                                Not Answered
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-md-2" style="height: 50px;text-align: center;color: slategrey;">
                                        <p style="font-size: medium">
                                            @if($contact->published == true)
                                                Published
                                            @endif
                                            @if($contact->published == false)
                                                Not published
                                            @endif
                                        </p>
                                    </div>
                                    </a>
                                </div>
                                <hr style="padding:5px;">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default" id="answer">

            </div>
        </div>
    </div>

@stop


@section('js_ref')
    @parent
    <script>
        function showAnswer(id,name,question,answer,published) {

            $.ajax({
                url: '/showAnswer',
                type: 'post',
                data: {
                    id: id, name: name, question: question, answer: answer, published: published,
                },
                dataType: 'html',
                success: function (data) {
                    //if (data != "same") {
                    document.getElementById("answer").innerHTML = data;
                    //alert(data);

                    // }
                },
                error: function (err, req) {
                    alert(err);
                },
            });

        }


        //onload = showcomment();
        $(document).ready(function(){
            var id = $("#idin").val();
            var name = $("#namein").val();
            var question = $("#questionin").val();
            var answer = $("#answerin").val();
            var published = $("#pulishedin").val();
            showAnswer(id,name,question,answer,published);
        })

        /*function updateAnswer(){
            var id = document.getElementById("idA").value;
            var answer = document.getElementById("answerA").value;
            var question = document.getElementById("questionA").value;
            var name = document.getElementById("nameA").value;
            var published = document.getElementById("publishedA").value;

            $.ajax({
                url: '/updateAnswer',
                type: 'post',
                data: {
                    id: id, answer: answer,question: question, name: name, published: published

                },
                success: function (data) {
                    $("#status").text("Answer updated.");
                },
                error: function (data) {

                },
            });
            return false;
        }*/

    </script>
@stop