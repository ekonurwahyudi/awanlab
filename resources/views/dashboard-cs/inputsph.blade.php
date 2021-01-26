@extends('/dashboard-cs/master')
@section('konten')
					<!--begin::Content-->
					<br/>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                                Silahkan Upload Surat Penawar Harga untuk <b>
                                            @foreach ($orders as $order)
                                            {{$order->order_namaalat}},
                                            <form class="d-inline" method="POST" action="/proses-inputsph/{{$order->user_id}}">
                                            @csrf
                                            @endforeach
                                            </b>
                                            </div>
                                            <br>
                                            <div class="custom-file">
                                                <input type="text" name="order_statussph" class="form-control">
                                                <!-- <input type="file" class="custom-file-input" id="customFile"/>
                                                <label class="custom-file-label" for="customFile">Pilih file SPH</label> -->
                                            </div>
                                            <br>
                                            <br>
                                            <button type="submit" class="btn btn-danger btn-sm">Input SPH</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br><br>
                    <br><br><br><br><br><br>
                    <!--end::Content-->
@endsection('konten')