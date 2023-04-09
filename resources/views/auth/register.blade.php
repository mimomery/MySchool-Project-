@extends('layouts.app')

@section('content')
 <!-- Contact Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">inscription</h6>
                <h1 class="mb-5">S'inscrire</h1>
            </div>
            <div class="row g-4" >
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="POST" action="{{ route('register') }}" class="form-inline">
                    @csrf
                        <div class="row g-3">
                            <h6>En quel niveau souhaitez-vous inscrire votre enfant ?</h6>

                            <select name="niveau" id="niveau" class="form-control">
                                <optgroup label="Matternelle ">
                                    <option value="Matternelle-Petitsection" >Matternelle-Petit section</option>
                                    <option value="Matternelle-Moyennesection">Matternelle-Moyenne section</option>
                                    <option value="Matternelle-Grandesection">Matternelle-Grande section</option>
                                </optgroup>
                                    <optgroup label="Primaire">
                                    <option value="Primaire-CE1">Primaire-CE1</option>
                                    <option value="Primaire-CE2">Primaire-CE2</option>
                                    <option value="Primaire-CE3">Primaire-CE3</option>
                                    <option value="Primaire-CE4">Primaire-CE4</option>
                                    <option value="Primaire-CE5">Primaire-CE5</option>
                                    <option value="Primaire-CE6">Primaire-CE6</option>
                                </optgroup>
                                    <optgroup label="Collége">
                                    <option value="College-1">Collége-1ére année collége</option>
                                    <option value="College-2">Collége-2éme année collége</option>
                                    <option value="College-3">Collége-3éme année collége</option>
                                </optgroup>
                                <optgroup label="Lycée">
                                    <option value="TC">Tronc commun</option>
                                    <option value="TC1-Eco">1ére année Baccalauréat- Economie</option>
                                    <option value="Bac1-SE">1ére année Baccalauréat- Science Expérimentale</option>
                                    <option value="Bac1-SM">1ére année Baccalauréat- Science Mathematique </option>
                                    <option value="Bac2-Eco">2éme année Baccalauréat- Economie</option>
                                    <option value="Bac2-Sma">2éme année Baccalauréat- Science Mathematique A</option>
                                    <option value="Bac2-Smb">2éme année Baccalauréat- Science Mathematique B</option>
                                    <option value="Bac2-Pc">2éme année Baccalauréat- Science Physique</option>
                                    <option value="Bac2-Svt">2éme année Baccalauréat- Science de la Vie et de la Terre</option>
                                </optgroup>
                                @error('niveau')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </select>
                                <h6>Informations Etudiant</h6><br>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                    <label for="nom">Nom Élève</label>
                                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                                    <label for="prenom">Prénom Élève</label>
                                    @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label for="email">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <label for="password">Mot de Passe</label>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <label for="passwordConfirm">Confirmer Mot de Passe</label>
                                    @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="col-md-6 form-check ">
                                <input class="form-check-input" type="radio" name="sexeutilisateur" id="fille" value="fille">
                                <label class="form-check-label" for="fille">fille</label>
                            </div>
                            <div class="col-md-6 form-check">
                                <input class="form-check-input" type="radio" name="sexeutilisateur" id="garcon" value="garcon">
                                <label class="form-check-label" for="garçon">garçon</label>
                              </div>
                              <br>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="etab_prov" id="etab_prov" placeholder="Établissement de provenance">
                                    <label for="etab_prov">Établissement de provenance</label>
                                </div>             
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="date_naiss" name="date_naiss" placeholder="date de naissance">
                                    <label for="date_naiss">date de naissance</label>
                                    @error('date_naiss')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <h6>Informations Tuteur</h6>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nomtuteur" name="nomtuteur">
                                    <label for="nom">Nom Tuteur</label>
                                    @error('nomtuteur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="prenom" class="form-control" id="prenomtuteur" name="prenomtuteur">
                                    <label for="prenom">Prénom Tuteur</label>
                                    @error('prenomtuteur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="adresseutilisateur" name="adresseutilisateur">
                                    <label for="adresseutilisateur">Adresse Tuteur</label>
                                    @error('adresseutilisateur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="tele" name="telutilisateur" class="form-control" id="telutilisateur">
                                    <label for="tele">Téléphone Tuteur</label>
                                    @error('telutilisateur')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">inscription</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</section>








@endsection