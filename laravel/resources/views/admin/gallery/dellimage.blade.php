@extends('admin.admin')

@section('content')
    <style>


        .nonselected {
            width: 140px;
            height: 150px;
            border: 1px solid #337AB7;
            border-radius: 10px;
            overflow: hidden;
            float: left;
            margin: 10px;
            position: relative;
        }

        .gallery p {
            margin-top: 30px;
            position: relative;
            margin-left: -125px;
            font-size: 100px;
            opacity: 0.9;
            color: #337AB7;
            float: left;
            display: none;

        }


    </style>
    <form method="POST" action="/admin/gallery/dellimage">
        @foreach ($images as $image)
            <label>
                <div class="gallery">

                    <input value="{{ $image->id }}" style="display:none" name="id[]" type="checkbox"/>
                    <img class="nonselected" src="/laravel/public/assets/images/gallery/{{ $image->photo }}"/>

                    <p class="fa fa-check"></p>
                </div>
            </label>
        @endforeach
        <input type="submit" class="btn btn-primary" name="delete" value="Изтриване">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

    <script type="text/javascript" src="/assets/admin/js/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".gallery input").click(function (e) {
                if ($(this).is(':checked')) {
                    $(this).next().next().show();
                } else {
                    $(this).next().next().hide();
                }
            });
        });
    </script>

@endsection