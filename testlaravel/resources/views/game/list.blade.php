<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>List Game</h1>
<ul>
    <li>
        <a href="#">Create New</a>
    </li>
    <li>
        <a href="/game/list">List Game</a>
    </li>
</ul>

<div class="row">
    @foreach($list_obj as $item)
    <div class="col-md-4">
        <a href="/game/{{$item -> id}}">{{$item -> name}}</a>
        <a href="/game/{{$item -> id}}">{{$item -> price}} $</a>
        <img src="{{$item -> images}}" alt="" style="width: 100px; border-radius: 50%">
    </div>
    @endforeach
</div>
{{--<ul>--}}
    {{--@foreach($list_obj as $item)--}}
        {{--<li>--}}
            {{--<a href="/game/{{$item -> id}}">{{$item -> name}}</a>--}}
            {{--<a href="/game/{{$item -> id}}">{{$item -> price}}</a>--}}
            {{--<img src="{{$item -> images}}" alt="" style="width: 100px; border-radius: 50%">--}}
        {{--</li>--}}
    {{--@endforeach--}}
{{--</ul>--}}
<script>

    var listDeleteButton = document.getElementsByClassName('btn-delete');
    for (var i = 0; i < listDeleteButton.length; i++) {
        listDeleteButton[i].onclick = function () {
            if(confirm('Are you sure ?')){
                var params = '_token={{csrf_token()}}';
                var currentId = this.id;
                var xhttp = new XMLHttpRequest();
                xhttp.open("DELETE", "/game/" + currentId, true);
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        alert('Delete success!');
                        window.location.reload();
                    }
                };
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(params);
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>