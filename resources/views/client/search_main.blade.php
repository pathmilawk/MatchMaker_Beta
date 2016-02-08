@extends('master_page')
@section('css_ref')
    <link rel="stylesheet" href="{{asset('internal_css/lib/jquery.steps/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/weather-icons/css/weather-icons.css')}}">
    <link rel="stylesheet" href="{{asset('internal_css/lib/jquery-toggles/toggles-full.css')}}">

    <link rel="stylesheet" href="{{asset('internal_css/css/quirk.css')}}">
@parent
@stop

@section('content')

<!--Start Code Savidya-->

        <div class="row" style="height: 100%">
            <div class="col-md-12" style="height: 100%;">
                <h2 class="panel-title mb10">Find your perfect match here...</h2>
                <h5>You are 3 steps away!</h5>
                <p class="mb15">Fill your preferences and meet the person you always searched for.</p>

                <form class="form-horizontal" id="wizard-form" action="#" style="height: 100%;">
                <h3>Basic Information</h3>
                <div>
                    <div class="form-group mt10">
                        <label class="col-sm-3 control-label"><span class="text-danger">*</span> I' m looking for a :</label>
                            <div class="col-sm-8">
                                <select id="select1" style="width: 100%; height:38px; border:solid 0.08em #eeeeee; background-color:#eeeeee;">
                                    <option value="Null">Select a Gender..</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="text-danger">*</span> Age Between :</label>
                        <div class="col-sm-2">
                            <select id="select2" style="width: 50%; height:38px; border:solid 0.08em #eeeeee; background-color:#eeeeee;">
                                <option value="Null">From</option>
                                <option>18</option><option>19</option>
                                <option>20</option><option>21</option>
                                <option>22</option><option>23</option>
                                <option>24</option><option>25</option>
                                <option>27</option><option>28</option>
                                <option>29</option><option>30</option>
                                <option>31</option><option>32</option>
                                <option>33</option><option>34</option>
                                <option>35</option><option>36</option>
                                <option>37</option><option>38</option>
                                <option>39</option><option>40</option>
                                <option>41</option><option>42</option>
                                <option>43</option><option>44</option>
                                <option>45</option><option>46</option>
                                <option>47</option><option>48</option>
                                <option>49</option><option>50</option>
                                <option>51</option><option>52</option>
                                <option>53</option><option>54</option>
                                <option>55</option><option>56</option>
                                <option>57</option><option>58</option>
                                <option>59</option><option>60</option>
                                <option>61</option><option>62</option>
                                <option>63</option><option>64</option>
                                <option>65</option><option>66</option>
                                <option>67</option><option>68</option>
                                <option>69</option><option>70</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <select id="select3" style="width: 50%; height:38px; border:solid 0.08em #eeeeee; background-color:#eeeeee;">
                                <option value="Null">To</option>
                                <option>18</option><option>19</option>
                                <option>20</option><option>21</option>
                                <option>22</option><option>23</option>
                                <option>24</option><option>25</option>
                                <option>27</option><option>28</option>
                                <option>29</option><option>30</option>
                                <option>31</option><option>32</option>
                                <option>33</option><option>34</option>
                                <option>35</option><option>36</option>
                                <option>37</option><option>38</option>
                                <option>39</option><option>40</option>
                                <option>41</option><option>42</option>
                                <option>43</option><option>44</option>
                                <option>45</option><option>46</option>
                                <option>47</option><option>48</option>
                                <option>49</option><option>50</option>
                                <option>51</option><option>52</option>
                                <option>53</option><option>54</option>
                                <option>55</option><option>56</option>
                                <option>57</option><option>58</option>
                                <option>59</option><option>60</option>
                                <option>61</option><option>62</option>
                                <option>63</option><option>64</option>
                                <option>65</option><option>66</option>
                                <option>67</option><option>68</option>
                                <option>69</option><option>70</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt10">
                        <label class="col-sm-3 control-label"><span class="text-danger">*</span> From :</label>
                        <div class="col-sm-8">
                            <select id="select4" style="width: 100%; height:38px; border:solid 0.08em #eeeeee; background-color:#eeeeee;">
                                <option>Select a District</option>
                                <option>Ampara</option>
                                <option>Anuradhapura</option>
                                <option>Badulla</option>
                                <option>Batticaloa</option>
                                <option>Colombo</option>
                                <option>Galle</option>
                                <option>Gampaha</option>
                                <option>Hambantota</option>
                                <option>Jaffna</option>
                                <option>Kalutara</option>
                                <option>Kandy</option>
                                <option>Kilinochchi</option>
                                <option>Kurunegala</option>
                                <option>Manner</option>
                                <option>Matale</option>
                                <option>Matale</option>
                                <option>Monaragala</option>
                                <option>Mullativu</option>
                                <option>Nuwara Eliya</option>
                                <option>Polonnaruwa</option>
                                <option>Puttalam</option>
                                <option>Ratnapura</option>
                                <option>Trincomalee</option>
                                <option>Vavuniya</option>
                                <option>Doesn't matter</option>
                            </select>
                        </div>
                    </div>
                <div class="form-group mt10">
                        <label class="col-sm-3 control-label"><span class="text-danger">*</span> Religion :</label>
                        <div class="col-sm-8">
                            <select id="select5" style="width: 100%; height:38px; border:solid 0.08em #eeeeee; background-color:#eeeeee;">
                                <option value="Buddhist">Buddhist</option>
                                <option value="Christian">Christian</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Doesn't Matter">Doesn't Matter</option>
                            </select>
                        </div>
                </div>
            </div>
                
                
                <h3>Appearence</h3>
                <div>
                    <div class="form-group mt10">
                        <label class="col-sm-3 control-label"><span class="text-danger">*</span> Street Name:</label>
                        <div class="col-sm-8">
                            <input name="address" type="text" class="form-control required" placeholder="Enter your address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="text-danger">*</span> City/Town:</label>
                        <div class="col-sm-8">
                            <input name="city" type="text" class="form-control required" placeholder="Enter your city">
                        </div>
                     </div>
                </div>
                <h3>Other Information</h3>
                <div>
                    <div class="form-group mt10">
                        <label class="col-sm-3 control-label"><span class="text-danger">*</span> Street Name:</label>
                        <div class="col-sm-8">
                            <input name="address" type="text" class="form-control required" placeholder="Enter your address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><span class="text-danger">*</span> City/Town:</label>
                        <div class="col-sm-8">
                            <input name="city" type="text" class="form-control required" placeholder="Enter your city">
                        </div>
                    </div>
                </div>
            </form>
            </div><!-- col-md-12 -->
        </div><!-- row -->

<!--End Code Savidya-->

@stop


@section('js_ref')
    @parent
    <script src="{{asset('internal_css/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('internal_css/lib/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-toggles/toggles.js')}}"></script>
    <script src="{{asset('internal_css/js/quirk.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery.steps/jquery.steps.js')}}"></script>
    <script src="{{asset('internal_css/lib/jquery-validate/jquery.validate.js')}}"></script>


    <script>

        $(document).ready(function() {

            'use strict';

            $('#wizard-basic, #wizard-basic2').steps({
                headerTag: 'h3',
                bodyTag: 'div',
                transitionEffect: 'slideLeft',
                autoFocus: true
            });



            var form = $('#wizard-form');
            form.steps({
                headerTag: 'h3',
                bodyTag: 'div',
                transitionEffect: 'slideLeft',
                onStepChanging: function (event, currentIndex, newIndex) {

                    // Allways allow previous action even if the current form is not valid!
                    if (currentIndex > newIndex) { return true; }

                    // Needed in some cases if the user went back (clean up)
                    if (currentIndex < newIndex) {
                        // To remove error styles
                        form.find('.body:eq(' + newIndex + ') label.error').remove();
                        form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
                    }

                    form.validate().settings.ignore = ':disabled,:hidden';
                    return form.valid();
                },
                onFinishing: function (event, currentIndex) {
                    form.validate().settings.ignore = ':disabled';
                    return form.valid();
                },
                onFinished: function (event, currentIndex) {
                    alert('Submitted!');
                }
            }).validate({
                highlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });

            $('#wizard-vertical').steps({
                headerTag: 'h3',
                bodyTag: 'div',
                transitionEffect: 'slideLeft',
                autoFocus: true,
                stepsOrientation: 'vertical'
            });


        });
    </script>

@stop
