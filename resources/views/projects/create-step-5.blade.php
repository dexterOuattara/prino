@extends('layouts.user')

@section('content')
<div class="container">

        <div class="alert alert-primary" role="alert">
                Pièces Jointes
        </div>
            
    <div class="row justify-content-center">

        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}
            <form>

                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Règlement paraphé Signé (A télécharger)</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div> 
                            
                            <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Déclaration Fiscale d’Existence <br> (DFE)</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>   
                    </div>   
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Business Plan à 3 ans (.xlsx)</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            
                            <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Plan de financement projet (.docx)</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>  
                    </div>  

                            <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Présentation Powerpoint du Projet</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>  

                <button type="submit" class="btn btn-primary">Suivant</button>
            </form>

    </div>
</div>
@endsection
