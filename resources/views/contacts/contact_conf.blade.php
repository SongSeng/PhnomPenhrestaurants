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
            <h4>CONTACT CONFIRMATION</h4>
            <hr />
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">Name</th>
                    <td>Cheng SongSeng</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>chengsongseng@gmial.com</td>
                </tr>
                <tr>
                    <th scope="row">Phone_Number</th>
                    <td>010721393</td>
                </tr>
                <tr>
                    <th scope="row">Subject</th>
                    <td>IT Engineering</td>
                </tr>
                <tr>
                    <th scope="row">Message</th>
                    <td>
                        help me!!!
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group col-md-4"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-7" >
            <form class="form-inline">
                <button class="btn btn-sm btn-secondary" type="button"><a href="{{url('/contact')}}">
                    &lt;BACK
                    </a>
                </button>
            </form>
        </div>
        <div class="form-group col-md-1">
            <form class="form-inline">
                <button class="btn btn-sm btn-primary" type="button"> <a href="{{url('contact/submit')}}">
                    SUBMIT
                    </a>
                </button>
            </form>
        </div>
        <div class="form-group col-md-2"></div>
    </div>
</form>
    @endsection
