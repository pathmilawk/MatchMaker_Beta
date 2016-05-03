<div class="panel-body">
    <h3 class="text-success">Question</h3>
    <hr>
    @if((session()->has('answerSuccess'))) <!--status of submitting the story-->
    @if(session('answerSuccess')=='true')
        <div class="alert alert-success" style="width: 65%">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Answer updated.</strong>
        </div>
    @endif
    @endif

    <div class="dom-target" style="display: none;">
        <input type="hidden" value="{{ $id }}" id="idA" name="idin" />
        <input type="hidden" value="{{ $question }}" id="questionA" name="questionA" />
        <input type="hidden" value="{{ $answer }}" id="answerA" name="answerA" />
        <input type="hidden" value="{{ $published }}" id="publishedA" name="publishedA" />
        <input type="hidden" value="{{ $name }}" id="nameA" name="nameA" />
    </div>
    <form action="updateAnswer" method="POST" id="answerForm" name="answerForm">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="hidden" name="id" value="{{ $id }}">
        <div class="form-group mb10">
            <div class="input-group">
                <h4>Submitted by</h4>
                <p style="font-size: medium"> {{ $name }}</p>

            </div>
        </div>

        <div class="form-group nomargin">
            <div class="input-group">
                <h4>Question</h4>
                <p style="font-size: medium"> {{ $question }}</p>
            </div>
        </div>

        <div class="form-group nomargin">

            <div class="input-group">
                <h4>Answer</h4>
                <textarea rows="6" style="width: 375px;" name="answer" id="answer" type="area" class="form-control">{{ $answer }}</textarea>

            </div>

        </div>
        <hr class="invisible">

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-quirk btn-block">Submit</button>
        </div>


    </form>

</div>