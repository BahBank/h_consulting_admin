
@extends('layouts.tpl')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if(Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif
            @if(Session::has('error'))
                <p class="alert alert-danger">{{ Session::get('error') }}</p>
            @endif
        </div>
    </div>

    <div class="col-12 col-sm-12">
        <div class="card card-dark card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                            <i class="nav-icon fas fa-list"></i>
                            Liste des rôles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">
                            <i class="nav-icon fas fa-plus"></i>
                            Ajouter un rôle
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">N°</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nom</th>
                                    {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nom</th> --}}
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Utilisateurs</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Permissions</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions</th>
                                </tr>
                            </thead>
                            <tbody>  <?php $i = 0; ?>
                                @foreach ($roles as $role)
                                    <tr role="row" class="odd">
                                        <td>{{ ++$i  }}</td>
                                        <td tabindex="0" class="sorting_1"><a href="#">{{$role->nom}}</a></td>
                                        <td>{{count($role->users)}}</td>
                                        <td>{{count($role->permissions)}}</td>
                                        <td class="text-center">
                                            @can('show', App\Role::class)
                                                @if(count($role->users))
                                                    <a href="{{ route('role-show', $role->id) }}"
                                                    class="btn btn-icon btn-circle">
                                                        {{-- <i class="glyphicon glyphicon-eye-open"></i> --}}
                                                        <span class="fas fa-eye-atl action my-fa-remove"></span>
                                                    </a>
                                                @endif
                                            @endcan

                                            @can('edit', App\Role::class)

                                                <a href="{{route('role.edit.form', $role->id) }}"
                                                class="btn btn-icon btn-circle ml-2">
                                                    <span class="fas fa-edit-atl action my-fa-remove"></span>
                                                </a>

                                            @endcan

                                            @can('delete', App\Role::class)
                                                @if(!count($role->users))
                                                    <a href="{{route('role.delete',$role->id)}}"
                                                        class="btn btn-icon btn-circle deleterole ml-2">
                                                        <span class="fas fa-trash-alt action my-fa-remove"></span>
                                                    </a>
                                                @endif
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                       </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <form action="{{ route('role-store') }}" method="post">
                            @csrf
                            @include('roles._form')
                            <div class="row">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-dark btn-block">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

    @endsection

