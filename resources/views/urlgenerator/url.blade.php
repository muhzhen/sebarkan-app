@extends('layouts.app')

@section('inputurl')

<div class="col-12 grid-margin stretch-card">
              <div class="card">

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              @if(session()->has('message'))
                  <div class="alert alert-success">
                      {{ session()->get('message') }}
                  </div>
              @endif

                <div class="card-body">
                  <h4 class="card-title">Url Input Generator</h4>
                  <p class="card-description">
                    Basic form for url input
                  </p>
                  <form class="forms-sample" method="post" action="{{route('simpanurl')}}">
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Masukan Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Tulis Nama Customer">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Masukan Url</label>
                      <input type="text" class="form-control" id="url" name="url" placeholder="https://sebarkan.id/">
                    </div>
                                                           
                    <button type="submit" class="btn mr-2" style="background-color:#82733C; color:white;">Submit</button>

                  </form>
                </div>
              </div>
            </div>
@endsection

@section('table')
<div class="col-lg-12 grid-margin stretch-card">
                
                
              <div class="card">

              @if(session()->has('urldelete'))
                  <div class="alert alert-danger">
                      {{ session()->get('urldelete') }}
                  </div>
              @endif

                <div class="card-body">
                  <h4 class="card-title">Table Input Generator</h4>
                  <p class="card-description">
                    Berisikan data url yang telah diisi sebelumnya
                  </p>
                  <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                      <thead>
                        <tr>
                         <th>
                            ID
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Url
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                      @foreach($urldata as $data) 
                        <tr>
                          <td>
                            {{$data->id}}
                          </td>
                          <td>
                            {{$data->nama}}
                          </td>
                          <td>
                            {{$data->url}}
                          </td>

                          <td>
                              <a href="{{route('hapusurl',$data->id)}}">
                                <button  type="button" class="btn btn-danger btn-rounded btn-icon" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">
                                  <i class="ti-trash"></i>
                                </button>
                              </a>
                              

                              <a href="{{route('lihaturl',$data->nama)}}">
                                <button type="button" class="btn btn-success btn-rounded btn-icon" >
                                  <i class="ti-eye" ></i>
                                </button>
                              </a>

                              

                             

                          </td>
                        </tr>
                      @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection