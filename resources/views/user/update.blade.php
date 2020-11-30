@extends ('layouts.app')

@section('content')
    <main class="container">
        <div class="container text-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-4">
                Mettre à jour ton compte
            </div>
            <div class="col-4 text-center">
                <form class="col-12 mx-auto" action="{{ route('user.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="email">Nouvel email</label>
                        <input required type="text" class="form-control" name="email"
                               value="{{ $user->email }}" id="email">
                    </div>
                    <div class="form-group">
                        <label for="name">Nouveau nom</label>
                        <input required type="text" class="form-control" name="name" value="{{ $user->name }}" id="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>
            <div class="col-4">
            </div>
        </div>
    </main>
@endsection

{{--<form class="section" action="/modification-mot-de-passe" method="post">--}}
{{--    {{ csrf_field() }}--}}

{{--    <div class="field">--}}
{{--        <label class="label">Nouveau mot de passe</label>--}}
{{--        <div class="control">--}}
{{--            <input class="input" type="password" name="password">--}}
{{--        </div>--}}
{{--        @if($errors->has('password'))--}}
{{--            <p class="help is-danger">{{ $errors->first('password') }}</p>--}}
{{--        @endif--}}
{{--    </div>--}}

{{--    <div class="field">--}}
{{--        <label class="label">Mot de passe (confirmation)</label>--}}
{{--        <div class="control">--}}
{{--            <input class="input" type="password" name="password_confirmation">--}}
{{--        </div>--}}
{{--        @if($errors->has('password_confirmation'))--}}
{{--            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>--}}
{{--        @endif--}}
{{--    </div>--}}

{{--    <div class="field">--}}
{{--        <div class="control">--}}
{{--            <button class="button is-link" type="submit">Modifier mon mot de passe</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</form>--}}
