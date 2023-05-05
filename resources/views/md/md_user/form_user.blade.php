@extends('layout/paan',[
'InfoPage' => [
'Navbar' => '/form_user'
]])
@section('title', 'Form Data User')

@section('container')
<div class="content">
    <div class="animated fadeIn">
        <div @if(Session::has('post_add')) <span>{{Session::get('post_add')}}</span>
            @endif
            <div class="col-md-12">
                <form method="post" action="{{route('user.save')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                     Input Data User
                                </div>
                                <div class="card-body card-block">
                                    <form action="{{route('user.save')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Nama</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Nama Pengguna" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Email</strong></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" placeholder="Email" class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label"><strong>Role</strong></label></div>
                                            <div class="col-12 col-md-6">
                                                <select name="role" id="select" class="form-control">
                                                    <option value="2">Admin</option>
                                                    <option value="3">RW</option>
                                                    <option value="4">KRT</option>
                                                    <option value="5">PKK</option>
                                                    <option value="6">Takmir</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div><!-- .animated -->
    </div>
</div><!-- .content -->
@endsection