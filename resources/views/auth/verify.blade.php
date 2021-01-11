
@extends('/dashboarduser.master')
@section('konten')
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Silahkan Verifikasi Email Anda  <span style="color:red;">  &nbsp;&nbsp;{{ Auth::user()->email }}</span></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verikasi terbaru sudah kami kirim ke email') }}
                        </div>
                    @endif

                    {{ __('Link verifikasi telah kami kirim ke email anda. Jika tidak ada di pesan masuk, silahkan cek spam.') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kirim link verifikasi terbaru') }}</button>.
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
@endsection
