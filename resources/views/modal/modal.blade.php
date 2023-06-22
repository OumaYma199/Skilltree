<form action="{{route('app_test')}}" method="post" enctype="multipart/form-data">
    @foreach ($skills as $skill)
        <div class="modal fade text-left" id="ModalInfos-{{ $skill->id }}" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" >{{ $skill->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Métier :</label>
                            <div class="col-sm-10">
                                <p class="modal-metier"></p>
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Description :</label>
                            <div class="col-sm-10">
                                <p class="modal-description">{{ $skill->description }}</p>
                            </div>
                            <label for="staticEmail" class="col-sm-2 col-form-label">Level :</label>
                            <div class="col-sm-10">
                                <p class="modal-level">{{ $skill->level }}</p>
                            </div>
                          </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="Bttn" ><a href="{{route('app_test')}}">Démarrer Test</a></button>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</form>

