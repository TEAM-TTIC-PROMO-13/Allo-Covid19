@extends('layouts.appLayout')

@section('title')
    {{ "Accueil..." }}
@endsection

        @section('content')

            <div class="row">
                <div class="d-none d-md-block col-md-2 py-5">
                    Aside by : <strong>Onomo</strong>...
                </div>

                <div class="col-md-8">
                    <div class="border border-secondary py-5 my-5 px-5">
                        Graphe animé by : <strong>Ulrich + Alex</strong>...
                    </div>
                    <div class="row my-5">
                        <div id="img-defil" class="row">
                            <div id="carouselCaption" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselCaption" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselCaption" data-slide-to="1" ></li>
                                    <li data-target="#carouselCaption" data-slide-to="2"></li>
                                    <li data-target="#carouselCaption" data-slide-to="3"></li>
                                    <li data-target="#carouselCaption" data-slide-to="4"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="carousel-item  active">
                                        <a href=""><img src="../images/1.png" class="d-block w-100" alt="image1"></a>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'evenement 1</h5>
                                            <p>Details de l'evenement 1</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <a href=""><img src="../images/2.png" class="d-block w-100" alt="image2"></a>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'evênement 2</h5>
                                            <p>Details de l'evênement 2</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <a href=""><img src="../images/3.png" class="d-block w-100" alt="image3"></a>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'evenement 3</h5>
                                            <p>Details de l'evenement 3</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../images/4.png" class="d-block w-100" alt="image4">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'evenement 4</h5>
                                            <p>Details de l'evenement 4</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../images/5.png" class="d-block w-100" alt="image5">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Titre de l'evenement 5</h5>
                                            <p>Details de l'evenement 5</p>
                                        </div>
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#carouselCaption" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselCaption" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only"></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-md-block col-md-2 py-5">
                    Aside by : <strong>Onomo</strong> ...
                </div>
            </div>

            <!--Actualité du Cameroun...-->
            <h2 class="pt-5">Actualités Camerounaise</h2><hr>
            <div class="row px-2">
                <div id="carouselActualiteCameroun" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselActualiteCameroun" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselActualiteCameroun" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card shadow-lg">
                                            <img src="https://www.jeuneafrique.com/medias/2021/04/30/jad20210430-ass-cameroon-tribune-covid-01-592x296-1619786733.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h3 class="card-title text-primary">Au Cameroun, Covid-19 rime avec soupçons de détournement</h3>
                                                <p class="card-text">Alors qu’une deuxième vague frappe le pays de plein fouet, le débat autour du
                                                    coronavirus s’est déporté sur des soupçons de détournement des fonds consacrés à la riposte contre
                                                    la pandémie. Ce qui parasite la vaccination de masse engagée le 12 avril.</p>
                                                <a href="https://news.google.com/articles/CBMiZ2h0dHBzOi8vd3d3LmpldW5lYWZyaXF1ZS5jb
                                                20vMTE2MzQzNS9wb2xpdGlxdWUvYXUtY2FtZXJvdW4tY292aWQtMTktcmltZS1hdmVjLXNvdXBjb25zLWRlL
                                                WRldG91cm5lbWVudC_SAQA?hl=fr&gl=FR&ceid=FR%3Afr" class="btn btn-primary">Lire a suite</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card shadow-lg">
                                            <img src="https://www.jeuneafrique.com/medias/2021/03/11/jad20210311-ass-paul-biya3-592x296-1618316677.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h3 class="card-title text-primary">Cameroun : comment Paul Biya veut reprendre les « fonds Covid » en main</h3>
                                                <p class="card-text">Le chef de l’État Paul Biya a entrepris de confier à la présidence la gestion des fonds alloués
                                                    à la riposte au Covid-19. Une task force a été créée, mettant sous quasi-tutelle les ministères concernés,
                                                    et une enquête sur des « cas de malversations financières » est en cours.</p>
                                                <a href="https://news.google.com/articles/CBMicWh0dHBzOi8vd3d3LmpldW5lYWZyaXF1ZS5jb20vMTE1Mzg
                                                yNi9wb2xpdGlxdWUvY2FtZXJvdW4tY29tbWVudC1wYXVsLWJpeWEtdmV1dC1yZXByZW5kcmUtbGVzLWZvbmRzLWNvdmlkLWVuLW1haW4v0gEA?hl=fr&gl=
                                                FR&ceid=FR%3Afr" class="btn btn-primary">Lire la Suite</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card shadow-lg">
                                            <img src="https://www.jeuneafrique.com/medias/2021/03/11/jad20210311-ass-paul-biya3-592x296-1618316677.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h3 class="card-title text-primary">Cameroun : comment Paul Biya veut reprendre les « fonds Covid » en main</h3>
                                                <p class="card-text">Le chef de l’État Paul Biya a entrepris de confier à la présidence la gestion des fonds alloués
                                                    à la riposte au Covid-19. Une task force a été créée, mettant sous quasi-tutelle les ministères concernés,
                                                    et une enquête sur des « cas de malversations financières » est en cours.</p>
                                                <a href="https://news.google.com/articles/CBMicWh0dHBzOi8vd3d3LmpldW5lYWZyaXF1ZS5jb20vMTE1Mzg
                                                yNi9wb2xpdGlxdWUvY2FtZXJvdW4tY29tbWVudC1wYXVsLWJpeWEtdmV1dC1yZXByZW5kcmUtbGVzLWZvbmRzLWNvdmlkLWVuLW1haW4v0gEA?hl=fr&gl=
                                                FR&ceid=FR%3Afr" class="btn btn-primary">Lire la Suite</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card shadow-lg">
                                            <img src="https://www.jeuneafrique.com/medias/2021/04/30/jad20210430-tribune-sante-fistuleobstetricale-592x296.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h3 class="card-title text-primary">[Tribune] Santé publique : il est plus qu’urgent d’éliminer la fistule obstétricale</h3>
                                                <p class="card-text">Trop fréquente chez les femmes venant d’accoucher, la fistule obstétricale
                                                    est à la fois stigmatisante et handicapante. Pourtant, elle pourrait parfaitement
                                                    être éradiquée. Reste à en faire une priorité et à s’en donner les moyens.</p>
                                                <a href="https://news.google.com/articles/CBMie2h0dHBzOi8vd3d3LmpldW5lYWZyaXF1ZS5jb20vMTE2MzIyNS9zb2NpZXRlL3RyaWJ1bmUtc
                                                2FudGUtcHVibGlxdWUtaWwtZXN0LXBsdXMtcXV1cmdlbnQtZGVsaW1pbmVyLWxhLWZpc3R1bGUtb2JzdGV0cml
                                                jYWxlL9IBAA?hl=fr&gl=FR&ceid=FR%3Afr" class="btn btn-primary">Lire la Suite</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card shadow-lg">
                                            <img src="https://www.jeuneafrique.com/medias/2021/02/17/jad20210217-tribune-potentiel-pharmaceutique-592x296-1613560806.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h3 class="card-title text-primary">[Tribune] Qu’attendons-nous pour exploiter l’énorme potentiel
                                                    de l’industrie pharmaceutique en Afrique ?</h3>
                                                <p class="card-text">Renforcer l’offre en produits de qualité et parier sur des chaînes de valeurs régionales n’a rien d’une utopie.</p>
                                                <a href="https://www.jeuneafrique.com/1123060/economie/tribune-quattendons-nous-
                                                pour-exploiter-lenorme-potentiel-de-lindustrie-pharmaceutique-en-afrique/" class="btn btn-primary">Lire la Suite</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card shadow-lg">
                                            <img src="https://www.jeuneafrique.com/medias/2021/04/09/jad20210409-tribune-sante-003-592x296-1617956911.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h3 class="card-title text-primary">[Tribune] L’Afrique ne doit pas laisser le Covid-19 annuler des décennies de progrès dans la santé</h3>
                                                <p class="card-text">La crise liée au coronavirus menace les avancées enregistrées pour faire reculer la mortalité et la pauvreté dans le monde.
                                                    Les pays africains et la communauté internationale doivent donc faire de l’accès aux soins des plus vulnérables une priorité.</p>
                                                <a href="https://www.jeuneafrique.com/1151508/societe/tribune-lafrique-ne-doit-pas-laisser-le-covid-19-annuler-
                                                des-decennies-de-progres-dans-la-sante/" class="btn btn-primary">Lire la Suite</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <!--Actualité du Monde...-->
            <h2 class="mt-5">Actualités Mondiale</h2><hr>
            <div class="row px-2">
                <div id="carouselActualite" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselActualite" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselActualite" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="card shadow-lg">
                                        <img src="../images/im2.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-primary">
                                                Les services de vaccination se remettent lentement des perturbations causées par la COVID-19, mais
                                                des millions d'enfants restent exposés à des maladies mortelles, rappellent l’OMS, l’UNICEF et Gavi.</p>
                                            <a href="" class="btn btn-primary">Lire la Suite</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-lg">
                                        <img src="../images/img3.PNG" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-primary">
                                                La COVID-19 continue de perturber les services de santé essentiels dans 90 % des pays.</p>
                                            <a href="" class="btn btn-primary">Lire la Suite</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-lg">
                                        <img src="../images/img4.PNG" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-primary">
                                                L’Accélérateur ACT un an après</p>
                                            <a href="" class="btn btn-primary">Lire la Suite</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow-lg">
                                        <img src="../images/img5.PNG" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="card-text text-primary">
                                                Piloter la santé mondiale : Romain Grosjean annonce son soutien à la Fondation pour l’OMS.</p>
                                            <a href="" class="btn btn-primary">Lire la Suite</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card shadow-lg">
                                        <img src="https://www.jeuneafrique.com/medias/2021/04/30/jad20210430-tribune-sante-fistuleobstetricale-592x296.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3 class="card-title text-primary">[Tribune] Santé publique : il est plus qu’urgent d’éliminer la fistule obstétricale</h3>
                                            <p class="card-text">Trop fréquente chez les femmes venant d’accoucher, la fistule obstétricale
                                                est à la fois stigmatisante et handicapante. Pourtant, elle pourrait parfaitement
                                                être éradiquée. Reste à en faire une priorité et à s’en donner les moyens.</p>
                                            <a href="https://news.google.com/articles/CBMie2h0dHBzOi8vd3d3LmpldW5lYWZyaXF1ZS5jb20vMTE2MzIyNS9zb2NpZXRlL3RyaWJ1bmUtc
                                                2FudGUtcHVibGlxdWUtaWwtZXN0LXBsdXMtcXV1cmdlbnQtZGVsaW1pbmVyLWxhLWZpc3R1bGUtb2JzdGV0cml
                                                jYWxlL9IBAA?hl=fr&gl=FR&ceid=FR%3Afr" class="btn btn-primary">Lire la Suite</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card shadow-lg">
                                        <img src="https://www.jeuneafrique.com/medias/2021/02/17/jad20210217-tribune-potentiel-pharmaceutique-592x296-1613560806.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3 class="card-title text-primary">[Tribune] Qu’attendons-nous pour exploiter l’énorme potentiel
                                                de l’industrie pharmaceutique en Afrique ?</h3>
                                            <p class="card-text">Renforcer l’offre en produits de qualité et parier sur des chaînes de valeurs régionales n’a rien d’une utopie.</p>
                                            <a href="https://www.jeuneafrique.com/1123060/economie/tribune-quattendons-nous-
                                                pour-exploiter-lenorme-potentiel-de-lindustrie-pharmaceutique-en-afrique/" class="btn btn-primary">Lire la Suite</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card shadow-lg">
                                        <img src="https://www.jeuneafrique.com/medias/2021/04/09/jad20210409-tribune-sante-003-592x296-1617956911.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h3 class="card-title text-primary">[Tribune] L’Afrique ne doit pas laisser le Covid-19 annuler des décennies de progrès dans la santé</h3>
                                            <p class="card-text">La crise liée au coronavirus menace les avancées enregistrées pour faire reculer la mortalité et la pauvreté dans le monde.
                                                Les pays africains et la communauté internationale doivent donc faire de l’accès aux soins des plus vulnérables une priorité.</p>
                                            <a href="https://www.jeuneafrique.com/1151508/societe/tribune-lafrique-ne-doit-pas-laisser-le-covid-19-annuler-
                                                des-decennies-de-progres-dans-la-sante/" class="btn btn-primary">Lire la Suite</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endsection


