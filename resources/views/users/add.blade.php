@extends('layouts.master')


@section('header_ext')
@parent
@endsection

@section('content')

<div class="right_col" role="main">
    <div class="">
        {{-- <div class="page-title">
            <div class="title_left">
                <h3>Form Validation</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>User <small>Registration</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                                        class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="" action="" method="post" novalidate>
                            <span class="section">Personal Info</span>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name"
                                           placeholder="ex. John f. Kennedy" required="required" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Occupation<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="occupation" data-validate-length-range="5,15"
                                           type="text" /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">email<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="email" class='email' required="required" type="email" /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Confirm email address<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="email" class='email' name="confirm_email"
                                           data-validate-linked='email' required='required' /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Number <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="number" class='number' name="number"
                                           data-validate-minmax="10,100" required='required'></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Date<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='date' type="date" name="date" required='required'></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Time<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='time' type="time" name="time" required='required'></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="password" name="password" data-validate-length="6,8"
                                           required='required' /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Repeat password<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="password" name="password2" data-validate-linked='password'
                                           required='required' /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Telephone<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="tel" class='tel' name="phone" required='required'
                                           data-validate-length-range="8,20" /></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">message<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea required="required" name='message'></textarea></div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Submit</button>
                                        <button type='reset' class="btn btn-success">Reset</button>
                                    </div>
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

@section('js_ext')
@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('assets/vendors/validator/multifield.js') }}"></script>
<script src="{{ asset('assets/vendors/validator/validator.js') }}"></script>

<script>
    // initialize a validator instance from the "FormValidator" constructor.
    // A "<form>" element is optionally passed as an argument, but is not a must
    var validator = new FormValidator({"events": ['blur', 'input', 'change']}, document.forms[0]);
    // on form "submit" event
    document.forms[0].onsubmit = function (e) {
        var submit = true,
                validatorResult = validator.checkAll(this);
        console.log(validatorResult);
        return !!validatorResult.valid;
    };
    // on form "reset" event
    document.forms[0].onreset = function (e) {
        validator.reset();
    };
    // stuff related ONLY for this demo page:
    $('.toggleValidationTooltips').change(function () {
        validator.settings.alerts = !this.checked;
        if (this.checked)
            $('form .alert').remove();
    }).prop('checked', false);
</script>
@endsection
