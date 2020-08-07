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
            <h4>CONTACT</h4>
            <hr />
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <label for="name">Name<span>*</span></label>
            <input type="text" class="form-control" id="name" />
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-4">
            <label for="email">Email<span>*</span></label>
            <input type="email" class="form-control" id="email" />
        </div>
        <div class="form-group col-md-4">
            <label for="pm">Phone Number</label>
            <input type="text" class="form-control" id="pm" />
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <label for="subject">Subject</label>
            <input type="name" class="form-control" id="subject" />
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <label for="name">Message</label>
            <textarea class="form-control" rows="8" placeholder="type here ..."></textarea>
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            
                
                <form class="form-inline">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-primary" type="button"><a href="{{ url('contact/conf') }}">
                            NEXT&gt;
                            </a>
                        </button>
                    </div>
                </form>
            
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    </div>
</form>
    @endsection
