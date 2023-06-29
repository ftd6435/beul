@extends('admin.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-6 mb-1">
                <div class="card post-bottom shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                      <h5 class="card-title">NOMBRE TOTAL DE POSTS</h5>
                      <h3>{{ count($posts) }}</h3>
                      <a href="{{ route('admin.post.index') }}" class="card-link">
                        <i class='bx bxs-right-arrow-alt'></i>
                        <span>Voir les posts</span>
                      </a>
                      <a href="{{ route('admin.post.create') }}" class="card-link">
                        <i class='bx bxs-right-arrow-alt'></i>
                        <span>Créé</span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-1">
                <div class="card category-bottom shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE TOTAL DE CATEGORIE</h5>
                        <h3>{{ count($categories) }}</h3>
                        <a href="{{ route('admin.category.index') }}" class="card-link">
                          <i class='bx bxs-right-arrow-alt'></i>
                          <span>Voir les catégories</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-6 mb-1">
                <div class="card tag-bottom shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE TOTAL DE TAG</h5>
                        <h3>{{ count($tags) }}</h3>
                        <a href="{{ route('admin.tag.index') }}" class="card-link">
                          <i class='bx bxs-right-arrow-alt'></i>
                          <span>Voir les tags</span>
                        </a>
                        <a href="{{ route('admin.tag.create') }}" class="card-link">
                          <i class='bx bxs-right-arrow-alt'></i>
                          <span>Créé</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-1">
                <div class="card user-bottom shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE TOTAL D'UTILISATEUR</h5>
                        <h3>{{ count($users) }}</h3>
                        <a href="#" class="card-link">
                          <i class='bx bxs-right-arrow-alt'></i>
                          <span>Voir les utilisateurs</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-6 mb-1">
                <div class="card post-bottom shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                      <h5 class="card-title">NOMBRE TOTAL DE REACTION</h5>
                      <h3>{{ count($reactions) }}</h3>
                      <a href="#" class="card-link">
                        <i class='bx bxs-right-arrow-alt'></i>
                        <span>Voir les reactions</span>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-1">
                <div class="card category-bottom shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE TOTAL DE REACTEUR</h5>
                        <h3>{{ count($clients) }}</h3>
                        <a href="#" class="card-link">
                          <i class='bx bxs-right-arrow-alt'></i>
                          <span>Voir les reacteurs</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-6 mb-1">
                <div class="card tag-bottom shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE TOTAL DE CONTACT</h5>
                        <h3>{{ count($contacts) }}</h3>
                        <a href="#" class="card-link">
                          <i class='bx bxs-right-arrow-alt'></i>
                          <span>Voir les contacts</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-1">
                <div class="card user-bottom shadow-lg p-2 mb-5 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE ABONNER NEWSLETTER</h5>
                        <h3>{{ count($newsletters) }}</h3>
                        <a href="#" class="card-link">
                          <i class='bx bxs-right-arrow-alt'></i>
                          <span>Voir les abonnés</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row bg-secondary pt-4">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color: white">L'état des 10 derniers posts</h3>
            </div>
        </div>
        <table class="table table-striped table-hover shadow p-3 mb-5 bg-body-tertiary">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Titre</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    @if ($key <= 9)
                        @if ($post->status == 'En attente')
                            <tr class="table-warning">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->status }}</td>
                            </tr>
                        @else
                            <tr class="{{($post->status == 'Poster') ? 'table-success' : 'table-danger' }}">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->status }}</td>
                            </tr>
                        @endif
                        
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color: white">Les posts publicitaire</h3>
            </div>
        </div>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="storage/images/news-700x435-4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="storage/images/news-700x435-4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="storage/images/news-700x435-4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="row pt-4">

    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <h3>Liste des 5 derniers commentaire</h3>
            </div>
        </div>
        <table class="table table-striped table-hover shadow p-3 mb-5 bg-body-tertiary">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Profile</th>
                    <th>Nom</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reactions as $key => $reaction)
                    @if ($key <= 4)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><img src="{{ $reaction->client->getClientImage() }}" class="profile-react" alt=""></td>
                            <td>{{ $reaction->client->fullname }}</td>
                            <td>{{ $reaction->content }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-lg-4">
        
    </div>
</div>

<div class="row bg-secondary pt-4">
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color: white">Les 5 derniers abonné</h3>
            </div>
        </div>
        <table class="table table-striped table-bordered shadow p-3 mb-5 bg-body-tertiary">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsletters as $key => $newsletter)
                    @if ($key <= 4)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $newsletter->email }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <h3 style="color: white">Les des 5 derniers contact</h3>
            </div>
        </div>
        <table class="table table-striped table-bordered shadow p-3 mb-5 bg-body-tertiary">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $key => $contact)
                    @if ($key <= 4)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $contact->fullname }}</td>
                            <td>{{ $contact->message }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection