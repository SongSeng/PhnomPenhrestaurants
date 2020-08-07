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
            <h4>CONTACT LIST</h4>
            <hr />
        </div>
        <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <button class="btn btn-sm btn-outline-secondary" type="button" id="right" data-toggle="modal" data-target="#exampleModal">
              <span>Bulk Email</span>
                <i class="fa fa-envelope-o"></i>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">BULK EMAILS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="to">To</label>
                                    <input type="text" class="form-control" id="to" />
                                </div>
                                <div class="form-group col-md-2"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" />
                                </div>
                                <div class="form-group col-md-2"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" rows="5" placeholder=""></textarea>
                                </div>
                                <div class="form-group col-md-2"></div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2"></div>
                                <div class="form-group col-md-8">
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
                                <div class="form-group col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <div class="navbar navbar-light bg-light">
                <div class="d-flex justify-content-start">
                    <form class="form-inline">

                        <div class="p-2 bd-highlight"> <button class="btn btn-sm btn-outline-secondary" type="button">
                                Bulk Actions <i class="fa fa-chevron-down"></i>
                            </button></div>
                        <div class="p-2 bd-highlight">  <button class="btn btn-sm btn-outline-secondary" type="button">
                                APPLY
                            </button></div>
                        <div class="p-2 bd-highlight">   <button class="btn btn-sm btn-outline-secondary" type="button">
                                Status <i class="fa fa-chevron-down"></i>
                            </button></div>
                        <div class="p-2 bd-highlight">  <button class="btn btn-sm btn-outline-secondary" type="button">
                                FILTER
                            </button></div>
                </form>
            </div>
            <form class="form-inline">
                <input
                    class="form-control mr-sm-2"
                    type="search"
                    placeholder="Enty Keyword..."
                    aria-label="Search"
                />
                <button
                    class="btn btn-sm btn-outline-secondary"
                    type="submit"
                >
                    Search
                </button>
            </form>
        </div>
    </div>
    <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Seng</td>
                    <td>ITE</td>
                    <td>@Seng</td>
                    <td>Phnom Penh</td>
                    <td>14/02/2020</td>
                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Devil</td>
                    <td>Jokerr</td>
                    <td>@hell</td>
                    <td>Phnom Penh</td>
                    <td>14/02/2020</td>
                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Baby</td>
                    <td>Cry</td>
                    <td>@nga nga</td>
                    <td>Phnom Penh</td>
                    <td>14/02/2020</td>
                    <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group col-md-4"></div>
    <div class="form-group col-md-2"></div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-8">
            <div class="navbar navbar">

                <form class="form-inline">
                    <div class="d-flex justify-content-start">
                        <div class="p-2 bd-highlight">Total Item: 03</div>
                    </div>
                </form>
                <form class="form-inline">

                    <div aria-label="">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
<div class="form-group col-md-2"></div>
@endsection
