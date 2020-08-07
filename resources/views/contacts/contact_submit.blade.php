
@extends('master')
@section('contact')
<form>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8"></div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8"></div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <h4>CONTACT SUBMIT</h4>
            <hr />
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <div style="text-align: center; margin-top: 150px;">
                <h5>You message have been submit to our system!</h5>
                <p>Our team will feedback to you soon, Thank you</p>
                <button class="btn btn-sm btn-outline-secondary" type="button">
                    <a href="{{url('/')}}">
                    &lt;GO BACK HOME PAGE
                    </a>
                </button>
            </div>
        </div>
        <div class="form-group col-md-2"></div>
    </div>
</form>
    @endsection
