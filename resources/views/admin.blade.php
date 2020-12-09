<?php

$images = File::allFiles(public_path('grafika/realizacje'));

for ($i=0; $i < count($images); $i++) { 
    $img[$i] =  $images[$i]->getFilename();
}

natsort($img);
$img = array_reverse($img);

?>

@extends('layouts.app')

@section('content')

<style>
    section {
        background-color: #030a14;
    }

    h1 {
        color: #263b64;
        background-color: #fff;
    }

    h3 {
        color: #263b64;
        background-color: #fff;
    }

    .images {
        height: 130px;
        box-shadow: 0 0 4px 0 white;
        transition: 0.5s;
    }

    .images:hover {
        cursor: zoom-in;
        box-shadow: 0 0 4px 2px white;
        transform: scale(1.02);
    }

    #mainImg {
        height: 420px;
        box-shadow: 0 0 8px 2px white;
        border-radius: 5px;
        cursor: zoom-in;
        transition: 0.8s;
    }

    #mainImg:hover {
        box-shadow: 0 0 10px 3px white;
    }

    @media screen and (max-width: 576px) {
        #mainImg {
            height: 360px;
        }
    }

    @media screen and (max-width: 400px) {
        #mainImg {
            height: 320px;
        }
    }

    .dustbin {
        position: absolute;
        top: 0px;
        right: 10px;
        width: auto;
        height: auto;
        z-index: 2000;
        font-size: 50px;
        color: red;
    }

    .dustbin button {
        border: none;
        background-color: rgb(0, 0, 0, 0);
        color: red;
    }
</style>

<section>
    <h1 class="text-center text-uppercase pt-5 mb-0 font-weight-bold"> <b style="color: #942127">-</b> Admin
        <b style="color: #942127">-</b></h1>
    <h3 class="text-center text-uppercase pb-5 pt-2 font-weight-bold"> <b style="color: #942127">-</b> galeria zdjęć
        <b style="color: #942127">-</b></h3>

    <div class="container py-5">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <form action="{{ url('add') }}" method="POST" class="text-white mb-4" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1" style="font-size: 22px; text-transform: uppercase">Dodaj
                    zdjęcie</label>
                <p class="text-danger font-weight-bold"> <u> NAZWY ZDJĘĆ NIE MOGĄ MIEĆ SPACJI W NAZWIE </u> </p>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1"
                    style="font-size: 17px">
            </div>
            <button type="submit" class="btn btn-lg btn-success"> Dodaj </button>
        </form>

        <div class="row justify-content-center">
            <div class="col-12 row justify-content-center mb-4">
                <div class="col-12 col-sm-12 col-md-10 col-xl-8">
                    <img src="{{ asset('grafika/strona_główna_realizacje/IMG_7115.jpg') }}" alt="" class="w-100"
                        data-enlargeable id="mainImg">
                </div>
            </div>

            <div class="col-12 row justify-content-center">
                @foreach ($img as $image)
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mb-4 position-relative">
                    <img src="{{ asset('grafika/realizacje/' . $image) }}" alt="" class="w-100 images" data-enlargeable>
                    <div class="dustbin">
                        <form action="{{ url('delete') }}" method="POST">
                            @csrf
                            <input type="text" name="file" value="{{ $image }}" class="d-none">
                            <button type="submit"> <i class="fas fa-trash-alt"> </i> </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section>

<script>
    $("img[data-enlargeable]").after();

$("img[data-enlargeable]")
    .addClass("img-enlargeable")
    .click(function() {
        var src = $(this).attr("src");
        var modal;
        function removeModal() {
            modal.remove();
            $("body").off("keyup.modal-close");
        }
        modal = $("<div>")
            .css({
                background: "RGBA(0,0,0,.5) url("+ src + ") no-repeat center",
                backgroundSize: "contain",
                width: "100%",
                height: "100%",
                position: "fixed",
                zIndex: "10000",
                top: "0",
                left: "0",
                cursor: "zoom-out"
            })
            .click(function() {
                removeModal();
            })
            .appendTo("body");
        //handling ESC
        $("body").on("keyup.modal-close", function(e) {
            if (e.key === "Escape") {
                removeModal();
            }
        });
    });

</script>

@endsection