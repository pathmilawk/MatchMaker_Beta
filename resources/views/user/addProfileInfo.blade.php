@extends('app')
@section('pageTitle','Profile')

@section('css_ref')
    @parent
    <link rel="stylesheet" href="{{ asset('internal_css/lib/jquery-ui/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('internal_css/lib/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('internal_css/lib/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('internal_css/lib/jquery-toggles/toggles-full.css') }}'">
    <link rel="stylesheet" href="{{ asset('internal_css/lib/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('internal_css/lib/timepicker/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('internal_css/lib/bootstrapcolorpicker/css/bootstrap-colorpicker.css') }}">
    <link rel="stylesheet" href="{{ asset('internal_css/lib/select2/select2.css') }}">
@stop

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-headingh nopaddingbottom">
                    <h4 class="panel-title text-center">User Profile Information</h4>

                    <p class="text-center">Please provide the following information</p>
                </div>
                <div class="panel-body nopaddingtop">
                    <hr>
                    <form action="http://<?php echo $_SERVER['SERVER_NAME']; ?>/addinfo" method="POST" id="basicForm"
                          class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nick Name</label>

                            <div class="col-sm-8">
                                <input type="text" name="nickname" class="form-control" placeholder="Nick Name">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Religion</label>

                            <div class="col-sm-8">
                                <input type="text" name="religion" class="form-control" placeholder="Religion">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Ethnicity</label>

                            <div class="col-sm-8">
                                <input type="text" name="ethnicity" class="form-control" placeholder="Ethnicity">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Country</label>

                            <div class="col-sm-8">
                                <select id="country" name="country" class="select2" style="width: 100%"
                                        data-placeholder="choose country">
                                    <option value="">&nbsp;</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">hometown</label>

                            <div class="col-sm-8">
                                <input type="text" name="hometown" class="form-control" placeholder="hometown">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">current location</label>

                            <div class="col-sm-8">
                                <input type="text" name="location" class="form-control" placeholder="location">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">address</label>

                            <div class="col-sm-8">
                                <input type="text" name="address" class="form-control" placeholder="address">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">telephone-mobile</label>

                            <div class="col-sm-8">
                                <input type="text" name="telephone_mobile" class="form-control"
                                       placeholder="telephone mobile">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">telephone-home</label>

                            <div class="col-sm-8">
                                <input type="text" name="telephone_home" class="form-control"
                                       placeholder="telephone home">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">telephone work</label>

                            <div class="col-sm-8">
                                <input type="text" name="telephone_work" class="form-control"
                                       placeholder="telephone work">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">education</label>

                            <div class="col-sm-8">
                                <input type="text" name="education" class="form-control" placeholder="education">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">work</label>

                            <div class="col-sm-8">
                                <input type="text" name="work" class="form-control" placeholder="work">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">languages</label>

                            <div class="col-sm-8">
                                <input type="text" name="languages" class="form-control" placeholder="languages">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">facebook URL</label>

                            <div class="col-sm-8">
                                <input type="text" name="facebook" class="form-control" placeholder="facebook URL">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">about</label>

                            <div class="col-sm-8">
                                <input type="text" name="about" class="form-control" placeholder="about">
                            </div>
                        </div>


                        <hr>

                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>





@stop

@section('js_ref')
    @parent
    <script src="{{ asset('internal_css/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('internal_css/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('internal_css/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('internal_css/lib/jquery-autosize/autosize.js') }}"></script>
    <script src="{{ asset('internal_css/lib/select2/select2.js') }}"></script>
    <script src="{{ asset('internal_css/lib/jquery-validate/jquery.validate.js') }}"></script>
    <script src="{{ asset('internal_css/lib/jquery-toggles/toggles.js') }}"></script>
    <script src="{{ asset('internal_css/lib/jquery-maskedinput/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('internal_css/lib/timepicker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('internal_css/lib/dropzone/dropzone.j') }}s"></script>
    <script src="{{ asset('internal_css/lib/bootstrapcolorpicker/js/bootstrap-colorpicker.js') }}"></script>

    <script src="{{ asset('internal_css/js/quirk.js') }}"></script>


    <script>
        $(function () {

            // Textarea Auto Resize
            autosize($('#autosize'));

            // Select2 Box
            $('#select1, #select2, #select3').select2();
            $("#select4").select2({maximumSelectionLength: 2});
            $("#select5").select2({minimumResultsForSearch: Infinity});
            $("#select6").select2({tags: true});

            // Toggles
            $('.toggle').toggles({
                on: true,
                height: 26
            });

            // Input Masks
            $("#date").mask("99/99/9999");
            $("#phone").mask("(999) 999-9999");
            $("#ssn").mask("999-99-9999");

            // Date Picker
            $('#datepicker').datepicker();
            $('#datepicker-inline').datepicker();
            $('#datepicker-multiple').datepicker({numberOfMonths: 2});

            // Time Picker
            $('#tpBasic').timepicker();
            $('#tp2').timepicker({'scrollDefault': 'now'});
            $('#tp3').timepicker();

            $('#setTimeButton').on('click', function () {
                $('#tp3').timepicker('setTime', new Date());
            });

            // Colorpicker
            $('#colorpicker1').colorpicker();
            $('#colorpicker2').colorpicker({
                customClass: 'colorpicker-lg',
                sliders: {
                    saturation: {
                        maxLeft: 200,
                        maxTop: 200
                    },
                    hue: {maxTop: 200},
                    alpha: {maxTop: 200}
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            'use strict';

            // Basic Form
            $('#basicForm').validate({
                highlight: function (element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function (element) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });

            // Error Message In One Container
            $('#basicForm2').validate({
                errorLabelContainer: jQuery('#basicForm2 div.error')
            });

            // With Checkboxes and Radio Buttons
            $('#basicForm3').validate({
                highlight: function (element) {
                    jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function (element) {
                    jQuery(element).closest('.form-group').removeClass('has-error');
                }
            });

            // Validation with select boxes
            $('#basicForm4').validate({
                highlight: function (element) {
                    jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                success: function (element) {
                    jQuery(element).closest('.form-group').removeClass('has-error');
                }
            });

            $('.select2').select2();


        });
    </script>




@stop
