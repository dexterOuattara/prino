@extends('layouts.main')

@section('content')
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area auto-height text-center text-normal text-light shadow dark-hard bg-fixed" style="background-image: url(assets/img/banner/bg-palm-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="content-box video-popup">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="content">
                            <!--made by vipul mirajkar thevipulm.appspot.com-->
                            <h1>
                                <a href="" class="typewrite" data-period="2000" data-type='[ "PRIX DE L’INNOVATION DU MINISTÈRE", "DU PÉTROLE, DE L’ENERGIE ET", "DES ÉNERGIES RENOUVELABLES" ]'>
                                    <span class="wrap"></span>
                                </a>
                            </h1>
                            <p class="text-black text-600">
                                Le Prix de l’innovation (#InnovMPEER) vise à encourager, soutenir et valoriser l’innovation
                                technologique, sociétale et de service pour le bien-être des populations. <br>
                                Il a pour but de favoriser l’émergence de nouvelles générations de chercheurs ou
                                prodiges, en soutenant leurs projets et innovations technologiques inhérents aux secteurs
                                Hydrocarbures et Energies. <br><br>
                                Ce prix est attribué dans chacune des catégories suivantes : <br>
                                - innovation Hydrocarbures <br>
                                - innovation Energie <br><br>
                                Vous êtes jeunes, vous êtes une startup, une association, venez faire valoir votre savoir,
                                votre talent pour une exploitation durable et à moindre coût des ressources énergétiques au bénéfice de la Côte d’Ivoire.
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn circle btn-primary btn-vert btn-inscrire btn-lg padding-left-right" data-toggle="modal" data-target="#myModal">
                            S'inscrire
                            </button>
                            <p>
                                <ul class="list-inline text-600">
                                    <li>Déjà inscrit ?</li>
                                    <li><a href="{{ route('login') }}" class="text-orange">Connectez-vous ici</a></li>
                                </ul>
                            </p>
                            <!-- <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button video-inline">
                                <i class="fa fa-play"></i>
                            </a> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-8 col-md-offset-2">
                        <div class="banner banner-carousel owl-carousel owl-theme">
                            <img alt="Thumb" src="assets/img/dashboard/1.png">
                            <img alt="Thumb" src="assets/img/dashboard/2.png">
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Contact Area  
    ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Contactez - <span>NOUS</span></h2>
                        <h4>Avez-Vous Des Questions?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 contact-form">
                    <h2>Parlons de vos préoccupations</h2>
                    <form action="http://validthemes.com/themeforest/dostart/assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nom" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Telephone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="commentaire" name="commentaire" placeholder="Parlons de vos préoccupations *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Envoyer Votre Message  <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 address">
                    <div class="address-items">
                        <ul class="info">
                            <li>
                                <h4>Notre Localisation</h4>
                                <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                <span>Ministère du Pétrole, de l’Energie et des Energies Renouvelables

                                    Immeuble. <br> SCIAM,  15ème Etage Plateau <br>
                                    BP 06 Abidjan - Côte d’Ivoire <br>
                                    Abidjan, Côte d'Ivoire</span>
                            </li>
                            <li>
                                <h4>Phone</h4>
                                <div class="icon"><i class="fas fa-phone"></i></div> 
                                <span>(+225) 20 21 50 03 </span>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                <span>prix.innovation@energie.gouv.ci</span>
                            </li>
                        </ul>
                        <h4>Reseaux Sociaux</h4>
                        <ul class="social">
                            <li class="facebook">
                                <a href="https://www.facebook.com/mpeerciv/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="pinterest">
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    
    <!-- Scroll button -->
    <a id="myScrollBtn-right" href="{{ url('/pdf/Calendrier_PDE19.pdf') }}" title="Télécharger le calendrié"><i class="fa fa-download"></i> Calendrier</a>
    <a id="myScrollBtn-left" href="{{ url('/pdf/PI-MPEER_Reglement des Prix_R9_11Sep2019.pdf') }}" title="Télécharger le reglement interieur"><i class="fa fa-download"></i> Règlement intérieur</a>
    <!-- /.Scroll button -->

@endsection