<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

</style>

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-warning alert-dismissible fade show">
    <strong style="font-family: 'Poppins', sans-serif;">please insert values of each fields !! </strong>{{$error}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <strong style="font-family: 'Poppins', sans-serif;">Congratulations !! </strong>{{session('success')}}
</div>
@endif
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
