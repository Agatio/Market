@extends('welcome')

@section('content')
    @parent

    @if(Auth::check())
        <h1>Espace utilisateur</h1>
        <form action="{{ url('/user/update') }}" method="post">  
                    <p><strong>Nom : </strong><span id="nm">{{ Auth::user()->name }} </span></p>
                    <p class="ema"><strong>Email  : </strong><span class="ema" id="em">{{ Auth::user()->email }}</span></p>
                    <button class="btn btn-warning" id="btn" onclick="Modif()">Modifier</button>
                </form> 
    @else
        <p>Vous n'avez pas accès à cette page privée</p>
    @endif

@endsection


<script>
    function Modif()
    {
        var nom = $("#nm").text();
        var email = $("#em").text();

        $("#nm").replaceWith('');
        $("#em").replaceWith('');

        $(".nom").replaceWith('<div class="row"><p class="col-xs-4"><strong>Nom : </strong></p> <input class="col-xs-4" type="text" name="Nom" value="' + nom + '"></div>');
        $(".ema").replaceWith('<div class="row"><p class="col-xs-4"><strong>Email : </strong></p> <input class="col-xs-4" type="text" name="Email" value="' + email + '"></div>');
        $("#btn").replaceWith('<input type="submit" class="btn btn-warning" name="submit" value=" Envoyer ">');

    }
</script>
