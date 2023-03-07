@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mt-5">
                <h1>Apa itu remastering linux!</h1>
                <img src="https://source.unsplash.com/500x300?news" class="img-fluid my-3">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, quia minus illum reprehenderit expedita
                    molestias maiores qui ad tenetur sequi ipsam. Quisquam pariatur similique soluta ipsum aliquam quia,
                    aperiam voluptatibus, dicta assumenda tempore id expedita, cum neque est ex laudantium iure ad voluptas
                    quis maiores quas. Voluptas quae voluptatem corrupti possimus aspernatur consequuntur nostrum ut fugit
                    asperiores architecto culpa molestias adipisci optio qui, sequi facere quas alias enim iure similique
                    voluptate minima eos dolorum reprehenderit? Quia possimus aut in cumque, ut repudiandae veritatis
                    voluptates dolorem totam magnam deleniti iusto veniam sit omnis quaerat beatae. Nostrum consequuntur
                    laboriosam dicta reprehenderit nisi!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi facere quis quidem necessitatibus eum
                    impedit doloribus debitis nihil sequi eos quia quam eveniet illo autem, enim, magni corporis optio,
                    mollitia possimus dicta perferendis fuga voluptatem sapiente rem. Ducimus doloremque illo officiis nemo
                    eos, tempore optio libero minus? Voluptates inventore voluptatem, officiis et perspiciatis aliquam odit
                    harum molestias quidem porro suscipit voluptatum explicabo ab accusantium iure? Doloribus natus neque
                    provident, placeat voluptate voluptatibus ipsum et modi ex optio esse sunt debitis adipisci, facilis
                    saepe! Ratione dolores obcaecati debitis repellat iure voluptates reprehenderit dignissimos eum. Fugit
                    mollitia consequuntur sapiente vitae architecto dolorum provident illo placeat, inventore officia,
                    tempora hic sint, unde saepe? Minus eius unde, eum, reprehenderit, adipisci et optio non minima nostrum
                    beatae aspernatur commodi. Omnis corrupti non suscipit placeat unde ea beatae ab ex reiciendis iusto
                    nihil a, magni amet repudiandae eos, possimus facere nisi alias saepe rerum in. Voluptate corrupti ab
                    error, aliquid nihil quam, omnis, facilis tempora deleniti amet doloremque excepturi neque quo quaerat
                    debitis sunt vitae ex expedita quisquam itaque in voluptates veritatis. Cum sapiente quidem repellendus
                    assumenda dolores veritatis quibusdam ipsa non distinctio. Ullam omnis saepe vitae corrupti similique
                    perferendis earum aperiam, optio autem ex, eum placeat enim sint odit fugiat in maiores labore deserunt
                    itaque commodi! Et ab nam, consectetur rerum esse nulla dolore ex in. Et maiores eos dignissimos
                    architecto iusto doloribus. Molestias commodi dolore, nemo eligendi placeat ducimus odit deserunt, autem
                    aut minus quod non repudiandae, consequuntur provident alias tempore a minima! Vero laudantium cum
                    doloribus? Non neque ab soluta commodi nisi fuga adipisci ipsum eius unde velit eos fugit modi aliquid,
                    officiis quae sequi vel in nostrum dicta tempora asperiores libero sapiente totam eligendi. Nemo vitae,
                    voluptates, eaque distinctio quisquam repellendus quidem sequi dolor qui dicta voluptas labore nobis
                    doloribus tempore aliquam. Vel soluta distinctio consequatur eos eius veniam, eum, nulla recusandae
                    consectetur necessitatibus voluptatem libero. Possimus error velit quidem minima veritatis mollitia
                    alias labore maxime, optio eaque ut exercitationem deserunt! Ipsum, voluptatem quidem illo error velit
                    quod magni, sequi tenetur officiis maiores labore alias fugit? Ratione, recusandae. Accusamus laboriosam
                    quisquam perferendis id, voluptatum ullam vero? Repudiandae fuga molestias rem tenetur reiciendis
                    obcaecati quibusdam, libero dolor minus minima eos amet ad nisi esse! Reiciendis ex eligendi quisquam
                    corporis pariatur quia, vel non et at molestiae, sit quis distinctio quaerat odio nemo quod quasi velit
                    cumque necessitatibus officia quo delectus commodi alias. Aperiam eos consequatur omnis dolorum cum
                    maiores natus recusandae ducimus odio delectus laboriosam, atque harum et aliquam assumenda
                    necessitatibus accusamus maxime inventore? Dolorum eos eius, in vero iure necessitatibus ea ex aut sed
                    numquam dolor quia voluptate unde deleniti repellendus impedit, soluta facere esse consequatur
                    voluptatibus veritatis eligendi odit. Ipsam similique quo neque, aspernatur quae quidem officia
                    reprehenderit labore incidunt dolorem? Placeat vel animi est quam laudantium inventore et eveniet
                    laborum! Unde, est sit hic ratione quia doloremque eveniet corporis nulla architecto quam beatae maiores
                    laudantium nesciunt esse expedita corrupti velit, ad quas et ullam maxime odit. Nemo unde repellendus
                    provident.</p>

                <div>
                    <h3>5 Komentar</h3>
                    @foreach (range(1, 10) as $item)
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <img src="https://source.unsplash.com/40x40?user" class="rounded-circle" alt="user_profile">
                                <div class="ms-2">
                                    <div>
                                        <span>Dewa Sheva Dzaky</span>
                                        <span>12 Jun 2022</span>
                                    </div>
                                    <div class="text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, cupiditate!
                                    </div>
                                    <div class="mt-2">
                                        <span class="badge text-bg-primary">Balas</span>
                                        <span class="badge text-bg-warning">Edit</span>
                                        <span class="badge text-bg-danger">Hapus</span>
                                        <span class="badge text-bg-dark">
                                            <i class="bi bi-heart-fill"></i> (2)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start ms-4 mt-2">
                                <img src="https://source.unsplash.com/40x40?user" class="rounded-circle" alt="user_profile">
                                <div class="ms-2">
                                    <div>
                                        <span>Dewa Sheva Dzaky</span>
                                        <span>12 Jun 2022</span>
                                    </div>
                                    <div class="text-secondary">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, cupiditate!
                                    </div>
                                    <div class="mt-2">
                                        <span class="badge text-bg-primary">Balas</span>
                                        <span class="badge text-bg-warning">Edit</span>
                                        <span class="badge text-bg-danger">Hapus</span>
                                        <span class="badge text-bg-dark">
                                            <i class="bi bi-heart-fill"></i> (2)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 mt-5 sticky-top ps-5" style="height: 50vh; top: 80px;">
                <img src="https://source.unsplash.com/70x70?user" class="rounded-circle">
                <h3 class="poppins mt-2 fw-bold">Dewa Sheva Dzaky</h3>
                <p>Halo semuanya!!!</p>
            </div>
        </div>
    </div>
@endsection

@push('footer')
    @include('partials.footer')
@endpush
