@extends('layouts.tpl_front')
@section('content')
        @include("layouts.header_page")
        <div id="app">
            <!-- Breadcrumb Section Start -->
            <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-breadcrumb-content">
                                <ul class="page-breadcrumb">
                                    <li><a href="{{ url('/') }}">Accueil</a></li>
                                    <li>Liste des offres emplois</li>
                                </ul>
                                <h1>Liste des offres emplois</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Section Start -->

            <!-- Job Listing Section Start -->
            <div class="job-listing-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
                <div class="container">
                    <div class="row g-0">

                        <div class="col-lg-4 order-lg-1 order-2 pr-55 pr-md-15 pr-sm-15 pr-xs-15">
                            <div class="sidebar-wrapper-two mt-sm-40 mt-xs-40">
                                <div class="common-sidebar-widget sidebar-two">
                                    <h2 class="sidebar-title">Chercher une offre </h2>
                                    <div class="sidebar-search-form-two">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" name="search" placeholder="Search...">
                                                <i class="lnr lnr-magnifier"></i>
                                            </div>
                                            <button type="submit" class="ht-btn theme-btn theme-btn-two w-100">Rechercher</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="common-sidebar-widget sidebar-two">
                                    <h2 class="sidebar-title">Experience</h2>
                                    <ul class="sidebar-cbx-list">
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="expericence" id="experience-cbx">
                                                <label for="experience-cbx">> 5 years </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="expericence" id="experience-cbx-two">
                                                <label for="experience-cbx-two"> 3-5 years</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="expericence" id="experience-cbx-two">
                                                <label for="experience-cbx-two"> &lt; 1-3 years</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="expericence" id="experience-cbx-two">
                                                <label for="experience-cbx-two"> 1-2 year</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-name-item">
                                                <input type="checkbox" name="expericence" id="experience-cbx-two">
                                                <label for="experience-cbx-two"> &lt; 1 year</label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="common-sidebar-widget sidebar-two">
                                    <h2 class="sidebar-title">Niveaux de formation</h2>
                                    <ul class="sidebar-cbx-list">
                                            <li  v-for="(grade,key) in listGrades" :key="key">
                                                <div class="filter-name-item">
                                                    <input type="checkbox" :name="grade.nom"
                                                    :id="grade.nom"
                                                    :value="grade.nom"
                                                    @input="filterListOffreEmplois('grade', $event)">
                                                    <label for="grade.nom">@{{grade.nom}}</label>
                                                </div>
                                            </li>
                                    </ul>
                                </div>
                                <div class="common-sidebar-widget sidebar-two">
                                    <h2 class="sidebar-title">Domaines</h2>
                                    <ul class="sidebar-cbx-list">
                                            <li v-for="(domaine,key) in listDomaines" :key="key">
                                                <div class="filter-name-item">
                                                    <input type="checkbox" :name="domaine.nom"
                                                    :id="domaine.nom"
                                                    :value="domaine.nom"
                                                    @input="filterListOffreEmplois('domaine', $event)">
                                                    <label for="$domaine.nom">@{{domaine.nom}}</label>
                                                </div>
                                            </li>

                                    </ul>
                                </div>
                                <div class="common-sidebar-widget sidebar-two">
                                    <h2 class="sidebar-title">Secteurs</h2>
                                    <ul class="sidebar-cbx-list">
                                            <li v-for="(secteur,key) in listSecteurs" :key="key">
                                                <div class="filter-name-item">
                                                    <input type="checkbox" :name="secteur.nom"
                                                    :id="secteur.nom"
                                                    :value="secteur.nom"
                                                    @input="filterListOffreEmplois('secteur', $event)">
                                                    <label for="secteur.nom">@{{secteur.nom}}</label>
                                                </div>
                                            </li>
                                    </ul>
                                </div>
                                <div class="common-sidebar-widget sidebar-two">
                                    <h2 class="sidebar-title">Villes</h2>
                                    <ul class="sidebar-cbx-list">
                                            <li v-for="(ville,key) in listVilles" :key="key">
                                                <div class="filter-name-item">
                                                    <input type="checkbox" :name="ville.nom"
                                                     :id="ville.nom"
                                                     :value="ville.nom"
                                                     @input="filterListOffreEmplois('ville', $event)">
                                                    <label for="ville.nom">@{{ville.nom}}</label>
                                                </div>
                                            </li>
                                    </ul>
                                </div>
                                <div class="common-sidebar-widget sidebar-two">
                                    <h2 class="sidebar-title">Type</h2>
                                    <ul class="sidebar-cbx-list">
                                            <li  v-for="(type,key) in listTypes" :key="key">
                                                <div class="filter-name-item">
                                                    <input type="checkbox" :name="type.nom"
                                                    :id="type.nom"
                                                    :value="type.nom"
                                                    @input="filterListOffreEmplois('type', $event)">
                                                    <label for="type.nom">@{{type.nom}}</label>
                                                </div>
                                            </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8 order-lg-2 order-1">

                            <div class="tab-content">
                                <div id="list" class="tab-pane fade show active">
                                    <div class="row" v-if="listOffresEmplois">
                                        {{-- @if($offresEmplois) --}}
                                            {{-- @foreach($offresEmplois as $item) --}}
                                            <div class="col-lg-12 mb-20" v-for="(item,key) in listOffresEmplois">
                                                <!-- Single Job Start  -->
                                                <div class="single-job style-two">
                                                    <div class="info-top">
                                                        <div class="job-image">
                                                            {{-- <a href="{{ route('details-offres-emplois',$item) }}"> --}}
                                                            <a href="#">
                                                                <img :src="item.image" alt="logo">
                                                            </a>
                                                        </div>
                                                        <div class="job-info">
                                                            <div class="job-info-inner">
                                                                <div class="job-info-top">
                                                                    <div class="saveJob for-listing">
                                                                        <!-- <span class="featured-label">featured</span> -->
                                                                        <a  class="job-type-label ml-20 mr-20">@{{ item.type_id }}</a>
                                                                        <a class="save-job" href="#quick-view-modal-container" data-toggle="modal">
                                                                            <i class="far fa-heart"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="title-name">
                                                                        <h3 class="job-title">
                                                                            {{-- <a href="{{ route('details-offres-emplois',$item) }}">{{ $item->titre }}</a> --}}
                                                                            <a :href="'details-offres-emplois/'+ item.id">@{{ item.titre }}</a>

                                                                        </h3>
                                                                        <div class="employer-name">
                                                                            <a href="#">@{{item.entreprise_id}}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="job-meta-two">
                                                                    <div class="field-datetime"><i class="lnr lnr-clock"></i> Posté il y'a environ @{{ item.date_publication }}</div>
                                                                    <div class="field-map"><i class="lnr lnr-map-marker"></i> <span v-for="(ville,key) in ville_id" :key="key">@{{ville}} </span></div>
                                                                </div>
                                                                    <div class="job-skill-tag" v-if="item.domaine_id">
                                                                            <a href="#" v-for="(domaine,key) in item.domaine_id" :key="key">@{{domaine }}</a>
                                                                    </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Job End -->
                                            </div>
                                            {{-- @endforeach --}}
                                        {{-- @endif --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Job Listing Section End -->
        </div>
        <script>

            const BASE_URL = window.location.origin;

            new Vue({
                el: "#app",
                data() {
                    return{
                       listOffresEmplois:[],
                       listVilles:[],
                       listTypes:[],
                       listSecteurs: [],
                       listDomaines:[],
                       listGrades:[],
                       listFormation:[],
                    }
                },
                mounted () {


                    this.getListeOffreEmploy();

                },
                methods: {

                    filterListOffreEmplois(type, $event){

                       if($event.target.checked){

                           if(type === "grade"){

                                let filterByGrade = this.listOffresEmplois.filter(offres => offres.grade_id === $event.target.value);
                                if(filterByGrade.length > 0){
                                   this.listOffresEmplois = filterByGrade;
                                }
                           }

                           if(type === "secteur"){

                               let filterBySecteur = this.listOffresEmplois.filter(offres => offres.secteur_id === $event.target.value);
                               if(filterBySecteur.length > 0){
                                    this.listOffresEmplois = filterBySecteur;
                               }
                           }

                           if(type === "type"){

                               let filterByType = this.listOffresEmplois.filter(offres => offres.type_id === $event.target.value);
                               if(filterByType.length > 0){
                                   this.listOffresEmplois = filterByType;
                               }
                           }

                           if(type === "ville"){

                               let filterByVille = this.listOffresEmplois.filter(offres =>
                               (offres.ville_id.filter(ville => ville === $event.target.value))
                               );

                               if(filterByVille.length > 0){
                                   this.listOffresEmplois = filterByVille;
                               }
                           }


                           if(type === "domaine"){

                               let filterByDomaine = this.listOffresEmplois.filter(offres =>
                               (offres.domaine_id.filter(domaine => domaine === $event.target.value))
                               );

                               if(filterByDomaine.length > 0){
                                   this.listOffresEmplois = filterByDomaine;
                               }
                           }
                       }

                    },


                    getListeOffreEmploy(){
                        let self = this;
                        axios.get(`${BASE_URL}/api/v1/offres-emplois`)
                        .then(function(response){
                            self.listOffresEmplois = response.data.offresEmplois;
                            self.listDomaines      = response.data.domaines;
                            self.listGrades        = response.data.grades;
                            self.listSecteurs      = response.data.secteurs;
                            self.listTypes         = response.data.types;
                            self.listVilles        = response.data.villes;
                            self.listFormation     = response.data.formations;
                        });
                    },

                }
            })


           </script>
@endsection
