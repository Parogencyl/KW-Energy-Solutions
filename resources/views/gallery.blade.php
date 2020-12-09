<?php

$images = File::allFiles(public_path('grafika/realizacje'));

for ($i=0; $i < count($images); $i++) { 
    $img[$i] =  $images[$i]->getFilename();
}

natsort($img);
$img = array_reverse($img);

?>

@extends('layouts.nav')

@section('content')

<style>
    section {
        background-color: #030a14;
    }

    h1 {
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
</style>

<section>
    <h1 class="text-center text-uppercase py-5 font-weight-bold"> <b style="color: #942127">-</b> galeria zdjęć
        <b style="color: #942127">-</b></h1>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 row justify-content-center mb-4">
                <div class="col-12 col-sm-12 col-md-10 col-xl-8">
                    <img src="{{ asset('grafika/strona_główna_realizacje/IMG_7115.jpg') }}" alt="Panele fotowoltaiczne"
                        class="w-100" data-enlargeable id="mainImg">
                </div>
            </div>

            <div class="col-12 row justify-content-center">
                @foreach ($img as $image)
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2 mb-4">
                    <img src="{{ asset('grafika/realizacje/'.$img) }}" alt="{{ $image }}" class="w-100 images"
                        data-enlargeable>
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