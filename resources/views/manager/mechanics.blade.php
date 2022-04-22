@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.manager.header')
@include('components.manager.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Garage mechanics List</h5>
            <button type="button" class="btn btn-warning text-dark" data-toggle="modal"
                data-target="#exampleModalCenter">
                Add new
            </button>
            
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $err)
                    <span class="icon"><i class="far fa-times-circle"></i></span>
                    {{ $err }} <br>
                @endforeach
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-info alert-dismissable" role="alert">
                <span class="icon"><i class="far fa-check-circle"></i></span>
                {{ session('status') }}
            </div>
        @endif

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Register new mechanician</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('createmechanician') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6 pt-3">
                                        <label for="">Enter first name</label>
                                        <input type="text" name="firstname" class="form-control"
                                            value="{{ old('firstname') }}">
                                    </div>
                                    <div class="col-6 pt-3">
                                        <label for="">Enter last name</label>
                                        <input type="text" name="lastname" class="form-control"
                                            value="{{ old('lastname') }}">
                                    </div>
                                    <div class="col-6 pt-3">
                                        <label for="">Enter email address</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ old('email') }}">
                                    </div>
                                    <div class="col-6 pt-3">
                                        <label for="">Enter telephone number</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ old('phone') }}">
                                            <input type="hidden" name="manager" value={{auth()->user()->mana_id}}>
                                    </div>
                                </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-warning text-dark" type="submit">Save mechanic</button>
                    </form>
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-sm mt-50">
            <div class="table-wrap">
                <table id="datable_1" class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Full Names</th>
                            <th>Email address</th>
                            <th>Telephone</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mechanics as $item)
                        <tr>
                            <td>{{ $item->mech_firstName }}</td>
                            <td>{{ $item->mech_email }}</td>
                            <td>{{ $item->mech_phone }}</td>
                           
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    </section>
</div>
</div>

@include('components.dashcomp.dashJs')
