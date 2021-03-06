@extends('layouts.tpl_front')
@section('content')
        @include("layouts.header_page")

        <!-- Services Content Section Start -->
        <div id="services" class="personal-skill-section section bg-image-proparty bg_image--2 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
            <div class="container">
                <h2>Nos services</h2>
                <div class="row g-0 border-top-left">

                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/about1.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title">Management des ressources humaines</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque similique rem
                                     necessitatibus aperiam officiis qui.
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/about2.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title">Développement organisationnel</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque similique rem
                                     necessitatibus aperiam officiis qui.
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                        <!-- Single Personal Skill Start -->
                        <div class="single-personal-skill">
                            <div class="skill-icon">
                                <img src="assets/images/icons/about3.png" alt="">
                            </div>
                            <div class="personal-skill-content">
                                <h4 class="title">Développement personnel et professionnel</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque similique rem
                                     necessitatibus aperiam officiis qui.
                                </p>
                            </div>
                        </div>
                        <!-- Single Personal Skill End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Content Section End -->


        <!-- About Content Section Start -->
        <div id="who" class="about-content-section section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Qui nous sommes ?</h2>
                        <div class="about-content">
                            <p>
                                Créé en 2012, le cabinet Global Vision Guinée Sarl avait pour mission d’accompagner ses clients dans la définition de leurs besoins et leur apporter les solutions adaptées et créatrices
                                de valeur ajoutée. Avec le temps et les expériences enrichissantes accumulées, le cabinet souhaite se donner un positionnement stratégique sur le marché guinéen et ouest-africain en
                                particulier, et de manière générale sur le marché africain, en devenant un partenaire d’affaire privilégié des entreprises et institutions dans les domaines du management du capital
                                humain, de la stratégie organisationnelle et de la communication.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('assets/front/images/about.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Content Section End -->


@endsection
