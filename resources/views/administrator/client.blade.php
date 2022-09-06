@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.admin.header')
@include('components.admin.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Clients List</h5>
            @if (session('status'))
            <div class="alert alert-info alert-dismissable" role="alert">
                <span class="icon"><i class="far fa-check-circle"></i></span>
                {{ session('status') }}
            </div>
        @endif
            <div class="row">
                <div class="col-sm mt-50">
                    <div class="table-wrap">
                        <table id="example" class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th>Client Names</th>
                                    <th>Client email</th>
                                    <th>Client Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                       <td>{{$item['cli_fullnames']}}</td>
                                       <td>{{$item['email']}}</td>
                                       <td>{{$item['cli_phone']}}</td>
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
