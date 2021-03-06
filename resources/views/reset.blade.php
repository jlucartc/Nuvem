@extends('master')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
          <div class="card-header">
              <h3>Resetar senha</h3>
          </div>
          <form class="form" action="{{ route('reset') }}" method="post">
            {{ csrf_field() }}
            <div class="card-body">
              <input class="form-control mb-3" type="hidden" name="token" value="{{ $token }}">
              <input class="form-control mb-3" type="email" name="email" value="" autocomplete="email" autofocus placeholder="Digite seu email">
              <input class="form-control mb-3" type="password" name="password" value="" autocomplete="password" placeholder="Digite a nova senha">
              <input class="form-control mb-3" type="password" name="password_confirmation" value="" autocomplete="password" placeholder="Confirme a nova senha">
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit" name="button">Resetar senha</button>
                @if($errors->any())
                <div class="alert-danger">
                  {{ $errors }}
                </div>
                @endif
            </div>
          </form>

        </div>
    </div>
  </div>
</div>
@endsection
