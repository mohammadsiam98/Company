@extends('Layout.mother_layout')
@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-5">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-title">
                            <h2>FAQ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Faqs-->
<section class="pad-tb bg-gradient5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <h2 class="mb0">FAQS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt60">
                <div id="accordion2" class="accordion">
                    <div class="card-1 bg-gradient">
                        <div class="card-header" id="faq4">
                            <button class="btn btn-link btn-block text-left card-title" type="button" data-toggle="collapse" data-target="#collapse-d" aria-expanded="true" aria-controls="collapse-d">
                                Incomprehensibility or readability? That is the question.
                            </button>
                        </div>
                        <div id="collapse-d" class="card-body collapse show" aria-labelledby="faq4" data-parent="#accordion2">

                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch etc.</p>
                        </div>
                    </div>
                    <div class="card-1 bg-gradient">
                        <div class="card-header" id="faq5">
                            <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-e" aria-expanded="true" aria-controls="collapse-e">
                                Origin and meaning of the Lorem Ipsum text
                            </button>
                        </div>
                        <div id="collapse-e" class="card-body collapse" aria-labelledby="faq5" data-parent="#accordion2">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                    <div class="card-1 bg-gradient">
                        <div class="card-header" id="faq6">
                            <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-f" aria-expanded="true" aria-controls="collapse-f">
                                Automatic recognition of Lorem Ipsum.
                            </button>
                        </div>
                        <div id="collapse-f" class="card-body collapse" aria-labelledby="faq6" data-parent="#accordion2">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Faqs-->


@endsection
