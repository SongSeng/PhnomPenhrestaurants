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
            <h4>CONTACT VIEW</h4>
            <hr />
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <div class="navbar navbar">
                <form class="form-inline">
                    <div class="d-flex justify-content-start"></div>
                </form>
                <form class="form-inline">
                    <button class="btn btn-sm btn-outline-secondary" type="button">
                        Pending
                    </button>
                    <div>&nbsp;&nbsp;</div>
                    <button class="btn btn-sm btn-outline-secondary" type="button">
                        Inprogress
                    </button>
                    <div>&nbsp;&nbsp;</div>
                    <button class="btn btn-sm btn-outline-secondary" type="button">
                        Completed
                    </button>
                </form>
            </div>
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
                    <td>songseng010@gmial.com</td>
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
                        Now, when you generate a form element, like a text input, the
                        model's value matching the field's name will automatically be
                        set as the field value. So, for example, for a text input
                        named email, the user model's email attribute would be set as
                        the value. However, there's more! If there is an item in the
                        Session flash data matching the input name, that will take
                        precedence over the model's value. So, the priority looks like
                        this:
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group col-md-4"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <div class="navbar navbar">
                <form class="form-inline">
                    <div class="d-flex justify-content-start">
                        <button class="btn btn-sm btn-outline-secondary" type="button">
                            &lt;BACK
                        </button>
                    </div>
                </form>
                <form class="form-inline">
                    <button
                        class="btn btn-sm btn-outline-secondary"
                        type="button"
                        data-toggle="modal"
                        data-target="#exampleModal"
                    >
                        REPLY
                    </button>
                    <!-- Modal -->
                    <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">EMAIL</h5>
                                    <button
                                        type="button"
                                        class="close"
                                        data-dismiss="modal"
                                        aria-label="Close"
                                    >
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-2"></div>
                                        <div class="form-group col-md-6">
                                            <label for="to">To</label>
                                            <input type="text" class="form-control" id="to" />
                                        </div>
                                        <div class="form-group col-md-2"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2"></div>
                                        <div class="form-group col-md-6">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" />
                                        </div>
                                        <div class="form-group col-md-2"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2"></div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Message</label>
                                            <textarea class="form-control" rows="5" placeholder=""></textarea>
                                        </div>
                                        <div class="form-group col-md-2"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2"></div>
                                        <div class="form-group col-md-6">
                                            <div class="navbar navbar">
                                                <form class="form-inline">
                                                    <div class="d-flex justify-content-start">
                                                        <button class="btn btn-sm btn-outline-secondary" type="button">
                                                            CLOSE
                                                        </button>
                                                    </div>
                                                </form>
                                                <form class="form-inline">
                                                    <div class="d-flex justify-content-end">
                                                        <button class="btn btn-sm btn-outline-secondary" type="button">
                                                            SENT
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-group col-md-2"></div>
    </div>
</form>
    @endsection
